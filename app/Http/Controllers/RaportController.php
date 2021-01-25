<?php

namespace App\Http\Controllers;

use App\Models\raport;
use App\Imports\RaportImport;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class RaportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sciences = DB::table('raports')
            ->join('students', 'raports.NIS', '=', 'students.NIS')
            ->select('raports.*', 'students.nama')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();

        $socials = DB::table('raports')
            ->join('students', 'raports.NIS', '=', 'students.NIS')
            ->select('raports.*', 'students.nama')
            ->where('students.Kelas', 'like', 'IPS%')
            ->get();
        return view('content.raport', compact('sciences', 'socials'));
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

    public function resetraport(Request $request)
    {
        DB::table('raports')->delete();
        return redirect('/raport')->with('toast_success', 'Tabel Berhasil direset');
    }

    public function raportimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Dataset', $namaFile);

        Excel::import(new RaportImport, public_path('/Dataset/' . $namaFile));
        return redirect('/raport')->with('toast_success', 'Raport berhasil di upload');
    }
}
