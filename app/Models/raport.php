<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class raport extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'semester',
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
}
