@extends('admin.master')

@section('body')
<div class="row">
    <div class="col-md-12 ">
        <div class="panel panel-default card shadow mb-4">
            <div class="panel-heading">
                <h2 class="text-center m-0 font-weight-bold text-primary">Edit Client Form</h2>
            </div>
            <div class="panel-body p-4">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <form class="user" action="{{route('update-client')}} " method="POST" class="form-horizontal">
                    @csrf
                    <div class="form-group row">
                        <label for="name" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="name" name="name" value="{{$client->name}} ">
                          <input type="hidden" class="form-control" id="name" name="client_id" value="{{$client->id}} ">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="email" name="email" value="{{$client->email}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="phone" class="col-sm-2 col-form-label">Phone No</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" id="phone" name="phone" value="{{$client->phone}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="address" name="address" value="{{$client->address}}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="status" id="status" class="form-control"  required>
                                <option value="">Select an Option</option>
                                <option value="active" {{$client->status=='active' ? 'selected' : ''}} >Active</option>
                                <option value="inactive" {{$client->status=='inactive' ? 'selected' : ''}} >Inactive</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="payment-status" class="col-sm-2 col-form-label">Payment Status</label>
                        <div class="col-sm-10">
                            <select  data-live-search="true"  name="payment_status" id="payment-status" class="form-control"  required>
                                <option value="">Select an Option</option>
                                <option value="paid" {{$client->payment_status=='paid' ? 'selected' : ''}} >Paid</option>
                                <option value="unpaid" {{$client->payment_status=='unpaid' ? 'selected' : ''}} >Unpaid</option>
                                <option value="trial" {{$client->payment_status=='trial' ? 'selected' : ''}} >Trial</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="" class="control-label col-md-2">Logo</label>
                        <div class="col-md-10">
                            <input type="file"  name="logo" accept="logo/*">
                            <br>
                            <img src="{{asset($client->logo)}}" alt="" height="50px" width="80px">
                        </div>
                  </div>
                  <div class="form-group row">
                    <label for="add_client_url" class="col-sm-2 col-form-label">Add Client Url</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="add_client_url" name="add_client_url" value="{{$client->add_client_url}}">
                    </div>
                  </div>
                  <div class="form-group row">
                        <label for="" class="control-label col-md-2">Show On Home Page</label>
                        <div class="col-md-10">
                            <label><input type="radio" name="show_on_home_page"  value="1" {{$client->show_on_home_page == 1 ? 'checked' : ''}} >Yes</label>
                            <label><input type="radio" name="show_on_home_page" value="0" {{$client->show_on_home_page == 0 ? 'checked' : ''}} >No</label>
                        </div>
                  </div>
                      <div class="col-md-12 text-center">
                        <button data-loading-text="Processing..."
                                class="btn btn-primary btn-round" type="submit">Update Client Info
                        </button>
                      </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
