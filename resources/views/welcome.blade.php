@extends('layouts.app')
@section('page_title', 'Best Bitcoin Mixer')

@section('slider')
    <script>
        $("#welcome-video").yu2fvl();
    </script>

@endsection

@section('content')

<div class="header">
    <!-- navbar -->
    <!-- Navbar -->
    <div class="navbar">
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
    <!-- slider -->
    <div id="slider" class="carousel custom-bg-primary-three slide " data-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active p-controller posr">
                <div class="custom_carousel-caption ">
                    <h1 style="color: #fff;">@lang('welcome.act_smart')! - @lang('welcome.value_your_privacy')</h1>
                    <h4 style="color: #fff; font-weight: lighter;">@lang('welcome.make_your_cryptos_untracreable')</h4>
                    <br>
                    <h4 style="color: #fff; font-weight: lighter;">@lang('welcome.select_the_desired_coin_and')  <span style="color: #00B4DB;"><a href="{{ route('start.mixing', app()->getLocale()) }}">@lang('welcome.mix_now')!</a></span></h4>
                </div>
            </div>
        </div>
    </div>
    <!-- slider -->
</div>
<!-- header end -->
<!-- about Us -->
<div class="container mt-40">
    <div class="row mt-30">
        <div class="col-md-3 col-sm-6">
            <a href="{{ route('start.mixing', app()->getLocale()) }}?currency=BTC" style="text-decoration: none;">
                <div class="box10">
                    <img src="{{ asset('img/bitcoin-logo2.svg') }}" style="width: 40%; height: 40%; margin-top: 27% !important; margin-left: 30% !important;">
                    <br>
                    <br>
                    <h4 class="text-center">Bitcoin</h4>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="{{ route('start.mixing', app()->getLocale()) }}?currency=LTC" style="text-decoration: none;">
                <div class="box10">
                    <img src="{{ asset('img/litecoin.svg') }}" style="width: 40%; height: 40%; margin-top: 27% !important; margin-left: 30% !important;">
                    <br>
                    <br>
                    <h4 class="text-center">Litecoin</h4>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#" style="text-decoration: none;">
                <div class="box10">
                    <img src="{{ asset('img/ethereum.svg') }}" style="width: 40%; height: 40%; margin-top: 27% !important; margin-left: 30% !important;">
                    <br>
                    <br>
                    <h4 class="text-center">Ethereum</h4>
                </div>
            </a>
        </div>
        <div class="col-md-3 col-sm-6">
            <a href="#" style="text-decoration: none;">
                <div class="box10">
                    <img src="{{ asset('img/bitcoin-logo.svg') }}" style="width: 40%; height: 40%; margin-top: 27% !important; margin-left: 30% !important;">
                    <br>
                    <br>
                    <h4 class="text-center">Bitcoin Cash</h4>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- about Us -->
<!---Video Section-->
<div class="container-fluid" style="padding: 30px 0px 30px 0px; background: #CFE7FF;">
    <div class="container">
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-5 posr anim3">
                <div class="container text-fff ">
                    <h3 style="color: #4f50ad; font-weight: bolder; margin-top: 25px;">@lang('welcome.watch_a_video_on')</h3>
                    <h3 style="font-weight: lighter !important; margin-top: -14px;">
                    @lang('welcome.how_to_use_btc_mixer')
                    <h3>
                </div>
            </div>
            <div class="col-lg-3 anim4">
                <div class="box8 text-center">
                    <img src="{{ asset('images/abs.png') }}" class="container">
                    <h3 class="title">@lang('welcome.video')</h3>
                    <div class="box-content">
                        <ul class="icon">
                            <li><a id="welcome-video" href="https://www.youtube.com/watch?v=bKct-BZ_M9w"><i class="fa fa-play" aria-hidden="true"></i> </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>
<!---Video Section-->
<!--Logo Section-->
<div class="container-fluid" style="padding: 30px 0px 30px 0px;">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-2 posr anim3">
                <img src="{{ asset('images/mixer/Brand1.PNG') }}" style="width: 100%;" height="90">
            </div>
            <div class="col-sm-2 posr anim3">
                <img src="{{ asset('images/mixer/Brand2.PNG') }}" style="width: 100%;" height="90">
            </div>
            <div class="col-sm-2 posr anim3">
                <img src="{{ asset('images/mixer/Brand3.PNG') }}" style="width: 100%;" height="90">
            </div>
            <div class="col-sm-2 posr anim3">
                <img src="{{ asset('images/mixer/Brand4.PNG') }}" style="width: 100%;" height="90">
            </div>
            <div class="col-sm-2 posr anim3">
                <img src="{{ asset('images/mixer/Brand5.PNG') }}" style="width: 100%;" height="90">
            </div>
        </div>
    </div>
</div>
<!--Logo Section-->
<!--Info Section-->
<div class="container-fluid" style="padding: 30px 0px 30px 0px; background: #E2DFF2;">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 anim4">
                <img src="{{ asset('images/mixer/info.PNG') }}" style="width: 100%; height: 100%;">
            </div>
            <div class="col-lg-7 posr anim3">
                <div class="container">
                    <h3 style="color: black;  margin-top: 15px;">@lang('welcome.what_is_smart_mixer')?</h3>
                    <br>
                    <p>@lang('welcome.what_is_smart_mixer_1')</p>
                    <p>@lang('welcome.what_is_smart_mixer_2')</p>
                    <p>@lang('welcome.what_is_smart_mixer_3')</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Info Section-->
<!--Steps Section-->
<div class="container-fluid" style="padding: 30px 0px 30px 0px;">
    <div class="container">
        <h2 class="text-center anim3" id="fee" style="font-weight: bolder;">@lang('welcome.how_sm_works')</h2>
        <h4 class="text-center anim3" style="font-weight: lighter; color: #1BBC9B;">@lang('welcome.receive_clean_cryptos_in_three_steps')!</h4>
        <br>
        <div class="row text-center">
            <div class="col-lg-4 posr anim3" style="background: #3EA1FE; padding: 10px;">
                <div class="container text-fff">
                    <img src="{{ asset('images/mixer/Step1.PNG') }}" width="100" height="100">
                    <br>
                    <br>
                    <h3 style="color: #fff;">@lang('welcome.step') 1</h3>
                    <h4 style="font-weight: lighter;">@lang('welcome.enter_address_and_send_coins')</h4>
                </div>
            </div>
            <div class="col-lg-4 posr anim3" style="background: #2D2E8E; padding: 10px;">
                <div class="container text-fff">
                    <img src="{{ asset('images/mixer/Step2.PNG') }}" width="100" height="100">
                    <br>
                    <br>
                    <h3 style="color: #fff;">@lang('welcome.step') 2</h3>
                    <h4 style="font-weight: lighter;">@lang('welcome.we_mix_yer_coins')</h4>
                </div>
            </div>
            <div class="col-lg-4 posr anim3" style="background: #1BBC9B; padding: 10px;">
                <div class="container text-fff">
                    <img src="{{ asset('images/mixer/Step3.PNG') }}" width="100" height="100">
                    <br>
                    <br>
                    <h3 style="color: #fff;">@lang('welcome.step') 3</h3>
                    <h4 style="font-weight: lighter;">@lang('welcome.receive_untraceable_coins')</h4>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <br>
                <a class="btn btn-3">@lang('welcome.read_more')</a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <h2 class="text-center" style="font-weight: bolder;">@lang('welcome.our_smart_benefits')</h2>
        <div class="row">
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon1.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smartly_anon') – @lang('welcome.our_smart_benefits')</h4>
                <br>
                <br>
                <p>@lang('welcome.smart_anonymity_1').</p>
            </div>
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon2.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smart_interface_no_sign_up')</h4>
                <br>
                <br>
                <p>@lang('welcome.smart_interface_no_sign_up_1')</p>
            </div>
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon3.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smart_referral_commission')</h4>
                <br>
                <br>
                <p>@lang('welcome.smart_referral_commission_1')!</p>
            </div>
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon4.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smart_and_reliable')</h4>
                <br>
                <br>
                <p>@lang('welcome.smart_and_reliable_1').</p>
            </div>
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon5.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smart_and_easy_to_use')</h4>
                <br>
                <br>
                <p>@lang('welcome.smart_and_easy_to_use_1').</p>
            </div>
            <div class="col-lg-4 anim2">
                <img src="{{ asset('images/mixer/CardIcon6.PNG') }}" width="150" height="150">
                <h4>@lang('welcome.smart_access_tor')</h4>
                <br>
                <br>
                <p>
                    @lang('welcome.smart_access_tor_1') 
                    <a href="#">
                        @lang('welcome.smart_access_tor_1_link').
                </p>
            </div>
        </div>
        <!--button-->
        <div class="row text-center">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
        <br>
        <a class="btnhollow" href="#">
        <span>@lang('welcome.read_more')</span>
        </a>
        </div>
        </div>
        <!--button-->
    </div>
