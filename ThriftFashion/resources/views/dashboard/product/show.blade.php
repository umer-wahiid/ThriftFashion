@extends('dashboard.include.main')
@section('content')

    <!---Content-->
	<div class="container-fluid">
        <h3 class="text-dark mb-4">Product</h3>
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6 text-nowrap">
                        <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                    </div>
                    <div class="col-md-6">
                    <div class="text-md-end dataTables_filter" id="dataTable_filter">
                    <a href="{{ url('dashboard/product/create') }}"><button type="button" style="background: #17c6aa; color: white;" class="btn">Add Product</button></a>
                            </div>
                </div>
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Product</th>
                                <th scope="col">Category</th>
                                <th scope="col">Brand</th>
                                <th scope="col">Detail</th>
                                <th scope="col">Price</th>
                                <th scope="col">discount</th>
                                <th scope="col">discounted_price</th>
                                <th scope="col">Stock</th>
                                <th scope="col">Image</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($show as $key=>$item)
                            <tr>
                                <th scope="row" >{{++$key}}</th>
                                <td>{{$item->product}}</td>
                                <td>{{$item->category}}</td>
                                <td>{{$item->brand}}</td>
                                <td>{{$item->desc}}</td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->discount}}</td>
                                <td>{{$item->discounted_price}}</td>
                                <td>{{$item->stock}}</td>
                                <td><img src="{{url($item->image)}}" width="50" height="50"></td>
                                <td>{{$item->status}}</td>
                                <td><a href="{{ url('dashboard/product/edit') }}/{{$item->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                                <a href="{{ url('dashboard/product/destroy') }}/{{$item->id}}"><i class="fa-solid fa-trash"></i></a>
                    </td>
                            
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr></tr>
                        </tfoot>
                    </table>
                </div>
                
            </div>
        </div>
    </div>
    <!--Content-->

@endsection