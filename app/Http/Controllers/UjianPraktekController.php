<?php

namespace App\Http\Controllers;

use App\Imports\UjianPraktekImport;
use App\Models\ujianPraktek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class UjianPraktekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sciences = DB::table('ujian_praktek')
            ->join('students', 'ujian_praktek.NIS', '=', 'students.NIS')
            ->select('ujian_praktek.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();

        $socials = DB::table('ujian_praktek')
            ->join('students', 'ujian_praktek.NIS', '=', 'students.NIS')
            ->select('ujian_praktek.*', 'students.nama', 'students.Kelas')
            ->where('students.Kelas', 'like', 'IPS%')
            ->get();
        return view('content.ujianpraktek', compact('sciences', 'socials'));
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
     * @param  \App\Models\ujianPraktek  $ujianPraktek
     * @return \Illuminate\Http\Response
     */
    public function show(ujianPraktek $ujianPraktek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ujianPraktek  $ujianPraktek
     * @return \Illuminate\Http\Response
     */
    public function edit(ujianPraktek $ujianPraktek)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ujianPraktek  $ujianPraktek
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ujianPraktek $ujianPraktek)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ujianPraktek  $ujianPraktek
     * @return \Illuminate\Http\Response
     */
    public function destroy(ujianPraktek $ujianPraktek)
    {
        //
    }

    public function resetujianpraktek(Request $request)
    {
        DB::table('ujian_sekolah')->delete();
        return redirect('/ujianpraktek')->with('toast_success', 'Tabel Berhasil direset');
    }

    public function ujianpraktekimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Dataset', $namaFile);

        Excel::import(new UjianPraktekImport, public_path('/Dataset/' . $namaFile));
        return redirect('/ujianpraktek')->with('toast_success', 'Dataset Ujian berhasil di upload');
    }
}
