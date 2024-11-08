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
        Schema::create('sedes', function (Blueprint $table) {
            $table->id(); // Identificador único
            $table->string('nombre_sede'); // Nombre de la sede
            $table->foreignId('id_zona')   // Relación con la tabla zonas
            ->constrained('zonas')
            ->onDelete('cascade');      // Cuando se borra una zona, las sedes asociadas también se borran
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sedes');
    }
};
