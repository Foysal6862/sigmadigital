
@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Manage Project</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <table class="table table-bordered">
                    <tr class="bg-primary text-white">
                        <th>SL NO</th>
                        <th>Client Name</th>
                        <th>Project Name</th>
                        <th>Project Budget(TK.)</th>
                        <th>Payment Status</th>
                        <th>Project Status</th>
                        <th>Starting Date</th>
                        <th>Project Logo</th>
                        <th>Action</th>
                    </tr>
                    @php($i=1)
                    @foreach ($projects as $project)
                    <tr>
                        <td>{{$i++}} </td>
                        <td>{{$project->client->name}}</td>
                        <td>{{$project->name}}</td>
                        <td>{{$project->project_budget}}</td>
                        <td>{{ucfirst($project->payment_status)}}</td>
                        <td>{{ucfirst($project->project_status)}}</td>
                        <td>{{$project->starting_date}}</td>
                        <td> <img src="{{asset($project->logo)}}" width="70px" height="60px"></td>
                        {{-- <td>{{($client->created_at)}}</td> --}}
                        <td>
                            <a href="{{route('edit-project',['id'=>$project->id])}} " class="btn btn-success btn-circle" title="show">
                                <span class="fas fa-edit"></span>
                            </a>
                            <a href="{{route('show-project', ['id'=>$project->id])}} " class="btn btn-info btn-circle" title="show">
                                <span class="fas fa-eye"></span>
                            </a>
                            <a href="{{route('delete-project', ['id'=>$project->id])}} " class="btn btn-danger btn-circle" onclick="return confirm('Are you sure to delete this !!')">
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


