@extends('admin.admin_master')
@section('content')


@php
        $currency = App\Models\Currency::where('status',1)->get();
@endphp




<div class="row">

    <div class="col-md-12 ">

    <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title ">Unpaid Card Trades</h3>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
           <div class="table-responsive ">
             <table id="example1" class="table table-bordered table-striped">
            
<thead>
                
    <tr>
<th>Name</th>
<th>Type</th>
<th>Amount</th>
<th>Rate</th>
<th>To Be Paid</th>
<th>Time</th>
<th>Action</th>
    </tr>
        
</thead>
<tbody>
    @foreach ($unpaid as $i)
        <tr>
            <td>{{ $i['user']['name'] }}</td>
            <td>
                @if ($i->type == 'Card Trade')
                <span class="badge badge-pill badge-primary"> {{ $i->type }}</span>
                @elseif ($i->type == 'Bitcoin Trade') 
                <span class="badge badge-pill badge-info"> {{ $i->type }}</span> 
                @elseif ($i->type == 'USDT Trade') 
                <span class="badge badge-pill badge-warning"> {{ $i->type }}</span> 
                @endif 
            </td>
            <td>${{ $i->amount }}</td>
            <td>${{ $i->rate }}</td>
            @foreach ($currency as $c)
            <td>{{ $c->code }} {{ number_format($i->pay, 2) }}</td>
            @endforeach
            <td>{{ $i->created_at->diffForHumans() }}</td>
            <td>
                <a href="{{ route('unpaid-details', $i->id) }}" class="btn btn-info"><i class="fa fa-eye"></i>  View</a>
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