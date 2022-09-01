@extends('dashboard.include.main')
@section('content')

<!---Content-->
<div class="container-fluid">
    <h3 class="text-dark mb-4">Queries</h3>
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 text-nowrap">
                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable"></div>
                </div>
                <div class="col-md-6">
            </div>
            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                <table class="table my-0" id="dataTable">
                    <thead>
                        <tr>
                            <th scope="col">S.No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show as $key=>$item)
                        <tr>
                            <th scope="row" >{{++$key}}</th>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->message}}</td>
                            <td>
                            <a href="{{ url('dashboard/contact/destroy') }}/{{$item->id}}"><i class="fa-solid fa-trash" style="font-size: 20px; padding:5px;"></i></a></td>
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