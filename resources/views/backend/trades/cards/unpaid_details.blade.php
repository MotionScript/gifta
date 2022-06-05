@extends('admin.admin_master')
@section('content')


@php
        $currency = App\Models\Currency::where('status',1)->get();
        $cardname = App\Models\Card::where('id', $card->card_id)->first();
        // $user = App\Models\User::where('id', Auth::guard('web')->user()->id)->first();
      
@endphp




@foreach ($currency as $c)
<div class="box">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
   @if ($card->type == 'Card Trade')
   Unpaid Card Details 
   @elseif ($card->type == 'Bitcoin Trade')
   Unpaid Bitcoin Trade Details  
   @endif
    
    </h4>
    </div>
    <h4 class="text-danger  text-center">Amount to be paid: <b>{{ $c->code }} {{ $card->pay }}</b></h4>
    <div class="box-body">


<form action="">
      <div class="row">

              <div class="col-md-6">
                  <div class="form-group">
                      <label>Customer</label>
                      <input type="text" class="form-control" value="{{ $card['user']['name'] }}" readonly>
                  </div>
              </div>

              <div class="col-md-6">
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" class="form-control" value="${{ $card->amount }}" readonly>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Rate</label>
                    <input type="text" class="form-control" value="${{ $card->rate }}" readonly>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Time and Date</label>
                   
                    <input type="text" class="form-control" value=" {{ $card->created_at->diffForHumans() }}" readonly>
                    
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label>Type</label>
                   
                 @if ($card->type == 'Card Trade')
                 <input type="text" class="form-control" value=" {{ $cardname->name }}" readonly>
                 @elseif ($card->type == 'Bitcoin Trade')
                 <input type="text" class="form-control" value=" {{ $card->type }}" readonly>
                 @endif
                    
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label>Sub Type</label>
                   
                    @if ($card->type == 'Card Trade')
                    <input type="text" class="form-control" value=" {{ $cardname['SubCard']['name'] }}" readonly>
                    @else
                        
                    @endif
                    
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label>Comment / more info</label>
                   
                    <input type="text" class="form-control" value=" {{ $card->comment }}" readonly>
                   
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label>Amount to be paid</label>
                    
                    <input type="text" class="form-control" value="{{ $c->code }} {{ $card->pay }}" readonly>
                    @endforeach
                </div>
            </div>

          @if ($card->type == 'Card Trade')
          <div class="col-12"><h3 class="text-center shadow">Card Images  Payment Proves</h3></div>
          @elseif ($card->type == 'Bitcoin Trade')
          <div class="col-12"><h3 class="text-center shadow">Bitcoin Trade Payment Proves</h3></div>
              
          @endif
         
            @foreach ($images as $image)
            <div class="col-md-6">
                <div class="form-group">
                    <label>Card Image(s)</label>
                    
                    <img src="{{ asset($image->images) }}" style="auto">
                    
                </div>
            </div>
            @endforeach

            <div class="col-12"><h3 class="text-center shadow p5 "><b>{{ $card['user']['name'] }} Bank Details</b></h3></div>


            <div class="col-md-4">
                <div class="form-group">
                    <label>Bank Name</label>
                   
                    <input type="text" class="form-control" value="{{ $card['user']['bank_name'] }}" readonly>
                   
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Account Number</label>
                   
                    <input type="text" class="form-control" value="{{ $card['user']['account_no'] }}" readonly>
                   
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label>Account Name</label>
                   
                    <input type="text" class="form-control" value="{{ $card['user']['account_name'] }}" readonly>
                   
                </div>
            </div>





            <div class="col-12"><h5 class="text-center shadow p5 text-danger"><b>If you have credited {{ number_format($card->pay, 2) }} to user, kindly press the button below to complete this trade</b></h5></div>
             <div class="card-footer">
                <a href="{{ route('credit-now', $card->id) }}" class="btn btn-success text-center" id="credit">Done And Credited</a>
             </div>
      </div>
















</form>
















    </div>
</div>









































@endsection