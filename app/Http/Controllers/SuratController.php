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

    public function DownloadSKHU(Request $request)
    {
        $kelas = Auth::user()->class;
        //nilai raport
        $raportObject = DB::table('raports')
            ->join('students', 'raports.NIS', '=', 'students.NIS')
            ->select(
                DB::raw('avg(raports.agama) as AGM'),
                DB::raw('avg(raports.PPKn) as PKN'),
                DB::raw('avg(raports.bahasa_indonesia) as IND'),
                DB::raw('avg(raports.matematika) as MTK'),
                DB::raw('avg(raports.sejarah_indonesia) as SEJ'),
                DB::raw('avg(raports.bahasa_inggris) as EN'),
                DB::raw('avg(raports.seni_budaya) as SENI'),
                DB::raw('avg(raports.PJOK) as PJOK'),
                DB::raw('avg(raports.PKWU) as PKWU'),
                DB::raw('avg(raports.bahasa_jawa) as JAWA'),
                DB::raw('avg(raports.jurusan1) as J1'),
                DB::raw('avg(raports.jurusan2) as J2'),
                DB::raw('avg(raports.jurusan3) as J3'),
                DB::raw('avg(raports.jurusan4) as J4'),
                DB::raw('avg(raports.peminatan) as PMT')
            )
            ->where('students.NIS', $request->NIS)
            ->first();
        $raport = json_decode(json_encode($raportObject), true);

        //nilai US

        //KKM
        $getKKM = setting::getKKM();
        $KKM = (int)$getKKM;

        //data
        $setting = setting::first();
        $data = student::where('NIS', $request->NIS)->first();
        $mapel = student::getMapel($kelas);
        // dd($mapel);
        return view('content.surat.view-skhu', compact('raport', 'KKM', 'setting', 'data', 'mapel'));
    }
}
