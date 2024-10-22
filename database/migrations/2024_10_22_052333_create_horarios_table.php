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
    Schema::create('horarios', function (Blueprint $table) {
        $table->id();
        $table->foreignId('clase_id')->constrained('clases')->onDelete('cascade');
        $table->string('dia', 20);
        $table->time('hora_inicio');
        $table->time('hora_fin');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('horarios');
}

};
