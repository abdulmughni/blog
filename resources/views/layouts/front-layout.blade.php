<!DOCTYPE html>
<!-- saved from url=(0052)# -->
<html class=" js touch cssanimations csstransitions">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    @yield('title-and-meta')

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome-font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/line-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/chosen.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/colors.css') }}">



</head>
<body cz-shortcut-listen="true">

<div class="theme-layout" id="scrollup">

    @include('include.main-menu')

    @yield('content-sections')

    <footer>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="about_widget">
                                <div class="logo">
                                    <a href="" title=""><img width="120px" src="{{ asset('images/logo.png') }}" alt=""></a>
                                </div>
                                <span>Collin Street West, Victor 8007, Australia.</span>
                                <span>+1 246-345-0695</span>
                                <span>info@jobhunt.com</span>
                                <div class="social">
                                    <a href="#" title=""><i class="la la-facebook"></i></a>
                                    <a href="#" title=""><i class="la la-twitter"></i></a>
                                    <a href="#" title=""><i class="la la-linkedin"></i></a>
                                    <a href="#" title=""><i class="la la-pinterest"></i></a>
                                    <a href="#" title=""><i class="la la-behance"></i></a>
                                </div>
                            </div><!-- About Widget -->
                        </div>
                    </div>
                    <div class="col-lg-4 column">
                        <div class="widget">
                            <h3 class="footer-title">Frequently Asked Questions</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="#" title="">Privacy &amp; Seurty </a>
                                        <a href="#" title="">Terms of Serice</a>
                                        <a href="#" title="">Communications </a>
                                        <a href="#" title="">Referral Terms </a>
                                        <a href="#" title="">Lending Licnses </a>
                                        <a href="#" title="">Disclaimers </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="#" title="">Support </a>
                                        <a href="#" title="">How It Works </a>
                                        <a href="#" title="">For Employers </a>
                                        <a href="#" title="">Underwriting </a>
                                        <a href="#" title="">Contact Us</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 column">
                        <div class="widget">
                            <h3 class="footer-title">Find Jobs</h3>
                            <div class="link_widgets">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a href="#" title="">US Jobs</a>
                                        <a href="#" title="">Canada Jobs</a>
                                        <a href="#" title="">UK Jobs</a>
                                        <a href="#" title="">Emplois en Fnce</a>
                                        <a href="#" title="">Jobs in Deuts</a>
                                        <a href="#" title="">Vacatures China</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 column">
                        <div class="widget">
                            <div class="download_widget">
                                <a href="#" title=""><img src="images/dw1.png" alt=""></a>
                                <a href="#" title=""><img src="images/dw2.png" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-line">
            <span>© 2018 Jobhunt All rights reserved. Design by Creative Layers</span>
            <a href="#scrollup" class="scrollup" title=""><i class="la la-arrow-up"></i></a>
        </div>
    </footer>

</div>

<div class="account-popup-area signin-popup-box">
    <div class="account-popup">
        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>User Login</h3>
        @include('auth.login')
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="la la-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="la la-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- LOGIN POPUP -->

<div class="account-popup-area signup-popup-box">
    <div class="account-popup">

        <span class="close-popup"><i class="la la-close"></i></span>
        <h3>Sign Up</h3>
        @include('auth.register')
        <div class="extra-login">
            <span>Or</span>
            <div class="login-social">
                <a class="fb-login" href="#" title=""><i class="la la-facebook"></i></a>
                <a class="tw-login" href="#" title=""><i class="la la-twitter"></i></a>
            </div>
        </div>
    </div>
</div><!-- SIGNUP POPUP -->

<script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/script.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/wow.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/isotop.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/select-chosen.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/rslider.js') }}" type="text/javascript"></script>

@yield('scripts')

</body></html>



