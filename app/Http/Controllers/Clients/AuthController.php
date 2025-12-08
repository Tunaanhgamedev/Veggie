<?php

namespace App\Http\Controllers\Clients; 

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Mail\ActivationMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('clients.pages.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ], [
            'name.required' => 'Vui lòng nhập tên của bạn.',
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'email.unique' => 'Địa chỉ email đã được sử dụng.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        // check if email exists
        $existingUser = User::where('email', $request->email)->first();
        if ($existingUser) 
        {
            if ($existingUser->isPending()) {
                toastr()->error('Tài khoản của bạn đang chờ phê duyệt');
                return redirect()->route('register');
            }
            return redirect()->route('register')->with('error', 'Email đã tồn tại. Vui lòng đăng nhập.');
        }

        // create token active
        $token = Str::random(64);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'status' => 'pending', // set default status to pending
            'role_id'  => '3', // default role customer
            'activation_token' => $token,
        ]);

        Mail::to($user->email)->send(new ActivationMail($token, $user));

        toastr()->success('Đăng ký thành công! Vui lòng kiểm tra email để kích hoạt tài khoản của bạn.');
        return redirect()->route('login');
    }

    public function activate($token)
    {
        $user = User::where('activation_token', $token)->first();

        if (!$user) {
            toastr()->error('Token kích hoạt không hợp lệ.');
            return redirect()->back();
        }

        $user->status = 'active';
        $user->activation_token = null;
        $user->save();

        toastr()->success('Tài khoản của bạn đã được kích hoạt thành công! Bạn có thể đăng nhập ngay bây giờ.');
        return redirect()->route('login');
    }

    public function showLoginForm()
    {
        return view('clients.pages.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Vui lòng nhập địa chỉ email.',
            'password.required' => 'Vui lòng nhập mật khẩu.',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự.',
        ]);

        // Check login information
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'status' => 'active'])) {
            if(in_array(Auth::user()->role->name, ['customer'])) {
                $request->session()->regenerate();
                toastr()->success('Đăng nhập thành công!');
                return redirect()->route('home');
            } else {
                Auth::logout();
                toastr()->warning('Bạn không có quyền truy cập vào tài khoản này.');
                return redirect()->back();
            }

        }

        toastr()->error('Thông tin đăng nhập không hợp lệ hoặc tài khoản chưa được kích hoạt.');
        return redirect()->back();  
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        toastr()->success('Đăng xuất thành công!');
        return redirect()->route('login');
    }
    
}