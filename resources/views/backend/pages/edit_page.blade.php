@extends('admin.admin_master')
@section('content')







<div class="row">

    <div class="col-md-12 col-12">
        <div class="box box-solid bg-primary">
          <div class="box-header">
            <h4 class="box-title"><strong>Edit Page</strong></h4>
          </div>
        
          <div class="box-body">
                  
          <div class="col">

            
            <form action="{{ route('update-admin-page') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $page->id }}">
                <div class="form-group">
                  <label>Page  Title</label>
                 
                  <input type="text" name="name" value="{{ $page->name }}" class="form-control" readonly>
                </div>

                <div class="form-group">
                   <label>Page Body</label>
                  <textarea name="body" id="editor1" cols="20" rows="10" class="form-control" required>{{ $page->body }}</textarea>
                  
                 </div>

              


                 


                 <input type="submit"  class="btn btn-primary" value="Update">
            </form>

          
          </div>
          </div>
          
      </div>
     
    </div>








@endsection