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
        if (!Schema::hasTable('fichajes')) {
            Schema::create('fichajes', function (Blueprint $table) {
                $table->id('id_fichaje');
                $table->unsignedBigInteger('id_usuario');
                $table->enum('tipo_fichaje', ['entrada', 'salida', 'inicio_descanso', 'fin_descanso']);
                $table->date('fecha');
                $table->time('hora');
                $table->string('ubicacion', 255)->nullable();
                $table->foreign('id_usuario')->references('id_usuario')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fichajes');
    }
};
