<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDF;


class SuratController extends Controller
{
    public function SKHU()
    {

        $kelas = Auth::user()->class;
        $skhu = student::where('Kelas', $kelas)->orderBy('nama')->get();
        return view('content.teacher.skhu', compact('skhu'));
    }

    public function SKLU()
    {
        $kelas = Auth::user()->class;
        $sklu = student::where('Kelas', $kelas)->orderBy('NIS')->get();
        return view('content.teacher.sklu', compact('sklu'));
    }

    public function DownloadSKLU($NIS)
    {
        //loadview
        $setting = setting::first();
        $data = student::where('NIS', $NIS)->first();
        return view('content.surat.view-sklu', compact('data', 'setting'));
    }

    public function DownloadSKHU($NIS)
    {
        $setting = setting::first();
        $data = student::where('NIS', $NIS)->first();
        return view('content.surat.view-skhu', compact('data', 'setting'));
    }
}
