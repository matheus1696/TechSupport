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
            'attention_level'=>'Administração',
        ]);

        CompanyAttentionLevelsModel::create([
            'attention_level'=>'Atenção Especializada',
        ]);

        CompanyAttentionLevelsModel::create([
            'attention_level'=>'Atenção Básica',
        ]);

        CompanyAttentionLevelsModel::create([
            'attention_level'=>'Vigilância em Saúde',
        ]);
    }
}
