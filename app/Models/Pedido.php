<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Pedido extends Model
{
    use HasFactory;
    use Searchable;

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
       //tablas a buscar
        return [
            'codigo_seguimiento' => $this->codigo_seguimiento,
            // 'destinatario' => $this->destinatario,
        ];
           
    }

    public function precio(){
        return $this->belongsTo(Precio::class,'precio_id');
    }
    public function servicio(){
        return $this->belongsTo(servicio::class,'servicio_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'cliente_id');
    }
    public function vehiculo(){
        return $this->belongsTo(Vehiculo::class,'vehiculo_id');
    }
}
