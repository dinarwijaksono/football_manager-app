<?php

namespace App\Http\Controllers;

use App\Services\User_service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Auth_controller extends Controller
{
    protected $user_service;

    function __construct(User_service $user_service)
    {
        $this->user_service = $user_service;
    }


    public function login()
    {
        return view('Auth/login');
    }

    public function doLogin(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Username tidak boleh kosong.',
            'password.required' => 'Password tidak boleh kosong.',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->with('loginFailed', 'Username atau password salah.');
    }





    public function register()
    {
        return '/Halaman register';
    }



    public function doRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|min:4|max:50',
            'email' => 'required|unique:users',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ]);

        $this->user_service->addUser($request->username, $request->email, $request->password);

        return redirect('/Auth/register')->with('registerSuccess', "Username berhasil di daftarkan.");
    }





    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Auth/login');
    }
}
