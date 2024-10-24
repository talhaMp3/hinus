  <x-frontend-layout>
  <div class="breadcumb-wrapper " data-bg-src="{{asset('frontend/assets/img/bg/breadcumb-bg.jpg')}}">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Shop</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-medical-clinic.html">Home</a></li>
                    <li>Shop</li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
Product Area
==============================-->
    <section class="space-top space-extra-bottom">
        <div class="container">
            <div class="row gy-40">
                                @foreach ($ProductsData as $item)

                <div class="col-xl-3 col-lg-4 col-sm-6 ">
                    <div class="th-product product-grid">
                        <div class="product-img">
                            <img src="{{asset(config('constant.IMG_DIR.MAIN_IMAGE').'/'.$item->main_image)}}" alt="Product Image">
                                 <div class="actions">
                                            <a href="#QuickView" class="icon-btn popup-content QuickView"
                                                data-slug="{{ $item->slug }}"><i class="far fa-eye"></i></a>
                                            <button class="icon-btn AddWishlist wishlist SetWishlist active"
                                                data-slug="{{ $item->slug }}"><i class="far fa-heart"></i></a>
                                        </div>
                        </div>
                        <div class="product-content">
                            <a href="{{route('user.shopDetail',['slug'=>$item->slug])}}" class="product-category"> {{$item->category->cat_name}}</a>
                            <h3 class="product-title"><a href="{{route('user.shopDetail',['slug'=>$item->slug])}}"> {{$item->title}}</a></h3>
                        </div>
                    </div>
                </div>
                @endforeach


            </div>
           
        </div>
    </section>

</x-frontend-layout>