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
            'color_tertiary' => '#A67B5B',
            'phone' => 956103084,
            'email' => 'sunflowerstore.c@gmail.com',
            'logo' => 'logos/ICONO_SINFONDO.png',
            'region_id' => 11,
            'province_id' => 38,
            'commune_id' => 219,
        ]);
    }
}
