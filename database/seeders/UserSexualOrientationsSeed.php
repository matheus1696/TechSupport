<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserSexualOrientationsModel;

class UserSexualOrientationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSexualOrientationsModel::create([
            'no_orientacao_sexual'=>'Masculino',
            'st_orientacao_sexual'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'no_orientacao_sexual'=>'Feminino',
            'st_orientacao_sexual'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'no_orientacao_sexual'=>'Não Definido',
            'st_orientacao_sexual'=>true,
        ]);
    }
}
