<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PembimbingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pembimbings')->insert([
            'nama' => 'ismi',
            'email' => 'ismi@mail.com',
            'password' => Hash::make('123'),
            'nip' => 'nipaja',
        ]);
    }
}
