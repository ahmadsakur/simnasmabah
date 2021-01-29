<?php

namespace App\Imports;

use App\Models\ujianSekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UjianSekolahImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ujianSekolah([
            'NIS'   => $row['kode'],
            'agama' => $row['agama'],
            'PPKn'  => $row['ppkn'],
            'bahasa_indonesia'  => $row['bahasa_indonesia'],
            'matematika'    => $row['matematika'],
            'sejarah_indonesia' => $row['sejarah_indonesia'],
            'bahasa_inggris'    => $row['bahasa_inggris'],
            'seni_budaya'   => $row['seni_budaya'],
            'PJOK'  => $row['pjok'],
            'PKWU'  => $row['pkwu'],
            'bahasa_jawa'   => $row['bahasa_jawa'],
            'jurusan1'  => $row['jurusan1'],
            'jurusan2'  => $row['jurusan2'],
            'jurusan3'  => $row['jurusan3'],
            'jurusan4'  => $row['jurusan4'],
            'peminatan' => $row['peminatan'],
        ]);
    }
}
