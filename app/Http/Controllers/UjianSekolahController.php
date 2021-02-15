<?php

namespace App\Http\Controllers;

use App\Models\ujianSekolah;
use App\Imports\UjianSekolahImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;


class UjianSekolahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sciences = DB::table('ujian_sekolah')
            ->join('students', 'ujian_sekolah.kode', '=', 'students.kode')
            ->select('ujian_sekolah.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();

        $socials = DB::table('ujian_sekolah')
            ->join('students', 'ujian_sekolah.kode', '=', 'students.kode')
            ->select('ujian_sekolah.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', 'like', 'IPS%')
            ->get();
        return view('content.ujiansekolah', compact('sciences', 'socials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ujianSekolah  $ujianSekolah
     * @return \Illuminate\Http\Response
     */
    public function show(ujianSekolah $ujianSekolah)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ujianSekolah  $ujianSekolah
     * @return \Illuminate\Http\Response
     */
    public function edit(ujianSekolah $ujianSekolah)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ujianSekolah  $ujianSekolah
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ujianSekolah $ujianSekolah)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ujianSekolah  $ujianSekolah
     * @return \Illuminate\Http\Response
     */
    public function destroy(ujianSekolah $ujianSekolah)
    {
        //
    }

    public function resetujiansekolah(Request $request)
    {
        DB::table('ujian_sekolah')->delete();
        return redirect('/ujiansekolah')->with('toast_success', 'Tabel Berhasil direset');
    }

    public function ujiansekolahimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Dataset', $namaFile);

        Excel::import(new UjianSekolahImport, public_path('/Dataset/' . $namaFile));
        return redirect('/ujiansekolah')->with('toast_success', 'Dataset Ujian berhasil di upload');
    }
}
