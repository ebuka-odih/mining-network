<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from elitebitfx.com/index.php/login by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 01:46:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cryptx Miner</title>
<link rel="icon" href="../assets/home/styles/images/favicon.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="../assets/home/styles/animate.css" rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link href="../assets/home/styles/custom.css" rel="stylesheet" type='text/css'>
<link href="../assets/home/styles/hover.css" rel="stylesheet" type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="../assets/home/styles/setting2.js" type='text/javascript'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../assets/home/styles/wow.js"></script>
<script src="../assets/home/styles/wow.min.js"></script>
</head>
<body class="loginpages">


<div class="loginwrap">
<div class="content">
  <div class="logo"><a href="{{ route('homepage') }}"><img height="100" width="100" src="{{ asset('assets/logo1.png') }}" alt="" /></a></div>
  <div class="loginwrappers">
    <div class="loginheads">user Login
{{--      <div class="icon">--}}
{{--        <a href="{{ route('homepage') }}"><img height="150" width="250" src="{{ asset('assets/logo1.png') }}" alt="" /></a>--}}
{{--        </div>--}}
    </div>
           <div class="form-container login">
    <form method="post" action="{{ route('login') }}" name="mainform" onsubmit="return checkform()">
        @csrf

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <input type="hidden" name="ci_csrf_token" value="" />

        <table width="100%" border=0 cellpadding=4 cellspacing=4>
          <tr>
            <td colspan="2">
              <input type="text" name="email" required class=inpts size=30 autofocus="autofocus" placeholder="Enter Email Address"></td>
          </tr>
          <tr>
            <td colspan="2">
              <input type="password" name="password" required class=inpts size=30 placeholder="Enter Password"></td>
          </tr>
                    <tr>
            <td height="40" valign="middle"><input type="submit" value="Login" class=sbmt /></td>
            @if (Route::has('password.request'))

                <td align="right" valign="middle"><a href="{{ route('password.request') }}">Forgot Password?</a></td>
            @endif
          </tr>
        </table>
      </form>
    </div>

    <div class="loginaction">

    <h4>Do not have an account yet? </h4>
    <a href="{{ route('register') }}" class="signup">Register Here</a>
</div>

  </div>
</div>

</div>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5f2826e59b7cf26e73c1e1a6/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
