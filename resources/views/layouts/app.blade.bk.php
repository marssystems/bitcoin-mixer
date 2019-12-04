<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title') | Crypto Tumbler | SmartMixer.io</title>
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/material-icons.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/plugins.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/stylesheet.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/chat.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('bundles/frontend/assets/css/custom.css') }}" />
    <link rel="icon" href="{{ asset('bundles/frontend/assets/images/favico.ico?v=1572529364') }}">
    <meta name="keywords"
        content="bitcoin mixer, bitcoin tumbler, bitcoin anonymizer, anonymizer bitcoin, litecoin mixer, bitcoin cash mixer, smart mixer, crypto mixer, crypto tumbler, bitcoin laundry, Btc mix,crypto mixer, coin mix, bitcoin blender">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>

<body>

    <div class="pre-loader">
        <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" alt="Smart Mixer Logo">
    </div>

    @yield('header_images')

    <div id="support-modal" class="modal">
        <div class="modal-content">

            <div class="preloader-overlay hidden">
                <div class="overlay"></div>
                <div class="preloader-container">
                    <div class="preloader-wrapper small active">
                        <div class="spinner-layer spinner-green-only">
                            <div class="circle-clipper left">
                                <div class="circle"></div>
                            </div>
                            <div class="gap-patch">
                                <div class="circle"></div>
                            </div>
                            <div class="circle-clipper right">
                                <div class="circle"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 class="center-align modal-header">
                <img src="{{ asset('bundles/frontend/assets/images/icons/faqs.svg') }}" alt="">
                @lang('layout.leave_us_a_messaage')
            </h4>
            <form class="support-form" id="support-form" action="{{ route('send.email') }}" method="post">
                @csrf
                <label for="support-name">
                    @lang('layout.your_name') :
                </label>
                <input type="text" name="support-name" id="support-name" autocomplete="name" required autofocus>
                <label for="support-message">
                    @lang('layout.how_can_we_help_you') ?
                </label>
                <textarea name="support-message" id="support-message" cols="130" rows="50" required></textarea>
                <label for="file">
                    @lang('layout.letter_of_guarantee') :
                </label>
                <input type="hidden" name="letter-content" id="letter-content" value="" />
                <div class="file-field input-field">
                    <div class="btn">
                        <span>@lang('layout.upload')</span>
                        <input id="file-letter-support" type="file" accept=".txt">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" id="file-path-validation-support"
                            placeholder="Please attach your letter of guarantee">
                    </div>
                </div>
                <button type="submit">
                    <i class="material-icons">chat_bubble_outline</i>
                    @lang('layout.send_message')
                </button>
                <div id="support-error-out"></div>
            </form>
            <div class="support-form-success hidden">
                <div class="check-mark">
                    <i class="material-icons">check</i>
                </div>

                <p class="head"><img src="{{ asset('bundles/frontend/assets/images/support/support.svg') }}" alt="Support">
                   @lang('layout.email_success')!</p>

                <!-- <div class="support-link">
                    <i class="material-icons">link</i>
                    <a href="" target="_blank" id="support-target-link"></a>
                </div>

                <p class="underlined">👉 @lang('layout.please_save_the_link_for_further_comm')</p> -->
            </div>
        </div>
        <a href="#!" class="modal-close waves-effect waves-green btn-flat"><i class="material-icons">@lang('layout.close')</i></a>
    </div>

    @yield('content')

    <!-- Start Footer Section -->
    <footer data-scroll-index="9" class="main-footer main-section">
        <img src="{{ asset('bundles/frontend/assets/images/mainIcon.gif') }}" class="footer-logo" alt="Smart Mixer Logo">
        <div class="fluid-container">
            <div class="row">
                <div class="col s12 l4 single-field">
                    <div class="header">
                        <img src="{{ asset('bundles/frontend/assets/images/footer/icon-circle.svg') }}" alt="Circle Icon">
                        <h6>@lang('layout.donation') BTC</h6>
                    </div>
                    <div class="footer">
                        <p class="scroll-x">33KK6erEfZq22LkXX8hD7nQUALjDs3nXwh</p>
                    </div>
                </div>
                <div class="col s12 l4 single-field centered-field">
                    <div class="header">
                        <img src="{{ asset('bundles/frontend/assets/images/footer/icon-circle.svg') }}" alt="Circle Icon">
                        <h6>@lang('layout.tor_mirror')</h6>
                    </div>
                    <div class="footer">
                        <p class="scroll-x"><a href="#" target="_blank">smrtmxdxognxhv64.onion</a></p>
                    </div>
                </div>
                <div class="col s12 l4 single-field">
                    <div class="header">
                        <img src="{{ asset('bundles/frontend/assets/images/footer/icon-circle.svg') }}" alt="Circle Icon">
                        <h6>>@lang('layout.stay_connected_with_us')</h6>
                    </div>
                    <div class="social-footer footer">
                        <p>

                            <a href="#" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/footer/email_icon.png') }}"
                                    alt="support@smartmixer.io" style="width: 55px;height: 55px;"></a>
                            <a href="https://t.me/smartmixer" target="_blank"><img src="{{ asset('bundles/frontend/assets/images/footer/telegram2.svg') }}" alt="Telegram Icon"
                                    style="width: 50px;height: 50px;"></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-nav">
                <div>
                    <a href="{{ route('home', app()->getLocale()) }}">@lang('layout.home')</a>
                    <a href="{{ route('start.mixing', app()->getLocale()) }}">@lang('layout.start_mixing')</a>
                    <a href="{{ route('referral', app()->getLocale()) }}">@lang('layout.referral')</a>
                    <a href="{{ route('faq', app()->getLocale()) }}">@lang('layout.faq')</a>
                    <a href="{{ route('fees', app()->getLocale()) }}">@lang('layout.fees')</a>
                </div>
                <div class="download-links">
                    <p>@lang('layout.smart_mixer_app') <span>@lang('layout.soon')</span></p>
                    <a href="#">
                        <img src="{{ asset('bundles/frontend/assets/images/footer/playStore.png') }}" alt="Play store Link"
                            class="responsive-img hoverable">
                    </a>
                    <a href="#">
                        <img src="{{ asset('bundles/frontend/assets/images/footer/appStore.png') }}" alt="App store Link"
                            class="responsive-img hoverable">
                    </a>
                </div>
            </div>
            <p class="copy-right">Copyright ⓒ 2019 <b>SmartMixer</b>
                - All rights reserved</p>
        </div>
    </footer>
    <!-- End Footer Section -->

    <div class="help-btn ad-add-cart-listener">
        <a href="{{ route('start.mixing', app()->getLocale()) }}"> @lang('layout.mix_my_cryptos')</a>
    </div>

    <!--Back to top button-->
    <a href="#0" class="cd-top js-cd-top waves-effect waves-circle gradient-color hoverable"><i
            class="material-icons">keyboard_arrow_up</i></a>
    <input id="why-graph1" type="hidden" value="bundles/frontend/assets/images/why/why-graph1.png" />
    <input id="why-graph2" type="hidden" value="bundles/frontend/assets/images/why/why-graph2.png" />
    <input id="why-graph3" type="hidden" value="bundles/frontend/assets/images/why/why-graph3.png" />
    <input id="why-mixing-text" type="hidden" value="Mixing" />
    <input id="why-with-text" type="hidden" value="With Mixing" />
    <input id="why-without-text" type="hidden" value="Without Mixing" />
    
    <script src="{{ asset('bundles/frontend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/wallet-address-validator.min.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/clipboard.min.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/main.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/jquery.qrcode.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/jquery.cookie.js') }}"></script>
    @yield('slider')
    <script src="{{ asset('bundles/frontend/assets/js/chat.js') }}"></script>
    <script src="{{ asset('bundles/frontend/assets/js/custom.js') }}"></script>
</body>

</html>