@extends('layouts.app')
@section('page_title', 'Why Mixing')
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
                    <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}"  alt="Smart Mixer Logo"
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
                            <img src="{{ asset('bundles/frontend/assets/images/icons/conversation2.svg') }}"  class="responsive-img"
                                alt="English language">
                            Support
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
                    <div class="section-title center-align">
                        <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
                        <h3>@lang('whymix.whymix') ?</h3>
                        <p>@lang('whymix.whymix_1').</p>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- End Header Section-->

    <!-- Start How it works Section -->
    <section data-scroll-index="2" class="why-work main-section center-align">
        <div class="row fluid-container left-align what-is-smartmixer">

            <div class="col s12 l5">
                <div class="section-title">
                    <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
                    <h3>@lang('whymix.how_does_mixing_work')?</h3>
                    <p>@lang('whymix.how_does_mixing_work_1').</p>

                </div>
            </div>

            <div class="col s12 l7">
                <div class="image-container">
                    <p class="graph-with" id="why-mix-text">@lang('whymix.wo_mixing')</p>
                    <div class="graph-slider">
                        <div class="switch">
                            <label>
                                <input id="why-mix-checkbox" type="checkbox">
                                <span class="lever"></span>
                            </label>
                        </div>
                    </div>
                    <p id="graph-arrow" class="graph-arrow animated infinite tada delay-2s slower">
                        @lang('whymix.click_here')
                        <img src="{{ asset('bundles/frontend/assets/images/why/back-arrow.svg') }}"  alt="Arrow" />
                    </p>
                    <img id="why-mix-image" src="{{ asset('bundles/frontend/assets/images/why/why-graph3.png') }}"
                        alt="Why mixing animation graph" class="responsive-img">
                </div>
            </div>

        </div>

        <div class="section-title max-width-900">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
            <h3>@lang('whymix.3steps')</h3>
        </div>

        <div class="how-works-container"
            style="background: url(' {{ asset("bundles/frontend/assets/images/how/how-background.svg") }} ') no-repeat">

            <div class="fluid-container">

                <div class="step-h mixing-step">
                    <div class="number">1</div>
                    <div class="head">
                        <h5>@lang('whymix.3steps1')</h5>
                    </div>
                    <div class="text" style="min-height: 215px">
                        <p>@lang('whymix.3steps1_1').</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m4 single-pool">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/boy.svg') }}"  class="responsive-img" alt="">
                        <h6>@lang('whymix.3steps2')</h6>
                        <div class="text" style="min-height: 215px">
                            <p>@lang('whymix.3steps1_2').</p>
                        </div>
                    </div>

                    <div class="col s12 m4 single-pool">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/men.svg') }}"  class="responsive-img" alt="">
                        <h6>@lang('whymix.3steps3')</h6>
                        <div class="text" style="min-height: 215px">
                            <p>@lang('whymix.3steps1_3').</p>
                        </div>
                    </div>

                    <div class="col s12 m4 single-pool">
                        <img src="{{ asset('bundles/frontend/assets/images/testimonials/old.svg') }}"  class="responsive-img" alt="">
                        <h6>@lang('whymix.3steps4')</h6>
                        <div class="text" style="min-height: 215px">
                            <p>@lang('whymix.3steps1_4').</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="how-works-container"
            style="background: url(' {{ asset("/bundles/frontend/assets/images/how/how-background.svg") }} ') no-repeat">

            <div class="fluid-container">

                <div class="row">

                    <div class="col s12 m8">
                        <div class="step-v mixing-step">
                            <div class="number">2</div>
                            <div class="head">
                                <h5>@lang('whymix.mixing_in_the_pool')</h5>
                            </div>
                            <div class="text">
                                <p>@lang('whymix.mixing_in_the_pool_1').</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <img src="{{ asset('bundles/frontend/assets/images/why/step-ball.png') }}"  class="responsive-img step-img"
                            alt="">
                    </div>

                </div>

            </div>

        </div>

        <div class="how-works-container"
            style="background: url(' {{ asset("/bundles/frontend/assets/images/how/how-background.svg") }} ') no-repeat">

            <div class="fluid-container">

                <div class="row">

                    <div class="col s12 m4">
                        <img src="{{ asset('bundles/frontend/assets/images/why/step-three.png') }}"  class="responsive-img step-img"
                            alt="">
                    </div>

                    <div class="col s12 m8">
                        <div class="step-v mixing-step">
                            <div class="number">3</div>
                            <div class="head">
                                <h5>@lang('whymix.sotctra')</h5>
                            </div>
                            <div class="text">
                                <p>@lang('whymix.sotctra_1').</p>
                            </div>
                        </div>
                    </div>

                </div>

                <a class="mix-btn" href="start-mixing.html">
                    <h5>
                        <span>@lang('whymix.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                    </h5>
                </a>

            </div>

        </div>

    </section>
    <!-- End How it works Section -->

    <img class="title-image line-image" src="{{ asset('bundles/frontend/assets/images/why/how-bg-line2.png') }}" alt="">

    <!-- Start What is Smart Code Section -->
    <section data-scroll-index="3" class="what-is-smartcode main-section center-align">
        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
            <h3>@lang('whymix.smart_code') ?</h3>
        </div>

        <div class="fluid-container">
            <p>@lang('whymix.smart_code_1')</p>
            <a href="en/faq" class="btn waves-light waves-effect read-more">@lang('whymix.read_more')</a>
        </div>
    </section>
    <!-- End What is Smart Code Section -->

    <img class="title-image line-image" src="{{ asset('bundles/frontend/assets/images/why/how-bg-line2.png') }}" alt="">

    <!-- Start How To Mix Section -->
    <section data-scroll-index="3" class="how-to-mix main-section center-align">
        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
            <h3>@lang('whymix.htmws')?</h3>
        </div>

        <div class="fluid-container">
            <div class="row hide-on-small-and-down">
                <div class="col s12 m6">
                    <div class="step">
                        <div class="number"><span>1</span></div>
                        <div class="head">
                            <p>@lang('whymix.cyc')</p>
                        </div>
                        <div class="text">
                            <p>- @lang('whymix.cyc1')</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="number"><span>3</span></div>
                        <div class="head">
                            <p>@lang('whymix.terms')</p>
                        </div>
                        <div class="text">
                            <p>- @lang('whymix.terms1')</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="number"><span>5</span></div>
                        <div class="head">
                            <p>@lang('whymix.finish')</p>
                        </div>
                        <div class="text">
                            <p>- @lang('whymix.finish1')</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6">
                    <div class="step">
                        <div class="number"><span>2</span></div>
                        <div class="head">
                            <p>@lang('whymix.order_details')</p>
                        </div>
                        <div class="text">
                            <p>- @lang('whymix.order_details1')
                                <br>- @lang('whymix.order_details2')
                                <br>- @lang('whymix.order_details3')</p>
                        </div>
                    </div>
                    <div class="step">
                        <div class="number"><span>4</span></div>
                        <div class="head">
                            <p>@lang('whymix.order_details4')</p>
                        </div>
                        <div class="text">
                            <p>- @lang('whymix.order_details5')
                                <br>- @lang('whymix.order_details6')</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row hide-on-med-and-up">
                <div class="step">
                    <div class="number"><span>1</span></div>
                    <div class="head">
                        <p>@lang('whymix.cyc')</p>
                    </div>
                    <div class="text">
                        <p>- @lang('whymix.cyc1')</p>
                    </div>
                </div>
                <div class="step">
                    <div class="number"><span>2</span></div>
                    <div class="head">
                        <p>@lang('whymix.order_details')</p>
                    </div>
                    <div class="text">
                        <p>- @lang('whymix.order_details1')
                            <br>- @lang('whymix.order_details2')
                            <br>- @lang('whymix.order_details3')</p>
                    </div>
                </div>
                <div class="step">
                    <div class="number"><span>4</span></div>
                    <div class="head">
                        <p>@lang('whymix.order_details4')</p>
                    </div>
                    <div class="text">
                        <p>- @lang('whymix.order_details5')
                            <br>- @lang('whymix.order_details6')</p>
                    </div>
                </div>
                <div class="step">
                    <div class="number"><span>3</span></div>
                    <div class="head">
                        <p>@lang('whymix.terms')</p>
                    </div>
                    <div class="text">
                        <p>- @lang('whymix.terms1')</p>
                    </div>
                </div>
                <div class="step">
                    <div class="number"><span>5</span></div>
                    <div class="head">
                        <p>@lang('whymix.finish')</p>
                    </div>
                    <div class="text">
                        <p>- @lang('whymix.finish1')</p>
                    </div>
                </div>
            </div>

            <div class="ready-btn-container">
                <a class="mix-btn" href="en/start-mixing">
                    <h5>
                        <span>@lang('whymix.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                    </h5>
                </a>
            </div>
        </div>

        <img src="{{ asset('bundles/frontend/assets/images/why/ellipse1.png') }}"  alt="" class="ball-bg ball1">
        <img src="{{ asset('bundles/frontend/assets/images/why/ellipse1.png') }}"  alt="" class="ball-bg ball2">
    </section>
    <!-- End How To Mix Section -->

    <!-- Start How Protection Section -->
    <section data-scroll-index="4" class="how-protection main-section center-align">

        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
            <h3>@lang('whymix.hdmpm') ?</h3>
        </div>

        <div class="container">
            <p class="desc">@lang('whymix.hdmpm1').</p>

            <p class="desc"><span class="blueT">@lang('whymix.hdmpm2'):</span>
                @lang('whymix.hdmpm3')?
            </p>

            <h6>@lang('whymix.hdmpm4')…</h6>

            <div class="steps">

                <div class="step-container" data-show-always="true">
                    <div class="step">
                        <img src="{{ asset('bundles/frontend/assets/images/why/payment1.svg') }}"  alt="payment icon"
                            class="responsive-img">
                        <p>@lang('whymix.automatic')
                            <br> @lang('whymix.payouts')</p>
                        <img src="{{ asset('bundles/frontend/assets/images/why/icon6.svg') }}"  alt="" class="top-image">
                    </div>
                </div>

                <div class="step-container" data-show-always="true">
                    <div class="step">
                        <img src="{{ asset('bundles/frontend/assets/images/why/payment2.svg') }}"  alt="payment icon"
                            class="responsive-img">
                        <p>@lang('whymix.pg') <br>
                            /@lang('whymix.so')</p>
                        <img src="{{ asset('bundles/frontend/assets/images/why/icon6.svg') }}"  alt="" class="top-image">
                    </div>
                </div>

                <div class="step-container" data-show-always="true">
                    <div class="step">
                        <img src="{{ asset('bundles/frontend/assets/images/why/payment3.svg') }}"  alt="payment icon"
                            class="responsive-img">
                        <p>@lang('whymix.sc')
                            <br> @lang('whymix.iaw')</p>
                        <img src="{{ asset('bundles/frontend/assets/images/why/icon6.svg') }}"  alt="" class="top-image">
                    </div>
                </div>

                <div class="step-container" data-show-always="true">
                    <div class="step">
                        <img src="{{ asset('bundles/frontend/assets/images/why/payment4.svg') }}"  alt="payment icon"
                            class="responsive-img">
                        <p>@lang('whymix.iici')
                            <br> @lang('whymix.rc')
                        </p>
                        <img src="{{ asset('bundles/frontend/assets/images/why/icon6.svg') }}"  alt="" class="top-image">
                    </div>
                </div>

                <div class="step-container" data-show-always="true">
                    <div class="step">
                        <img src="{{ asset('bundles/frontend/assets/images/why/payment5.svg') }}"  alt="payment icon"
                            class="responsive-img">
                        <p>@lang('whymix.mc')
                            <br> @lang('whymix.wallets')</p>
                        <img src="{{ asset('bundles/frontend/assets/images/why/icon6.svg') }}"  alt="" class="top-image">
                    </div>
                </div>

            </div>
        </div>

    </section>
    <!-- End How Protection Section -->

    <!-- Start Need to Section -->
    <section data-scroll-index="4" class="need-to main-section center-align">

        <div class="section-title">
            <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
            <h3>@lang('whymix.do_i_really_need_to') 
                <br>
                @lang('whymix.my_privacy')?
            </h3>
        </div>

        <div class="container">
            <p>@lang('whymix.ifywyp').</p>

            <ul>
                <li>
                    <h5>@lang('whymix.ifywyp1') ?</h5>
                </li>
                <li>- @lang('whymix.ifywyp2')
                </li>
                <li>- @lang('whymix.ifywyp3')
                </li>
                <li>- @lang('whymix.ifywyp4')
                </li>
            </ul>
        </div>

    </section>
    <!-- End Need to Section -->

    <!-- Start Ready to mix Section -->
    <section data-scroll-index="8" class="main-section ready-to-mix green-color">
        <img src="{{ asset('bundles/frontend/assets/images/icons/section-title.svg') }}"  alt="two lines">
        <h4 class="transparent-text">@lang('whymix.do_i_really_need_to') @lang('whymix.my_privacy')?</h4>
        <div class="ready-btn-container">
            <p>@lang('welcome.be_smart_be_anonymous')!</p>

            <a class="mix-btn ad-add-cart-listener" href="{{ route('start.mixing', app()->getLocale()) }}">
                <h5><span>@lang('welcome.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                </h5>
            </a>

        </div>
    </section>
    <!-- End Ready to mix Section -->
@endsection