@extends('admin.admin_master')
@section('content')












<div class="row">

    <div class="col-md-8">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Section Images <span class="badge badge-pill badge-danger">{{ count($images) }}</span></h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>Image </th>
                    <th>Date</th>
                       <th>Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                 @foreach($images as $i)
                   <tr>
                       <td><img src="{{ asset($i->image) }}" style="width: 50px"></td>
                       <td>{{ Carbon\Carbon::parse($i->created_at)->format('D, d F Y') }}</td>
                      
                       <td >
              
                           <a  class="btn btn-danger" id="delete" href="{{ route('delete-i', $i->id) }}" ><i class="fa fa-trash"></i> delete</a>
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



<div class="col-md-4">
    

<div class="card">
    <div class="card-header container">Home Page Second Section</div>
    <div class="card-body">
        <form  method="POST" action="{{ route('add-second') }}" enctype="multipart/form-data">
            @csrf
            

            <div class="col-md-12">
            <div class="form-group">
               
                    <label>Image</label>
                <input type="file" name="image" class="form-control" required>
                </div>
                 </div>
       
        <div class="card-footer">
            <input type="submit" class="btn btn-info" value="Add Image">
        </div>
        </form>
       
    </div>
</div>
</div>







</div>




















@endsection
    
