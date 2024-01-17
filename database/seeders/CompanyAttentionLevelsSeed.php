<?php

namespace Database\Seeders;

use App\Models\Company\CompanyAttentionLevelsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyAttentionLevelsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyAttentionLevelsModel::create([
            'no_nivel_atencao'=>'Administração',
        ]);

        CompanyAttentionLevelsModel::create([
            'no_nivel_atencao'=>'Atenção Especializada',
        ]);

        CompanyAttentionLevelsModel::create([
            'no_nivel_atencao'=>'Atenção Básica',
        ]);

        CompanyAttentionLevelsModel::create([
            'no_nivel_atencao'=>'Vigilância em Saúde',
        ]);
    }
}
