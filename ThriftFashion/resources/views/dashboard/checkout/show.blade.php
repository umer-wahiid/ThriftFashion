@extends('dashboard.include.main')
@section('content')

<!---Content-->
<div class="container-fluid">
    <h3 class="text-dark mb-4">Checkout</h3>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Checkout</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show as $key=>$item)
                        <tr>
                            <th scope="row" >{{++$key}}</th>
                            <td>{{$item->checkout}}</td>
                            <td><a href="{{ url('dashboard/checkout/edit') }}/{{$item->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px; padding:5px;"></i></a>
                            <a href="{{ url('dashboard/checkout/destroy') }}/{{$item->id}}"><i class="fa-solid fa-trash" style="font-size: 20px; padding:5px;"></i></a></td>
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