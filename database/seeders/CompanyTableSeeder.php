<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::create([
            'company_name' => 'Sunflower',
            'color_primary' => '#fdd367',
            'color_secondary' => '#bcd797',
            'phone' => 956103084,
            'email' => 'sunflowerstore.c@gmail.com',
            'logo' => 'ICONO_SINFONDO.png',
            'region_id' => 8,
            // 'province_id' => 8,
            // 'commune_id' => 8,
        ]);
    }
}
