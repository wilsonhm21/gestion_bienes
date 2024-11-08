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
        Schema::create('distritos', function (Blueprint $table) {
            $table->string('id', 6)->unique();  // Código del distrito
            $table->string('name', 45);  // Nombre del distrito
            $table->string('provincia_id', 4);  // Relación con la provincia
            $table->string('departamento_id', 2);  // Relación con el departamento
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distritos');
    }
};
