<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PegawaiSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 15; $i++) {
        DB::table('pegawai')->insert(
            [
                'nama' => 'Kiana',
                'jabatan' => 'Siswa',
                'alamat' => 'Dempel',
                'tgl_lahir' => '2006-07-25',
            ]

            );
        }
    } 
} 
