@extends('dashboard.include.main')
@section('content')

<!---Content-->
<div class="container-fluid">
    <h3 class="text-dark mb-4">User</h3>
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
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Image</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show as $key=>$item)
                        <tr>
                            <th scope="row" >{{++$key}}</th>
                            <td>{{$item->username}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->contact}}</td>
                            <td>{{$item->address}}</td>
                            <td>{{$item->city}}</td>
                            <td>{{$item->country}}</td>
                            <td>{{$item->image}}</td>
                            <td><a href="{{ url('dashboard/user/edit') }}/{{$item->id}}"><i class="fa-solid fa-pen-to-square" style="font-size: 20px; padding:5px;"></i></a>
                            <a href="{{ url('dashboard/user/destroy') }}/{{$item->id}}"><i class="fa-solid fa-trash" style="font-size: 20px; padding:5px;"></i></a></td>
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