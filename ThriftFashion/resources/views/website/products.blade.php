@extends('website.master.main')
@section('content')
@php
$category = DB::table('categories')->get();
$brand = DB::table('brands')->get();
@endphp
<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg">
    <div class="theme-container container ">
        
    </div>
</section>
<!--Breadcrumb Section End-->


<!-- Shop Starts-->
<section class="shop-wrap sec-space-bottom">
    <div class="pattern">
        <img alt="" src="assets/img/icons/white-pattern.png">
    </div>

    <div class="container rel-div">
        <div class="row sort-bar">
            <div class="icon"> <img alt="" src="assets/img/logo/logo-2.png" /> </div>
            <div class="col-lg-6">
                <div class="sort-dropdown left">
                    <span>CATEGORY</span>
                    <div class="search-selectpicker selectpicker-wrapper">
                        <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip">
                        @foreach($category as $item)    
                        <option><a href="{{url('product_by_category')}}/{{$item->id}}">{{$item->category}}</a></option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="sort-dropdown">
                    <span>BRANDS</span>
                    <div class="search-selectpicker selectpicker-wrapper">
                        <select class="selectpicker input-price" data-width="100%" data-toggle="tooltip">
                        @foreach($brand as $item)    
                        <option><a href="{{url('product_by_brand')}}/{{$item->id}}">{{$item->brand}}</a></option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="divider-full-1"></div>
        @php 
                
                
                $count = DB::table('products')
                ->count();
                
              
                @endphp
        <div class="result-bar block-inline">
            <h4 class="result-txt">search result <b> {{$count}}</b> </h4>
            <ul class="view-tabs">
                <li class="active">
                    <a href="#grid-view" data-toggle="tab">
                        <i class="fa fa-th"></i>
                    </a>
                </li>
                <li class="">
                    <a href="#list-view" data-toggle="tab">
                        <i class="fa fa-th-list"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="tab-content shop-content">
            <div id="grid-view" class="tab-pane fade active in" role="tabpanel">
                <div class="row">
                    @foreach($products as $item)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="product-box">
                            <div class="product-media">
                                <img class="prod-img" alt="" src="{{url($item->image)}}" />
                                <img class="shape" alt="" src="assets/img/icons/shap-small.png" />
                                <div class="prod-icons">

                                <a href="{{url('product_details')}}/{{$item->id}}" data-toggle="modal"
                                            class="fa fa-eye"></a></div>
                            </div>
                            <div class="product-caption">
                                <h3 class="product-title">
                                    <a href="#"> <strong>{{$item->product}}</strong></a>
                                </h3>
                                <div class="price">
                                    <strong class="clr-txt">$ {{$item->discounted_price}}</strong>
                                    @if($item->price == '')
                                    <del class="light-font"></del>
                                    @else
                                    <del class="light-font">$ {{$item->price}} </del>
                                    @endif

                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <div class="rel-div pt-50">
                    <div class="divider-full-1"></div>
                    <div class="nav-page">
                        <a href="#" class="fa fa-long-arrow-left left"></a>
                        <a href="#" class="fa fa-long-arrow-right right"></a>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>
<!-- / Shop Ends -->
@endsection