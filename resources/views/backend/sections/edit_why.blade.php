@extends('admin.admin_master')
@section('content')













<div class="col-md-10">
    
    <div class="box">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="box-title">Edit Why Choose Us</h3>
        </div>


        <form  method="POST" action="{{ route('update-why-us', $item->id) }}"   >
            @csrf
<div class="form-group">
    <label>Icon</label>
   
    <input type="text" name="icon" class="form-control" value="{{$item->icon}}" required>
    @error('icon')
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label>Title</label>
   
    <input type="text" name="title" class="form-control" value="{{$item->title}}" required>
   
</div>

<div class="form-group">
    <label>Body</label>
   
   <textarea name="body"  cols="10" rows="3" class="form-control" value="" required>{{$item->body}}</textarea>
   
</div>




<div class="form-group">
    
    <input type="submit" class="btn btn-rounded btn-info" value="Update">
</div>

</form>
</div>

</div>

</div>
 




































































@endsection