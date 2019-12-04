@extends('layouts.app')
@section('page_title', 'Admin Login')

@section('header_images')
    <!-- <img class="header-effect1" src="{{ asset('bundles/frontend/assets/images/header/header-effect1.png') }}" alt="header effect">
    <img class="header-effect12" src="{{ asset('bundles/frontend/assets/images/header/header-effect12.png') }}" alt="header effect"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/material-icons.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/plugins.css') }}" />
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
                        
                        <li><a class="waves-effect waves-light" href="{{ route('home', app()->getLocale()) }}#fee">@lang('layout.fees')</a></li>
                        <li><a class="waves-effect waves-light" href="{{ route('home', app()->getLocale()) }}#faq">@lang('layout.faq')</a></li>
                        <li><a class="waves-effect waves-light" href="{{ route('home', app()->getLocale()) }}#blog">@lang('welcome.blog')</a></li>
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
                        <button class="nav_btn"><span><i class="fa fa-question-circle" aria-hidden="true"></i> Support</span></button>
                        <button class="nav_search_btn" id="nav_search_btn"><i class="fa fa-paper-plane-o"></i></button>
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
            <h3>Admin</h3>
            <p>Login to your admin account</p>
        </div>
    </div>

</div>

</section>
        <div class="step-container container" id="step-4">

            <div class="step-four-content">
                <form method="POST" action="{{ route('login', app()->getLocale()) }}">
                    @csrf

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            <!-- @if (Route::has('password.request', app()->getLocale()))
                                <a class="btn btn-link" href="{{ route('password.request', app()->getLocale()) }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            @endif -->
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>

@endsection
