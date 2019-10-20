<?php

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Create a size attribute
        Brand::create([
            'name'          =>  'Apple',
            'slug'          =>  'apple'
        ]);
    }
}
