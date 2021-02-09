<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {

        return new student([
            //
            'nama'      => $row['nama_lengkap'],
            'TTL'       => $row['ttl'],
            'NIS'       => $row['nis'],
            'NISN'      => $row['nisn'],
            'Kelas'     => $row['kelas'],
            'no_peserta'      => $row['no_peserta'],
            'wali_murid'      => $row['wali_murid'],
            'no_surat' => $row['no_surat'],
        ]);
    }
}
