<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // Index page for dashboard
    public function index()
    {
        return view('dashboard');
    }
}
