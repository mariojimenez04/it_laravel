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
        Schema::create('title_warehouse', function (Blueprint $table) {
            $table->id();
            $table->string('id_warehouse')->nullable()->unique();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->string('edit_by');
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
        Schema::dropIfExists('title_warehouse');
    }
};
