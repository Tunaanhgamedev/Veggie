{{-- Product Tabs Component --}}
<!-- Shop Tab Start -->
<div class="ltn__shop-details-tab-inner ltn__shop-details-tab-inner-2">
    <div class="ltn__shop-details-tab-menu">
        <div class="nav">
            <a class="active show" data-bs-toggle="tab" href="#liton_tab_details_description">Mô tả</a>
            <a data-bs-toggle="tab" href="#liton_tab_details_review" class="">Đánh giá</a>
        </div>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active show" id="liton_tab_details_description">
            <div class="ltn__shop-details-tab-content-inner">
                <h4 class="title-2">Mô tả sản phẩm</h4>
                <p>{{ $product->description }}</p>
            </div>
        </div>
        <div class="tab-pane fade" id="liton_tab_details_review">
            <div class="ltn__shop-details-tab-content-inner">
                <h4 class="title-2">Đánh giá của khách hàng</h4>
                <div class="product-ratting">
                    <ul>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a></li>
                        <li class="review-total"> <a href="#"> ( 95 Đánh giá)</a></li>
                    </ul>
                </div>
                <hr>
                <!-- comment-area -->
                <div class="ltn__comment-area mb-30">
                    <div class="ltn__comment-inner">
                        <ul>
                            <li>
                                <div class="ltn__comment-item clearfix">
                                    <div class="ltn__commenter-img">
                                        <img src="img/testimonial/1.jpg" alt="Image">
                                    </div>
                                    <div class="ltn__commenter-comment">
                                        <h6><a href="#">Adam Smit</a></h6>
                                        <div class="product-ratting">
                                            <ul>
                                                <li><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-star"></i></a>
                                                </li>
                                                <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                                </li>
                                                <li><a href="#"><i class="far fa-star"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>Đây là nhận xét mẫu về sản phẩm. Nội dung này minh họa cho
                                            phần đánh giá của khách hàng.</p>
                                        <span class="ltn__comment-reply-btn">September 3,
                                            2020</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- comment-reply -->
                <div class="ltn__comment-reply-area ltn__form-box mb-30">
                    <form action="#">
                        <h4 class="title-2">Thêm đánh giá</h4>
                        <div class="mb-30">
                            <div class="add-a-review">
                                <h6>Đánh giá của bạn:</h6>
                                <div class="product-ratting">
                                    <ul>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                                        <li><a href="#"><i class="fas fa-star-half-alt"></i></a>
                                        </li>
                                        <li><a href="#"><i class="far fa-star"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="input-item input-item-textarea ltn__custom-icon">
                            <textarea placeholder="Nhập nhận xét của bạn..."></textarea>
                        </div>
                        <div class="input-item input-item-name ltn__custom-icon">
                            <input type="text" placeholder="Nhập tên của bạn...">
                        </div>
                        <div class="input-item input-item-email ltn__custom-icon">
                            <input type="email" placeholder="Nhập email của bạn...">
                        </div>
                        <div class="input-item input-item-website ltn__custom-icon">
                            <input type="text" name="website" placeholder="Nhập website của bạn...">
                        </div>
                        <label class="mb-0"><input type="checkbox" name="agree"> Lưu tên, email và
                            website của tôi trên trình duyệt này cho lần bình luận tiếp theo.</label>
                        <div class="btn-wrapper">
                            <button class="btn theme-btn-1 btn-effect-1 text-uppercase"
                                type="submit">Gửi</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shop Tab End -->



