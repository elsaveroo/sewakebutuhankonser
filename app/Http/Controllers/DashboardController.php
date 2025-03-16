<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $user = "Elsa"; // Bisa diganti dengan nama pengguna yang sebenarnya
        return view('dashboard', compact('user'));
    }
}