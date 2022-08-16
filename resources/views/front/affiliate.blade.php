@extends('front.layout.app')
@section('content')
    <section class="wrapper">
        <section class="headingwrap headingwrap_sub">
            <div class="content">
               @include('front.layout.header')

                <div class="inside_wrap">
                    <div class="bannerleft">
                        <h1>Affiliate <strong>Program</strong></h1>


                    </div>
                </div>

            </div>
        </section>






        <section class="welcomewrap">
            <div class="content">
                <div class="heading affiliate-heading">
                    <p>Even if you do not make a deposit to our program, it is still possible to earn with Mining Farm! You can still take part in our referral program which offers a 2-level referral commission of 6% - 2%. That means you earn 6% of the deposit for any member who joins us through your referral link. If that member refers a new member who makes a deposit, you will earn 2% of that new member's deposit. Your referral commission is always immediately credited to your account and can be withdrawn instantly!</p>
                </div>
            </div>
        </section>

        <section class="featureswrap affiliatepage">
            <div class="content">
                <div class="featurebox bounceInDown wow">
                    <h4>HOW TO START EARNING</h4>
                    <p>To start referring members with our referral program, simply register a new account by clicking on the "Register" link. After signing up, log in to your member's area and you will see your referral link with your username. Use this link to promote our program and start earning referral commission!</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <h4>REFERRAL TOOLS</h4>
                    <p>We give you the tools you need to advertise our program! To use our banner links, log in to your account and click "Banners" on the user menu. There you will find banners of different size, with code underneath. All of the banner codes already have your referral link included. Use these banners to promote our program, and you will earn a referral bonus from any member who makes a deposit!</p>
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
