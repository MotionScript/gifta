@extends('frontend.frontend_master')
@section('content')













<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/vendor/nucleo/css/nucleo.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/vendor/%40fortawesome/fontawesome-free/css/all.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('frontend/asset/dashboard/css/argon9f1e.css?v=1.1.0') }}" type="text/css">










<div class="main-content">
    <!-- Header -->
    <div class="header py-7 py-lg-5 pt-lg-9 theme-g-bg">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-8 px-5">
              <h1 class="text-white">Reset password</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
        <div class="card bg-white border-0 mb-0">
            <div class="card-header pb-3">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-dark mb-5">
                <small>Enter your email below</small>
              </div>
              <form role="form" action="{{ route('password.email') }}" method="POST">
                @csrf
                
                <span>
                <strong class="text-danger"> <x-auth-validation-errors class="mb-4" :errors="$errors" /></strong>
                </span>  
                 
                            <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-future"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Email" type="email" name="email" required>
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit" class="btn btn-success my-4">Reset Password</button>
                </div>
                <div class="row mt-3">
                  <div class="col-6">
                    <a href="{{ route('login') }}" class="text-dark"><small>Login</small></a>
                  </div>
                  <div class="col-6 text-right">
                    <a href="{{ route('register') }}" class="text-dark"><small>Create an account</small></a>
                  </div>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>






















@endsection