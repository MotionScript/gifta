@extends('admin.admin_master')
@section('title', 'FAQ')
@section('content')








<div class="row">

    <div class="col-md-8">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">FAQ <span class="badge badge-pill badge-danger"></span></h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
               <thead>
                   <tr>
                       <th>Quations</th>
                    <th>Answers</th>
                    
                    <th>Date</th>
                       <th>Action</th>
                       
                   </tr>
               </thead>
               <tbody>
                 @foreach($faq as $w)
                   <tr>
                       <td>{{$w->q}}</td>
                       <td>{{ $w->a }}</td>
                       
                           <td>{{$w->created_at->diffforhumans()}}</td>
                       <td>
                        <a  class="btn btn-info  " href="{{ route('edit-faq', $w->id) }}" ><i class="fa fa-edit"></i></a>
                       <a  class="btn btn-danger" id="delete" href="{{ route('delete-faq', $w->id) }}" ><i class="fa fa-trash"></i></a>
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
          <h3 class="box-title">Add FAQ</h3>
        </div>


        <form  method="POST" action="{{ route('post-faq') }}"   >
            @csrf


<div class="form-group">
    <label>Question</label>
   
    <input type="text" name="q" class="form-control" required>
   
</div>

<div class="form-group">
    <label>Answer</label>
   
   <textarea name="a"  cols="10" rows="3" class="form-control" required></textarea>
   
</div>




<div class="form-group">
    
    <input type="submit" class="btn btn-rounded btn-info" value="Add">
</div>

</form>
</div>

</div>

</div>
 

























































































@endsection