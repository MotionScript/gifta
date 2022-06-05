@extends('admin.admin_master')
@section('content')







<div class="row">

    <div class="col-md-12 col-12">
        <div class="box box-solid bg-primary">
          <div class="box-header">
            <h4 class="box-title"><strong>Admin Wallet</strong></h4>
          </div>

          <div class="box-body">

          <div class="col">


            <form action="{{ route('update-admin-wallet') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $wallet->id }}">
                <div class="form-group">
                  <label>Bitcoin Buy rate</label>

                  <input type="number" name="btc_rate" value="{{ $wallet->btc_rate }}" class="form-control" required>
                </div>

                <div class="form-group">
                   <label>Bitcoin Address</label>
                  <textarea name="btc_address" id="" cols="10" rows="3" class="form-control" required>{{ $wallet->btc_address }}</textarea>

                 </div>

                 <div class="form-group">
                   <label>USDT Buy Rate</label>

                   <input type="number" name="usdt_rate" value="{{ $wallet->usdt_rate }}" class="form-control">
                 </div>

                 <div class="form-group">
                   <label>USDT Address</label>

                   <textarea name="usdt_address" id="" cols="10" rows="3" class="form-control">{{ $wallet->usdt_address }}</textarea>
                 </div>




                 <input type="submit"  class="btn btn-primary" value="Update">
            </form>


          </div>
          </div>

      </div>

    </div>








@endsection
