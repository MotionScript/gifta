<!doctype html>
<html lang="en">
    
@php
    $site = App\Models\Backend\SiteSettings::find(1);
    $seo = App\Models\Backend\SEO::find(1);
    $page = App\Models\Page::where('slug', 'about-us')->first();
@endphp
<head>
        <title>{{ $site->name }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="{{ $seo->meta_author }}" />
        <meta name="description" content="{{ $seo->meta_description }}">
        <meta name="keywords" content="{{ $seo->meta_keywords }}">
        <meta name="title" content="{{ $seo->meta_title }}">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset($site->favicon) }}">
        <link href="{{ asset('frontend/asset/static/plugin/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/font-awesome/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/et-line/style.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/themify-icons/themify-icons.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/owl-carousel/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/plugin/magnific/magnific-popup.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/asset/static/style/master.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/asset/static/style/sweetalert.css') }}" type="text/css">
        
        
    </head>
    <body data-spy="scroll" data-target="#navbar-collapse-toggle" data-offset="98">
    <!-- Header -->
    <header class="header-nav header-light">
        <div class="fixed-header-bar">
            <!-- Header Nav -->
            <div class="navbar navbar-main navbar-expand-lg">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img class="logo-dark" style="width: 100px" title="{{ url('/') }}" src="{{ asset('frontend/asset/images/logo2.png') }}">
                        <img class="logo-light" style="width: 100px" title="{{ url('/') }}" src="{{ asset('frontend/asset/images/logo.png') }}">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-main-collapse" aria-controls="navbar-main-collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse navbar-collapse-overlay" id="navbar-main-collapse">
                        <ul class="navbar-nav ml-auto">     
                            <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>                                                  
                            <li class="nav-item"><a class="nav-link" href="{{ route('page',['slug'=>$page->slug])}}">{{$page->name}}</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/#rate') }}">Rate Calculator</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ url('/#faq') }}">FAQ</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Header Nav -->
        </div>
    </header>  