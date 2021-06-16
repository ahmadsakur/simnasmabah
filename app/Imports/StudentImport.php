<?php

namespace App\Imports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Throwable;


class StudentImport implements ToModel, WithHeadingRow, WithValidation
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
            'kode'      => $row['kode'],
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

    public function rules(): array
    {
        return[
            '*' =>['required'],
            '*.kode' => ['unique:students']
        ];
    }
}
