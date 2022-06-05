@extends('admin.admin_master')
@section('title', 'Site Users')
@section('content')







<div class="row">

    <div class="col-md-12 ">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title ">Site Users </h3>
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
<th>Signup Date</th>
<th>Action</th>
    </tr>
        
</thead>
<tbody>
    @foreach ($users as $i)
        <tr>
            <td><img src="{{ asset($i->image) }}" style="width:50px; height:50px"></td>
            <td>{{ $i->name }}</td>
            <td>{{ $i->email }}</td>
            
            <td>{{ Carbon\Carbon::parse($i->created_at)->format('D, d F Y') }}</td>
            <td>
                <a href="{{ route('user-details', $i->id) }}" class="btn btn-info"><i class="fa fa-eye"></i>View</a>
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















@endsection