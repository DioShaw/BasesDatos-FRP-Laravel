<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatrociniosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patrocinios', function (Blueprint $table) {
            $table->id();
            $table->string('Empresa');
            $table->string('Nombre');
            $table->string('Cargo');
            $table->string('Tema');
            $table->string('Contacto');
            $table->string('Correo');
            $table->string('Telefono');
            $table->string('Direccion');
            $table->string('Presentacion');

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
        Schema::dropIfExists('patrocinios');
    }
}
