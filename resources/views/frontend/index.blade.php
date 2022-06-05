@extends('frontend.frontend_master')
@section('content')

@php
    $first = App\Models\HomePage\FirstSection::find(1);
    $second = App\Models\HomePage\SecondSection::all();
    $third = App\Models\HomePage\ThirdSection::find(1);

    $testi = App\Models\HomePage\Testimony::all();
@endphp




<style>
.ml2 .letter {
  display: inline-block;
  line-height: 1em;
}

</style>



<section class="effect-section theme-g-bg">
    <div class="effect-1 opacity-1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 361.1 384.8" style="enable-background:new 0 0 361.1 384.8;" xml:space="preserve" class="injected-svg svg_img dark-color">
            <path d="M53.1,266.7C19.3,178-41,79.1,41.6,50.1S287.7-59.6,293.8,77.5c6.1,137.1,137.8,238,15.6,288.9 S86.8,355.4,53.1,266.7z"></path>
        </svg>
    </div>
    <div class="svg-bottom">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="100%" height="96px" viewBox="0 0 100 100" version="1.1" preserveAspectRatio="none" class="injected-svg svg_img white-color">
            <path d="M0,0 C16.6666667,66 33.3333333,99 50,99 C66.6666667,99 83.3333333,66 100,0 L100,100 L0,100 L0,0 Z"></path>
        </svg>
    </div>
    <div class="container">
        <div class="row full-screen align-items-center p-100px-tb justify-content-center">
            <div class="col-md-7 col-lg-6 m-50px-t m-100px-b md-m-0px-b">
                <h1 class="display-4 m-10px-b white-color ml4" ><span class="ml2">{{ $first->title }}</span></h1>
                <p class="font-2 white-color-light">{{ $first->sm }}</p>
                <div class="p-20px-t m-btn-wide">
                    <a class="m-btn m-btn-radius m-btn-t-white m-10px-r" href="{{ route('login') }}">
                        <span class="m-btn-inner-text">Sign In</span>
                        <span class="m-btn-inner-icon arrow"></span>
                    </a>
                    <a class="m-btn m-btn-radius m-btn-white" href="{{ route('register') }}">
                        <span class="m-btn-inner-text">Sign Up</span>
                        <span class="m-btn-inner-icon arrow"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-5 col-lg-6 m-50px-t m-100px-b" >
                <img class="max-width-120" src="{{ asset($first->image) }}" title="" alt="">
               
            </div>
        </div>
    </div>
</section>
<div class="p-0px-t section-top-up-100">
    <div class="container">
        
        <div class="owl-carousel red-bg md-p-25px p-45px border-radius-8 white-bg box-shadow-lg" data-items="8" data-nav-dots="true" data-md-items="6" data-sm-items="5" data-xs-items="4" data-xx-items="3" data-space="40" data-autoplay="true">
            
            @foreach ($second as $i)
            <div>
                <img src="{{ asset($i->image) }}">
            </div>
            @endforeach
             </div>
       
    </div>
</div>


<section class="section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 m-15px-tb">
                <img src="{{ asset($third->image) }}" title="" alt="">
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="p-45px-l lg-p-0px-l">
                    <h2 class="m-15px-b">{{ $third->title }}</h2>
                    <p class="lead">{{ $third->body }}</p>
                    <ul class="list-type-03">
                        <li>Fast Payout</li>
                        <li>Round the Clock Access</li>
                        <li>Secure Trading</li>
                        <li>No extra Charges</li>
                    </ul>
                    <div class="p-20px-t">
                        <a class="m-btn m-btn-radius m-btn-dark m-10px-r" href="">
                            <span class="m-btn-inner-text">More About us</span>
                            <span class="m-btn-inner-icon arrow"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 min-h-350px z-index-1">
                <div class="p-50px-tb p-50px-r d-flex align-items-center h-100">
                    <div>
                        <h1 class="display-4 font-w-700 white-color">What They Said About Us </h1>
                        <p class="lead white-color-light"></p>
                        
                    </div>
                </div>
                <div class="mask-50vw left parallax" style="background-image: url({{ asset('frontend/asset/images/g.jpg') }});">
                    <div class="mask opacity-2 dark-bg"></div>
                </div>
            </div>
            <div class="col-lg-5 ml-auto align-self-center p-100px-tb lg-p-50px-tb">
                <div class="owl-carousel owl-nav-arrow-bottom" data-items="1" data-nav-arrow="true" data-nav-dots="false" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-autoplay="true">
                @foreach($testi as $i)
                    <div class="m-30px-b">
                        <div class="avatar-100 border-radius-50 d-inline-block m-20px-b">
                            <img src="{{ asset($i->image) }}" title="" alt="">
                        </div>
                        
                        <p>{{ $i->body }}</p>
                        <div>
                            <h6>{{ $i->name }}</h6>
                            <span>{{ $i->job }}</span>
                        </div>
                    </div>@endforeach
                               
                         
                         
                                </div>
            </div>
        </div>
    </div>
</section>


@php
$why = App\Models\HomePage\WhyUs::all();
@endphp




