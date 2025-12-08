@extends('layouts.client')

@section('title', 'Đăng kí')
@section('breadcrumb', 'Đăng kí')
@section('content')

<!-- LOGIN AREA START (Register) -->
<div class="ltn__login-area pb-110">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title">Đăng ký <br>Tài khoản của bạn</h1>
                    <p>Đăng ký ngay để quản lý đơn hàng, lưu địa chỉ và nhận ưu đãi cá nhân hóa.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="account-login-inner">
                    <form action="{{ route('post-register') }}" class="ltn__form-box contact-form-box" method="POST"
                        id="register-form">
                        @csrf
                        <input type="text" name="name" placeholder="Họ và tên" value="{{ old('name') }}" required>
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="email" name="email" placeholder="Email*" value="{{ old('email') }}" required>
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="password" name="password" placeholder="Mật khẩu*" required>
                        @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="password" name="confirmPassword" placeholder="Xác nhận mật khẩu*" required>
                        @error('confirmPassword')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox1" value="" required>
                            Tôi đồng ý để Veggie xử lý dữ liệu cá nhân của tôi nhằm gửi các nội dung tiếp
                            thị được cá nhân hóa theo mẫu đồng ý và chính sách bảo mật.
                        </label>
                        @error('checkbox1')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <label class="checkbox-inline">
                            <input type="checkbox" name="checkbox2" value="" required>
                            Bằng cách nhấn "Tạo tài khoản", tôi đồng ý với chính sách bảo mật.
                        </label>
                        @error('checkbox2')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="btn-wrapper">
                            <button class="theme-btn-1 btn reverse-color btn-block" type="submit">TẠO
                                TÀI KHOẢN</button>
                        </div>
                    </form>
                    <div class="by-agree text-center">
                        <p>Bằng việc tạo tài khoản, bạn đồng ý với</p>
                        <p><a href="#">ĐIỀU KHOẢN &nbsp; &nbsp; | &nbsp; &nbsp; CHÍNH SÁCH BẢO MẬT</a></p>
                        <div class="go-to-btn mt-50">
                            <a href="{{ route('login') }}">Đã có tài khoản?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- LOGIN AREA END -->

@endsection