<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SuratController extends Controller
{
    public function SKHU()
    {

        return view('content.teacher.skhu');
    }

    public function SKLU()
    {
        return view('content.teacher.sklu');
    }
}
