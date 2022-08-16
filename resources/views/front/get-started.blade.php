@extends('front.layout.app')
@section('content')
    <section class="wrapper">
        <section class="headingwrap headingwrap_sub">
            <div class="content">
               @include('front.layout.header')

                <div class="inside_wrap">
                    <div class="bannerleft">
                        <h1>Get <strong>Started</strong></h1>


                    </div>
                </div>
            </div>
        </section>


        <section class="featureswrap startwrap">
            <div class="content">
                <h2 class="zoomIn wow">Take  <strong>few simple steps</strong> to start</h2>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how1.png') }}" alt=""/></div>
                    <h4>Open an account</h4>
                    <p>To open an account, simply click on the "Register New Account" button on the main page. The next page is the registration form that you need to fill out. This shouldn’t take more than a few minutes. Once you’ve done that, you’ll receive an email  from us, and you’re done. You are now an official member of our site!</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how2.png') }}" alt=""/></div>
                    <h4>LOGIN TO MEMBER'S AREA</h4>
                    <p>Once you’ve opened an account, the next thing would be to familiarize yourself with how different sections of your account works. To start, go to the login page and enter your registration email and chosen password. After you are logged in, you can explore your account and get a feel of how everything works, such as making deposits, requesting withdrawals, etc.</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how3.png') }}" alt=""/></div>
                    <h4>Make your first deposit</h4>
                    <p>To start growing your Capital, you need to make a deposit. You can do this from the deposit section of your account. There are 6 investment plans ranging from 10%-30% Daily depending on the amount of your deposit. The minimum deposit amount is $100, and you are allowed to make as many deposits as you want. However, every deposit is treated as a separate investment.</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how4.png') }}" alt=""/></div>
                    <h4>WATCH YOUR CAPITAL GROW</h4>
                    <p>After you have made a deposit, there is nothing else to do except watch your earnings grow in your account every day. This can be fun, because it means you can be anywhere you want to be in the world, and your funds will still be growing in your account every day, even without you doing anything!</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how5.png') }}" alt=""/></div>
                    <h4>REQUEST WITHDRAWALS</h4>
                    <p>It only takes a few seconds to initiate your withdrawals and have your earnings paid to you. All of our withdrawals are instant, and your withdrawal will be sent to the Wallet address you provided during registration.</p>
                </div>
                <div class="featurebox bounceInDown wow">
                    <div class="icon"><img src="{{ asset('assets/home/styles/images/how6.png') }}" alt=""/></div>
                    <h4>REFER YOUR FRIENDS</h4>
                    <p>You don’t need an active deposit to take advantage of our referral program. As long as you are a registered member, you only need to use your personal affiliate link from your member's area and share it with your friends. You will get rewarded as soon as they join and make their first deposit!</p>
                </div>
            </div>
        </section>
       @include("front.layout.footer")
    </section>

@endsection

