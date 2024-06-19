@extends('layout')
@section('title','forgot-password')
@section('content')
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Custom fonts for this template-->
    <link href="{{asset('admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet"> 
</head>
<body class="bg-gradient-primary">

    <main class="login-form">

        <div class="cotainer">
      
            <div class="row justify-content-center">
      
                <div class="col-md-8">
      
                    <div class="card">
      
                        <div class="card-header">Reset Password</div>
      
                        <div class="card-body">
      
        
      
                          @if (Session::has('message'))
      
                               <div class="alert alert-success" role="alert">
      
                                  {{ Session::get('message') }}
      
                              </div>
      
                          @endif
      
        
      
                            <form action="{{ route('ResetPasswordPost') }}" method="POST">
      
                                @csrf
      
                                <div class="form-group row">
                                    <input type="text" name="token" hidden value="{{ $token }}">
                                     <div class="mb-3">
                                        <label for="name" class="form-label">E-Mail Address</label>
                                        <input type="text" name="email" class="form-control form-control-user" id="email_address" placeholder="Enter fullnanme" style="font-size: calc(80% + 3.5px);"required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label"></label>
                                        <input type="password" name="email" class="form-control form-control-user" id="email" placeholder="Enter Email Address... " style="font-size: calc(80% + 3.5px);" required>
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Confirm Password</label>
                                        <input type="password" name="password_confirmation" class="form-control form-control-user" id="password_confirmation" required>
                                    </div>
      
                                    <div class="col-md-6">
      
                                        <input type="text" id="email_address" class="form-control" name="email" required autofocus>
      
                                        @if ($errors->has('email'))
      
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
      
                                        @endif
      
                                    </div>
      
                                </div>
      
                                <div class="col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-primary">
      
                                        Reset Password
      
                                    </button>
      
                                </div>
      
                            </form>
      
                              
      
                        </div>
      
                    </div>
      
                </div>
      
            </div>
      
        </div>
      
      </main>
      
      @endsection

    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>
</body>
</html>