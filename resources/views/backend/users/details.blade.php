@extends('admin.admin_master')
@section('title', 'User Details')
@section('content')


<div class="card">
    <div class="card-header">{{ $user->name }}   Details</div>
    <div class="card-body">
        <form action="">

            <div class="row">
            
        
                <div class="col-md-12">
                    <div class="form-group text-center">
                        <label>Image</label> <br>
                        <img src="{{ asset($user->image) }}" style="border-radius: 100%; width:60px; height:60px">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="" value="{{ $user->name }}" class="form-control" readonly>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="" value="{{ $user->email }}" class="form-control" readonly>
                    </div>
                </div>

               

               


                


               
             <div class="col-md-6">
                    <div class="form-group">
                        <label>Registered Date</label>
                        <input type="text" name="" value="{{ Carbon\Carbon::parse($user->created_at)->format('D, d F Y') }}" class="form-control" readonly>
                    </div>
                </div>
        
        
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Balance</label>
                        <input type="text" name="" value="{{ $user->balance }}" class="form-control" readonly>
                    </div>
                </div>
        
        </div>
        
        <hr>

 
<div class="row">
 

      





              
        
              


    <a href="{{ route('delete-user', $user->id) }}" class="btn btn-danger" id="delete">Delete User</a>
        </form>
    </div>
</div>


    














@endsection