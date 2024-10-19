<x-frontend-layout>
    <style>
.custome-crd {
    position: relative;
    overflow: hidden;
}

.custome-crd > .cus-spn, .cus-h3 {
    color: #ffffff !important; /* Default color for text */
}

/* .custome-crd:hover > h3 ,span {
     color: #000000;  
} */

.custome-crd::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.562); /* Overlay with default opacity */
    /* z-index: 1; */
    transition: background-color 0.3s ease;
}

.custome-crd:hover::before {
    background-color: rgba(0, 0, 0, 0.7); /* Darken overlay on hover */
}

.custome-crd img, .custome-crd div {
    position: relative;
    /* z-index: 2; */
}
.custome-crd .th-btn {
    position: absolute;
    bottom: 10px;
    right: 10px;
    /* z-index: 2;  */
}


    </style>
    <!--==============================
Hero Area
==============================-->
    <div class="th-hero-wrapper hero-1" id="hero"
        data-bg-src="{{ asset('frontend/assets/img/hero/hero_bg_1_1.jpg') }}">
        <div class="swiper th-slider" id="heroSlide1" data-slider-options='{"effect":"fade","autoHeight":true}'>
            <div class="swiper-wrapper">
                @foreach ($HeroData as $key => $item)
                    @php
                        // Assuming mini_image is stored as a JSON string in the database
                        $decodedImages = json_decode($item->mini_image, true);
                        if ($decodedImages) {
                            foreach ($decodedImages as $image) {
                                $minImages[] = $image;
                            }
                        }
                    @endphp

                    <div class="swiper-slide">
                        <div class="hero-inner">
                            <div class="container">
                                <div class="hero-style1">
                                    <span class="hero-subtitle" data-ani="slideinup"
                                        data-ani-delay="0.2s">{{ $item->pretitle }}</span>
                                    <h1 class="hero-title" data-ani="slideinup" data-ani-delay="0.3s">
                                        {{ $item->title }}</h1>
                                    <h2 class="hero-heading" data-ani="slideinup" data-ani-delay="0.4s">
                                        {{ $item->offer }}</h2>
                                    <p class="hero-text" data-ani="slideinup" data-ani-delay="0.5s">
                                        {{ $item->description }}</p>
                                    <a href="{{ $item->link }}" class="th-btn style4" data-ani="slideinup"
                                        data-ani-delay="0.6s"><i class="fas fa-shopping-cart me-2"></i>Check</a>
                                </div>
                            </div>
                            <div class="hero-img" data-ani="slideinright" data-ani-delay="0.5s">
                                <img src="{{ asset(config('constant.IMG_DIR.HERO_IMAGE') . '/' . $item->image) }}"
                                    alt="Image">
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <div class="hero-thumb-wrap">
            <div class="hero-thumb" data-slider-tab="#heroSlide1">
                @foreach ($minImages as $item)
                    <div class="tab-btn active">
                        <img src="{{ asset(config('constant.IMG_DIR.MINI_IMAGE') . '/' . $item) }}" alt="Image">
                    </div>
                @endforeach
                {{-- <div class="tab-btn active">
                    <img src="{{asset('frontend/assets/img/hero/hero_thumb_1_1.png')}}" alt="Image">
                </div> --}}

            </div>
        </div>
    </div>
    <!--======== / Hero Section ========-->
    <!--==============================
