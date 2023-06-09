<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('idUsuario');
            $table->string('nombre', 50 );
            $table->string('apellido', 50 );
            $table->integer('cedula');
            $table->string('genero', 10 );
            $table->string('telefono');
            $table->string('correo', 50 ) -> unique();
            $table->date('fecha');
            $table->string('puesto', 80 );
            $table->string('imagen' )->nullable();
            $table->text('biografia');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
