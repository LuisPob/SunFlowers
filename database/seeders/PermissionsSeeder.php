<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use App\Models\User;

class PermissionsSeeder extends Seeder
{
    public function run()
    {
        Permission::create(['name'=>'acceder panel']);
    
        Permission::create(['name'=>'ver usuario']);
        Permission::create(['name'=>'ingresar usuario']);
        Permission::create(['name'=>'eliminar usuario']);
        Permission::create(['name'=>'asignar roles usuario']);

        $role = Role::create(['name' => 'administrador']);
        $permission = Permission::create(['name' => 'ver todo']);
        
        $role->givePermissionTo($permission); // dale al rol administrador el permiso de ver informacion rapida
        
        // $role = Role::create(['name' => 'cliente']);
        
        Permission::create(['name' => 'ver productos']);
        Role::create(['name'=>'cliente'])->syncPermissions(['ver productos','acceder panel']);

        // $role->givePermissionTo($permission); // dale al rol administrador el permiso de ver informacion rapida

        $user = User::where('email', 'admin@argon.com')->first();
        $user2 = User::where('email', 'cliente@argon.com')->first();
        // $user->assignRole( 'administrador', 'cliente' );
        $user->assignRole( 'administrador' );
        $user2->assignRole( 'cliente' );
    }
}