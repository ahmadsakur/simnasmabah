<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ujianSekolah extends Model
{
    use HasFactory;
    protected $table = 'ujian_sekolah';

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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
    ];

    public static function getNilai($kode)
    {
        $US = ujianSekolah::where('kode', $kode)->first()->toArray();
        return $US;
    }
}
