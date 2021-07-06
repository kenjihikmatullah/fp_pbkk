<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models;
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
        Product::insert([
            [
                'name' => 'Gantungan Kunci',
                'price' => 120000,
                'description' => 'Gantungan kunci yang BMW banget.',
                'weight' => 200,
                'stock' => 10
            ],
            [
                'name' => 'Gantungan Baju',
                'price' => 320000,
                'description' => 'Gantungan baju yang kerennya sekeren mobil BMW.',
                'weight' => 400,
                'stock' => 20
            ],
            [
                'name' => 'Topi',
                'price' => 531000,
                'description' => 'Bikin kamu dikira punya BMW',
                'weight' => 100,
                'stock' => 20
            ]
        ]);
    }
}
