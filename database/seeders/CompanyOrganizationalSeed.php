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
            'no_setor'=>'Prefeitura Municipal de Caruaru',
            'sg_setor'=>'PMC',
            'ft_setor'=>'prefeitura municipal de caruaru',
            'hie_setor'=>'0'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Secretaria de Saúde de Caruaru',
            'sg_setor'=>'SMS',
            'ft_setor'=>'secretaria de saude de caruaru',
            'hie_setor'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Secretaria de Educação de Caruaru',
            'sg_setor'=>'SEDUC',
            'ft_setor'=>'secretaria de educação de caruaru',
            'hie_setor'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Secretaria de Fundação e Cultura de Caruaru',
            'sg_setor'=>'SFCC',
            'ft_setor'=>'secretaria de fundacao e cultura de caruaru',
            'hie_setor'=>'1'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Secretaria Execultiva de Gestão e Planejamento',
            'sg_setor'=>'SEPLAF',
            'ft_setor'=>'secretaria de fundacao e cultura de caruaru',
            'hie_setor'=>'2'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Núcleo de Inteligência da Saúde',
            'sg_setor'=>'NIS',
            'ft_setor'=>'gerência do núcleo de inteligência da saúde',
            'hie_setor'=>'5'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Núcleo de Educação Permanente',
            'sg_setor'=>'NEP',
            'ft_setor'=>'núcleo de educação permanente',
            'hie_setor'=>'6'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Planejamento em Saúde',
            'sg_setor'=>'PLAN',
            'ft_setor'=>'planejamento em saúde',
            'hie_setor'=>'6'
        ]);

        CompanyOrganizationalModel::create([
            'no_setor'=>'Tecnologia da Informação e Comunicação',
            'sg_setor'=>'TIC',
            'ft_setor'=>'tecnologia da informação e comunicação',
            'hie_setor'=>'6'
        ]);

    }
}
