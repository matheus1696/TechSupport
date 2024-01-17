<?php

namespace Database\Seeders;

use App\Models\User\UserSexualOrientationsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSexualOrientationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        UserSexualOrientationsModel::create([
            'title'=>'Masculino',
            'status'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'title'=>'Feminino',
            'status'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'title'=>'Não Definido',
            'status'=>true,
        ]);
    }
}
