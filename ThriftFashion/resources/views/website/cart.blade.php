@extends('website.master.main')
@section('content')
<!--Breadcrumb Section Start-->
<section class="breadcrumb-bg">
    <div class="theme-container container ">
        <div class="site-breadcumb white-clr">
            
        </div>
    </div>
</section>
<!--Breadcrumb Section End-->


<!-- Cart Starts-->
<section class="shop-wrap sec-space">
    <div class="container">
        <!-- Shopping Cart Starts -->
        <div class="cart-table">
            <form class="cart-form" method="post" action="{{url('checkout/store')}}">
                @csrf
                <table class="product-table">
                    <thead class="">
                        <tr>
                            <th>product detail</th>
                            <th></th>
                            <th>Product price</th>
                            <th>quantity</th>
                            <th>total price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @php $total = 0; @endphp
                        @foreach($cart as $item)
                        <tr>
                            <td class="image">
                               <img src="{{url($item->image)}}" height="50" width="50" alt="">
                             
                            </td>
                            <td class="description">
                                <div class="divider-2"></div>
                           
                                <h6>{{$item->product}}</h6>
                            </td>
                            <td>
                                <div class="price fontbold-2">
                                    <strong class="fsz-20" id="price">$<h6>{{$item->discounted_price}}</h6> </strong> <del class="light-font"> <b>$<h6>{{$item->price}}</h6></b>
                                    </del>
                                </div>
                            </td>
                            <td>
                            <div class="price fontbold-2">
                            <div class="divider-2"></div>
                           
                                <h6>{{$item->quantity}}</h6>
                                </div>
                            </td>
                            <td>
                                <strong class="clr-txt fsz-20 fontbold-2">{{$sum = $item->discounted_price * $item->quantity}}</strong> <a href="{{url('cart/delete')}}/{{$item->c_id}}"
                                    class="remove fa fa-close clr-txt"></a>
                            </td>
                        </tr>

                            <input type="hidden" name="cart_id[]" value="{{$item->c_id}}" />
                            <input type="hidden" name="product_id[]" value="{{$item->id}}" />
                            <input type="hidden" name="quantity[]" value="{{$item->quantity}}" />
                            <input type="hidden" name="price[]" value="{{$sum}}" />
                            <input type="hidden" name="desc[]" value="{{$item->desc}}" />
                        
                            @php $total += $sum; @endphp

                        @endforeach
                     
                    </tbody>
                </table>

                <div class="continue-shopping">
                    <div class="right"> <strong class="fsz-20 fontbold-2">Total Amount : <span class="clr-txt"> $ {{$total}}
                            </span> </strong> </div>
                </div>
                <input type="hidden" name="total" value="{{$total}}" />
                <div class="shp-btn col-sm-12 text-center">
                    <button class="theme-btn-2 btn"> <b> CONTINUE SHOPPING </b> </button>
                    <button class="theme-btn-3 btn" type="submit"> <b> CHECKOUT NOW </b> </button>
                </div>


            </form>
        </div>
        <!-- / Shopping Cart Ends -->
    </div>
</section>
<!-- / Cart Ends -->
<script>
    
    function inc(){
        document.getElementById("qty").value++;
    }
    function dec(){
    document.getElementById("qty").value--;
    }


    // function qty(){
    // const qty = document.getElementById("qty").value;
    // const price = document.getElementById("price").innerHTML;
    // const total = qty * price;
    // document.getElementById("total").innerHTML = total;
    // }
</script>
@endsection