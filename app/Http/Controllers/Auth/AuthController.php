<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\UserLoginRequest;
use App\Http\Requests\Auth\UserRegisterRequest;

class AuthController extends Controller
{
    public function loginUser(){
        return view('auth.login');
    }

    public function handleLogin(UserLoginRequest $request){
        if (Auth::attempt($request->only('email','password'))) {
            return redirect('home');
        }

        return view('auth.login');
    }

    public function registerUser() {

        return view('auth.register');
    }

    public function handleRegistration(UserRegisterRequest $request) {
        $user = User::create($request->all());
        if ($user) {
            if (Auth::attempt($request->only('email','password'))) {
                return redirect('home');
            }
        }
        return view('auth.register');
    }
}
