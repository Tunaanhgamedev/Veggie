@extends('layouts.client')

@section('title', 'Những câu hỏi thường gặp')

@section('breadcrumb', 'Những câu hỏi thường gặp')

@section('content')

<!-- FAQ AREA START (faq-2) (ID > accordion_2) -->
<div class="ltn__faq-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ltn__faq-inner ltn__faq-inner-2">
                    <div id="accordion_2">
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Làm thế nào để mua một sản phẩm?
                            </h6>
                            <div id="faq-item-2-1" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Để mua sản phẩm, chọn mặt hàng bạn muốn rồi nhấn "Thêm vào giỏ hàng". Vào giỏ
                                        hàng để kiểm tra và nhấn thanh toán, chọn phương thức vận chuyển và thanh toán
                                        phù hợp. Nếu cần trợ giúp, liên hệ bộ phận chăm sóc khách hàng của chúng tôi.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2"
                                aria-expanded="true">
                                Làm sao để yêu cầu hoàn tiền trên website?
                            </h6>
                            <div id="faq-item-2-2" class="collapse show" data-parent="#accordion_2">
                                <div class="card-body">
                                    <div class="ltn__video-img alignleft">
                                        <img src="{{ asset('assets/clients/img/bg/17.jpg') }}"
                                            alt="video popup bg image">
                                        <a class="ltn__video-icon-2 ltn__video-icon-2-small ltn__video-icon-2-border----"
                                            href="https://www.youtube.com/embed/LjCzPp-MK48?autoplay=1&amp;showinfo=0"
                                            data-rel="lightcase:myCollection">
                                            <i class="fa fa-play"></i>
                                        </a>
                                    </div>
                                    <p>Để yêu cầu hoàn tiền, vui lòng mở yêu cầu trong phần tài khoản hoặc liên hệ
                                        bộ phận hỗ trợ kèm theo hóa đơn mua hàng và lý do trả hàng. Sau khi kiểm tra
                                        và xác nhận điều kiện hoàn trả, chúng tôi sẽ xử lý hoàn tiền theo phương thức
                                        bạn đã thanh toán trong thời gian quy định.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-3" aria-expanded="false">
                                Tôi là người dùng mới. Tôi nên bắt đầu như thế nào?
                            </h6>
                            <div id="faq-item-2-3" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Nếu bạn mới, hãy tạo tài khoản bằng email, xác thực thông tin, rồi duyệt
                                        sản phẩm hoặc dùng thanh tìm kiếm. Thêm sản phẩm vào giỏ và làm theo hướng
                                        dẫn thanh toán để hoàn tất đơn hàng.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-4" aria-expanded="false">
                                Hoàn trả và hoàn tiền
                            </h6>
                            <div id="faq-item-2-4" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chính sách hoàn trả: Bạn có thể trả sản phẩm trong vòng 3 ngày kể từ ngày nhận
                                        nếu sản phẩm còn nguyên tem, nhãn và hóa đơn. Vui lòng liên hệ bộ phận hỗ trợ
                                        để được hướng dẫn chi tiết về quy trình trả hàng và hoàn tiền.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-5" aria-expanded="false">
                                Thông tin của tôi có được bảo mật không?
                            </h6>
                            <div id="faq-item-2-5" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Chúng tôi dùng các biện pháp bảo mật tiêu chuẩn (mã hóa SSL, hệ thống bảo mật
                                        của cổng thanh toán) để bảo vệ dữ liệu khách hàng. Không chia sẻ mật khẩu và
                                        báo ngay cho chúng tôi nếu bạn nghi ngờ có truy cập trái phép.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-6" aria-expanded="false">
                                Mã giảm giá không hoạt động
                            </h6>
                            <div id="faq-item-2-6" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Nếu mã giảm giá không hoạt động, kiểm tra điều kiện áp dụng (sản phẩm, đơn
                                        hàng tối thiểu, thời hạn). Đảm bảo bạn đã nhập đúng mã. Nếu vẫn lỗi, liên hệ
                                        bộ phận hỗ trợ để được kiểm tra chi tiết.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h6 class="collapsed ltn__card-title" data-bs-toggle="collapse"
                                data-bs-target="#faq-item-2-7" aria-expanded="false">
                                Làm thế nào để thanh toán bằng thẻ tín dụng?
                            </h6>
                            <div id="faq-item-2-7" class="collapse" data-parent="#accordion_2">
                                <div class="card-body">
                                    <p>Thanh toán bằng thẻ tín dụng: chọn phương thức thẻ khi thanh toán, nhập số thẻ,
                                        ngày hết hạn và mã CVV. Hệ thống sẽ xử lý và xác thực giao dịch. Nếu giao dịch
                                        không thành công, liên hệ ngân hàng phát hành để biết thêm chi tiết.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="need-support text-center mt-100">
                        <h2>Còn cần giúp đỡ? Liên hệ hỗ trợ 24/7:</h2>
                        <div class="btn-wrapper mb-30">
                            <a href="contact.blade.php" class="theme-btn-1 btn">Liên hệ</a>
                        </div>
                        <h3><i class="fas fa-phone"></i> +84123-456-789</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <aside class="sidebar-area ltn__right-sidebar">
                    <!-- Newsletter Widget -->
                    <div class="widget ltn__search-widget ltn__newsletter-widget">
                        <h6 class="ltn__widget-sub-title">đăng ký</h6>
                        <h4 class="ltn__widget-title">Đăng ký nhận bản tin</h4>
                        <form action="#">
                            <input type="text" name="search" placeholder="Search">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <div class="ltn__newsletter-bg-icon">
                            <i class="fas fa-envelope-open-text"></i>
                        </div>
                    </div>
                    <!-- Banner Widget -->
                    <div class="widget ltn__banner-widget">
                        <a href="shop.html"><img src="{{ asset('assets/clients/img/banner/banner-3.jpg') }}"
                                alt="Banner Image"></a>
                    </div>

                </aside>
            </div>
        </div>
    </div>
</div>
<!-- FAQ AREA START -->

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
                    <h6>Khách hàng</h6>
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
                    <h6>Nhận ưu đãi</h6>
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