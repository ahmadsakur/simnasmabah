<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {

        return view('layouts/adminpanel');
    }
    public function walikelas()
    {
        if (Auth::user()->hasRole('admin')) {
            return redirect()->route('adminpanel');
        }
        return view('layouts/dashboard');
    }
}
