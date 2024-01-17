<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\RegionStatesModel;

class RegionStatesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RegionStatesModel::create([
            'id'=>26,
            'sg_estado'=>'PE',
            'no_estado'=>'Pernambuco',
            'ft_estado'=>'pernambuco',
            'cod_estado_uf'=>'26',
            'cod_ddd_estado'=>'81',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>12,
            'sg_estado'=>'AC',
            'no_estado'=>'Acre',
            'ft_estado'=>'acre',
            'cod_estado_uf'=>'12',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>27,
            'sg_estado'=>'AL',
            'no_estado'=>'Alagoas',
            'ft_estado'=>'alagoas',
            'cod_estado_uf'=>'27',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>16,
            'sg_estado'=>'AP',
            'no_estado'=>'Amapá',
            'ft_estado'=>'amapá',
            'cod_estado_uf'=>'16',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>13,
            'sg_estado'=>'AM',
            'no_estado'=>'Amazonas',
            'ft_estado'=>'amazonas',
            'cod_estado_uf'=>'13',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>29,
            'sg_estado'=>'BA',
            'no_estado'=>'Bahia',
            'ft_estado'=>'bahia',
            'cod_estado_uf'=>'29',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>23,
            'sg_estado'=>'CE',
            'no_estado'=>'Ceará',
            'ft_estado'=>'ceára',
            'cod_estado_uf'=>'23',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>32,
            'sg_estado'=>'ES',
            'no_estado'=>'Espirito Santo',
            'ft_estado'=>'espirito santo',
            'cod_estado_uf'=>'32',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>52,
            'sg_estado'=>'GO',
            'no_estado'=>'Goías',
            'ft_estado'=>'goías',
            'cod_estado_uf'=>'52',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>21,
            'sg_estado'=>'MA',
            'no_estado'=>'Maranhão',
            'ft_estado'=>'marahão',
            'cod_estado_uf'=>'21',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>51,
            'sg_estado'=>'MT',
            'no_estado'=>'Mato Grosso',
            'ft_estado'=>'Mato Grosso',
            'cod_estado_uf'=>'51',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>50,
            'sg_estado'=>'MS',
            'no_estado'=>'Mato Grosso do Sul',
            'ft_estado'=>'mato grosso do sul',
            'cod_estado_uf'=>'50',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>31,
            'sg_estado'=>'MG',
            'no_estado'=>'Minas Gerais',
            'ft_estado'=>'minas gerais',
            'cod_estado_uf'=>'31',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>15,
            'sg_estado'=>'PA',
            'no_estado'=>'Pará',
            'ft_estado'=>'pará',
            'cod_estado_uf'=>'15',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>25,
            'sg_estado'=>'PB',
            'no_estado'=>'Paraíba',
            'ft_estado'=>'paraíba',
            'cod_estado_uf'=>'25',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>41,
            'sg_estado'=>'PR',
            'no_estado'=>'Paraná',
            'ft_estado'=>'paraná',
            'cod_estado_uf'=>'41',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>22,
            'sg_estado'=>'PI',
            'no_estado'=>'Piauí',
            'ft_estado'=>'piauí',
            'cod_estado_uf'=>'22',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>33,
            'sg_estado'=>'RJ',
            'no_estado'=>'Rio de Janeiro',
            'ft_estado'=>'Rio de Janeiro',
            'cod_estado_uf'=>'33',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>24,
            'sg_estado'=>'RN',
            'no_estado'=>'Rio Grande do Norte',
            'ft_estado'=>'rio grande do norte',
            'cod_estado_uf'=>'24',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>43,
            'sg_estado'=>'RS',
            'no_estado'=>'Rio Grande do Sul',
            'ft_estado'=>'rio grande do sul',
            'cod_estado_uf'=>'43',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>11,
            'sg_estado'=>'RO',
            'no_estado'=>'Rondônia',
            'ft_estado'=>'rondônia',
            'cod_estado_uf'=>'11',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>14,
            'sg_estado'=>'RR',
            'no_estado'=>'Roraima',
            'ft_estado'=>'roraima',
            'cod_estado_uf'=>'14',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>42,
            'sg_estado'=>'SC',
            'no_estado'=>'Santa Catarina',
            'ft_estado'=>'santa catarina',
            'cod_estado_uf'=>'42',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>35,
            'sg_estado'=>'SP',
            'no_estado'=>'São Paulo',
            'ft_estado'=>'são paulo',
            'cod_estado_uf'=>'35',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>28,
            'sg_estado'=>'SE',
            'no_estado'=>'Sergipe',
            'ft_estado'=>'sergipe',
            'cod_estado_uf'=>'28',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>17,
            'sg_estado'=>'TO',
            'no_estado'=>'Tocantins',
            'ft_estado'=>'tocantins',
            'cod_estado_uf'=>'17',
            'pais_id'=>74,
        ]);

        RegionStatesModel::create([
            'id'=>53,
            'sg_estado'=>'DF',
            'no_estado'=>'Distrito Federal',
            'ft_estado'=>'distrito federal',
            'cod_estado_uf'=>'53',
            'pais_id'=>74,
        ]);
    }
}
