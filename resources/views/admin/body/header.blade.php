{{-- @php
    $site = App\Models\Settings\Site_setting::find(1);
@endphp --}}

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="icon" href="">

    <title>Admin | @yield('title')</title>
    
	<!--sweetalert cdn--->
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>


<!--sweet alert-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
 <!-- Vendors Style-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="{{ asset('backend/css/vendors_css.css') }}">
  <!--JQUERY CDN-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-- Style-->  
 <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
 <link rel="stylesheet" href="{{ asset('backend/css/skin_color.css') }}">
<!---TOASTER CSS CDN-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
@livewireStyles
  </head>