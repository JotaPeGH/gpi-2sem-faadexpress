<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Servicio;


class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Servicio::create([
            
            'tipo_serv' => 'Servicio Ligero',
            'descripcion' => 'Tipo de servcio menor a 50 Kg de peso - Este servicio es para envios de paquetes, documentos, etc. - 
            El envio será realizado por un motociclista.',
            
            
        ]);
        Servicio::create([
            
            'tipo_serv' => 'Servicio Pesado',
            'descripcion' => 'Tipo de servcio mayor a 50 Kg. de peso - 
            Este servicio es para envios de gran cantidad de paquetes, cajas, muebles, etc. - 
            El envio será realizado por una camioneta.',
            
            
        ]);
        
    }


}
