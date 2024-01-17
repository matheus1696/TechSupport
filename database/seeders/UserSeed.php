<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Administrador de Sistema',
            'email'=>'sysadmin@gest360.com.br',
            'email_verified_at'=>now(),
            'password'=> Hash::make('sysadmin'),
        ])->givePermissionTo('user','admin','sysadmin');

        User::create([
            'name'=>'Administrador',
            'email'=>'admin@gest360.com.br',
            'email_verified_at'=>now(),
            'password'=> Hash::make('admin'),
        ])->givePermissionTo('user','admin');

        User::create([
            'name'=>'Usuário',
            'email'=>'user@gest360.com.br',
            'email_verified_at'=>now(),
            'password'=> Hash::make('user'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Verificar Email',
            'email'=>'ve@gest360.com.br',
            'password'=> Hash::make('verificar'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Processos Licitatórios',
            'email'=>'bidding@gest360.com.br',
            'email_verified_at'=>now(),
            'password'=> Hash::make('bidding'),
        ])->givePermissionTo('bidding');
    }
}
