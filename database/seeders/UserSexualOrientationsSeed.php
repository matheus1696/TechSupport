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
            'sexual_orientation'=>'Masculino',
            'status'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'sexual_orientation'=>'Feminino',
            'status'=>true,
        ]);

        UserSexualOrientationsModel::create([
            'sexual_orientation'=>'Não Definido',
            'status'=>true,
        ]);
    }
}
