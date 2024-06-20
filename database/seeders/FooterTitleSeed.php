<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class FooterTitleSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $one = DB::table('footer_titles')->insertGetId([
            'title' => '🌻SOBRE SUNFLOWER',
        ]);

        DB::table('footer_contents')->insert([
            'footer_title_id' => $one,
            'content' => '📍 Talcahuano, Region del BioBio, Chile. En nuestro universo de bisutería, cada pieza es más que un simple accesorio; es una manifestación de arte y creatividad, diseñada para realzar tu belleza interior y exterior, recordándote que la elegancia y el estilo pueden ser parte de tu día a día.',
        ]);

        $two = DB::table('footer_titles')->insertGetId([
            'title' => '🦋CONTACTO',
        ]);

        DB::table('footer_contents')->insert([
            [
                'footer_title_id' => $two,
                'content' => 'Whatsapp',
                'link' => 'https://wa.me/56956103084',
            ],
            [
                'footer_title_id' => $two,
                'content' => 'Correo',
                'link' => 'mailto:florencia.sanzana.ortega@gmail.com',
            ],
        ]
        );

        $three = DB::table('footer_titles')->insertGetId([
            'title' => '🌻INFORMACIÓN',
        ]);

        DB::table('footer_contents')->insert([
            [
                'footer_title_id' => $three,
                'content' => 'Tienda Online',
                'link' => '#',
            ],
            [
                'footer_title_id' => $three,
                'content' => 'Team Sunflower',
                'link' => '#',
            ],
            [
                'footer_title_id' => $three,
                'content' => 'Plazos Despachos',
                'link' => '#',
            ],
            [
                'footer_title_id' => $three,
                'content' => 'Condiciones Despachos',
                'link' => '#',
            ],
            [
                'footer_title_id' => $three,
                'content' => 'Políticas de Cambios y Devoluciones',
                'link' => '#',
            ]
        ]
        );

        $four = DB::table('footer_titles')->insertGetId([
            'title' => '🦋¿ERES TEAM SUNFLOWER? ¡REGISTRATE!',
        ]);

        DB::table('footer_contents')->insert([
            [
                'footer_title_id' => $four,
                'content' => '¡Registrate para que estemos en contacto y podamos compartir la mejor información, tips, sorpresas, descuentos, lanzamientos y más!',
                'link' => '#',
            ],
        ]
        );

    }
}
