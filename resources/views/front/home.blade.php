@extends('front.layout.app')
@section('content')

<section class="wrapper">
    <section class="headingwrap">
        <div class="content">
           @include('front.layout.header')
            <div class="bannerwrap">
                <div class="bannerleft">
                    <div class="bitcoinstatwrap">
                        <div class="valuebox slideInRight wow">
                            <figure><img src="{{ asset('assets/home/styles/images/banner_bitcoin.png') }}" alt=""/></figure>
                            <p>Bitcoin:
                                <span class="bitCoin">$9214.00</span></p>
                        </div>
                        <div class="valuebox slideInRight wow">
                            <figure><img src="{{ asset('assets/home/styles/images/banner_litecoin.png') }}" alt=""/></figure>
                            <p>litecoin:
                                <span class="liteCoin">$9214.00</span></p>
                        </div>
                        <div class="valuebox slideInRight wow">
                            <figure><img src="{{ asset('assets/home/styles/images/banner_ethreum.png') }}" alt=""/></figure>
                            <p>ethereum:
                                <span class="ethCoin">$9214.00</span></p>
                        </div>
                        <div class="valuebox slideInRight wow">
                            <figure><img src="assets/home/styles/images/banner_dodgecoin.png" alt=""/></figure>
                            <p>dashcoin:
                                <span class="dashCoin">$9214.00</span></p>
                        </div>
                    </div>
                    <div class="growcapital slideInRight wow">
                        <h1>Grow Your Capital with <span>Mining Farm</span></h1>
                    </div>
                    <div class="bottomtext slideInRight wow">
                        <h3>Professional Trading On Cryptocurrency, Make Profit On Money Of The Future Today!</h3>
                        <p>Mining Farm is registered in London. Our company was formed to utilize advanced cloud mining technology to mine for Cryptocurrencies and also day trading on stock, indices, commodity, cryptocurrency, option , e.t.c. Become a member of our site to start growing your funds every day!</p>
                    </div>
                </div>
                <div class="bannerthumb zoomIn wow">
                    <figure class="coin1"><img src="{{ asset('assets/home/styles/images/banner_mobile.png') }}" alt=""/>
                        <a href="{{ route('login') }}">Member Login</a>
                        <a href="{{ route('register') }}" class="signup">Open Account</a>
                    </figure>
                    <div class="coin"><img src="{{ asset('assets/home/styles/images/banner_bitcoinround.png') }}" alt=""/></div>
                </div>



            </div>

        </div>
    </section>

    <section class="investmentsutionwrap">
        <div class="content">
            <div class="companystats">
                <div class="statbox bounceInDown wow">
                    <figure><img src="assets/home/styles/images/stat_icon1.png" alt=""/></figure>
                    <h4>1557</h4>
                    <p>Running Days</p>
                </div>
                <div class="statbox bounceInDown wow">
                    <figure><img src="assets/home/styles/images/stat_icon2.png" alt=""/></figure>
                    <h4>538.587 BTC</h4>
                    <p>total deposited</p>
                </div>
                <div class="statbox bounceInDown wow">
                    <figure><img src="assets/home/styles/images/stat_icon3.png" alt=""/></figure>
                    <h4>53k+ </h4>
                    <p>total accounts</p>
                </div>
                <div class="statbox bounceInDown wow">
                    <figure><img src="assets/home/styles/images/stat_icon4.png" alt=""/></figure>
                    <h4>1,538.432 BTC</h4>
                    <p>total payments</p>
                </div>
                <div class="statbox bounceInDown wow">
                    <figure><img src="assets/home/styles/images/stat_icon5.png" alt=""/></figure>
                    <h4>35k+</h4>
                    <p>users online</p>
                </div>
            </div>
            <div class="planmainwrap">
                <h2 class="zoomIn wow">our  investment
                    <strong>solutions</strong></h2>
                <div class="planwrap">
                    @foreach($packages as $plan)
                    <div class="planbox bounceIn wow">
                        <div style="width: 40%" class="left">
                            <div class="value">{{ $plan->name }}</div>
                            <div class="forever">PLAN</div>
                            <div style="font-weight: bold; font-size: 12px" class="instant">{{ $plan->daily_interest }}% ROI</div>
                        </div>
                        <div style="width: 60%; padding-left: 0px" class="right">
                            <div class="icon"><img src="{{ asset('assets/home/styles/images/plan_icon1.png') }}" alt=""/></div>
                            <ul>
                                <li>Min Deposit:  <span>{{ $plan->min_deposit }}USD</span></li>
                                <li>Max Deposit:  <span>{{ $plan->max_deposit }}USD</span></li>
                                <li style="font-size: 12px">VALIDITY OF PLAN = {{ $plan->term_days }} DAYS</li>
                                <li>WITHDRAW = INSTANT</li>
{{--                                <li style="font-size: 12px">REFERRAL COMMISSION 10%</li>--}}
                            </ul>
                        </div>
                    </div>
                    @endforeach


                </div>
                <div style="" class="calculatorwrap slideInUp wow">
                    <h3 class="zoomIn wow"><strong>BITCOIN CALCULATOR</strong></h3>
                    <coin-ponent dark-mode></coin-ponent>
                    <!--<div class="calculatoricon"><img src="https://elitebitfx.com/assets/home/styles/images/calculator_icon.png" alt=""/></div>-->
                    <!--<div class="title">calculate-->
                    <!--  <span>profit</span></div>-->
                    <!--  <div class="calinputs">-->
                    <!--    <label>Amount($)</label>-->
                    <!--    <input type="text" placeholder="" id="amount">-->
                    <!--  </div>-->
                    <!--  <div class="calcresults">-->
                    <!--    <div class="resultsbox">-->
                    <!--      <p>Profit Daily</p>-->
                    <!--      <h4 id="profitDaily">$0.10</h4>-->
                    <!--    </div>-->
                    <!--    <div class="resultsbox">-->
                    <!--      <p>Profit weekly</p>-->
                    <!--      <h4 id="profitWeekly">$0.40</h4>-->
                    <!--    </div>-->
                    <!--    <div class="resultsbox">-->
                    <!--      <p>Profit monthly</p>-->
                    <!--      <h4 id="profitMonthly">4</h4>-->
                    <!--    </div>-->
                    <!--  </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="welcomewrap">
        <div class="content">
            <div class="heading">
                <h2 class="zoomIn wow">welcome to <strong>Mining Farm</strong></h2>
                <p>Mining Farm is a true opportunity to earn on cryptocurrency. Nowadays cryptocurrency is one of the main payment instruments, which can be used online. Mining Farm has been using this kind of digital payment for quite a while to gain and raise profit.</p>
            </div>
            <div class="thumb fadeIn wow"><img src="assets/home/styles/images/welcome_thumb.png" alt=""/></div>
            <div class="infos slideInUp wow">
                <p>Mining Farm, is an officially registered company which gives its clients all required guarantees, including confidentiality of data provided by clients at the registration procedure. Apart from this we guarantee accrual of requested payments in due time and full amount. The company's system, including support service, works 24 hours, which means you are always welcome to contact our experts in case you have any questions.

                </p>
                <p>Mining Farm, provides its clients with an opportunity to invest money into mining farms located all around the world to obtain quite a big income later, which can be done even without client's direct participation. The company actively uses trading bots on digital currency stock-markets, which is very convenient and profitable,  and our clients can decide to ignore our mining scheme and trade their coin through forex, stock, indices, option, cryptocurrency, commodities e.t.c,  We also try to attract new partners and share our experience with the like-minded people all over the world.</p>
                <a href="index.php/faq.html">Get More Info</a>
            </div>
        </div>
    </section>
    <section class="welcomewrap">
        <div class="content">
            <div class="heading">
                <h2 class="zoomIn wow"> Mining Farm<strong> Certificate</strong></h2>
            </div>
            <div class="thumb fadeIn wow"><img src="assets/cert.png" alt=""/></div>
            <div class="infos slideInUp wow">
                <a href="https://find-and-update.company-information.service.gov.uk/search?q=13387599" target="_blank">Verify</a>
            </div>
        </div>
    </section>
    <section class="featureswrap">
        <div class="content">
            <h2 class="zoomIn wow"><strong>Mining Farm</strong> features</h2>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon1.png" alt=""/></div>
                <h4>24/7 Customer Support</h4>
                <p>We provide 24/7 customer support through e-mail. Our support representatives are always available to answer any questions. </p>
            </div>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon2.png" alt=""/></div>
                <h4>dedicated server</h4>
                <p>We use a dedicated server with the highest level of DDOS protection to ensure that your funds are always safe with us. </p>
            </div>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon3.png" alt=""/></div>
                <h4>EV SSL</h4>
                <p>Our website is secured with 256-bit encryption from Comodo with Extended Validation that verifies the authenticity of our company. </p>
            </div>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon4.png" alt=""/></div>
                <h4>US Company</h4>
                <p>Our company is legally registered in the United States of America as "Mining Farm MINING TECHNOLOGIES, LTD" .</p>
            </div>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon5.png" alt=""/></div>
                <h4>DDoS Protected System</h4>
                <p>We use the highest level of protection . Our website can resists attacks of any size. </p>
            </div>
            <div class="featurebox bounceInDown wow">
                <div class="icon"><img src="assets/home/styles/images/feature_icon6.png" alt=""/></div>
                <h4>Instant Withdrawals</h4>
                <p>Our withdrawals are all processed instantly after they are requested . Minimum withdrawal is only 0.05BTC.</p>
            </div>
        </div>
    </section><section class="lasttenwrap">
        <div class="content">
            <div class="lasttenbox lastdeposit fadeInUp wow">
                <div class="heading">LAST <strong>DEPOSITS</strong> <span><img src="assets/home/styles/images/last_deposit_icon.png" alt=""/></span></div>
                <div class="infos">
                    <div class="rows">
                        <div class="name">
                            <h5>User2199</h5>
                            <!-- <p>Aug-1-2020 11:44:17 PM</p> -->
                        </div>
                        <div class="price">$1191</div>
                        <div class="media"><img src="assets/home/styles/images/68.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2132</h5>
                            <!-- <p>Aug-1-2020 11:41:37 PM</p> -->
                        </div>
                        <div class="price">$899</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2866</h5>
                            <!-- <p>Aug-1-2020 11:27:53 PM</p> -->
                        </div>
                        <div class="price">$7223</div>
                        <div class="media"><img src="assets/home/styles/images/69.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2645</h5>
                            <!-- <p>Aug-1-2020 11:08:38 PM</p> -->
                        </div>
                        <div class="price">$1048</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2940</h5>
                            <!-- <p>Aug-1-2020 10:29:36 PM</p> -->
                        </div>
                        <div class="price">$3154</div>
                        <div class="media"><img src="assets/home/styles/images/68.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2921</h5>
                            <!-- <p>Aug-1-2020 10:21:37 PM</p> -->
                        </div>
                        <div class="price">$2762</div>
                        <div class="media"><img src="assets/home/styles/images/69.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2828</h5>
                            <!-- <p>Aug-1-2020 09:35:48 PM</p> -->
                        </div>
                        <div class="price">$998</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User3097</h5>
                            <!-- <p>Aug-1-2020 09:35:42 PM</p> -->
                        </div>
                        <div class="price">$2671</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2267</h5>
                            <!-- <p>Aug-1-2020 09:28:02 PM</p> -->
                        </div>
                        <div class="price">$1025</div>
                        <div class="media"><img src="assets/home/styles/images/69.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2541</h5>
                            <!-- <p>Aug-1-2020 09:20:32 PM</p> -->
                        </div>
                        <div class="price">$18278</div>
                        <div class="media"><img src="assets/home/styles/images/68.png" alt=""/></div>
                    </div>


                </div>
            </div>
            <div class="lasttenbox lastwithdrawals fadeInUp wow">
                <div class="heading">LAST <strong>withdrawals</strong> <span><img src="assets/home/styles/images/last_withdrawals_icon.png" alt=""/></span></div>
                <div class="infos">
                    <div class="rows">
                        <div class="name">
                            <h5>User2800</h5>
                            <!-- <p>Aug-1-2020 11:30:36 PM</p> -->
                        </div>
                        <div class="price">$39075</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2986</h5>
                            <!-- <p>Aug-1-2020 11:06:05 PM</p> -->
                        </div>
                        <div class="price">$50643</div>
                        <div class="media"><img src="assets/home/styles/images/68.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2791</h5>
                            <!-- <p>Aug-1-2020 10:54:56 PM</p> -->
                        </div>
                        <div class="price">$5377</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2310</h5>
                            <!-- <p>Aug-1-2020 10:41:16 PM</p> -->
                        </div>
                        <div class="price">$1687</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2526</h5>
                            <!-- <p>Aug-1-2020 10:36:49 PM</p> -->
                        </div>
                        <div class="price">$7904</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2132</h5>
                            <!-- <p>Aug-1-2020 10:30:49 PM</p> -->
                        </div>
                        <div class="price">$27960</div>
                        <div class="media"><img src="assets/home/styles/images/69.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2555</h5>
                            <!-- <p>Aug-1-2020 10:08:18 PM</p> -->
                        </div>
                        <div class="price">$4446</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2902</h5>
                            <!-- <p>Aug-1-2020 10:04:06 PM</p> -->
                        </div>
                        <div class="price">$15851</div>
                        <div class="media"><img src="assets/home/styles/images/69.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2806</h5>
                            <!-- <p>Aug-1-2020 09:50:00 PM</p> -->
                        </div>
                        <div class="price">$13824</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>
                    <div class="rows">
                        <div class="name">
                            <h5>User2889</h5>
                            <!-- <p>Aug-1-2020 09:36:06 PM</p> -->
                        </div>
                        <div class="price">$35515</div>
                        <div class="media"><img src="assets/home/styles/images/48.png" alt=""/></div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="commissionwrap">
        <div class="content">
            <h2 class="zoomIn wow"><strong>2 level</strong> commission</h2>
            <div class="commlevel left bounceIn wow">
                <div class="number">
                    <div class="inside">6<span>%</span></div>
                </div>
                <div class="infos">
                    <h4><strong>Level 1</strong> Referral Commission</h4>
                    <p>We offer 6% referral bonus for each new member you invite to our program. After he makes a deposit you receive a referral commission of 6%. </p>
                </div>
            </div>
            <div class="commlevel right bounceIn wow">
                <div class="number">
                    <div class="inside">4<span>%</span></div>
                </div>
                <div class="infos">
                    <h4><strong>Level 2</strong> Referral Commission</h4>
                    <p>We offer an extra bonus of 4% for any new member who is invited by your referral. After he makes a deposit you receive a referral commission of 4%. </p>
                </div>
            </div>
        </div>
    </section>
   @include('front.layout.footer')
</section>

@endsection

