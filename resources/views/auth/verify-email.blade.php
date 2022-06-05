@extends('frontend.frontend_master')
@section('content')










<section class="section parallax effect-section" style="background-image: url(../asset/images/section7_1596361531.png);">
    <div class="mask dark-bg opacity-8"></div>
    <div class="container position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center">
                <h6 class="white-color-light font-w-500"></h6>
                <h1 class="display-4 white-color m-0px">Email Verification required</h1>
            </div>
        </div>
    </div>
</section>
<section class="p-50px-t">
    <div class="container">
        <div class="row flex-row-reverse">
            <div class="col-lg-12 m-30px-b align-self-center">



                @if (session('status') == 'verification-link-sent')
                <div class="mb-4 font-medium text-sm text-green-600 text-success">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
                @else
                <p>
                    Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.
                </p>
            @endif






            <div class="mt-4 flex items-center justify-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <button type="submit" class="btn btn-primary">Resend Verification Email</button>

                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 btn-danger">
                        {{ __('Log Out') }}
                    </button>
                </form>






            </div>
        </div>
    </div>
</section>


































@endsection
