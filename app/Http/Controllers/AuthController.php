<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function viewRegister()
    {
        return view('register');
    }

    public function register(Request $request) 
    {
        $addUser = new \App\Models\User;
        $addUser->fname = $request->fname;
        $addUser->lname = $request->lname;
        $addUser->email = $request->email;
        $addUser->username = $request->username;
        $addUser->password = bcrypt($request->password);
        $addUser->remember_token = Str::random(15);

        $addUser->save();

        $addHistory = new \App\Models\History;
        $addHistory->user_id = $request->email;

        $addHistory->save();

        return redirect('/')->with('success', 'Anda telah berhasil mendaftarkan akun! Silahkan masuk');
    }

    public function username()
    {
        $login = request()->input('username');
        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        request()->merge([$field => $login]);
        return $field;
    }

    public function postLogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/home');
        }
        return redirect()->back()->with('error','Data yang Anda masukkan salah!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
