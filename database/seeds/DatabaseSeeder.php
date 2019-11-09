<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adib',
            'email' => 'adib.rahim07@gmail.com',
            'password' => bcrypt('password'),
        ]);
       
    
        DB::table('users')->insert([
            'name' => 'Amir',
            'email' => 'amir@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}

