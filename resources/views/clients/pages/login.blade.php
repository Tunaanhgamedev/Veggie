@extends('layouts.client')

@section('title', 'Đăng nhập')

@section('breadcrumb', 'Đăng nhập')

@section('content')

<!-- LOGIN AREA START -->
<div class="ltn__login-area pb-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng nhập <br>Tài khoản của bạn</h1>
                    <p>Đăng nhập để quản lý đơn hàng, xem lịch sử mua hàng và nhận ưu đãi cá nhân hóa.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="account-login-inner">
                    <form action="{{ route('post-login') }}" method="POST" class="ltn__form-box contact-form-box"
                        id="login-form">
                        @csrf
                        <input type="email" name="email" placeholder="Email*">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password" placeholder="Mật khẩu*">
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="btn-wrapper mt-0">
                            <button class="theme-btn-1 btn btn-block" type="submit">ĐĂNG NHẬP</button>
                        </div>
                        <div class="go-to-btn mt-20">
                            <a href="{{ route('password.request') }}"><small>BẠN QUÊN MẬT KHẨU?</small></a>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-create text-center pt-50">
                    <h4>BẠN CHƯA CÓ TÀI KHOẢN?</h4>
                    <p>Thêm sản phẩm vào danh sách yêu thích, nhận gợi ý cá nhân hóa <br>
                        thanh toán nhanh hơn và theo dõi đơn hàng dễ dàng—hãy đăng ký ngay.</p>
                    <div class="btn-wrapper">
                        <a href="{{ route('register') }}" class="theme-btn-1 btn black-btn">TẠO TÀI KHOẢN</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@endsection