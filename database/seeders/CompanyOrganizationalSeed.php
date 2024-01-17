<?php

namespace Database\Seeders;

use App\Models\Company\CompanyOrganizationalModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyOrganizationalSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyOrganizationalModel::create([
            'title'=>'Prefeitura Municipal de Caruaru',
            'acronym'=>'PMC',
            'filter'=>'prefeitura municipal de caruaru',
            'hierarchy'=>'0'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Secretaria de Saúde de Caruaru',
            'acronym'=>'SMS',
            'filter'=>'secretaria de saude de caruaru',
            'hierarchy'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Secretaria de Educação de Caruaru',
            'acronym'=>'SEDUC',
            'filter'=>'secretaria de educação de caruaru',
            'hierarchy'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Secretaria de Fundação e Cultura de Caruaru',
            'acronym'=>'SFCC',
            'filter'=>'secretaria de fundacao e cultura de caruaru',
            'hierarchy'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Secretaria Execultiva de Gestão e Planejamento',
            'acronym'=>'SEPLAF',
            'filter'=>'secretaria de fundacao e cultura de caruaru',
            'hierarchy'=>'2'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Núcleo de Inteligência da Saúde',
            'acronym'=>'NIS',
            'filter'=>'gerência do núcleo de inteligência da saúde',
            'hierarchy'=>'5'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Núcleo de Educação Permanente',
            'acronym'=>'NEP',
            'filter'=>'núcleo de educação permanente',
            'hierarchy'=>'6'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Planejamento em Saúde',
            'acronym'=>'PLAN',
            'filter'=>'planejamento em saúde',
            'hierarchy'=>'6'
        ]);

        CompanyOrganizationalModel::create([
            'title'=>'Tecnologia da Informação e Comunicação',
            'acronym'=>'TIC',
            'filter'=>'tecnologia da informação e comunicação',
            'hierarchy'=>'6'
        ]);

    }
}
