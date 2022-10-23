<?php

namespace App\Http\Controllers;

use App\Services\User_service;
use Illuminate\Http\Request;

class Auth_controller extends Controller
{
    protected $user_service;

    function __construct(User_service $user_service)
    {
        $this->user_service = $user_service;
    }


    public function login()
    {
        return '/Halaman login';
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
}
