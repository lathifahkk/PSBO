<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'email'             =>  'emailadmin2@gmail.com',
            'password'          =>  Hash::make('eaeaea'),
            'nama_user'         =>  'Admin 2',
            'level'             =>  'admin',
        ]);
    }
}
