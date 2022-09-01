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
        <div class="row">
            <aside class="col-md-9 col-sm-8 ptb-15">
                <div class="account-wrap cart-box">
                    <form class="gray-control">
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label> Name </label>
                                <input type="text" value="{{Auth::user()->name}}" readonly class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Username </label>
                                <input type="text" value="{{Auth::user()->username}}" readonly class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Email </label>
                                <input type="email" value="{{Auth::user()->email}}" readonly class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Phone Number </label>
                                <input type="text" value="{{Auth::user()->contact}}" readonly class="form-control" required="">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Address </label>
                                <input type="text"  value="{{Auth::user()->address}}" readonly class="form-control">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> City </label>
                                <input type="text"  value="{{Auth::user()->city}}" readonly class="form-control">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Country </label>
                                <input type="text"  value="{{Auth::user()->country}}" readonly class="form-control">
                            </div>
                            <div class="pt-15 col-sm-12">
                                <a type="submit" href="{{url('profile/edit')}}" class="btn theme-btn btn-black"> <b> Edit Profile </b> </a>
                            </div>
                        </div>
                    </form>
                </div>
            </aside>

            <!-- Sidebar Starts -->
            <aside class="col-md-3 col-sm-4">
                <div class="widget-wrap">
                    <img src="{{Auth::user()->image}}" width="700px" height="700px" style="border-radius:130px;margin-top:100px;" class="rounded-circle" alt="">
                </div>
            </aside>
            <!-- Sidebar Ends -->

        </div>
    </div>
</section>
<!-- / My Account Ends --> @endsection