<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilboArtistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('filbo_artistas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Perfil');
            $table->string('Organizacion');
            $table->string('Agenda');
            $table->string('Telefono');
            $table->string('Correo');
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
        Schema::dropIfExists('filbo_artistas');
    }
}
