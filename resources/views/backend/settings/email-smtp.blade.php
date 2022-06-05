@extends('admin.admin_master')
@section('content')







<div class="row">

    <div class="col-md-12 col-12">
        <div class="box box-solid bg-primary">
          <div class="box-header">
            <h4 class="box-title"><strong>Email STMP Settings </strong></h4>
          </div>
        
          <div class="box-body">
                  
          <div class="col">

            
            <form action="{{ route('update-email-smtp') }}" method="POST">
                @csrf
                <div class="form-group">
                  <label>MAIL_HOST</label>
                  <input type="hidden" name="types[]" value="MAIL_HOST">
                  <input type="text" name="MAIL_HOST" value="{{ env('MAIL_HOST') }}" class="form-control">
                </div>

                <div class="form-group">
                   <label>MAIL_PORT</label>
                   <input type="hidden" name="types[]" value="MAIL_PORT">
                   <input type="text" name="MAIL_PORT" value="{{ env('MAIL_PORT') }}" class="form-control">
                 </div>

                 <div class="form-group">
                   <label>MAIL_USERNAME</label>
                   <input type="hidden" name="types[]" value="MAIL_USERNAME">
                   <input type="text" name="MAIL_USERNAME" value="{{ env('MAIL_USERNAME') }}" class="form-control">
                 </div>

                 <div class="form-group">
                   <label>MAIL_PASSWORD</label>
                   <input type="hidden" name="types[]" value="MAIL_PASSWORD">
                   <input type="text" name="MAIL_PASSWORD" value="{{ env('MAIL_PASSWORD') }}" class="form-control">
                 </div>

                 <div class="form-group">
                    <label>MAIL_ENCRYPTION</label>
                    <input type="hidden" name="types[]" value="MAIL_ENCRYPTION">
                    <input type="text" name="MAIL_ENCRYPTION" value="{{ env('MAIL_ENCRYPTION') }}" class="form-control">
                  </div>

                 <div class="form-group">
                    <label>MAIL_FROM_ADDRESS</label>
                    <input type="hidden" name="types[]" value="MAIL_FROM_ADDRESS">
                    <input type="text" name="MAIL_FROM_ADDRESS" value="{{ env('MAIL_FROM_ADDRESS') }}" class="form-control">
                  </div>


                 <input type="submit"  class="btn btn-primary" value="Update">
            </form>

          
          </div>
          </div>
          
      </div>
     
    </div>








@endsection