<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        // HTML of a tree node
        $template = view('admin.category._partials.node')->render();
       // dd($template);
        // Function to render a tree node
		$render = function (array $node) use ($template) {
            $template = str_replace('category_id', $node['id'], $template);

            return str_replace('category_name', $node['name'], $template);
     };

        $categories = $this->getAllCategories()->toHierarchy()->toArray();
        //dd($categories);
        $chunks = array_chunk($categories, 1);

        // Add one tree per chunk
        $trees = [];
        foreach($chunks as $chunk)
            $trees[] = tree($chunk, $render);

        return view('admin.category.index')->withTrees($trees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->getAllCategories();
        return view('admin.category.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request){

//        $this->validate($request, [
//            'name' => 'required|max:500'
//
//        ]);

        if($parentId = intval($request->parent_id)) {
            $node = Category::create(['name' => $request->name]);
            $node->makeChildOf(Category::findOrFail($parentId));
        }
        else{
            $node = Category::create(['name' => $request->name]);

        }
//
//        $category = Category::create([
//            'name'     => $request->name,
//            'parent_id'    => $request->parent_id,
//        ]);

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $category = Category::findOrFail($id);
        return view('admin.category.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Category::findOrFail($id);
        view()->share('categories', \App\Category::dropdown());
        return view('admin.category.edit')->withItem($item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {

        $updateNode = Category::find($id);

        $updateNode->fill($request->input());
//        dd($updateNode);
        $updateNode->save();
        // If no 'parent_id' was provided it means the resource is a root node
        if($parentId = intval($request->parent_id)) {
            $updateNode->makeChildOf(Category::findOrFail($parentId));
        }
        else {
            $updateNode->makeRoot();
        }
        return redirect()->route('categories.index');
    }

    /**
     * Remove the Category from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        // Make sure resource exists
        $resource = Category::findOrFail($id);
//        dd($resource);
        if(with($products = $resource->products)->count())
        {
            // Check if there is actually a parent category to be used as destination
            if($resource->isRoot())
            {
                Session::flash('error', _('The category cannot be deleted because it has directly assigned pages'). '. '. _('Please move those pages to another category first'));

                return redirect()->back()->withInput();
            }
            dd(Session::class);
            Product::where('category_id', $resource->id)->update(['category_id' => $resource->parent->id]);
        }
        // Move subcategories to the parent
        foreach($resource->children as $children)
            ($resource->isRoot()) ? $children->makeRoot() : $children->makeChildOf($resource->parent);

        // Delete from storage
        if($resource->delete())
        {
            $messageType = 'success';
            $message = sprintf(_('%s successfully deleted'), $resource);
            $response = redirect()->route('categories.index');
        }
        else
        {
            $messageType = 'error';
            $message = _('Unable to delete resource');
            $response = redirect()->back();
        }

        Session::flash($messageType, $message);

        return $response;

    }

    public function getAllCategories(){
        return Category::all();
    }


}
