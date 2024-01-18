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
        CompanyTypeEstablishmentsModel::create(['id'=>2, 'type_establishment'=>'Centro de Saude/Unidade Basica', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>4, 'type_establishment'=>'Policlinica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>73, 'type_establishment'=>'Pronto Atendimento', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>68, 'type_establishment'=>'Central de Gestao em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>1, 'type_establishment'=>'Posto de Saude', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>-1, 'type_establishment'=>'Outros', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>15, 'type_establishment'=>'Unidade Mista', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>32, 'type_establishment'=>'Unidade Móvel Fluvial', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>36, 'type_establishment'=>'Clinica/Centro de Especialidade', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>40, 'type_establishment'=>'Unidade Movel Terrestre', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>71, 'type_establishment'=>'Centro de Apoio à Saúde da Família', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>72, 'type_establishment'=>'Unidade de Atenção à Saúde Indígena', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>74, 'type_establishment'=>'Polo Academia Da Saude', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>5, 'type_establishment'=>'Hospital Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>7, 'type_establishment'=>'Hospital Especializado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>20, 'type_establishment'=>'Pronto Socorro Geral', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>21, 'type_establishment'=>'Pronto Socorro Especializado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>62, 'type_establishment'=>'Hospital/Dia - Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>69, 'type_establishment'=>'Centro de Atencao Hemoterapia e ou Hematologica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>77, 'type_establishment'=>'Serviço de Atenção Domiciliar Isolado(Home Care)', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>22, 'type_establishment'=>'Consultório Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>39, 'type_establishment'=>'Unidade de Apoio Diagnose e Terapia (Sadt Isolado)', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>42, 'type_establishment'=>'Unidade Movel de Nivel Pre-Hospitalar na Area de Urgencia', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>43, 'type_establishment'=>'Farmacia', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>50, 'type_establishment'=>'Unidade de Vigilancia em Saude', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>60, 'type_establishment'=>'Cooperativa', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>61, 'type_establishment'=>'Centro de Parto Normal - Isolado', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>64, 'type_establishment'=>'Central de Regulação de Serviços de Saúde', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>67, 'type_establishment'=>'Laboratório Central de Saúde Pública Lacen', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>70, 'type_establishment'=>'Centro de Atencao Psicossocial', ]);
        CompanyTypeEstablishmentsModel::create(['id'=>75, 'type_establishment'=>'Telessaúde', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>76, 'type_establishment'=>'Central de Regulacao Medica das Urgencias', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>78, 'type_establishment'=>'Unidade de Atenção em Regime Residencial', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>79, 'type_establishment'=>'Oficina Ortopédica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>80, 'type_establishment'=>'Laboratorio de Saude Publica', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>81, 'type_establishment'=>'Central de Regulacao Do Acesso',]);
        CompanyTypeEstablishmentsModel::create(['id'=>82, 'type_establishment'=>'Central de Notificacao,Captacao e Distribuição de Orgaos Estadual', 'status'=>false]);
        CompanyTypeEstablishmentsModel::create(['id'=>85, 'type_establishment'=>'Centro De Imunizacao', 'status'=>false]);
    }
}
