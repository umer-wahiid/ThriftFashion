<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if(Auth::user()){


        

        $check = DB::table('carts')
                ->where('user_id',Auth::user()->id)
                ->where('product_id',$request->product_id)
                ->where('status','0')
                ->select('carts.id','carts.quantity')
                ->get();

   

        if(!empty($check[0])){

          $qty = $check[0]->quantity + $request->quantity;

          $id = $check[0]->id;
          $create =Cart::find($id);
          $create->quantity =  $qty;
          $create->update();
   
          return redirect('cart/show');

        }else{
            
            $create = new Cart();
            $create->user_id = Auth::user()->id;
            $create->product_id= $request->product_id;
            $create->quantity = $request->quantity;
            $create->status = '0';
            $create->save();
            return redirect('cart/show');
        
           
        }



        
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        $cart = DB::table('products')
        ->join('carts','carts.product_id','=','products.id')
        ->where('carts.status','0')
        ->select('carts.id as c_id','products.id','products.desc','products.image','products.price','products.product','products.discounted_price','carts.quantity')
        ->get();
        return view ('website.cart',['cart'=>$cart]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart,$id)
    {
        $delete = Cart::find($id);
        $delete->delete();

        return redirect('cart/show');
    }
}
