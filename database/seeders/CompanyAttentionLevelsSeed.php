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
            'title'=>'Administração',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Especializada',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Básica',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Vigilância em Saúde',
        ]);
    }
}
