<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;


class ResetPasswordController extends Controller
{
    public function showResetPasswordForm($token)
    {
        return view('clients.auth.reset-password', ['token' => $token]);
    }

    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email|exists:users,email',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.email' => 'Địa chỉ email không hợp lệ.',
            'email.exists' => 'Địa chỉ email không tồn tại trong hệ thống.',
            'password.required' => 'Vui lòng nhập mật khẩu mới.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
            'password.confirmed' => 'Xác nhận mật khẩu không khớp.',
            'token.required' => 'Mã đặt lại mật khẩu không hợp lệ.',
        ]);

        // Logic to reset the password goes here

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->save();
            }
        );
        
        if ($status !== Password::PASSWORD_RESET) {
            toastr()->error('Không thể đặt lại mật khẩu. Vui lòng thử lại sau.');
            return back()->withErrors(['email' => __($status)]);
        }
        toastr()->success('Mật khẩu của bạn đã được đặt lại thành công.');
        return redirect()->route('login');
    }
}