<?php

namespace App\Http\Controllers;

use App\Exports\StudentExport;
use App\Imports\StudentImport;
use App\Models\student;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = student::get();
        return view('content.siswa', compact('students'));
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
        $validator = Validator::make($request->all(), [
            "kode" => 'unique:students',
            "NIS" => 'unique:students',
            "NISN" => 'unique:students',
            "no_peserta" => 'unique:students',
            "no_surat" => 'unique:students'
        ]);

        if ($validator->fails()) {
            return redirect('/siswa')->with('toast_error', 'Data Unique tidak boleh sama!');
        }
        
        student::create([
            "kode" => $request["kode"],
            "nama" => $request["nama"],
            "no_surat" => $request["surat"],
            "TTL" => $request["TTL"],
            "NIS" => $request["NIS"],
            "NISN" => $request["NISN"],
            "Kelas" => $request["kelas"],
            "no_peserta" => $request["noPeserta"],
            "wali_murid" => $request["walimurid"],

        ]);

        return redirect('/siswa')->with('toast_success', 'Siswa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = student::getSiswa($id);
        return response()->json($siswa);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // $validator = Validator::make($request->all(), [
        //     "kode" => 'unique:students',
        //     "NIS" => 'unique:students',
        //     "NISN" => 'unique:students',
        //     "no_peserta" => 'unique:students',
        //     "no_surat" => 'unique:students'
        // ]);

        $validator = Validator::make($request->all(), [
            "kode" => Rule::unique('students')->ignore($request->id),
            "NIS" => Rule::unique('students')->ignore($request->id),
            "NISN" => Rule::unique('students')->ignore($request->id),
            "no_peserta" => Rule::unique('students')->ignore($request->id),
            "no_surat" => Rule::unique('students')->ignore($request->id)
        ]);


        if ($validator->fails()) {
            return redirect('/siswa')->with('toast_error', 'Data Unique tidak boleh sama!');
        }
        student::where('id', $request["id"])->update([
            'id' => $request["id"],
            'nama' => $request["nama"],
            'NIS' => $request["NIS"],
            'NISN' => $request["NISN"],
            'TTL' => $request["TTL"],
            'Kelas' => $request["kelas"],
            'wali_murid' => $request["walimurid"],
            'no_Peserta' => $request["noPeserta"],
            'no_surat' => $request["surat"],
        ]);
        return redirect('/siswa')->with('toast_info', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        student::where('id', $request["id"])->delete();
        return redirect('/siswa')->with('toast_success', 'Siswa Berhasil dihapus');
    }
    public function resetsiswa(Request $request)
    {
        DB::table('students')->delete();
        return redirect('/siswa')->with('toast_success', 'Tabel Berhasil direset');
    }

    public function studentexport()
    {
        return Excel::download(new StudentExport, 'Laporan Data Siswa.xlsx');
    }
    public function studentimport(Request $request)
    {
        $file = $request->file('file');
        $namaFile = $file->getClientOriginalName();
        $file->move('Dataset', $namaFile);

        Excel::import(new StudentImport, public_path('/Dataset/' . $namaFile));
        return redirect('/siswa')->with('toast_success', 'Data Berhasil diUpload');
    }
}
