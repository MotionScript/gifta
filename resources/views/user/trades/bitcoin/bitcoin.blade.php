@extends('user.user_master')
@section('title', 'trade bitcoin')
@section('content')



@php
    $cards = App\Models\Card::all();
    $wallet = App\Models\AdminWallet::find(1);
    $currency = App\Models\Currency::where('status',1)->get();
@endphp



<div class="col-12">
    <div class="box">
        <div class="box box-solid bg-primary">
    <div class="box-header">
    <h4 class="box-title align-items-start flex-column">
    Sell Your Bitcoin

    </h4>
    </div>
    <div class="box-body">



        <form class="rd-mailform" method="POST" action="{{ route('store-bitcoin') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col-12">
                    <div class="form-group">
                        <label><b>Amount in USD</b></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">$</div>
                            </div>
                     <textarea class="form-control" id="amount2" cols="10" rows="2" name="amount"  placeholder="0.00" required onkeyup="calculatebtc()" ></textarea>
                    </div></div>
                    </div>

    <div class="col-sm-12">
    <div class="form-group">
        <label><b>Our Rate per USD</b></label>
        <div class="input-group">
            <div class="input-group-prepend">
              <div class="input-group-text">$</div>
            </div>
     <input type="number" name="rate" id="rate2" class="form-control" value="{{ $wallet->btc_rate }}" readonly>

    </div>
    </div>


    <div class="col-12">

        <div class="form-group">
            <label><b>Amount you will get</b></label>
            <div class="input-group">
                <div class="input-group-prepend">
                  @foreach ($currency as $c)
                  <div class="input-group-text">{{ $c->code }}</div>
                  @endforeach
                </div>
        <textarea  cols="10" rows="2" class="form-control" name="pay" id="preview" placeholder="You get..." readonly></textarea>
        </div></div>
    </div>



    <div class="col-12">

        <div class="form-group">
             <label><b>USDT address to send the Coin</b></label>
            <div class="input-group">
                <div class="input-group-prepend">
                 <div class="input-group-text" id="p"><i class="cc BTC" title="BTC"></i></div>
                </div>
        <textarea  cols="10" rows="2" class="form-control" id="wallet"  readonly>{{ $wallet->btc_address }}</textarea>
        </div>
        <div class="text-center"><a type="button" class="btn btn-xs btn-danger" onclick="myFunction()" >Click To Copy Wallet</a></div>
    </div>
    </div>


    <div class="col-12">

        <div class="form-group">
            <label><b>Comment</b></label>
            <div class="input-group">
        <textarea  cols="10" rows="3" class="form-control" name="comment"  placeholder="Optional "></textarea>
        </div></div>
    </div>

   <div class="col-12">
       <div class="form-group">
           <label>Upload Payment Prove</label>
           <div class="fallback dropzone controlls">
            <input  type="file" name="image[]" id="multiImg" multiple="" required>

            <div class="row" id="preview_img"></div>
        </div>
       </div>
   </div>

   <input type="submit" class="btn btn-info" value="Proceed">

    </div>
    </form>














    </div>
    </div>
</div>














<!------SCRIPTE FOR MULTIPLE IMAGE PREVIEW--->

<script>

$(document).ready(function(){
   $('#multiImg').on('change', function(){ //on file input change
      if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
      {
        var data = $(this)[0].files; //this file data

        $.each(data, function(index, file){ //loop though each file
            if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                var fRead = new FileReader(); //new filereader
                fRead.onload = (function(file){ //trigger function on successful read
                return function(e) {
                    var img = $('<img/>').addClass('thumb').attr('src', e.target.result) .width(80)
                .height(80); //create image element
                    $('#preview_img').append(img); //append image to output element
                };
                })(file);
                fRead.readAsDataURL(file); //URL representing the file's data.
              }
          });

      }else{
          alert("Your browser doesn't support File API!"); //if File API is absent
      }
   });
  });




</script>





























@endsection
