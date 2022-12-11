<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Vehiculo;
use Illuminate\Support\Str;

class VehiculoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vehiculo::create([
            
            'patente' => 'Sin Asignar',
            'marca' => 'Toyota',
            'tipo' => 'Camioneta',
            'modelo' => 'Corolla',
            'annio' => '2022',
            
        ]);
    }
}