Feature Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="feature-list-wrap">
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="{{ asset('frontend/assets/img/icon/shop_feature_1.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Return Policy</h3>
                        <p class="box-text">Money back guarantee</p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="{{ asset('frontend/assets/img/icon/shop_feature_2.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Free Shipping</h3>
                        <p class="box-text">On all orders over $50.00</p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="{{ asset('frontend/assets/img/icon/shop_feature_3.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">Store locator</h3>
                        <p class="box-text">Find your nearest store</p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
                <div class="feature-list">
                    <div class="box-icon">
                        <img src="{{ asset('frontend/assets/img/icon/shop_feature_4.svg') }}" alt="icon">
                    </div>
                    <div class="media-body">
                        <h3 class="box-title">24/7 Support</h3>
                        <p class="box-text">Contact us 24 hours a day</p>
                    </div>
                </div>
                <div class="feature-list-line"></div>
            </div>
        </div>
    </section>

    <section class="space-top">
        <div class="container">
            <div class="row justify-content-md-between justify-content-center align-items-center">
                <div class="col-md-auto">
                    <h3 class="sec-title text-center">Shop by Category</h3>
                </div>
                <div class="col-md-auto mt-n3 mt-md-0">
                    <div class="sec-btn">
                        <div class="icon-box">
                            <button data-slider-prev="#catSlide1" class="slider-arrow icon-sm default"><i
                                    class="far fa-arrow-left"></i></button>
                            <button data-slider-next="#catSlide1" class="slider-arrow icon-sm default"><i
                                    class="far fa-arrow-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper th-slider" id="catSlide1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($CategoryData as $item)
                        {{-- <div class=""> --}}
                               <div class="col-xl-4 col-md-6 swiper-slide ">
                <div class="offer-card mega-hover custome-crd" 
     data-bg-src="{{asset(config('constant.IMG_DIR.CATEGORY_IMAGE').'/'.$item->cat_image)}}" 
     style="height: 250px;">
                        <span class="h6 box-subtitle cus-spn">GET UP TO 26%</span>
                        <h3 class="box-title cus-h3">{{$item->cat_name}}</h3>
                        {{-- <p class="price">$80.00 - <del>$120.00</del></p> --}}
                        <a href="shop-details.htmld" class="th-btn btn-sm style2">Shop Now</a>
                    </div>
                </div>
                        {{-- </div> --}}
                    @endforeach


                </div>
            </div>
            {{-- <div class="swiper th-slider" id="catSlide1" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"400":{"slidesPerView":"2"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"4"}}}'>
                <div class="swiper-wrapper">
                    @foreach ($CategoryData as $item)
                        
                    <div class="swiper-slide">
                        <div class="category-card">
                            <div class="box-icon">
                                <img src="{{asset(config('constant.IMG_DIR.CATEGORY_IMAGE').'/'.$item->cat_image)}}" alt="Image">
                            </div>
                            <h3 class="box-title"><a href="{{route('user.shop')}}">{{$item->cat_name}}</a></h3>
                        </div>
                    </div>
                    @endforeach
                   

                </div>
            </div> --}}
        </div>
    </section>
    <!--==============================
