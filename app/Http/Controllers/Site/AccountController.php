<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AccountController extends Controller
{
    public function loginShow()
    {
        return view('Site.Pages.Login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'phoneLogin' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'passwordLogin' => 'required|min:8|max:20',
        ], [
            'phoneLogin.required' => 'You have not entered your phone number',
            'phoneLogin.regex' => 'You have entered an invalid phone number format',
            'phoneLogin.min' => 'Phone numbers must be at least 10 characters long',
            'passwordLogin.required' => 'You have not entered your password',
            'passwordLogin.min' => 'Password must be at least 8 characters long',
            'passwordLogin.max' => 'Passwords must be no longer than 20 characters',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        if (Auth::attempt(['phone' => $request->phoneLogin, 'password' => $request->passwordLogin], $request->remember)) {
            return redirect('admin/home')->with('status', 'Đăng nhập thành công');
        }

        return redirect()->back()->with('error', 'Đăng nhập thất bại');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('home')->with('status', 'Đăng xuất thành công');
    }
}
