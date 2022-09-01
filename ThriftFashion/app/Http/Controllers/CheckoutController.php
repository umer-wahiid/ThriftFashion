<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
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
            $order = Order::orderBy('id','desc')->get();
       

            if(empty($order[0])){
                $order_id = 1;
            }
            else{
                $order_id =  $order[0]->id + 1;
            }
    
                   
           foreach($request->cart_id as $key=>$item){
               $create = new Order();
               $create->user_id = Auth::user()->id;
               $create->cart_id = $item;
               $create->product_id = $request->product_id[$key];
               $create->order_id =  "OR-".$order_id;
               $create->quantity = $request->quantity[$key];
               $create->price = $request->price[$key];
               $create->desc = $request->desc[$key];
               $create->save();
    
               $update =DB::table('carts')
                        ->where('id',$item)
                        ->update(['status'=>'1']);
           }
    
           $create = new Checkout();
           $create->user_id = Auth::user()->id;
           $create->order_id = "OR-".$order_id;
           $create->total = $request->total;
           $create->status = '0';
           $create->save();
    
    
    
           return redirect('/order');
        }
    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        return view('website.checkout');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Checkout $checkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}