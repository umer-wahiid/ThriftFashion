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


<section class="sec-space">
    <div class="container">
        <!-- Login Starts -->
        <div class="row">
            <div class="col-md-2 col-sm-12"></div>
            <div class="col-md-8 col-sm-12">
                <div class="register-wrap">
                    <h3 class="fsz-25 ptb-15"><span class="light-font">Don't have an Account? </span> <strong>Register
                            Now </strong> </h3>
                    <p>By creating an account with our store, you will be able to move through the checkout process
                        faster, store multiple shipping addresses, view and track your orders in your account and more.
                    </p>
                    <form method="post" action="{{url('auth/store')}}"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group col-md-6">
                            <input required="" type="text" data-original-title="Login"
                                class="form-control name input-your-name" placeholder="Name" name="name"
                                value="{{old('name')}}" data-toggle="tooltip" data-placement="bottom" title="">
                            <span class="text-danger">@error ('name') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="text" class="form-control website input-website"
                                placeholder="Username" name="username" value="{{old('username')}}" data-toggle="tooltip"
                                data-placement="bottom" title="">
                            <span class="text-danger">@error ('username') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="email" data-original-title="Email is required"
                                class="form-control email input-email" placeholder="Email Address" name="email"
                                value="{{old('email')}}" data-toggle="tooltip" data-placement="bottom" title="">
                            <span class="text-danger">@error ('email') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control website input-website" placeholder="Phone"
                                name="contact" value="{{old('contact')}}" data-toggle="tooltip" data-placement="bottom"
                                title="">
                            <span class="text-danger">@error ('contact') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="text" class="form-control website input-website"
                                placeholder="Address" name="address" value="{{old('address')}}" data-toggle="tooltip"
                                data-placement="bottom" title="">
                            <span class="text-danger">@error ('address') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="text" class="form-control website input-website" placeholder="City"
                                name="city" value="{{old('city')}}" data-toggle="tooltip" data-placement="bottom"
                                title="">
                            <span class="text-danger">@error ('city') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="text" class="form-control website input-website"
                                placeholder="Country" name="country" value="{{old('country')}}" data-toggle="tooltip"
                                data-placement="bottom" title="">
                            <span class="text-danger">@error ('country') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="password" class="form-control website input-website"
                                placeholder="Set Password" name="password" value="{{old('password')}}"
                                data-toggle="tooltip" data-placement="bottom" title="">
                            <span class="text-danger">@error ('password') {{$message}} @enderror</span>
                        </div>
                        <div class="form-group col-md-6">
                            <input required="" type="file" class="form-control website input-website"
                                placeholder="Select Image" name="image" value="{{old('image')}}">
                            <span class="text-danger">@error ('image') {{$message}} @enderror</span>
                            <br>
                            <div class="form-group col-md-12 pt-15">
                                <button type="submit" class="btn theme-btn-2"> <b> REGISTER NOW </b> </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-2 col-sm-12"></div>
        </div>
    </div>
</section>


@endsection