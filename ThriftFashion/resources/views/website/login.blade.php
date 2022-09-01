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
        <div class="row justify-content-center">
		<div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12">
                <div class="login-wrap">
                    <h3 class="fsz-25 ptb-15"><span class="light-font">log in </span> <strong>your account </strong>
                    </h3>
                    <p>Log in to your account to discovery all great features in this template.</p>
                    <form class="login-form row pt-50" method="post" action="{{url('auth/storelogin')}}">
					@csrf
                        <div class="form-group col-sm-12">
                            <input required="" type="text" data-original-title="Name is required"
                                class="form-control name input-your-name" placeholder="Email" name="email" value=""
                                data-toggle="tooltip" data-placement="bottom" title="">
                        </div>
                        <div class="form-group col-sm-12">
                            <input required="" type="password" data-original-title="Email is required"
                                class="form-control password input-password" placeholder="Password" name="password" value=""
                                data-toggle="tooltip" data-placement="bottom" title="">
                        </div>
                        <div class="form-group col-sm-12">
                            <label class="checkbox-inline fsz-12"><input type="checkbox" value=""> <span> Keep me logged
                                    in </span> </label>
                            <label class="forgot-pw fsz-12"> <a href="#" class="clr-txt-2 pw"> Forgot your password ?
                                </a> </label>
                        </div>
                        <div class="form-group col-sm-12 pt-15">
                            <button type="submit" class="theme-btn btn submit-btn"> <b> LOGIN </b> </button>
                        </div>
                    </form>
                </div>
            </div>
			<div class="col-md-4 col-sm-12"></div>
        </div>
        <!-- / Login Ends -->
    </div>
</section>


<!-- / CONTENT AREA -->
@endsection