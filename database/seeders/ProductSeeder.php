<?php

namespace Database\Seeders;
use App\model\Product;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
        

    public function run(): void
    {
    //    Product::insert([
    //         'name' => Str::random(10),
    //         'price' => 10000000,
    //         'image' => Hash::make('image.jpg'),
    //         'description' => str::random(100),
    // ]) ;
        Product::factory(10)->create();
    }
}
