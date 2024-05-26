<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Collar Con Margaritas',
            'slug' => 'macbook-pro',
            'details' => 'Hermoso Collar con Margaritas',
            'quantity' => 3,
            'price' => 3500,
            'shipping_cost' => 0,
            'description' => 'Collar Con Margaritas',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'numero1.png'
        ]);

        Product::create([
            'name' => 'Aritos Margarita',
            'slug' => 'Aritos Margaritas',
            'details' => 'Hermosos Aros Con Margaritas',
            'quantity' => 3,
            'price' => 2500,
            'shipping_cost' => 0,
            'description' => 'Aros Con Margaritas',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'numero2.jpg'
        ]);

        Product::create([
            'name' => 'Collar Con Estrella',
            'slug' => 'Collar Con Estrella',
            'details' => 'Hermoso Collar Con Estrella',
            'quantity' => 3,
            'price' => 4000,
            'shipping_cost' => 0,
            'description' => 'Collar Con Estrella',
            'category_id' => 2,
            'brand_id' => 1,
            'image_path' => 'numero3.jpg'
        ]);

        Product::create([
            'name' => 'Pulsera De Margaritas',
            'slug' => 'Pulsera De Margaritas',
            'details' => 'Pulsera De Margaritas',
            'quantity' => 3,
            'price' => 3500,
            'shipping_cost' => 0,
            'description' => 'Pulsera De Margaritas',
            'category_id' => 3,
            'brand_id' => 3,
            'image_path' => 'numero4.jpg'
        ]);

        Product::create([
            'name' => 'Collar De Perlas ',
            'slug' => 'Collar De Perlas ',
            'details' => 'Collar De Perlas Y Cuentas De Arcilla',
            'quantity' => 3,
            'price' => 5000,
            'shipping_cost' => 0,
            'description' => 'Collar De Perlas ',
            'category_id' => 4,
            'brand_id' => 4,
            'image_path' => 'numero5.jpg'
        ]);

        Product::create([
            'name' => 'Pulcera De Flores',
            'slug' => 'Pulcera De Flores',
            'details' => 'Pulcera De Flores',
            'quantity' => 3,
            'price' => 3500,
            'shipping_cost' => 0,
            'description' => 'Pulcera De Flores',
            'category_id' => 5,
            'brand_id' => 4,
            'image_path' => 'numero6.jpg'
        ]);

        Product::create([
            'name' => 'Collar De Perlas',
            'slug' => 'Collar De Perlas',
            'details' => 'Collar De Perlas',
            'quantity' => 3,
            'price' => 4500,
            'shipping_cost' => 0,
            'description' => 'Collar De Perlas',
            'category_id' => 5,
            'brand_id' => 5,
            'image_path' => 'numero7.jpg'
        ]);


    }
}
