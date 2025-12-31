@extends('layouts.client_home')

@section('title', 'Trang chủ')

@section('content')

<!-- SLIDER AREA START (slider-3) -->
<div class="ltn__slider-area ltn__slider-3  section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1">
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal bg-image"
            data-bg="{{ asset('assets/clients/img/slider/13.jpg') }}">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-video mb-50 d-none">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-border"
                                            href="https://www.youtube.com/embed/ATI7vfCgwXE?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <h6 class="slide-sub-title animated"><img
                                            src="{{ asset('assets/clients/img/icons/icon-img/1.png') }}" alt="#">
                                        100% sản phẩm chính hãng</h6>
                                    <h1 class="slide-title animated ">Sản phẩm yêu thích <br>từ vườn nhà chúng tôi</h1>
                                    <div class="slide-brief animated">
                                        <p>Sản phẩm tươi, an toàn và giàu dinh dưỡng — trực tiếp từ nhà nông đến bàn ăn
                                            của bạn.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Khám phá
                                            sản phẩm</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="slide-item-img">
                                    <img src="img/slider/21.png" alt="#">
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item -->
        <div class="ltn__slide-item ltn__slide-item-2 ltn__slide-item-3 ltn__slide-item-3-normal bg-image"
            data-bg="{{ asset('assets/clients/img/slider/14.jpg') }}">
            <div class="ltn__slide-item-inner  text-right text-end">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <h6 class="slide-sub-title ltn__secondary-color animated">// SẢN PHẨM HỮU CƠ
                                        CHẤT LƯỢNG</h6>
                                    <h1 class="slide-title animated ">Ngon & Lành — <br> Thực phẩm hữu cơ</h1>
                                    <div class="slide-brief animated">
                                        <p>Chọn lựa thực phẩm hữu cơ, tươi sạch, tốt cho sức khỏe cả nhà.</p>
                                    </div>
                                    <div class="btn-wrapper animated">
                                        <a href="shop.html" class="theme-btn-1 btn btn-effect-1 text-uppercase">Khám phá
                                            sản phẩm</a>
                                        <a href="about.html" class="btn btn-transparent btn-effect-3">TÌM HIỂU
                                            THÊM</a>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="slide-item-img slide-img-left">
                                    <img src="img/slider/22.png" alt="#">
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area mt-120 mb-90">
    <div class="container">
        <div class="row ltn__custom-gutter--- justify-content-center">
            <div class="col-lg-6 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/13.png') }}"
                                alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/14.png') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__banner-item">
                            <div class="ltn__banner-img">
                                <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/15.png') }}"
                                        alt="Banner Image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mt-100 mt--65 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/clients/img/icons/svg/8-trolley.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Miễn phí vận chuyển</h4>
                            <p>Cho đơn hàng trên $49.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/clients/img/icons/svg/9-money.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Đổi trả trong 15 ngày</h4>
                            <p>Cam kết hoàn tiền</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/clients/img/icons/svg/10-credit-card.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Thanh toán an toàn</h4>
                            <p>Bảo mật bởi Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="{{ asset('assets/clients/img/icons/svg/11-gift-card.svg') }}" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Ưu đãi & quà tặng</h4>
                            <p>Áp dụng cho đơn hàng đủ điều kiện</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pt-120 pb-120 d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="about-us-img-wrap about-img-left">
                    <img src="{{ asset('assets/clients/img/others/6.png') }}" alt="About Us Image">
                </div>
            </div>
            <div class="col-lg-6 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">Know More About Shop</h6>
                        <h1 class="section-title">Trusted Organic <br class="d-none d-md-block"> Food Store</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore</p>
                    </div>
                    <p>sellers who aspire to be good, do good, and spread goodness. We
                        democratic, self-sustaining, two-sided marketplace which thrives
                        on trust and is built on community and quality content.</p>
                    <div class="about-author-info d-flex">
                        <div class="author-name-designation  align-self-center mr-30">
                            <h4 class="mb-0">Jerry Henson</h4>
                            <small>/ Shop Director</small>
                        </div>
                        <div class="author-sign  align-self-center">
                            <img src="{{ asset('assets/clients/img/icons/icon-img/author-sign.png') }}" alt="#">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- CATEGORY AREA START -->
<div class="ltn__category-area section-bg-1-- ltn__primary-bg before-bg-1 bg-image bg-overlay-theme-black-5--0 pt-115 pb-90"
    data-bg="{{ asset('assets/clients/img/bg/5.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color">Danh mục</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__category-slider-active slick-arrow-1">
            @foreach ($categories as $category)
            <div class="col-12">
                <div class="ltn__category-item ltn__category-item-3 text-center">
                    <div class="ltn__category-item-img">
                        <a href="shop.html">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}">
                        </a>
                    </div>
                    <div class="ltn__category-item-name">
                        <h5><a href="shop.html">{{ $category->name }}</a></h5>
                        <h6>({{ $category->product->count() }} sản phẩm)</h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- CATEGORY AREA END -->

