@extends('admin.admin_master')
@section('title', 'Dashboard')
@section('content')

@php
    $user = App\Models\User::all();
    $cards = App\Models\Card::all();
    $subcards = App\Models\SubCard::all();
    $trades = App\Models\Backend\Trade::where('status', 1)->get();
    $trademoney = App\Models\Backend\Trade::where('status', 1)->sum('pay');
    $pendingmoney = App\Models\Backend\Trade::where('status', 0)->sum('pay');
    $cardtrade = App\Models\Backend\Trade::where('type', 'Card Trade')->where('status', 1)->sum('pay');
    $btctrade = App\Models\Backend\Trade::where('type', 'Bitcoin Trade')->where('status', 1)->sum('pay');
     $usdttrade = App\Models\Backend\Trade::where('type', 'USDT Trade')->where('status', 1)->sum('pay');
    $currency = App\Models\Currency::where('status',1)->first();
@endphp
<br>
<!-------COL COUNT BEGINS----->

<div class="row">



    <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"> <small class="text-success"><i class="fa fa-users"></i></small>  Total Users</p>

        <h3 class="text-white mb-0 font-weight-500">{{ count($user) }}</h3>


        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="fa fa-laptop"></i> </small> Total Trades</p>
        <h3 class="text-white mb-0 font-weight-500">{{ count($trades) }}</h3>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="fa fa-server"></i> </small>Total Cards Categories</p>
        <h3 class="text-white mb-0 font-weight-500">{{ count($cards) }}<small class="text-danger"><i class="fa fa-pen"></i> </small></h3>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="fa fa-angle-right"></i> </small>Total Card Sub Categories</p>
        <h3 class="text-white mb-0 font-weight-500">{{ count($subcards) }}</h3>
        </div>
        </div>
        </div>
        </div>
        <!------END COL-COUNT---->









        <div class="col-xl-3 col-md-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="cc YBC" title="PENDING"></i> </small> Total Pending Payment</p>
        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($pendingmoney, 2) }}</h3>
        </div>
        </div>
        </div>
        </div>
        <div class="col-xl-3 col-md-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="cc PPC" title="GIFT CARD"></i> </small>Total Card Traded</p>
        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($cardtrade, 2) }}<small class="text-danger"><i class="fa fa-pen"></i> </small></h3>
        </div>
        </div>
        </div>
        </div>

        <div class="col-xl-3 col-md-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="cc BTC" title="BTC"></i> </small>Total Bitcoin Traded</p>
        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($btctrade, 2) }}</h3>
        </div>
        </div>
        </div>
        </div>

        <div class="col-xl-3 col-md-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"><small class="text-success"><i class="cc USDT" title="USDT"></i> </small>Total USDT Traded</p>
        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($usdttrade, 2) }}</h3>
        </div>
        </div>
        </div>
        </div>



        <div class="col-xl-12 col-md-6">
        <div class="box overflow-hidden pull-up">
        <div class="box-body">

        <div>
        <p class="text-mute mt-20 mb-0 font-size-16"> <small class="text-success"><i class="cc NVC" title="PENDING"></i></small>  Total Money Traded</p>

        <h3 class="text-white mb-0 font-weight-500">{{ $currency->code }} {{ number_format($trademoney, 2) }}</h3>


        </div>
        </div>
        </div>
        </div>
        <!------END COL-COUNT---->




<!-- Chart's container -->
    <div class="col-md-12" id="chart"  style="height: 300px;">



    </div>












</div>











@endsection
