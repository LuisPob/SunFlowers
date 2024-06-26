<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'phone' => 987564221,
            'password' => bcrypt('secret'),
            'address' => 'golondrinas 144, Lima, Peru',
            'email_verified_at' => now()
        ]);
        DB::table('users')->insert([
            'username' => 'cliente',
            'firstname' => 'Cliente',
            'lastname' => 'Cliente',
            'email' => 'cliente@argon.com',
            'phone' => 987564123,
            'password' => bcrypt('secret'),
            'address' => 'golondrinas 200, Lima, Peru',
            'email_verified_at' => now()
        ]);
        
    }
}
