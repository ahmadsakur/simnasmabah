<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'TTL',
        'NIS',
        'NISN',
        'Kelas',
        'no_peserta',
        'wali_murid',
    ];



    public static function getSiswa($id)
    {
        $siswa = student::where('id', $id)->get();
        return $siswa;
    }
}
