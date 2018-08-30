<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Management System  || Home</title>
    <meta name="Description" content="Appointment and patient management system created to simplify ">
    <!-- <link rel="icon" type="image/x-icon" href="public/uploads/favicon-blue-32x32.png" /> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('uploads/favicon-blue-32x32.png') }}" />
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat:400,500">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/material.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/mdl-selectfield.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" />
    <!-- <link rel="stylesheet" href="public/css/style-blue.min.css"> -->
    <link rel="stylesheet" href="{{ asset('css/style-blue.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- <link rel="stylesheet" href="public/css/style.css"> -->
</head>
<body>
        @yield('content')







<div id="appointment-button">
    <button id="appointment-now" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored mdl-button--raised animated slideInUp"><i class="fa fa-plus"></i></button>
    <div class="mdl-tooltip mdl-tooltip--top" data-mdl-for="appointment-now">Make An Appointment</div>
</div>

<!-- End Fixed Appointment Bottom Button -->
<!-- Start of Footer Section -->
<footer id="footer">
    <div class="layer-stretch">
        <div class="row layer-wrapper">
            <div class="col-md-4 footer-block">
                <div class="footer-ttl">
                    <p>Basic Info</p>
                </div>
                <div class="footer-container footer-a">
                    <div class="tbl">
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-map-marker"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">
                                    House # 56, Road # 7
                                    Dhanmondi,Dhaka-1209
                                    Bangladesh
                                </p>
                            </div>
                        </div>
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-phone"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">11122333333</p>
                            </div>
                        </div>
                        <div class="tbl-row">
                            <div class="tbl-cell"><i class="fa fa-envelope"></i></div>
                            <div class="tbl-cell">
                                <p class="paragraph-medium paragraph-white">support@get.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 footer-block">
                <div class="footer-ttl">
                    <p>Quick Links</p>
                </div>
                <div class="footer-container footer-b">
                    <div class="tbl">
                        <div class="tbl-row">
                            <ul class="tbl-cell">
                                <li>
                                    <a href="contact.html?route=contact">Contact</a>
                                </li>
                                {{--<li>--}}
                                {{--<a href="gallery.html?route=gallery">Gallery</a>--}}
                                {{--</li>--}}
                                <li>
                                    <a href="indexf419.html?route=privacy-policy">Privacy policy</a>
                                </li>
                                <li>
                                    <a href="index91ac.html?route=terms-condition">Terms condition</a>
                                </li>
                                {{--<li>--}}
                                {{--<a href="indexdb94.html?route=faq">Faq</a>--}}
                                {{--</li>--}}
                            </ul>
                            <ul class="tbl-cell">
                                <li><a href="login.html?route=login">Login</a></li>
                                <li><a href="register.html?route=register">Register</a></li>
                                <li><a href="forget_pass.html?route=forgot">Forgot Password</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-md-4 footer-block">
                <div class="footer-ttl">
                    <p>Newsletter</p>
                </div>
                <div class="footer-container footer-c">
                    <div class="footer-subscribe">
                        <form action="http://pepdev.com/theme-preview/klinikal/index.php?route=subscribe" method="post">
                            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input">
                                <input class="mdl-textfield__input" name="email" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" id="subscribe-email">
                                <label class="mdl-textfield__label" for="subscribe-email">Email Address</label>
                                <span class="mdl-textfield__error">Please Enter Valid Email Address!</span>
                            </div>
                            <div class="footer-subscribe-button">
                                <button type="submit" id="subscribe-submit" name="subscribe" class="mdl-button mdl-js-button mdl-js-ripple-effect button button-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <div class="social-list social-list-colored footer-social">
                        <li>
                            <a href="https://www.facebook.com/pepdevofficial" target="_blank" id="footer-facebook" class="fa fa-facebook"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" for="footer-facebook">Facebook</span>
                        </li>
                        <li>
                            <a href="https://twitter.com/pepdevofficial" target="_blank" id="footer-twitter" class="fa fa-twitter"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" for="footer-twitter">Twitter</span>
                        </li>
                        <li>
                            <a href="https://plus.google.com/110823961031348424693" target="_blank" id="footer-google" class="fa fa-google"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" for="footer-google">Google</span>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/pepdevofficial/" target="_blank" id="footer-instagram" class="fa fa-instagram"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" for="footer-instagram">Instagram</span>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/" target="_blank" id="footer-linkedin" class="fa fa-linkedin"></a>
                            <span class="mdl-tooltip mdl-tooltip--top" for="footer-linkedin">Linkedin</span>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start of Copyright Section -->
    <div id="copyright">
        <div class="layer-stretch">
            <div class="paragraph-medium paragraph-white">
                2018 © ALL RIGHTS RESERVED.
            </div>
        </div>
    </div><!-- End of Copyright Section -->
</footer><!-- End of Footer Section -->

<!-- Included Scripts -->
<script src="{{ asset('js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/material.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/jquery.flexslider.min.js') }}"></script>
<script src="{{ asset('js/mdl-selectfield.min.j') }}s"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/smoothscroll.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script>$('#menu-home').addClass('active');</script>	<!-- Custom Css -->
{{--<style></style>--}}

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-93901876-1', 'auto');
    ga('send', 'pageview');
</script>

<!-- Included Scripts -->

            @yield('footer')
</body>
</html>