Product Area
==============================-->

    <section class="space" id="shop-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                  <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h3 class="sec-title has-line">Our Latest Products</h3>
                        </div>
                        <div class="col-md-auto mt-n3 mt-md-0">
                            <div class="sec-btn">
                                <a href="shop.html" class="th-btn style-smoke">VIEW ALL PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                <div class="col-12">
                    <div class="filter-menu filter-menu-active">
                        <button data-filter="*" class="th-btn active" type="button">All Products</button>
                        @foreach ($CategoryData as $Categoryitem)
                            <button data-filter=".{{ $Categoryitem->slug }}" class="th-btn"
                                type="button">{{ $Categoryitem->cat_name }}</button>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row gy-40 filter-active">
                @foreach ($ProductsData as $item)
                    <div class="col-xl-3 col-lg-4 col-sm-6 filter-item {{ $item->category->slug }}">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="{{ asset(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $item->main_image) }}"
                                    alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content QuickView"
                                        data-slug="{{ $item->slug }}"><i class="far fa-eye"></i></a>
                                    <button class="icon-btn AddWishlist wishlist SetWishlist active"
                                        data-slug="{{ $item->slug }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="{{ route('user.shopDetail', ['slug' => $item->slug]) }}"
                                    class="product-category"> {{ $item->category->cat_name }}</a>
                                <h3 class="product-title"><a
                                        href="{{ route('user.shopDetail', ['slug' => $item->slug]) }}">
                                        {{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>

    <!--==============================
Cta Area
==============================-->
    <section class="overflow-hidden ">
        <div class="container-fluid px-xl-0 z-index-common">
            <div class="row gy-30">
                <div class="col-xl-6">
                    <div class="offer-block mega-hover"
                        data-bg-src="{{ asset('frontend/assets/img/bg/cta_bg_4_1.jpg') }}">
                        <span class="h6 box-subtitle text-white">Get Up to <span class="text-theme">50%</span>
                            OFF</span>
                        <h2 class="sec-title text-white">Blood Pressure Medicine</h2>
                        <p class="box-text text-white">Free Shipping on Order Over $49</p>
                        <a href="shop-details.html" class="th-btn">Shop Now</a>
                        <ul class="counter-list countdown-style1" data-offer-date="02/01/2025">
                            <li>
                                <div>
                                    <div class="day count-number">00</div>
                                    <span class="count-name">Days</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="hour count-number">00</div>
                                    <span class="count-name">Hours</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="minute count-number">00</div>
                                    <span class="count-name">Minutes</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <div class="seconds count-number">00</div>
                                    <span class="count-name">Seconds</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="offer-block2 mega-hover"
                        data-bg-src="{{ asset('frontend/assets/img/bg/cta_bg_4_2.jpg') }}">
                        <span class="h6 box-subtitle">Get Up to <span class="text-theme2">50%</span> OFF</span>
                        <h3 class="sec-title">On All Covid-19 Vaccine</h3>
                        <p class="box-text text-title">Free Shipping on Order Over $49</p>
                        <a href="shop-details.html" class="th-btn style4">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Product Area
==============================-->
    <section class="space">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="row justify-content-md-between justify-content-center align-items-center">
                        <div class="col-md">
                            <h3 class="sec-title has-line">Our Top Medicine</h3>
                        </div>
                        <div class="col-md-auto mt-n3 mt-md-0">
                            <div class="sec-btn">
                                <a href="shop.html" class="th-btn style-smoke">VIEW ALL PRODUCTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="row gy-40">

                        {{-- <div class="col-lg-4 col-sm-6">
                            <div class="th-product product-grid">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_1_1.jpg') }}"
                                        alt="Product Image">
                                    <span class="product-tag">Sale!</span>
                                    <div class="actions">
                                        <a href="#QuickView" class="icon-btn popup-content"><i
                                                class="far fa-eye"></i></a>
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                        <a href="wishlist.html" class="icon-btn"><i class="far fa-heart"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Accessories</a>
                                    <h3 class="product-title"><a href="shop-details.html">Surgery Hands Gloves</a>
                                    </h3>
                                    <span class="price">$20.00 - <del>$30.00</del></span>
                                </div>
                            </div>
                        </div> --}}
                @foreach ($TopProduct as $item)
                    <div class=" col-lg-4 col-sm-6 ">
                        <div class="th-product product-grid">
                            <div class="product-img">
                                <img src="{{ asset(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $item->main_image) }}"
                                    alt="Product Image">
                                <div class="actions">
                                    <a href="#QuickView" class="icon-btn popup-content QuickView"
                                        data-slug="{{ $item->slug }}"><i class="far fa-eye"></i></a>
                                    <button class="icon-btn AddWishlist wishlist SetWishlist active"
                                        data-slug="{{ $item->slug }}"><i class="far fa-heart"></i></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <a href="{{ route('user.shopDetail', ['slug' => $item->slug]) }}"
                                    class="product-category"> {{ $item->category->cat_name }}</a>
                                <h3 class="product-title"><a
                                        href="{{ route('user.shopDetail', ['slug' => $item->slug]) }}">
                                        {{ $item->title }}</a></h3>
                            </div>
                        </div>
                    </div>
                @endforeach

                        

                    </div>
                </div>
                <div class="col-xl-3 mt-40 mt-xl-0">
                    <div class="offer-grid mega-hover text-center text-xl-start"
                        data-bg-src="{{asset('frontend/assets/img/bg/cta_bg_2_1.jpg')}}">
                        <span class="h6 box-subtitle text-white">EXRTA 9% SAVING ON ORDER</span>
                        <p class="price text-white">$80.00 - <del>$120.00</del></p>
                        <h3 class="box-title text-white">For Weight Gain</h3>
                        <a href="shop-details.html" class="th-btn btn-sm style4">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Cta Area
==============================-->
    <section class="">
        <div class="container z-index-common">
            <div class="row gy-30">
                <div class="col-lg-6">
                    <div class="offer-box mega-hover"
                        data-bg-src="{{ asset('frontend/assets/img/bg/cta_bg_3_1.jpg') }}">
                        <h3 class="box-title">Week End Sale<span class="text-theme2">!</span></h3>
                        <span class="h6 box-subtitle">Buy Your Best Healthcare Equipment & Medicines. <span
                                class="text-theme2">Hurry Up!</span></span>
                        <a href="shop-details.html" class="th-btn btn-sm">Shop Now</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="offer-box mega-hover"
                        data-bg-src="{{ asset('frontend/assets/img/bg/cta_bg_3_2.jpg') }}">
                        <h3 class="box-title">Special Offer Now<span class="text-theme">!</span></h3>
                        <span class="h6 box-subtitle">Buy Your Best Healthcare Equipment & Medicines. <span
                                class="text-theme">Hurry Up!</span></span>
                        <a href="shop-details.html" class="th-btn btn-sm style4">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Product Area
==============================-->

    <!--==============================
Testimonial Area
==============================-->
    <section class="" id="testi-sec" data-bg-src="{{ asset('frontend/assets/img/bg/testi_bg_1.jpg') }}">
        <div class="container space">
            <h2 class="sec-title text-center">What Our Customers Says?</h2>
            <div class="swiper th-slider has-shadow" id="testiSlide1"
                data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"1"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"2"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('frontend/assets/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg') }}"
                                        alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Pelican Steve</h3>
                                    <span class="box-desig">Neurologist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('frontend/assets/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi_1_2.jpg') }}"
                                        alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Alexa Milton</h3>
                                    <span class="box-desig">Physiotherapist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('frontend/assets/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi_1_1.jpg') }}"
                                        alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Pelican Steve</h3>
                                    <span class="box-desig">Neurologist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-card">
                            <div class="box-review">
                                <i class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i><i class="fa-sharp fa-solid fa-star"></i><i
                                    class="fa-sharp fa-solid fa-star"></i>
                            </div>
                            <div class="box-quote">
                                <img src="{{ asset('frontend/assets/img/icon/quote_1.svg') }}" alt="Icon">
                            </div>
                            <p class="box-text">“Objectively deploy open-source web-readiness impactful bandwidth.
                                Compellingly coordinate business deliverables rather equity invested technologies.
                                Phosfluorescently reinvent maintainable.”</p>
                            <div class="box-profile">
                                <div class="box-img">
                                    <img src="{{ asset('frontend/assets/img/testimonial/testi_1_2.jpg') }}"
                                        alt="Avater">
                                </div>
                                <div class="box-content">
                                    <h3 class="box-title">Alexa Milton</h3>
                                    <span class="box-desig">Physiotherapist</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
