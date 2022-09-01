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
                            <h2 class="mb-4">Add Product</h2>
                            <form method="post" action="{{url('dashboard/product/store')}}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3"><input class="form-control" type="text" name="product"
                                        placeholder="Product"></div>
                                <div class="mb-3"><span
                                        class="text-danger">@error('product'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3">
                                    <select class="form-control" name="cat_id" value="Select Category"
                                        placeholder="Select Category">
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
                                <div class="mb-3"><input class="form-control" type="text" name="desc"
                                        placeholder="Detail"></div>
                                <div class="mb-3"><span class="text-danger">@error('desc'){{$message}}@enderror</span>
                                </div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="number" name="price" id="price"
                                        onkeyup="disc()" placeholder="Price"></div>
                                <div class="mb-3"><span class="text-danger">@error('price'){{$message}}@enderror</span>
                                </div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="number" name="discount"
                                        id="discount" onkeyup="disc()" placeholder="Discount in %"></div>
                                <div class="mb-3"><span
                                        class="text-danger">@error('discount'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="number" id="percent"
                                        name="discounted_price" placeholder="Discounted Price" value=""></div>
                                <div class="mb-3"><span
                                        class="text-danger">@error('discounted_price'){{$message}}@enderror</span></div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="file" name="image"
                                        placeholder="Upload Image"></div>
                                <div class="mb-3"><span class="text-danger">@error('image'){{$message}}@enderror</span>
                                </div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="number" name="stock"
                                        placeholder="Stock"></div>
                                <div class="mb-3"><span class="text-danger">@error('stock'){{$message}}@enderror</span>
                                </div>
                                <div class="mb-3"></div>
                                <div class="mb-3"><input class="form-control" type="text" name="status"
                                        placeholder="Status"></div>
                                <div class="mb-3"><span class="text-danger">@error('status'){{$message}}@enderror</span>
                                </div>
                                <div class="mb-3"></div>
                                <div><button class="btn btn-primary d-block w-100" type="submit"
                                        style="background: #17c6aa;">Add Product</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
const disc = () => {


    const price = document.getElementById('price').value;
    const discount = document.getElementById('discount').value;

    const perc = (price * discount) / 100;

    document.getElementById('percent').value = price - perc;



}
</script>
<!--Content-->

@endsection