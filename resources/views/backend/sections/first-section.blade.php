@extends('admin.admin_master')
@section('content')









<div class="card">
    <div class="card-header container">Home Page First Section</div>
    <div class="card-body">
        <form  method="POST" action="{{ route('update-first') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $first->id }}">
            <input type="hidden" name="old_image" value="{{ $first->image }}">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $first->title }}">
            </div>

             <div class="form-group">
                <label>Text Small</label>
                <input type="text" name="sm" class="form-control" value="{{ $first->sm }}">
            </div>

            <div class="col-md-12">
            <div class="form-group">
               
                    <label>Image</label>
                <input type="file" name="image" class="form-control">
                </div>
                 </div>
        <div class="col-md-12 text-center">
            <div class="form-group">
                <img src="{{ asset($first->image) }}" style="width:200px; height:150px">
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-info" value="Update">
        </div>
        </form>
    </div>
</div>




































@endsection
    
