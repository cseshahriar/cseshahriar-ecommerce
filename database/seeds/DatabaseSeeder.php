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
        DB::table('categories')->delete(); 

        $this->call([
        	UsersTableSeeder::class,
        	AdminsTableSeeder::class,
            CategoriesTableSeeder::class,
        ]);
    }
}
