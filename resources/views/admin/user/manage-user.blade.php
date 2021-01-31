
@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Manage User</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white">
                        <th>SL NO</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone No</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $i++ }} </td>
                        <td>{{ $user->name}} </td>
                        <td>{{ $user->email}}</td>
                        <td>{{ $user->phone}}</td>
                        <td>{{ $user->role}}</td>
                        <td>{{ucfirst($user->status)}}</td>
                        <td>{{($user->created_at)}}</td>
                        <td>
                            <a href="{{route('edit-user',['id'=>$user->id])}} " class="btn btn-success btn-circle">
                                <span class="fas fa-edit"></span>
                            </a>
                            <a href="{{route('show-user',['id'=>$user->id])}}" class="btn btn-info btn-circle">
                                <span class="fas fa-eye"></span>
                            </a>
                            <a href="{{route('delete-user',['id'=>$user->id])}}" class="btn btn-danger btn-circle" onclick="return confirm('Are you sure to delete this !!')">
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


