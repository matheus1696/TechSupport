<?php

namespace Database\Seeders;

use App\Models\CompanyTypeEstablishmentsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyTypeEstablishmentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyTypeEstablishmentsModel::create(['id'=>2, 'no_tipo_estabelecimento'=>'Centro de Saude/Unidade Basica', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>4, 'no_tipo_estabelecimento'=>'Policlinica', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>73, 'no_tipo_estabelecimento'=>'Pronto Atendimento', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>68, 'no_tipo_estabelecimento'=>'Central de Gestao em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>1, 'no_tipo_estabelecimento'=>'Posto de Saude', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>-1, 'no_tipo_estabelecimento'=>'Outros', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>15, 'no_tipo_estabelecimento'=>'Unidade Mista', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>32, 'no_tipo_estabelecimento'=>'Unidade Móvel Fluvial', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>36, 'no_tipo_estabelecimento'=>'Clinica/Centro de Especialidade', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>40, 'no_tipo_estabelecimento'=>'Unidade Movel Terrestre', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>71, 'no_tipo_estabelecimento'=>'Centro de Apoio à Saúde da Família', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>72, 'no_tipo_estabelecimento'=>'Unidade de Atenção à Saúde Indígena', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>74, 'no_tipo_estabelecimento'=>'Polo Academia Da Saude', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>5, 'no_tipo_estabelecimento'=>'Hospital Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>7, 'no_tipo_estabelecimento'=>'Hospital Especializado', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>20, 'no_tipo_estabelecimento'=>'Pronto Socorro Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>21, 'no_tipo_estabelecimento'=>'Pronto Socorro Especializado', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>62, 'no_tipo_estabelecimento'=>'Hospital/Dia - Isolado', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>69, 'no_tipo_estabelecimento'=>'Centro de Atencao Hemoterapia e ou Hematologica', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>77, 'no_tipo_estabelecimento'=>'Serviço de Atenção Domiciliar Isolado(Home Care)', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>22, 'no_tipo_estabelecimento'=>'Consultório Isolado', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>39, 'no_tipo_estabelecimento'=>'Unidade de Apoio Diagnose e Terapia (Sadt Isolado)', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>42, 'no_tipo_estabelecimento'=>'Unidade Movel de Nivel Pre-Hospitalar na Area de Urgencia', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>43, 'no_tipo_estabelecimento'=>'Farmacia', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>50, 'no_tipo_estabelecimento'=>'Unidade de Vigilancia em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>60, 'no_tipo_estabelecimento'=>'Cooperativa', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>61, 'no_tipo_estabelecimento'=>'Centro de Parto Normal - Isolado', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>64, 'no_tipo_estabelecimento'=>'Central de Regulação de Serviços de Saúde', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>67, 'no_tipo_estabelecimento'=>'Laboratório Central de Saúde Pública Lacen', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>70, 'no_tipo_estabelecimento'=>'Centro de Atencao Psicossocial', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>75, 'no_tipo_estabelecimento'=>'Telessaúde', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>76, 'no_tipo_estabelecimento'=>'Central de Regulacao Medica das Urgencias', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>78, 'no_tipo_estabelecimento'=>'Unidade de Atenção em Regime Residencial', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>79, 'no_tipo_estabelecimento'=>'Oficina Ortopédica', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>80, 'no_tipo_estabelecimento'=>'Laboratorio de Saude Publica', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>81, 'no_tipo_estabelecimento'=>'Central de Regulacao Do Acesso',]);
        CompanyTypeEstablishmentsModel::create(['id'=>82, 'no_tipo_estabelecimento'=>'Central de Notificacao,Captacao e Distribuição de Orgaos Estadual', 'st_tipo_estabelecimento'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>85, 'no_tipo_estabelecimento'=>'Centro De Imunizacao', 'st_tipo_estabelecimento'=>false]);
    }
}
