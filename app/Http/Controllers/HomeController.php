<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        $settings = setting::first();
        // dd($settings->id);
        return view('content/adminhome', compact('settings'));
    }

    public function updateAdmin(Request $request)
    {

        User::where('id', $request["id"])->update([
            'name' => $request["name"],
            'email' => $request["email"],
            'password' => Hash::make($request["password"])
        ]);
        return redirect('/adminpanel')->with('toast_info', 'Data Berhasil diubah');;
    }

    public function walikelas()
    {
        // if (Auth::user()->hasRole('admin')) {
        //     return redirect()->route('adminpanel');
        // }
        return view('content/teacherhome');
    }
}
