<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perfil_estudiante', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuario_id');
            $table->string('movil')->nullable();
            $table->string('profesion')->nullable();
            $table->string('institucion')->nullable();
            $table->boolean('estudia_actualmente')->default(false);
            $table->string('semestre')->nullable();
            $table->string('carrera')->nullable();
            $table->boolean('trabaja_actualmente')->default(false);
            $table->string('nombre_empresa')->nullable();
            $table->boolean('busca_pasantia')->default(false);
            $table->timestamps();

            $table->foreign('usuario_id')->references('id')->on('usuarios')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfil_estudiante');
    }
};
