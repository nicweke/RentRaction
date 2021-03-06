<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
            <script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
            
            <script>
              (adsbygoogle = window.adsbygoogle || []).push({
                google_ad_client: "ca-pub-4529508631166774",
                enable_page_level_ads: true
              });
            </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="generator" content="Mobirise v4.8.6, mobirise.com">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <!--------- New ------------------------->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="shortcut icon" href="{{asset('assets/images/rentraction-logo-122x129.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{asset('assets/web/assets/mobirise-icons/mobirise-icons.css')}}">
        <link rel="stylesheet" href="{{asset('assets/tether/tether.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-grid.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap-reboot.min.css')}}">
        <link rel="stylesheet" href="{{asset('assets/socicon/css/styles.css')}}">
        <link rel="stylesheet" href="{{asset('assets/dropdown/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/theme/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/mobirise/css/mbr-additional.css')}}" type="text/css"> 
 
        <!------------ For owner------------->
        <link rel="stylesheet" href="{{asset('assets/icon54/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/icon54-v4/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/soundcloud-plugin/style.css')}}">
        <link rel="stylesheet" href="{{asset('assets/font-awesome/css/font-awesome.css')}}">

        <!-------------------Main layout--------------------------------->
        <link rel="stylesheet" href="{{asset('assets/animatecss/animate.min.css')}}">
 
    </head>
    <body>
        @include('includes.mainNav')
        <div class="container">
            {{--@include('includes.messages')--}}
            @yield('content')
        </div>

        @include('includes.footer')

    </body>
     <script src="{{asset('assets/web/assets/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('assets/popper/popper.min.js')}}"></script>
    <script src="{{asset('assets/tether/tether.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/smoothscroll/smooth-scroll.js')}}"></script>
    <script src="{{asset('assets/touchswipe/jquery.touch-swipe.min.js')}}"></script>
    <script src="{{asset('assets/vimeoplayer/jquery.mb.vimeo_player.js')}}"></script>
    <script src="{{asset('assets/parallax/jarallax.min.js')}}"></script>
    <script src="{{asset('assets/dropdown/js/script.min.js')}}"></script>
    <script src="{{asset('assets/theme/js/script.js')}}"></script> 
    <script src="{{asset('assets/formoid/formoid.min.js')}}"></script>
    <script src="{{asset('assets/viewportchecker/jquery.viewportchecker.js')}}"></script>

</html>