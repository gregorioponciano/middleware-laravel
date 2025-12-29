<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function user()
    {
        return view('user.dashboard');
    }

    public function premium()
    {
        return view('premium.dashboard');
    }

    public function admin()
    {
        return view('admin.dashboard');
    }
}
