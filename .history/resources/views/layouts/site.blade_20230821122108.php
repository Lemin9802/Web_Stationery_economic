<!DOCTYPE html>
<html lang="zxx" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <meta name="robots" content="index, follow" />
    <meta name="description" content="Hmart-Smart Product eCommerce html Template">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('site/images/favicon.ico') }}" />
    <!-- CSS
    ============================================ -->
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('site/css/font.awesome.css') }}" />
    <link rel="stylesheet" href="{{ asset('site/css/pe-icon-7-stroke.css') }}" />
    <link rel="stylesheet" href="{{ asset('site/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/jquery-ui.min.css') }}">
    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
    <!-- Minify Version -->
    <link rel="stylesheet" href="{{ asset('site/css/plugins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.min.css') }}">
    <style>
        .header-logo h3, .footer-logo h3{
            color: red;
        }
    </style>
</head>

<body>

    <div class="main-wrapper">
        <header>
            <!-- Header top area start -->
            <div class="header-top">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col">

                            <div class="welcome-text">
                                <p>Wish you have a pleasant experience <i class="fa fa-heart" aria-hidden="true"></i>
                                </p>
                            </div>
                        </div>
                        <div class="col d-none d-lg-block">
                            <div class="top-nav">
                                <ul>
                                    <!-- <li><a href="tel:example@gmail.com"><i class="fa fa-phone"></i>
                                            +$account->email </a>
                                    </li> -->
                                    <li><a href="mailto:admin@gmail.com"><i class="fa fa-envelope-o"></i>
                                            admin@gmail.com</a></li>
                                    <li><a href="#"><i class="fa fa-phone"></i>
                                            +84868797979</a>
                                    </li>

                                    @if ( $data['info'] == 'null')
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('viewRegister') }}">Register</a></li>
                                    @elseif
                                        <li><a href="{{ route('myAccount') }}"><i class="fa fa-user"></i>
                                            {{ $data['info']->name }}
                                        </a></li>
                                    @endif

                                    <!-- <li><a href="{{ route('myAccount') }}"><i class="fa fa-user"></i> Account</a></li> -->

                                    <!-- <li><a href=""><i class="fa fa-envelope-o"></i>
                                            account->email</a></li>
                                    <li><a href="{{ route('myAccount') }}"><i class="fa fa-user"></i> Account</a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header top area end -->
            <!-- Header action area start -->
            <div class="header-bottom  d-none d-lg-block">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{ route('index') }}">
                                    <h3>HataDaNh Store</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- Header action area start -->
            <div class="header-bottom d-lg-none sticky-nav style-1">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-3 col">
                            <div class="header-logo">
                                <a href="{{ route('index') }}">
                                    <h3>HataDaNh Store</h3>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-6 d-none d-lg-block">
                            <div class="search-element">
                                <form action="#">
                                    <input type="text" placeholder="Search" />
                                    <button><i class="pe-7s-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col">
                            <div class="header-actions">
                                <!-- Single Wedge Start -->
                                <a href="#offcanvas-wishlist" class="header-action-btn offcanvas-toggle">
                                    <i class="pe-7s-like"></i>
                                </a>
                                <!-- Single Wedge End -->
                                <a href="#offcanvas-cart"
                                    class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                    <i class="pe-7s-shopbag"></i>
                                    <span class="header-action-num">01</span>
                                    <!-- <span class="cart-amount">€30.00</span> -->
                                </a>
                                <a href="#offcanvas-mobile-menu"
                                    class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                    <i class="pe-7s-menu"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header action area end -->
            <!-- header navigation area start -->
            <div class="header-nav-area d-none d-lg-block sticky-nav">
                <div class="container">
                    <div class="header-nav">
                        <div class="main-menu position-relative">
                            <ul>
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="#">About</a></li>
                                <li class="dropdown position-static"><a href="#">Pages <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul
                                                class="d-flex align-items-center p-0 border-0 flex-column justify-content-center">
                                                <li>
                                                    <a class="p-0" href="#"><img
                                                            class="img-responsive w-100"
                                                            src="{{ asset('site/images/banner/menu-banner.png') }}"
                                                            alt=""></a>
                                                </li>
                                            </ul>

                                            <ul class="d-block">
                                                <li class="title"><a href="#">Other Shop Pages</a></li>
                                                <li><a href="{{ route('cart') }}">Cart Page</a></li>
                                                <li><a href="{{ route('checkout') }}">Checkout Page</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="title"><a href="#">Related Shop Pages</a></li>
                                                <li><a href="{{ route('myAccount') }}">Account Page</a></li>
                                                <li><a href="{{ route('login') }}">Login & Register Page</a></li>
                                            </ul>

                                            <ul class="d-block">
                                                <li class="title"><a
                                                        href="{{ route('admin.dashboard.index') }}">Admin Pages</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>

                                <li class="dropdown position-static"><a href="#">Category <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                                <ul class="d-block">
                                                    <li class="title"><a
                                                            href="#"></a></li>
                                                </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header navigation area end -->
            <div class="mobile-search-box d-lg-none">
                <div class="container">
                    <!-- mobile search start -->
                    <div class="search-element max-width-100">
                        <form action="#">
                            <input type="text" placeholder="Search" />
                            <button><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                    <!-- mobile search start -->
                </div>
            </div>
        </header>
        <!-- offcanvas overlay start -->
        {{-- <div class="offcanvas-overlay"></div> --}}
        <!-- offcanvas overlay end -->

        @yield('main')

        <!-- Footer Area Start -->
        <div class="footer-area">
            <div class="footer-container">
                <div class="footer-top">
                    <div class="container">
                        <div class="row">
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 mb-md-30px mb-lm-30px">
                                <div class="single-wedge">
                                    <div class="footer-logo">
                                        <a href="{{ route('index') }}">
                                            <h3>HataDaNh Store</h3>
                                        </a>
                                    </div>
                                    <p class="about-text">Lorem ipsum dolor sit amet consl adipisi elit, sed do
                                        eiusmod templ incididunt ut labore
                                    </p>
                                    <ul class="link-follow">
                                        <li>
                                            <a class="m-0" title="Twitter" target="_blank"
                                                rel="noopener noreferrer" href="#"><i class="fa fa-facebook"
                                                    aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a title="Tumblr" target="_blank" rel="noopener noreferrer"
                                                href="#"><i class="fa fa-tumblr" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Facebook" target="_blank" rel="noopener noreferrer"
                                                href="#"><i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a title="Instagram" target="_blank" rel="noopener noreferrer"
                                                href="#"><i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-60px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Services</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('myAccount') }}">My
                                                        Account</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="#">Contact</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('cart') }}">Shopping
                                                        cart</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="#">Shop</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('login') }}">Services
                                                        Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-6 mb-lm-30px pl-lg-40px">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">My Account</h4>
                                    <div class="footer-links">
                                        <div class="footer-row">
                                            <ul class="align-items-center">
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('myAccount') }}">My
                                                        Account</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="#">Contact</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('cart') }}">Shopping
                                                        cart</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="#">Shop</a></li>
                                                <li class="li"><a class="single-link"
                                                        href="{{ route('login') }}">Services
                                                        Login</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-md-6 col-lg-3 col-sm-12">
                                <div class="single-wedge">
                                    <h4 class="footer-herading">Contact Info</h4>
                                    <div class="footer-links">
                                        <!-- News letter area -->
                                        <p class="address">Address: 20 Cong Hoa</p>
                                        <p class="phone">Phone/Fax:<a href="tel:">
                                                0868797979</a></p>
                                        <p class="mail">Email:<a href="mailto:demo@example.com">
                                                example@gmail.com</a></p>
                                        </p>
                                        <!-- News letter area  End -->
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="line-shape-top line-height-1">
                            <div class="row flex-md-row-reverse align-items-center">
                                <div class="col-md-6 text-center text-md-end">
                                </div>
                                <div class="col-md-6 text-center text-md-start">
                                    <p class="copy-text"> © 2022 <strong> HataDaNh Store</strong> Made With <i
                                            class="fa fa-heart" aria-hidden="true"></i> By <a class="company-name"
                                            href="#">
                                            <strong> Group HataDaNh </strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Area End -->
    </div>


    <!-- Global Vendor, plugins JS -->
    <!-- JS Files
    ============================================ -->
    {{-- <script src="{{ asset('site/js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('site/js/vendor/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('site/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
    <script src="{{ asset('site/js/vendor/modernizr-3.11.2.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins/scrollUp.js') }}"></script>
    <script src="{{ asset('site/js/plugins/venobox.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins/mailchimp-ajax.js') }}"></script> --}}

    <!-- Minify Version -->
    <script src="{{ asset('site/js/vendor.min.js') }}"></script>
    <script src="{{ asset('site/js/plugins.min.js') }}"></script>
    <script src="{{ asset('site/js/main.min.js') }}"></script>

    <!--Main JS (Common Activation Codes)-->
    <<script src="{{ asset('site/js/main.js') }}"></script>
</body>


</html>
