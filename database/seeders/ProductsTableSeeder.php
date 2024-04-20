<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
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
            'nombre' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'detalle' => '15 pulgadas, 1TB HDD, 32GB RAM',
            'precio' => 2499.99,
            'costo_envio' => 29.99,
            'descripcion' => 'MackBook Pro',
            'categoria_id' => 1,
            'marca_id' => 1,
            'image_path' => 'macbook-pro.png'
        ]);

        Product::create([
            'nombre' => 'Dell Vostro 3557',
            'slug' => 'vostro-3557',
            'detalle' => '15 pulgadas, 1TB HDD, 8GB RAM',
            'precio' => 1499.99,
            'costo_envio' => 19.99,
            'descripcion' => 'Dell Vostro 3557',
            'categoria_id' => 1,
            'marca_id' => 2,
            'image_path' => 'dell-v3557.png'
        ]);

        Product::create([
            'nombre' => 'iPhone 11 Pro',
            'slug' => 'iphone-11-pro',
            'detalle' => '6.1 pulgadas, 64GB 4GB RAM',
            'precio' => 649.99,
            'costo_envio' => 14.99,
            'descripcion' => 'iPhone 11 Pro',
            'categoria_id' => 2,
            'marca_id' => 1,
            'image_path' => 'iphone-11-pro.png'
        ]);

        Product::create([
            'nombre' => 'Remax 610D Headset',
            'slug' => 'remax-610d',
            'detalle' => '6.1 pulgadas, 64GB 4GB RAM',
            'precio' => 8.99,
            'costo_envio' => 1.89,
            'descripcion' => 'Remax 610D Headset',
            'categoria_id' => 3,
            'marca_id' => 3,
            'image_path' => 'remax-610d.jpg'
        ]);

        Product::create([
            'nombre' => 'Samsung LED TV',
            'slug' => 'samsung-led-24',
            'detalle' => '24 pulgadas, LED Display, Resolución 1366 x 768',
            'precio' => 41.99,
            'costo_envio' => 12.59,
            'descripcion' => 'Samsung LED TV',
            'categoria_id' => 4,
            'marca_id' => 4,
            'image_path' => 'samsung-led-24.png'
        ]);

        Product::create([
            'nombre' => 'Samsung Camara Digital',
            'slug' => 'samsung-mv800',
            'detalle' => '16.1MP, 5x Optical Zoom',
            'precio' => 144.99,
            'costo_envio' => 13.39,
            'descripcion' => 'Samsung Digital Camera',
            'categoria_id' => 5,
            'marca_id' => 4,
            'image_path' => 'samsung-mv800.jpg'
        ]);

        Product::create([
            'nombre' => 'Huawei GR 5 2017',
            'slug' => 'gr5-2017',
            'detalle' => '5.5 pulgadas, 32GB 4GB RAM',
            'precio' => 148.99,
            'costo_envio' => 6.79,
            'descripcion' => 'Huawei GR 5 2017',
            'categoria_id' => 2,
            'marca_id' => 5,
            'image_path' => 'gr5-2017.jpg'
        ]);

    }
}
