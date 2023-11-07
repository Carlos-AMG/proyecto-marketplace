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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('correo')->unique();
            $table->string('password');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('rfc')->notNullValue();
            $table->foreignId('departamento_id')->constrained('departamentos');
            $table->string('puesto');
            $table->foreignId('empleado_id')->constrained('empleados');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
