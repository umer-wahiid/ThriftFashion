@php
$category = DB::table('categories')->get();
$brand = DB::table('brands')->get();
@endphp
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]><html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="agency, ecommerce">
    <meta name="author" content="Md. Siful Islam, Jtheme">

    <title>Thrift Fashion</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{asset('website/assets/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('website/assets/img/logo/logo.png')}}">

    <!-- Font Icon -->
    <link href="{{asset('website/assets/css/plugin/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- CSS Global -->
    <link href="{{asset('website/assets/css/plugin/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/css/plugin/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/css/plugin/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/css/plugin/subscribe-better.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('website/assets/css/plugin/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="{{asset('website/assets/css/theme.css')}}" rel="stylesheet" type="text/css">


</head>

<body id="home" class="wide">



    <!-- WRAPPER -->
    <main class="wrapper home-wrap">
        <!-- CONTENT AREA -->
        <!-- Main Header Start -->
        <header class="main-header">
            <div class="container-fluid rel-div">
                <div class="col-lg-2 col-sm-8">
                    <div class="main-logo ">
                        <a href="{{url('/')}}"> <img style="width: auto; height:75px;margin-top:-8px;" alt=""
                                src="{{asset('website/assets/img/logo/logo.png')}}" />
                        </a>
                    </div>
                </div>

                <div class="col-lg-8 responsive-menu">
                    <div class="responsive-toggle fa fa-bars"> </div>
                    <nav class="fix-navbar" id="primary-navigation">
                        <ul class="primary-navbar">
                            <li class="dropdown active">
                                <a href="{{url('/')}}" role="button" aria-haspopup="true">Home</a>
                            </li>
                            <li><a href="{{url('about')}}">About Us</a></li>
                            <li class="dropdown">
                                <a href="{{url('products')}}" role="button" aria-haspopup="true">Product</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true">Category</a>
                                <ul class="dropdown-menu">
                                    @foreach($category as $item)
                                    <li><a href="{{url('product_by_category')}}/{{$item->id}}">{{$item->category}}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-haspopup="true">Brands</a>
                                <ul class="dropdown-menu">
                                    @foreach($brand as $item)
                                    <li><a href="{{url('product_by_brand')}}/{{$item->id}}">{{$item->brand}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{url('contact')}}">Contact Us</a></li>
                            @if(Auth::user())
                            <li><a href="{{url('feedback')}}">Feedback</a></li>
                            @endif
                            @if(Auth::user())
                            <li><a href="{{url('order')}}">Orders</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>

                @php 
                
                if(Auth::user()){
                    $count = DB::table('carts')
                ->where('user_id',Auth::user()->id)
                ->where('status','0')
                ->count();
                }else{
                    $count = 0;
                }
              
                @endphp
                <div class="col-lg-2 col-sm-4 cart-megamenu">
                    <div class="cart-hover">
                        <a href="{{url('cart/show')}}"> <img alt=""src="{{asset('website/assets/img/icons/cart-icon.png')}}" /> </a>
                        <span class="cnt crl-bg">{{$count}}</span>
                     
                    </div>
                    <!--end cart -->
                    <div class="mega-submenu">
                        <span class="nav-trigger">
                            <a class="menu-toggle" href="#"> <img src="{{asset('website/assets/img/icons/menu.png')}}"
                                    alt="" /> </a></span>
                        <div class="mega-dropdown-menu">
                            <a class="menu-toggle fa fa-close" href="#"> </a>
                            <div class="slider-mega-menu">
                                <div class="menu-block">
                                    <div class="menu-caption">
                                        <h2 class="menu-title"> <span class="light-font"></span>
                                            <strong>Settings</strong>
                                        </h2>
                                        <ul class="sub-list">
                                            @if(Auth::user())
                                            <li> <a href="{{url('/profile')}}">Profile </a> </li>
                                            <li> <a href="{{url('/cart')}}">Cart </a> </li>
                                            <li> <a href="{{url('/orders')}}">Orders </a> </li>
                                            <li> <a href="{{url('auth/logout')}}">Logout </a> </li>
                                            @else
                                            <li> <a href="{{url('auth/register')}}">Register </a> </li>
                                            <li> <a href="{{url('auth/login')}}">Login </a> </li>
                                            <li> <a href="{{url('/cart')}}">Cart </a> </li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="responsive-toggle fa fa-bars"> </div>
                </div>

            </div>
        </header>