<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'name' => 'Uniclo Kaos',
                'slug' => 'uniclo-kaos',
                'type' => 'Kaos Ringan',
                'description' => 'ini adalah description',
                'price' => 10,
                'quantity' => 100
            ],
            [
                'name' => 'Uniclo Jaket',
                'slug' => 'uniclo-jaket',
                'type' => 'Jaket Kece',
                'description' => 'ini adalah description',
                'price' => 50,
                'quantity' => 40
            ],
            [
                'name' => 'Uniclo Jeans',
                'slug' => 'uniclo-jeans',
                'type' => 'Jeans kasual',
                'description' => 'ini adalah description',
                'price' => 30,
                'quantity' => 60
            ]
        ];

        Product::insert($items);
        \DB::table('Products')->insert($items);
    }
}
