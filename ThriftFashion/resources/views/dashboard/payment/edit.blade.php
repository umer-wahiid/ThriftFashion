@extends('dashboard.include.main')
@section('content')

<!---Content-->
<div class="container">
    <div class="card shadow"></div>
    <section class="position-relative">
        <div class="container position-relative">
            <div class="row d-flex justify-content-left">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card">
                        <div class="card-body">
                            <h2 class=" mb-4">Update Payment</h2>
                            <form method="post" action="{{url('dashboard/payment/update')}}"> 
                                @csrf
                                <div class="mb-3"><input class="form-control shadow" type="text" name="payment" value="{{$edit->payment}}" placeholder="Payment"></div>
                                <div class="mb-3"><span class="text-danger">@error('payment'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div><button class="btn d-block text-white shadow" type="submit" style="background: #17c6aa;">Update Payment</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<!--Content-->


@endsection
