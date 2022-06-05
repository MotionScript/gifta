@extends('admin.admin_master')
@section('title', 'Settings')
@section('content')









@php
    $site = App\Models\Backend\SiteSettings::find(1);
@endphp





    <div class="card">
    
        <div class="card header p-3"><h3>Update Site Settings</h3></div>
        <div class="card-body">
            <form action="{{ route('site-update', $site->id) }}" method="POST">
                @csrf
               
                <div class="row">
                    
                    
                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Site Name</label>
                            <input type="text" name="name" class="form-control"  value="{{ $site->name }}">
                        </div>
                    </div><!--end col-md-6-->
                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Site Phone</label>
                            <input type="text" name="phone" class="form-control"  value="{{ $site->phone }}">
                        </div>
                    </div><!--end col-md-6-->
                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Site Email</label>
                            <input type="text" name="email" class="form-control"  value="{{ $site->email }}">
                        </div>
                    </div><!--end col-md-6-->
                    <div class="col-md-12"><!--col-md-6-->
                        <div class="form-group">
                            <label>Site Address</label>
                            <textarea name="address" class="form-control">{{ $site->address }}</textarea>
                        </div>
                    </div><!--end col-md-6-->

                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Facebook</label>
                            <textarea name="facebook" class="form-control">{{ $site->facebook }}</textarea>
                        </div>
                    </div><!--end col-md-6-->

                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Instagram</label>
                            <textarea name="instagram" class="form-control">{{ $site->instagram }}</textarea>
                        </div>
                    </div><!--end col-md-6-->

                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Twitter</label>
                            <textarea name="twitter" class="form-control">{{ $site->twitter }}</textarea>
                        </div>
                    </div><!--end col-md-6-->


 <div class="col-md-12"><!--col-md-6-->
                        <div class="form-group">
                            <label>Tawk Live Chat Script</label>
                            <textarea name="chat"  class="form-control">{{ $site->chat }}</textarea>
                        </div>
                    </div><!--end col-md-6-->





                    
<div class="col-md-12">
    <h4 class="text-center shadow  p-4"><b>Extral Settings</b></h4>
</div>


                    <div class="col-md-6"><!--col-md-6-->
                        <div class="form-group">
                            <div class="controls">
                                <fieldset>
              <input type="checkbox" id="checkbox_2" name="blog" value="1" {{ $site->blog == 1 ? 'checked' : ' ' }}>
              <label for="checkbox_2">Disable Blog</label>
              </fieldset>
              <fieldset>
              <input type="checkbox" id="checkbox_3" name="bitcoin" value="1" {{ $site->bitcoin == 1 ? 'checked' : ' ' }}>
              <label for="checkbox_3">Disable Bitcoin Buying</label>
              </fieldset>
                            </div></div></div>

                            <div class="col-md-6"><!--col-md-6-->
                                <div class="form-group">
                                    <div class="controls">

              <fieldset>
                <input type="checkbox" id="checkbox_4" name="usdt" value="1" {{ $site->etherum == 1 ? 'checked' : ' ' }}>
                <label for="checkbox_4">Disable USDT Buying</label>
                </fieldset>

                <fieldset>
                    <input type="checkbox" id="checkbox_5" name="maintenance" value="1" {{ $site->maintenance == 1 ? 'checked' : ' ' }}>
                    <label for="checkbox_5">Maintenace Mode?</label>
                    </fieldset>
              <div class="help-block"></div></div>
                        </div>
                    </div><!--end col-md-6-->

                   




                </div>
                <div class="card-footer">
                    <input type="submit" class="btn btn-info" value="Update Site">
                </div>
            </form>
        </div>
   

    <div class="card">
    
        <div class="card header text-center p-4"><h3>Update Site Logo</h3></div>
        <div class="card-body">

            <form action="{{ route('update-logo', $site->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="old_wlogo" value="{{ $site->wlogo }}">
                <input type="hidden" name="old_dlogo" value="{{ $site->dlogo }}">
                <input type="hidden" name="old_favicon" value="{{ $site->favicon }}">

                 <div class="row">

                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>White Bg Logo</label>
                            <input type="file" name="wlogo" class="form-control" required>
                            <img src="{{ asset($site->wlogo) }}" style="width:50px; height:50px">
                        </div>
                    </div><!--end col-md-6-->
                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Blue Bg Logo</label>
                            <input type="file" name="dlogo" class="form-control" required>
                            <img src="{{ asset($site->dlogo) }}" style="width:50px; height:50px">
                        </div>
                    </div><!--end col-md-6-->

                    <div class="col-md-4"><!--col-md-6-->
                        <div class="form-group">
                            <label>Site Favicon</label>
                            <input type="file" name="favicon" class="form-control" required>
                            <img src="{{ asset($site->favicon) }}" style="width:50px; height:50px">
                        </div>
                    </div><!--end col-md-6-->


<div class="card-footer">
    <input type="submit" value="Update Logos" class="btn btn-info">
</div>












                 </div>
















            </form>



        </div>
    </div>













































@endsection