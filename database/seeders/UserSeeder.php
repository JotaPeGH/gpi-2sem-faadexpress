<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    
        User::create([

        'rut' => '123123321',
        'name' => 'Sin',
        'apellido' => 'Asignar',
        'email' => 'test@admin.cl',
        'password' => bcrypt('12345678'),
        'direccion' => 'Calle sin nombre 123',
        'telefono' => '123456789',
        ])->assignRole('Admin');

        User::create([

            'rut' => '123456789',
            'name' => 'Admin',
            'apellido' => 'Flanders',
            'email' => 'admin@admin.cl',
            'password' => bcrypt('12345678'),
            'direccion' => 'Calle falsa 123',
            'telefono' => '123456789',
        ])->assignRole('Admin');

        User::create([

            'rut' => '987654321',
            'name' => 'Test',
            'apellido' => 'User',
            'email' => 'test@test.cl',
            'password' => bcrypt('12345678'),
            'direccion' => 'Calle falsa 123',
            'telefono' => '123456789',
        ])->assignRole('chofer');

    }
}
