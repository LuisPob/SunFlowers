<?php

namespace Database\Seeders;

use App\Models\TipoProducto;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipoProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoProducto::create([
            'name' => 'Collar',
        ]);

        TipoProducto::create([
            'name' => 'Pulsera',
        ]);

        TipoProducto::create([
            'name' => 'Tobillera',
        ]);
        
        TipoProducto::create([
            'name' => 'Aros',
        ]); 

    }
}
