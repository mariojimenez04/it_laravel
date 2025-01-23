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
        Schema::create('doctors ', function (Blueprint $table) {
            $table->id();
            $table->string('doctor')->nullable();
            $table->string('full_name')->nullable();
            $table->string('specialty')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('series');
    }
};
