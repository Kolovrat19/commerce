<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $categories = Category::all()->toHierarchy()->toArray();
        $chunks = array_chunk($categories, 1);

        // Add one tree per chunk
        $trees = [];
        foreach($chunks as $chunk)
            $trees[] = tree($chunk);

        return view('admin.category.index')->withTrees($trees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.category.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
//        dd($request);
        $this->validate($request, [
            'name' => 'required|max:500'

        ]);
//        dd($request) ;
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

        return response()->json($node);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}
