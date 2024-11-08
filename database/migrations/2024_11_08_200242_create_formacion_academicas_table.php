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
        Schema::create('formacion_academicas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_personal')->constrained('personal');
            $table->string('profesion')->nullable();
            $table->string('colegiatura')->nullable();
            $table->string('maestria')->nullable();
            $table->string('doctorado')->nullable();
            $table->string('universidad')->nullable();
            $table->string('codigo_profesional')->nullable();
            $table->date('fecha_colegiatura')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formacion_academicas');
    }
};
