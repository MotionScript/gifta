@extends('user.user_master')
@section('content')








@php
    $user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first();
@endphp



    <div class="container-full">
		<!-- Content Header (Page header) -->
		<div class="content-header">
			<div class="d-flex align-items-center">
				<div class="mr-auto">
					<h3 class="page-title">User Profile</h3>
					
				</div>
			</div>
		</div>

		<!-- Main content -->
		<section class="content">

		  <div class="row">
			  <div class="col-12 col-lg-12 col-xl-4">
				  
				  <div class="box box-inverse bg-img" style="background-image: url();" data-overlay="2">
					  

					  <div class="box-body text-center pb-50">
						<a href="#">
						  <img class="avatar avatar-xxl avatar-bordered" src="{{ asset($user->image) }}" alt="">
						</a>
						<h4 class="mt-2 mb-0"><a class="hover-primary text-white" href="#">{{ Auth::guard('web')->user()->name }}</a></h4>
			<small>{{ $user->email }}</small>
					  </div>

					  <ul class="box-body flexbox flex-justified text-center" data-overlay="4">
						<li>
						<form enctype="multipart/form-data" method="post" action="{{ route('user-image-chnage', $user->id) }}">
                            @csrf
                            <input type="hidden" name="old_image" value="{{ $user->image }}">
                            <input type="file" name="image" class="form-control"  required>
                            @error('image')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        
						</li>
						<li>
						  <span class="opacity-60">Change Profile</span><br>
						 
						</li>
						<li>
						  <input type="submit" value="Update" class="btn btn-info" >
						</li>
                    </form>
					  </ul>
					</div>				

              </div><!--end row-->
		
              
<div class="col-md-8">
    <div class="box p-15">
        <h3 class="page-title">Change Password</h3>	
    <form class="form-horizontal form-element col-12" method="POST" action="{{ route('user-change-pass', $user->id) }}">
      @csrf
        <div class="form-group row">
          <label for="inputName" class="col-sm-2 control-label">Current Password</label>

          <div class="col-sm-10">
            <input type="password" class="form-control" name="cpass"  placeholder="">
            @error('cpass')
<span class="text-danger">{{ $message }}</span>
@enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 control-label">New Password</label>

          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputEmail" name="password" placeholder="">
            @error('password')
<span class="text-danger">{{ $message }}</span>
@enderror
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPhone" class="col-sm-2 control-label">Confirm Password</label>

          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPhone" name="password_confirmation" placeholder="">
            @error('password_confirmation')
<span class="text-danger">{{ $message }}</span>
@enderror
          </div>
        </div>
        
        
       
        <div class="form-group row">
          <div class="ml-auto col-sm-10">
            <input type="submit" class="btn btn-rounded btn-danger" value="Update Password">
          </div>
        </div>
      </form>
</div></div>



<div class="col-md-6">

    <div class="box p-15">	
        <h3 class="page-title">Update Profile</h3>	<br>	
        <form class="form-horizontal form-element col-12" method="POST" action="{{ route('user-update', $user->id) }}">
          @csrf
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" value="{{ $user->name }}" name="name" placeholder="">
              @error('name')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>

          <div class="form-group row">
            <label for="inputName" class="col-sm-2 control-label">Phone</label>
            <div class="col-sm-10">
              <input type="number" class="form-control" value="{{ $user->phone }}" name="phone" placeholder="">
              @error('phone')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>


          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

            <div class="col-sm-10">
              <input type="email" class="form-control" value="{{ $user->email }}" name="email" placeholder="">
              @error('email')
              <span class="text-danger">{{ $message }}</span>
          @enderror
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 control-label">Date Registered</label>

            <div class="col-sm-10">
              <input type="tel" class="form-control" readonly id="inputPhone" placeholder="" value="{{ $user->created_at->diffforhumans() }}">
            </div>
          </div>
          
         
         
          <div class="form-group row">
            <div class="ml-auto col-sm-10">
                <input type="submit"  value="Update Profile" class="btn btn-rounded btn-info">
             
            </div>
          </div>
        </form>
    </div></div>




   
        </section>


























































@endsection