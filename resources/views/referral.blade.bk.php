@extends('layouts.app')
@section('page_title', 'Referral')
@section('content')
    <!-- Start Header Section -->
    <header data-scroll-index="1" class="main-header small-header"
        style="background: url(' {{ asset("bundles/frontend/assets/images/header/header-small-background.png") }} ') no-repeat center bottom; background-size: 100%">

        <!-- Start Nav Section -->
        <nav class="main-nav">
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    <li><a class="waves-effect waves-light" href="{{ route('whymix', app()->getLocale()) }}">@lang('welcome.why_mixing')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('referral', app()->getLocale()) }}">@lang('layout.referral')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('fees', app()->getLocale()) }}">@lang('layout.fees')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('faq', app()->getLocale()) }}">@lang('layout.faq')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('blog', app()->getLocale()) }}">@lang('welcome.blog')</a></li>
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
                            @lang('welcome.support')
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-trigger waves-effect waves-light hoverable" href="#!"
                            data-target="dropdown1">
                            <img src="{{ asset('bundles/frontend/assets/images/header/'.app()->getLocale().'.svg') }}" class="responsive-img" alt="">
                            {{strtoupper(app()->getLocale())}}<i class="material-icons right">arrow_drop_down</i>
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
                <a href="{{ route('home', app()->getLocale()) }}" class="brand-logo">
                    <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" alt="Smart Mixer Logo"
                        class="responsive-img">
                </a>
            </li>

            <li><a class="sidenav-close" href="{{ route('whymix', app()->getLocale()) }}">@lang('welcome.support')</a>
            </li>
            <li><a class="sidenav-close" href="{{ route('referral', app()->getLocale()) }}">@lang('layout.referral')</a>
            </li>
            <li><a class="sidenav-close" href="{{ route('fees', app()->getLocale()) }}">@lang('layout.fees')</a></li>
            <li><a class="sidenav-close" href="{{ route('faq', app()->getLocale()) }}">@lang('layout.faq')</a></li>
            <li><a class="sidenav-close" href="{{ route('blog', app()->getLocale()) }}">@lang('welcome.blog')</a>
            </li>
            <li><a class="sidenav-close" href="{{ route('start.mixing', app()->getLocale()) }}">@lang('welcome.mixing')</a></li>
            <li>
                <a class="dropdown-trigger" href="#!" data-target="dropdown2">
                    <img src="{{ asset('bundles/frontend/assets/images/header/'.app()->getLocale().'.svg') }}" class="responsive-img" alt="">
                    {{strtoupper(app()->getLocale())}}<i class="material-icons right">arrow_drop_down</i>
                </a>
            </li>
            <li>
                <ul id="dropdown2" class="dropdown-content">
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
            </li>
            <li><a class="sidenav-close modal-trigger" href="#" data-target="support-modal">
                    <img src="{{ asset('bundles/frontend/assets/images/icons/conversation2.svg') }}" class="responsive-img"
                        alt="Conversation">
                    @lang('welcome.support')</a></li>
        </ul>

        <!-- End Nav Section-->

        <section>

            <div class="container">

                <div>
                    <div class="section-title">
                        <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                        <h3>@lang('referral.become_an_affiliate')</h3>
                    </div>
                </div>

            </div>

        </section>

    </header>
    <!-- End Header Section-->

    <!-- Start Partner Section -->
    <section data-scroll-index="6" class="main-section center-align partner-page">

        <div class="fluid-container">

            <div class="left-align">
                <div class="section-title">
                    <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                    <h4>@lang('referral.srp')</h4>
                </div>
                <p class="header-paragraph">@lang('referral.earn_the_highest_comm')!</p>
                <p class="header-paragraph">@lang('referral.earn_the_highest_comm_1')</p>
            </div>
        </div>

        <div class="boxes-container"
            style="background: url(' {{ asset("bundles/frontend/assets/images/how/how-background.svg") }} ') no-repeat">
            <div class="fluid-container">
                <div class="box row">
                    <div class="head col s12 m3">
                        <img src="{{ asset('bundles/frontend/assets/images/partner/icon1.svg') }}" alt="" class="responsive-img">
                        <div>
                            <h6>@lang('referral.comm_for')</h6>
                            <h6>@lang('referral.comm_for1')</h6>
                        </div>
                    </div>
                    <div class="col s12 m3 item">
                        <img src="{{ asset('bundles/frontend/assets/images/partner/level1.svg') }}" alt="" class="responsive-img">
                        <div>
                            <h6>@lang('referral.fivefive')
                                % @lang('referral.comm')</h6>
                            <h6>@lang('referral.on_the_fees')</h6>
                        </div>
                    </div>
                    <div class="col s12 m3 item">
                        <img src="{{ asset('bundles/frontend/assets/images/partner/level2.svg') }}" alt="" class="responsive-img">
                        <div>
                            <h6>@lang('referral.ten')
                                % @lang('referral.comm')</h6>
                            <h6>@lang('referral.on_the_fees')</h6>
                        </div>
                    </div>
                    <div class="col s12 m3 item">
                        <img src="{{ asset('bundles/frontend/assets/images/partner/level3.svg') }}" alt="" class="responsive-img">
                        <div>
                            <h6>@lang('referral.five')
                                % @lang('referral.comm')</h6>
                            <h6>@lang('referral.on_the_fees')</h6>
                        </div>
                    </div>
                </div>

                <div class="payout-boxes row">

                    <div class="payout1 box col s12 l5">
                        <div class="row">
                            <div class="head col s12 m6 l8">
                                <img src="{{ asset('bundles/frontend/assets/images/partner/icon2.svg') }}" alt=""
                                    class="responsive-img">
                                <div>
                                    <h6>@lang('referral.iandm')</h6>
                                    <h6>@lang('referral.payouts')</h6>
                                </div>
                            </div>
                            <div class="col s12 m6 l4 item">
                                <h6 class="purple-color">@lang('referral.yes')</h6>
                            </div>
                        </div>
                    </div>

                    <div class="payout2 box col s12 l6 push-l1">
                        <div class="row">
                            <div class="head col s12 m6">
                                <img src="{{ asset('bundles/frontend/assets/images/partner/icon3.svg') }}" alt=""
                                    class="responsive-img">
                                <div>
                                    <h6>@lang('referral.payouts')</h6>
                                    <h6>@lang('referral.interval')</h6>
                                </div>
                            </div>
                            <div class="col s12 m6 item">
                                <h6 class="purple-color">>@lang('referral.icoyb')</h6>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="payout-boxes row">

                    <div class="payout1 box col s12 l5">
                        <div class="row">
                            <div class="head col s12 m6 l8">
                                <img src="{{ asset('bundles/frontend/assets/images/partner/icon4.svg') }}" alt=""
                                    class="responsive-img">
                                <div>
                                    <h6>@lang('referral.access_to')</h6>
                                    <h6>@lang('referral.rp')</h6>
                                </div>
                            </div>
                            <div class="col s12 m6 l4 item">
                                <h6 class="purple-color">@lang('referral.lifetime_and_for_free')</h6>
                            </div>
                        </div>
                    </div>

                    <div class="payout2 box col s12 l6 push-l1">
                        <div class="row">
                            <div class="head col s12 m6">
                                <img src="{{ asset('bundles/frontend/assets/images/partner/icon5.svg') }}" alt=""
                                    class="responsive-img">
                                <div>
                                    <h6>@lang('referral.aff_dash')</h6>
                                    <h6>@lang('referral.with_stats')</h6>
                                </div>
                            </div>
                            <div class="col s12 m6 item">
                                <h6 class="purple-color">@lang('referral.yes')</h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <!-- End Partner Section -->

    <!-- Start Ready to mix Section -->
    <section data-scroll-index="8" class="main-section ready-to-mix join-partner">
        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
            <h4>@lang('referral.join_rf')</h4>
            <h6>@lang('referral.start_rf')!</h6>
        </div>
        <form action="en/referral/join-affiliate-program" method="post" id="join-partner-form" data-currency="BTC">
            <div class="field-container">
                <label for="btc-address">@lang('referral.your_btc_address')</label>
                <div class="input-container">
                    <img src="{{ asset('bundles/frontend/assets/images/how/button-bubbles.svg') }}" alt="Bubbles" class="first">
                    <input type="text" id="btc-address" name="paymentAddress" placeholder="Bicoin Address" required>
                    <button type="submit" id="join-partner-submit" class="mix-btn waves-effect waves-light"
                        href="en/start-mixing">@lang('referral.join')
                    </button>
                    <img src="{{ asset('bundles/frontend/assets/images/how/button-bubbles.svg') }}" alt="Bubbles" class="second">
                </div>
                <div class="message">
                    <p>&nbsp;</p>
                </div>
            </div>
        </form>
    </section>
    <!-- End Ready to mix Section -->
@endsection