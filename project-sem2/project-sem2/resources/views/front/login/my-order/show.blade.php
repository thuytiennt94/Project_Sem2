@extends('front.layout.master')

@section('title', 'Order Detail')

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>Order Detail</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- My order section begin -->
    <div class="checkout-section spad">
        <div class="container">

            <form action="#" class="checkout-form">
                <div class="row">

                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="#" class="content-btn" readonly="">
                                    Order ID:
                                    <b># {{ $order->id }}</b>
                                </a>
                            </div>
                            <h4>Billing Details</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label for="fir">First Name <span>*</span></label>
                                    <input type="text" id="fir" name="first_name" value="{{ $order->first_name }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="last">Last Name <span>*</span></label>
                                    <input type="text" id="last" name="last_name" value="{{ $order->last_name }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun-name">Company Name</label>
                                    <input type="text" id="cun-name" name="company_name" value="{{ $order->company_name }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="cun">Country <span>*</span></label>
                                    <input type="text" id="cun" name="country" value="{{ $order->country }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="street">Street Address <span>*</span></label>
                                    <input type="text" id="street" class="street-first" name="street_address" value="{{ $order->street_address }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="zip">Postcode / ZIP (optional)</label>
                                    <input type="text" id="zip" name="postcode_zip" value="{{ $order->postcode_zip }}">
                                </div>
                                <div class="col-lg-12">
                                    <label for="town">Town / City <span>*</span></label>
                                    <input type="text" id="town" name="town_city" value="{{ $order->town_city }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="email">Email Address <span>*</span></label>
                                    <input type="text" id="email" name="email" value="{{ $order->email }}">
                                </div>
                                <div class="col-lg-6">
                                    <label for="phone">Phone <span>*</span></label>
                                    <input type="text" id="phone" name="phone" value="{{ $order->phone }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="checkout-content">
                                <a href="#" class="content-btn">
                                    Status:
                                    <b>{{ \App\Utilities\Constant::$order_status[$order->status] }}</b>
                                </a>
                            </div>
                            <div class="place-order">
                                <h4>Your Order</h4>
                                <div class="order-total">
                                    <ul class="order-table">
                                        <li>Product <span>Total</span></li>
                                        @foreach($order->orderDetails as $orderDetail)
                                            <li class="fw-normal">
                                                {{ $orderDetail->product->name }} x {{ $orderDetail->qty }}
                                                <span>${{ $orderDetail->total }}</span>
                                            </li>
                                        @endforeach
                                        <li class="total-price">Total <span>${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}</span></li>
                                    </ul>

                                    <div class="payment-check">
                                        <div class="pc-item">
                                            <label for="pc-check">
                                                Pay later
                                                <input type="radio" name="payment_type" value="pay_later" id="pc-check" disabled {{ $order->payment_type == 'pay_later' ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="pc-item">
                                            <label for="pc-paypal">
                                                Online payment
                                                <input type="radio" name="payment_type" value="online_payment" id="pc-paypal" disabled {{ $order->payment_type == 'online_payment' ? 'checked' : '' }}>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </form>

        </div>
    </div>
    <!-- My order section end -->

@endsection
