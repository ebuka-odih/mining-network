@extends('front.layout.app')
@section('content')
    <div class="main--body">
        <!--========== Preloader ==========-->
        <div class="preloader">
            <div class="preloader-wrapper">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        <a href="#0" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->


        <!--=======Header-Section Starts Here=======-->
        <header class="header-section header-section-2 plan-header">
            <div class="header-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-6">
                            <ul class="support-area">
                                <li>
                                    <a href="#0"><i class="flaticon-support"></i>Support</a>
                                </li>
                                <li>
                                    <a href="Mailto:info@hyipland.com"><i class="flaticon-email"></i>info@hyipland.com </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <ul class="cart-area">
                                <li>
                                    <i class="flaticon-globe"></i>
                                    <div class="select-area">
                                        <select class="select-bar">
                                            <option value="en">English</option>
                                            <option value="bn">Bangla</option>
                                            <option value="sp">Spanish</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <div class="header-area">
                        <div class="logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo.png') }}" alt="logo">
                            </a>
                        </div>
                        <div class="logo-2">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo/logo2.png') }}" alt="logo">
                            </a>
                        </div>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('home') }}">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">About</a>
                            </li>
                            <li>
                                <a href="{{ route('affiliate') }}">Affiliate</a>
                            </li>
                            <li>
                                <a href="{{ route('plan') }}">Plan</a>
                            </li>
                            <li>
                                <a href="{{ route('faq') }}">Faqs</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            <li class="pr-0">
                                <a href="{{ route('login') }}" class="custom-button">Login</a>
                            </li>
                            <li class="pr-0">
                                <a href="{{ route('register') }}" class="custom-button">Join Us</a>
                            </li>
                        </ul>
                        <div class="header-bar d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--=======Header-Section Ends Here=======-->


        <!--=======Banner-Section Starts Here=======-->
        <section class="bg_img hero-section-2" data-background="assets/images/about/hero-bg2.jpg">
            <div class="container">
                <div class="hero-content text-white">
                    <h1 class="title">Plan</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            Plan
                        </li>
                    </ul>
                </div>
            </div>
            <div class="hero-shape">
                <img class="wow slideInUp" src="assets/images/about/hero-shape1.png" alt="about" data-wow-duration="1s">
            </div>
        </section>
        <!--=======Banner-Section Ends Here=======-->


        <!--=======Offer-Section Stars Here=======-->
        <section class="offer-section padding-top padding-bottom">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group1.png" alt="balls">
            </div>
            <div class="ball-group-2" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group2.png" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">INVESTMENT OFFER</span>
                            <h2 class="title">OUR INVESTMENT PLANS</h2>
                            <p>
                                ClaymoreFx provides a straightforward and transparent mechanism to attract investments and make more profits.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="offer-wrapper">
                    @foreach($packages as $plan)
                        <div class="offer-item">
                            <div class="offer-header">
                                <h3 class="title">{{ $plan->daily_interest }}%</h3>
                                <span><b>every day</b></span>
                            </div>
                            <div class="offer-body">
                                <span class="bal-shape"></span>
                                <div class="item first">
                                    <h3 class="mb-3">{{ $plan->name }}</h3>
                                    <div class="item-thumb">
                                        <img src="{{ asset('assets/images/offer/offer1.png') }}" alt="offer">
                                    </div>
                                    <div class="item-content">
                                        <h5 class="title">Deposit</h5>
                                        <h5 class="subtitle"><span class="min">${{ $plan->min_deposit }}</span><span class="to">to</span><span class="max">${{ $plan->max_deposit }}</span></h5>
                                    </div>
                                </div>
                                <span class="bal-shape"></span>
                                <div class="item">
                                    <div class="item-thumb">
                                        <img src="assets/images/offer/offer2.png" alt="offer">
                                    </div>
                                    <div class="item-content">
                                        <h5 class="title">Terms</h5>
                                        <h5 class="subtitle">{{ $plan->term_days }} day(s)</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="offer-footer">
                                <a href="#0" class="custom-button">invest now</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!--=======Offer-Section Ends Here=======-->



        <!--=======Proit-Section Starts Here=======-->
        <section class="profit-section padding-top padding-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                        <div class="section-header">
                            <span class="cate">Calculate the amazing profits</span>
                            <h2 class="title">You Can Earn</h2>
                            <p>Calculate your profit before making an investment.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="profit-bg bg_img" data-background="assets/images/profit/profit-bg.png">
                    <div class="animation-group">
                        <div class="platform">
                            <img src="assets/images/profit/platform.png" alt="profit">
                        </div>
                        <div class="light">
                            <img src="assets/images/profit/light.png" alt="profit">
                        </div>
                        <div class="coin-1 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin6.png" alt="profit">
                        </div>
                        <div class="coin-2 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin2.png" alt="profit">
                        </div>
                        <div class="coin-3 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin3.png" alt="profit">
                        </div>
                        <div class="coin-4 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin4.png" alt="profit">
                        </div>
                        <div class="coin-5 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin5.png" alt="profit">
                        </div>
                        <div class="coin-6 wow fadeOutDown" data-wow-delay="1s">
                            <img src="assets/images/profit/coin1.png" alt="profit">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="calculate-wrapper tab">
                    <div class="calculate--area">
                        <div class="calculate-area">
                            <div class="calculate-item">
                                <h5 class="title" data-serial="01">Select the plan</h5>
                                <select class="select-bar">
                                    <option value="01">120% daily for 50 days</option>
                                    <option value="02">110% daily for 30 days</option>
                                    <option value="03">105% daily for 20 days</option>
                                    <option value="04">102% daily for 10 days</option>
                                    <option value="05">101% daily for 5 days</option>
                                </select>
                            </div>
                            <div class="calculate-item">
                                <h5 class="title" data-serial="02">Select the currency</h5>
                                <ul class="tab-menu">
                                    <li>usd</li>
                                    <li class="active">btc</li>
                                    <li>eth</li>
                                    <li>rub</li>
                                </ul>
                            </div>
                            <div class="calculate-item">
                                <h5 class="title" data-serial="03">Enter the amount</h5>
                                <input type="number" value="100">
                            </div>
                        </div>
                        <div class="tab-area">
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 USD</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 USD</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="usd-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 USD" data-max="1000 USD">
                                        <div id="usd-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item active">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 BTC</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 BTC</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="btc-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 BTC" data-max="1000 BTC">
                                        <div id="btc-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 ETH</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 ETH</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="eth-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 ETH" data-max="1000 ETH">
                                        <div id="eth-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                            <div class="tab-item">
                                <div class="profit-calc">
                                    <div class="item">
                                        <span class="cate">Daily Profit</span>
                                        <h2 class="title cl-theme-1">0.026400 RUB</h2>
                                    </div>
                                    <div class="item">
                                        <span class="cate">Total Profit</span>
                                        <h2 class="title cl-theme">1.320000 RUB</h2>
                                    </div>
                                </div>
                                <div class="invest-range-area">
                                    <div class="main-amount">
                                        <input type="text" class="calculator-invest" id="rub-amount" readonly>
                                    </div>
                                    <div class="invest-amount" data-min="1.00 RUB" data-max="1000 RUB">
                                        <div id="rub-range" class="invest-range-slider"></div>
                                    </div>
                                    <button type="submit" class="custom-button">join now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Proit-Section Ends Here=======-->


        <!--=======Feature-Section Starts Here=======-->
        <section class="faq-section padding-top padding-bottom bg_img" data-background="assets/images/feature/feature-bg.png">
            <div class="ball-group-1" data-paroller-factor="-0.30" data-paroller-factor-lg="0.60"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group5.png" alt="balls">
            </div>
            <div class="ball-group-2 rtl" data-paroller-factor="0.30" data-paroller-factor-lg="-0.30"
            data-paroller-type="foreground" data-paroller-direction="horizontal">
                <img src="assets/images/balls/ball-group6.png" alt="balls">
            </div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="section-header">
                            <span class="cate">You have questions</span>
                            <h2 class="title">
                                we have answers
                            </h2>
                            <p class="mw-100">
                                Do not hesitate to send us an email if you can't find what you're looking for.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="faq-wrapper">
                    <div class="faq-item">
                        <div class="faq-title">
                            <h5 class="title">What is the minimum percentage that an investor can earn on Hyipland?</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item active open">
                        <div class="faq-title">
                            <h5 class="title">Can i invest using cryptocurrency?</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h5 class="title">What are the minimum and maximum deposit amounts?</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h5 class="title">How long will the money arrive in my account after the withdrawal process?</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                            </p>
                        </div>
                    </div>
                    <div class="faq-item">
                        <div class="faq-title">
                            <h5 class="title">What payment system can i use to withdraw?</h5>
                            <span class="right-icon"></span>
                        </div>
                        <div class="faq-content">
                            <p>
                                Ea commodi eius nisi fugiat eligendi neque repellendus vero, aliquam temporibus, dicta optio eveniet saepe. Beatae hic fugiat qui possimus doloribus? Ratione, molestiae magnam.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======Feature-Section Ends Here=======-->

        <!-- ==========Footer-Section Starts Here========== -->
      @include('front.layout.footer')
        <!-- ==========Footer-Section Ends Here========== -->


    </div>

@endsection
