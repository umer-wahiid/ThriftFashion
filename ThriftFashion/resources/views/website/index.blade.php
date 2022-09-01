@extends('website.master.main')
@section('content')
@php
$product = DB::table('products')->get();
$category = DB::table('categories')->get();
@endphp
<!-- Main Slider Start -->
<section class="main-slide">
    <div id="naturix-slider" class="owl-carousel nav-1">
        <div class="item">
            <img alt=".." src="{{asset('website/assets/img/slider/slide-10.jpg')}}">
            <div class="tbl-wrp slide-2">
                <div class="text-middle">
                    <div class="tbl-cell">
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img alt=".." src="{{asset('website/assets/img/slider/slide-9.jpg')}}">
            <div class="tbl-wrp slide-1">
                <div class="text-middle">
                    <div class="tbl-cell">
                    </div>
                </div>
            </div>
        </div>
        <div class="item">
            <img alt=".." src="{{asset('website/assets/img/slider/slide-8.jpg')}}">
            <div class="tbl-wrp slide-3">
                <div class="text-middle">
                    <div class="tbl-cell">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Main Slider Ends -->

<!-- Organic All Starts-->
<section class="organic-all sec-space-bottom">
    <div class="pattern">
        <img alt="" src="{{asset('website/assets/img/icons/white-pattern.png')}}" />
    </div>
    <div class="container">
        <div class="organic-wrap">
            <img class="logo-img" alt="" width="250px" src="{{asset('website/assets/img/logo/logo.png')}}" />
            <div class="tabs-box">
                <ul class="">
                    <li class=""><a style="border: 1px solid transparent;" href="#product-tab-1" data-toggle="tab"></a>
                    </li>
                    <li class=""><a style="border: 1px solid transparent;" href="#product-tab-2" data-toggle="tab"></a>
                    </li>
                    <li class=""><a style="border: 1px solid transparent;" href="#product-tab-3" data-toggle="tab"></a>
                    </li>
                    <li class=""><a style="border: 1px solid transparent;" href="#product-tab-4" data-toggle="tab"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="tab-content organic-content row">
                <div id="product-tab-1" class="tab-pane fade active in">
                    <div class="product-slider-1 dots-1">
                        @foreach($product as $item)
                        <div class="item">
                            <div class="product-box">
                                <div class="product-media">
                                    <img class="prod-img" alt="" src="{{url($item->image)}}" />
                                    <img class="shape" alt=""
                                        src="{{asset('website/assets/img/icons/shap-small.png')}}" />
                                    <div class="prod-icons">
                                    
                                        <a href="{{url('product_details')}}/{{$item->id}}" data-toggle="modal"
                                            class="fa fa-eye"></a>
                                    </div>
                                </div>
                                <div class="product-caption">
                                    <h3 class="product-title">
                                        <a href="{{url('product_details')}}/{{$item->id}}">
                                            <strong>{{$item->product}}</strong></a>
                                    </h3>
                                    <div class="price">
                                        <strong class="clr-txt fsz-20">$ {{$item->discounted_price}}</strong>
                                        @if($item->price == '')
                                        <del class="light-font"></del>
                                        @else
                                        <del class="light-font fsz-20">$ {{$item->price}} </del>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Organic All Ends -->


<!-- Naturix Goods Starts-->
<section class="naturix-goods sec-space-bottom">
    <div class="container">
        <div class="title-wrap">
            <h4 class="sub-title"> NEW ARRIVALS FROM</h4>
            <h2 class="section-title">THRIFT FASHION</h2>
        </div>

        <div class="tab-content organic-content row">

            <div id="naturix-tab-1" class="tab-pane fade active in">
                <div class="naturix-slider-1 dots-1">
                    @foreach($product as $item)
                    <div class="item">
                        <div class="product-box">
                            <div class="product-media">
                                <img class="prod-img" alt="" src="{{url($item->image)}}" />
                                <img class="shape" alt="" src="{{url($item->image)}}" />
                                <div class="prod-icons">
                                    <!-- <a href="#" class="fa fa-heart"></a> -->
                                    <a href="#" class="fa fa-shopping-basket"></a>
                                    <a href="{{url('product_details')}}/{{$item->id}}" data-toggle="modal"
                                        class="fa fa-expand"></a>
                                </div>
                            </div>
                            <div class="product-caption">
                                <h3 class="product-title">
                                    <a
                                        href="{{url('product_details')}}/{{$item->id}}"><strong>{{$item->product}}</strong></a>
                                </h3>
                                <div class="price">
                                    <strong class="clr-txt fsz-20">$ {{$item->discounted_price}}</strong>
                                    @if($item->price == '')
                                    <del class="light-font"></del>
                                    @else
                                    <del class="light-font fsz-20">$ {{$item->price}} </del>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

    </div>
