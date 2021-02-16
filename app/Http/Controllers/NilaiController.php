<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    //
    public function raport()
    {
        $kelas = Auth::user()->class;
        $raports = DB::table('raports')
            ->join('students', 'raports.kode', '=', 'students.kode')
            ->select('raports.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', $kelas)
            ->get();
        return view('content.teacher.raport', compact('raports'));
    }

    public function ujiansekolah()
    {
        $kelas = Auth::user()->class;
        $ujiansekolah = DB::table('ujian_sekolah')
            ->join('students', 'ujian_sekolah.kode', '=', 'students.kode')
            ->select('ujian_sekolah.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', $kelas)
            ->get();
        return view('content.teacher.ujiansekolah', compact('ujiansekolah'));
    }

    public function ujianpraktek()
    {
        $kelas = Auth::user()->class;
        if (($kelas == 'MIPA 1') or ($kelas == 'MIPA 2') or ($kelas == 'MIPA 3') or ($kelas == 'MIPA 4')) {
            $sciences = DB::table('ujian_praktek')
                ->join('students', 'ujian_praktek.kode', '=', 'students.kode')
                ->select('ujian_praktek.*', 'students.nama', 'students.Kelas')
                ->where('students.Kelas', $kelas)
                ->get();
            return view('content.teacher.praktekmipa', compact('sciences'));
        } else {
            $socials = DB::table('ujian_praktek')
                ->join('students', 'ujian_praktek.kode', '=', 'students.kode')
                ->select('ujian_praktek.*', 'students.nama', 'students.Kelas')
                ->where('students.Kelas', $kelas)
                ->get();
            return view('content.teacher.praktekips', compact('socials'));
        }
    }
}
