<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role; //roles xd
use Spatie\Permission\Models\Permission; //persmisos lol

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
 
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        // create roles and assign created permissions
        $admin = Role::create(['name' => 'admin']);
        $chofer = Role::create(['name' => 'chofer']);
      
        //crear permisos
        Permission::create(['name' => 'ambos'])->syncRoles([$admin, $chofer]); //ver dashboard
        Permission::create(['name' => 'admin'])->syncRoles([$admin]); //ver dashboard
        Permission::create(['name' => 'chofer'])->syncRoles([$chofer]); //ver dashboard   

         
        
       

     
    }
}




