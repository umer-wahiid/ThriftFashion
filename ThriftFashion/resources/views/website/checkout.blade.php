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


            <!-- Checkout Starts-->
            <section class="checkout-wrap sec-space">
                <div class="container">                     
                    <div class="panel-group chk-panel" id="accordion">
                        <div class="panel">
                            <div class="chk-heading">                              
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="light-font">01. checkout </span> <strong>method </strong> 
                                </a>                              
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="chk-body pt-15 block-inline">
                                    <div class="col-md-6">
                                        <form class="chk-form" >
                                            <h2 class="title-1">check as a guest or register</h2>
                                            <p>Register with us for future convenience:</p>
                                            <div class="form-group block-inline ">
                                                <label class="radio-inline title-1"> <input type="radio" name="chk" value=""> <span> checkt as guest </span>  </label>
                                                <label class="radio-inline title-1"> <input type="radio" name="chk" value=""> <span> register </span>  </label>                                           
                                            </div>
                                            <h2 class="title-1"> register and save time ! </h2>
                                            <p>Register with us for future convenience:</p>
                                            <ul>
                                                <li> <span class="fa fa-arrow-circle-o-right"></span> Fast and easy check out </li>
                                                <li> <span class="fa fa-arrow-circle-o-right"></span> Easy access to your order history and status </li>
                                            </ul>
                                            <div class="form-group block-inline text-right">
                                                <button class="theme-btn-sm-2 btn submit-btn" type="submit"> <b> Continue </b> </button>
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-md-6">
                                        <form class="registed-form">
                                            <h2 class="title-1"> already registed ? </h2>
                                            <p class=""> Please log in below : </p>
                                            <div class="form-group block-inline">
                                                <label> Email Address <span class="red-clr"> * </span> </label>
                                                <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" name="cf_name" class="form-control name input-your-name">                                               
                                            </div>
                                            <div class="form-group block-inline">
                                                <label> Password <span class="red-clr"> * </span> </label>
                                                <input required="" type="text" title="" data-placement="bottom" data-toggle="tooltip" value="" name="cf_name" class="form-control name input-your-name">                                               
                                            </div>                                            
                                            <label class="red-clr">* Required Filelds</label>                                           
                                            <div class="form-group block-inline text-right">
                                                <b class="black-color fpw"> Forgot Your Password ? </b>
                                                <button class="theme-btn-sm-3 btn submit-btn" type="submit"> <b> Log In </b> </button>
                                            </div>
                                        </form>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="chk-heading">
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <span class="light-font">02. billing </span> <strong>information </strong> 
                                </a>                              
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="chk-body pt-15 block-inline">
                                    <p> BILLING INFORMATION HERE </p>
                                </div>
                            </div>
                        </div>                     
                        <div class="panel">
                            <div class="chk-heading">
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <span class="light-font">03. shipping </span> <strong>information </strong> 
                                </a>                              
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="chk-body pt-15 block-inline">
                                    <p> SHIPPING INFORMATION HERE </p>
                                </div>
                            </div>
                        </div>  
                        <div class="panel">
                            <div class="chk-heading">
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                                    <span class="light-font">04. shipping </span> <strong>method </strong> 
                                </a>                              
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="chk-body pt-15 block-inline">
                                    <p> SHIPPING METHOD HERE </p>
                                </div>
                            </div>
                        </div>  
                        <div class="panel">
                            <div class="chk-heading">
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <span class="light-font">05. payment </span> <strong>information </strong> 
                                </a>                              
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="chk-body pt-15 block-inline">
                                    <p> PAYMENT INFORMATION HERE </p>
                                </div>
                            </div>
                        </div>  
                        <div class="panel">
                            <div class="chk-heading">
                                <a class="fsz-30" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                                    <span class="light-font">02. order </span> <strong>review </strong> 
                                </a>                              
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse">
                                <div class="chk-body pt-15 block-inline">
                                    <p> ORDER REVIEW HERE </p>
                                </div>
                            </div>
                        </div>  
                    </div>                    
                </div>
            </section>
            <!-- / Checkout Ends -->   
@endsection