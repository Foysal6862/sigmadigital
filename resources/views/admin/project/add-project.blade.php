@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Add Project Form</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                {!! Form::open(['route'=>'save-project', 'method'=>'POST', 'class'=>'user form-horizontal', 'enctype'=>'multipart/form-data']) !!}

                    <div class="form-group row">
                        <label for="" class="control-label col-sm-2">Client Name</label>
                        <div class="col-sm-10" >
                            <select name="client_id" id="" class="form-control">
                                <option value="">--Select Client Name--</option>
                                @foreach ($clients as $client)
                                    <option value="{{$client->id}}">{{$client->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Project Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}} </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="project_budget" class="col-sm-2 col-form-label">Project Budget</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="project_budget" name="project_budget">
                            <span class="text-danger">{{$errors->has('project_budget') ? $errors->first('project_budget') : ''}} </span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="payment_status" class="col-sm-2 col-form-label">Payment Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="payment_status" id="payment_status" class="form-control">
                                <option value="">Select an Option</option>
                                <option value="paid">Paid</option>
                                <option value="unpaid">Unpaid</option>
                                <option value="trial">Trial</option>
                            </select>
                        </div>
                      </div>
                    <div class="form-group row">
                        <label for="project_status" class="col-sm-2 col-form-label">Project Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="project_status" id="project_status" class="form-control">
                                <option value="">Select an Option</option>
                                <option value="not_started">Not Started</option>
                                <option value="in_progress">In Progress</option>
                                <option value="finished">Finished</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="starting_date" class="col-sm-2 col-form-label">Starting Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="starting_date" name="starting_date">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="ending_date" class="col-sm-2 col-form-label">Ending Date</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="ending_date" name="ending_date">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="editor" class="control-label col-md-2">Note</label>
                        <div class="col-md-10">
                            <textarea name="note"  class="form-control" id="editor" ></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="" class="control-label col-md-2">Logo</label>
                        <div class="col-md-10">
                            <input type="file"  name="logo" accept="logo/*">
                        </div>
                    </div>

                      <div class="col-md-12 text-center">
                        <button data-loading-text="Processing..."
                                class="btn btn-primary btn-round" type="submit">Save Project Info
                        </button>
                      </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
