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
            'color'=>'bg-success',
            'acronym'=>'ADM',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Especializada',
            'color'=>'bg-danger',
            'acronym'=>'ATE',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Atenção Básica',
            'color'=>'bg-primary',
            'acronym'=>'ATB',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Vigilância Epdemiológica',
            'color'=>'bg-success',
            'acronym'=>'VEPD',
        ]);

        CompanyAttentionLevelsModel::create([
            'title'=>'Vigilância Sanitária',
            'color'=>'bg-success',
            'acronym'=>'VSAN',
        ]);
    }
}
