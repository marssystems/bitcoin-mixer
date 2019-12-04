@extends('layouts.app')
@section('page_title', 'Blog')

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

        <section class="">

            <div class="container">

                <div>
                    <div class="section-title">
                        <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                        <h3>@lang('blog.blog')</h3>
                    </div>
                </div>

            </div>

        </section>

    </header>
    <!-- End Header Section-->

    <!-- Start News Section -->
    <section data-scroll-index="6" class="news main-section center-align news-page">

        <div class="fluid-container">

            <div class="row articles">

                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/is-bitcoin-really-anonymous">
                                <img src="{{ asset('bundles/frontend/assets/images/news/is_bitcoin_anonymous_thumbnail.jpg') }}"
                                    alt="Thumbnail Image for Blog Article Is Bitcoin Anonymous?" class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/is-bitcoin-really-anonymous">
                                <h6>@lang('blog.is_bitcoin_anon')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/is-bitcoin-really-anonymous" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.is_bitcoin_anon_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.is_bitcoin_anon_date_number')</span>
                            </div>
                            <p>@lang('blog.is_bitcoin_anon_1').</p>
                        </div>
                        <footer>
                            <a href="en/blog/is-bitcoin-really-anonymous">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/what-is-a-cryptocurrency-hardware-wallet">
                                <img src="{{ asset('bundles/frontend/assets/images/news/hardware_wallet_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article What is a Hardware Wallet?"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/what-is-a-cryptocurrency-hardware-wallet">
                                <h6>@lang('blog.what_is_a_hardware_wallet')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/what-is-a-cryptocurrency-hardware-wallet" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.what_is_a_hardware_wallet_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.what_is_a_hardware_wallet_number')</span>
                            </div>
                            <p>@lang('blog.what_is_a_hardware_wallet_1').</p>
                        </div>
                        <footer>
                            <a href="en/blog/what-is-a-cryptocurrency-hardware-wallet">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/are-cryptocurrencies-anonymous">
                                <img src="{{ asset('bundles/frontend/assets/images/news/crypto_are_not_anonymous_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article Are Cryptocurrencies Anonymous?"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/are-cryptocurrencies-anonymous">
                                <h6>@lang('blog.are_crypto_anon')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/are-cryptocurrencies-anonymous" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.are_crypto_anon_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.are_crypto_anon_number')</span>
                            </div>
                            <p>@lang('blog.are_crypto_anon_1')?</p>
                        </div>
                        <footer>
                            <a href="en/blog/are-cryptocurrencies-anonymous">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/why-mixing-cryptocurrencies-is-important">
                                <img src="{{ asset('bundles/frontend/assets/images/news/why_is_mixing_important_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article Why Mixing Cryptocurrencies Is Important"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/why-mixing-cryptocurrencies-is-important">
                                <h6>@lang('blog.why_mixing_crypto_is_important')</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/why-mixing-cryptocurrencies-is-important" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.why_mixing_crypto_is_important_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.why_mixing_crypto_is_important_number')</span>
                            </div>
                            <p>@lang('blog.why_mixing_crypto_is_important_1').</p>
                        </div>
                        <footer>
                            <a href="en/blog/why-mixing-cryptocurrencies-is-important">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/how-do-you-achieve-the-most-anonymous-mixing">
                                <img src="{{ asset('bundles/frontend/assets/images/news/most_anon_mixing_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article How Do You Achieve the Most Anonymous Mixing?"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/how-do-you-achieve-the-most-anonymous-mixing">
                                <h6>@lang('blog.how_do_you_acheive_the_most_anon')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/how-do-you-achieve-the-most-anonymous-mixing" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.how_do_you_acheive_the_most_anon_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.how_do_you_acheive_the_most_anon_number')</span>
                            </div>
                            <p>@lang('blog.how_do_you_acheive_the_most_anon_1').</p>
                        </div>
                        <footer>
                            <a href="en/blog/how-do-you-achieve-the-most-anonymous-mixing">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/what-is-a-crypto-currency-mixer">
                                <img src="{{ asset('bundles/frontend/assets/images/news/what_is_crypto_mixer_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article What is a Cryptocurrency Mixer?"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/what-is-a-crypto-currency-mixer">
                                <h6>@lang('blog.what_is_a_crypto_mixer')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/what-is-a-crypto-currency-mixer" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.what_is_a_crypto_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.what_is_a_crypto_number')</span>
                            </div>
                            <p>@lang('blog.what_is_a_crypto_1')...</p>
                        </div>
                        <footer>
                            <a href="en/blog/what-is-a-crypto-currency-mixer">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="en/blog/purchase-goods-and-services-anonymously">
                                <img src="{{ asset('bundles/frontend/assets/images/news/purchase_anonymously_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article Purchase Goods and Services Anonymously"
                                    class="responsive-img">
                            </a>
                        </header>
                        <div class="main">
                            <a href="en/blog/purchase-goods-and-services-anonymously">
                                <h6>@lang('blog.purchase_goods_and_services_anon')</h6>
                            </a>
                            <div class="date-container">
                                <a href="en/blog/purchase-goods-and-services-anonymously" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    @lang('blog.purchase_goods_and_services_anon_date')
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> @lang('blog.purchase_goods_and_services_anon_number')</span>
                            </div>
                            <p>@lang('blog.purchase_goods_and_services_anon_1').</p>
                        </div>
                        <footer>
                            <a href="en/blog/purchase-goods-and-services-anonymously">@lang('blog.read')</a>
                        </footer>
                    </div>
                </article>
            </div>

        </div>

    </section>
    <!-- End News Section -->


    <!-- Start Ready to mix Section -->
    <section data-scroll-index="8" class="main-section ready-to-mix">
        <h4>@lang('welcome.do_smth')</h4>
        <div class="ready-btn-container">
            <p class="font1-7rem">@lang('welcome.be_smart_be_anonymous')!</p>

            <a class="mix-btn ad-add-cart-listener" href="{{ route('start.mixing', app()->getLocale()) }}">
                <h5>
                    <span>@lang('welcome.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                </h5>
            </a>

        </div>
    </section>
    <!-- End Ready to mix Section -->
@endsection