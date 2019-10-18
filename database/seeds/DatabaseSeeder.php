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
        DB::table('users')->delete();
        DB::table('admins')->delete(); 

        $this->call([
        	UsersTableSeeder::class,
        	AdminsTableSeeder::class
        ]);
    }
}
