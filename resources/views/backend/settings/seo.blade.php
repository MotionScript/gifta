@extends('admin.admin_master')
@section('title', 'seo')
@section('content')








<div class="card">
    
    <div class="card header p-3"><h3>Update Site SEO</h3></div>
    <div class="card-body">
        <form action="{{ route('update-seo', $seo->id) }}" method="POST">
            @csrf

           
            <div class="row">



                <div class="col-md-4"><!--col-md-6-->
                    <div class="form-group">
                        <label>Meta Author</label>
                        <input type="text" name="meta_author" class="form-control"  value="{{ $seo->meta_author }}">
                    </div>
                </div><!--end col-md-6-->
                <div class="col-md-4"><!--col-md-6-->
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"  value="{{ $seo->meta_title }}">
                    </div>
                </div><!--end col-md-6-->
                <div class="col-md-4"><!--col-md-6-->
                    <div class="form-group">
                        <label>Meta Keywords</label>
                        <input type="text" name="meta_keywords" class="form-control"  value="{{ $seo->meta_keywords }}">
                    </div>
                </div><!--end col-md-6-->
                <div class="col-md-12"><!--col-md-6-->
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control">{{ $seo->meta_description }}</textarea>
                    </div>
                </div><!--end col-md-6-->

<div class="card-footer">
    <input type="submit" class="btn btn-info" value="Submit">
</div>




            </div>
        </form>
    </div>
</div>










































    
@endsection