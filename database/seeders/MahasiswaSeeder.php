<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswas')->insert([
            'nama' => 'Ronaldi Subastian',
            'nim' => '14190016',
            'jeniskelamin' => 'laki-laki',
            'prodi' => 'SI'
        ]);
    }
}
