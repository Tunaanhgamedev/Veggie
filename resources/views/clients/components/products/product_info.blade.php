{{-- Product Info Component --}}
<div class="col-md-6">
    <div class="modal-product-info shop-details-info pl-0">
        <div class="product-ratting">
            <ul>
                <li><a href="#"><i class="fas fa-star"></i></a></li>
                <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
            </ul>
        </div>
        <h3>{{ $product->name }}</h3>
        <div class="product-price">
            <span>{{ number_format($product->price, 0, '.', ',') }} VNĐ</span>
        </div>
        <div class="modal-product-meta ltn__product-details-menu-1">
            <ul>
                <li>
                    <strong>Danh mục:</strong>
                    <span>
                        <a href="javascript:void(0)">{{ $product->category->name }}</a>
                    </span>
                </li>
            </ul>
        </div>
        <div class="ltn__product-details-menu-2">
            <ul>
                <li>
                    <div class="cart-plus-minus">
                        <div class="dec qtybutton">-</div>
                        <input type="text" value="1" name="qtybutton"
                            class="cart-plus-minus-box" readonly
                            data-max="{{ $product->stock }}">
                        <div class="inc qtybutton">+</div>
                    </div>
                </li>
                <li>
                    <a href="javascript:void(0)"
                        class="theme-btn-1 btn btn-effect-1 add-to-cart-btn"
                        title="Thêm vào giỏ hàng" data-id="{{ $product->id }}">
                        <i class="fas fa-shopping-cart"></i>
                        <span>THÊM VÀO GIỎ HÀNG</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ltn__product-details-menu-3">
            <ul>
                <li>
                    <a href="#" class="" title="Wishlist" data-bs-toggle="modal"
                        data-bs-target="#liton_wishlist_modal">
                        <i class="far fa-heart"></i>
                        <span>Yêu thích</span>
                    </a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="ltn__social-media">
            <ul>
                <li>Chia sẻ:</li>
                <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a>
                </li>
                <li><a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
                </li>
            </ul>
        </div>
        <hr>
        <div class="ltn__safe-checkout">
            <h5>Đảm bảo thanh toán an toàn</h5>
            <img src="{{ asset('assets/clients/img/icons/payment-2.png') }}"
                alt="Payment Image">
        </div>
    </div>
</div>



