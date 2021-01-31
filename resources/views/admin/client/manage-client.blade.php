
@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Manage Client</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white">
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Payment Status</th>
                        <th>Client Logo</th>
                        <th>Show On Home Page</th>
                        <th>Flag</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach ($clients as $client)
                    <tr>
                        <td>{{ $i++ }} </td>
                        <td>{{ $client->name}} </td>
                        <td>{{ $client->email}}</td>
                        <td>{{ $client->phone}}</td>
                        <td>{{ $client->address}}</td>
                        <td>{{ucfirst($client->status)}}</td>
                        <td>{{ucfirst($client->payment_status)}}</td>
                        <td> <img src="{{asset($client->logo)}} " alt="" height="60px" width="80px"></td>
                        <td>{{$client->show_on_home_page == 1 ? 'yes' : 'no'}}</td>
                        <td>{{$client->flag == 1 ? 'Admin' : 'Client'}}</td>
                        <td>{{($client->created_at)}}</td>
                        <td>
                            <a href="{{route('edit-client',['id'=>$client->id])}} " class="btn btn-success btn-circle">
                                <span class="fas fa-edit"></span>
                            </a>
                            <a href="{{route('show-client',['id'=>$client->id])}}" class="btn btn-info btn-circle">
                                <span class="fas fa-eye"></span>
                            </a>
                            <a href="{{route('delete-client',['id'=>$client->id])}}" class="btn btn-danger btn-circle" onclick="return confirm('Are you sure to delete this !!')">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </table>
            </div>
        </div>
    </div>
</div>

@endsection


