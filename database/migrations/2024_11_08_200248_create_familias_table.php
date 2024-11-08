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
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_personal')->constrained('personal');
            $table->string('nombre_padre')->nullable();
            $table->string('nombre_madre')->nullable();
            $table->integer('numero_hijos')->default(0);
            $table->integer('cantidad_hijos_menores')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('familias');
    }
};
