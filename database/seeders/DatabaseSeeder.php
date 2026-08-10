<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//Add ProductSeeder to use the ProductSeeder to seed the products table
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        // Use the ProductSeeder to seed the products table
        $this->call(ProductSeeder::class);
    }

}
