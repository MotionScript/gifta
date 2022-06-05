@extends('admin.admin_master')
@section('title', 'Third Section')
@section('content')









<div class="card">
    <div class="card-header container">Home Page Third Section</div>
    <div class="card-body">
        <form  method="POST" action="{{ route('update-third') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $third->id }}">
            <input type="hidden" name="old_image" value="{{ $third->image }}">

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" value="{{ $third->title }}">
            </div>

             <div class="form-group">
                <label>Text Small</label>
                <textarea name="body" class="form-control">{{ $third->body }}</textarea>
            </div>

            <div class="col-md-12">
            <div class="form-group">
               
                    <label>Image</label>
                <input type="file" name="image" class="form-control">
                </div>
                 </div>
        <div class="col-md-12 text-center">
            <div class="form-group">
                <img src="{{ asset($third->image) }}" style="width:200px; height:150px">
            </div>
        </div>
        <div class="card-footer">
            <input type="submit" class="btn btn-info" value="Update">
        </div>
        </form>
    </div>
</div>




































@endsection
    
