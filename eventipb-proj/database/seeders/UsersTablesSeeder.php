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
            'email_user'        =>  'emailadmin1@gmail.com',
            'password_user'    =>  'passadmin1',
            'nama_user'         =>  'Admin 1',
            'level'             =>  'admin',
        ]);
    }
}
