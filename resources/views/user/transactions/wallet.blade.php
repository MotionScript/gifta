@extends('user.user_master')
@section('title', 'Wallet')
@section('content')

@php
    $currency = App\Models\Currency::where('status',1)->get();
    $user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first();
@endphp



<div class="col-12">
    <div class="box">
        <div class="box box-solid bg-primary">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
   {{ $user->name }} Bank Details
    
    </h4>
    </div>
    <div class="box-body">
        <form class="form-horizontal form-element col-12" method="POST" action="{{route('update-bank', $user->id)}}">
            @csrf
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 control-label">Bank Name</label>
    
                <div class="col-sm-10">
                  <input type="text" class="form-control" value="{{ $user->bank_name }}" name="bank_name" placeholder="">
                  @error('bank_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="inputEmail" class="col-sm-2 control-label">Account Number</label>
    
                <div class="col-sm-10">
                  <input type="number" class="form-control" value="{{ $user->account_no }}" name="account_no" placeholder="">
                  @error('account_no')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPhone" class="col-sm-2 control-label">Account Name</label>
    
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="account_name" id="inputPhone" placeholder="" value="{{ $user->account_name }}">
                   @error('account_name')
                  <span class="text-danger">{{ $message }}</span>
              @enderror
                </div>
              </div>
              
             
             
              <div class="form-group row">
                <div class="ml-auto col-sm-10">
                    <input type="submit"  value="Update Bank" class="btn btn-rounded btn-info">
                 
                </div>
              </div>
            </form>
    </div>
        </div>
    </div>
</div>










@endsection