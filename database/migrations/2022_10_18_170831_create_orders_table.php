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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('orderId')->nullable();
            $table->integer('patientId')->nullable();
            $table->integer('doctorId')->nullable();
            $table->date('request_date')->nullable();
            $table->string('status')->nullable();
            $table->longText('coments')->nullable();
            $table->string('edit_by')->nullable();
            $table->boolean('option_enabled');
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
        Schema::dropIfExists('orders');
    }
};
