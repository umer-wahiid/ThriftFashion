@extends('website.master.main')
@section('content')
@php
$category = DB::table('categories')->get();
$brand = DB::table('brands')->get();
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
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
                                        <option>All product</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                        <option> Low - High </option>
                                        <option> High - Low </option>
                                    </select>
                                </div>
                            </div>
                            <div class="sort-dropdown">
                                <span>SORT BY</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">
                                        <option>Popular item</option>
                                        <option>A - Z</option>
                                        <option>Z - A</option>
                                        <option> Low - High </option>
                                        <option> High - Low </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 right">
                            <div class="sort-dropdown">
                                <span>BY PRICE</span>
                                <div class="search-selectpicker selectpicker-wrapper">
                                    <select class="selectpicker input-price"  data-width="100%"
                                            data-toggle="tooltip">                                   
                                        <option> Low to High </option>
                                        <option> High to Low </option>
                                    </select>
                                </div>
                            </div>
                            <div class="sort-range">
                                <span>PRICE</span> <div id="price-range"></div>
                            </div>
                        </div>
                    </div> 

                    <div class="divider-full-1"></div>

                    <div class="result-bar block-inline">
                        <h4 class="result-txt">search result <b> 125 </b> </h4>
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

                            <div class="pagination-wrap">
                                <ul class="pagintn">                                  
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>                                    
                                </ul>
                            </div>
                        </div>

                        <div id="list-view" class="tab-pane fade" role="tabpanel">
                            <div class="row"> 
                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>rasberry </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/extra/deal-1.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>cherry </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/3.png"> </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>mushroom </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/7.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>pepper </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/8.png"> </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>cabbage </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/2.png"> </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-sm-12"> 
                                    <div class="deal-item list-view">
                                        <div class="deal-icons">                                         
                                            <a href="#" class="fa fa-heart"></a>
                                            <a href="#" class="fa fa-shopping-basket"></a>
                                            <a href="#product-preview" data-toggle="modal" class="fa fa-expand"></a>                                      
                                        </div>
                                        <div class="deal-content">
                                            <div class="text-right">
                                                <span class="prod-tag tag-1">new</span> <span class="prod-tag tag-2">sale</span>
                                            </div>
                                            <div class="deal-text">
                                                <h4 class="sub-title"> ORGANIC FRUITS </h4>
                                                <h2 class="fsz-30 pb-15"> <a href="#"> <span class="light-font">fresh </span> <strong>salad </strong> </a> </h2>
                                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy...</p>
                                                <div class="price pt-15"> 
                                                    <strong class="clr-txt">$50.00 </strong> <del class="light-font">$65.00 </del>
                                                </div>
                                            </div>
                                            <div class="img"> <img alt="" src="assets/img/products/4.png"> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="rel-div pt-50">
                                <div class="divider-full-1"></div>
                                <div class="nav-page">
                                    <a href="#" class="fa fa-long-arrow-left left"></a> 
                                    <a href="#" class="fa fa-long-arrow-right right"></a> 
                                </div>
                            </div>                            

                            <div class="pagination-wrap">
                                <ul class="pagintn">                                  
                                    <li><a href="#">01</a></li>
                                    <li><a href="#">02</a></li>
                                    <li><a href="#">03</a></li>
                                    <li><a href="#">04</a></li>
                                    <li><a href="#">05</a></li>
                                    <li><a href="#">...</a></li>
                                    <li><a href="#">15</a></li>                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- / Shop Ends --> 
@endsection