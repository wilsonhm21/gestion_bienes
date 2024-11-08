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
        Schema::create('personals', function (Blueprint $table) {
            $table->id();
            $table->string('apellidos_nombres');
            $table->string('cargo')->nullable();
            $table->foreignId('id_jefe_inmediato')->nullable()->constrained('personal');
            $table->foreignId('id_zona')->constrained('zonas');
            $table->foreignId('id_sede')->constrained('sedes');
            $table->foreignId('id_local')->constrained('locales');
            $table->date('fecha_ingreso');
            $table->date('fecha_reingreso')->nullable();
            $table->date('fecha_ultimo_cambio')->nullable();
            $table->date('fecha_cese')->nullable();
            $table->string('tipo_contrato')->nullable();
            $table->string('modalidad_contrato')->nullable();
            $table->string('reg_lab')->nullable();
            $table->string('sistema')->nullable();
            $table->string('grupo_ocupacional')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
};
