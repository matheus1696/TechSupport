<?php

namespace Database\Seeders;

use App\Models\Company\CompanyTypeEstablishments;
use Illuminate\Database\Seeder;

class CompanyTypeEstablishmentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        CompanyTypeEstablishments::create(['id'=>2, 'title'=>'Centro de Saude/Unidade Basica', ]);
        CompanyTypeEstablishments::create(['id'=>4, 'title'=>'Policlinica', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>73, 'title'=>'Pronto Atendimento', ]);
        CompanyTypeEstablishments::create(['id'=>68, 'title'=>'Central de Gestao em Saude', ]);
        CompanyTypeEstablishments::create(['id'=>1, 'title'=>'Posto de Saude', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>-1, 'title'=>'Outros', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>15, 'title'=>'Unidade Mista', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>32, 'title'=>'Unidade Móvel Fluvial', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>36, 'title'=>'Clinica/Centro de Especialidade', ]);
        CompanyTypeEstablishments::create(['id'=>40, 'title'=>'Unidade Movel Terrestre', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>71, 'title'=>'Centro de Apoio à Saúde da Família', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>72, 'title'=>'Unidade de Atenção à Saúde Indígena', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>74, 'title'=>'Polo Academia Da Saude', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>5, 'title'=>'Hospital Geral', ]);
        CompanyTypeEstablishments::create(['id'=>7, 'title'=>'Hospital Especializado', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>20, 'title'=>'Pronto Socorro Geral', ]);
        CompanyTypeEstablishments::create(['id'=>21, 'title'=>'Pronto Socorro Especializado', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>62, 'title'=>'Hospital/Dia - Isolado', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>69, 'title'=>'Centro de Atencao Hemoterapia e ou Hematologica', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>77, 'title'=>'Serviço de Atenção Domiciliar Isolado(Home Care)', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>22, 'title'=>'Consultório Isolado', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>39, 'title'=>'Unidade de Apoio Diagnose e Terapia (Sadt Isolado)', ]);
        CompanyTypeEstablishments::create(['id'=>42, 'title'=>'Unidade Movel de Nivel Pre-Hospitalar na Area de Urgencia', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>43, 'title'=>'Farmacia', ]);
        CompanyTypeEstablishments::create(['id'=>50, 'title'=>'Unidade de Vigilancia em Saude', ]);
        CompanyTypeEstablishments::create(['id'=>60, 'title'=>'Cooperativa', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>61, 'title'=>'Centro de Parto Normal - Isolado', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>64, 'title'=>'Central de Regulação de Serviços de Saúde', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>67, 'title'=>'Laboratório Central de Saúde Pública Lacen', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>70, 'title'=>'Centro de Atencao Psicossocial', ]);
        CompanyTypeEstablishments::create(['id'=>75, 'title'=>'Telessaúde', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>76, 'title'=>'Central de Regulacao Medica das Urgencias', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>78, 'title'=>'Unidade de Atenção em Regime Residencial', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>79, 'title'=>'Oficina Ortopédica', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>80, 'title'=>'Laboratorio de Saude Publica', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>81, 'title'=>'Central de Regulacao Do Acesso',]);
        CompanyTypeEstablishments::create(['id'=>82, 'title'=>'Central de Notificacao,Captacao e Distribuição de Orgaos Estadual', 'status'=>false]);
        CompanyTypeEstablishments::create(['id'=>85, 'title'=>'Centro De Imunizacao', 'status'=>false]);
    }
}
