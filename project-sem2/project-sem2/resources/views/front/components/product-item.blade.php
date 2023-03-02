<div class="col-lg-3 col-md-4 col-sm-6 item-fly">
    <div class="seller__product-item">

        <img class="seller__product-img img-fluid" src="front/img/products-sem2/{{ $product->productImages[0]->path ?? '' }}" alt="">
        <span class="seller__product-name">{{ $product->name }}</span>
{{--        <span class="seller__product-rating">--}}
{{--                            <i class="fa-solid fa-star"></i>--}}
{{--                            <i class="fa-solid fa-star"></i>--}}
{{--                            <i class="fa-solid fa-star"></i>--}}
{{--                            <i class="fa-solid fa-star"></i>--}}
{{--                            <i class="fa-solid fa-star"></i>--}}
{{--                        </span>--}}
        <span class="seller__product-price">${{ $product->discount }}</span>
        @if($product->discount != null)
            <span class="seller__product-tag">SALE!</span>
        @endif
        <div class="seller__product-control">
            <div class="overlay--white"></div>
            <button class="seller__product-control-btn">
                <a href="" class="a-center">
                    <i class="seller__product-control-icon fa-solid fa-heart"></i>
                </a>
            </button>

            <button class="seller__product-control-btn btn-fly">
                <a href="javascript:addCart({{ $product->id }})" class="a-center">
                    <i class="seller__product-control-icon fa-solid fa-cart-shopping"></i>
                </a>
            </button>

            <button class="seller__product-control-btn">
                <a href="shop/product/{{ $product->id }}" class="a-center">
                    <i class="seller__product-control-icon fa-solid fa-magnifying-glass"></i>
                </a>
            </button>
        </div>

    </div>
</div>
