@extends('website.master.main')
@section('content')
@php
$product = DB::table('products')->get();
$category = DB::table('categories')->get();
@endphp
<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg">
    <div class="theme-container container ">
        <div class="site-breadcumb white-clr">
            
        </div>
    </div>
</section>
<!--Breadcrumb Section End-->


<!-- Shop Starts-->
<section class="shop-wrap sec-space-bottom">
    <div class="container rel-div pt-50">
        <div class="row">
            <div class="col-md-12 pt-15">

                <div class="product-single sec-space-bottom  clearfix">
                    <!-- Single Products Slider Starts -->
                    <div class="col-lg-6 pb-50 col-sm-8 col-sm-offset-2 col-lg-offset-0">
                        <div class="prod-slider sync1">
                            <div class="item">
                                <img src="{{url($products[0]->image)}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- Single Products Slider Ends -->

                    <div class="col-lg-6">
                        <div class="product-content block-inline">

                            <div class="tag-rate">
                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                <div class="rating">
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="star active"></span>
                                    <span class="fsz-12 gray-color ml-10"> Based on 25 reviews</span>
                                </div>
                            </div>

                            <div class="single-caption">
                                <h3 class="section-title">
                                    <a href="#"><strong>{{$products[0]->product}}</strong></a>
                                </h3>
                                <span class="divider-2"></span>
                                <p class="price">
                                    <strong class="clr-txt fsz-20">$ {{$products[0]->discounted_price}}</strong>
                                    @if($products[0]->price == '')
                                    <del class="light-font"></del>
                                    @else
                                    <del class="light-font fsz-20">$ {{$products[0]->price}} </del>
                                    @endif
                                </p>

                                <div class="fsz-16">
                                    <p>{{$products[0]->desc}}</p>
                                </div>
                                <form method="post" action="{{url('cart/store')}}">
                                    @csrf
                                    <div class="prod-btns">
                                        <div class="quantity">
                                            <a class="btn minus" onclick="dec()"><i
                                                    class="fa fa-minus-circle"></i></a>
                                            <input type="number" id="qty" name="quantity" min="1"
                                                max="{{$products[0]->stock}}" value="1" title="Qty" placeholder="03"
                                                class="form-control qty" type="text">
                                            <a class="btn plus" onclick="inc()"><i
                                                    class="fa fa-plus-circle"></i></a>

                                        </div>
                                    </div>
                                    <ul class="meta">
                                        <li> <strong> CATEGORY </strong> <span>: &nbsp;
                                                {{$products[0]->category}}</span> </li>
                                        <li> <strong> BRAND </strong> <span>: &nbsp; {{$products[0]->brand}}</span>
                                        </li>
                                    </ul>
                                    <div class="divider-full-1"></div>
                                    @if(Auth::user())
                                    <input type="hidden" value="{{$products[0]->id}}" name="product_id" />
                                    <div class="add-cart pt-15">
                                        <button class="theme-btn btn"> <strong> ADD TO CART </strong> </button>
                                    </div>

                                </form>
                                @else
                                <div class="add-cart pt-15">
                                    <a href="{{url('auth/register')}}" class="theme-btn btn"> <strong> Register Your
                                            Selfpwe4b</strong> </a>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>
</section>
<script>
function inc() {
    document.getElementById("qty").value++;
}

function dec() {
    document.getElementById("qty").value--;
}


// function qty(){
// const qty = document.getElementById("qty").value;
// const price = document.getElementById("price").innerHTML;
// const total = qty * price;
// document.getElementById("total").innerHTML = total;
// }
</script>
<!-- / Shop Ends -->
@endsection