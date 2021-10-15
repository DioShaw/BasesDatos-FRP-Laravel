<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

       Schema::create('colegios', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Nit');
            $table->string('Calidad');
            $table->string('Director');
            $table->string('Contacto');
            $table->string('Telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->string('Ciudad');
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
        Schema::dropIfExists('colegios');
    }
}
