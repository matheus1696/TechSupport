<?php

namespace Database\Seeders;

use App\Models\Company\CompanyTypeEstablishmentsModel;
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
        CompanyTypeEstablishmentsModel::create(['id'=>2, 'title'=>'Centro de Saude/Unidade Basica', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>4, 'title'=>'Policlinica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>73, 'title'=>'Pronto Atendimento', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>68, 'title'=>'Central de Gestao em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>1, 'title'=>'Posto de Saude', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>-1, 'title'=>'Outros', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>15, 'title'=>'Unidade Mista', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>32, 'title'=>'Unidade Móvel Fluvial', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>36, 'title'=>'Clinica/Centro de Especialidade', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>40, 'title'=>'Unidade Movel Terrestre', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>71, 'title'=>'Centro de Apoio à Saúde da Família', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>72, 'title'=>'Unidade de Atenção à Saúde Indígena', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>74, 'title'=>'Polo Academia Da Saude', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>5, 'title'=>'Hospital Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>7, 'title'=>'Hospital Especializado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>20, 'title'=>'Pronto Socorro Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>21, 'title'=>'Pronto Socorro Especializado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>62, 'title'=>'Hospital/Dia - Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>69, 'title'=>'Centro de Atencao Hemoterapia e ou Hematologica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>77, 'title'=>'Serviço de Atenção Domiciliar Isolado(Home Care)', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>22, 'title'=>'Consultório Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>39, 'title'=>'Unidade de Apoio Diagnose e Terapia (Sadt Isolado)', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>42, 'title'=>'Unidade Movel de Nivel Pre-Hospitalar na Area de Urgencia', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>43, 'title'=>'Farmacia', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>50, 'title'=>'Unidade de Vigilancia em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>60, 'title'=>'Cooperativa', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>61, 'title'=>'Centro de Parto Normal - Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>64, 'title'=>'Central de Regulação de Serviços de Saúde', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>67, 'title'=>'Laboratório Central de Saúde Pública Lacen', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>70, 'title'=>'Centro de Atencao Psicossocial', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>75, 'title'=>'Telessaúde', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>76, 'title'=>'Central de Regulacao Medica das Urgencias', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>78, 'title'=>'Unidade de Atenção em Regime Residencial', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>79, 'title'=>'Oficina Ortopédica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>80, 'title'=>'Laboratorio de Saude Publica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>81, 'title'=>'Central de Regulacao Do Acesso',]);
        CompanyTypeEstablishmentsModel::create(['id'=>82, 'title'=>'Central de Notificacao,Captacao e Distribuição de Orgaos Estadual', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>85, 'title'=>'Centro De Imunizacao', 'status'=>false]);
    }
}
