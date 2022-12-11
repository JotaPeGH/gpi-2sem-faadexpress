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
        Schema::create('servicios', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->id()->nullable();
            // $table->date('fecha')->nullable();
            // $table->time('hora')->nullable();
            $table->string('tipo_serv')->nullable();
            $table->string('descripcion')->nullable();
            // $table->bigInteger('tipo_id')->unsigned()->nullable();
            // $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            
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
        Schema::dropIfExists('servicios');
    }
};
