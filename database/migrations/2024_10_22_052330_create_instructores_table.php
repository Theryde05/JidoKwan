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
    Schema::create('instructores', function (Blueprint $table) {
        $table->id();
        $table->string('nombre', 50);
        $table->string('apellido', 50);
        $table->string('telefono', 15)->nullable();
        $table->string('email', 100)->nullable();
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('instructores');
}

};