</section>
<!-- / Naturix Goods Ends -->

<!-- Deals Starts-->
<section class="deals sec-space light-bg">
    <div class="container">
        <div class="row">
            <div class="col-sm-5 text-right">
                <h4 class="sub-title">DEAL OF THE DAY </h4>
                <h2 class="section-title"> <span class="light-font">UPTO </span> <strong>50% </strong> <span
                        class="light-font">OFF</span> </h2>
            </div>
            <div class="col-sm-2 text-center no-padding">
                <img alt="" src="{{asset('website/assets/img/logo/logo.png')}}" />
            </div>
            <div class="col-sm-5">
                <p>Hurray! Our new year sale is here with upto 50% off. Shop now your favorite one before someone else.
                </p>
            </div>
        </div>
        <div class="deal-slider dots-2">
        @foreach($deal as $item)
            <div class="item">
                <div class="deal-item">
                    <div class="deal-icons">
                        <a href="#product-preview" data-toggle="modal" class="fa fa-eye"></a>
                    </div>
                    <div class="deal-content">
                        <div class="text-right">
                            <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                        </div>
                        <div class="deal-text">
                            <h4 class="sub-title"> THRIFT FASHION </h4>
                            <div class="price pt-15">
                                <strong class="clr-txt">{{$item->discounted_price}} </strong> <del class="light-font">{{$item->price}}</del>
                            </div>
                        </div>
                        <div style="height:100%; width:100%;" class=""> <img alt="" src="{{url($item->image)}}" />
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- / Deals Ends -->

<!-- Random Products Starts-->
<section class=" sec-space-bottom">
    <div class="pattern">
        <img alt="" src="{{asset('website/assets/img/icons/white-pattern.png')}}">
    </div>
    <div class="section-icon">
        <img alt="" src="{{asset('website/assets/img/logo/logo.png')}}">

    </div>
    <div class="container">
        <!-- Random Products -->

        <!-- Banner -->
        <div class="row">
            <div class="col-md-4">
                <div class="prod-banner orange-banner">
                    <h4 class="title"> <span class="light-font"> MENS </span> <strong>COLLECTION </strong> </h4>
                    <div class="banner-box">
                        <div class="banner-content">
                            <h3 class="title-sec">MENS</h3>
                            <h2 class="section-title"> <span class="light-font">ALL </span> <strong>SUMMER </strong>
                            </h2>
                            <h4 class="sub-title"> UPTO 50% OFF</h4>
                            <a href="#" class="btn"> <span> shop now </span> <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                    <img src="{{asset('website/assets/img/extra/banner-1.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="prod-banner orange-banner">
                    <h4 class="title"> <span class="light-font"> WOMENS </span> <strong>COLLECTION </strong> </h4>
                    <div class="banner-box">
                        <div class="banner-content">
                            <h3 class="title-sec">WOMENS</h3>
                            <h2 class="section-title"> <span class="light-font">ALL </span> <strong>SUMMER </strong>
                            </h2>
                            <h4 class="sub-title"> UPTO 50% OFF</h4>
                            <a href="#" class="btn"> <span> shop now </span> <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                    <img src="{{asset('website/assets/img/extra/banner-2.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="prod-banner orange-banner">
                    <h4 class="title"> <span class="light-font"> KIDS </span> <strong>COLLECTION </strong> </h4>
                    <div class="banner-box">
                        <div class="banner-content">
                            <h3 class="title-sec">KIDS</h3>
                            <h2 class="section-title"> <span class="light-font">ALL </span> <strong>SUMMER </strong>
                            </h2>
                            <h4 class="sub-title"> UPTO 50% OFF</h4>
                            <a href="#" class="btn"> <span> shop now </span> <i class="fa fa-long-arrow-right"></i> </a>
                        </div>
                    </div>
                    <img src="{{asset('website/assets/img/extra/banner-3.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Random Products Ends -->


<!-- / CONTENT AREA -->@endsection