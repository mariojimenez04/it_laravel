<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_embarques', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->nullable();
            $table->string('descripcion')->nullable();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('modificado_por');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_titulo_embarques');
    }
};
