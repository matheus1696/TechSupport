<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Administrador de Sistema',
            'filter'=>strtolower('Administrador de Sistema'),
            'email'=>'sysadmin@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'1990-12-31',
            'email_verified_at'=>now(),
            'password'=> Hash::make('sysadmin'),
        ])->givePermissionTo('dashboard','supply','user','admin','sysadmin');

        User::create([
            'name'=>'Administrador',
            'filter'=>strtolower('Administrador'),
            'email'=>'admin@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'1990-12-31',
            'email_verified_at'=>now(),
            'password'=> Hash::make('admin'),
        ])->givePermissionTo('dashboard','supply','user','admin');

        User::create([
            'name'=>'Usuário',
            'filter'=>strtolower('Usuário'),
            'email'=>'user@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'1990-12-31',
            'email_verified_at'=>now(),
            'password'=> Hash::make('user'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Verificar Email',
            'filter'=>strtolower('Verificar Email'),
            'email'=>'ve@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'1990-12-31',
            'password'=> Hash::make('verificar'),
        ])->givePermissionTo('user');

        User::create([
            'name'=>'Processos Licitatórios',
            'filter'=>strtolower('Processos Licitatórios'),
            'email'=>'supply@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('supply'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');

        User::create([
            'name'=>'Compra Direta',
            'filter'=>strtolower('compra direta'),
            'email'=>'compra.direta@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('compra'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');

        User::create([
            'name'=>'Fiscal Titular 1',
            'filter'=>strtolower('fiscal titular'),
            'email'=>'fiscal.ti.titular@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('fiscal'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');

        User::create([
            'name'=>'Fiscal Suplente 2',
            'filter'=>strtolower('fiscal suplente'),
            'email'=>'fiscal.ti.suplente@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('fiscal'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');

        User::create([
            'name'=>'Fiscal Titular 2',
            'filter'=>strtolower('fiscal titular'),
            'email'=>'fiscal.adm.titular@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('fiscal'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');
        
        User::create([
            'name'=>'Fiscal Suplente 2',
            'filter'=>strtolower('fiscal suplente'),
            'email'=>'fiscal.adm.suplente@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('fiscal'),
            'cpf'=>'999.999.999-99',
            'registration'=>'99.999-9',
        ])->givePermissionTo('supply','user');

        User::create([
            'name'=>'Dashboard',
            'filter'=>strtolower('dashboard'),
            'email'=>'dashboard@techsupport.com.br',
            'contact_1'=>'(81) 0000-0000',
            'contact_2'=>'(81) 0000-0000',
            'birthday'=>'2024-01-18',
            'email_verified_at'=>now(),
            'password'=> Hash::make('dashboard'),
        ])->givePermissionTo('dashboard','user');
    }
}
