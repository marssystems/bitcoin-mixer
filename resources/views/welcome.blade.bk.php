@extends('layouts.app')
@section('page_title', 'Best Bitcoin Mixer')

@section('header_images')
    <img class="header-effect1" src="{{ asset('bundles/frontend/assets/images/header/header-effect1.png') }}" alt="header effect">
    <img class="header-effect12" src="{{ asset('bundles/frontend/assets/images/header/header-effect12.png') }}" alt="header effect">
@endsection

@section('content')

    <!-- Start Header Section -->
    <header data-scroll-index="1" class="main-header">

        <!-- Start Nav Section -->
        <nav class="main-nav">
            <div class="nav-wrapper">
                <ul class="left hide-on-med-and-down">
                    <li><a class="waves-effect waves-light" href="{{ route('start-mixing-3', app()->getLocale()) }}">@lang('welcome.why_mixing')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('referral', app()->getLocale()) }}">@lang('layout.referral')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('fees', app()->getLocale()) }}">@lang('layout.fees')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('faq', app()->getLocale()) }}">@lang('layout.faq')</a></li>
                    <li><a class="waves-effect waves-light" href="{{ route('blog', app()->getLocale()) }}">@lang('welcome.blog')</a></li>
                </ul>
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

        <!-- Start Header Content -->
        <section class="header-content">
            <div class="header-title home-page">
                <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" class="responsive-img main-gif" alt="">
                <h2 class="font-2rem">@lang('welcome.act_smart')! - @lang('welcome.value_your_privacy')</h2>
                <h2 class="font1-7rem">@lang('welcome.make_your_cryptos_untracreable')</h2>
                <p>@lang('welcome.select_the_desired_coin_and') <a href="{{ route('start.mixing', app()->getLocale()) }}">@lang('welcome.mix_now')!</a>
                </p>
            </div>

            <div class="header-icons">
                <div id="output-step-1" style="display: none">
                    <p class="warning" style="text-align: center"><i class="material-icons">warning</i>@lang('welcome.your_selected_currency_is_not_accepted_please_select_another')
                    </p>
                </div>
                <div class="hoverable-shadow">
                    <a href="{{ route('start.mixing', app()->getLocale()) }}?currency=BTC" class="single-icon ad-add-cart-listener"
                        data-currency="BTC" data-prevent="false">
                        <img src="{{ asset('bundles/frontend/assets/images/header/bitcoin-logo2.svg') }}" alt="bitcoin logo">
                        <p>Bitcoin</p>
                    </a>
                </div>
                <div class="hoverable-shadow">
                    <a href="{{ route('start.mixing', app()->getLocale()) }}?currency=LTC" class="single-icon ad-add-cart-listener"
                        data-currency="LTC" data-prevent="false">
                        <img src="{{ asset('bundles/frontend/assets/images/header/litecoin.svg') }}" alt="litecoin logo">
                        <p>Litecoin</p>
                    </a>
                </div>
                <div class="hoverable-shadow">
                    <a href="#" class="single-icon ad-add-cart-listener"
                        data-currency="BCH" data-prevent="false">
                        <img src="{{ asset('bundles/frontend/assets/images/header/bitcoin-logo.svg') }}" alt="bitcoin logo">
                        <p>Bitcoin Cash</p>
                    </a>
                </div>
                <div class="hoverable-shadow">
                    <a href="#" data-currency="ETH" href="#" class="single-icon" data-prevent="true">
                        <img src="{{ asset('bundles/frontend/assets/images/header/ethereum.svg') }}" alt="ethereum logo">
                        <p class="mb-0">Ethereum</p>
                        <small>@lang('layout.soon')</small>

                    </a>
                </div>

            </div>
            <div class="header-footer">

                <a href="https://www.youtube.com/watch?v=bKct-BZ_M9w" data-lity>
                    <p>
                        @lang('welcome.watch_a_video_on') &nbsp; <span> @lang('welcome.how_to_use_btc_mixer')</span>
                        <span class="image-container">
                            <img src="{{ asset('bundles/frontend/assets/images/maxresdefault.jpg') }}" alt="play video logo">
                        </span>
                    </p>
                </a>
            </div>
            <div class="logos">
                <a href="#" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/logos/bitcoinist.png') }}"
                        alt="press ccn"></a>
                <a href="#/" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/logos/newsbtc.png') }}"
                        alt="press newsbtc"></a>
                <a href="#" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/logos/cointelegraph2.png') }}"
                        alt="press cointelegraph"></a>
                <a href="#" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/logos/ccn.png') }}" alt="press ccn"></a>
                <a href="#" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/logos/hackernoon.png') }}"
                        alt="press hackernoon"></a>
            </div>
        </section>
        <!-- End Header Content -->

    </header>
    <!-- End Header Section-->

    <!-- Start How it works Section -->
    <section data-scroll-index="2" class="how-works main-section center-align">
        <div class="row fluid-container left-align what-is-smartmixer">

            <div class="col s12 l6">
                <div class="section-title">
                    <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                    <h3>@lang('welcome.what_is_smart_mixer')?</h3>
                </div>
            </div>

            <div class="col s12 l6">
                <p>@lang('welcome.what_is_smart_mixer_1')</p>
                <p>@lang('welcome.what_is_smart_mixer_2')</p>
                <p>@lang('welcome.what_is_smart_mixer_3')</p>
            </div>

        </div>

        <div class="how-works-container"
            style="background: url(' {{ asset("bundles/frontend/assets/images/how/how-background.svg") }} ') no-repeat">
            <div class="section-title">
                <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                <h3>@lang('welcome.how_sm_works')</h3>
                <p>@lang('welcome.receive_clean_cryptos_in_three_steps')!</p>
            </div>

            <div class="steps">
                <div class="background"></div>
                <div class="container">
                    <div class="row">
                        <div class="col s12 m4">
                            <div class="step">
                                <div><img src="{{ asset('bundles/frontend/assets/images/how/step-one.svg') }}" alt="Step Icon"></div>
                                <h4>@lang('welcome.step') <img src="{{ asset('bundles/frontend/assets/images/how/one.svg') }}" alt="one">
                                </h4>
                                <p>@lang('welcome.enter_address_and_send_coins')</p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="step">
                                <div><img src="{{ asset('bundles/frontend/assets/images/icon.gif') }}" alt="Step Icon">
                                </div>
                                <h4>@lang('welcome.step') <img src="{{ asset('bundles/frontend/assets/images/how/two.svg') }}" alt="two">
                                </h4>
                                <p>@lang('welcome.we_mix_yer_coins')</p>
                            </div>
                        </div>
                        <div class="col s12 m4">
                            <div class="step">
                                <div><img src="{{ asset('bundles/frontend/assets/images/how/step-three.svg') }}" alt="Step Icon">
                                </div>
                                <h4>@lang('welcome.step') <img src="{{ asset('bundles/frontend/assets/images/how/three.svg') }}" alt="three">
                                </h4>
                                <p>@lang('welcome.receive_untraceable_coins')</p>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="btn waves-light waves-effect read-more">@lang('welcome.read_more')</a>
                </div>
            </div>
        </div>

    </section>
    <!-- End How it works Section -->

    <!-- Start Why Choose Section -->
    <section data-scroll-index="3" class="why-us main-section center-align">
        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
            <h3>@lang('welcome.our_smart_benefits')</h3>
        </div>

        <div class="fluid-container">
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how1.svg') }}" alt="">
                            <p>@lang('welcome.smartly_anon') – @lang('welcome.our_smart_benefits')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_anonymity_1').</p>
                        </footer>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how2.svg') }}" alt="">
                            <p>@lang('welcome.smart_interface_no_sign_up')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_interface_no_sign_up_1')</p>
                        </footer>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how3.svg') }}" alt="">
                            <p>@lang('welcome.smart_referral_commission')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_referral_commission_1')!</p>
                        </footer>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how2.svg') }}" alt="">
                            <p>@lang('welcome.smart_and_reliable')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_and_reliable_1').</p>
                        </footer>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how3.svg') }}" alt="">
                            <p>@lang('welcome.smart_and_easy_to_use')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_and_easy_to_use_1').</p>
                        </footer>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="single-how min-height-450">
                        <header>
                            <img src="{{ asset('bundles/frontend/assets/images/icons/how1.svg') }}" alt="">
                            <p>@lang('welcome.smart_access_tor')</p>
                        </header>
                        <footer>
                            <p>@lang('welcome.smart_access_tor_1') <a href="#">@lang('welcome.smart_access_tor_1_link').</a>
                            </p>
                        </footer>
                    </div>
                </div>
            </div>
            <a href="#" class="btn waves-light waves-effect read-more">@lang('welcome.read_more')</a>
        </div>

    </section>
    <!-- End Why Choose Section -->

    <!-- Start Testimonials Section -->
    <section data-scroll-index="4" class="testimonials main-section center-align">

        <div class="container">

            <div class="section-title">
                <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                <h3>@lang('welcome.scenarios')</h3>
            </div>

            <div class="owl-carousel owl-testimonials">
                <div class="testimonial">
                    <div class="image">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/boy.svg') }}" alt="Person">
                    </div>
                    <div class="content">
                        <div class="title">
                            <div class="image">
                                <img src="{{ asset('bundles/frontend/assets/images/testimonials/boy.svg') }}" alt="Person">
                            </div>
                            <div class="title-content">
                                <h4>@lang('welcome.send_cryptos_to_friends')</h4>
                            </div>
                        </div>
                        <p class="font-1rem">@lang('welcome.send_cryptos_to_friends_1').</p>
                        <p class="font-1rem">@lang('welcome.send_cryptos_to_friends_2').</p>
                        <p class="date">@lang('welcome.employee')</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="image">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/girl.svg') }}" alt="Person">
                    </div>
                    <div class="content">
                        <div class="title">
                            <div class="image">
                                <img src="{{ asset('bundles/frontend/assets/images/testimonials/girl.svg') }}" alt="Person">
                            </div>
                            <div class="title-content">
                                <h4>@lang('welcome.value_your_privacy')</h4>
                            </div>
                        </div>
                        <p class="font-1rem">@lang('welcome.value_your_privacy_1').</p>
                        <p class="font-1rem">@lang('welcome.value_your_privacy_2')!</p>
                        <p class="date">@lang('welcome.social_worker')</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="image">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/men.svg') }}" alt="Person">
                    </div>
                    <div class="content">
                        <div class="title">
                            <div class="image">
                                <img src="{{ asset('bundles/frontend/assets/images/testimonials/men.svg') }}" alt="Person">
                            </div>
                            <div class="title-content">
                                <h4>@lang('welcome.anon_salaries')</h4>
                            </div>
                        </div>
                        <p class="font-1rem">@lang('welcome.anon_salaries_1').</p>
                        <p class="font-1rem">@lang('welcome.anon_salaries_2').</p>
                        <p class="date">@lang('welcome.entrepreneur')</p>
                    </div>
                </div>
                <div class="testimonial">
                    <div class="image">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/old.svg') }}" alt="Person">
                    </div>
                    <div class="content">
                        <div class="title">
                            <div class="image">
                                <img src="{{ asset('bundles/frontend/assets/images/testimonials/old.svg') }}" alt="Person">
                            </div>
                            <div class="title-content">
                                <h4>@lang('welcome.anon_investing')</h4>
                            </div>
                        </div>
                        <p class="font-1rem">@lang('welcome.anon_investing_1'),</p>
                        <p class="font-1rem">“@lang('welcome.anon_investing_2')?”</p>
                        <p class="font-1rem">@lang('welcome.anon_investing_3').</p>
                        <p class="date">@lang('welcome.pensioner')</p>
                    </div>
                </div>
            </div>

            <div class="links-container">
                <div class="links">
                    <a data-owl-item="0" class="owl-testimonials-links active">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/boy.svg') }}" alt="Person">
                    </a>
                    <a data-owl-item="1" class="owl-testimonials-links">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/girl.svg') }}" alt="Person">
                    </a>
                    <a data-owl-item="2" class="owl-testimonials-links">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/men.svg') }}" alt="Person">
                    </a>
                    <a data-owl-item="3" class="owl-testimonials-links">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/old.svg') }}" alt="Person">
                    </a>
                </div>
            </div>

        </div>

    </section>
    <!-- End Testimonials Section -->


    <!-- Start News Section -->
    <section data-scroll-index="6" class="news main-section center-align">
        <div class="fluid-container">
            <div class="section-title">
                <h6 class="title"><img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                    @lang('welcome.latest_articles')</h6>
                <h3>@lang('welcome.be_smart_and_stay_up_to_date') <a href="/en/blog-posts">@lang('welcome.view_more_activities')</a>
                </h3>
            </div>

            <div class="row articles">
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="#"><img src="{{ asset('bundles/frontend/assets/images/news/hardware_wallet_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article What is a Hardware Wallet?"
                                    class="responsive-img"></a>
                        </header>
                        <div class="main">
                            <a href="#">
                                <h6>@lang('welcome.what_is_a_hardware_wallet')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="#" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    October 27, 2019
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> 375</span>
                            </div>
                            <p>@lang('welcome.what_is_a_hardware_wallet_1').</p>
                        </div>
                        <footer>
                            <a href="#">@lang('welcome.read_more')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="#"><img
                                    src="{{ asset('bundles/frontend/assets/images/news/crypto_are_not_anonymous_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article Are Cryptocurrencies Anonymous?"
                                    class="responsive-img"></a>
                        </header>
                        <div class="main">
                            <a href="#">
                                <h6>@lang('welcome.are_crypto_anon')?</h6>
                            </a>
                            <div class="date-container">
                                <a href="#" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    October 19, 2019
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> 565</span>
                            </div>
                            <p>@lang('welcome.are_crypto_anon_1')?</p>
                        </div>
                        <footer>
                            <a href="#">@lang('welcome.read_more')</a>
                        </footer>
                    </div>
                </article>
                <article class="col s12 l4">
                    <div class="single-article">
                        <header>
                            <a href="#"><img src="{{ asset('bundles/frontend/assets/images/news/why_is_mixing_important_thumbnail.png') }}"
                                    alt="Thumbnail Image for Blog Article Why Mixing Cryptocurrencies Is Important"
                                    class="responsive-img"></a>
                        </header>
                        <div class="main">
                            <a href="#">
                                <h6>@lang('welcome.why_mixing_currencies_is_important')</h6>
                            </a>
                            <div class="date-container">
                                <a href="#" class="date">
                                    <img src="{{ asset('bundles/frontend/assets/images/news/date.svg') }}" alt="icon">
                                    October 13, 2019
                                </a>
                                <span> <i class="material-icons">remove_red_eye</i> 794</span>
                            </div>
                            <p>@lang('welcome.why_mixing_currencies_is_important_1').</p>
                        </div>
                        <footer>
                            <a href="#">@lang('welcome.read_more')</a>
                        </footer>
                    </div>
                </article>
            </div>

        </div>

    </section>
    <!-- End News Section -->

    <!-- Start FAQ Section -->
    <section data-scroll-index="7" class="faq main-section center-align">

        <div class="fluid-container">
            <div class="section-title">
                <h6 class="title"><img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}" alt="two lines">
                    @lang('layout.faq')</h6>
                <h3>@lang('welcome.frequently_asked_questions') <img src="{{ asset('bundles/frontend/assets/images/icons/faqs.svg') }}"
                        alt="Question mark"></h3>
            </div>

            <div class="faqs-container">

                <div class="">
                    <div class="single-faq">
                        <div class="circle-plus closed show-faq-text">
                            <div class="circle">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </div>
                        <div>
                            <header class="show-faq-text">
                                <h6>@lang('welcome.faq1')
                                    - @lang('welcome.what_is_smart_mixer')?</h6>
                            </header>
                            <div class="main">
                                <div class="faq--preview">
                                    <p>@lang('welcome.what_is_smart_mixer_4')
                                        ...</p>
                                </div>
                                <div class="faq--full d-none">
                                    <p>@lang('welcome.what_is_smart_mixer_5'). </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="single-faq">
                        <div class="circle-plus closed show-faq-text">
                            <div class="circle">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </div>
                        <div>
                            <header class="show-faq-text">
                                <h6>@lang('welcome.faq2')
                                    - @lang('welcome.faq2_q')?</h6>
                            </header>
                            <div class="main">
                                <div class="faq--preview">
                                    <p>1. @lang('welcome.faq2_1')....</p>
                                </div>
                                <div class="faq--full d-none">
                                    <p>1. @lang('welcome.faq2_2'). </p>
                                    <p>2. @lang('welcome.faq2_3'). </p>
                                    <p>@lang('welcome.faq2_sa1') </p>
                                    <p>3. @lang('welcome.faq2_4') </p>
                                    <p>@lang('welcome.faq2_sa2'). </p>
                                    <p>4. @lang('welcome.faq2_5') </p>
                                    <p>@lang('welcome.faq2_sa3').
                                    </p>
                                    <p>5. @lang('welcome.faq2_6'). </p>
                                    <p>6. @lang('welcome.faq2_7'). </p>
                                    <p>7. @lang('welcome.faq2_8') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="single-faq">
                        <div class="circle-plus closed show-faq-text">
                            <div class="circle">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </div>
                        <div>
                            <header class="show-faq-text">
                                <h6>@lang('welcome.faq3')
                                    - @lang('welcome.what_is_a_smart_code')?</h6>
                            </header>
                            <div class="main">
                                <div class="faq--preview">
                                    <p>@lang('welcome.what_is_a_smart_code_1')...</p>
                                </div>
                                <div class="faq--full d-none">
                                    <p>@lang('welcome.what_is_a_smart_code_2') </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="single-faq">
                        <div class="circle-plus closed show-faq-text">
                            <div class="circle">
                                <div class="horizontal"></div>
                                <div class="vertical"></div>
                            </div>
                        </div>
                        <div>
                            <header class="show-faq-text">
                                <h6>@lang('welcome.faq4')
                                    - @lang('welcome.how_many_confirmations')?</h6>
                            </header>
                            <div class="main">
                                <div class="faq--preview">
                                    <p>@lang('welcome.how_many_confirmations_1')....
                                    </p>
                                </div>
                                <div class="faq--full d-none">
                                    <p>@lang('welcome.how_many_confirmations_2')
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <a href="#" class="btn waves-light waves-effect read-more">@lang('welcome.read_full_faq')</a>
        </div>


    </section>
    <!-- End FAQ Section -->

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