@extends('admin.admin_master')
@section('content')



<div class="col-12">
    <div class="box">
        <div class="box box-solid bg-info">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
    Edit {{ $admin->name }} Role

    </h4>
    </div>

    <div class="box-body">


<span class="text-center"><img src="{{ asset($admin->image) }}" style="border-radius: 100%; margin:auto; margin-left:40% "></span>


 <form action="{{route('update-admin-user', $admin->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="form-group">
<label>Name</label>
<input type="text" name="name" value="{{ $admin->name }}" class="form-control"  required>
</div>

<div class="form-group">
    <label>Email </label>
    <input type="text" name="email" value="{{ $admin->email }}" class="form-control"  required>
    </div>






<div class="card-footer">
    <h4 class="text-center">Permission and Access</h4>
<div class="row">
<div class="col-md-4"><!--col-md-6-->
<div class="form-group">
<div class="controls">


<fieldset>
    <input type="checkbox" id="checkbox_3" name="wallet" value="1" {{ $admin->wallet == 1? 'checked' : ' ' }}>
    <label for="checkbox_3">Wallet </label>
    </fieldset>

    <fieldset>
        <input type="checkbox" id="checkbox_4" name="card" value="1" {{ $admin->card == 1? 'checked' : ' ' }}>
        <label for="checkbox_4">Cards Categories</label>
        </fieldset>
        <fieldset>
            <input type="checkbox" id="checkbox_11" name="adminuserrole" value="1" {{ $admin->adminuserrole == 1? 'checked' : ' ' }}>
            <label for="checkbox_11">Admin User Role</label>
            </fieldset>
</div>
 </div>
</div><!--end col-->


<div class="col-md-4"><!--col-md-6-->
    <div class="form-group">
    <div class="controls">
    <fieldset>
    <input type="checkbox" id="checkbox_2" name="user" value="1" {{ $admin->user == 1? 'checked' : ' ' }}>
    <label for="checkbox_2">Users</label>
    </fieldset>

    <fieldset>
        <input type="checkbox" id="checkbox_8" name="settings" value="1" {{ $admin->settings == 1? 'checked' : ' ' }}>
        <label for="checkbox_8">Settings</label>
        </fieldset>

        <fieldset>
            <input type="checkbox" id="checkbox_5" name="trade" value="1" {{ $admin->trade == 1? 'checked' : ' ' }}>
            <label for="checkbox_5">Trades</label>
            </fieldset>

    </div>
     </div>
    </div><!--end col-->

<div class="col-md-4"><!--col-md-6-->
    <div class="form-group">
    <div class="controls">


    <fieldset>
        <input type="checkbox" id="checkbox_6" name="frontend" value="1" {{ $admin->frontend == 1? 'checked' : ' ' }}>
        <label for="checkbox_6">Frontend</label>
        </fieldset>

        <fieldset>
            <input type="checkbox" id="checkbox_7" name="page" value="1" {{ $admin->page == 1? 'checked' : ' ' }}>
            <label for="checkbox_7">Pages</label>
            </fieldset>

    </div>
     </div>
    </div><!--end col-->


</div>
</div>




        <div class="modal-footer">

          <input type="submit" class="btn btn-info" value="Update Admin">
        </div>
    </form>




    </div>
</div>







    </div>































































@endsection
