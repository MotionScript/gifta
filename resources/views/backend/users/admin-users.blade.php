@extends('admin.admin_master')
@section('title', 'Admin Users')
@section('content')







<div class="row">

    <div class="col-md-12 ">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title ">All Admin Users </h3>
         <a type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#exampleModal" style="float: right">
            Add New Admin
           </a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">

<thead>

    <tr>
<th>Image</th>
<th>Name</th>
<th>Email</th>
<th>Access</th>
<th>Action</th>
    </tr>

</thead>
<tbody>
    @foreach ($admins as $i)
        <tr>
            <td><img src="{{ asset($i->image) }}" style="width:50px; height:50px"></td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->email }}</td>

            <td>
                @if ($i->user == 1)
                <span class="badge btn-primary">Users</span>@else @endif
                @if ($i->wallet == 1)
                <span class="badge btn-warning">Wallet</span>@else @endif
                @if ($i->card == 1)
                <span class="badge btn-info">Cards</span>@else @endif
                @if ($i->trade == 1)
                <span class="badge btn-success">Trades</span>@else @endif
                @if ($i->frontend == 1)
                <span class="badge btn-danger">Frontend</span> @else @endif
                @if ($i->page == 1)
                <span class="badge btn-info">Pages</span>@else @endif
                @if ($i->settings == 1)
                <span class="badge btn-info">Settings</span>@else @endif
            </td>
            <td>
                <a href="{{ route('edit-admin-user', $i->id) }}" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                <a href="{{ route('delete-admin-user', $i->id) }}" class="btn btn-danger" id="delete"><i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr>
    @endforeach
</tbody>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
    </div>










  <!-- Add Modal -->
  <div class="modal fade " id="exampleModal"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add New Admin</h5>
          <a type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </a>
        </div>
        <div class="modal-body">
         <form action="{{route('add-admin-user')}}" method="POST" enctype="multipart/form-data">
            @csrf

<div class="form-group">
<label>Name</label>
<input type="text" name="name" class="form-control"  required>
</div>

<div class="form-group">
    <label>Email </label>
    <input type="text" name="email" class="form-control"  required>
    </div>

    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control"  required>
        </div>

        <div class="form-group">
            <label>Profile Image</label>
            <input type="file" name="image" class="form-control"  required>
            </div>

        </div>
<div class="card-footer">
    <h4 class="text-center">Permission and Access</h4>
<div class="row">
<div class="col-md-4"><!--col-md-6-->
<div class="form-group">
<div class="controls">


<fieldset>
    <input type="checkbox" id="checkbox_3" name="wallet" value="1" >
    <label for="checkbox_3">Wallet </label>
    </fieldset>

    <fieldset>
        <input type="checkbox" id="checkbox_4" name="card" value="1" >
        <label for="checkbox_4">Cards Categories</label>
        </fieldset>
        <fieldset>
            <input type="checkbox" id="checkbox_11" name="adminuserrole" value="1" >
            <label for="checkbox_11">Admin User Role</label>
            </fieldset>
</div>
 </div>
</div><!--end col-->


<div class="col-md-4"><!--col-md-6-->
    <div class="form-group">
    <div class="controls">
    <fieldset>
    <input type="checkbox" id="checkbox_2" name="user" value="1" >
    <label for="checkbox_2">Users</label>
    </fieldset>

    <fieldset>
        <input type="checkbox" id="checkbox_8" name="settings" value="1">
        <label for="checkbox_8">Settings</label>
        </fieldset>

        <fieldset>
            <input type="checkbox" id="checkbox_5" name="trade" value="1" >
            <label for="checkbox_5">Trades</label>
            </fieldset>

    </div>
     </div>
    </div><!--end col-->

<div class="col-md-4"><!--col-md-6-->
    <div class="form-group">
    <div class="controls">


    <fieldset>
        <input type="checkbox" id="checkbox_6" name="frontend" value="1">
        <label for="checkbox_6">Frontend</label>
        </fieldset>

        <fieldset>
            <input type="checkbox" id="checkbox_7" name="page" value="1">
            <label for="checkbox_7">Pages</label>
            </fieldset>

    </div>
     </div>
    </div><!--end col-->


</div>
</div>




        <div class="modal-footer">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Register Admin">
        </div>
    </form>
      </div>
    </div>
  </div>







@endsection
