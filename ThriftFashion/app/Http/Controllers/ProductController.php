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
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat_id = DB::table('categories')->get();
        $brand_id = DB::table('brands')->get();
        return view('dashboard.product.create',['cat_id'=>$cat_id],['brand_id'=>$brand_id]);
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
            'product'=>'required|unique:products',
            'cat_id'=>'required',
            'brand_id'=>'required',
            'desc'=>'required',
            'discounted_price'=>'required',
            'image'=>'required',
            'stock'=>'required',
            'status'=>'required',
        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('admin/assets/img');
        

        $create  = new Product();
        $create->product = $request->product;
        $create->cat_id = $request->cat_id;
        $create->brand_id = $request->brand_id;
        $create->desc = $request->desc;
        $create->price = $request->price;
        $create->discount = $request->discount;
        $create->discounted_price = $request->discounted_price;
        $create->image = $path;
        $create->stock = $request->stock;
        $create->status = $request->status;
        $create->save();

        return redirect('dashboard/product/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $show =DB::table('categories')
        ->join('products','products.cat_id','=','categories.id')
        ->join('brands','brands.id','=','products.brand_id')
        ->select('products.product','products.id','categories.category','brands.brand','products.desc','products.price','products.discount','products.discounted_price','products.stock','products.image','products.status')
        ->get();
        

        return view ('dashboard.product.show',['show'=>$show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product,$id)
    {
        $cat_id = DB::table('categories')->get();
        $brand_id = DB::table('brands')->get();
        $edit = Product::find($id);
        return view ('dashboard.product.edit',['edit'=>$edit,'cat_id'=>$cat_id,'brand_id'=>$brand_id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $request->validate([
            'product'=>'required|unique:products',
            'cat_id'=>'required',
            'brand_id'=>'required',
            'desc'=>'required',
            'price'=>'required',
            'image'=>'required',
            'stock'=>'required',
            'status'=>'required',
        ]);

        $name = $request->file('image')->getClientOriginalName();
        $path = $request->file('image')->move('admin/assets/img');
        

        $create  = Product::find($id);
        $create->product = $request->product;
        $create->cat_id = $request->cat_id;
        $create->brand_id = $request->brand_id;
        $create->desc = $request->desc;
        $create->price = $request->price;
        $create->discount = $request->discount;
        $create->discounted_price = $request->discounted_price;
        $create->image = $path;
        $create->stock = $request->stock;
        $create->status = $request->status;
        $create->update();

        return redirect('dashboard/product/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product,$id)
    {
        $delete = Product::find($id);
        $delete->delete();
        return redirect('dashboard/product/show');
    }
}
