@extends('layouts.app')
@section('page_title', 'FAQ')

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
                        <h3>@lang('layout.faq')</h3>
                        <p>@lang('faq.yqa')</p>
                    </div>
                </div>

            </div>

        </section>

    </header>
    <!-- End Header Section-->

    <!-- Start News Section -->
    <section data-scroll-index="6" class="main-section">

        <div class="container">

            <ul class="collapsible popout">

                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.what_is_a_smart_mixer')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.what_is_a_smart_mixer_1').</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.how_do_i_use_smartmixer')?
                    </div>
                    <div class="collapsible-body">
                        <span>1. @lang('faq.how_do_i_use_smartmixer_1').</span><br /><br />
                        <span>2. @lang('faq.how_do_i_use_smartmixer_2').</span><br /><br />
                        <span>@lang('faq.how_do_i_use_smartmixer_3')</span><br /><br />
                        <span>3. @lang('faq.how_do_i_use_smartmixer_4')</span><br /><br />
                        <span>@lang('faq.how_do_i_use_smartmixer_5').</span><br /><br />
                        <span>4. @lang('faq.how_do_i_use_smartmixer_7')</span><br /><br />
                        <span>@lang('faq.how_do_i_use_smartmixer_8')</span><br /><br />
                        <span>5. @lang('faq.how_do_i_use_smartmixer_9').</span><br /><br />
                        <span>6. @lang('faq.how_do_i_use_smartmixer_10').</span><br /><br />
                        <span>7. @lang('faq.how_do_i_use_smartmixer_11')</span><br /><br />
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.what_is_a_smart_code')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.what_is_a_smart_code_1').</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.how_many_confirmations_are_needed')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.three_confirmations').</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.how_does_it_work')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.how_does_it_work_1').</span><br /><br />
                        <span>@lang('faq.how_does_it_work_2'):</span><br /><br />
                        <span>@lang('faq.how_does_it_work_3').</span><br /><br />
                        <span>@lang('faq.how_does_it_work_4'):</span><br /><br />
                        <span>@lang('faq.how_does_it_work_5').</span><br /><br />
                        <span>@lang('faq.how_does_it_work_6'):</span><br /><br />
                        <span>@lang('faq.how_does_it_work_7').</span><br /><br />
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.how_anon_am_i')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.how_anon_am_i_1').</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.what_the_other_possibilities')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.what_the_other_possibilities_1').</span>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.can_i_support_you')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.can_i_support_you_1').</span><br /><br />
                        <span>@lang('faq.can_i_support_you_2')</span><br /><br />
                        <a href="en/referral">
                            <h3>@lang('faq.click_here')</h3>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.can_i_use_smartmixer_with_tor')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.can_i_use_smartmixer_with_tor_1'):</span><br />
                        <a href="http://smrtmxdxognxhv64.onion/" target="_blank">
                            <h6>smrtmxdxognxhv64.onion</h6>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.how_can_you_avoid_a_return')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.how_can_you_avoid_a_return_1').</span><br /><br />
                        <span>@lang('faq.how_can_you_avoid_a_return_2').</span><br /><br />
                        <span>@lang('faq.how_can_you_avoid_a_return_3').</span><br /><br />
                    </div>
                </li>
                <li>
                    <div class="collapsible-header"><i
                            class="material-icons teal-text text-lighten-2">question_answer</i>@lang('faq.can_i_contact_you')?
                    </div>
                    <div class="collapsible-body">
                        <span>@lang('faq.can_i_contact_you_1').</span>
                    </div>
                </li>

            </ul>

        </div>

    </section>
    <!-- End News Section -->

    <!-- Start Ready to mix Section -->
    <section data-scroll-index="8" class="main-section ready-to-mix">
        <h4>@lang('welcome.do_smth')</h4>
        <div class="ready-btn-container">
            <p>@lang('welcome.be_smart_be_anonymous')</p>

            <a class="mix-btn ad-add-cart-listener" href="{{ route('start.mixing', app()->getLocale()) }}">
                <h5>
                    <span>@lang('welcome.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                </h5>
            </a>

        </div>
    </section>
    <!-- End Ready to mix Section -->
@endsection