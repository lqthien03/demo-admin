<?php

namespace App\Http\Controllers;

use App\Models\Mail;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $total = Mail::count();
        return view('dashboard', compact('total'));
    }
}
