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
              <h1 class="text-white">Sign Up</h1>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5 mb-5">
            <div class="row justify-content-center">
        <div class="col-lg-7 col-md-7">
          <div class="card bg-white border-0 mb-0">
            <div class="card-header pb-3">
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-dark mb-5">
                <small>Create an account to trade with us</small>
              </div>
              <form role="form" action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                
              @csrf 
              
              @if (Session::has('error'))
              <div class="alert alert-danger" role="alert">
              <strong>{{ session::get('error') }}</strong>
              </div>  
              @endif 
              <div class="row">
                                    
              <div class="col-md-6">
                <div class="form-group shardow  ">
                  <label><b>Full Name</b></label>
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text text-future"><i class="ni ni-circle-08"></i></span>
                    </div>
                    <input class="form-control" placeholder="Full Name" type="text" name="name" required autocomplete="off">
                  </div>
                  @error('name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                                  </div>
                </div>                   
                 
                
     <div class="col-md-6">
      <div class="form-group shardow  ">
        <label><b>Phone</b></label>
        <div class="input-group input-group-alternative">
        <div class="input-group-prepend">
        <span class="input-group-text text-future"><i class="ni ni-mobile-button"></i></span>
        </div>
        <input class="form-control" placeholder="Phone Number" type="number" name="phone" required autocomplete="off">
        </div>
        @error('phone')
        <span class="text-danger">{{ $message }}</span>
        @enderror
            </div>
       </div>           
                



<div class="col-md-6">
  
  <div class="form-group shardow  ">
    <label><b>Pin</b></label>
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text text-future"><i class="ni ni-key-25"></i></span>
      </div>
      <input class="form-control" placeholder="Transaction Pin 4 digit" type="number" name="pin" required autocomplete="off">
    </div>
    @error('pin')
    <span class="text-danger">{{ $message }}</span>
@enderror
                    </div>
</div>




               <div class="col-md-6">
                <div class="form-group shardow">
                  <label><b>Email Address</b></label>
                <div class="input-group input-group-alternative">
                  <div class="input-group-prepend">
                    <span class="input-group-text text-future"><i class="ni ni-email-83"></i></span>
                  </div>
                  <input class="form-control" placeholder="Email" type="email" name="email" required  autocomplete="off">
                </div>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
                                </div>
               </div>
               

          <div class="col-md-12">
            <div class="form-group shardow">
              <label><b>Profile Photo</b></label>
          <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
              <span class="input-group-text text-future"><i class="ni ni-image"></i></span>
              </div>
              
              <input class="form-control"  type="file" name="image" required>
          </div>
          @error('image')
          <span class="text-danger">{{ $message }}</span>
      @enderror
                          </div>
          </div>


                           <div class="col-md-6">
                            <div class="form-group shardow">
                              <label><b>Password</b></label>
                            <div class="input-group input-group-alternative">
                              <div class="input-group-prepend">
                                <span class="input-group-text text-future"><i class="ni ni-lock-circle-open"></i></span>
                              </div>
                              <input class="form-control" placeholder="Password" type="password" name="password"  required  autocomplete="off">
                            </div>
                            @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                                            </div>
                           </div>

  <div class="col-md-6">
    <div class="form-group shardow">
      <label><b>Confirm Password</b></label>
    <div class="input-group input-group-alternative">
      <div class="input-group-prepend">
        <span class="input-group-text text-future"><i class="ni ni-lock-circle-open"></i></span>
      </div>
      <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation"  required  autocomplete="off">
    </div>
       </div>

    </div>                                           



                <div class="col-md-6 my-4">
                  <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id=" customCheckLogin" type="checkbox" required>
                    <label class="custom-control-label" for=" customCheckLogin">
                      <span class="text-muted">Agree to <a href="#">Terms &amp; Conditions</a></span>
                    </label>
                  </div>
                </div>
                 
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary form-control ">Create an account</button>
               
                  </div>
                
                  
                 
                     <div class="col-md-12">
                      <a href="{{ route('login') }}" class=" my-4 shadow btn btn-info form-control"><small>Login</small></a>
                     </div>
                   
                  
                </div>
              </div>
              </form>
            </div>
          </div>

        </div>
      </div>
          </div>























































@endsection