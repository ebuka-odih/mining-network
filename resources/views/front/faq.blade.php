@extends('front.layout.app')
@section('content')
    <section class="wrapper">
        <section class="headingwrap headingwrap_sub">
            <div class="content">
             @include('front.layout.header')

                <div class="inside_wrap">
                    <div class="bannerleft">
                        <h1><strong>FAQ</strong>s</h1>


                    </div>
                </div>

            </div>
        </section>

        <div class="inside_wrap faq">
            <div class="content">
                <div class="panel-group one" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseOne" aria-expanded="false" aria-controls="collapseOne">Is Mining Farm a registered company?</a> </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">Yes, Mining Farm is registered in the UK  as "Mining Farm  MINING TECHNOLOGIES LTD".</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">How does Mining Farm earn profits for its members?</a> </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">Mining Farm  is involved in cloud mining, which enables our company to earn Bitcoins without mining hardware, software, electricity, or bandwidth, and also gives clients opportunity to trade stock, indices, commodity, forex, option, cryptocurrency, e.t.c</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseThree" aria-expanded="false" aria-controls="collapseThree">How can I register a new account?</a> </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body"> To register a new account, simply click the “Register New Account” button or “Sign Up” link and fill out the required information.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What is the minimum and maximum amount for deposit?</a> </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">The minimum deposit amount is 0.05BTC, there is no deposit limit , Surely you can make deposit higher than $5,00,000 by several deposits or in a single deposit.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive" aria-expanded="false" aria-controls="collapseFive">What is the minimum and maximum amount for withdrawal?</a> </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">The minimum amount for withdrawal is 0.05BTC. There is no maximum limit for withdrawal.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive1">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive1" aria-expanded="false" aria-controls="collapseFive1"> How long does it take for my deposit to be added?</a> </h4>
                        </div>
                        <div id="collapseFive1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive1">
                            <div class="panel-body">Your deposit is automatically added after 3 network confirmations for cryptocurrencies but for PM and payeer this be add as soon as you paid funds.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive2">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive2" aria-expanded="false" aria-controls="collapseFive2"> How do I request a withdrawal?</a> </h4>
                        </div>
                        <div id="collapseFive2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive2">
                            <div class="panel-body"> You can request a withdrawal by clicking the “Withdraw” button in the member's area and entering the amount you want to withdraw.</div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive3">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive3" aria-expanded="false" aria-controls="collapseFive3"> Are there any withdrawal fees?</a> </h4>
                        </div>
                        <div id="collapseFive3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive3">
                            <div class="panel-body"> No, there are no fees for withdrawal. </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive4">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive4" aria-expanded="false" aria-controls="collapseFive4"> How long does it take for my withdrawal to be sent?</a> </h4>
                        </div>
                        <div id="collapseFive4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive4">
                            <div class="panel-body"> Your withdrawal is sent Instant after it is requested .</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive4">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive14" aria-expanded="false" aria-controls="collapseFive14"> Can I withdraw my principal deposit?</a> </h4>
                        </div>
                        <div id="collapseFive14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive14">
                            <div class="panel-body">Yes, if you are practicing day trading, which is trading stock, commodity, forex , cryptocurrency or option , but if you are depending on our mining scheme, your principal deposit stays in your account and continues earning interest forever.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingFive5">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseFive5" aria-expanded="false" aria-controls="collapseFive5"> How can I change my Payment address?</a> </h4>
                        </div>
                        <div id="collapseFive5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive5">
                            <div class="panel-body"> You can change your payment withdrawal address by clicking the “Settings” button on the menu after logging in to your account. Enter your new payment address and save the changes.</div>
                        </div>
                    </div>
                    <div class="panel panel-default two">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseSix" aria-expanded="false" aria-controls="collapseSix"> How can I change my account e-mail?</a> </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body"> For security reasons, we do not allow users to change their e-mail after registration. If you would like to change your e-mail, please contact our support and we will change it for you.</div>
                        </div>
                    </div>
                    <div class="panel panel-default two">
                        <div class="panel-heading" role="tab" id="headingSeven">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"> Do I need to make a deposit to refer new members?</a> </h4>
                        </div>
                        <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                            <div class="panel-body"> No, you do not need to make a deposit to take part in our referral program.</div>
                        </div>
                    </div>
                    <div class="panel panel-default two">
                        <div class="panel-heading" role="tab" id="headingEight">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseEight" aria-expanded="false" aria-controls="collapseEight"> How can I see who my upline is?</a> </h4>
                        </div>
                        <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                            <div class="panel-body"> You can see your upline by clicking on “Referrals”, and you will see the username of your upline. If there is no username there, it means you have no upline.</div>
                        </div>
                    </div>
                    <div class="panel panel-default two">
                        <div class="panel-heading" role="tab" id="headingNine">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseNine" aria-expanded="false" aria-controls="collapseNine"> Can I register multiple accounts from the same computer?</a> </h4>
                        </div>
                        <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
                            <div class="panel-body">Yes, you can register multiple accounts from the same computer or IP address, but they cannot be your referral.</div>
                        </div>
                    </div>
                    <div class="panel panel-default two">
                        <div class="panel-heading" role="tab" id="headingTen">
                            <h4 class="panel-title"> <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="index-a%3dfaq.html#collapseTen" aria-expanded="false" aria-controls="collapseTen"> How can I contact your support?</a> </h4>
                        </div>
                        <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
                            <div class="panel-body"> You can contact our support through clicking the “Contact Us” link. We offer support through Contact Form, and E-mail.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       @include('front.layout.footer')
    </section>
@endsection
