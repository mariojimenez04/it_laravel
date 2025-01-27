<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    //Seeder funciona para crear nuestros parametros fijos, en este caso va a ser para el usuario
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Crear el seeder
        DB::table('users')->insert([
            'user_id' => '000001',
            'email' => 'superusuario@admin.com',
            'password' => Hash::make('*superusuario'),
            'name' => 'SPERUSER',
            'super_user' => 1,
            'admin' => 1,
            'supervisor' => 1,
            'user' => 1,
            'settings' => 1,
            'register_product' => 1,
            'delete_product' => 1,
            'logs' => 1,
            'create_users' => 1,
            'edit_users' => 1,
            'delete_users' => 1,
            'users_list' => 1,
            'create_product' => 1,
            'edit_product' => 1,
            'delete_product' => 1,
            'inventory' => 1,
            'edit_inventory' => 1,
            'delete_inventory' => 1,
            'edit_by' => 'admin',
            'option_enabled' => 1,
        ]);
    }
}
