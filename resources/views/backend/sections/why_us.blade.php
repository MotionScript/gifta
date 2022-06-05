@extends('admin.admin_master')
@section('title', 'Why Us')
@section('content')



















<div class="row">

    <div class="col-md-8">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Why Choose Us <span class="badge badge-pill badge-danger"></span></h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>Icon</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Date</th>
                       <th>Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                 @foreach($why as $w)
                   <tr>
                       <td>{{$w->icon}}</td>
                       <td>{{ $w->title }}</td>
                       <td>{{ $w->body }}</td>
                           <td>{{$w->created_at->diffforhumans()}}</td>
                       <td>
                        <a  class="btn btn-info  " href="{{ route('edit-why', $w->id) }}" ><i class="fa fa-edit"></i></a>
                       <a  class="btn btn-danger" id="delete" href="{{ route('delete-why', $w->id) }}" ><i class="fa fa-trash"></i></a>
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


{{-- ADD BRNADS --}}
<div class="col-md-4">
    
    <div class="box">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="box-title">Add Why Choose Us</h3>
        </div>


        <form  method="POST" action="{{ route('post-why-us') }}"   >
            @csrf
<div class="form-group">
    <label>Icon</label>
   
    <input type="text" name="icon" class="form-control" required>
    @error('icon')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Title</label>
   
    <input type="text" name="title" class="form-control" required>
   
</div>

<div class="form-group">
    <label>Body</label>
   
   <textarea name="body"  cols="10" rows="3" class="form-control" required></textarea>
   
</div>




<div class="form-group">
    
    <input type="submit" class="btn btn-rounded btn-info" value="Add">
</div>

</form>
</div>

</div>

</div>
 















































@endsection