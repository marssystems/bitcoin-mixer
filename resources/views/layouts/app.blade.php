<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('page_title')</title>

      <!-- bootsrap4-->
      <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
      <!-- font awesome -->
      <!-- animate css -->
      <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
      <!-- font awesome -->
      <link rel="stylesheet" href="{{ asset('css/all.css') }}">
      <!-- yu2fl -->
      <link rel="stylesheet" href="{{ asset('css/jquery.yu2fvl.css') }}">
      <!-- custom css -->
      <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
      <!-- Font Awesome Icons -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

      <!-- <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/material-icons.css') }}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/plugins.css') }}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/stylesheet.css') }}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/chat.css') }}" />
      <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/custom.css') }}" /> -->
      <!--<link rel="icon" href="{{ asset('bundles/frontend/assets/images/favico.ico?v=1572529364') }}">-->
      <meta name="keywords"
        content="bitcoin mixer, bitcoin tumbler, bitcoin anonymizer, anonymizer bitcoin, litecoin mixer, bitcoin cash mixer, smart mixer, crypto mixer, crypto tumbler, bitcoin laundry, Btc mix,crypto mixer, coin mix, bitcoin blender">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

   </head>

   <body>
      <!-- wrapper -->
      <div class="wrapper">

         @yield('header_images')
         
         @yield('content')

      </div>
      @yield('start_mixing')
      <!--Privacy Section-->   
      <!-- footer -->
        <div class="container-fluid" style="background-color:#4b43b3;">
            <div class="container">

                <div class="row">
                    <!-- box start -->
                    <div class="col-lg-12 box fade_anim text-center">
                        <br>
                       <a style="font-size: 16px; color: #fff; margin: 12px 15px; font-weight: lighter;" href="{{ route('home', app()->getLocale()) }}">@lang('layout.home')</a>
                       <a style="font-size: 16px; color: #fff; margin: 12px 15px; font-weight: lighter;" href="{{ route('start.mixing', app()->getLocale()) }}">@lang('layout.start_mixing')</a>
                       
                       <a style="font-size: 16px; color: #fff; margin: 12px 15px; font-weight: lighter;" href="{{ route('home', app()->getLocale()) }}#faq">@lang('layout.faq')</a>
                       <a style="font-size: 16px; color: #fff; margin: 12px 15px; font-weight: lighter;" href="{{ route('home', app()->getLocale()) }}#fee">@lang('layout.fees')</a>
                    </div>

                </div>
                <div class="row">
                    <!-- box start -->
                    <div class="col-lg-12 float-right">
                        <div class="col-lg-4 float-right">

                            <a href="#" style="padding: 7px 20px; color:palevioletred; border: 1px solid white; border-radius: 50px; float: right; margin-top: 30px;">@lang('layout.soon')</a>
                            <h3 style="font-weight: lighter; color: #fff; margin-top: 30px; float: right; padding: 3px 10px;">SmartMixer</h3>
                        </div>
                        <div class="col-lg-4 box fade_anim float-left">
                            <br>
                            <a href="#"><img src="{{ asset('data/playStore.png') }}" width="130" height="45"></a>
                            <a href="#"><img src="{{ asset('data/appStore.png') }}" width="130" height="45"></a>
                        </div>
                    </div>

                </div>
                <br>
                <!-- footer end -->

            </div>
        </div>
        <div id="go-top" class="help-btn btn btn-3">
        <i class="fas fa-arrow-alt-circle-up"></i>
    </div>
        <div class="container-fluid" style="background-color:#2e2e8e; padding-bottom: 5px;">
            <div class="container">
                <div class="row" style="background-color: #2e2e8e;">
                    <div class="col-lg-12 float-right">
                        <p class="text-fff" style="float: right; padding: 10px">
                            Copyright © 2019 <b> </b> <i class="fas fa-heart" aria-hidden="true"></i> All Reserved By <b class="custom-text-primary-two">SmartMixer</b></b>
                        </p>
                    </div>
                </div>
            </div>
        </div>

      <!-- Code end -->
      <!-- wrapper -->
      <!-- Scripts -->
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <!-- popper js -->
      <script src="{{ asset('js/popper.min.js') }}"></script>
      <!-- boostrap js -->
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- scroll reveal -->
      <script src="{{ asset('js/scrollreveal.js') }}"></script>
      <!-- yu2fl -->
      <!-- custom js -->
      <script src="{{ asset('js/custom.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/plugins.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/wallet-address-validator.min.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/clipboard.min.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/main.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/jquery.qrcode.js') }}"></script>
      <script src="{{ asset('bundles/frontend/assets/js/jquery.cookie.js') }}"></script>
      <script src="{{ asset('js/jquery.yu2fvl.js') }}"></script>
      @yield('slider')
      <!-- <script src="{{ asset('bundles/frontend/assets/js/chat.js') }}"></script> -->
      <script src="{{ asset('bundles/frontend/assets/js/custom.js') }}"></script>
   </body>
</html>