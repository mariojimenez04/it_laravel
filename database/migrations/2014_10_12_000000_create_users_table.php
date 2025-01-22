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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->unique();
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('name')->nullable();
            $table->boolean('super_user')->nullable();
            $table->boolean('admin')->nullable();
            $table->boolean('supervisor')->nullable();
            $table->boolean('user')->nullable();
            /** accesos para las herramientas generales **/
            $table->boolean('settings')->nullable();
            $table->boolean('register_product')->nullable();
            $table->boolean('delete_product')->nullable();
            $table->boolean('logs')->nullable(); //Este hace referencia a los movimientos de los usuarios
             /** accesos para editar, crear o eliminar usuarios **/
            $table->boolean('create_users')->nullable();
            $table->boolean('edit_users')->nullable();
            $table->boolean('delete_users')->nullable();
            $table->boolean('users_list')->nullable();
            /** accesos para movimientos en los productos **/
            $table->boolean('create_product')->nullable();
            $table->boolean('edit_product')->nullable();
            $table->boolean('delete_product')->nullable();
            /** accesos para movimientos en los inventarios **/
            $table->boolean('inventory')->nullable();
            $table->boolean('edit_inventory')->nullable();
            $table->boolean('delete_inventory')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->string('edit_by')->nullable();
            $table->boolean('option_enabled');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
