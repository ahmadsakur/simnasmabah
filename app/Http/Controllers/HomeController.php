<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\student;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        $chart = DB::table('raports')
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
                DB::raw('avg(raports.jurusan1) as MTK2'),
                DB::raw('avg(raports.jurusan2) as BIO'),
                DB::raw('avg(raports.jurusan3) as FIS'),
                DB::raw('avg(raports.jurusan4) as KIM'),
                DB::raw('avg(raports.peminatan) as PMT')
            )
            ->where('students.Kelas', 'like', 'MIPA%')
            ->first();

        $A1 = DB::table('students')
            ->where('Kelas', 'MIPA 1')->count();
        $A2 = DB::table('students')
            ->where('Kelas', 'MIPA 2')->count();
        $A3 = DB::table('students')
            ->where('Kelas', 'MIPA 3')->count();
        $A4 = DB::table('students')
            ->where('Kelas', 'MIPA 4')->count();
        $S1 = DB::table('students')
            ->where('Kelas', 'IPS 1')->count();
        $S2 = DB::table('students')
            ->where('Kelas', 'IPS 2')->count();
        $S3 = DB::table('students')
            ->where('Kelas', 'IPS 3')->count();
        $S4 = DB::table('students')
            ->where('Kelas', 'IPS 4')->count();
        $student = array($A1, $A2, $A3, $A4, $S1, $S2, $S3, $S4);
        $settings = setting::first();
        return view('content/adminhome', compact('settings', 'chart', 'student'));
    }

    public function updateAdmin(Request $request)
    {

        User::where('id', $request["id"])->update([
            'name' => $request["name"],
            'email' => $request["email"],
            'password' => Hash::make($request["password"])
        ]);
        return redirect('/adminpanel')->with('toast_info', 'Data Berhasil diubah');;
    }

    public function updateChart($id)
    {
        $toggler = DB::table('raports')
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
                DB::raw('avg(raports.jurusan1) as MTK2'),
                DB::raw('avg(raports.jurusan2) as BIO'),
                DB::raw('avg(raports.jurusan3) as FIS'),
                DB::raw('avg(raports.jurusan4) as KIM'),
                DB::raw('avg(raports.peminatan) as PMT')
            )
            ->where('students.Kelas', 'like', $id . '%')
            ->first();
        return response()->json($toggler);
    }
    //download
    public function datasetsiswa()
    {
        return Storage::download('public/template/Dataset Siswa.xlsx');
    }

    public function datasetraport()
    {
        return Storage::download('public/template/Dataset Raport.xlsx');
    }

    public function datasetUS()
    {
        return Storage::download('public/template/Dataset US.xlsx');
    }

    public function datasetUP()
    {
        return Storage::download('public/template/Dataset UP.xlsx');
    }


    public function walikelas()
    {
        // if (Auth::user()->hasRole('admin')) {
        //     return redirect()->route('adminpanel');
        // }
        return view('content/teacherhome');
    }

    public function datasiswa()
    {

        $kelas = Auth::user()->class;
        $students = student::where('Kelas', $kelas)->get();
        // dd($kelas);
        return view('content.teacher.datasiswa', compact('students'));
    }

    public function teacherChart()
    {
        $kelas = Auth::user()->class;

        $raportkelas = DB::table('raports')
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
            ->where('students.Kelas', $kelas)
            ->first();
        // dd($raportkelas);
        return response()->json($raportkelas);
    }

    public function updateGuru(Request $request)
    {

        User::where('id', $request["id"])->update([
            'name' => $request["name"],
            'email' => $request["email"],
            'password' => Hash::make($request["password"])
        ]);
        return redirect('/dashboard')->with('toast_info', 'Data Berhasil diubah');;
    }
}
