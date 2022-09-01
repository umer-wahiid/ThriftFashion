@extends('dashboard.include.main')
@section('content')

<!---Content-->
    <div class="container-fluid">
        <h3 class="text-dark mb-4">Update Product</h3>
        <div class="card shadow"></div>
        <section class="position-relative py-4 py-xl-5">
            <div class="container position-relative">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5 col-xxl-4">
                    <div class="card mb-5">
                        <div class="card-body p-sm-5">
                            <h2 class="text-center mb-4">Update Product</h2>
                            <form method="post" action="{{url('dashboard/product/update')}}/{{$edit->id}}" enctype="multipart/form-data"> 
                                @csrf
                                <div class="mb-3"><input class="form-control" value="{{$edit->product}}" type="text" name="product" placeholder="Product"></div>
                                <div class="mb-3"><span class="text-danger">@error('product'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3">
                                    <select class="form-control" name="cat_id" value="Select Category">
                                    @foreach($cat_id as $item)
                                        <option value="{{$item->id}}">{{$item->category}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <select class="form-control" name="brand_id" value="Select Brand">
                                    @foreach($brand_id as $item)
                                        <option value="{{$item->id}}">{{$item->brand}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->desc}}" type="text" name="desc" placeholder="Description"></div>
                                <div class="mb-3"><span class="text-danger">@error('desc'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->price}}" type="text" name="price" placeholder="Detail"></div>
                                <div class="mb-3"><span class="text-danger">@error('price'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->discount}}" type="text" name="discount" placeholder="Discount"></div>
                                <div class="mb-3"><span class="text-danger">@error('discount'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->discounted_price}}" type="number" name="discounted_price" placeholder="Discounted Price"></div>
                                <div class="mb-3"><span class="text-danger">@error('discounted_price'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->image}}" type="file" name="image" placeholder="Upload Image"></div>
                                <div class="mb-3"><span class="text-danger">@error('image'){{$message}}@enderror</span></div>
                                <div class="mb-3"><img src="{{url($edit->image)}}" width="50" height="50"></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->stock}}" type="number" name="stock" placeholder="Stock"></div>
                                <div class="mb-3"><span class="text-danger">@error('stock'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" value="{{$edit->status}}" type="text" name="status" placeholder="Status"></div>
                                <div class="mb-3"><span class="text-danger">@error('status'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit" style="background: #17c6aa;">Update Product</button></div>
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