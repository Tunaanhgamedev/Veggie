{{-- Related Products Component --}}
<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2">
                    <h1 class="section-title">Sản phẩm tương tự<span>.</span></h1>
                </div>
            </div>
        </div>
        <div class="row ltn__related-product-slider-one-active slick-arrow-1">
            <!-- ltn__product-item -->
            @foreach ($relatedProducts as $product)
            <div class="col-lg-12">
                <div class="ltn__product-item ltn__product-item-3 text-center">
                    <div class="product-img">
                        <a href="{{ route('products.detail', $product->slug) }}"><img src="{{ $product->image_url }}"
                                alt="{{ $product->name }}"></a>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="javascript:void(0)" title="Xem nhanh" data-bs-toggle="modal"
                                        data-bs-target="#quick_view_modal-{{ $product->id }}">
                                        <i class="far fa-eye"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title="Thêm vào giỏ" class="add-to-cart-btn"
                                        data-id="{{ $product->id }}">
                                        <i class="fas fa-shopping-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" title=" Yêu thích" data-bs-toggle="modal"
                                        data-bs-target="#liton_wishlist_modal-{{ $product->id }}">
                                        <i class="far fa-heart"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <div class="product-ratting">
                            <ul>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a
                                href="{{ route('products.detail', $product->slug) }}">{{ $product->name }}</a></h2>
                        <div class="product-price">
                            <span>${{ number_format($product->price, 0, '.', ',') }} VNĐ</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @foreach ($relatedProducts as $product)
        @include('clients.components.modals.includes.include-modals')
        @endforeach
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->



