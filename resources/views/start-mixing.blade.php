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
        <script>
            $(document).ready(function(){
                var count = 0;
                setInterval(function(){
                    var route = "<?php echo(route('check.order')) ?>";
                    var orderId = "<?php echo($order->order_id) ?>";
                    $.ajax({
                        url: route,
                        data: { orderId: orderId },
                        headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                        type: "POST",
                        beforeSend: function () {
                        },
                        success: function (response) {

                            $('#sendAddress').prop('value', response.sent);
                            individual_sent = response.individual_sent;
                            for (index = 0; index < individual_sent.length; ++index) {
                                $('#addressReceive'+(index+1)).prop('value', individual_sent[index]);
                            }

                            if (response.success) {
                                $('#step4-payment-status-p').html(response.success);
                                if(response.stage == 2 ){
                                    $('#step-4').css('display', 'none');
                                    $('#step-5').css('display', 'block');
                                    $('#step-4-nav').removeClass('active');
                                    $('#step-4-nav').addClass('finished');
                                    $('#step-5-nav').addClass('active');
                                }
                            }

                        },
                        complete: function () {
                        }
                    });
                    count = count + 1;
                }, 10000);//time in milliseconds 
             });
 
        </script>
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
                   
								    <li><a href="{{ route('qr.order', ['zh', $order->order_id]) }}">Chinese</a></li>
                    <li><a href="{{ route('qr.order', ['de', $order->order_id]) }}">German</a></li>
                    <li><a href="{{ route('qr.order', ['en', $order->order_id]) }}">English</a></li>
                    <li><a href="{{ route('qr.order', ['es', $order->order_id]) }}">Spanish</a></li>
                    <li><a href="{{ route('qr.order', ['fr', $order->order_id]) }}">French</a></li>
                    <li><a href="{{ route('qr.order', ['it', $order->order_id]) }}">Italian</a></li>
                    <li><a href="{{ route('qr.order', ['ja', $order->order_id]) }}">Japanese</a></li>
                    <li><a href="{{ route('qr.order', ['ko', $order->order_id]) }}">Korean</a></li>
                    <li><a href="{{ route('qr.order', ['ru', $order->order_id]) }}">Russian</a></li>
                    <li><a href="{{ route('qr.order', ['tr', $order->order_id]) }}">Turkish</a></li>

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
    </div>
    <!-- End Header Section-->

    <section class="mixer-container">

        <div id="steps-header">
            <div class="container mixer">
                <div class="steps-header">
                    <a class="step finished" data-step="1">
                        <div class="image"></div>
                        <p>@lang('start_mixing.choose_currency')</p>
                    </a>
                    <a class="step finished" data-step="2">
                        <div class="image"></div>
                        <p>@lang('start_mixing.order_details')</p>
                    </a>
                    <a class="step finished" data-step="3">
                        <div class="image"></div>
                        <p>@lang('start_mixing.terms')</p>
                    </a>
                    <a id="step-4-nav" class="step {{ ($order_status->order->status == 'done') ? 'finished' : 'active' }}" data-step="4">
                        <div class="image"></div>
                        <p>@lang('start_mixing.send_to_address')</p>
                    </a>
                    <a id="step-5-nav" class="step {{ ($order_status->order->status == 'done') ? 'active' : '' }}" data-step="5">
                        <div class="image">
                            <img class="finish-stars" src="{{ asset('bundles/frontend/assets/images/mixer/bar/clean.svg') }}" alt="">
                        </div>
                        <p>@lang('start_mixing.finish')</p>
                    </a>
                </div>
            </div>
        </div>


        <div class="step-container container" id="step-4" style="display: {{ ($order_status->order->status == 'done') ? 'none' : 'block' }}">

            <div class="mixer">
                <div class="step-four-content">
                    <div class="title step-title">
                        <h5><img src="{{ asset('/bundles/frontend/assets/images/mixer/four.svg') }}" alt="" class="responsive-img"> @lang('start_mixing.order'): {{$order->code}}
                            <span class="reserve-alpha"> {{ ($order_status->order->tax < 2) ? 'Standard Pool' : ( ($order_status->order->tax > 4) ? 'Stealth Pool' : 'Smart Pool' ) }} </span></h5>
                        <img class="title-image" src="{{ asset('/bundles/frontend/assets/images/how/how-bg-line.png') }}" alt="">
                    </div>

                    <div class="order-content">

                        <p class="warning"><i class="material-icons">warning</i>@lang('start_mixing.order_warning') &nbsp;<a href="https://www.smartmixer.io">www.smartmixer.io</a>&nbsp; @lang('start_mixing.order_warning_1')!
                        </p>


                        <div class="light-box-shadow">
                            <a href="{{ url('agreements/public/agreements/'.$order->txt) }}" class="download-letter" target="_blank">
                                <i class="material-icons">cloud_download</i><span class="underlined">@lang('start_mixing.letter_of_gurantee') </span><span>&nbsp;@lang('start_mixing.before_after')</span>
                            </a>
                        </div>

                        <div class="light-box-shadow">
                            <div class="qr-code-container">
                                <div class="deposit-qr-code" data-init="true" data-value="{{ $order->input_address }}" data-height="200" data-width="200">

                                <img width="200" height="200" id="order-qr-code" src="{{ $order->qrcode }}"></canvas></div>
                                <div class="input-container">
                                    <p>@lang('start_mixing.send_yer_cryptos')
                                        <small>(@lang('start_mixing.min').
                                            <b>0.001 {{ucwords($order_status->order->coin)}}</b>, @lang('start_mixing.max').
                                            <b>957.02 {{ucwords($order_status->order->coin)}}</b>)
                                        </small>
                                        to:
                                    </p>
                                    <p id="step4-payment-status">
                                        <p id="step4-payment-status-p">
                                            @if(($order_status->order->status == 'processing'))
                                                @lang('start_mixing.processing_payment')
                                            @else
                                                @lang('start_mixing.waiting_for_payment')
                                            @endif
                                        ...</p>
                                    </p>
                                    <div class="input-field">
                                        <label for="smart-mixer-address" class="active"></label>
                                        <input id="smart-mixer-address" type="text" readonly="readonly" value="{{ $order->input_address }}">
                                        <i id="mixer-address-copy" class="material-icons" data-success-text="Address Copied">content_copy</i>
                                    </div>
                                </div>
                            </div>
                        </div>

             

                        <p class="warning center-align"><i class="material-icons">warning</i><br>@lang('start_mixing.smartmixer_code_privacy')
                        </p>

                    </div>
                </div>
            </div>
        </div>

        <div class="step-container container" id="step-5" style="display: {{ ($order_status->order->status == 'done') ? 'block' : 'none' }}">
            <div class="mixer step-five-content">
                <div class="center-align">
                    <img id="mixing-duration-image"
                         src="/bundles/frontend/assets/images/mixer/step_5_gifs/BTC.gif"
                         class="responsive-img">
                </div>
                <div class="duration">
                    <p style="text-align: center;" class="center-align">@lang('start_mixing.transaction_done')</p>
                 
                </div>

                <div class="completed-actions" style="min-height: inherit;">
                    <div class="center-align mixing-loader">
                        <div class="lds-roller">
                            <img src="/bundles/frontend/assets/images/mixer/checked.svg" alt="Check mark" style="display: block;">
                        </div>
                    </div>
                </div>

            
                <div class="mixing-loader-bar">
                    <div></div>
                </div>
            </div>
        </div>

        <div class="step-container" id="calculator-container">
            <hr class="calculator-hr">

            <div class="container mixer">
                <h4 class="calculator-header">@lang('start_mixing.fee_calc')</h4>

                <form action="" id="calculator-form" autocomplete="off">

                    <div class="row">

                        <div class="col input-field">
                            <input type="number" id="sendAddress" placeholder="Enter your amount" value="{{number_format($order_status->order->sent,8)}}" disabled="">
                            <label id="send-address-label" for="sendAddress" class="with-toolTip">@lang('start_mixing.amount_to_send')
                                :</label>
                        </div>

                    </div>

                    <div class="all-addresses">

                        <label for="addressReceive1" class="with-toolTip">@lang('start_mixing.you_receive') :</label>
                        @foreach($order_status->outputs as $address)
                            <div class="address-container">
                                <div class="input-field">
                                    <input type="number" id="addressReceive{{$loop->iteration}}" placeholder="" class="addressCode" value="{{number_format($address->sent,8)}}" disabled="">
                                </div>
                                <div class="timer-receive-container colored-details">
                                    <p><span class="currency-param">{{ucwords($order_status->order->coin)}}</span> <span class="address-receive-container">&nbsp;(&nbsp;<span class="address-receive" id="address-receive1">{{ number_format($address->distribution,2) }} %</span>&nbsp;)&nbsp;</span>&nbsp;after &nbsp;
                                        <span id="receive-timer1" class="receive-timer">{{ convertToHoursMins($address->delay, '%02d hr. %02d min.') }}</span></p>
                                    <p id="calculator-to-address1">@lang('start_mixing.to'): {{$address->address}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>


                    <div class="calculator-footer">
                        <p>@lang('start_mixing.your_personal_fee_is') <span class="reserve-percent">{{$order_status->order->tax}}%</span>&nbsp;&nbsp;<span
                                id="currency-percentage"></span>&nbsp;<span class="currency-param"
                                style="text-transform: uppercase">{{$order_status->order->coin}}</span>
                            @lang('start_mixing.for_each_receiver')</p>
                    </div>

                </form>
            </div>
        </div>

    </section>
    <input type="hidden" style="display: none;" id="mixture-order-request" value="{{ route('create.order', app()->getLocale()) }}" />
    <input type="hidden" style="display: none;" id="confirm-order-request" value="{{ route('confirm.order', app()->getLocale()) }}" />
    <input type="hidden" style="display: none;" id="qr-url" value="{{ route('qr.order',[app()->getLocale(), 'address_to_replace']) }}" />
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