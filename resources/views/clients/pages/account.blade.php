@extends('layouts.client')

@section('title', 'Tài khoản')

@section('breadcrumb', 'Tài khoản')

@section('content')

<!-- WISHLIST AREA START -->
<div class="liton__wishlist-area pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- PRODUCT TAB AREA START -->
                <div class="ltn__product-tab-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="ltn__tab-menu-list mb-50">
                                    <div class="nav">
                                        <a class="active show" data-bs-toggle="tab" href="#liton_tab_dashboard">Bảng
                                            điều khiển
                                            <i class="fas fa-home"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_orders">Đơn hàng <i
                                                class="fas fa-file-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_address">Địa chỉ <i
                                                class="fas fa-map-marker-alt"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_account">Chi tiết đơn hàng <i
                                                class="fas fa-user"></i></a>
                                        <a data-bs-toggle="tab" href="#liton_tab_password">Đổi mật khẩu <i
                                                class="fas fa-user"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="tab-content">
                                    <div class="tab-pane fade active show" id="liton_tab_dashboard">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <p>Xin chào <strong>{{ $user->name }}</strong> (không phải <strong>{{ $user->name
                                                }}</strong>? <small><a href="{{ route('logout') }}">Đăng
                                                        xuất</a></small>)
                                            </p>
                                            <p>Từ trang quản lý tài khoản bạn có thể xem <span>đơn hàng gần đây</span>,
                                                quản lý <span>địa chỉ giao hàng và thanh toán</span>, và <span>chỉnh sửa
                                                    mật khẩu và thông tin tài khoản</span>.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_orders">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Đơn hàng</th>
                                                            <th>Ngày</th>
                                                            <th>Trạng thái</th>
                                                            <th>Tổng</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>22 Tháng 6, 2025</td>
                                                            <td>Đang chờ</td>
                                                            <td>400000VNĐ</td>
                                                            <td><a href="{{ route('cart.index') }}">Xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>22 Tháng 11, 2025</td>
                                                            <td>Đã duyệt</td>
                                                            <td>100000VNĐ</td>
                                                            <td><a href="{{ route('cart.index') }}">Xem</a></td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>12 Tháng 1, 2025</td>
                                                            <td>Tạm giữ</td>
                                                            <td>990000VNĐ</td>
                                                            <td><a href="{{ route('cart.index') }}">Xem</a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_address">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>Tên người nhận</th>
                                                            <th>Địa chỉ</th>
                                                            <th>Thành phố</th>
                                                            <th>Số điện thoại</th>
                                                            <th>Mặc định</th>
                                                            <th>Hành động</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($addresses as $address)
                                                        <tr>
                                                            <td>{{ $address->full_name }}</td>
                                                            <td>{{ $address->address }}</td>
                                                            <td>{{ $address->city }}</td>
                                                            <td>{{ $address->phone }}</td>
                                                            <td>
                                                                @if ($address->default)
                                                                <span class="badge bg-success">Mặc định</span>
                                                                @else
                                                                <form
                                                                    action="{{ route('account.addresses.update', $address->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <button
                                                                        class="btn btn-effect-1 btn-warning">Chọn</button>
                                                                </form>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <!-- You can add edit/delete buttons here -->
                                                                <form
                                                                    action="{{ route('account.addresses.delete', $address->id) }}"
                                                                    method="POST" class="d-inline">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-sm btn-danger"
                                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa địa chỉ này không?')">Xóa</button>
                                                                </form>
                                                            </td>
                                                            @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <button type="submit" class="btn theme-btn-1 btn-effect-1 mt-3"
                                                data-bs-toggle="modal" data-bs-target="#addAddressModal">Thêm địa
                                                chỉ mới</button>
                                        </div>
                                    </div>

                                    <!-- Modal -->
                                    <div class="modal fade" id="addAddressModal" tabindex="-1"
                                        aria-labelledby="addAddressModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content" style="padding: 5px 10px">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="addAddressModalLabel">Thêm địa chỉ
                                                        mới
                                                    </h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('account.addresses.add') }}" method="POST"
                                                        id="addAddressForm">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="full_name" class="col-form-label">Tên
                                                                người
                                                                nhận:</label>
                                                            <input type="text" class="form-control" id="full_name"
                                                                name="full_name" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="address" class="col-form-label">Địa
                                                                chỉ:</label>
                                                            <input type="text" class="form-control" id="address"
                                                                name="address" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="city" class="col-form-label">Thành
                                                                phố:</label>
                                                            <input type="text" class="form-control" id="city"
                                                                name="city" required>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="phone" class="col-form-label">Số
                                                                điện
                                                                thoại:</label>
                                                            <input type="text" class="form-control" id="phone"
                                                                name="phone" required>
                                                        </div>
                                                        <div class="mb-3" form-check>
                                                            <input type="checkbox" class="form-check-input" id="default"
                                                                name="default">
                                                            <label for="default" class="form-label">Địa chỉ mặc
                                                                định</label>
                                                        </div>
                                                        <button type="submit"
                                                            class="btn theme-btn-1 btn-effect-1 mt-3">Lưu địa
                                                            chỉ</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_account">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="ltn__form-box">
                                                <form action="{{ route('account.update') }}" method="POST"
                                                    id="update-account" enctype="multipart/form-data">

                                                    @method('PUT')

                                                    <div class="row mb-50">
                                                        <div class="col-md-12 text-center mb-3">
                                                            <div class="profile-pic-container">
                                                                <img src="{{ asset('storage/' . $user->avatar) }}"
                                                                    alt="Avatar" id="preview-image" class="profile-pic">
                                                                <input type="file" name="avatar" id="avatar"
                                                                    accept="image/*" class="d-none">
                                                            </div>
                                                        </div>
                                                        <div class=" col-md-6">
                                                            <label for="ltn__name">Họ và tên:</label>
                                                            <input type="text" name="ltn__name" id="ltn__name"
                                                                value="{{ $user->name }}" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="ltn__phone_number">Số điện thoại:</label>
                                                            <input type="number" name="ltn__phone_number"
                                                                id="ltn__phone_number" value="{{ $user->phone_number }}"
                                                                required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="ltn__email">Email (không được thay
                                                                đổi)</label>
                                                            <input type="email" name="ltn__email" id="ltn__email"
                                                                value="{{ $user->email }}" readonly>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="ltn__address">Địa chỉ:</label>
                                                            <input type="text" name="ltn__address" id="ltn__address"
                                                                value="{{ $user->address }}" required>
                                                        </div>
                                                    </div>
                                                    <div class="btn-wrapper">
                                                        <button type="submit"
                                                            class="btn theme-btn-1 btn-effect-1 text-uppercase">Cập
                                                            nhật</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="liton_tab_password">
                                        <div class="ltn__myaccount-tab-content-inner">
                                            <div class="ltn__form-box">
                                                <form action="{{ route('account.change-password') }}" method="POST"
                                                    id="change-password-form">
                                                    <fieldset>
                                                        <legend>Thay đổi mật khẩu</legend>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label>Mật khẩu hiện tại:</label>
                                                                <input type="password" name="current_password" required>
                                                                <label>Mật khẩu mới:</label>
                                                                <input type="password" name="new_password" required>
                                                                <label>Xác nhận mật khẩu mới:</label>
                                                                <input type="password" name="confirm_new_password"
                                                                    autocomplete="new-password" required>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="btn-wrapper">
                                                        <button type="submit"
                                                            class="btn theme-btn-1 btn-effect-1 text-uppercase">Đổi mật
                                                            khẩu</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA END -->
</div>
@endsection