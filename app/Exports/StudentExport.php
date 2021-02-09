<?php

namespace App\Exports;

use App\Models\student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;


class StudentExport implements FromCollection, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return student::all();
    }

    //fungsi mapping
    public function map($student): array
    {
        return [
            $student->nama,
            $student->TTL,
            $student->NIS,
            $student->NISN,
            $student->Kelas,
            $student->no_peserta,
            $student->wali_murid,
            $student->no_surat
        ];
    }

    //fungsi heading
    public function headings(): array
    {
        return [
            'Nama Lengkap',
            'TTL',
            'NIS',
            'NISN',
            'Kelas',
            'No Peserta',
            'Wali Murid',
            'No Surat'
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function (AfterSheet $event) {
                $event->sheet->getStyle('A1:H1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ]
                ]);
            }

        ];
    }
}
