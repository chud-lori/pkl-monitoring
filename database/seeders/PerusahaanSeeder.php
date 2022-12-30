<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PerusahaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('perusahaans')->insert([
            'nama' => 'google',
            'npwp' => 'npwpaja',
            'alamat' => 'jogja',
        ]);

        DB::table('perusahaans')->insert([
            'nama' => 'facebook',
            'npwp' => 'npwpfb',
            'alamat' => 'solo',
        ]);
    }
}
