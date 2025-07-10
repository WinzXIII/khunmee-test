<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $products = [
            ['name' => 'Product A'],
            ['name' => 'Product B'],
            ['name' => 'Product C'],
            ['name' => 'Product D'],
            ['name' => 'Product E'],
        ];

        foreach ($products as $item) {
            Product::create($item);
        }
    }
}
