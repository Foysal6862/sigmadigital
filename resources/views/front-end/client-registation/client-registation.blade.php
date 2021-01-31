<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('/')}}admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('/')}}admin/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h3 class="text-success text-center">{{Session::get('message')}} </h3>
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
                {!! Form::open(['route'=>'save-client', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'class'=>'user']) !!}
                <div class="form-group">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Name" name="name">
                    <input type="hidden" class="form-control form-control-user" id="client_registation_id" placeholder="Name" name="client_registation_id">
                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}} </span>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control form-control-user" id="email" placeholder="Email Address" name="email">
                  <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ''}} </span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="phone" placeholder="Phone No" name="phone">
                  <span class="text-danger">{{$errors->has('phone') ? $errors->first('phone') : ''}} </span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="address" placeholder="Address" name="address">
                </div>
                <br>
                <div class="form-group row">
                    <label for="" class="control-label col-md-2">Flag</label>
                    <div class="col-md-10">
                        <label><input type="radio" name="flag"  value="1">Admin</label>
                        <label><input type="radio" name="flag" value="0">Client</label>
                    </div>
              </div>
                <div class="register" style="display: block !important;margin-right: auto !important; margin-left: auto !important; width:50% !important">
                    <input type="submit" name="btn" value="Register Account" class="btn btn-primary btn-user btn-block">
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('/')}}admin/vendor/jquery/jquery.min.js"></script>
  <script src="{{asset('/')}}admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('/')}}admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('/')}}admin/js/sb-admin-2.min.js"></script>

</body>

</html>
