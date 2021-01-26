<?php

namespace App\Http\Controllers;

use App\Models\raport;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class FinalRaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $finalsciences =
            DB::table('raports')
            ->join('students', 'raports.NIS', '=', 'students.NIS')
            ->select(
                'students.nama as Nama',
                'students.Kelas as Kelas',
                DB::raw('avg(raports.agama) as AGAMA'),
                DB::raw('avg(raports.PPKn) as PPKN'),
                DB::raw('avg(raports.bahasa_indonesia) as INDO'),
                DB::raw('avg(raports.matematika) as MTK'),
                DB::raw('avg(raports.sejarah_indonesia) as SEJARAH'),
                DB::raw('avg(raports.bahasa_inggris) as EN'),
                DB::raw('avg(raports.seni_budaya) as SENI'),
                DB::raw('avg(raports.PJOK) as PJOK'),
                DB::raw('avg(raports.PKWU) as PKWU'),
                DB::raw('avg(raports.bahasa_jawa) as JAWA'),
                DB::raw('avg(raports.jurusan1) as MTK2'),
                DB::raw('avg(raports.jurusan2) as BIO'),
                DB::raw('avg(raports.jurusan3) as FIS'),
                DB::raw('avg(raports.jurusan4) as KIM'),
                DB::raw('avg(raports.peminatan) as PEMINATAN')
            )
            ->where('Kelas', 'like', 'MIPA%')
            ->groupBy('Nama', 'Kelas')
            ->get();
        return view('content.finalraport', compact('finalsciences'));
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
     * @param  \App\Models\raport  $raport
     * @return \Illuminate\Http\Response
     */
    public function show(raport $raport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\raport  $raport
     * @return \Illuminate\Http\Response
     */
    public function edit(raport $raport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\raport  $raport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, raport $raport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\raport  $raport
     * @return \Illuminate\Http\Response
     */
    public function destroy(raport $raport)
    {
        //
    }
}
