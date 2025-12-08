@extends('layouts.client')

@section('title', 'Giỏ hàng')

@section('breadcrumb', 'Giỏ hàng')

@section('content')

<!-- SHOPING CART AREA START -->
<div class="liton__shoping-cart-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping-cart-inner">
                    <div class="shoping-cart-table table-responsive">
                        <table class="table">
                            <tbody>
                                @php
                                $cartTotal = 0;
                                @endphp
                                @forelse ($cartItems as $item)
                                @php
                                $subtotal = $item['price'] * $item['quantity'];
                                $cartTotal += $subtotal;
                                @endphp
                                <tr>
                                    <td class="cart-product-remove"><button class="remove-from-cart"
                                            data-id="{{ $item['product_id'] }}">x</button>
                                    </td>
                                    <td class="cart-product-image">
                                        <a href="javascript:void(0)"><img
                                                src="{{ asset('storage/' . ($item['image'] ?? 'uploads/products/default-product.jpg')) }}"
                                                alt="Sản phẩm"></a>
                                    </td>
                                    <td class="cart-product-info">
                                        <h4><a href="javascript:void(0)">{{ $item['name'] }}</a>
                                        </h4>
                                    </td>
                                    <td class="cart-product-price">{{ number_format($item['price'], 0, ',', '.') }} VNĐ
                                    </td>
                                    <td class="cart-product-quantity">
                                        <div class="cart-plus-minus">
                                            <input type="text" value="{{ $item['quantity'] }}" name="qtybutton"
                                                class="cart-plus-minus-box" readonly data-max="{{ $item['stock'] }}"
                                                data-id="{{ $item['product_id'] }}">
                                        </div>
                                    </td>
                                    <td class="cart-product-subtotal">{{ number_format($subtotal, 0, ',', '.') }} VNĐ
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Giỏ hàng trống</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                    <div class="shoping-cart-total mt-50">
                        <h4>Tổng giỏ hàng</h4>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Tổng tiền</td>
                                    <td>$618.00</td>
                                </tr>
                                <tr>
                                    <td>Vận chuyển</td>
                                    <td>25.000 đ</td>
                                </tr>
                                <tr>
                                    <td><strong>Tổng đơn hàng</strong></td>
                                    <td><strong>$633.00</strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrapper text-right text-end">
                            <a href="checkout.html" class="theme-btn-1 btn btn-effect-1">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->
@endsection