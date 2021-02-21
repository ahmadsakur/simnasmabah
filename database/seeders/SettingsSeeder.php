<?php

namespace Database\Seeders;

use App\Models\setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        setting::create([
            'tahun' => '2020',
            'KKM' => '70',
            'presentase_US' => '60',
            'presentase_UP' => '40',
            'kepala_sekolah' => 'Ahmad Sakur',
            'NIP' => '24060118120030',
            'tgl_pleno' => '2020-05-01',
            'tgl_SKHU' => '2020-06-01',
            'tgl_SKLU' => '2020-07-01',

        ]);
    }
}
