<?php

namespace Database\Seeders;

use App\Models\Company\CompanyAttentionLevelsModel;
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
            'acronym'=>'ADM',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Especializada',
            'acronym'=>'ATE',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Básica',
            'acronym'=>'ATB',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Vigilância Epdemiológica',
            'acronym'=>'VEPD',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Vigilância Sanitária',
            'acronym'=>'VSAN',
        ]);
    }
}
