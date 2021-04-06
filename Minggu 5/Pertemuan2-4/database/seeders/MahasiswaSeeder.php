<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\DB as FacadesDB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    FacadesDB::table('mahasiswa')->insert([
            'name' => 'Randy Rahmawan',
            'alamat' => 'Perumahan Kodim',
            'jenis_kelamin' => 1,
            'prodi' => 1,
            'no_hp' => "089621878375" 
        ]);
    }
}
