<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginGet()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $success = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($success) {
            $request->session()->regenerate();
            return redirect()->route('home');

        } else {
            return back()->withErrors([
                'email' => 'Email salah.',
                'password' => 'Password salah.',
            ]);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('home');
    }
}