Brand Area
==============================-->
        <div class="brand-sec1">
            <div class="container th-container">
                <div class="swiper th-slider" id="brandSlider1"
                    data-slider-options='{"breakpoints":{"0":{"slidesPerView":2},"420":{"slidesPerView":"3"},"768":{"slidesPerView":"4"},"992":{"slidesPerView":"5"},"1200":{"slidesPerView":"6"},"1400":{"slidesPerView":"8"}}}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_7.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_8.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_1.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_2.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_3.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_4.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_5.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_6.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_7.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="brand-box">
                                <img src="{{ asset('frontend/assets/img/brand/brand_1_8.svg') }}" alt="Brand Logo">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--==============================
Product Area
==============================-->
    <section class="space-top">
        <div class="container">
            <div class="row gy-40">
                <div class="col-xl-6">
                    <h3 class="sec-title has-line mb-35">Top Rated Products</h3>
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_1.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Medicine</a>
                                    <h3 class="product-title"><a href="shop-details.html">Ciprofloxacin Drug</a></h3>
                                    <span class="price">$177.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_2.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Accessories</a>
                                    <h3 class="product-title"><a href="shop-details.html">Surgery Face Mask</a></h3>
                                    <span class="price">$39.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_3.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Equipment</a>
                                    <h3 class="product-title"><a href="shop-details.html">Dentist Chair</a></h3>
                                    <span class="price">$96.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_4.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Medicine</a>
                                    <h3 class="product-title"><a href="shop-details.html">Paracetamol Drug</a></h3>
                                    <span class="price">$08.85<del>$06.99</del></span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-xl-6">
                    <h3 class="sec-title has-line mb-35">Best Selling Products</h3>
                    <div class="row gy-4">

                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_5.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Equipment</a>
                                    <h3 class="product-title"><a href="shop-details.html">Presser Meter</a></h3>
                                    <span class="price">$32.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_6.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Accessories</a>
                                    <h3 class="product-title"><a href="shop-details.html">Surgery Hand Glove</a></h3>
                                    <span class="price">$30.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_7.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Equipment</a>
                                    <h3 class="product-title"><a href="shop-details.html">N95-Face Mask</a></h3>
                                    <span class="price">$232.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="th-product list-view">
                                <div class="product-img">
                                    <img src="{{ asset('frontend/assets/img/product/product_list_8.jpg') }}"
                                        alt="Product Image">
                                    <div class="actions">
                                        <a href="cart.html" class="icon-btn"><i class="far fa-cart-plus"></i></a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a href="shop-details.html" class="product-category">Medicine</a>
                                    <h3 class="product-title"><a href="shop-details.html">Infared Thermometer</a></h3>
                                    <span class="price">$30.85</span>
                                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5">
                                        <span>Rated <strong class="rating">5.00</strong> out of 5 based on <span
                                                class="rating">1</span> customer rating</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
