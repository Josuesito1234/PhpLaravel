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
        Schema::create('docente', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombre', 255)->nullable(false);
            $table->string('Apellido', 255)->nullable(false);
            $table->string('Correo', 255)->unique()->nullable(false);
            $table->string('Password', 255)->unique()->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente');
    }
};