</div>
<br>
<br>
<!--Steps Section-->
<!-- slider -->
<h2 class="text-center" style="font-weight: bolder;">@lang('welcome.scenarios')</h2>
<br>
<div class="carousel slide" data-ride="carousel">
    <ul class="carousel-indicators">
        <li data-target="#slider" data-slide-to="0" class="active"></li>
        <li data-target="#slider" data-slide-to="1"></li>
        <li data-target="#slider" data-slide-to="2"></li>
        <li data-target="#slider" data-slide-to="3"></li>
    </ul>
    <div id="slider" class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/slide1.jpg') }}" height="300" width="100%">
            <div class="custom_carousel-caption text-center">
                <div class="title">
                    <div class="title-content">
                        <h4 style="color: #c7b3fe;">@lang('welcome.send_cryptos_to_friends')</h4>
                    </div>
                </div>
                <p class="font-1rem">@lang('welcome.send_cryptos_to_friends_1').</p>
                <p class="font-1rem">@lang('welcome.send_cryptos_to_friends_2').</p>
                <p style="float: right;" class="date">@lang('welcome.employee')</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slide2.jpg') }}" height="300">
            <div class="custom_carousel-caption text-center">
                <div class="title">
                    <div class="title-content">
                        <h4 style="color: #c7b3fe;">@lang('welcome.value_your_privacy')</h4>
                    </div>
                </div>
                <p class="font-1rem">@lang('welcome.value_your_privacy_1').</p>
                <p class="font-1rem">@lang('welcome.value_your_privacy_2')!</p>
                <p style="float: right;" class="date">@lang('welcome.social_worker')</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slide1.jpg') }}" height="300" width="100%">
            <div class="custom_carousel-caption text-center">
                <div class="title">
                    <div class="title-content">
                        <h4 style="color: #c7b3fe;">@lang('welcome.anon_salaries')</h4>
                    </div>
                </div>
                <p class="font-1rem">@lang('welcome.anon_salaries_1').</p>
                <p class="font-1rem">@lang('welcome.anon_salaries_2').</p>
                <p style="float: right;" class="date">@lang('welcome.entrepreneur')</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/slide2.jpg') }}" height="300">
            <div class="custom_carousel-caption text-center">
                <div class="title">
                    <div class="title-content">
                        <h4 style="color: #c7b3fe;">@lang('welcome.anon_investing')</h4>
                    </div>
                </div>
                <p class="font-1rem">@lang('welcome.anon_investing_1'),</p>
                <p class="font-1rem">“@lang('welcome.anon_investing_2')?”</p>
                <p class="font-1rem">@lang('welcome.anon_investing_3').</p>
                <p style="float: right;" class="date">@lang('welcome.pensioner')</p>
            </div>
        </div>
    </div>
