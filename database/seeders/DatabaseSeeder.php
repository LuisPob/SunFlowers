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
        $this->call([UsersTableSeeder::class]);
        $this->call([ChileanDivisionSeeder::class]);
        $this->call(ProductsTableSeeder::class);
        $this->call([PermissionsSeeder::class]);
        $this->call([
            EventSeeder::class
        ]);
    }
}
