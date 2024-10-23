<x-frontend-layout>
   <div class="breadcumb-wrapper " data-bg-src="assets/img/bg/breadcumb-bg.jpg">
        <div class="container">
            <div class="breadcumb-content">
                <h1 class="breadcumb-title">Wishlist</h1>
                <ul class="breadcumb-menu">
                    <li><a href="home-medical-clinic.html">Home</a></li>
                    <li>Wishlist</li>
                </ul>
            </div>
        </div>
    </div><!--==============================
Checkout Area
==============================-->
    <div class="space">
        <div class="container">
            <div class="tinv-wishlist woocommerce tinv-wishlist-clear">
                <div class="tinv-header">
                    <h2 class="mb-30">Wishlist</h2>
                </div>
                    <table class="tinvwl-table-manage-list">
                        <thead>
                            <tr>
                                <th class="product-cb">#</th>
                                <th class="product-thumbnail"></th>
                                <th class="product-thumbnail">&nbsp;</th>
                                <th class="product-name"><span class="tinvwl-full">Product Name</span><span class="tinvwl-mobile">Product</span></th>
                                <th class="product-date">Date Added</th>
                                <th class="product-stock">Stock Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlistItems as $item)
                                
                            <tr class="wishlist_item">
                                <td class="product-cb">
                                   <p>{{$loop->iteration}}</p>
                                </td>
                                <td class="">
                                    <button type="submit" name="tinvwl-remove" title="Remove" class="btn btn-danger remove-from-wishlist" data-id="{{encrypt($item->id)}}"><i class="fal fa-times"></i>
                                    </button>
                                </td>
                                <td class="product-thumbnail">
                                    <a href="{{route('user.shopDetail',['slug'=>$item->product->slug])}}"><img src="{{asset(config('constant.IMG_DIR.MAIN_IMAGE').'/'.$item->product->main_image)}}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="image"></a>
                                </td>
                                <td class="product-name">
                                    <a href="{{route('user.shopDetail',['slug'=>$item->product->slug])}}">{{$item->product->title}}</a>
                                </td>
                                <td class="product-date">
                                <time class="entry-date" datetime="{{ $item->created_at }}">{{ $item->created_at->format('d M Y') }}</time>
                                </td>
                                <td class="product-stock">
                                    <p class="stock in-stock">
                                        <span><i class="fas fa-check"></i></span><span class="tinvwl-txt">In stock</span>
                                    </p>
                                </td>
                            </tr>
                            @endforeach
                  
                        </tbody>
                    </table>
                <div class="social-buttons">
                    <span>Share on</span>
                    <ul>
                        <li><a href="https://www.facebook.com/sharer/sharer.php?u=permalink" class="social social-facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com/share?url=permalink" class="social social-twitter " title="Twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="http://pinterest.com/pin/create/button/?url=permalink" class="social social-pinterest " title="Pinterest"><i class="fab fa-pinterest-p"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?text=permalink" class="social social-whatsapp " title="WhatsApp"><i class="fab fa-whatsapp"></i></a></li>
                        <li><a href="http://vecurosoft.com/products/wordpress/foodelio/wishlist/974b61/" class="social social-clipboard " title="Clipboard"><i class="far fa-clipboard"></i></a></li>
                        <li><a href="mailto:?body=permalink" class="social social-email " title="Email"><i class="far fa-envelope"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</x-frontend-layout>