<!-- PRODUCT TAB AREA START (product-item-3) -->
<div class="ltn__product-tab-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Sản phẩm</h1>
                </div>
                <div class="ltn__tab-menu ltn__tab-menu-2 ltn__tab-menu-top-right-- text-uppercase text-center">
                    <div class="nav">
                        @foreach ($categories as $index => $category)
                        <a class="{{ $index == 0 ? 'active show' : '' }}" data-bs-toggle="tab"
                            href="#tab_{{ $category->id }}">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="tab-content">
                    @foreach ($categories as $index => $category)
                    <div class="tab-pane fade {{ $index == 0 ? 'active show' : '' }}" id="tab_{{ $category->id }}">
                        <div class="ltn__product-tab-content-inner">
                            <div class="row ltn__tab-product-slider-one-active slick-arrow-1">
                                @foreach ($category->product as $pro)
                                <div class="col-lg-12">
                                    <div class="ltn__product-item ltn__product-item-3 text-center">
                                        <div class="product-img">
                                            <a href="#"><img src="{{ $pro->image_url }}" alt="{{ $pro->name }}"></a>
                                            <div class="product-badge">
                                                <ul>
                                                    <li class="sale-badge">-19%</li>
                                                </ul>
                                            </div>
                                            <div class="product-hover-action">
                                                <ul>
                                                    <li>
                                                        <a href="#" title="Xem nhanh" data-bs-toggle="modal"
                                                            data-bs-target="#quick_view_modal-{{ $pro->id }}">
                                                            <i class="far fa-eye"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Thêm vào giỏ" class="add-to-cart-btn"
                                                            data-id="{{ $pro->id }}">
                                                            <i class="fas fa-shopping-cart"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="Yêu thích" data-bs-toggle="modal"
                                                            data-bs-target="#liton_wishlist_modal-{{ $pro->id }}">
                                                            <i class="far fa-heart"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <div class="product-ratting">
                                                <ul>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                                                    <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                    </li>
                                                    <li><a href="#"><i class="far fa-star"></i></a></li>
                                                    <li class="review-total"> <a href="#"> (24)</a></li>
                                                </ul>
                                            </div>
                                            <h2 class="product-title"><a
                                                    href="{{ route('products.detail', $pro->id) }}">{{ $pro->name }}</a>
                                            </h2>
                                            <div class="product-price">
                                                <span>{{ number_format($pro->price, 0, ',', '.') }} VNĐ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT TAB AREA END -->

<!-- COUNTER UP AREA START -->
<div class="ltn__counterup-area bg-image bg-overlay-theme-black-80 pt-115 pb-70"
    data-bg="{{ asset('assets/clients/img/bg/5.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/2.png') }}"
                            alt="#"> </div>
                    <h1><span class="counter">733</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Khách hàng hoạt động</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/3.png') }}"
                            alt="#"> </div>
                    <h1><span class="counter">33</span><span class="counterUp-letter">K</span><span
                            class="counterUp-icon">+</span> </h1>
                    <h6>Tách cà phê</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/4.png') }}"
                            alt="#"> </div>
                    <h1><span class="counter">100</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Nhận thưởng</h6>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 align-self-center">
                <div class="ltn__counterup-item-3 text-color-white text-center">
                    <div class="counter-icon"> <img src="{{ asset('assets/clients/img/icons/icon-img/5.png') }}"
                            alt="#"> </div>
                    <h1><span class="counter">21</span><span class="counterUp-icon">+</span> </h1>
                    <h6>Phủ sóng quốc gia</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- COUNTER UP AREA END -->

<!-- PRODUCT AREA START (product-item-3) -->
<div class="ltn__product-area ltn__product-gutter pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title">Sản phẩm bán chạy</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__tab-product-slider-one-active--- slick-arrow-1">
            @foreach ($bestSellingProducts as $product)
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item ltn__product-item-3 text-left">
                    <div class="product-img">
                        <a href="{{ route('product.detail', ['id' => $product->id]) }}"><img
                                src="{{ $product->image_url }}" alt="{{ $product->name }}"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="sale-badge">-19%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action">
                            <ul>
                                <li>
                                    <a href="#" title="Xem nhanh" data-bs-toggle="modal"
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
                                    <a href="#" title="Yêu thích" data-bs-toggle="modal"
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
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star"></i></a></li>
                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                </li>
                                <li><a href="#"><i class="far fa-star"></i></a></li>
                                <li class="review-total"> <a href="#"> (24)</a></li>
                            </ul>
                        </div>
                        <h2 class="product-title"><a
                                href="{{ route('product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                        </h2>
                        <div class="product-price">
                            <span>{{ number_format($product->price, 0, ',', '.') }} VNĐ</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- PRODUCT AREA END -->

<!-- CALL TO ACTION START (call-to-action-4) -->
<div class="ltn__call-to-action-area ltn__call-to-action-4 bg-image pt-115 pb-120"
    data-bg="{{ asset('assets/clients/img/bg/6.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="call-to-action-inner call-to-action-inner-4 text-center">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// Mọi câu hỏi của bạn //</h6>
                        <h1 class="section-title white-color">897-876-987-90</h1>
                    </div>
                    <div class="btn-wrapper">
                        <a href="tel:+123456789" class="theme-btn-1 btn btn-effect-1">GỌI NGAY</a>
                        <a href="contact.html" class="btn btn-transparent btn-effect-4 white-color">LIÊN HỆ
                            CHÚNG TÔI</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__call-to-4-img-1">
        <img src="{{ asset('assets/clients/img/bg/12.png') }}" alt="#">
    </div>
    <div class="ltn__call-to-4-img-2">
        <img src="{{ asset('assets/clients/img/bg/11.png') }}" alt="#">
    </div>
</div>
<!-- CALL TO ACTION END -->

@endsection