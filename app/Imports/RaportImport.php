<?php

namespace App\Imports;

use App\Models\raport;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RaportImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        // return new raport([
        //     'NIS'   => $row[0],
        //     'semester'  => $row[1],
        //     'agama' => $row[2],
        //     'PPKn'  => $row[3],
        //     'bahasa_indonesia'  => $row[4],
        //     'matematika'    => $row[5],
        //     'sejarah_indonesia' => $row[6],
        //     'bahasa_inggris'    => $row[7],
        //     'seni_budaya'   => $row[8],
        //     'PJOK'  => $row[9],
        //     'PKWU'  => $row[10],
        //     'bahasa_jawa'   => $row[11],
        //     'jurusan1'  => $row[12],
        //     'jurusan2'  => $row[13],
        //     'jurusan3'  => $row[14],
        //     'jurusan4'  => $row[15],
        //     'peminatan' => $row[16],
        // ]);

        return new raport([
            'NIS'   => $row['kode'],
            'semester'  => $row['semester'],
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
