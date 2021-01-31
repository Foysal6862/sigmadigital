
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
                        <th>Subject</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach ($records as $inquiry)
                    <tr>
                        <td>{{ $loop->iteration }} </td>
                        <td>{{ $inquiry->name}} </td>
                        <td>{{ $inquiry->email}}</td>
                        <td>{{ $inquiry->subject}}</td>
                        <td>{{($inquiry->created_at)}}</td>
                        <td>
                            <a href="{{url('inquiry/'.$inquiry->id)}}" class="btn btn-info btn-circle">
                                <span class="fas fa-eye"></span>
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


