<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mediax - Health & Medical HTML Template - Medical Shop</title>
    <meta name="author" content="Mediax">
    <meta name="description" content="Mediax - Health & Medical HTML Template">
    <meta name="keywords" content="Mediax - Health & Medical HTML Template">
    <meta name="robots" content="INDEX,FOLLOW">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicons - Place favicon.ico in the root directory -->
    {{-- <link rel="apple-touch-icon" sizes="57x57" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x92" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff"> --}}


    <link rel="apple-touch-icon" sizes="57x57"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-152x152.png') }}">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/apple-icon-180x180.png') }}">
    <link rel="icon" type="image/png" sizes="192x192"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/android-icon-192x192.png') }}">
    <link rel="icon" type="image/png" sizes="32x32"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="manifest"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage"
        content="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/favicons/ms-icon-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    <!--==============================
 Google Fonts
 ============================== -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,100;9..40,200;9..40,300;9..40,400;9..40,500;9..40,600;9..40,700;9..40,800&family=Outfit:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!--==============================
 All CSS File
 ============================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/bootstrap.min.css') }}">
    <!-- Fontawesome Icon -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/fontawesome.min.css') }}">
    <!-- Magnific Popup -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/magnific-popup.min.css') }}">
    <!-- Swiper Js -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/swiper-bundle.min.css') }}">
    <!-- datetimepicker -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/jquery.datetimepicker.min.css') }}">
    <!-- Theme Custom CSS -->
    <link rel="stylesheet"
        href="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/css/style.css') }}">

</head>

<body>

    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->


    <!--********************************
   Code Start From Here
 ******************************** -->

    <!--==============================
     Preloader
  ==============================-->
    {{-- <div class="preloader ">
        <button class="th-btn preloaderCls">Cancel Preloader </button>
        <div class="preloader-inner">
            <div class="loader"></div>
        </div>
    </div> --}}
    <!--==============================
Product Lightbox
==============================-->



    <div id="QuickView" class="white-popup mfp-hide">
        <div class="container bg-white rounded-10">
            <div class="row gx-60">
                <div class="col-lg-6">
                    <div class="product-big-img">
                        <div class="img"><img src="" class="productImage" alt="Product Image"></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-about">
                        <h2 class="product-title productTitle"></h2>
                        <p class="text productDescription"
                            style="height: 250px;overflow-x: hidden;overflow-y: scroll;"></p>
                        <div class="mt-2 link-inherit">
                            <p>
                                <strong class="text-title me-3">Availability:</strong>
                                <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In
                                    Stock</span>
                            </p>
                        </div>
                        <div class="actions">
                            <button class="th-btn style4 AddWishlist wishlist SetWishlist ">Add to Wishlist</button>
                            {{-- <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a> --}}
                        </div>
                        <div class="product_meta">
                            <span class="posted_in">Category: <a href="shop.html" class="productCategory"></a></span>
                        </div>
                    </div>
                </div>
            </div>
            <button title="Close (Esc)" type="button" class="mfp-close">×</button>
        </div>
    </div><!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-cart ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget woocommerce widget_shopping_cart">
                <h3 class="widget_title">Shopping cart</h3>
                <div class="widget_shopping_cart_content">
                    <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_1.jpg"
                                    alt="Cart Image">Surgery Hands Gloves</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>940.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_2.jpg"
                                    alt="Cart Image">D-Ribose Drug Medicine</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>899.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_3.jpg"
                                    alt="Cart Image">CAD Dentistry Prosthesis</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>756.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_4.jpg"
                                    alt="Cart Image">Surgery Safety Mask</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>723.00</span>
                            </span>
                        </li>
                        <li class="woocommerce-mini-cart-item mini_cart_item">
                            <a href="#" class="remove remove_from_cart_button"><i class="far fa-times"></i></a>
                            <a href="#"><img src="assets/img/product/product_thumb_1_5.jpg"
                                    alt="Cart Image">Infrared Thermometers</a>
                            <span class="quantity">1 ×
                                <span class="woocommerce-Price-amount amount">
                                    <span class="woocommerce-Price-currencySymbol">$</span>1080.00</span>
                            </span>
                        </li>
                    </ul>
                    <p class="woocommerce-mini-cart__total total">
                        <strong>Subtotal:</strong>
                        <span class="woocommerce-Price-amount amount">
                            <span class="woocommerce-Price-currencySymbol">$</span>4398.00</span>
                    </p>
                    <p class="woocommerce-mini-cart__buttons buttons">
                        <a href="cart.html" class="th-btn wc-forward">View cart</a>
                        <a href="checkout.html" class="th-btn checkout wc-forward">Checkout</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
    Sidemenu
