<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Laptop ASUS VivoBook',
                'description' => 'Laptop ringan untuk kerja dan kuliah, Intel Core i5, RAM 8GB, SSD 512GB.',
                'price' => 8500000,
                'stock' => 15,
            ],
            [
                'name' => 'Mouse Logitech M331',
                'description' => 'Mouse wireless silent click, ergonomis untuk penggunaan harian.',
                'price' => 185000,
                'stock' => 50,
            ],
            [
                'name' => 'Keyboard Mechanical Keychron K2',
                'description' => 'Keyboard mechanical wireless, switch red, layout 75%.',
                'price' => 1200000,
                'stock' => 20,
            ],
            [
                'name' => 'Monitor LG 24MP400',
                'description' => 'Monitor 24 inci Full HD IPS, cocok untuk desain dan gaming casual.',
                'price' => 1650000,
                'stock' => 12,
            ],
            [
                'name' => 'Headset HyperX Cloud II',
                'description' => 'Headset gaming dengan surround sound 7.1 dan mikrofon noise cancelling.',
                'price' => 950000,
                'stock' => 25,
            ],
            [
                'name' => 'Webcam Logitech C920',
                'description' => 'Webcam Full HD 1080p untuk meeting online dan streaming.',
                'price' => 1100000,
                'stock' => 18,
            ],
            [
                'name' => 'SSD Samsung 870 EVO 1TB',
                'description' => 'Solid state drive SATA 1TB, upgrade storage laptop dan PC.',
                'price' => 1350000,
                'stock' => 30,
            ],
            [
                'name' => 'Router TP-Link Archer C6',
                'description' => 'Router dual band AC1200 untuk rumah dan kantor kecil.',
                'price' => 450000,
                'stock' => 22,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['name' => $product['name']],
                $product
            );
        }
    }
}
