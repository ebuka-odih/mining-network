<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<!-- Mirrored from elitebitfx.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 01:44:55 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Mining Farm</title>
    <link rel="icon" href="{{ asset('assets/logo.png') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="{{ asset('assets/home/styles/animate.css') }}" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('assets/home/styles/custom.css') }}" rel="stylesheet" type='text/css'>
    <link href="{{ asset('assets/home/styles/hover.css') }}" rel="stylesheet" type='text/css'>
    <script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/home/styles/setting2.js') }}" type='text/javascript'></script>
    <script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/home/styles/wow.js') }}"></script>
    <script src="{{ asset('assets/home/styles/wow.min.js') }}"></script>

    <script type="text/javascript">
        //// Get the CryptoCurrency Information from the API
        jQuery.ajax({
            url: "https://min-api.cryptocompare.com/data/pricemultifull",
            data: "fsyms=BTC,ETH,DASH,LTC,XRP,XMR,BCH,XLM&tsyms=USD",
            dataType : 'json',
        }).done(function(data)
        {
            // console.log( "BTC : " + data.RAW.BTC.USD.CHANGEPCTDAY + ", ETH : " + data.RAW.ETH.USD.CHANGEPCTDAY + ", DASH : " + data.RAW.DASH.USD.CHANGEPCTDAY + ", LTC : " + data.RAW.LTC.USD.CHANGEPCTDAY + ", XRP : " + data.RAW.XRP.USD.CHANGEPCTDAY );
            //	console.log( "BTC : " + parseFloat(data.RAW.BTC.USD.CHANGEPCTDAY).toFixed(2) + ", ETH : " + parseFloat(data.RAW.ETH.USD.CHANGEPCTDAY).toFixed(2) + ", DASH : " + parseFloat(data.RAW.DASH.USD.CHANGEPCTDAY).toFixed(2) + ", LTC : " + parseFloat(data.RAW.LTC.USD.CHANGEPCTDAY).toFixed(2) + ", XRP : " + parseFloat(data.RAW.XRP.USD.CHANGEPCTDAY).toFixed(2) );

            jQuery(".dashCoin").html('$' + data.RAW.DASH.USD.PRICE);
            jQuery(".ethCoin").html('$' + data.RAW.ETH.USD.PRICE);
            jQuery(".bitCoin").html('$' + data.RAW.BTC.USD.PRICE);
            jQuery(".liteCoin").html('$' + data.RAW.LTC.USD.PRICE);
            jQuery(".xrpCoin").html('$' + data.RAW.XRP.USD.PRICE);
            jQuery(".xmrCoin").html('$' + data.RAW.XMR.USD.PRICE);
            jQuery(".bchCoin").html('$' + data.RAW.BCH.USD.PRICE);
            jQuery(".xlmCoin").html('$' + data.RAW.XLM.USD.PRICE);

            var dash = parseFloat(data.RAW.DASH.USD.CHANGEPCTDAY).toFixed(2);
            var eth  = parseFloat(data.RAW.ETH.USD.CHANGEPCTDAY).toFixed(2);
            var btc = parseFloat(data.RAW.BTC.USD.CHANGEPCTDAY).toFixed(2);
            var usd  = parseFloat(data.RAW.LTC.USD.CHANGEPCTDAY).toFixed(2);
            var xrp = parseFloat(data.RAW.XRP.USD.CHANGEPCTDAY).toFixed(2);
            var xmr  = parseFloat(data.RAW.XMR.USD.CHANGEPCTDAY).toFixed(2);
            var bch  = parseFloat(data.RAW.BCH.USD.CHANGEPCTDAY).toFixed(2);
            var xlm  = parseFloat(data.RAW.XLM.USD.CHANGEPCTDAY).toFixed(2);

            if( dash >= 0 ) jQuery(".dashCoin_change").addClass("greenup"); else jQuery(".dashCoin_change").addClass("purpledown");
            if( eth >= 0 ) jQuery(".ethCoin_change").addClass("greenup"); else jQuery(".ethCoin_change").addClass("purpledown");
            if( btc >= 0 ) jQuery(".bitCoin_change").addClass("greenup"); else jQuery(".bitCoin_change").addClass("purpledown");
            if( usd >= 0 ) jQuery(".liteCoin_change").addClass("greenup"); else jQuery(".liteCoin_change").addClass("purpledown");
            if( xrp >= 0 ) jQuery(".xrpCoin_change").addClass("greenup"); else jQuery(".xrpCoin_change").addClass("purpledown");
            if( xmr >= 0 ) jQuery(".xmrCoin_change").addClass("greenup"); else jQuery(".xmrCoin_change").addClass("purpledown");
            if( bch >= 0 ) jQuery(".bchCoin_change").addClass("greenup"); else jQuery(".bchCoin_change").addClass("purpledown");
            if( xlm >= 0 ) jQuery(".xlmCoin_change").addClass("greenup"); else jQuery(".xlmCoin_change").addClass("purpledown");

            jQuery(".dashCoin_change").html( dash + "%");
            jQuery(".ethCoin_change").html( eth + "%");
            jQuery(".bitCoin_change").html( btc + "%");
            jQuery(".liteCoin_change").html( usd + "%");
            jQuery(".xrpCoin_change").html( xrp + "%");
            jQuery(".xmrCoin_change").html( xmr + "%");
            jQuery(".bchCoin_change").html( bch + "%");
            jQuery(".xlmCoin_change").html( bch + "%");

            // VOLUME INFORMATION
            jQuery(".dashCoin_volume").html('Volume $' + data.RAW.DASH.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".ethCoin_volume").html('Volume $' + data.RAW.ETH.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".bitCoin_volume").html('Volume $' + data.RAW.BTC.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".liteCoin_volume").html('Volume $' + data.RAW.LTC.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".xrpCoin_volume").html('Volume $' + data.RAW.XRP.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".xmrCoin_volume").html('Volume $' + data.RAW.XMR.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".bchCoin_volume").html('Volume $' + data.RAW.BCH.USD.VOLUME24HOUR.toFixed(2));
            jQuery(".xlmCoin_volume").html('Volume $' + data.RAW.XLM.USD.VOLUME24HOUR.toFixed(2));

        });


    </script>


</head>
<body>
<script type='text/javascript' src='https://check.ddos-guard.net/check.js' async defer></script>


@yield('content')

<!--Start of Tawk.to Script-->
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6087261462662a09efc258fa/1f47upg6g';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
<!--End of Tawk.to Script-->
</body>

<!-- Mirrored from elitebitfx.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Apr 2021 01:46:14 GMT -->
</html>