============================== -->
    <div class="sidemenu-wrapper sidemenu-info ">
        <div class="sidemenu-content">
            <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
            <div class="widget  ">
                <div class="th-widget-about">
                    <div class="about-logo">
                        <a href="{{ route('user.index') }}"><img src="{{ asset('frontend/assets/img/logo.svg') }}"
                                alt="Mediax"></a>
                    </div>
                    <p class="about-text">Subscribe to out newsletter today to receive latest news administrate cost
                        effective for tactical data.</p>
                    <p class="footer-info">
                        <i class="fal fa-location-dot"></i>
                        2478 Street City Ohio 90255
                    </p>
                    <p class="footer-info">
                        <i class="fal fa-envelope"></i>
                        <a href="mailto:info@mediax.com" class="info-box_link">info@mediax.com</a>
                    </p>
                    <p class="footer-info">
                        <i class="fal fa-phone"></i>
                        <a href="tel:+40276328246" class="info-box_link">+(402) 763 282 46</a>
                    </p>
                    <div class="th-social">
                        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
            <div class="widget  ">
                <h3 class="widget_title">Let’s Stay In Touch</h3>
                <div class="newsletter-widget">
                    <p class="footer-text">Subscribe for newsletter</p>
                    <form action="#" class="newsletter-form">
                        <div class="form-group">
                            <input class="form-control" type="email" placeholder="Enter Email" required="">
                        </div>
                        <button type="submit" class="simple-icon"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                    <div class="form-group">
                        <input type="checkbox" id="checkboxagree" name="checkboxagree">
                        <label for="checkboxagree">I agree with the terms & conditions</label>
                    </div>
                    <div class="btn-group">
                        <a href="https://play.google.com/" class="img-btn">
                            <img src="assets/img/normal/apple_store.png" alt="icon">
                        </a>
                        <a href="https://play.google.com/" class="img-btn">
                            <img src="assets/img/normal/play_store.png" alt="icon">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="popup-search-box d-none d-lg-block">
        <button class="searchClose"><i class="fal fa-times"></i></button>
        <form action="#">
            <input type="text" placeholder="What are you looking for?">
            <button type="submit"><i class="fal fa-search"></i></button>
        </form>
    </div> --}}
    <!--==============================
    Mobile Menu
  ============================== -->
    <div class="th-menu-wrapper">
        <div class="th-menu-area text-center">
            <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ route('user.index') }}"><img src="{{ asset('frontend/assets/img/logo.svg') }}"
                        alt="Mediax"></a>
            </div>
            <div class="th-mobile-menu">
                <ul>
                    <li><a href="{{ route('user.index') }}">Home</a></li>
                    <li><a href="{{ route('user.about') }}">About Us</a></li>
                    <li><a href="{{ route('user.shop') }}">Shop</a></li>
                    <li><a href="{{ route('user.contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </div><!--==============================
 Header Area
