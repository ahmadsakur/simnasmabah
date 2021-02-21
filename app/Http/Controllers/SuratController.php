<?php

namespace App\Http\Controllers;

use App\Models\finalNilai;
use App\Models\setting;
use App\Models\student;
use App\Models\ujianPraktek;
use App\Models\ujianSekolah;
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

    public function DownloadSKLU(Request $request)
    {
        //loadview
        $id = $request->kode;
        $setting = setting::first();
        $data = student::where('kode', $id)->first();

        //olah nilai
        $KKM = $setting->KKM;
        $persenUS = $setting->presentase_US;
        $persenUP = $setting->presentase_UP;


        //nilai raport
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

        //nilai akhir
        $US = ujianSekolah::getNilai($id);
        $UP = ujianPraktek::getNilai($id);



        //assign nilai
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

        $nilaiakhir = array(
            'AGM' => round(($AGM + round($raport["AGM"])) / 2),
            'PKN' => round(($PKN + round($raport["PKN"])) / 2),
            'IDN' => round(($IDN + round($raport["IND"])) / 2),
            'MTK' => round(($MTK + round($raport["MTK"])) / 2),
            'SEJ' => round(($SEJ + round($raport["SEJ"])) / 2),
            'EN' => round(($EN + round($raport["EN"])) / 2),
            'SENI' => round(($SENI + round($raport["SENI"])) / 2),
            'PJOK' => round(($PJOK + round($raport["PJOK"])) / 2),
            'PKWU' => round(($PKWU + round($raport["PKWU"])) / 2),
            'JAWA' => round(($JAWA + round($raport["JAWA"])) / 2),
            'J1' => round(($J1 + round($raport["J1"])) / 2),
            'J2' => round(($J2 + round($raport["J2"])) / 2),
            'J3' => round(($J3 + round($raport["J3"])) / 2),
            'J4' => round(($J4 + round($raport["J4"])) / 2),
            'PMT' => round(($PMT + round($raport["PMT"])) / 2)
        );

        $rataRata = array_sum($nilaiakhir) / count($nilaiakhir);


        //get status
        if ($rataRata < $KKM) {
            $status = 'TIDAK LULUS';
        } else {
            $status = 'LULUS';
        }
        // dd($status);
        return view('content.surat.view-sklu', compact('data', 'setting', 'status'));
    }


    public function DownloadSKHU(Request $request)
    {

        //data
        $id = $request->kode;
        $kelas = Auth::user()->class;
        $setting = setting::first();
        $data = student::where('kode', $id)->first();
        $mapel = student::getMapel($kelas);
        $KKM = $setting->KKM;
        $persenUS = $setting->presentase_US;
        $persenUP = $setting->presentase_UP;


        //nilai raport
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

        //nilai akhir
        $US = ujianSekolah::getNilai($id);
        $UP = ujianPraktek::getNilai($id);



        //assign nilai
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

        $nilaiakhir = array(
            'AGM' => round(($AGM + round($raport["AGM"])) / 2),
            'PKN' => round(($PKN + round($raport["PKN"])) / 2),
            'IDN' => round(($IDN + round($raport["IND"])) / 2),
            'MTK' => round(($MTK + round($raport["MTK"])) / 2),
            'SEJ' => round(($SEJ + round($raport["SEJ"])) / 2),
            'EN' => round(($EN + round($raport["EN"])) / 2),
            'SENI' => round(($SENI + round($raport["SENI"])) / 2),
            'PJOK' => round(($PJOK + round($raport["PJOK"])) / 2),
            'PKWU' => round(($PKWU + round($raport["PKWU"])) / 2),
            'JAWA' => round(($JAWA + round($raport["JAWA"])) / 2),
            'J1' => round(($J1 + round($raport["J1"])) / 2),
            'J2' => round(($J2 + round($raport["J2"])) / 2),
            'J3' => round(($J3 + round($raport["J3"])) / 2),
            'J4' => round(($J4 + round($raport["J4"])) / 2),
            'PMT' => round(($PMT + round($raport["PMT"])) / 2)
        );
        // dd($nilaiakhir);
        return view('content.surat.view-skhu', compact('raport', 'nilaiakhir', 'KKM', 'setting', 'data', 'mapel'));
    }
}
