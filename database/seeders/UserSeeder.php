<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Big Boss SMABAH',
            'email' => 'admin@simna.com',
            'password' => bcrypt('adminsimna')
        ]);
        $admin->assignRole('admin');

        //testwali
        $wali = User::create([
            'name' => 'Wali Kelas',
            'email' => 'wali@simna.com',
            'class' => 'MIPA 1',
            'password' => bcrypt('walisimna')
        ]);
        $wali->assignRole('walikelas');
    }
}
