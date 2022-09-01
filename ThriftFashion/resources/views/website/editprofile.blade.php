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
            <aside class="col-md-12 col-sm-11 ptb-15">
                <div class="account-wrap cart-box">
                    <form  action="{{url('profile/update')}}/{{Auth::user()->id}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6">
                                <label> Name </label>
                                <input type="text" value="{{Auth::user()->name}}" name="name" class="form-control" required="">
                                <span class="text-danger">@error('name'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Username </label>
                                <input type="text" value="{{Auth::user()->username}}" name="username" class="form-control" required="">
                                <span class="text-danger">@error('username'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Email </label>
                                <input type="email" value="{{Auth::user()->email}}" name="email" class="form-control" required="">
                                <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Phone Number </label>
                                <input type="text" value="{{Auth::user()->contact}}" name="contact" class="form-control" required="">
                                <span class="text-danger">@error('contact'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Address </label>
                                <input type="text"  value="{{Auth::user()->address}}" name="address" class="form-control">
                                <span class="text-danger">@error('address'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> City </label>
                                <input type="text"  value="{{Auth::user()->city}}" name="city" class="form-control">
                                <span class="text-danger">@error('city'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Country </label>
                                <input type="text"  value="{{Auth::user()->country}}" name="country" class="form-control">
                                <span class="text-danger">@error('country'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Profile Picture </label>
                                <input type="file" class="form-control" name="image" placeholder="Select Image">
                            </div>
                            <div class="form-group col-sm-6">
                                <label> Password </label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="pt-15 col-sm-12">
                                <button type="submit" class="btn theme-btn btn-black"> <b> Update </b> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </aside>
        </div>
    </div>
</section>
<!-- / My Account Ends --> @endsection