<?php

// namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illmuniate\Database\Eloquent\Model;
use Database\Seeders;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create()
        Eloquent::unguard();
        $this->call('UsersTablesSeeder::class');
        
    }
}
