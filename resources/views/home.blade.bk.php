@extends('layouts.app')
@section('page_title', 'Admin Dashboard')
@section('content')
    <!-- Start Header Section -->
    <header data-scroll-index="1" class="main-header small-header"
        style="background: url(' {{ asset("bundles/frontend/assets/images/header/header-small-background.png") }} ') no-repeat center bottom; background-size: 100%">

        <!-- Start Nav Section -->
        <nav class="main-nav">
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    <li><a class="waves-effect waves-light" href="{{ route('whymix', app()->getLocale()) }}">Why Mixing</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('referral', app()->getLocale()) }}">Referral</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('fees', app()->getLocale()) }}">Fees</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('faq', app()->getLocale()) }}">FAQ</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('blog', app()->getLocale()) }}">Blog</a></li>
                </ul>
                <a href="{{ route('home', app()->getLocale()) }}" class="brand-logo center">
                    <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" alt="Smart Mixer Logo"
                        class="responsive-img">
                </a>
                <a href="#" data-target="mobile-demo" class="sidenav-trigger">
                    <div class="very_small_hamburger" id="hamburger-menu">
                        <svg viewBox="0 0 800 600">
                            <path
                                d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                class="top"></path>
                            <path d="M300,320 L540,320" class="middle"></path>
                            <path
                                d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                class="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) ">
                            </path>
                        </svg>
                    </div>
                </a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light hoverable tel-link" href="https://t.me/smartmixer"
                            target="_blank"><img src="{{ asset('bundles/frontend/assets/images/header/telegram.svg') }}"
                                class="responsive-img telegram-icon" alt=""></a></li>
                    <li>
                        <a class="waves-effect waves-light hoverable modal-trigger" data-target="support-modal"
                            id="support-btn">
                            <img src="{{ asset('bundles/frontend/assets/images/icons/conversation2.svg') }}" class="responsive-img"
                                alt="English language">
                            Support
                        </a>
                    </li>
                    <li>
                        <a class="waves-effect waves-light hoverable modal-trigger" href="{{ url('/logout') }}">
                            Log out
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger waves-effect waves-light hoverable" href="#!"
                            data-target="dropdown1">
                            <img src="{{ asset('bundles/frontend/assets/images/header/en.svg') }}" class="responsive-img" alt="">
                            EN<i class="material-icons right">arrow_drop_down</i>
                        </a>
                    </li>
                </ul>
                <ul id="dropdown1" class="dropdown-content">
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
        </nav>
        <ul class="sidenav" id="mobile-demo">
            <li>
                <a href="" class="brand-logo">
                    <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" alt="Smart Mixer Logo"
                        class="responsive-img">
                </a>
            </li>
            <li><a class="sidenav-close" href="en/why-mixing">Why Mixing</a>
            </li>
            <li><a class="sidenav-close" href="en/referral">Referral</a>
            </li>
            <li><a class="sidenav-close" href="en/fees">Fees</a></li>
            <li><a class="sidenav-close" href="en/faq">FAQ</a></li>
            <li><a class="sidenav-close" href="en/blog-posts">Blog</a>
            </li>
            <li><a class="sidenav-close" href="en/start-mixing">Mixing</a></li>
            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown2">
                    <img src="{{ asset('bundles/frontend/assets/images/header/en.svg') }}" class="responsive-img" alt="">
                    EN<i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li>
                <ul id="dropdown2" class="dropdown-content">
                    <li><a href="cn/faq">Chinese</a></li>
                    <li><a href="de/faq">German</a></li>
                    <li><a href="en/faq">English</a></li>
                    <li><a href="es/faq">Spanish</a></li>
                    <li><a href="fr/faq">French</a></li>
                    <li><a href="it/faq">Italian</a></li>
                    <li><a href="jp/faq">Japanese</a></li>
                    <li><a href="kr/faq">Korean</a></li>
                    <li><a href="ru/faq">Russian</a></li>
                    <li><a href="tr/faq">Turkish</a></li>
                </ul>
            </li>
            <li><a class="sidenav-close modal-trigger" href="#" data-target="support-modal">
                    <img src="{{ asset('bundles/frontend/assets/images/icons/conversation2.svg') }}" class="responsive-img"
                        alt="Conversation">
                    Support</a></li>
        </ul>

        <!-- End Nav Section-->

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

    </header>
    <!-- End Header Section-->


    <section class="mixer-container">

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
