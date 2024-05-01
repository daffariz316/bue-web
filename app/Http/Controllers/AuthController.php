<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function showSignupForm()
    {
        return view('signup');
    }
    public function login(Request $request)
    {

        // dd(Session::all());
        $credentials = $request->only('email', 'password');

        // dd($credentials);
    if (Auth::attempt($credentials)) {
        // Jika autentikasi berhasil, redirect ke halaman dashboard atau halaman yang sesuai
        return redirect()->intended(route('dashboard'));
    }

    // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput($request->only('email'));

    }
    public function signup(Request $request)
    {
        // dd($request);
        $request->validate([
            'username' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:admins,email',
            ],
            'password' => [
                'required',
                'string',
                'min:8',
            ],
        ]);

        $admin = Admin::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // Admin::create([
        //     'username' => $request->username,
        //     'email' => $request->email,
        //     'password' => Hash::make($request->password),
        // ]);

        // Autentikasi user setelah signup
        // Admin::attempt($request->only('email', 'password'));
        Auth::login($admin);


        // Redirect ke halaman dashboard atau halaman yang sesuai
        return redirect()->intended('login');
    }
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
