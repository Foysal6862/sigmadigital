@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Add User Form</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <form class="user" action="{{route('save-user')}} " method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="phone" name="phone">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="role" class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="address" name="role">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="status" id="status-id" class="form-control"  required>
                                <option value="">Select an Option</option>
                                <option value="active">Active</option>
                                <option value="inactive">Inactive</option>
                            </select>
                        </div>
                      </div>
                      <div class="col-md-12 text-center">
                        <button data-loading-text="Processing..."
                                class="btn btn-primary btn-round" type="submit">Save User Info
                        </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
