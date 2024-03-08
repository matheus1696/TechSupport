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
            'color'=>'bg-green-600',
            'acronym'=>'ADM',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Atenção Especializada',
            'color'=>'bg-red-600',
            'acronym'=>'ATE',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Atenção Básica',
            'color'=>'bg-blue-600',
            'acronym'=>'ATB',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Vigilância Epdemiológica',
            'color'=>'bg-green-600',
            'acronym'=>'VEPD',
        ]);

        CompanyFinancialBlocksModel::create([
            'title'=>'Vigilância Sanitária',
            'color'=>'bg-green-600',
            'acronym'=>'VSAN',
        ]);
    }
}
