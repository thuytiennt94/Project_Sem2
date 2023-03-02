@extends('front.layout.master')

@section('title', 'Home')

@section('body')
    <!-- Hero section begin -->
    <section class="hero-section">
        <div class="hero-items owl-carousel">
            <div class="single-hero-items set-bg slider-backgr" data-setbg="front/img/slider-background.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Supplement for dog</span>
                            <h1>Fresh <br> Vitamin</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do siusmod</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>
                        <div class="col-lg-5 hide-on-mobile-tablet">
                            <img src="front/img/product-slider.png" alt="" class="product-slider">
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
            <div class="single-hero-items set-bg slider-backgr" data-setbg="front/img/slider-background-2.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <span>Supplement for dog</span>
                            <h1>Fresh <br> Vitamin</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do siusmod</p>
                            <a href="#" class="primary-btn">Shop Now</a>
                        </div>

                        <div class="col-lg-5 hide-on-mobile-tablet">
                            <img src="front/img/product-slider2.png" alt="" class="product-slider">
                        </div>
                    </div>
                    <div class="off-card">
                        <h2>Sale <span>50%</span></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <!-- Box sale -->
    <div class="container">
        <div class="sale-box row">
            <div class="box-shortcode col-lg-3">
                <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/icon1.png" alt=""
                     class="box-shortcode__img">
                <div class="box-shordcode__text">
                    <h2 class="box-shortcode__heading">Free Delivery</h2>
                    <span class="box-shortcode__description">For all oders over $100</span>
                </div>
            </div>

            <div class="box-shortcode col-lg-3">
                <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/icon2.png" alt=""
                     class="box-shortcode__img">
                <div class="box-shordcode__text">
                    <h2 class="box-shortcode__heading">30 Days Return</h2>
                    <span class="box-shortcode__description">If goods have problems</span>
                </div>
            </div>

            <div class="box-shortcode col-lg-3">
                <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/icon3.png" alt=""
                     class="box-shortcode__img">
                <div class="box-shordcode__text">
                    <h2 class="box-shortcode__heading">Secure Payment</h2>
                    <span class="box-shortcode__description">100% Sercure Payment</span>
                </div>
            </div>

            <div class="box-shortcode col-lg-3">
                <img src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/icon4.png" alt=""
                     class="box-shortcode__img">
                <div class="box-shordcode__text">
                    <h2 class="box-shortcode__heading">24/7 Support</h2>
                    <span class="box-shortcode__description">Delicated Support</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Seller section begin -->
    <div class="seller">
        <div class="container">
            <div class="row">
                <div class="seller__header col-lg-12">
                    BEST SELLERS
                </div>
            </div>
        </div>
        <div class="container" id="itemList">
            <div id="show" class="position-absolute fly-cart hide-on-mobile-tablet">
                <img class="img-fluid" src="" alt="">
            </div>
            <div class="seller__product row">
                @foreach($productMedicines as $product)
                    @include('front.components.product-item')
                @endforeach
            </div>
        </div>
    </div>
    <!-- Seller section end -->

    <!-- Banner section begin -->
    <div class="banner-section spad">
        <div class="container">
            <div class="poster row">
                <div class="col-lg-6 col-sm-12 mb-12">
                    <div class="poster-box">
                        <img class="poster-box__img"
                             src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/banner-left2.jpg"
                             alt="">
                    </div>
                </div>

                <div class="col-lg-6 col-sm-12 mb-12">
                    <div class="poster-box">
                        <img class="poster-box__img"
                             src="https://demo.harutheme.com/clarivo/wp-content/uploads/2018/03/banner-right2.jpg"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner section begin -->

    <div class="container">
        <div class="product row">
            <!-- NEW ARRIVALS -->
            <div class="product-box col-lg-4 col-sm-12">
                <div class="product-box__head">
                    <h1 class="product-box__heading">
                        NEW ARRIVALS
                    </h1>
                    <div class="product__btn-control">
                        <button class="product-box__btn">
                            <i class="product-box__icon product-box__icon-prev fa-solid fa-angle-left"></i>
                        </button>
                        <button class="product-box__btn">
                            <i class="product-box__icon product-box__icon-next fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="product-box-container">
                    <div class="product-box-main">
                        <div class="product-box__content">
                            @foreach($arrivalProducts as $product)
                                <a href="shop/product/{{ $product->id }}">
                                    <div class="product-box__content-item">
                                        <img src="front/img/products-sem2/{{ $product->productImages[0]->path }}" alt=""
                                             class="product-box__content-img">
                                        <div class="product-box__content-description">
                                            <h4 class="product-box__content-name">{{ $product->name }}</h4>
                                            <div class="product-box__content-rating">
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                                <i class="fa-solid fa-star"></i>
                                            </div>
                                            <span class="product-box__content-price">
                                            ${{ $product->discount }}
                                        </span>
                                        </div>
                                        @if($product->discount != null)
                                            <span class="product-box__content-tag">SALE!</span>
                                        @endif
                                    </div>
                                </a>
                            @endforeach
                        </div>
                        <div class="product-box__content">
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product12-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Brain Medication</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price">$13.68</span>
                                </div>
                            </div>
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product8-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Mouth Spray</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price--old">$12.00-$13.00</span>
                                </div>
                                <span class="product-box__content-tag">SALE!</span>
                            </div>
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product3-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Blood Inhaler</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price">$17.42</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- TOP SELL -->
            <div class="product-box col-lg-4 col-sm-12">
                <div class="product-box__head">
                    <h1 class="product-box__heading">
                        NEW ARRIVALS
                    </h1>
                    <div class="product__btn-control">
                        <button class="product-box__btn">
                            <i class="product-box__icon product-box__icon-prev product-box__icon-prev-2 fa-solid fa-angle-left"></i>
                        </button>
                        <button class="product-box__btn">
                            <i class="product-box__icon product-box__icon-next product-box__icon-next-2 fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="product-box-container">
                    <div class="product-box-main product-box-main-2">
                        <div class="product-box__content product-box__content-2">
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product15-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Sore Capsule</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price">$13.68</span>
                                </div>
                            </div>
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/10/product5-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Multivitamin fresh liquid</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price">$13.00</span>
                                </div>
                                <span class="product-box__content-tag">SALE!</span>
                            </div>
                            <div class="product-box__content-item">
                                <img
                                    src="https://demo.harutheme.com/clarivo/wp-content/uploads/2017/09/product14-270x270.jpg"
                                    alt="" class="product-box__content-img">
                                <div class="product-box__content-description">
                                    <h4 class="product-box__content-name">Heart Tablet</h4>
                                    <div class="product-box__content-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>
                                    <span class="product-box__content-price">$17.42</span>
                                </div>
                            </div>
                        </div>
                        <div class="product-box__content product-box__content-2">
                            @foreach($arrivalProducts as $product)
                                <div class="product-box__content-item">
                                    <img src="front/img/products-sem2/{{ $product->productImages[0]->path }}" alt=""
                                         class="product-box__content-img">
                                    <div class="product-box__content-description">
                                        <h4 class="product-box__content-name">{{ $product->name }}</h4>
                                        <div class="product-box__content-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>
                                        <span class="product-box__content-price">
                                        ${{ $product->discount }}
                                    </span>
                                    </div>
                                    @if($product->discount != null)
                                        <span class="product-box__content-tag">SALE!</span>
                                    @endif
                                </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="product-box col-lg-4 col-sm-12">
                <div class="product-box__head">
                    <h1 class="product-box__heading">
                        TOP SELL
                    </h1>
                    <div class="product__btn-control">
                        <button class="product-box__btn">
                            <i class="product-box__icon fa-solid fa-angle-left"></i>
                        </button>
                        <button class="product-box__btn">
                            <i class="product-box__icon fa-solid fa-angle-right"></i>
                        </button>
                    </div>
                </div>
                <div class="product-box__content">
                    @foreach($arrivalProducts as $product)
                        <div class="product-box__content-item">
                            <img src="front/img/products-sem2/{{ $product->productImages[0]->path }}" alt=""
                                 class="product-box__content-img">
                            <div class="product-box__content-description">
                                <h4 class="product-box__content-name">{{ $product->name }}</h4>
                                <div class="product-box__content-rating">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                                <span class="product-box__content-price">
                                        ${{ $product->discount }}
                                    </span>
                            </div>
                            @if($product->discount != null)
                                <span class="product-box__content-tag">SALE!</span>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- Latest blog section begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-lg-4 col-md-6">
                        <div class="single-latest-blog">
                            <div class="img-blog">
                                <img src="front/img/blog/{{ $blog->image }}" alt="" class="blog-img">
                            </div>
                            <div class="latest-text">
                                <div class="tag-list">
                                    <div class="tag-item">
                                        <i class="fa fa-calendar-o"></i>
                                        {{ date('M d, Y', strtotime($blog->created_at))  }}
                                    </div>
                                    <div class="tag-item">
                                        <i class="fa fa-comment-o"></i>
                                        {{ $blog->blogComments }}
                                    </div>
                                </div>
                                <a href="">
                                    <h4>{{ $blog->title }}</h4>
                                </a>
                                <p>Sed quia non numquam modi tempora indunt ut indunt ut labore et dolore magnam aliquam
                                    quaerat</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>
    <!-- Latest blog section end -->

@endsection
