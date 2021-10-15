<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directivos', function (Blueprint $table) {
            $table->id();
            $table->string('Titulo');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Ceddula');
            $table->string('Calidad');
            $table->string('Estado');
            $table->string('Entidad');
            $table->string('Cargo');
            $table->string('Celular');
            $table->string('Telefono');
            $table->string('Correo');
            $table->string('Comentarios');
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
        Schema::dropIfExists('directivos');
    }
}
