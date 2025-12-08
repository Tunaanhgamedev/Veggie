<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    public function showForgotPasswordForm()
    {
        return view('clients.auth.forgot-password');
    }

    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.exists' => 'Địa chỉ email không tồn tại trong hệ thống.',
        ]);

        // Logic to send password reset link goes here

        $status = Password::sendResetLink(
            $request->only('email')
        );
        
        if ($status !== Password::RESET_LINK_SENT) {
            toastr()->error('Không thể gửi liên kết đặt lại mật khẩu. Vui lòng thử lại sau.');
            return back()->withErrors(['email' => __($status)]);
        }
        toastr()->success('Liên kết đặt lại mật khẩu đã được gửi đến email của bạn.');
        return redirect()->back();
    }
}