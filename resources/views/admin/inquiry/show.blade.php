
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
                                <h2 class="text-center bg-primary text-white">Preview of <strong>{{$inquiry->name}}</strong> </h2>
                            </div>
                            <div class="body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>{{$inquiry->name??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{$inquiry->email??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Subject</td>
                                        <td>{{$inquiry->subject??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Message</td>
                                        <td>{{$inquiry->message??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Create At</td>
                                        <td>{{$inquiry->created_at}}</td>
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


