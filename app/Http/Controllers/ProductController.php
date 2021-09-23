<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = DB::table('categories')->where(['status'=>1])->get();
        return view('products.create',compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name'=>'required',
           'slug'=>'required|unique:products',
           'brand'=>'required',
           'model'=>'required',
           'short_desc'=>'required',
           'desc'=>'required',
           'keywords'=>'required',
           'technical_specification'=>'required',
           'uses'=>'required',
           'warranty'=>'required',
           'image'=>'required|mimes:jpeg,png,gif,jpg'
       ]);

       $products = new Product();
    if($request->hasFile('image')){
        $image = $request->file('image');
        $ext = $image->extension();
        $image_name = time().'.'.$ext;
        $image->storeAs('/public/media',$image_name);
        $products->image = $image_name;
    }
       $products->category_id = $request->post('category_id');
       $products->name = $request->post('name');
       $products->slug = $request->post('slug');
       $products->brand = $request->post('brand');
       $products->model = $request->post('model');
       $products->short_desc = $request->post('short_desc');
       $products->desc = $request->post('desc');
       $products->keywords = $request->post('keywords');
       $products->technical_specification = $request->post('technical_specification');
       $products->uses = $request->post('uses');
       $products->warranty = $request->post('warranty');
       $products->status = 1;
       $products->save();

       $request->session()->flash('message','Product Saved Successfully');
       return redirect('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $products = Product::find($id);
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $products = Product::find($id);
        $categories = DB::table('categories')->where(['status'=>1])->get();
        return view('products.edit',compact('products','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required',
            'slug'=>'required|unique:products,slug,' .$request->id,
            'brand'=>'required',
            'model'=>'required',
            'short_desc'=>'required',
            'desc'=>'required',
            'keywords'=>'required',
            'technical_specification'=>'required',
            'uses'=>'required',
            'warranty'=>'required',
            // 'image'=>'required'
        ]);
 
        $products = Product::find($id);
        // $products->id = $request->post('id');
        $products->category_id = $request->post('category_id');
        $products->name = $request->post('name');
        $products->slug = $request->post('slug');
        $products->brand = $request->post('brand');
        $products->model = $request->post('model');
        $products->short_desc = $request->post('short_desc');
        $products->desc = $request->post('desc');
        $products->keywords = $request->post('keywords');
        $products->technical_specification = $request->post('technical_specification');
        $products->uses = $request->post('uses');
        $products->warranty = $request->post('warranty');
        $products->image = $request->post('image');
        $products->status = 1;
        $products->save();
 
        $request->session()->flash('message','Product Updated Successfully');
        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $products = Product::find($id);
        $products->delete();

        $request->session()->flash('message','Product Deleted Successfully!!');
        return redirect('product');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function status(Request $request,$status, $id)
    {
        $products = Product::find($id);
        $products->status = $status;
        $products->save();

        $request->session()->flash('message','Product Status Updated Successfully!!');
        return redirect('product');
    }
}
