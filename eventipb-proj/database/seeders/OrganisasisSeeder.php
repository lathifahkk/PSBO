<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class OrganisasisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('organisasis')->insert([
            'email'             =>  'bemfasilkom@gmail.com',
            'password'          =>  Hash::make('fasilkom'),
            'nama_organisasi'   =>  'BEM Fasilkom IPB',
            'tingkat'           =>  'Fakultas',
        ]);
    }
}
