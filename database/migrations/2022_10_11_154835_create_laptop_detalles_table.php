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
        Schema::create('laptop_detalles', function (Blueprint $table) {
            $table->id();
            $table->string('id_detalle')->nullable();
            $table->string('modelo')->nullable();
            $table->string('numero_serie')->nullable()->unique();
            $table->longText('diagnostico')->nullable();
            $table->longText('acciones')->nullable();
            $table->string('procesador')->nullable();
            $table->string('tamano')->nullable();
            $table->string('color')->nullable();
            $table->string('capacidad')->nullable();
            $table->string('ram')->nullable();
            $table->string('cantidad')->nullable();
            $table->string('status')->nullable();
            $table->string('observaciones')->nullable();
            $table->boolean('entregado')->nullable();
            // $table->foreignId('titulo_embarques_id')->constrained('titulo_embarques', 'id')->nullOnDelete('set null');
            $table->string('modificado_por')->nullable();
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
        Schema::dropIfExists('laptop_detalles');
    }
};