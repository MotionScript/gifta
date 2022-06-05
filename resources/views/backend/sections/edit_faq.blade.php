@extends('admin.admin_master')
@section('content')








<div class="col-md-8">
    
    <div class="box">
        <div class="table-responsive container">
        <div class="box-header with-border">
          <h3 class="box-title">Edit FAQ</h3>
        </div>


        <form  method="POST" action="{{ route('update-faq', $f->id) }}"   >
            @csrf


<div class="form-group">
    <label>Question</label>
   
    <input type="text" name="q" class="form-control" value="{{$f->q}}" required>
   
</div>

<div class="form-group">
    <label>Answer</label>
   
   <textarea name="a"  cols="10" rows="3" class="form-control" required>{{$f->a}}</textarea>
   
</div>




<div class="form-group">
    
    <input type="submit" class="btn btn-rounded btn-info" value="Add">
</div>

</form>
</div>

</div>

</div>
 

































@endsection