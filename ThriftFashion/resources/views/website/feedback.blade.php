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


<!-- Shop Starts-->
<section class="contact-wrap sec-space-bottom">
    <div class="container rel-div pt-50">

        <div class="row">
            <div class="col-md-7">
                <div class="contact-map">
                    <div id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6088.078439123896!2d67.07654573770895!3d24.86408530965051!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x42acc4507358b160!2sAptech%20Learning%2C%20Shahrah%20e%20Faisal%20Center!5e0!3m2!1sen!2s!4v1660427331103!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact-details">
                    <h3 class="fsz-25"><span class="light-font">Thrift Fashion </span> <strong>Address </strong> </h3>
                    <p>142 West newton, NY 19088, United States</p>

                    <ul>
                        <li> <strong>Call: </strong> <i>+92 315 1113099</i> </li>
                        <li> <strong>Email: </strong> <i> <a href='#'>thrift_fashion@gmail.com</a> </i> </li>
                        <li> <strong>Skype: </strong> <i> <a href='#'> thrift_fashion.skype </a> </i> </li>
                        <li> <strong>Facebook: </strong> <i> <a href='#'> thrift_fashion.facebook </a> </i> </li>
                        <li> <strong>Twitter: </strong> <i> <a href='#'> @thrift_fashion </a> </i> </li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="divider-full-1"></div>

        <div class="pt-50 col-md-8 col-md-offset-2">
            <h3 class="fsz-25 text-center"><span class="light-font"></span> <strong>Feedback </strong> </h3>
            <h6 class="sub-title-1 text-center">THRIFT FASHION</h6>

            <div class="contact-form pt-50">
                <form method="post" action="{{url('dashboard/feedback/store')}}" class="contact-form row"
                    id="contact-form">
                    @csrf
                    <div class="form-group col-sm-4">
                        <input class="form-control" placeholder="Name"
                            value="@if(Auth::user()) {{Auth::user()->name}}@endif" name="name" id="Name" required=""
                            type="text">
                        <span class="text-danger">@error('name'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-sm-4">
                        <input class="form-control" placeholder="Email" name="email" id="Email" required=""
                            value="@if(Auth::user()) {{Auth::user()->email}}@endif" type="email">
                        <span class="text-danger">@error('email'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-sm-4">
                        <input class="form-control" value="@if(Auth::user()) {{Auth::user()->contact}}@endif"
                            placeholder="Phone" name="contact" id="Phone" type="text">
                        <span class="text-danger">@error('contact'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea class="form-control" placeholder="Message" name="message" id="Message" cols="12"
                            rows="4"></textarea>
                        <span class="text-danger">@error('message'){{$message}}@enderror</span>
                    </div>
                    <div class="form-group col-sm-12 text-center pt-15">
                        <button class="theme-btn" type="submit"> <strong> SEND REVIEW </strong> </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- / Shop Ends -->
@endsection