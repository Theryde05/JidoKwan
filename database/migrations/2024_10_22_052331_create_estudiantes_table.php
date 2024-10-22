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
    Schema::create('estudiantes', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 50);
        $table->string('apellido', 50);
        $table->date('fecha_nacimiento')->nullable();
        $table->foreignId('grupo_id')->nullable()->constrained('grupos')->onDelete('set null');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('estudiantes');
}

};
