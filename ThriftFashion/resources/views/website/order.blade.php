@extends('website.master.main')
@section('content')

<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg">
    <div class="theme-container container ">
        <div class="site-breadcumb">
            
        </div>
    </div>
</section>
<!--Breadcrumb Section End-->

<!-- My Account Starts-->
<section class="account-page ptb-50">
    <div class="container">
        <!-- Shopping Cart Starts -->
        <div class="cart-table">
            <form class="cart-form">
                <table class="product-table">
                    <thead class="">
                        <tr>
                            <th>Order Number</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Quantity</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    @foreach($orders as $item)
                    <tbody>
                        <tr>
                            <td class="description">

                                <h3 class="order no-margin"> <a href="#"><strong>{{$item->order_id}}</strong> </a> </h3>
                                <h6>DRY FRUITS</h6>
                            </td>
                            <td>
                                <div class="price fontbold-2">
                                    <strong class="fsz-20">$ {{$item->price}}</strong>
                                </div>
                            </td>
                            <td>
                                <div class="text-center pt-20"> <b class="fsz-16"> {{$item->created_at}}</b> </div>
                            </td>
                            <td>
                                <div class="prod-btns fontbold-2">
                                    <b class="fsz-16"> {{$item->quantity}} </b>
                                </div>
                            </td>
                            <td>
                                <div class="order-status pt-15">
                                    <a href="{{url('order/update')}}/{{$item->id}}" class="btn-sm btn btn-danger" style="color: white;">Cancel Order</a>
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    @endforeach
                </table>

                <div class="continue-shopping text-center">
                    <a href="{{url('/products')}}" class="theme-btn btn"> Continue To Shopping </a>
                </div>

            </form>
        </div>
        <!-- / Shopping Cart Ends -->
    </div>
</section>
<!-- / My Account Ends -->
@endsection