<section class="section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 m-15px-tb">
                <h1 class="display-4 font-w-700">Why Choose Us </h1>
                <div class="border-top-2 border-color-dark p-30px-t m-30px-t">
                    
                </div>
            
            </div>
            <div class="col-lg-12 ml-lg-auto m-15px-tb">
                <div class="row">
                @foreach($why as $w)
                    <div class="col-md-3 m-20px-tb">
                        <div class="p-25px-lr  gray-bg border-radius-15 theme-hover-bg hover-top">
                            <div class="only-icon-60 m-20px-b dark-color d-inline-block">
                                <i class="{{$w->icon}}"></i>
                            </div>
                            <h5>{{$w->title}}</h5>
                            <p class="m-0px">{{$w->body}}</p>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section gray-bg p-0px-b">
    <div class="container text-center py-3">
        <h3 class="h1 m-15px-b">Ready To Trade With Us?</h3>
        <a class="m-btn m-btn-radius m-btn-dark m-10px-r" href="{{ route('register') }}">
            <span class="m-btn-inner-text">Get Started</span>
            <span class="m-btn-inner-icon arrow"></span>
        </a>
        <div class="row md-m-25px-b m-40px-b justify-content-center">
           
        </div>
    </div>
    <div class="container-fluid text-center">
        
    </div>
</section>
<!-- End Section -->
<!-- Section -->
@php
    $cards = App\Models\Card::all();
    $currency = App\Models\Currency::where('status',1)->get();
@endphp
<section class="section bg-no-repeat bg-right-center  white-color-light links-white"  style="background-color: #020947">
    
    <div class="container shadow  rounded">
        <div class="row">
            <div class="col-lg-5 m-15px-tb">
                <div class="row md-m-25px-b m-40px-b" id="rate">
                    <div class="col-lg-12">
                        <h3 class="h1 m-15px-b text-light">Rate Calculator</h3>
                        <p class="m-0px font-2">Enter the required details in each field below to calculate how much you will be paid.</p>
                    </div>
                </div>
               
    <form class="rd-mailform" method="post" action="" class="">
        <div class="form-row">
            <div class="col-12">
                <div class="form-group">
                    <label><b>Amount</b></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text">$</div>
                        </div>
                 <textarea class="form-control" id="amount1" cols="10" rows="1" name="amount"  placeholder="0.00"></textarea>
                </div></div>
                </div>
<div class="col-sm-12">
<div class="form-group">
    <label><b>Select Category</b></label>
    <select name="category_id" class="form-control">
        <option value="" selected="" disabled="">Select</option>
       @foreach($cards as $card)
         <option value="{{ $card->id }}">{{ $card->name }}</option>
         @endforeach
    </select>
</div>
</div>                        
<div class="col-sm-12">
<div class="form-group">
    <label><b>Select Sub-Category</b></label>

 <select name="subcategory_id" id="rate1" class="form-control select" onClick="calculate()">
     <option value="">Select</option>
       
 </select>

</div>
</div>


<div class="col-12">
    
    <div class="form-group">
        <label><b>Total</b></label>
        <div class="input-group">
            <div class="input-group-prepend">
              @foreach ($currency as $c)
              <div class="input-group-text">{{ $c->code }}</div>  
              @endforeach
            </div>
    <textarea  cols="10" rows="1" class="form-control" id="preview" placeholder="You Get" readonly></textarea>
    </div></div>


    
   
</div>
</div>
</form>





<script>
calculate = function()
{
    var resources = document.getElementById('amount1').value;
    var minutes = document.getElementById('rate1').value; 
    document.getElementById('preview').value = parseInt(resources)*parseInt(minutes);
     
   }
</script>


@php
    $best = App\Models\SubCard::where('is_best', 1)->get();
@endphp
                
                              
                
            </div>
            <div class="col-lg-7 m-15px-tb ml-auto " >
                <h3 class="h1 m-15px-b text-light text-right">Top Rated Cards</h3>
                <table class="table table-borderless white-color-light text-white shadow">
                    <tr>
                        <th>Card Name</th>
                        

                        <th>Card Type</th>
                        <th>Rate</th>
                        <th>Updated</th>
                    </tr>
                    @foreach ($best as $b)
                    <tr class="white-color-light">
                        <td>{{ $b['card']['name'] }}</td><br>
                        
                        
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->rate }}</td>
                        <th><small>{{ $b->updated_at->diffforhumans() }}</small></th>
                    </tr>
                    
                    @endforeach
                </table>
                                    </div>
            </div>
        </div>
    </div>
</section>
@php
$faq = App\Models\HomePage\FAQ::all();
@endphp
<section class="section p-0px-tb" id="faq">
    <div class="container">
        <div class="row align-items-center justify-content-around">
            <div class="col-lg-5 m-15px-tb">
                <img src="{{ asset('frontend/asset/images/faq.jpg') }}" title="" alt="">
            </div>
            <div class="col-lg-7 col-xl-7 m-15px-tb">
                <h3 class="h2 m-20px-b">frequently asked questions</h3>
                <div class="accordion accordion-08 p10 border-radius-15 " >
                @foreach($faq as $f)
                <div class="acco-group">
                <a href="#" class="acco-heading">{{$f->q}}</a>
                <div class="acco-des">{{$f->a}}</div>
                </div>
                @endforeach

                  
                   
                
            </div>
        </div>
    </div>
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

<script type="text/javascript">
var textWrapper = document.querySelector('.ml2');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4,1],
    opacity: [0,1],
    translateZ: 0,
    easing: "easeOutExpo",
    duration: 950,
    delay: (el, i) => 70*i
  }).add({
    targets: '.ml2',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
</script>
























































@endsection