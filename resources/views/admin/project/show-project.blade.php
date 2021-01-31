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
                                <h2 class="text-center bg-primary text-white">Preview of <strong>{{$project->name}}</strong> </h2>
                            </div>
                            <div class="body">
                                <table class="table table-striped">
                                    <tbody>
                                    <tr>
                                        <td>project Logo</td>
                                        <td><img src="{{asset($project->logo??'')}}" alt="" width="80px" height="60px"> </td>
                                    </tr>
                                    <tr>
                                        <td>Project Name</td>
                                        <td>{{$project->name??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Project Budget($)</td>
                                        <td>{{$project->project_budget??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Payment Status</td>
                                        <td>{{$project->payment_status??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Project Status</td>
                                        <td>{{$project->project_status??'-'}}</td>
                                    </tr>
                                    <tr>
                                        <td>Create At</td>
                                        <td>{{$project->created_at}}</td>
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
