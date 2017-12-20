<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products = Product::all();
        return view('admin.product.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::pluck('name', 'id');
        view()->share('categories', Category::dropdown());
        return view('admin.product.create')->withBrands($brands);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

        // create object and set properties
        $category = Category::findOrFail($request->parent_id);
        $p = $this->setAttributeData(json_decode($category->category_attributes));


        $product = new Product();
        $product->name = $request->name;
        $product->category_id = $request->parent_id;
        $product->brand_id = $request->brand_id;
//        $product->attributes = json_encode([
//            'processor' => $request->processor,
//            'sensor_type' => $request->sensor_type,
//            'monitor_type' => $request->monitor_type,
//            'scanning_system' => $request->scanning_system,
//        ]);



//        $category = Category::find($product->category_id);
//
//        $category->products()->attach($product->id);
//        dd($category);
        // save to database
        $product->save();
        // show the created camera
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        // Get products this category
        $brand = $product->brand;
        view()->share(compact('brand'));
        return view('admin.product.show')->withProduct($product);
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
    
    public function setAttributeData($data){
        foreach ($data as $item){
            dd($item);
        }
    }
}
