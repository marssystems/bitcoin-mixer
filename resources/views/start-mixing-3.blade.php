@extends('layouts.app')
@section('page_title', 'Start Mixing')

@section('header_images')
    <!-- <img class="header-effect1" src="{{ asset('bundles/frontend/assets/images/header/header-effect1.png') }}" alt="header effect">
    <img class="header-effect12" src="{{ asset('bundles/frontend/assets/images/header/header-effect12.png') }}" alt="header effect"> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/material-icons.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/plugins.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('data/stylesheet.css') }}" />
    <!-- <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/chat.css') }}" /> -->
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/custom.css') }}" />
@endsection

@section('slider')
    <script src="{{ asset('bundles/frontend/assets/js/slider.js') }}"></script>
@endsection

@section('start_mixing')
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

    <section class="mixer-container">

        <div id="steps-header">
            <div class="container mixer">
                <div class="steps-header">
                    <a class="step" data-step="1">
                        <div class="image"></div>
                        <p>@lang('start_mixing.choose_currency')</p>
                    </a>
                    <a class="step" data-step="2">
                        <div class="image"></div>
                        <p>@lang('start_mixing.order_details')</p>
                    </a>
                    <a class="step" data-step="3">
                        <div class="image"></div>
                        <p>@lang('start_mixing.terms')</p>
                    </a>
                    <a class="step" data-step="4">
                        <div class="image"></div>
                        <p>@lang('start_mixing.send_to_address')</p>
                    </a>
                    <a class="step" data-step="5">
                        <div class="image">
                            <img class="finish-stars" src="{{ asset('bundles/frontend/assets/images/mixer/bar/clean.svg') }}" alt="">
                        </div>
                        <p>@lang('start_mixing.finish')</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="step-container container" id="step-1">

            <div class="mixer">

                <div class="title step-title">
                    <h5><img src="{{ asset('bundles/frontend/assets/images/mixer/one.svg') }}" alt="" class="responsive-img"> @lang('start_mixing.select_your_currency')
                    </h5>
                    <img class="title-image" src="{{ asset('bundles/frontend/assets/images/how/how-bg-line.png') }}" alt="">
                </div>

                <div class="header-icons">
                    <div id="output-step-1" style="display: none">
                        <p class="warning"><i class="material-icons">warning</i>@lang('start_mixing.select_your_currency_1').
                        </p>
                    </div>
                    <div class="hoverable-shadow">
                        <a data-currency="BTC" href="{{ route('start.mixing', app()->getLocale()) }}?currency=BTC"
                            class="single-icon ad-add-cart-listener" data-prevent="true">
                            <img src="{{ asset('bundles/frontend/assets/images/header/bitcoin-logo2.svg') }}" alt="bitcoin logo">
                            <p>Bitcoin</p>
                        </a>
                    </div>
                    <div class="hoverable-shadow">
                        <a data-currency="LTC" href="{{ route('start.mixing', app()->getLocale()) }}?currency=LTC"
                            class="single-icon ad-add-cart-listener" data-prevent="true">
                            <img src="{{ asset('bundles/frontend/assets/images/header/litecoin.svg') }}" alt="litecoin logo">
                            <p>Litecoin</p>
                        </a>
                    </div>
                    <div class="hoverable-shadow">
                        <a data-currency="DASH" href="{{ route('start.mixing', app()->getLocale()) }}?currency=DASH"
                            class="single-icon ad-add-cart-listener" data-prevent="true">
                            <img src="{{ asset('bundles/frontend/assets/images/header/dashcoin.svg') }}" alt="dashcoin logo">
                            <p>Dash Coin</p>
                        </a>
                    </div>
                    <div class="hoverable-shadow">
                        <a data-currency="#" href="#" class="single-icon" data-prevent="true">
                            <img src="{{ asset('bundles/frontend/assets/images/header/ethereum.svg') }}" alt="ethereum logo">
                            <p class="mb-0">Ethereum</p>
                            <small>@lang('start_mixing.soon')</small>

                        </a>
                    </div>
                </div>

            </div>

        </div>

        <div class="step-container container" id="step-2">

            <div class="mixer">

                <div class="title step-title" id="step-two-title">
                    <h5><img src="{{ asset('bundles/frontend/assets/images/mixer/two.svg') }}" alt="" class="responsive-img">
                        <span>@lang('start_mixing.receiver_address_for')&nbsp;<span id="currency-name">Bitcoin</span>&nbsp;@lang('start_mixing.the_clean_coins')</span>
                    </h5>
                    <img class="title-image" src="{{ asset('bundles/frontend/assets/images/how/how-bg-line.png') }}" alt="">
                </div>

                <form action="" id="mixer-form">
                    <p class="warning"><i class="material-icons">warning</i>@lang('start_mixing.warning_1') &nbsp;<a href="https://www.smartmixer.io">www.smartmixer.io</a>&nbsp; @lang('start_mixing.warning_2')!
                    </p>

                    <div class="row">

                        <!-- <div class="col s12 input-field mixer-code">
                            <input type="text" id="mixerCode" placeholder="Optional">
                            <label id="mixerCodeLabel" for="mixerCode" class="with-toolTip">@lang('start_mixing.enter_smart_code') : <img
                                    src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                    class="responsive-img tooltipped" data-position="top"
                                    data-tooltip="@lang('start_mixing.enter_smart_code_tip')."
                                    alt="Question Mark"></label>
                            <p id="discount-amount">@lang('start_mixing.discount')</p>
                        </div> -->

                    </div>

                    <div class="all-addresses">

                        <label for="addressCode1" class="with-toolTip">@lang('start_mixing.enter_the_receiver_address') : <img
                                src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top"
                                data-tooltip="@lang('start_mixing.enter_the_receiver_address_tip')."
                                alt="Question Mark"></label>

                        <div class="address-container">
                            <div class="timer-container colored-details">
                                <p id="address-percentage1" class="address-percentage">@lang('start_mixing.hundred')%</p>
                                <p><i class="material-icons">access_time</i> @lang('start_mixing.after')
                                    &nbsp;<span id="address-timer1" class="address-timer"> @lang('start_mixing.time')</span>
                                </p>
                            </div>
                            <div class="input-field">
                                <input type="text" id="addressCode1" placeholder="Enter the Receiver Address here"
                                    class="addressCode" required>
                                <i id="add-address" class="material-icons">add_circle_outline</i>
                            </div>
                        </div>

                    </div>

                    <!-- Start Service Slider -->
                    <div class="slider-alpha-header">
                        <p>- @lang('start_mixing.service_fee'): <img src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top"
                                data-tooltip="@lang('start_mixing.service_fee_tip')."
                                alt="Question Mark"> <span class="reserve-percent" id="reserve-percent">3.7287%</span>
                        </p>
                        <p>- @lang('start_mixing.pool_assignment'): <img
                                src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top"
                                data-tooltip="<strong>@lang('start_mixing.pool_assignment_1')</strong> - @lang('start_mixing.pool_assignment_2') 'Client <i class='fa fa-exchange'></i> Client' @lang('start_mixing.pool_assignment_3').<br />
                            <br />
                            <strong>@lang('start_mixing.smart_pool')</strong> - @lang('start_mixing.smart_pool_1') '@lang('start_mixing.standard_pool')', @lang('start_mixing.txt1')' coins. @lang('start_mixing.txt2')'@lang('start_mixing.smart_pool')'.<br />
                            <br />
                            <strong>@lang('start_mixing.stealth_pool')</strong> - @lang('start_mixing.stealth_pool_2') '@lang('start_mixing.standard_pool')' @lang('start_mixing.txt4') '@lang('start_mixing.stealth_pool')' @lang('start_mixing.txt3')' coins.<br />
                            <br />
                            @lang('start_mixing.stealth_pool_1')."
                                alt="Question Mark"><span class="reserve-alpha">@lang('start_mixing.smart_pool')</span></p>
                    </div>
                    <div id="slider-reserve" class="main-slider">
                        <span class="first"></span>
                        <span class="last"></span>
                    </div>
                    <!-- Ent Service Slider -->

                    <!-- Start Transfer Slider -->
                    <div class="slider-alpha-header">
                        <p id="percentage-distribution" class="with-toolTip">@lang('start_mixing.percentage_distribution') : <img
                                src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top"
                                data-tooltip="@lang('start_mixing.percentage_distribution_tip')."
                                alt="Question Mark"></p>
                    </div>
                    <div id="slider-transfer1" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer2" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer3" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer4" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer5" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer6" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer7" class="main-slider slider-transfer"></div>
                    <div id="slider-transfer8" class="main-slider slider-transfer"></div>
                    <!-- Ent Transfer Slider -->


                    <!-- Start Delay Slider -->
                    <div class="slider-alpha-header">
                        <p id="transfer-delay" class="with-toolTip">@lang('start_mixing.transfer_delay') :
                            <img src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top"
                                data-tooltip="@lang('start_mixing.transfer_delay_tip')"
                                alt="Question Mark"></p>
                    </div>
                    <div id="slider-delay1" class="main-slider slider-delay"></div>
                    <div id="slider-delay2" class="main-slider slider-delay"></div>
                    <div id="slider-delay3" class="main-slider slider-delay"></div>
                    <div id="slider-delay4" class="main-slider slider-delay"></div>
                    <div id="slider-delay5" class="main-slider slider-delay"></div>
                    <div id="slider-delay6" class="main-slider slider-delay"></div>
                    <div id="slider-delay7" class="main-slider slider-delay"></div>
                    <div id="slider-delay8" class="main-slider slider-delay"></div>
                    <div id="slider-delay9" class="main-slider slider-delay"></div>
                    <!-- Ent Delay Slider -->

                    <!-- Start Strength Slider -->
                    <div class="slider-alpha-header">
                        <p id="transfer-strength" class="with-toolTip">@lang('start_mixing.mixing_strength_meter') : <img
                                src="{{ asset('bundles/frontend/assets/images/icons/questions-circular-button.svg') }}"
                                class="responsive-img tooltipped" data-position="top" data-tooltip="@lang('start_mixing.mixing_strength_meter_tip')" alt="Question Mark"></p>
                    </div>
                    <div id="slider-strength" class="main-slider slider-strength"></div>
                    <!-- Ent Strength Slider -->
                    <div style="display: none" id="strength-dom-helper">

                    </div>

                    <div class="center-align mixing-loader" id="step-3-request-loader" style="display: none">
                        <img src="{{ asset('bundles/frontend/assets/images/mixer/checked.svg') }}" alt="Check mark">
                        <div class="lds-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="mixer-footer center-align" id="step-3-request-submit">
                        <h5 class="red-text form-error-msg hidden"><i class="material-icons">error</i> &nbsp;&nbsp;
                            <span></span></h5>
                        <button class="hoverable-shadow waves-effect waves-light" type="submit">
                            <span>@lang('start_mixing.continue')</span> <i class="material-icons">chevron_right</i>
                        </button>
                    </div>

                </form>

            </div>

        </div>

        <div class="step-container container" id="step-3">

            <div class="mixer mixer-confirm">

                <div class="title step-title">
                    <h5><img src="{{ asset('bundles/frontend/assets/images/mixer/three.svg') }}" alt="" class="responsive-img">@lang('start_mixing.please_read_and_agree')</h5>
                    <img class="title-image" src="{{ asset('bundles/frontend/assets/images/how/how-bg-line.png') }}" alt="">
                </div>

                <form action="" id="mixer-confirm-form">

                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" name="terms" />
                            <span>@lang('start_mixing.please_read_and_agree_1')</span>
                        </label>
                    </p>

                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" name="terms" />
                            <span>@lang('start_mixing.please_read_and_agree_2')
                        </label>
                    </p>

                    <div class="center-align mixing-loader" id="step-4-request-loader" style="display: none">
                        <img src="{{ asset('bundles/frontend/assets/images/mixer/checked.svg') }}" alt="Check mark">
                        <div class="lds-roller">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                    <div class="mixer-footer center-align" id="step-4-request-submit">
                        <button class="hoverable-shadow waves-effect waves-light" type="submit">
                            <img src="{{ asset('bundles/frontend/assets/images/how/button-bubbles.svg') }}" alt="Bubbles"
                                class="first">
                            <span>@lang('start_mixing.mix_my_cryptos')</span> <i class="material-icons">chevron_right</i>
                            <img src="{{ asset('bundles/frontend/assets/images/how/button-bubbles.svg') }}" alt="Bubbles"
                                class="second">
                        </button>
                    </div>

                </form>

            </div>

        </div>


        <div class="step-container" id="calculator-container">
            <hr class="calculator-hr">

            <div class="container mixer">
                <h4 class="calculator-header">@lang('start_mixing.fee_calc')</h4>

                <form action="" id="calculator-form" autocomplete="off">

                    <div class="row">

                        <div class="col input-field">
                            <input type="number" id="sendAddress" placeholder="@lang('start_mixing.enter_your_amount')" required>
                            <label id="send-address-label" for="sendAddress" class="with-toolTip">@lang('start_mixing.amount_to_send')
                                :</label>
                        </div>

                    </div>

                    <div class="all-addresses">

                        <label for="addressReceive1" class="with-toolTip">@lang('start_mixing.you_receive') :</label>

                        <div class="address-container">
                            <div class="input-field">
                                <input type="number" id="addressReceive1" placeholder="" class="addressCode" required>
                            </div>
                            <div class="timer-receive-container colored-details">
                                <p>
                                    <span class="currency-param">{{ request()->currency }}</span>
                                    <span class="address-receive-container">&nbsp;(&nbsp;
                                        <span class="address-receive"
                                            id="address-receive1">@lang('start_mixing.percent')%
                                        </span>&nbsp;)&nbsp;
                                    </span>&nbsp;@lang('start_mixing.after')
                                    &nbsp;
                                    <span id="receive-timer1" class="receive-timer">@lang('start_mixing.time')
                                    </span>
                                </p>
                                <p id="calculator-to-address1">@lang('start_mixing.to')
                                </p>
                            </div>
                        </div>

                    </div>


                    <div class="calculator-footer">
                        <p>@lang('start_mixing.your_personal_fee_is') <span class="reserve-percent">3.7287%</span>&nbsp;&nbsp;<!-- <span
                                id="currency-percentage"></span> -->&nbsp;<span class="currency-param"
                                style="text-transform: uppercase">{{ request()->currency }}</span>
                            @lang('start_mixing.for_each_receiver')</p>
                    </div>

                </form>
            </div>
        </div>

    </section>
    <input type="hidden" style="display: none;" id="mixture-order-request" value="{{ route('create.order', app()->getLocale()) }}" />
    <input type="hidden" style="display: none;" id="confirm-order-request" value="{{ route('confirm.order', app()->getLocale()) }}" />
    <input type="hidden" style="display: none;" id="qr-url" value="{{ route('qr.order', [app()->getLocale(), 'address_to_replace']) }}" />
    <input type="hidden" style="display: none" id="trans-step2-after" value="after" />
    <input type="hidden" style="display: none" id="trans-step2-to" value="to" />
    <input type="hidden" style="display: none" id="trans-step2-placeholder-receiving-address"
        value="Enter the Receiver Address here" />

    <input type="hidden" style="display: none" id="minimumPercentageFee_btc" value="1" />
    <input type="hidden" style="display: none" id="maximumPercentageFee_btc" value="5" />
    <input type="hidden" style="display: none" id="feePerAddress_btc" value="0.00023225" />
    <input type="hidden" style="display: none" id="minimumPercentageFee_bch" value="3" />
    <input type="hidden" style="display: none" id="maximumPercentageFee_bch" value="10" />
    <input type="hidden" style="display: none" id="feePerAddress_bch" value="0.00523225" />
    <input type="hidden" style="display: none" id="minimumPercentageFee_eth" value="3" />
    <input type="hidden" style="display: none" id="maximumPercentageFee_eth" value="10" />
    <input type="hidden" style="display: none" id="feePerAddress_eth" value="0.01" />
    <input type="hidden" style="display: none" id="minimumPercentageFee_ltc" value="1" />
    <input type="hidden" style="display: none" id="maximumPercentageFee_ltc" value="10" />
    <input type="hidden" style="display: none" id="feePerAddress_ltc" value="0.035" />

@endsection