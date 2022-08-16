@extends('front.layout.app')
@section('content')
    <section class="wrapper">
        <section class="headingwrap headingwrap_sub">
            <div class="content">
                @include('front.layout.header')

                <div class="inside_wrap">
                    <div class="bannerleft">
                        <h1>About <strong>Mining Farm</strong></h1>


                    </div>
                </div>

            </div>
        </section>
        <section class="welcomewrap">
            <div class="content">
                <div class="heading">
                    <p>Mining Farm is a true opportunity to earn on cryptocurrency. Nowadays cryptocurrency is one of the main payment instruments, which can be used online. Mining Farm has been using this kind of digital payment for quite a while to gain and raise profit.</p>
                </div>
                <div class="thumb fadeIn wow"><img src="../assets/home/styles/images/welcome_thumb.png" alt="" /></div>
                <div class="infos slideInUp wow">
                    <p>Mining Farm, is an officially registered company which gives its clients all required guarantees, including confidentiality of data provided by clients at the registration procedure. Apart from this we guarantee accrual of requested payments in due time and full amount. The company's system, including support service, works 24 hours, which means you are always welcome to contact our experts in case you have any questions.

                    </p>
                    <p>Mining Farm, provides its clients with an opportunity to invest money into mining farms located all around the world to obtain quite a big income later, which can be done even without client's direct participation. The company actively uses trading bots on digital currency stock-markets, which is very convenient and profitable,  and our clients can decide to ignore our mining scheme and trade their coin through forex, stock, indices, option, cryptocurrency, commodities e.t.c,  We also try to attract new partners and share our experience with the like-minded people all over the world.</p>
                    <!--<a href="https://elitebitfx.com/index.php/faq">Get More Info</a>-->
                </div>
            </div>
        </section>
        <section class="welcomewrap">

            <div class="content">
                <div class="thumb fadeIn wow"><img src="{{ asset('client/rick.jpg') }}" alt="" /></div>

                <div class="infos slideInUp wow">
                    <h4 style="padding-bottom: 3px">Meet Ricky Andrade</h4>
                    <p>Entrepreneur, Creator of Multiple 7 Figure Businesses, Investor and educator</p>
                    <p>Ricky Andrade (24 year old) quit his job to become a full-time entrepreneur in April of 2015, clueless with where his life was going and with a limited amount of money in his pocket. He decided to invest in himself through reading and mentoring. He started off learning from other successful people, books, in-person events, and online. He tested different forms of mentorship, and found that some worked while others didn’t. He learned how to make multiple 7-figures from Forex, Stocks, Real Estate, Mentoring, and Affiliate Marketing. He has tested each niche for trial and error before finally perfecting his money making strategies, teaching students from all around the world.

                        With all of that knowledge and more available to you, there comes a choice. You too now have the opportunity to invest in yourself, just as Ricky Andrade did 3 years ago when he was starting out.



                       <br> "Invest in Yourself, You're Worth It!" -Ricky Andrade</p>
                    <!--<a href="https://elitebitfx.com/index.php/faq">Get More Info</a>-->
                </div>
                <div class="thumb fadeIn wow"><img src="{{ asset('client/rick2.jpg') }}" alt="" /></div>
            </div>
            <br>
        </section>
        <section class="featureswrap">
            <div class="content">
                <h2 class="zoomIn wow"><strong>Mining Farm</strong> features</h2>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon1.png" alt=""/></div>
                    <h4>24/7 Customer Support</h4>
                    <p>We provide 24/7 customer support through e-mail. Our support representatives are always available to answer any questions. </p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon2.png" alt=""/></div>
                    <h4>dedicated server</h4>
                    <p>We use a dedicated server with the highest level of DDOS protection to ensure that your funds are always safe with us. </p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon3.png" alt=""/></div>
                    <h4>EV SSL</h4>
                    <p>Our website is secured with 256-bit encryption from Comodo with Extended Validation that verifies the authenticity of our company. </p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon4.png" alt=""/></div>
                    <h4>US Company</h4>
                    <p>Our company is legally registered in London as "Mining Farm MINING TECHNOLOGIES, LTD" .</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon5.png" alt=""/></div>
                    <h4>DDoS Protected System</h4>
                    <p>We use the highest level of protection . Our website can resists attacks of any size. </p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="../assets/home/styles/images/feature_icon6.png" alt=""/></div>
                    <h4>Instant Withdrawals</h4>
                    <p>Our withdrawals are all processed instantly after they are requested . Minimum withdrawal is only 0.05BTC.</p>
                </div>
            </div>
        </section>
      @include('front.layout.footer')
    </section>

  @endsection
