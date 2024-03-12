<?php

namespace Database\Seeders;

use App\Models\Company\CompanyFinancialBlocks;
use Illuminate\Database\Seeder;

class CompanyFinancialBlocksSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyFinancialBlocks::create([
            'title'=>'Administração',
            'color'=>'bg-green-600',
            'acronym'=>'ADM',
        ]);

        CompanyFinancialBlocks::create([
            'title'=>'Atenção Especializada',
            'color'=>'bg-red-600',
            'acronym'=>'ATE',
        ]);

        CompanyFinancialBlocks::create([
            'title'=>'Atenção Básica',
            'color'=>'bg-blue-600',
            'acronym'=>'ATB',
        ]);

        CompanyFinancialBlocks::create([
            'title'=>'Vigilância Epdemiológica',
            'color'=>'bg-green-600',
            'acronym'=>'VEPD',
        ]);

        CompanyFinancialBlocks::create([
            'title'=>'Vigilância Sanitária',
            'color'=>'bg-green-600',
            'acronym'=>'VSAN',
        ]);
    }
}
