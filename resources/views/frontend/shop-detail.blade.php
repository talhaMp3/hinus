   <x-frontend-layout>
       <!--==============================
    Breadcumb
============================== -->
       <div class="breadcumb-wrapper " data-bg-src="{{ asset('frontend/assets/img/bg/breadcumb-bg.jpg') }}">
           <div class="container">
               <div class="breadcumb-content">
                   <h1 class="breadcumb-title">{{ $ProductData->title }}</h1>
                   <ul class="breadcumb-menu">
                       <li><a href="{{ route('user.index') }}">Home</a></li>
                       <li>{{ $ProductData->title }}</li>
                   </ul>
               </div>
           </div>
       </div><!--==============================
    Product Details
    ==============================-->
       <section class="product-details space-top space-extra-bottom">
           <div class="container">
               <div class="row gx-60">
                   <center>
                       <div class="col-lg-6">
                           <div class="product-big-img">
                               <div class="img p-5">
                                   <img src="{{ asset(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $ProductData->main_image) }}"
                                       alt="Product Image">
                               </div>
                               <div class="row p-4">
                                   @if (!empty($ProductData->other_images))

                                       @foreach (json_decode($ProductData->other_images, true) as $item)
                                           <div class="col-xl-3 col-lg-4 col-sm-6 ">
                                               <div class="th-product product-grid">
                                                   <div class="product-img">
                                                       <img src="{{ asset(config('constant.IMG_DIR.OTHER_IMAGE') . '/' . $item) }}"
                                                           alt="Product Image">
                                                   </div>
                                               </div>
                                           </div>
                                       @endforeach
                                   @endif
                               </div>
                           </div>
                       </div>
                   </center>
                   <div class="col-lg-12 align-self-center mt-5">
                       <div class="product-about">

                           <h2 class="product-title">{{ $ProductData->title }}</h2>
                           <div class="mt-2 link-inherit">
                               <p>
                                   <strong class="text-title me-3">Availability:</strong>
                                   <span class="stock in-stock"><i class="far fa-check-square me-2 ms-1"></i>In
                                       Stock</span>
                               </p>
                           </div>

                           <div class="product_meta">
                               <span class="posted_in">Category: <a
                                       href="#">{{ $ProductData->category->cat_name }}</a></span>
                           </div>
                       </div>
                   </div>
               </div>
               <ul class="nav product-tab-style1" id="productTab" role="tablist">
                   <li class="nav-item" role="presentation">
                       <a class="nav-link th-btn active" id="description-tab" data-bs-toggle="tab" href="#description"
                           role="tab" aria-controls="description" aria-selected="true">Product Description</a>
                   </li>
               </ul>
               <div class="tab-content" id="productTabContent">
                   <div class="tab-pane fade show active" id="description" role="tabpanel"
                       aria-labelledby="description-tab">
                       {!! $ProductData->description !!}
                   </div>
               </div>
           </div>
       </section>
   </x-frontend-layout>
