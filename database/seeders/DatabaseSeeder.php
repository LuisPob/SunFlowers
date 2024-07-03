<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([TipoEventosSeeder::class]);
        $this->call([ChileanDivisionSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([PermissionsSeeder::class]);
        $this->call(TipoProductosTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call([CompanyTableSeeder::class]);
        $this->call([EventSeeder::class]);
        $this->call([FooterTitleSeed::class]);
    }
}
