@extends('layouts.app')
@section('page_title', 'Start Mixing')

@section('header_images')
    <!-- <img class="header-effect1" src="{{ asset('bundles/frontend/assets/images/header/header-effect1.png') }}" alt="header effect">
    <img class="header-effect12" src="{{ asset('bundles/frontend/assets/images/header/header-effect12.png') }}" alt="header effect"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/material-icons.css') }}" />
    
    <link type="text/css" rel="stylesheet" href="{{ asset('data/stylesheet.css') }}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/chat.css') }}" /> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/custom.css') }}" />
@endsection
@section('content')
<!-- Start Header Section -->
<div class="header">
        <!-- navbar -->
        <!-- Navbar -->
        <div class="navbar" style="background-color: #4B43B2;">
            <div class="container">
                <div class="sec1">
                    <a href="{{ route('home', app()->getLocale()) }}" class="brand-logo">
                        <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" alt="Smart Mixer Logo"
                            class="responsive-img" style="margin-top: 18px;">
                    </a>
                </div>
                <div class="sec2">
                    <div id="menus">
                    <ul>
                        <li><a class="waves-effect waves-light" href="{{ route('start.mixing', app()->getLocale()) }}">@lang('welcome.mixing')</a></li>
                        
                        <li><a class="waves-effect waves-light" href="#fee">@lang('layout.fees')</a></li>
                        <li><a class="waves-effect waves-light" href="#faq">@lang('layout.faq')</a></li>
                        <li><a class="waves-effect waves-light" href="#blog">@lang('welcome.blog')</a></li>
						<li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{strtoupper(app()->getLocale())}}</a>
                            <div class="dropdown-menu" aria-labelledby="dropdown09">
                               <ul>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'zh') }}">Chinese</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'de') }}">German</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'en') }}">English</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'es') }}">Spanish</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'fr') }}">French</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'it') }}">Italian</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ja') }}">Japanese</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ko') }}">Korean</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'ru') }}">Russian</a></li>
                    <li><a href="{{ route(\Illuminate\Support\Facades\Route::currentRouteName(), 'tr') }}">Turkish</a></li>
								   </ul>
                            </div>
                        </li>
                       <a href="{{ url('/logout') }}" ><button class="nav_btn" id="nav_search_btn"><span><i class="fas fa-sign-out-alt"></i></span></button></a>
                    </ul>
                    </div>
                    <div class="main_hamburger" id="main_hamburger">
                        <button class="hamburger">
                        <span id="span" class=""></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- navbar -->
        <!-- navbar -->
    </div>
    <!-- End Header Section-->


    <!-- End Header Section-->


    <section class="mixer-container">
    <section class="">

<div class="container">

    <div>
        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
            <h3>Admin Dashboard</h3>
            <p>Welcome to your dashboard!</p>
        </div>
    </div>

</div>

</section>

        <div class="step-container container" id="step-4">

            <div class="step-four-content">

                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Status</th>
                      <th scope="col">Coin Type</th>
                      <th scope="col">Order ID</th>
                      <th scope="col">Code</th>
                      <th scope="col">Input Address</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($mixes as $mix)
                    <tr>
                      <th scope="row">{{$loop->iteration}}</th>
                      <td>{{ $mix->status }}</td>
                      <td>{{ $mix->coin }}</td>
                      <td>{{ $mix->order_id }}</td>
                      <td>{{ $mix->code }}</td>
                      <td>{{ $mix->input_address }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{ $mixes->links() }}
            </div>
        </div>

    </section>
  
@endsection
