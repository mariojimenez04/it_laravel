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
        Schema::create('product_detail', function (Blueprint $table) {
            $table->id();
            $table->string('id_detail')->nullable();
            $table->string('title')->nullable();
            $table->string('model')->nullable();
            $table->string('serial_number')->nullable();
            // $table->string('observaciones')->nullable();
            // $table->longText('diagnostico')->nullable();
            $table->longText('comments')->nullable();
            $table->string('sku')->nullable();
            $table->string('details')->nullable();
            // $table->string('size')->nullable();
            $table->string('color')->nullable();
            // $table->string('capacidad')->nullable();
            // $table->string('ram')->nullable();
            $table->int('cantidad')->nullable();
            $table->string('condicion')->nullable();
            $table->boolean('active')->nullable();
            $table->boolean('option_enabled');
            $table->string('edited_by')->nullable();
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
        Schema::dropIfExists('product_detail');
    }
};
