<?php

namespace Database\Seeders;

use App\Models\User\UserSexModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSexSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSexModel::create([
            'sex'=>'Masculino',
            'status'=>true,
        ]);

        UserSexModel::create([
            'sex'=>'Feminino',
            'status'=>true,
        ]);

        UserSexModel::create([
            'sex'=>'Não Definido',
            'status'=>true,
        ]);
    }
}
