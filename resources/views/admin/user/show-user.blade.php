@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-8 ">
        <div class="panel panel-default >
            <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <div class="row clearfix">
                    <div class="offset-md-5 col-md-8 card shadow">
                        <div class="card">
                            <div class="header">
                                <h2 class="text-center bg-primary text-white">Preview of <strong>{{$user->name}}</strong> </h2>
                            </div>
                            <div class="body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$user->name??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$user->email??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone No</td>
                                        <td>{{$user->phone??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Role</td>
                                        <td>{{$user->role??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$user->status??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Create At</td>
                                        <td>{{$user->created_at}}</td>
                                    </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>

@endsection
