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
        Schema::create('contactos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_personal')->constrained('personal');
            $table->string('celular_personal');
            $table->string('otro_celular')->nullable();
            $table->string('direccion_domicilio');
            $table->string('ciudad_domicilio');
            $table->string('direccion_trabajo_domicilio')->nullable();
            $table->string('ciudad_trabajo_domicilio')->nullable();
            $table->string('email_institucional')->nullable();
            $table->string('email_personal')->nullable();
            $table->string('dni')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contactos');
    }
};
