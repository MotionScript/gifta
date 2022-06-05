@extends('frontend.frontend_master')
@section('title', 'Pages')
@section('content')






<section class="section parallax effect-section" style="background-image: url(../asset/images/section7_1596361531.png);">
    <div class="mask dark-bg opacity-8"></div>
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                <h6 class="white-color-light font-w-500"></h6>
                <h1 class="display-4 white-color m-0px">{{$page->name}}</h1>
            </div>
        </div>
    </div>
</section>
<section class="p-50px-t">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12 m-30px-b align-self-center">
                <p><p>{!!  $page->body  !!}</p></p>
            </div>
        </div>
    </div>
</section>


































@endsection