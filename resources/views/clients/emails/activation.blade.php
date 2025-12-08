<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Kích hoạt tài khoản</title>
</head>

<body>
    <h1>Xin chào, {{ $user->name }}</h1>

    <p>Cảm ơn bạn đã đăng ký tài khoản của chúng tôi. Để kích hoạt tài khoản của bạn, vui lòng nhấp vào liên kết dưới
        đây:</p>

    <a href="{{ url('/activate/'.$token) }}"
        style="padding: 10px 5px; background-color: green; color: #fff; text-decoration:none;">
        Kích hoạt tài khoản
    </a>

    <p>Trân trọng,</p>
    <p>Đội ngũ hỗ trợ khách hàng</p>
</body>

</html>