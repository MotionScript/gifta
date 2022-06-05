@extends('admin.admin_master')
@section('title', 'Testimonies')
@section('content')
    











    <div class="row">

        <div class="col-md-8">
    
        <div class="box">
           <div class="box-header with-border">
             <h3 class="box-title">Testimonies <span class="badge badge-pill badge-danger"></span></h3>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
               <div class="table-responsive ">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                       <tr>
                           <th>Word</th>
                        <th>name</th>
                        <th>Job</th>
                        <th>Date</th>
                           <th>Action</th>
                           
                       </tr>
                   </thead>
                   <tbody>
                     @foreach($testi as $card)
                       <tr>
                           <td>{{$card->body}}</td>
                           <td>{{ $card->name }}</td>
                           <td>{{ $card->job }}</td>
                           <td><img src="{{ asset($card->image) }}" style="width: 50px"></td>
                          
                           <td >
                  
                               <a  class="btn btn-danger  " href="{{ route('delete-testi', $card->id) }}" ><i class="fa fa-trash"></i></a>
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
              <h3 class="box-title">Add Testimony</h3>
            </div>
    
    
            <form  method="POST" action="{{ route('post-testi') }}"  enctype="multipart/form-data" >
                @csrf
    <div class="form-group">
        <label>Body</label>
       
        <textarea name="body" class="form-control" required></textarea>
        @error('body')
            <span class="text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Name</label>
       
        <input type="text" name="name" class="form-control" required>
       
    </div>

    <div class="form-group">
        <label>Job</label>
       
        <input type="text" name="job" class="form-control" required>
       
    </div>
    
    <div class="form-group">
        <label>Image</label>
       
        <input type="file" name="image" class="form-control" required>
       
    </div>
    
    
    <div class="form-group">
        
        <input type="submit" class="btn btn-rounded btn-info" value="Add Testimony">
    </div>
    
    </form>
    </div>
    
    </div>
    
    </div>
     
    
    
    
    




















@endsection
