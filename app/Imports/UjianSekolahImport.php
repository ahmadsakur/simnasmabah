<?php

namespace App\Imports;

use App\Models\ujianSekolah;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UjianSekolahImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ujianSekolah([
            'kode'   => $row['kode'],
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
            'jurusan1'  => $row['mtk_geo'],
            'jurusan2'  => $row['bio_sej'],
            'jurusan3'  => $row['fis_sos'],
            'jurusan4'  => $row['kim_eko'],
            'peminatan' => $row['peminatan'],
        ]);
    }

    public function rules(): array
    {
        return[
            '*' =>['required'],
            '*.kode' => ['unique:ujian_sekolah']
        ];
    }
}
