<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombres', 30);
            $table->string('apellidos', 50);
            $table->string('telefono', 20);
            $table->string('correo', 20);
            $table->string('contraseña', 100);
            $table->string('especialidad', 20)->nulltable()->default(null);
            $table->enum('rol', ['Doctor','Administrador','Recepcion']);
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
        Schema::dropIfExists('usuarios');
    }
}
