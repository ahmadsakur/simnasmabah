<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\ToModel;

class StudentImport implements ToModel
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
            'nama'      => $row[1],
            'TTL'       => $row[2],
            'NIS'       => $row[3],
            'NISN'      => $row[4],
            'Kelas'     => $row[5],
            'no_peserta'      => $row[6],
            'wali_murid'      => $row[7],
        ]);
    }
}
