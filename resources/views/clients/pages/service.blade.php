@extends('layouts.client')

@section('title', 'Dịch vụ')
@section('breadcrumb', 'Dịch vụ')
@section('content')

<!-- ABOUT US AREA START -->
<div class="ltn__about-us-area pb-115">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 align-self-center">
                <div class="about-us-img-wrap ltn__img-shape-left  about-img-left">
                    <img src="{{ asset('assets/clients/img/service/11.jpg') }}" alt="Image">
                </div>
            </div>
            <div class="col-lg-7 align-self-center">
                <div class="about-us-info-wrap">
                    <div class="section-title-area ltn__section-title-2">
                        <h6 class="section-subtitle ltn__secondary-color">// DỊCH VỤ ĐÁNG TIN CẬY</h6>
                        <h1 class="section-title">Chúng tôi có trình độ &
                            chuyên nghiệp<span>.</span></h1>
                        <p>Cam kết cung cấp dịch vụ chuyên nghiệp, an toàn và đáng tin cậy cho khách hàng.</p>
                    </div>
                    <div class="about-us-info-wrap-inner about-us-info-devide">
                        <p>Chúng tôi cung cấp các dịch vụ chăm sóc khách hàng tận tâm, giao hàng nhanh và sản
                            phẩm đảm bảo chất lượng. Đội ngũ của chúng tôi luôn sẵn sàng hỗ trợ bạn 24/7.</p>
                        <div class="list-item-with-icon">
                            <ul>
                                <li><a href="contact.html">Giao hàng tận nhà 24/7 miễn phí</a></li>
                                <li><a href="team.html">Đội ngũ chuyên gia</a></li>
                                <li><a href="service-details.html">Trang thiết bị đạt chuẩn</a></li>
                                <li><a href="shop.html">Sản phẩm phong phú</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ABOUT US AREA END -->

<!-- SERVICE AREA START (Service 1) -->
<div class="ltn__service-area section-bg-1 pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color---">Dịch vụ của chúng tôi</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Rau hữu cơ tươi, canh tác theo tiêu chuẩn an toàn, đảm bảo dinh dưỡng và không sử dụng
                            hóa chất độc hại.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Sản phẩm được tuyển chọn kỹ lưỡng, giữ nguyên độ tươi và chất lượng đến tay khách hàng.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Tươi ngon, an toàn và được đóng gói theo tiêu chuẩn vệ sinh thực phẩm.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/3.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Sản phẩm đảm bảo nguồn gốc, lý tưởng cho bữa ăn lành mạnh hàng ngày.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/1.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Chuẩn hữu cơ, giàu dinh dưỡng, phù hợp cho gia đình và trẻ nhỏ.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="ltn__service-item-1">
                    <div class="service-item-img">
                        <a href="service-details.html"><img src="{{ asset('assets/clients/img/service/2.jpg') }}"
                                alt="#"></a>
                    </div>
                    <div class="service-item-brief">
                        <h3><a href="service-details.html">Rau hữu cơ</a></h3>
                        <p>Sản phẩm tươi, được kiểm soát chất lượng trước khi giao cho khách hàng.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SERVICE AREA END -->

<!-- OUR JOURNEY AREA START -->
<div class="ltn__our-journey-area bg-image bg-overlay-theme-90 pt-280 pb-350 mb-35 plr--9" data-bg="img/bg/8.jpg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__our-journey-wrap ">
                    <ul>
                        <li><span class="ltn__journey-icon">2023</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Bắt đầu hành trình</h3>
                                            <p>Khởi đầu với tầm nhìn mang thực phẩm sạch đến gần hơn với cộng đồng.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- <li class="active"><span class="ltn__journey-icon">2024</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận thưởng</h3>
                                            <p>Khách hàng được hưởng nhiều chương trình ưu đãi và phần thưởng hấp dẫn.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li> -->
                        <li><span class="ltn__journey-icon">2024</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Người chiến thắng tiêu biểu</h3>
                                            <p>Những thành tựu và giải thưởng đánh dấu nỗ lực không ngừng của chúng tôi.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2025</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận thưởng</h3>
                                            <p>Tiếp tục đổi mới để mang lại giá trị cho khách hàng và cộng đồng.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li><span class="ltn__journey-icon">2025</span>
                            <ul>
                                <li>
                                    <div class="ltn__journey-history-item-info clearfix">
                                        <div class="ltn__journey-history-img">
                                            <img src="{{ asset('assets/clients/img/service/history-1.jpg') }}" alt="#">
                                        </div>
                                        <div class="ltn__journey-history-info">
                                            <h3>Nhận thưởng</h3>
                                            <p>Khách hàng nhận phần thưởng và ưu đãi hấp dẫn thông qua chương trình
                                                tích điểm và khuyến mãi của chúng tôi.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- OUR JOURNEY AREA END -->

<!-- VIDEO AREA START 
<div class="ltn__video-popup-area ltn__video-popup-margin-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="ltn__video-bg-img ltn__video-popup-height-600 bg-overlay-black-50--- bg-image"
                    data-bg="img/bg/16.jpg">
                    <a class="ltn__video-icon-2 ltn__video-icon-2-border---"
                        href="https://www.youtube.com/embed/X7R-q9rsrtU?autoplay=1&amp;showinfo=0"
                        data-rel="lightcase:myCollection">
                        <i class="fa fa-play"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
 VIDEO AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area pt-115 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area ltn__section-title-2 text-center">
                    <h1 class="section-title white-color---">Blog mới nhất</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1 ltn__blog-item-3-normal">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('assets/clients/img/blog/1.jpg') }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>Bởi: Quản trị</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Các vấn đề dầu động cơ phổ biến và cách
                                khắc phục</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Ngày 24 tháng 6 năm
                                        2024
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('assets/clients/img/blog/2.jpg') }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>Bởi: Quản trị</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Cách và khi nào nên thay đĩa phanh</a>
                        </h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Ngày 23 tháng 7 năm
                                        2025
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('assets/clients/img/blog/3.jpg') }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>Bởi: Quản trị</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Bảo dưỡng & Sửa chữa</a></h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Ngày 22 tháng 8 năm
                                        2024</li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('assets/clients/img/blog/4.jpg') }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>Bởi: Quản trị</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Chuẩn bị cho ngày lái thử đầu tiên!</a>
                        </h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Ngày 24 tháng 6 năm
                                        2024
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Xem thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item ltn__blog-item-3">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="{{ asset('assets/clients/img/blog/5.jpg') }}" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author">
                                    <a href="#"><i class="far fa-user"></i>Bởi: Quản trị</a>
                                </li>
                                <li class="ltn__blog-tags">
                                    <a href="#"><i class="fas fa-tags"></i>Dịch vụ</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title"><a href="blog-details.html">Cách giúp lốp xe của bạn bền lâu hơn</a>
                        </h3>
                        <div class="ltn__blog-meta-btn">
                            <div class="ltn__blog-meta">
                                <ul>
                                    <li class="ltn__blog-date"><i class="far fa-calendar-alt"></i>Ngày 24 tháng 6 năm
                                        2025
                                    </li>
                                </ul>
                            </div>
                            <div class="ltn__blog-btn">
                                <a href="blog-details.html">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

@endsection