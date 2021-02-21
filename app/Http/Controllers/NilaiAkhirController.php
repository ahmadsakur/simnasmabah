<?php

namespace App\Http\Controllers;

use App\Models\finalNilai;
use App\Models\raport;
use App\Models\student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NilaiAkhirController extends Controller
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
            DB::table('final_nilai')
            ->join('students', 'final_nilai.kode', '=', 'students.kode')
            ->select('students.nama', 'students.Kelas', 'final_nilai.*')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();
        return view('content.nilaiakhir', compact('finalsciences'));
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
     * @param  \App\Models\finalNilai  $finalNilai
     * @return \Illuminate\Http\Response
     */
    public function show(finalNilai $finalNilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\finalNilai  $finalNilai
     * @return \Illuminate\Http\Response
     */
    public function edit(finalNilai $finalNilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\finalNilai  $finalNilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, finalNilai $finalNilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\finalNilai  $finalNilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(finalNilai $finalNilai)
    {
        //
    }

    public function refreshnilai()
    {
        //reset tabel final_nilai
        DB::table('final_nilai')->delete();

        //Input Nilai ke Tabel
        $siswa = student::get()->toArray();
        $test = 0;
        for ($i = 0; $i < count($siswa); $i++) {
            $id = $siswa[$i]["kode"];

            //raport
            $raportObject = DB::table('raports')
                ->join('students', 'raports.kode', '=', 'students.kode')
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
                ->where('students.kode', $id)
                ->first();
            $raport = json_decode(json_encode($raportObject), true);

            //ujian
            $AGM = finalNilai::getNilai($id, "agama");
            $PKN = finalNilai::getNilai($id, "PPKn");
            $IDN = finalNilai::getNilai($id, "bahasa_indonesia");
            $MTK = finalNilai::getNilai($id, "matematika");
            $SEJ = finalNilai::getNilai($id, "sejarah_indonesia");
            $EN = finalNilai::getNilai($id, "bahasa_inggris");
            $SENI = finalNilai::getNilai($id, "seni_budaya");
            $PJOK = finalNilai::getNilai($id, "PJOK");
            $PKWU = finalNilai::getNilai($id, "PKWU");
            $JAWA = finalNilai::getNilai($id, "bahasa_jawa");
            $J1 = finalNilai::getNilai($id, "jurusan1");
            $J2 = finalNilai::getNilai($id, "jurusan2");
            $J3 = finalNilai::getNilai($id, "jurusan3");
            $J4 = finalNilai::getNilai($id, "jurusan4");
            $PMT = finalNilai::getNilai($id, "peminatan");

            //nilaiakhir
            $nilaiakhir = array(
                'kode' => $id,
                'agama' => round(($AGM + round($raport["AGM"])) / 2),
                'PPKn' => round(($PKN + round($raport["PKN"])) / 2),
                'bahasa_indonesia' => round(($IDN + round($raport["IND"])) / 2),
                'matematika' => round(($MTK + round($raport["MTK"])) / 2),
                'sejarah_indonesia' => round(($SEJ + round($raport["SEJ"])) / 2),
                'bahasa_inggris' => round(($EN + round($raport["EN"])) / 2),
                'seni_budaya' => round(($SENI + round($raport["SENI"])) / 2),
                'PJOK' => round(($PJOK + round($raport["PJOK"])) / 2),
                'PKWU' => round(($PKWU + round($raport["PKWU"])) / 2),
                'bahasa_jawa' => round(($JAWA + round($raport["JAWA"])) / 2),
                'jurusan1' => round(($J1 + round($raport["J1"])) / 2),
                'jurusan2' => round(($J2 + round($raport["J2"])) / 2),
                'jurusan3' => round(($J3 + round($raport["J3"])) / 2),
                'jurusan4' => round(($J4 + round($raport["J4"])) / 2),
                'peminatan' => round(($PMT + round($raport["PMT"])) / 2)
            );

            // dd($nilaiakhir);
            //insert array ke tabel final raport
            finalNilai::insert($nilaiakhir);
        }

        // return ke view
        $finalsciences =
            DB::table('final_nilai')
            ->join('students', 'final_nilai.kode', '=', 'students.kode')
            ->select('students.nama', 'students.Kelas', 'final_nilai.*')
            ->where('students.Kelas', 'like', 'MIPA%')
            ->get();

        return view('content.nilaiakhir', compact('finalsciences'));
    }
}
