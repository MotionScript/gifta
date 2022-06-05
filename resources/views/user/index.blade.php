@extends('user.user_master')

@section('content')

@php
    $currency = App\Models\Currency::where('status',1)->first();
    $user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first();
    $pending = App\Models\Backend\Trade::where('status', 0)->where('user_id', Auth::guard('web')->user()->id)->sum('pay');
    $trade = App\Models\Backend\Trade::where('user_id', Auth::guard('web')->user()->id)->orderBy('id', 'DESC')->limit(3)->get();
    
@endphp
<br> 
<!-------COL COUNT BEGINS----->

<div class="row">
   
    
    
    <div class="col-md-12 col-12">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">							
        
        <div>
        <p class="text-mute mt-20 mb-0 font-size-20">  <i class="ti-wallet text-muted mr-2"></i>Pending Fund</p>
       
        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($pending, 2) }}</h3>  
 
        
    
        
        </div>
        </div>
        </div>
        </div>


        
        
      
        <!------END COL-COUNT---->
        
    
    
    
    
    

</div>






<div class="col-12">
    <div class="box">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
    Recent Transactions
    
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
        <span class="badge badge-pill badge-primary">Card {{ $item['card']['name']}} || {{ $item['card']['subcard']['name']}}</span>
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
        {{ $item->rate }}
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