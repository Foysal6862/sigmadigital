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
                                <h2 class="text-center bg-primary text-white">Preview of <strong>{{$client->name}}</strong> </h2>
                            </div>
                            <div class="body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Logo</td>
                                        <td><img src="{{asset($client->logo??'')}}" alt="" width="80px" height="60px"> </td>
                                    </tr>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$client->name??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$client->email??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Phone No</td>
                                        <td>{{$client->phone??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Address</td>
                                        <td>{{$client->address??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <td>{{$client->status??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Status</td>
                                        <td>{{$client->payment_status??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Client Url</td>
                                        <td>{{$client->add_client_url??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Create At</td>
                                        <td>{{$client->created_at}}</td>
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
