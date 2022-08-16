@extends('front.layout.app')
@section('content')
    <section class="wrapper">
        <section class="headingwrap headingwrap_sub">
            <div class="content">
                @include('front.layout.header')

                <div class="inside_wrap">
                    <div class="bannerleft">
                        <h1>Contact <strong>Us</strong></h1>


                    </div>
                </div>

            </div>
        </section>

        <div class="inside_wrap">
            <div class="content">
                <div class="supportwrap">
                    <div class="supportleft">
                        <h2>Do You have any questions?</h2>
                        <p> We strongly recommend that you start searching for the necessary information in the FAQ section. If you need advice or technical assistance, do not hesitate to contact our specialists. Customer support is available around the clock. You just need to send a letter or a request via the feedback form to promptly receive the necessary assistance. Remember that the more detailed the description of your problem is, the sooner it will be solved. Do not forget to indicate your login, if you are a registered user of the website.</p>

                    </div>
                    <div class="supportright">
                        <h2>Fill up the below <strong>contact form</strong></h2>

                        <script language=javascript>

                            function checkform() {
                                if (document.mainform.name.value == '') {
                                    alert("Please type your full name!");
                                    document.mainform.name.focus();
                                    return false;
                                }
                                if (document.mainform.email.value == '') {
                                    alert("Please enter your e-mail address!");
                                    document.mainform.email.focus();
                                    return false;
                                }
                                if (document.mainform.message.value == '') {
                                    alert("Please type your message!");
                                    document.mainform.message.focus();
                                    return false;
                                }
                                return true;
                            }

                        </script>
                        <form method=post name=mainform onsubmit="return checkform()">
                            <div class="form-block one">           <input type="text" name="name" value="" size="30" class="inpts" placeholder="Your Name"/>
                            </div>
                            <div class="form-block two">           <input type="text" name="email" value="" size="30" class="inpts" placeholder="Your Email"/>
                            </div>
                            <div class="form-block three">
                                <textarea name=message class=inpts cols=45 rows=4 placeholder="Send your message to info@mining-farm.co.uk"></textarea>
                            </div>
                            <div class="form-block four">
                                <input type=submit value="Send" disabled class=sbmt>
                            </div>
                        </form>
                        <div class="supportemail">
                            Or contact us via e-mail: <a href="mailto:info@mining-farm.co.uk">info@mining-farm.co.uk</a>
                            <br /> Or by Phone : +44 7862 078280			</div>

                    </div>
                </div>
            </div>
        </div>
        @include('front.layout.footer')
    </section>
@endsection
