<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Administrador de Sistema',
            'filter'=>strtolower('Administrador de Sistema'),
            'email'=>'sysadmin@gest360.com.br',
            'contact_1'=>'81993632860',
            'contact_2'=>'81993632860',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('sysadmin'),
        ])->givePermissionTo('bidding','user','admin','sysadmin');

        User::create([
            'name'=>'Administrador',
            'filter'=>strtolower('Administrador'),
            'email'=>'admin@gest360.com.br',
            'contact_1'=>'81993632860',
            'contact_2'=>'81993632860',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('admin'),
        ])->givePermissionTo('user','admin');

        User::create([
            'name'=>'Usuário',
            'filter'=>strtolower('Usuário'),
            'email'=>'user@gest360.com.br',
            'contact_1'=>'81993632860',
            'contact_2'=>'81993632860',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('user'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Verificar Email',
            'filter'=>strtolower('Verificar Email'),
            'email'=>'ve@gest360.com.br',
            'contact_1'=>'81993632860',
            'contact_2'=>'81993632860',
            'birthday'=>'2024-01-18',
            'password'=> Hash::make('verificar'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Processos Licitatórios',
            'filter'=>strtolower('Processos Licitatórios'),
            'email'=>'bidding@gest360.com.br',
            'contact_1'=>'81993632860',
            'contact_2'=>'81993632860',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('bidding'),
        ])->givePermissionTo('bidding');
    }
}
