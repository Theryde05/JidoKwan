<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('grupo_estudiante', function (Blueprint $table) {
        $table->foreignId('estudiante_id')->constrained('estudiantes')->onDelete('cascade');
        $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');
        $table->string('estado', 30);
        $table->primary(['estudiante_id', 'grupo_id']);
    });
}

public function down()
{
    Schema::dropIfExists('grupo_estudiante');
}

};
