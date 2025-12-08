<?php

namespace App\Http\Controllers\Clients;

use App\Http\Controllers\Controller;
use App\Models\ShippingAddress;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Psy\Util\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

use function Flasher\Toastr\Prime\toastr;

class AccountController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $addresses = ShippingAddress::where('user_id', Auth::id())->get();
        return view('clients.pages.account',    compact('user', 'addresses'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'ltn__name' => 'required|string|max:255',
            'ltn__phone_number' => 'nullable|string|max:13',
            'ltn__address' => 'nullable|string|max:255',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            // Add other fields and their validation rules as needed
        ]);

        $user = Auth::user();
        if($request->hasFile('avatar')) {
            //Delete old avatar if exists
            if($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                // delete old avatar
                Storage::disk('public')->delete($user->avatar);
            }
            $file = $request->file('avatar');
            //Create new filename
            $filename = time() . '_' . uniqid() . '.' . $file->getClientOriginalExtension();

            //Save image to folder 
            $avatarPath = $file->storeAs('uploads/users', $filename, 'public');
            $user->avatar = $avatarPath;    
        }

        $user->name = $request->input('ltn__name');;
        $user->phone_number = $request->input('ltn__phone_number');;
        $user->address = $request->input('ltn__address');
        $user->save();
        return response()->json([
            'success' => true,
            'message' => 'Cập nhật tài khoản thành công!',
            'avatar' => asset('storage/' . $user->avatar)
        ]);
    }

    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:6',
            'confirm_new_password' => 'required|same:new_password',
        ],
        [
            'current_password.required' => 'Mật khẩu hiện tại là bắt buộc.',
            'new_password.required' => 'Mật khẩu mới là bắt buộc.',
            'new_password.min' => 'Mật khẩu mới phải có ít nhất 6 ký tự.',
            'confirm_new_password.required' => 'Vui lòng nhập lại mật khẩu mới.',
            'confirm_new_password.same' => 'Xác nhận mật khẩu không khớp.',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json([
                'error' => [
                    'current_password' => ['Mật khẩu hiện tại không đúng.']
                ]
                
            ], 422);
        }

        //Update password

        $user->update([
            'password' => Hash::make($request->new_password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Đổi mật khẩu thành công!',
        ]);
    }

    public function addAddress(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'phone' => 'required|string|max:13',
            'address' => 'required|string|max:255',
            'city' => 'nullable|string|max:255',
        ]);

        if($request->has('default')) {
            // unset default address
            ShippingAddress::where('user_id', Auth::id())->update(['default' => 0]);
        }

        ShippingAddress::create([
            'user_id' => Auth::id(),
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'city' => $request->city,
            'default' => $request->has('default') ? 1 : 0,
        ]);

        return back()->with('success', 'Địa chỉ đã được thêm thành công!');
    }

    public function updatePrimaryAddress($id)
    {
        // unset default address
        ShippingAddress::where('user_id', Auth::id())->update(['default' => 0]);

        // set new default address
        $address = ShippingAddress::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $address->update(['default' => 1]);

        toastr()->success('Địa chỉ mặc định đã được cập nhật thành công!');
        return back();
    }

    public function deleteAddress($id)
    {
        $address = ShippingAddress::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $address->delete();

        toastr()->success('Địa chỉ đã được xóa thành công!');
        return back();
    }
}