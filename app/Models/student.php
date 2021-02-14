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
        'no_surat'
    ];



    public static function getSiswa($id)
    {
        $siswa = student::where('id', $id)->get();
        return $siswa;
    }

    public static function getMapel($kelas)
    {
        $mipa = array("MIPA 1", "MIPA 2", "MIPA 3", "MIPA 4");
        $ips = array("IPS 1", "IPS 2", "IPS 3", "IPS 4");

        if (in_array($kelas, $mipa)) {
            if (in_array($kelas, array('MIPA 1', 'MIPA 2'))) {
                $peminatan = 'minat A';
            } else {
                $peminatan = 'minat B';
            }
            $mapel = array(
                'J1' => 'Matematika',
                'J2' => 'Biologi',
                'J3' => 'Fisika',
                'J4' => 'Kimia',
                'Peminatan' => $peminatan
            );
        } else {
            if (in_array($kelas, array('IPS 1', 'IPS 2'))) {
                $peminatan = 'minat C';
            } else {
                $peminatan = 'minat D';
            }
            $mapel = array(
                'J1' => 'Geografi',
                'J2' => 'Sejarah',
                'J3' => 'Sosiologi',
                'J4' => 'Ekonomi',
                'Peminatan' => $peminatan
            );
        }
        return $mapel;
    }
}
