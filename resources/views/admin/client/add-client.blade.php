@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Add Client Form</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                {!! Form::open(['route'=>'save-client', 'method'=>'POST', 'class'=>'user form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name">
                          <input type="hidden" class="form-control" id="client_id" name="client_id">
                          <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}} </span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email">
                          <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}} </span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="phone" name="phone">
                          <span class="text-danger">{{$errors->has('phone') ? $errors->first('phone') : ''}} </span>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="address" name="address">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="status" id="status" class="form-control">
                                <option value="">Select an Option</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="payment-status" class="col-sm-2 col-form-label">Payment Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="payment_status" id="payment-status" class="form-control">
                                <option value="">Select an Option</option>
                                <option value="paid">Paid</option>
                                <option value="unpaid">Unpaid</option>
                                <option value="trial">Trial</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                            <label for="" class="control-label col-md-2">Client Logo</label>
                            <div class="col-md-10">
                                <input type="file"  name="logo" accept="logo/*">
                            </div>
                      </div>
                      <div class="form-group row">
                        <label for="add_client_url" class="col-sm-2 col-form-label">Add Client Url</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="add_client_url" name="add_client_url">
                        </div>
                      </div>
                      <div class="form-group row">
                            <label for="" class="control-label col-md-2">Show On Home Page</label>
                            <div class="col-md-10">
                                <label><input type="radio" name="show_on_home_page"  value="1">Yes</label>
                                <label><input type="radio" name="show_on_home_page" value="0">No</label>
                            </div>
                      </div>
                      <div class="form-group row">
                            <label for="" class="control-label col-md-2">Flag</label>
                            <div class="col-md-10">
                                <label><input type="radio" name="flag"  value="1">Admin</label>
                                <label><input type="radio" name="flag" value="0">Client</label>
                            </div>
                      </div>
                      <div class="col-md-12 text-center">
                        <button data-loading-text="Processing..."
                                class="btn btn-primary btn-round" type="submit">Save Client Info
                        </button>
                      </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection
