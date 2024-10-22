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
    Schema::create('clases', function (Blueprint $table) {
        $table->id();
        $table->string('nombre_clase', 50);
        $table->foreignId('grupo_id')->constrained('grupos')->onDelete('cascade');
        $table->foreignId('instructor_id')->nullable()->constrained('instructores')->onDelete('set null');
        $table->string('ubicacion', 50)->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('clases');
}

};
