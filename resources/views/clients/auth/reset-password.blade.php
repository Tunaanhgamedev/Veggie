@extends('layouts.client')

@section('title', 'Đặt lại mật khẩu')

@section('breadcrumb', 'Đặt lại mật khẩu')

@section('content')

<div class="container pb-70">
    <h2>Đặt lại mật khẩu</h2>
    <div class="ltn_myaccount-tab-content-inner">
        <div class="ltn_form-box">
            <form action="{{ route('password.update') }}" method="POST" id="reset-password-form">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
                <fieldset>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="email" name="email" placeholder="Email*">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password" placeholder="Mật khẩu mới">
                            @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="password" name="password_confirmation" placeholder="Xác nhận mật khẩu*"
                                required>
                        </div>
                </fieldset>
                <div class="btn-wrapper">
                    <button class="theme-btn-1 btn black-btn text-uppercase" type="submit"> Đặt lại mật khẩu
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection