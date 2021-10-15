<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsocajasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asocajas', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre');
            $table->string('Departamento');
            $table->string('Director');
            $table->string('Telefono');
            $table->string('Direccion');
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
        Schema::dropIfExists('asocajas');
    }
}
