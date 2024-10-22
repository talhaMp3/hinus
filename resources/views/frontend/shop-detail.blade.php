   <x-frontend-layout>

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
       </div>
       <section class="product-details space-top space-extra-bottom">
           <div class="container">
               <div class="row ">
                   <div class="col-lg-6">
                       <div class="product-big-img">
                           <div class="img p-5">
                               <img src="{{ asset(config('constant.IMG_DIR.MAIN_IMAGE') . '/' . $ProductData->hri) }}"
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

                   <div class="col-lg-6 mt-5">
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
                           <div class="product_meta">
                               <div id="description" aria-labelledby="description-tab">
                                   {!! $ProductData->description !!}
                               </div>
                           </div>
                           <div class="product_meta">
                               <div class="actions">
                                   <a href="#QuickView" class="icon-btn popup-content QuickView"
                                       data-slug="{{$ProductData->slug }}"><i class="far fa-eye"></i></a>
                                   <button class="icon-btn AddWishlist wishlist SetWishlist active"
                                       data-slug="{{$ProductData->slug }}"><i class="far fa-heart"></i></a>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
       </section>
   </x-frontend-layout>
