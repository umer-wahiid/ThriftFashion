<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DealController extends Controller
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
        $product_id = DB::table('products')->get();
        return view('dashboard.deal.create',['product_id'=>$product_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $create  = new Deal();
        $create->product_id = $request->product_id;
        $create->save();

        return redirect('dashboard/deal/show');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function show(Deal $deal)
    {
        $show =DB::table('deals')
        ->join('products','products.id','=','deals.product_id')
        ->get();
        

        return view ('dashboard.deal.show',['show'=>$show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function edit(Deal $deal,$id)
    {
        $edit = Category::find($id);
        return view ('dashboard.deal.edit',['edit'=>$edit]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deal $deal,$id)
    {
        $request->validate([
            'deal'=>'required'
        ]);

        $create  = Deal::find($id);
        $create->category = $request->category;
        $create->update();

        return redirect('dashboard/deal/show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deal  $deal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deal $deal)
    {
        $delete = Category::find($id);
        $delete->delete();
        return redirect('dashboard/category/show');
    }
}