==============================-->
    <header class="th-header header-layout2">
        <div class="menu-top">
            <div class="container">
                <div class="row justify-content-center justify-content-lg-between align-items-center gy-2">
                    <div class="col-auto d-none d-lg-block">
                        <div class="header-logo">
                            <a href="{{ route('user.index') }}"><img
                                    src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/logo.svg') }}"
                                    style="width: 202px;height:62px" alt="Mediax"></a>
                        </div>
                    </div>
                    {{-- <div class="col-auto">
                        <form class="search-form">
                            <input type="text" placeholder="Search Here...">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div> --}}
                    <div class="col-auto d-none d-lg-block">
                        <div class="info-card-wrap">
                            <div class="info-card">
                                <div class="box-icon">
                                    <i class="fal fa-headset"></i>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Contact Us</p>
                                    <h4 class="box-title"><a href="tel:+1636543569">+163-654-3569</a></h4>
                                </div>
                            </div>
                            <div class="info-card">
                                <div class="box-icon">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="box-content">
                                    <p class="box-text">Monday - Friday</p>
                                    <h4 class="box-title">27/7 Hours Open</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="sticky-wrapper">
            <div class="menu-area">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto d-none d-lg-inline-block">
                            <nav class="main-menu menu-style1">
                                <ul>
                                    <li><a href="{{ route('user.index') }}">Home</a></li>
                                    <li><a href="{{ route('user.about') }}">About Us</a></li>
                                    <li><a href="{{ route('user.shop') }}">Shop</a></li>


                                    <li>
                                        <a href="{{ route('user.contact') }}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-auto d-inline-block d-lg-none">
                            <div class="header-logo">
                                <a href="{{ route('user.index') }}"><img
                                        src="{{ asset('frontend/assets/img/logo-white.svg') }}" alt="Mediax"></a>
                            </div>
                        </div>
                        <div class="col-auto ms-auto">
                            <div class="header-button">
                                <div class="d-none d-lg-inline-block">
                                    <a href="#" role="button" id="dropdownMenuLink1">
                                        {{-- <img src="{{ config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/icon/english.png') }}" alt="icon"> --}}
                                        {{-- English --}}
                                        <div id="google_translate_element"></div>
                                    </a>
                                </div>
                                <a href="{{route('wishlist.index')}}" class="icon-btn ">
                                    {{-- <span class="badge">2023</span> --}}
                                    <i class="fal fa-heart"></i>
                                </a>
                                <button type="button" class="icon-btn sideMenuInfo d-none d-lg-inline-block">
                                    <i class="fal fa-bars"></i>
                                </button>
                                <button type="button" class="th-menu-toggle d-block d-lg-none">
                                    <i class="far fa-bars"></i>
                                </button>
                            </div>
                        </div>

                        <!-- Google Translate Element -->


                        <!-- Google Translate API Script -->
                        <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                        </script>
                        <script type="text/javascript">
                            function googleTranslateElementInit() {
                                new google.translate.TranslateElement({
                                    pageLanguage: 'en',
                                    includedLanguages: 'en,hi,gu,ur,ar',
                                    layout: google.translate.TranslateElement.InlineLayout.SIMPLE
                                }, 'google_translate_element');
                            }

                            // Function to trigger the language selection
                            function changeLanguage(lang) {
                                var frame = document.querySelector('.goog-te-menu-frame:first-of-type');
                                if (!frame) {
                                    alert('Translate menu not found. Please try again.');
                                    return false;
                                }
                                var translateFrame = frame.contentWindow.document;
                                $(translateFrame).find('.goog-te-menu2-item span.text:contains("' + lang + '")').click();
                            }

                            // Language selection on dropdown
                            $(document).ready(function() {
                                $('.lang-select').on('click', function(e) {
                                    e.preventDefault();
                                    var lang = $(this).data('lang');
                                    changeLanguage(lang);
                                });
                            });
                        </script>


                    </div>
                </div>
            </div>
        </div>
    </header>

    {{ $slot }}
    <footer class="footer-wrapper footer-layout2"
        data-bg-src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/bg/footer_bg_2.jpg') }}">
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Contact Us</h3>
                            <div class="th-widget-contact">
                                <p class="footer-text">Keep up to date with our latest news & special offer.</p>
                                <p class="footer-info">
                                    <i class="fal fa-location-dot"></i>
                                    2478 Street City Ohio 90255
                                </p>
                                <p class="footer-info">
                                    <i class="fal fa-envelope"></i>
                                    <a href="mailto:info@mediax.com" class="info-box_link">info@mediax.com</a>
                                </p>
                                <p class="footer-info">
                                    <i class="fal fa-phone"></i>
                                    <a href="tel:+40276328246" class="info-box_link">+(402) 763 282 46</a>
                                </p>
                                <div class="th-social">
                                    <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fab fa-twitter"></i></a>
                                    <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="https://www.whatsapp.com/"><i class="fab fa-whatsapp"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Quick Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="about.html">Terms of Use</a></li>
                                    <li><a href="service.html">Our Services</a></li>
                                    <li><a href="faq.html">Help & FAQs</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="about.html">Privacy policy</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget widget_nav_menu footer-widget">
                            <h3 class="widget_title">Popular service</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="service-details.html">Cardiology Care</a></li>
                                    <li><a href="service-details.html">Urgent Care</a></li>
                                    <li><a href="service-details.html">Orthopedic Care</a></li>
                                    <li><a href="service-details.html">Diagnosis department</a></li>
                                    <li><a href="service-details.html">Gastroenterology</a></li>
                                    <li><a href="service-details.html">Therapy department</a></li>
                                    <li><a href="service-details.html">Dental service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Let’s Stay In Touch</h3>
                            <div class="newsletter-widget">
                                <p class="footer-text">Subscribe for newsletter</p>
                                <form action="#" class="newsletter-form">
                                    <div class="form-group">
                                        <input class="form-control" type="email" placeholder="Enter Email"
                                            required="">
                                    </div>
                                    <button type="submit" class="simple-icon"><i
                                            class="fa-solid fa-paper-plane"></i></button>
                                </form>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I agree with the terms & conditions</label>
                                </div>
                                {{-- <div class="btn-group">
                                    <a href="https://play.google.com/" class="img-btn">
                                        <img src="{{config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/normal/apple_store.png') }}"
                                            alt="icon">
                                    </a>
                                    <a href="https://play.google.com/" class="img-btn">
                                        <img src="{{config('constant.DIR_PATH.PUBLIC_PATH').asset('frontend/assets/img/normal/play_store.png') }}"
                                            alt="icon">
                                    </a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="copyright-wrap">
            <div class="container">
                <div class="row gy-2 align-items-center">
                    <div class="col-md-7">
                        <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 <a
                                href="{{ route('user.index') }}">Mediax</a>. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-5 text-center text-md-end">
                        <div class="payment-img">
                            <img src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/img/normal/payment_methods.png') }}"
                                alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </footer>

    {{-- <div class="scroll-top">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
            </path>
        </svg>
    </div> --}}


    <!-- Jquery -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/vendor/jquery-3.7.1.min.js') }}">
    </script>
    <!-- Swiper Js -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/swiper-bundle.min.js') }}">
    </script>
    <!-- Bootstrap -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <!-- Magnific Popup -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/jquery.magnific-popup.min.js') }}">
    </script>
    <!-- Counter Up -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/jquery.counterup.min.js') }}">
    </script>
    <!-- datetimepicker -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/jquery.datetimepicker.min.js') }}">
    </script>
    <!-- Range Slider -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <!-- Isotope Filter -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}">
    </script>
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>

    <!-- Main Js File -->
    <script src="{{ config('constant.DIR_PATH.PUBLIC_PATH') . asset('frontend/assets/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.14.1/dist/sweetalert2.min.css" rel="stylesheet">
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6718cba12480f5b4f5922b57/1iasdmscq';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <script>
        $(document).ready(function() {
            $('.QuickView').on('click', function(e) {
                e.preventDefault();
                var productslug = $(this).data('slug');
                $.ajax({
                    url: '{{ route('quick.view') }}',
                    method: 'GET',
                    data: {
                        slug: productslug,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        if (response.status === 'success' && response.product) {
                            // Update the modal with product data
                            $(".SetWishlist").attr("data-slug", response.product.slug);

                            $('.productImage').attr("src", response.product.main_image_url ||
                                'default_image.jpg'); // Default image if none
                            $(".productTitle").text(response.product.title || 'No Title');
                            $(".productDescription").html(response.product.description ||
                                'No Description');
                            $(".productCategory").html(response.product.category ||
                                'No Category');
                            // Show the modal
                            $('#QuickViewModal').modal('show');
                        } else {
                            Swal.fire("Error!", "Product details could not be retrieved.",
                                "error");
                        }
                    },
                    error: function(xhr, status, error) {
                        Swal.fire("Error!", error || "An error occurred.", "error");
                    }
                });
            });


            $('.AddWishlist').on('click', function() {
                var productSlug = $(this).data('slug');
                var addButton = $(this); // Save reference to the clicked button

                // SweetAlert2 confirmation
                Swal.fire({
                    title: 'Add to wishlist?',
                    text: "Do you want to add this product to your wishlist?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, add it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // If confirmed, proceed with the AJAX request
                        $.ajax({
                            url: '{{ route('wishlist.add') }}',
                            method: 'POST',
                            data: {
                                slug: productSlug,
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                // Display success message
                                Swal.fire(
                                    'Added!',
                                    response.message,
                                    'success'
                                );
                            }.bind(this),
                            error: function(xhr) {
                                // Extract error message from the response and display it in SweetAlert
                                let errorMessage =
                                    'Could not add to wishlist. Please try again.';

                                if (xhr.responseJSON && xhr.responseJSON.error) {
                                    errorMessage = xhr.responseJSON
                                        .error; // If error message is available in JSON response
                                }

                                // Show the error message in SweetAlert2
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMessage,
                                    icon: 'error',
                                    showCancelButton: true,
                                    showConfirmButton: true,
                                    confirmButtonText: 'View Wishlist', // Custom text for the confirm button
                                    cancelButtonText: 'Cancel', // Custom text for the cancel button
                                    reverseButtons: true // Optional: swaps the position of the buttons
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        // User clicked 'View Wishlist', redirect them to the wishlist page
                                        window.location.href =
                                            '{{ route('wishlist.index') }}'; // Replace with your actual wishlist route
                                    }
                                });
                            }
                        });
                    }
                });
            });

        });


        $(document).on('click', '.remove-from-wishlist', function() {
            var wishlistId = $(this).data('id');
            var row = $(this).closest('tr'); // Select the closest <tr> element

            // SweetAlert 2 confirmation
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, remove it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, proceed with the AJAX request
                    $.ajax({
                        url: '{{ route('wishlist.remove') }}', // Define a route for removing items
                        method: 'POST',
                        data: {
                            id: wishlistId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                // Fade out and then remove the row from DOM
                                row.fadeOut(400, function() {
                                    row.remove();
                                });
                                Swal.fire(
                                    'Removed!',
                                    'The item has been removed from your wishlist.',
                                    'success'
                                );
                            }
                        },
                        error: function() {
                            Swal.fire('Error', 'Failed to remove item from wishlist.', 'error');
                        }
                    });
                }
            });
        });
    </script>
    @if (Session::has('success'))
        <script>
            Swal.fire({
                position: "center",
                icon: "success",
                title: "{{ Session::get('success') }}",
                showConfirmButton: true,
            });
        </script>
    @endif

    @if (Session::has('error'))
        <script>
            Swal.fire({
                position: "center",
                icon: "error",
                title: "{{ Session::get('error') }}",
                showConfirmButton: true,
            });
        </script>
    @endif

</body>

</html>