</div>
<br>
<!-- slider -->
<!--smart Section-->
<div class="container-fluid" style="padding: 30px 0px 30px 0px;">
    <div class="container">
        <h2 class="text-center" id="blog" style="font-weight: bolder;">@lang('welcome.be_smart_and_stay_up_to_date')</h2>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4 text-align-center">
                <img src="{{ asset('images/mixer/Smart1.PNG') }}" height="250" style="width: 100%;">
                <h5 class="text-align-left">@lang('welcome.what_is_a_hardware_wallet')?</h5>
                <span style="color: #18BE9A;" class="text-center">October 27, 2019</span> <span style="color: #18BE9A; float: right;"><i class="fa fa-eye" aria-hidden="true"></i> 375</span>
                <p>@lang('welcome.what_is_a_hardware_wallet_1').</p>
                <div class="row text-center">
                    <div class="col-sm-12" style="padding-bottom: 30px;">
                        <br>
                        <a class="btnhollow" href="#">
                        <span>@lang('welcome.read_more')</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-align-center">
                <img src="{{ asset('images/mixer/Smart2.PNG') }}" height="250" style="width: 100%;">
                <h5 class="text-align-left">@lang('welcome.are_crypto_anon')?</h5>
                <span style="color: #18BE9A;" class="text-center">October 27, 2019</span> <span style="color: #18BE9A; float: right;"><i class="fa fa-eye" aria-hidden="true"></i> 565</span>
                <p>@lang('welcome.are_crypto_anon_1')?</p>
                <br>
                <br>
                <br>
                <div class="row text-center">
                    <div class="col-sm-12" style="padding-bottom: 30px;">
                        <br>
                        <a class="btnhollow" href="#">
                        <span>@lang('welcome.read_more')</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-align-center">
                <img src="{{ asset('images/mixer/Smart3.PNG') }}" height="250" style="width: 100%;">
                <h5 class="text-align-left">@lang('welcome.why_mixing_currencies_is_important')</h5>
                <span style="color: #18BE9A;" class="text-center">October 27, 2019</span> <span style="color: #18BE9A; float: right;"><i class="fa fa-eye" aria-hidden="true"></i> 794</span>
                <p>@lang('welcome.why_mixing_currencies_is_important_1').</p>
                <br>
                <br>
                <div class="row text-center">
                    <div class="col-sm-12" style="padding-bottom: 30px;">
                        <br>
                        <a class="btnhollow" href="#">
                        <span>@lang('welcome.read_more')</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--smart Section-->
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <!--FAQ Section-->
        <h2 class="text-center" id="faq" style="font-weight: bolder; color:#18BE9A">@lang('layout.faq')</h2>
        <h2 class="text-center" style="font-weight: bolder;">@lang('welcome.frequently_asked_questions')</h2>
        <div class="row">
            <div class="col-lg-6">
                <h5 style="background-color: #18BE9A; color: #fff; padding: 8px; margin: 10px;" class="container">@lang('welcome.faq1')
                    - @lang('welcome.what_is_smart_mixer')?
                </h5>
                <p class="container">@lang('welcome.what_is_smart_mixer_5').</p>
            </div>
            <div class="col-lg-6">
                <h5 style="background-color: #18BE9A; color: #fff; padding: 8px; margin: 10px;" class="container">@lang('welcome.faq2')
                    - @lang('welcome.faq2_q')?
                </h5>
                <p class="container">                                
                <div style="padding-left: 20px;" class="faq--full">
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
                </p>
            </div>
            <div class="col-lg-6">
                <h5 style="background-color: #18BE9A; color: #fff; padding: 8px; margin: 10px;" class="container">@lang('welcome.faq3')
                    - @lang('welcome.what_is_a_smart_code')?
                </h5>
                <p class="container">@lang('welcome.what_is_a_smart_code_2').</p>
            </div>
            <div class="col-lg-6">
                <h5 style="background-color: #18BE9A; color: #fff; padding: 8px; margin: 10px;" class="container">@lang('welcome.faq4')
                    - @lang('welcome.how_many_confirmations')?
                </h5>
                <p class="container">@lang('welcome.how_many_confirmations_2')</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <br>
                <a class="btnhollow" href="#" style="width: 200px">
                <span>@lang('welcome.read_full_faq')</span>
                </a>
            </div>
        </div>
        <!--FAQ Section-->
        <br>
        <br>
        <br>
        <!--Privacy Section-->
        <h2 class="text-center" style="font-weight: bolder;">@lang('welcome.do_smth')</h2>
        <h3 class="text-center" style="font-weight: lighter; color:#18BE9A">@lang('welcome.be_smart_be_anonymous')!</h3>
        <div class="row text-center">
            <div class="col-sm-12">
                <br>
                <a class="btnhollow" href="{{ route('start.mixing', app()->getLocale()) }}" style="width: 270px">
                <span>@lang('welcome.mix_my_cryptos')</span>
                </a>
            </div>
        </div>
        <br>
        <br>
        <br>
    </div>
</div>
@endsection