<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WaliKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employees = User::get()->skip(1);
        return view('content.walikelas', compact('employees'));
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
            "name" => 'required',
            "email" => 'required|unique:users',
            "class" => 'required',
            "password" => 'required'
        ]);

        if ($validator->fails()) {
            return redirect('/guru')->with('toast_error', 'Email Sudah digunakan!');
        }

        $insertQ = User::create([
            "name" => $request["name"],
            "email" => $request["email"],
            "class" => $request["class"],
            "password" => Hash::make($request["password"])
        ]);
        $insertQ->assignRole('walikelas');

        return redirect('/guru')->with('toast_success', 'Wali Kelas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = User::getGuru($id);
        return response()->json($guru);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        // $validator = Validator::make($request->all(), [
        //     "name" => 'required',
        //     "email" => 'required|unique:users',
        //     "class" => 'required',
        //     "password" => 'required'
        // ]);

        // if ($validator->fails()) {
        //     return redirect('/guru')->with('toast_error', 'Email Sudah digunakan!');
        // }

        if($request->filled('password')){
            User::where('id', $request["id"])->update([
                'name' => $request["name"],
                'email' => $request["email"],
                'class' => $request["class"],
                'password' => Hash::make($request["password"])
            ]);
        } else{
            User::where('id', $request["id"])->update([
                'name' => $request["name"],
                'email' => $request["email"],
                'class' => $request["class"],
            ]);
        }

        return redirect('/guru')->with('toast_info', 'Data Berhasil diubah');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        User::where('id', $request["id"])->delete();
        return redirect('/guru')->with('toast_success', 'Wali Kelas Berhasil dihapus');;
    }
}
