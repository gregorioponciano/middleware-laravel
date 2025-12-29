<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StoreLoginController extends Controller
{
    public function storeLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return match (auth()->user()->role) {
                'admin'   => redirect('/admin'),
                'premium' => redirect('/premium'),
                default   => redirect('/user'),
            };
        }

        return back()->withErrors([
            'email' => 'Credenciais inválidas.',
        ]);
    }
}
