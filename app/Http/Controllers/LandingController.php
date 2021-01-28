<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingController extends Controller
{
    public function home()
    {
        $user = Auth::user();
        if (Auth::check()) {
            // The user is logged in...
            if ($user->hasRole('admin')) {
                return redirect()->route('adminpanel');
            }
            return redirect()->route('teacherpanel');
        } else {
            return view('home');
        }
    }
}
