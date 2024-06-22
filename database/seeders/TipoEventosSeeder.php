<?php

namespace Database\Seeders;

use App\Models\TypeEvent;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TipoEventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeEvent::create([
            'nombre' => 'Oferta',
        ]);

        TypeEvent::create([
            'nombre' => 'Cyberday',
        ]);

    }
}
