<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class WebsiteController extends Controller
{
    public function index(){
        $deal =DB::table('deals')
        ->join('products','products.id','=','deals.product_id')
        ->get();
        $product = DB::table('products')->get();
        return view ('website.index',['product'=>$product],['deal'=>$deal]);
    }


    public function contact(){
        return view ('website.contact');
    }

    public function about(){
        return view ('website.about_us');
    }

    public function order(){
        $id = Auth::user()->id;
        $orders = DB::table('orders')
        ->where('orders.status','1')
        ->where('orders.user_id',$id)
        ->get();
        return view ('website.order',['orders'=>$orders]);
    }

    public function feedback(){
        return view ('website.feedback');
    }


    public function profile(){
        return view ('website.profile');
    }


    public function edit(){
        return view ('website.editprofile');
    }


    public function update(Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'username'=>'required',
            'email'=>'required',
            'contact'=>'required',
            'address'=>'required',
            'city'=>'required',
            'country'=>'required',
        ]);

        
        
        if($request->password == "" and $request->image == ""){
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->username = $request->username;
            $create->email = $request->email;
            $create->contact = $request->contact;
            $create->address = $request->address;
            $create->city = $request->city;
            $create->country = $request->country;
            $create->update();
            
            return redirect('profile');
        }

        
        if($request->password == ""){
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move('admin/assets/user_images');
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->username = $request->username;
            $create->email = $request->email;
            $create->contact = $request->contact;
            $create->address = $request->address;
            $create->city = $request->city;
            $create->country = $request->country;
            $create->image = $path;
            $create->update();
    
            return redirect('profile');
        }


        if($request->image == ""){

            $create  = User::find($id);
            $create->name = $request->name;
            $create->username = $request->username;
            $create->email = $request->email;
            $create->contact = $request->contact;
            $create->address = $request->address;
            $create->city = $request->city;
            $create->country = $request->country;
            $create->password = Hash::make($request->password);
            $create->update();
    
            return redirect('profile');
        }


        else{
            $name = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->move('admin/assets/user_images');
            
            $create  = User::find($id);
            $create->name = $request->name;
            $create->username = $request->username;
            $create->email = $request->email;
            $create->contact = $request->contact;
            $create->address = $request->address;
            $create->city = $request->city;
            $create->country = $request->country;
            $create->password = Hash::make($request->password);
            $create->image = $path;
            $create->update();
    
            return redirect('profile');
        }

       
    }


    public function products(Request $request){
        $products = DB::table('categories')
        ->join('products','products.cat_id','=','categories.id')
        ->get();
        return view ('website.products',['products'=>$products]);
    }


    public function product_by_category($id){
        $products = DB::table('categories')
        ->join('products','products.cat_id','=','categories.id')
        ->where('products.cat_id',$id)
        ->get();
        return view ('website.product_by_category',['products'=>$products]);
    }


    public function product_by_brand($id){
        $products = DB::table('categories')
        ->join('products','products.cat_id','=','categories.id')
        ->where('products.brand_id',$id)
        ->get();
        return view ('website.product_by_brand',['products'=>$products]);
    }


    public function product_details($id){
        $products = DB::table('categories')
        ->join('products','products.cat_id','=','categories.id')
        ->join('brands','brands.id','=','products.brand_id')
        ->where('products.id',$id)
        ->select('products.product',
        'products.id',
        'products.price',
        'products.status',
        'products.desc',
        'products.stock',
        'products.discounted_price',
        'categories.category',
        'brands.brand',
        'products.image')
        ->get();

 
        return view ('website.product_details',['products'=>$products]);
    }
}