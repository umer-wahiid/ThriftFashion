@extends('dashboard.include.main')
@section('content')

<!---Content-->
<div class="container-fluid">
    <h3 class="text-dark mb-4">Brand</h3>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                </div>
                <div class="col-md-6">
                <div class="text-md-end dataTables_filter" id="dataTable_filter">
                <a href="{{url('dashboard/brand/create')}}"><button type="button" style="background: #17c6aa; color: white;" class="btn">Add Brand</button></a>
                        </div>
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Brand</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show as $key=>$item)
                        <tr>
                            <th scope="row" >{{++$key}}</th>
                            <td>{{$item->brand}}</td>
                            <td><a href="{{ url('dashboard/brand/edit') }}/{{$item->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px; padding:5px;"></i></a>
                            <a href="{{ url('dashboard/brand/destroy') }}/{{$item->id}}"><i class="fa-solid fa-trash" style="font-size: 20px; padding:5px;"></i></a></td>
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