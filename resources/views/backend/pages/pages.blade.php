@extends('admin.admin_master')

@section('content')




<div class="row">

    <div class="col-md-12 ">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title ">Manage Pages</h3>
         <a type="button" class="btn btn-primary btn-fw" data-toggle="modal" data-target="#exampleModal" style="float: right">
   Add Page
  </a>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
            
<thead>
                
    <tr>
<th>Page Name</th>
<th>Slug</th>
<th>Action</th>
    </tr>
        
</thead>
<tbody>
    @foreach ($pages as $i)
        <tr>
            <td width="50%">{{ $i->name }}</td>
            <td>{{$i->slug}}</td>
            <td  class="btn-group">
              <a href="{{ route('edit-page', $i->id) }}" class="btn btn-danger"><i class="fa fa-edit"></i>  Edit</a>
                <a href="{{ route('delete-page', $i->id) }}" id="delete" class="btn btn-info"><i class="fa fa-trash"></i>  Delete</a>
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
          <h5 class="modal-title" id="exampleModalLabel">New Page </h5>
          <a type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </a>
        </div>
        <div class="modal-body">
         <form action="{{route('add-page')}}" method="POST">
            @csrf

<div class="form-group">
<label>Page Name </label>
<input type="text" name="name" class="form-control"  required>
</div>



        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-danger" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add Page">
        </div>
    </form>
      </div>
    </div>
  </div>










@endsection