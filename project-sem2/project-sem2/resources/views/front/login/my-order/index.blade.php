@extends('front.layout.master')

@section('title', 'My Order')

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./"><i class="fa fa-home"></i> Home</a>
                        <span>My Order</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- My order section begin -->
    <div class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <table>
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>ID</th>
                                    <th class="p-name">PRODUCTS</th>
                                    <th>TOTAL</th>
                                    <th>DETAILS</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                                <tr>
                                    <td class="cart-pic first-row"><img src="front/img/products-sem2/{{ $order->orderDetails[0]->product->productImages[0]->path }}" alt=""></td>
                                    <td class="first-row" style="font-size: 18px; width: 10%">#{{ $order->id }}</td>
                                    <td class="cart-title first-row">
                                        <h5>
                                            {{ $order->orderDetails[0]->product->name }}
                                            @if(count($order->orderDetails) > 1)
                                                <br>and {{ count($order->orderDetails) - 1 }} other products
                                            @endif
                                        </h5>
                                    </td>
                                    <td class="total-price first-row">
                                        ${{ array_sum(array_column($order->orderDetails->toArray(), 'total')) }}
                                    </td>
                                    <td class="first-row">
                                        <a href="./login/my-order/{{ $order->id }}" class="primary-btn">Details</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- My order section end -->

@endsection