Blog Area
==============================-->
    <section class="space" id="blog-sec">
        <div class="container">
            <div class="row justify-content-lg-between justify-content-center align-items-center">
                <div class="col-lg">
                    <h2 class="sec-title text-center text-lg-start">Our Latest News & Blogs</h2>
                </div>
                <div class="col-lg-auto d-none d-lg-block">
                    <div class="sec-btn">
                        <a href="blog.html" class="th-btn style4">View All Post</a>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-xl-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/assets/img/blog/blog_2_1.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                <a href="blog.html"><i class="fal fa-calendar"></i>15 March, 2024</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">How Business Is Taking Over & What to Do
                                    About It</a></h3>
                            <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/assets/img/blog/blog_2_2.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                <a href="blog.html"><i class="fal fa-calendar"></i>16 March, 2024</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Health vs. Wealth Navigate Business in
                                    Medicine</a></h3>
                            <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img src="{{ asset('frontend/assets/img/blog/blog_2_3.jpg') }}" alt="blog image">
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a href="blog.html"><i class="fal fa-user"></i>By Mediax</a>
                                <a href="blog.html"><i class="fal fa-calendar"></i>17 March, 2024</a>
                            </div>
                            <h3 class="box-title"><a href="blog-details.html">Preserving Care Strategy Amidst Food
                                    Changes</a></h3>
                            <a href="blog-details.html" class="th-btn btn-sm">Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--==============================
 Footer Area
==============================-->
</x-frontend-layout>
