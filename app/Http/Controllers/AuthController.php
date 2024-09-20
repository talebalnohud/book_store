<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function showLogin() {

        return view('auth.login');
    }
    public function login(Request $request){
        // return view('admin.books');
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $date = $request->only('email','password');

        Auth::attempt($date);

        if ( Auth::attempt($date)) {
            $request->session()->regenerate();

            return redirect()->route('books.index');
        }

        return redirect()->back()->with('error', 'حدث خطأ');
    }
}
