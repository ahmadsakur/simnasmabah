<?php

namespace App\Http\Controllers;

use App\Models\finalRaport;
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
            DB::table('final_raport')
            ->join('students', 'final_raport.NIS', '=', 'students.NIS')
            ->select('students.nama', 'students.Kelas', 'final_raport.*')
            ->where('students.Kelas', 'like', 'MIPA%')
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

    public function refreshraport()
    {
        //hapus tabel
        DB::table('final_raport')->delete();

        //buat query agregat
        $agregat = DB::table('raports')
            ->select(
                'NIS',
                DB::raw('avg(raports.agama) as agama'),
                DB::raw('avg(raports.PPKn) as PPKn'),
                DB::raw('avg(raports.bahasa_indonesia) as bahasa_indonesia'),
                DB::raw('avg(raports.matematika) as matematika'),
                DB::raw('avg(raports.sejarah_indonesia) as sejarah_indonesia'),
                DB::raw('avg(raports.bahasa_inggris) as bahasa_inggris'),
                DB::raw('avg(raports.seni_budaya) as seni_budaya'),
                DB::raw('avg(raports.PJOK) as PJOK'),
                DB::raw('avg(raports.PKWU) as PKWU'),
                DB::raw('avg(raports.bahasa_jawa) as bahasa_jawa'),
                DB::raw('avg(raports.jurusan1) as jurusan1'),
                DB::raw('avg(raports.jurusan2) as jurusan2'),
                DB::raw('avg(raports.jurusan3) as jurusan3'),
                DB::raw('avg(raports.jurusan4) as jurusan4'),
                DB::raw('avg(raports.peminatan) as peminatan')
            )
            ->groupBy('NIS')
            ->get();

        // $query = (array) $agregat;
        $query = json_decode(json_encode($agregat), true);

        //insert ke tabel final raport
        finalRaport::insert($query);

        //return ke view
        $finalsciences =
            DB::table('final_raport')
            ->join('students', 'final_raport.NIS', '=', 'students.NIS')
            ->select('students.nama', 'students.Kelas', 'final_raport.*')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();
        return view('content.finalraport', compact('finalsciences'));
    }
}
