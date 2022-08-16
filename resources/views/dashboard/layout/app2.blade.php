<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from kripton.dexignzone.com/xhtml/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Apr 2021 09:49:49 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Mining Farm</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="{{ asset('client/vendor/jqvmap/css/jqvmap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('client/vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('client/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('client/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('client/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <style>
        .btn-buy-now {
            display: none;
        }
        .dz-demo-trigger {
            display: none;
        }
    </style>

</head>
<body>


<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>
<!--*******************
    Preloader end
********************-->

<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">

    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <a href="{{ route('homepage') }}" class="brand-logo">
            <img height="60" width="80" src="{{ asset('assets/logo_dash.png') }}" alt=""/>
        </a>

        <div class="nav-control">
            <div class="hamburger">
                <span class="line"></span><span class="line"></span><span class="line"></span>
            </div>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->


    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content">
            <nav class="navbar navbar-expand">
                <div class="collapse navbar-collapse justify-content-between">
                    <div class="header-left">
                        <div class="dashboard_bar">
                            Dashboard
                        </div>
                    </div>

                    <ul class="navbar-nav header-right">
                        <li class="nav-item dropdown header-profile">
                            <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                <img src="{{ auth()->user()->profile_image }}" width="20" alt=""/>
                                <div class="header-info">
                                    <span>{{ auth()->user()->first_name." ".auth()->user()->last_name }}</span>
                                    <small>{!! auth()->user()->status() !!}</small>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="{{ route('user.profile') }}" class="dropdown-item ai-icon">
                                    <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <span class="ml-2">Profile </span>
                                </a>
                                <a class="nav-link btn btn-default btn-flat" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                    <span class="ml-2">Logout </span>
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="deznav">
        <div class="deznav-scroll">
            <ul class="metismenu" id="menu">
                <li>
                    <a  href="{{ route('user.dashboard') }}" aria-expanded="false">
                        <i class="flaticon-381-networking"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                </li>
                <li><a  href="{{ route('user.deposit_plan') }}" aria-expanded="false">
                        <i class="flaticon-381-television"></i>
                        <span class="nav-text">Deposit</span>
                    </a>
                </li>


                <li><a href="{{ route('user.withdraw') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Withdrawal</span>
                    </a>
                </li>
                <li><a href="{{ route('user.withdrawal') }}" aria-expanded="false">
                        <i class="flaticon-381-network"></i>
                        <span class="nav-text">Transactions</span>
                    </a>
                </li>
                <li><a href="{{ route('user.all_referrals') }}" aria-expanded="false">
                        <i class="flaticon-381-user"></i>
                        <span class="nav-text">Referrals</span>
                    </a>
                </li>
                <li><a href="{{ route('user.overview') }}" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Overview</span>
                    </a>
                </li>
                <li><a href="{{ route('user.uread_messages') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-notification"></i>
                        <span class="nav-text">Messages <span class="badge badge-danger">{{ auth()->user()->unread_msg() }}</span></span>
                    </a>
                </li>

                <li><a href="{{ route('user.profile') }}" class="ai-icon" aria-expanded="false">
                        <i class="flaticon-381-user-1"></i>
                        <span class="nav-text">Profile</span>
                    </a>
                </li>
            </ul>
<br><br>
            <div class="copyright">
                <p><strong>Mining Farm</strong> © 2021 All Rights Reserved</p>
{{--                <p class="fs-12">Made with <span class="heart"></span> by DexignZone</p>--}}
            </div>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->





    @yield('content')



<!--**********************************
            Footer start
        ***********************************-->
<div class="footer">
    <div class="copyright">
        <p>Copyright © <a href="https://mining-farm.co.uk" target="_blank">Mining Farm</a> 2021</p>
    </div>
</div>
<!--**********************************
    Footer end
***********************************-->


<!--**********************************
   Support ticket button end
***********************************-->

</div>
<!--**********************************
    Main wrapper end
***********************************-->



<!-- Required vendors -->
<script src="{{ asset('client/vendor/global/global.min.js') }}"></script>
<script src="{{ asset('client/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('client/js/custom.min.js') }}"></script>

<script src="{{ asset('client/vendor/chart.js/Chart.bundle.min.js') }}"></script>

<!-- Datatable -->
<script src="{{ asset('client/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('client/js/plugins-init/datatables.init.js') }}"></script>


<!-- Chart piety plugin files -->
<script src="{{ asset('client/vendor/peity/jquery.peity.min.js') }}"></script>

<!-- Apex Chart -->
<script src="{{ asset('client/vendor/apexchart/apexchart.js') }}"></script>
<script src="{{ asset('client/vendor/owl-carousel/owl.carousel.js') }}"></script>

<!-- Dashboard 2 -->
<script src="{{ asset('client/js/dashboard/dashboard-4.js') }}"></script>
<script src="{{ asset('client/js/deznav-init.js') }}"></script>
<script src="{{ asset('client/js/demo.js') }}"></script>
{{--<script src="{{ asset('client/js/styleSwitcher.js') }}"></script>--}}

<script>
    jQuery(document).ready(function(){
        dezSettingsOptions.version = 'dark';
        new dezSettings(dezSettingsOptions);
    });

    function carouselReview(){
        jQuery('.testimonial-one').owlCarousel({
            loop:true,
            autoplay:true,
            margin:20,
            nav:false,
            rtl:true,
            dots: false,
            navText: ['', ''],
            responsive:{
                0:{
                    items:3
                },
                450:{
                    items:4
                },
                600:{
                    items:5
                },
                991:{
                    items:5
                },

                1200:{
                    items:7
                },
                1601:{
                    items:5
                }
            }
        })
    }
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>
</body>

</html>
