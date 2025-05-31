<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function prosesLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if (auth()->attempt($request->only('username', 'password'), $request->filled('remember'))) {
            return redirect('/admin/beranda');
        }

        return back()->with(['type' => 'error', 'message' => 'username atau password salah!']);
    }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function prosesRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'password' => 'required|confirmed',
        ]);

        $userData = $request->only('name', 'username');
        $userData['password'] = Hash::make($request->password);

        User::create($userData);

        return redirect()->route('login')->with(['type' => 'success', 'message' => 'Registrasi berhasil, silakan login!']);
    }

    public function prosesLogout()
    {
        Auth::logout();
        return redirect('/')->with(['type' => 'success', 'message' => 'berhasil logout!']);
    }
}
