<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->id();
            $table->bigInteger('codigo_seguimiento')->nullable()->unique();
            $table->string('destinatario')->nullable();            
            $table->Integer('peso')->nullable();
            $table->string('descripcion')->nullable();
            $table->string('contacto')->nullable(); //Telefono
            $table->string('email_contacto')->nullable();
            $table->string('estado')->nullable();
            $table->string('origen')->nullable();
            $table->string('destino')->nullable();
            $table->date('fecha_entrega')->nullable();

            $table->bigInteger('vehiculo_id')->unsigned()->nullable();
            $table->foreign('vehiculo_id')->references('id')->on('vehiculos')->onDelete('cascade');

            $table->bigInteger('servicio_id')->unsigned()->nullable();
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');

            $table->bigInteger('precio_id')->unsigned()->nullable();
            $table->foreign('precio_id')->references('id')->on('precios')->onDelete('cascade');

            $table->bigInteger('cliente_id')->unsigned()->nullable();
            $table->foreign('cliente_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
};
