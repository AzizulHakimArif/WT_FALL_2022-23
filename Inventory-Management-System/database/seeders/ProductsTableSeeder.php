<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // Assuming your Product model is in the App\Models namespace

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name' => 'Product 1',
            'quantity' => 10,
            'price' => 100.00
        ]);

        Product::create([
            'name' => 'Product 2',
            'quantity' => 50,
            'price' => 200.00
        ]);

        Product::create([
            'name' => 'Product 3',
            'quantity' => 25,
            'price' => 300.00
        ]);
    }
}
