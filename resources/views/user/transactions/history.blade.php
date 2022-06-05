@extends('user.user_master')
@section('title', 'Transaction History')
@section('content')

@php
    $currency = App\Models\Currency::where('status',1)->first();
    $user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first();
    $trade = App\Models\Backend\Trade::where('user_id', Auth::guard('web')->user()->id)->orderBy('id', 'DESC')->get();
@endphp




<div class="col-12">
    <div class="box">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
    {{ $user->name }} Transactions
    
    </h4>
    </div>
    <div class="box-body">
    <div class="table-responsive">
    <table class="table no-border">
    <thead> 					
    <tr class="text-uppercase bg-lightest">
    
    <th ><span class="text-fade">Date</span></th>
    <th ><span class="text-fade">Trade Type</span></th>
    <th ><span class="text-fade">Amount</span></th>
    <th ><span class="text-fade">Rate</span></th>
    <th ><span class="text-fade">Paid</span></th>
    <th ><span class="text-fade">Status</span></th>
    
    </tr>
    </thead>
    <tbody>
        @foreach ($trade as $item)
    
    <tr>
        <td >
    <span class="text-fade font-weight-600 d-block font-size-16">
        {{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }}
    </span></td>
        <td>
    <span class="text-fade font-weight-600 d-block font-size-16">
        @if ($item->type == 'Card Trade')
        <span class="badge badge-pill badge-primary"> Card {{ $item['card']['name']}} || {{ $item['card']['subcard']['name']}}</span>
        @elseif ($item->type == 'Bitcoin Trade') 
        <span class="badge badge-pill badge-info"> {{ $item->type }}</span> 
        @elseif ($item->type == 'USDT Trade') 
        <span class="badge badge-pill badge-warning"> {{ $item->type }}</span> 
        @endif
       
    </span></td>
        <td>
    <span class="text-fade font-weight-600 d-block font-size-16">
        ${{ $item->amount }}
    </span></td>
        <td>
    <span class="text-fade font-weight-600 d-block font-size-16">
        ${{ $item->rate }}
    </span></td>
        <td>
    <span class="text-fade font-weight-600 d-block font-size-16">
        {{ $currency->code }} {{ number_format ($item->pay,2 )}}
    </span></td>

    <td>
        <span class="text-fade font-weight-600 d-block font-size-16">
            @if ( $item->status == 0)
            <span class="badge badge-pill badge-danger">Pending</span>
            @elseif ($item->status == 1)
            <span class="badge badge-pill badge-success">Paid</span>
            @else
            <span class="badge badge-pill badge-secondary">Cancelled</span>
            @endif
        </span></td>
       
</tr>
          
    @endforeach
    </tbody>
    </table>
    </div>
    </div>
    </div>  
    </div>
    </div>
    













@endsection