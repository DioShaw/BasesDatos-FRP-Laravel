<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeampombosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teampombos', function (Blueprint $table) {
            $table->id();
            $table->String('Nombres');
            $table->String('Apellidos');
            $table->String('Celular');
            $table->String('Correo');
            $table->String('Cargo');
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
        Schema::dropIfExists('teampombos');
    }
}
