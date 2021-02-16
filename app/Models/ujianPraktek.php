<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ujianPraktek extends Model
{
    use HasFactory;
    protected $table = 'ujian_praktek';

    protected $fillable = [
        'kode',
        'agama',
        'PPKn',
        'bahasa_indonesia',
        'matematika',
        'sejarah_indonesia',
        'bahasa_inggris',
        'seni_budaya',
        'PJOK',
        'PKWU',
        'bahasa_jawa',
        'jurusan1',
        'jurusan2',
        'jurusan3',
        'jurusan4',
        'peminatan',
    ];

    public static function getNilai($kode)
    {
        $UP = ujianPraktek::where('kode', $kode)->first()->toArray();
        return $UP;
    }
}
