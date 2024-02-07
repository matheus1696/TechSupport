<?php

namespace Database\Seeders;

use App\Models\Company\CompanyFinancialBlocksModel;
use Illuminate\Database\Seeder;

class CompanyFinancialBlocksSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyFinancialBlocksModel::create([
            'title'=>'Administração',
            'color'=>'bg-success',
            'acronym'=>'ADM',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Atenção Especializada',
            'color'=>'bg-danger',
            'acronym'=>'ATE',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Atenção Básica',
            'color'=>'bg-primary',
            'acronym'=>'ATB',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Vigilância Epdemiológica',
            'color'=>'bg-success',
            'acronym'=>'VEPD',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Vigilância Sanitária',
            'color'=>'bg-success',
            'acronym'=>'VSAN',
        ]);
    }
}
