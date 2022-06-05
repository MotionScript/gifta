@extends('admin.admin_master')
@section('content')


@php
        $currency = App\Models\Currency::where('status',1)->get();
@endphp




<div class="row">

    <div class="col-md-12 ">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title ">Completed paid  Trades</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
            
<thead>
                
    <tr>
<th>Customer</th>
<th>Card | Type</th>
<th>Card Amount</th>
<th>Rate</th>
<th>amount Paid</th>
<th>Time</th>
<th>Status</th>
    </tr>
        
</thead>
<tbody>
    @foreach ($trades as $i)
        <tr>
            <td>{{ $i['user']['name'] }}</td>
            <td>
                @if ($i->type == 'Card Trade')
                <span class="badge badge-pill badge-primary">
                {{ $i['card']['name']}} || {{ $i['card']['subcard']['name']  }}</span>
                @elseif ($i->type == 'Bitcoin Trade')
                <span class="badge badge-pill badge-info">
                {{ $i->type }}</span>

                  @elseif ($i->type == 'USDT Trade')
                <span class="badge badge-pill badge-warning">
                {{ $i->type }}</span>
                @endif
            </td>
            <td>${{ $i->amount }}</td>
            <td>${{ $i->rate }}</td>
            @foreach ($currency as $c)
            <td>{{ $c->code }}  {{ number_format($i->pay, 2) }}</td>
            @endforeach
            <td>{{ $i->created_at->diffForHumans() }}</td>
            <td>
                @if ( $i->status == 1)
            <span class="badge badge-pill badge-success">Paid</span>
            @endif
            </td>
        </tr>
    @endforeach
</tbody>
             </table>
           </div>
       </div>
       <!-- /.box-body -->
     </div>
     <!-- /.box -->
    </div>















@endsection