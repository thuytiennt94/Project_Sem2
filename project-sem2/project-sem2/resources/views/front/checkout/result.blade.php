@extends('front.layout.master')

@section('title', 'Result')

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <a href="./shop.html">Shop</a>
                        <span>Check Out</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <div class="checkout-section spad">
        <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h4 style="color: black;">
                                {{ $notification }}
                            </h4>

                            <a href="./" class="primary-btn mt-5">Continue Shopping</a>
                        </div>
                    </div>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection
