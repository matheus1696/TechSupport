<?php

namespace Database\Seeders;

use App\Models\Company\CompanyOccupationsModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyOccupationsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyOccupationsModel::create(['code'=>'10105','occupation'=>'Oficial general da aeronáutica','filter'=>'oficial general da aeronáutica',]);

        CompanyOccupationsModel::create(['code'=>'10110','occupation'=>'Oficial general do exército','filter'=>'oficial general do exército',]);

        CompanyOccupationsModel::create(['code'=>'10115','occupation'=>'Oficial general da marinha','filter'=>'oficial general da marinha',]);

        CompanyOccupationsModel::create(['code'=>'10205','occupation'=>'Oficial da aeronáutica','filter'=>'oficial da aeronáutica',]);

        CompanyOccupationsModel::create(['code'=>'10210','occupation'=>'Oficial do exército','filter'=>'oficial do exército',]);

        CompanyOccupationsModel::create(['code'=>'10215','occupation'=>'Oficial da marinha','filter'=>'oficial da marinha',]);

        CompanyOccupationsModel::create(['code'=>'10305','occupation'=>'Praça da aeronáutica','filter'=>'praça da aeronáutica',]);

        CompanyOccupationsModel::create(['code'=>'10310','occupation'=>'Praça do exército','filter'=>'praça do exército',]);

        CompanyOccupationsModel::create(['code'=>'10315','occupation'=>'Praça da marinha','filter'=>'praça da marinha',]);

        CompanyOccupationsModel::create(['code'=>'111105','occupation'=>'Senador','filter'=>'senador',]);

        CompanyOccupationsModel::create(['code'=>'111110','occupation'=>'Deputado federal','filter'=>'deputado federal',]);

        CompanyOccupationsModel::create(['code'=>'111115','occupation'=>'Deputado estadual e distrital','filter'=>'deputado estadual e distrital',]);

        CompanyOccupationsModel::create(['code'=>'111120','occupation'=>'Vereador','filter'=>'vereador',]);

        CompanyOccupationsModel::create(['code'=>'111205','occupation'=>'Presidente da república','filter'=>'presidente da república',]);

        CompanyOccupationsModel::create(['code'=>'111210','occupation'=>'Vice-presidente da república','filter'=>'vice-presidente da república',]);

        CompanyOccupationsModel::create(['code'=>'111215','occupation'=>'Ministro de estado','filter'=>'ministro de estado',]);

        CompanyOccupationsModel::create(['code'=>'111220','occupation'=>'Secretário - executivo','filter'=>'secretário - executivo',]);

        CompanyOccupationsModel::create(['code'=>'111225','occupation'=>'Membro superior do poder executivo','filter'=>'membro superior do poder executivo',]);

        CompanyOccupationsModel::create(['code'=>'111230','occupation'=>'Governador de estado','filter'=>'governador de estado',]);

        CompanyOccupationsModel::create(['code'=>'111235','occupation'=>'Governador do distrito federal','filter'=>'governador do distrito federal',]);

        CompanyOccupationsModel::create(['code'=>'111240','occupation'=>'Vice-governador de estado','filter'=>'vice-governador de estado',]);

        CompanyOccupationsModel::create(['code'=>'111245','occupation'=>'Vice-governador do distrito federal','filter'=>'vice-governador do distrito federal',]);

        CompanyOccupationsModel::create(['code'=>'111250','occupation'=>'Prefeito','filter'=>'prefeito',]);

        CompanyOccupationsModel::create(['code'=>'111255','occupation'=>'Vice-prefeito','filter'=>'vice-prefeito',]);

        CompanyOccupationsModel::create(['code'=>'111305','occupation'=>'Ministro do supremo tribunal federal','filter'=>'ministro do supremo tribunal federal',]);

        CompanyOccupationsModel::create(['code'=>'111310','occupation'=>'Ministro do superior tribunal de justiça','filter'=>'ministro do superior tribunal de justiça',]);

        CompanyOccupationsModel::create(['code'=>'111315','occupation'=>'Ministro do superior tribunal militar','filter'=>'ministro do superior tribunal militar',]);

        CompanyOccupationsModel::create(['code'=>'111320','occupation'=>'Ministro do superior tribunal do trabalho','filter'=>'ministro do superior tribunal do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'111325','occupation'=>'Juiz de direito','filter'=>'juiz de direito',]);

        CompanyOccupationsModel::create(['code'=>'111330','occupation'=>'Juiz federal','filter'=>'juiz federal',]);

        CompanyOccupationsModel::create(['code'=>'111335','occupation'=>'Juiz auditor federal - justiça militar','filter'=>'juiz auditor federal - justiça militar',]);

        CompanyOccupationsModel::create(['code'=>'111340','occupation'=>'Juiz auditor estadual - justiça militar','filter'=>'juiz auditor estadual - justiça militar',]);

        CompanyOccupationsModel::create(['code'=>'111345','occupation'=>'Juiz do trabalho','filter'=>'juiz do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'111405','occupation'=>'Dirigente do serviço público federal','filter'=>'dirigente do serviço público federal',]);

        CompanyOccupationsModel::create(['code'=>'111410','occupation'=>'Dirigente do serviço público estadual e distrital','filter'=>'dirigente do serviço público estadual e distrital',]);

        CompanyOccupationsModel::create(['code'=>'111415','occupation'=>'Dirigente do serviço público municipal','filter'=>'dirigente do serviço público municipal',]);

        CompanyOccupationsModel::create(['code'=>'111505','occupation'=>'Especialista de políticas públicas e gestão governamental - eppgg','filter'=>'especialista de políticas públicas e gestão governamental - eppgg',]);

        CompanyOccupationsModel::create(['code'=>'111510','occupation'=>'Analista de planejamento e orçamento - apo','filter'=>'analista de planejamento e orçamento - apo',]);

        CompanyOccupationsModel::create(['code'=>'113005','occupation'=>'Cacique','filter'=>'cacique',]);

        CompanyOccupationsModel::create(['code'=>'113010','occupation'=>'Líder de comunidade caiçara','filter'=>'líder de comunidade caiçara',]);

        CompanyOccupationsModel::create(['code'=>'113015','occupation'=>'Membro de liderança quilombola','filter'=>'membro de liderança quilombola',]);

        CompanyOccupationsModel::create(['code'=>'114105','occupation'=>'Dirigente de partido político','filter'=>'dirigente de partido político',]);

        CompanyOccupationsModel::create(['code'=>'114205','occupation'=>'Dirigente de entidade de trabalhadores','filter'=>'dirigente de entidade de trabalhadores',]);

        CompanyOccupationsModel::create(['code'=>'114210','occupation'=>'Dirigente de entidade patronal','filter'=>'dirigente de entidade patronal',]);

        CompanyOccupationsModel::create(['code'=>'114305','occupation'=>'Dirigente e administrador de organização religiosa','filter'=>'dirigente e administrador de organização religiosa',]);

        CompanyOccupationsModel::create(['code'=>'114405','occupation'=>'Dirigente e administrador de organização da sociedade civil sem fins lucrativos','filter'=>'dirigente e administrador de organização da sociedade civil sem fins lucrativos',]);

        CompanyOccupationsModel::create(['code'=>'121005','occupation'=>'Diretor de planejamento estratégico','filter'=>'diretor de planejamento estratégico',]);

        CompanyOccupationsModel::create(['code'=>'121010','occupation'=>'Diretor geral de empresa e organizações (exceto de interesse público)','filter'=>'diretor geral de empresa e organizações (exceto de interesse público)',]);

        CompanyOccupationsModel::create(['code'=>'122105','occupation'=>'Diretor de produção e operações em empresa agropecuária','filter'=>'diretor de produção e operações em empresa agropecuária',]);

        CompanyOccupationsModel::create(['code'=>'122110','occupation'=>'Diretor de produção e operações em empresa aqüícola','filter'=>'diretor de produção e operações em empresa aqüícola',]);

        CompanyOccupationsModel::create(['code'=>'122115','occupation'=>'Diretor de produção e operações em empresa florestal','filter'=>'diretor de produção e operações em empresa florestal',]);

        CompanyOccupationsModel::create(['code'=>'122120','occupation'=>'Diretor de produção e operações em empresa pesqueira','filter'=>'diretor de produção e operações em empresa pesqueira',]);

        CompanyOccupationsModel::create(['code'=>'122205','occupation'=>'Diretor de produção e operações da indústria de transformação, extração mineral e utilidades','filter'=>'diretor de produção e operações da indústria de transformação, extração mineral e utilidades',]);

        CompanyOccupationsModel::create(['code'=>'122305','occupation'=>'Diretor de operações de obras pública e civil','filter'=>'diretor de operações de obras pública e civil',]);

        CompanyOccupationsModel::create(['code'=>'122405','occupation'=>'Diretor de operações comerciais (comércio atacadista e varejista)','filter'=>'diretor de operações comerciais (comércio atacadista e varejista)',]);

        CompanyOccupationsModel::create(['code'=>'122505','occupation'=>'Diretor de produção e operações de alimentação','filter'=>'diretor de produção e operações de alimentação',]);

        CompanyOccupationsModel::create(['code'=>'122510','occupation'=>'Diretor de produção e operações de hotel','filter'=>'diretor de produção e operações de hotel',]);

        CompanyOccupationsModel::create(['code'=>'122515','occupation'=>'Diretor de produção e operações de turismo','filter'=>'diretor de produção e operações de turismo',]);

        CompanyOccupationsModel::create(['code'=>'122520','occupation'=>'Turismólogo','filter'=>'turismólogo',]);

        CompanyOccupationsModel::create(['code'=>'122605','occupation'=>'Diretor de operações de correios','filter'=>'diretor de operações de correios',]);

        CompanyOccupationsModel::create(['code'=>'122610','occupation'=>'Diretor de operações de serviços de armazenamento','filter'=>'diretor de operações de serviços de armazenamento',]);

        CompanyOccupationsModel::create(['code'=>'122615','occupation'=>'Diretor de operações de serviços de telecomunicações','filter'=>'diretor de operações de serviços de telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'122620','occupation'=>'Diretor de operações de serviços de transporte','filter'=>'diretor de operações de serviços de transporte',]);

        CompanyOccupationsModel::create(['code'=>'122705','occupation'=>'Diretor comercial em operações de intermediação financeira','filter'=>'diretor comercial em operações de intermediação financeira',]);

        CompanyOccupationsModel::create(['code'=>'122710','occupation'=>'Diretor de produtos bancários','filter'=>'diretor de produtos bancários',]);

        CompanyOccupationsModel::create(['code'=>'122715','occupation'=>'Diretor de crédito rural','filter'=>'diretor de crédito rural',]);

        CompanyOccupationsModel::create(['code'=>'122720','occupation'=>'Diretor de câmbio e comércio exterior','filter'=>'diretor de câmbio e comércio exterior',]);

        CompanyOccupationsModel::create(['code'=>'122725','occupation'=>'Diretor de compliance','filter'=>'diretor de compliance',]);

        CompanyOccupationsModel::create(['code'=>'122730','occupation'=>'Diretor de crédito (exceto crédito imobiliário)','filter'=>'diretor de crédito (exceto crédito imobiliário)',]);

        CompanyOccupationsModel::create(['code'=>'122735','occupation'=>'Diretor de crédito imobiliário','filter'=>'diretor de crédito imobiliário',]);

        CompanyOccupationsModel::create(['code'=>'122740','occupation'=>'Diretor de leasing','filter'=>'diretor de leasing',]);

        CompanyOccupationsModel::create(['code'=>'122745','occupation'=>'Diretor de mercado de capitais','filter'=>'diretor de mercado de capitais',]);

        CompanyOccupationsModel::create(['code'=>'122750','occupation'=>'Diretor de recuperação de créditos em operações de intermediação financeira','filter'=>'diretor de recuperação de créditos em operações de intermediação financeira',]);

        CompanyOccupationsModel::create(['code'=>'122755','occupation'=>'Diretor de riscos de mercado','filter'=>'diretor de riscos de mercado',]);

        CompanyOccupationsModel::create(['code'=>'123105','occupation'=>'Diretor administrativo','filter'=>'diretor administrativo',]);

        CompanyOccupationsModel::create(['code'=>'123110','occupation'=>'Diretor administrativo e financeiro','filter'=>'diretor administrativo e financeiro',]);

        CompanyOccupationsModel::create(['code'=>'123115','occupation'=>'Diretor financeiro','filter'=>'diretor financeiro',]);

        CompanyOccupationsModel::create(['code'=>'123205','occupation'=>'Diretor de recursos humanos','filter'=>'diretor de recursos humanos',]);

        CompanyOccupationsModel::create(['code'=>'123210','occupation'=>'Diretor de relações de trabalho','filter'=>'diretor de relações de trabalho',]);

        CompanyOccupationsModel::create(['code'=>'123305','occupation'=>'Diretor comercial','filter'=>'diretor comercial',]);

        CompanyOccupationsModel::create(['code'=>'123310','occupation'=>'Diretor de marketing','filter'=>'diretor de marketing',]);

        CompanyOccupationsModel::create(['code'=>'123405','occupation'=>'Diretor de suprimentos','filter'=>'diretor de suprimentos',]);

        CompanyOccupationsModel::create(['code'=>'123410','occupation'=>'Diretor de suprimentos no serviço público','filter'=>'diretor de suprimentos no serviço público',]);

        CompanyOccupationsModel::create(['code'=>'123605','occupation'=>'Diretor de tecnologia da informação','filter'=>'diretor de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'123705','occupation'=>'Diretor de pesquisa e desenvolvimento (p&d)','filter'=>'diretor de pesquisa e desenvolvimento (p&d)',]);

        CompanyOccupationsModel::create(['code'=>'123805','occupation'=>'Diretor de manutenção','filter'=>'diretor de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'131105','occupation'=>'Diretor de serviços culturais','filter'=>'diretor de serviços culturais',]);

        CompanyOccupationsModel::create(['code'=>'131110','occupation'=>'Diretor de serviços sociais','filter'=>'diretor de serviços sociais',]);

        CompanyOccupationsModel::create(['code'=>'131115','occupation'=>'Gerente de serviços culturais','filter'=>'gerente de serviços culturais',]);

        CompanyOccupationsModel::create(['code'=>'131120','occupation'=>'Gerente de serviços sociais','filter'=>'gerente de serviços sociais',]);

        CompanyOccupationsModel::create(['code'=>'131205','occupation'=>'Diretor de serviços de saúde','filter'=>'diretor de serviços de saúde',]);

        CompanyOccupationsModel::create(['code'=>'131210','occupation'=>'Gerente de serviços de saúde','filter'=>'gerente de serviços de saúde',]);

        CompanyOccupationsModel::create(['code'=>'131215','occupation'=>'Tecnólogo em gestão hospitalar','filter'=>'tecnólogo em gestão hospitalar',]);

        CompanyOccupationsModel::create(['code'=>'131220','occupation'=>'Gerontólogo','filter'=>'gerontólogo',]);

        CompanyOccupationsModel::create(['code'=>'131225','occupation'=>'Sanitarista','filter'=>'sanitarista',]);

        CompanyOccupationsModel::create(['code'=>'131305','occupation'=>'Diretor de instituição educacional da área privada','filter'=>'diretor de instituição educacional da área privada',]);

        CompanyOccupationsModel::create(['code'=>'131310','occupation'=>'Diretor de instituição educacional pública','filter'=>'diretor de instituição educacional pública',]);

        CompanyOccupationsModel::create(['code'=>'131315','occupation'=>'Gerente de instituição educacional da área privada','filter'=>'gerente de instituição educacional da área privada',]);

        CompanyOccupationsModel::create(['code'=>'131320','occupation'=>'Gerente de serviços educacionais da área pública','filter'=>'gerente de serviços educacionais da área pública',]);

        CompanyOccupationsModel::create(['code'=>'141105','occupation'=>'Gerente de produção e operações aqüícolas','filter'=>'gerente de produção e operações aqüícolas',]);

        CompanyOccupationsModel::create(['code'=>'141110','occupation'=>'Gerente de produção e operações florestais','filter'=>'gerente de produção e operações florestais',]);

        CompanyOccupationsModel::create(['code'=>'141115','occupation'=>'Gerente de produção e operações agropecuárias','filter'=>'gerente de produção e operações agropecuárias',]);

        CompanyOccupationsModel::create(['code'=>'141120','occupation'=>'Gerente de produção e operações pesqueiras','filter'=>'gerente de produção e operações pesqueiras',]);

        CompanyOccupationsModel::create(['code'=>'141205','occupation'=>'Gerente de produção e operações','filter'=>'gerente de produção e operações',]);

        CompanyOccupationsModel::create(['code'=>'141305','occupation'=>'Gerente de produção e operações da construção civil e obras públicas','filter'=>'gerente de produção e operações da construção civil e obras públicas',]);

        CompanyOccupationsModel::create(['code'=>'141405','occupation'=>'Comerciante atacadista','filter'=>'comerciante atacadista',]);

        CompanyOccupationsModel::create(['code'=>'141410','occupation'=>'Comerciante varejista','filter'=>'comerciante varejista',]);

        CompanyOccupationsModel::create(['code'=>'141415','occupation'=>'Gerente de loja e supermercado','filter'=>'gerente de loja e supermercado',]);

        CompanyOccupationsModel::create(['code'=>'141420','occupation'=>'Gerente de operações de serviços de assistência técnica','filter'=>'gerente de operações de serviços de assistência técnica',]);

        CompanyOccupationsModel::create(['code'=>'141505','occupation'=>'Gerente de hotel','filter'=>'gerente de hotel',]);

        CompanyOccupationsModel::create(['code'=>'141510','occupation'=>'Gerente de restaurante','filter'=>'gerente de restaurante',]);

        CompanyOccupationsModel::create(['code'=>'141515','occupation'=>'Gerente de bar','filter'=>'gerente de bar',]);

        CompanyOccupationsModel::create(['code'=>'141520','occupation'=>'Gerente de pensão','filter'=>'gerente de pensão',]);

        CompanyOccupationsModel::create(['code'=>'141525','occupation'=>'Gerente de turismo','filter'=>'gerente de turismo',]);

        CompanyOccupationsModel::create(['code'=>'141605','occupation'=>'Gerente de operações de transportes','filter'=>'gerente de operações de transportes',]);

        CompanyOccupationsModel::create(['code'=>'141610','occupation'=>'Gerente de operações de correios e telecomunicações','filter'=>'gerente de operações de correios e telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'141615','occupation'=>'Gerente de logística (armazenagem e distribuição)','filter'=>'gerente de logística (armazenagem e distribuição)',]);

        CompanyOccupationsModel::create(['code'=>'141705','occupation'=>'Gerente de produtos bancários','filter'=>'gerente de produtos bancários',]);

        CompanyOccupationsModel::create(['code'=>'141710','occupation'=>'Gerente de agência','filter'=>'gerente de agência',]);

        CompanyOccupationsModel::create(['code'=>'141715','occupation'=>'Gerente de câmbio e comércio exterior','filter'=>'gerente de câmbio e comércio exterior',]);

        CompanyOccupationsModel::create(['code'=>'141720','occupation'=>'Gerente de crédito e cobrança','filter'=>'gerente de crédito e cobrança',]);

        CompanyOccupationsModel::create(['code'=>'141725','occupation'=>'Gerente de crédito imobiliário','filter'=>'gerente de crédito imobiliário',]);

        CompanyOccupationsModel::create(['code'=>'141730','occupation'=>'Gerente de crédito rural','filter'=>'gerente de crédito rural',]);

        CompanyOccupationsModel::create(['code'=>'141735','occupation'=>'Gerente de recuperação de crédito','filter'=>'gerente de recuperação de crédito',]);

        CompanyOccupationsModel::create(['code'=>'141805','occupation'=>'Gerente de administração em aeroportos','filter'=>'gerente de administração em aeroportos',]);

        CompanyOccupationsModel::create(['code'=>'141810','occupation'=>'Gerente de empresa aérea e empresa de serviços auxiliares ao transporte aéreo (esata) em aeroportos','filter'=>'gerente de empresa aérea e empresa de serviços auxiliares ao transporte aéreo (esata) em aeroportos',]);

        CompanyOccupationsModel::create(['code'=>'141815','occupation'=>'Gerente de operações em aeroportos','filter'=>'gerente de operações em aeroportos',]);

        CompanyOccupationsModel::create(['code'=>'141820','occupation'=>'Gerente de operações de cargas','filter'=>'gerente de operações de cargas',]);

        CompanyOccupationsModel::create(['code'=>'141825','occupation'=>'Gerente de segurança da aviação civil','filter'=>'gerente de segurança da aviação civil',]);

        CompanyOccupationsModel::create(['code'=>'141830','occupation'=>'Gerente de segurança operacional (aviação civil)','filter'=>'gerente de segurança operacional (aviação civil)',]);

        CompanyOccupationsModel::create(['code'=>'142105','occupation'=>'Gerente administrativo','filter'=>'gerente administrativo',]);

        CompanyOccupationsModel::create(['code'=>'142110','occupation'=>'Gerente de riscos','filter'=>'gerente de riscos',]);

        CompanyOccupationsModel::create(['code'=>'142115','occupation'=>'Gerente financeiro','filter'=>'gerente financeiro',]);

        CompanyOccupationsModel::create(['code'=>'142120','occupation'=>'Tecnólogo em gestão administrativo- financeira','filter'=>'tecnólogo em gestão administrativo- financeira',]);

        CompanyOccupationsModel::create(['code'=>'142125','occupation'=>'Analista de compliance','filter'=>'analista de compliance',]);

        CompanyOccupationsModel::create(['code'=>'142130','occupation'=>'Analista de riscos','filter'=>'analista de riscos',]);

        CompanyOccupationsModel::create(['code'=>'142135','occupation'=>'Oficial de proteção de dados pessoais (dpo)','filter'=>'oficial de proteção de dados pessoais (dpo)',]);

        CompanyOccupationsModel::create(['code'=>'142140','occupation'=>'Gerente de facility management','filter'=>'gerente de facility management',]);

        CompanyOccupationsModel::create(['code'=>'142205','occupation'=>'Gerente de recursos humanos','filter'=>'gerente de recursos humanos',]);

        CompanyOccupationsModel::create(['code'=>'142210','occupation'=>'Gerente de departamento pessoal','filter'=>'gerente de departamento pessoal',]);

        CompanyOccupationsModel::create(['code'=>'142305','occupation'=>'Gerente comercial','filter'=>'gerente comercial',]);

        CompanyOccupationsModel::create(['code'=>'142310','occupation'=>'Gerente de comunicação','filter'=>'gerente de comunicação',]);

        CompanyOccupationsModel::create(['code'=>'142315','occupation'=>'Gerente de marketing','filter'=>'gerente de marketing',]);

        CompanyOccupationsModel::create(['code'=>'142320','occupation'=>'Gerente de vendas','filter'=>'gerente de vendas',]);

        CompanyOccupationsModel::create(['code'=>'142325','occupation'=>'Relações públicas','filter'=>'relações públicas',]);

        CompanyOccupationsModel::create(['code'=>'142330','occupation'=>'Analista de negócios','filter'=>'analista de negócios',]);

        CompanyOccupationsModel::create(['code'=>'142335','occupation'=>'Analista de pesquisa de mercado','filter'=>'analista de pesquisa de mercado',]);

        CompanyOccupationsModel::create(['code'=>'142340','occupation'=>'Ouvidor','filter'=>'ouvidor',]);

        CompanyOccupationsModel::create(['code'=>'142345','occupation'=>'Profissional de relações institucionais e governamentais','filter'=>'profissional de relações institucionais e governamentais',]);

        CompanyOccupationsModel::create(['code'=>'142350','occupation'=>'Profissonal de relações internacionais','filter'=>'profissonal de relações internacionais',]);

        CompanyOccupationsModel::create(['code'=>'142355','occupation'=>'Analista de e-commerce','filter'=>'analista de e-commerce',]);

        CompanyOccupationsModel::create(['code'=>'142405','occupation'=>'Gerente de compras','filter'=>'gerente de compras',]);

        CompanyOccupationsModel::create(['code'=>'142410','occupation'=>'Gerente de suprimentos','filter'=>'gerente de suprimentos',]);

        CompanyOccupationsModel::create(['code'=>'142415','occupation'=>'Gerente de almoxarifado','filter'=>'gerente de almoxarifado',]);

        CompanyOccupationsModel::create(['code'=>'142505','occupation'=>'Gerente de infraestrutura de tecnologia da informação','filter'=>'gerente de infraestrutura de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'142510','occupation'=>'Gerente de desenvolvimento de sistemas','filter'=>'gerente de desenvolvimento de sistemas',]);

        CompanyOccupationsModel::create(['code'=>'142515','occupation'=>'Gerente de operação de tecnologia da informação','filter'=>'gerente de operação de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'142520','occupation'=>'Gerente de projetos de tecnologia da informação','filter'=>'gerente de projetos de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'142525','occupation'=>'Gerente de segurança da informação','filter'=>'gerente de segurança da informação',]);

        CompanyOccupationsModel::create(['code'=>'142530','occupation'=>'Gerente de suporte técnico de tecnologia da informação','filter'=>'gerente de suporte técnico de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'142535','occupation'=>'Tecnólogo em gestão da tecnologia da informação','filter'=>'tecnólogo em gestão da tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'142605','occupation'=>'Gerente de pesquisa e desenvolvimento (p&d)','filter'=>'gerente de pesquisa e desenvolvimento (p&d)',]);

        CompanyOccupationsModel::create(['code'=>'142610','occupation'=>'Especialista em desenvolvimento de cigarros','filter'=>'especialista em desenvolvimento de cigarros',]);

        CompanyOccupationsModel::create(['code'=>'142705','occupation'=>'Gerente de projetos e serviços de manutenção','filter'=>'gerente de projetos e serviços de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'142710','occupation'=>'Tecnólogo em sistemas biomédicos','filter'=>'tecnólogo em sistemas biomédicos',]);

        CompanyOccupationsModel::create(['code'=>'20105','occupation'=>'Coronel da polícia militar','filter'=>'coronel da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'20110','occupation'=>'Tenente-coronel da polícia militar','filter'=>'tenente-coronel da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'201105','occupation'=>'Bioengenheiro','filter'=>'bioengenheiro',]);

        CompanyOccupationsModel::create(['code'=>'201110','occupation'=>'Biotecnologista','filter'=>'biotecnologista',]);

        CompanyOccupationsModel::create(['code'=>'201115','occupation'=>'Geneticista','filter'=>'geneticista',]);

        CompanyOccupationsModel::create(['code'=>'20115','occupation'=>'Major da polícia militar','filter'=>'major da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'201205','occupation'=>'Pesquisador em metrologia','filter'=>'pesquisador em metrologia',]);

        CompanyOccupationsModel::create(['code'=>'201210','occupation'=>'Especialista em calibrações metrológicas','filter'=>'especialista em calibrações metrológicas',]);

        CompanyOccupationsModel::create(['code'=>'201215','occupation'=>'Especialista em ensaios metrológicos','filter'=>'especialista em ensaios metrológicos',]);

        CompanyOccupationsModel::create(['code'=>'201220','occupation'=>'Especialista em instrumentação metrológica','filter'=>'especialista em instrumentação metrológica',]);

        CompanyOccupationsModel::create(['code'=>'201225','occupation'=>'Especialista em materiais de referência metrológica','filter'=>'especialista em materiais de referência metrológica',]);

        CompanyOccupationsModel::create(['code'=>'20205','occupation'=>'Capitão da polícia militar','filter'=>'capitão da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'202105','occupation'=>'Engenheiro mecatrônico','filter'=>'engenheiro mecatrônico',]);

        CompanyOccupationsModel::create(['code'=>'202110','occupation'=>'Engenheiro de controle e automação','filter'=>'engenheiro de controle e automação',]);

        CompanyOccupationsModel::create(['code'=>'202115','occupation'=>'Tecnólogo em mecatrônica','filter'=>'tecnólogo em mecatrônica',]);

        CompanyOccupationsModel::create(['code'=>'202120','occupation'=>'Tecnólogo em automação industrial','filter'=>'tecnólogo em automação industrial',]);

        CompanyOccupationsModel::create(['code'=>'203005','occupation'=>'Pesquisador em biologia ambiental','filter'=>'pesquisador em biologia ambiental',]);

        CompanyOccupationsModel::create(['code'=>'203010','occupation'=>'Pesquisador em biologia animal','filter'=>'pesquisador em biologia animal',]);

        CompanyOccupationsModel::create(['code'=>'203015','occupation'=>'Pesquisador em biologia de microorganismos e parasitas','filter'=>'pesquisador em biologia de microorganismos e parasitas',]);

        CompanyOccupationsModel::create(['code'=>'203020','occupation'=>'Pesquisador em biologia humana','filter'=>'pesquisador em biologia humana',]);

        CompanyOccupationsModel::create(['code'=>'203025','occupation'=>'Pesquisador em biologia vegetal','filter'=>'pesquisador em biologia vegetal',]);

        CompanyOccupationsModel::create(['code'=>'20305','occupation'=>'Primeiro tenente de polícia militar','filter'=>'primeiro tenente de polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'20310','occupation'=>'Segundo tenente de polícia militar','filter'=>'segundo tenente de polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'203105','occupation'=>'Pesquisador em ciências da computação e informática','filter'=>'pesquisador em ciências da computação e informática',]);

        CompanyOccupationsModel::create(['code'=>'203110','occupation'=>'Pesquisador em ciências da terra e meio ambiente','filter'=>'pesquisador em ciências da terra e meio ambiente',]);

        CompanyOccupationsModel::create(['code'=>'203115','occupation'=>'Pesquisador em física','filter'=>'pesquisador em física',]);

        CompanyOccupationsModel::create(['code'=>'203120','occupation'=>'Pesquisador em matemática','filter'=>'pesquisador em matemática',]);

        CompanyOccupationsModel::create(['code'=>'203125','occupation'=>'Pesquisador em química','filter'=>'pesquisador em química',]);

        CompanyOccupationsModel::create(['code'=>'203205','occupation'=>'Pesquisador de engenharia civil','filter'=>'pesquisador de engenharia civil',]);

        CompanyOccupationsModel::create(['code'=>'203210','occupation'=>'Pesquisador de engenharia e tecnologia (outras áreas da engenharia)','filter'=>'pesquisador de engenharia e tecnologia (outras áreas da engenharia)',]);

        CompanyOccupationsModel::create(['code'=>'203215','occupation'=>'Pesquisador de engenharia elétrica e eletrônica','filter'=>'pesquisador de engenharia elétrica e eletrônica',]);

        CompanyOccupationsModel::create(['code'=>'203220','occupation'=>'Pesquisador de engenharia mecânica','filter'=>'pesquisador de engenharia mecânica',]);

        CompanyOccupationsModel::create(['code'=>'203225','occupation'=>'Pesquisador de engenharia metalúrgica, de minas e de materiais','filter'=>'pesquisador de engenharia metalúrgica, de minas e de materiais',]);

        CompanyOccupationsModel::create(['code'=>'203230','occupation'=>'Pesquisador de engenharia química','filter'=>'pesquisador de engenharia química',]);

        CompanyOccupationsModel::create(['code'=>'203305','occupation'=>'Pesquisador de clínica médica','filter'=>'pesquisador de clínica médica',]);

        CompanyOccupationsModel::create(['code'=>'203310','occupation'=>'Pesquisador de medicina básica','filter'=>'pesquisador de medicina básica',]);

        CompanyOccupationsModel::create(['code'=>'203315','occupation'=>'Pesquisador em medicina veterinária','filter'=>'pesquisador em medicina veterinária',]);

        CompanyOccupationsModel::create(['code'=>'203320','occupation'=>'Pesquisador em saúde coletiva','filter'=>'pesquisador em saúde coletiva',]);

        CompanyOccupationsModel::create(['code'=>'203405','occupation'=>'Pesquisador em ciências agronômicas','filter'=>'pesquisador em ciências agronômicas',]);

        CompanyOccupationsModel::create(['code'=>'203410','occupation'=>'Pesquisador em ciências da pesca e aqüicultura','filter'=>'pesquisador em ciências da pesca e aqüicultura',]);

        CompanyOccupationsModel::create(['code'=>'203415','occupation'=>'Pesquisador em ciências da zootecnia','filter'=>'pesquisador em ciências da zootecnia',]);

        CompanyOccupationsModel::create(['code'=>'203420','occupation'=>'Pesquisador em ciências florestais','filter'=>'pesquisador em ciências florestais',]);

        CompanyOccupationsModel::create(['code'=>'203505','occupation'=>'Pesquisador em ciências sociais e humanas','filter'=>'pesquisador em ciências sociais e humanas',]);

        CompanyOccupationsModel::create(['code'=>'203510','occupation'=>'Pesquisador em economia','filter'=>'pesquisador em economia',]);

        CompanyOccupationsModel::create(['code'=>'203515','occupation'=>'Pesquisador em ciências da educação','filter'=>'pesquisador em ciências da educação',]);

        CompanyOccupationsModel::create(['code'=>'203520','occupation'=>'Pesquisador em história','filter'=>'pesquisador em história',]);

        CompanyOccupationsModel::create(['code'=>'203525','occupation'=>'Pesquisador em psicologia','filter'=>'pesquisador em psicologia',]);

        CompanyOccupationsModel::create(['code'=>'204105','occupation'=>'Perito criminal','filter'=>'perito criminal',]);

        CompanyOccupationsModel::create(['code'=>'204110','occupation'=>'Perito judicial','filter'=>'perito judicial',]);

        CompanyOccupationsModel::create(['code'=>'21105','occupation'=>'Subtenente da policia militar','filter'=>'subtenente da policia militar',]);

        CompanyOccupationsModel::create(['code'=>'21110','occupation'=>'Sargento da policia militar','filter'=>'sargento da policia militar',]);

        CompanyOccupationsModel::create(['code'=>'211105','occupation'=>'Atuário','filter'=>'atuário',]);

        CompanyOccupationsModel::create(['code'=>'211110','occupation'=>'Especialista em pesquisa operacional','filter'=>'especialista em pesquisa operacional',]);

        CompanyOccupationsModel::create(['code'=>'211115','occupation'=>'Matemático','filter'=>'matemático',]);

        CompanyOccupationsModel::create(['code'=>'211120','occupation'=>'Matemático aplicado','filter'=>'matemático aplicado',]);

        CompanyOccupationsModel::create(['code'=>'211205','occupation'=>'Estatístico','filter'=>'estatístico',]);

        CompanyOccupationsModel::create(['code'=>'211210','occupation'=>'Estatístico (estatística aplicada)','filter'=>'estatístico (estatística aplicada)',]);

        CompanyOccupationsModel::create(['code'=>'211215','occupation'=>'Estatístico teórico','filter'=>'estatístico teórico',]);

        CompanyOccupationsModel::create(['code'=>'211220','occupation'=>'Cientista de dados','filter'=>'cientista de dados',]);

        CompanyOccupationsModel::create(['code'=>'21205','occupation'=>'Cabo da polícia militar','filter'=>'cabo da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'21210','occupation'=>'Soldado da polícia militar','filter'=>'soldado da polícia militar',]);

        CompanyOccupationsModel::create(['code'=>'212205','occupation'=>'Engenheiro de aplicativos em computação','filter'=>'engenheiro de aplicativos em computação',]);

        CompanyOccupationsModel::create(['code'=>'212210','occupation'=>'Engenheiro de equipamentos em computação','filter'=>'engenheiro de equipamentos em computação',]);

        CompanyOccupationsModel::create(['code'=>'212215','occupation'=>'Engenheiros de sistemas operacionais em computação','filter'=>'engenheiros de sistemas operacionais em computação',]);

        CompanyOccupationsModel::create(['code'=>'212305','occupation'=>'Administrador de banco de dados','filter'=>'administrador de banco de dados',]);

        CompanyOccupationsModel::create(['code'=>'212310','occupation'=>'Administrador de redes','filter'=>'administrador de redes',]);

        CompanyOccupationsModel::create(['code'=>'212315','occupation'=>'Administrador de sistemas operacionais','filter'=>'administrador de sistemas operacionais',]);

        CompanyOccupationsModel::create(['code'=>'212320','occupation'=>'Administrador em segurança da informação','filter'=>'administrador em segurança da informação',]);

        CompanyOccupationsModel::create(['code'=>'212405','occupation'=>'Analista de desenvolvimento de sistemas','filter'=>'analista de desenvolvimento de sistemas',]);

        CompanyOccupationsModel::create(['code'=>'212410','occupation'=>'Analista de redes e de comunicação de dados','filter'=>'analista de redes e de comunicação de dados',]);

        CompanyOccupationsModel::create(['code'=>'212415','occupation'=>'Analista de sistemas de automação','filter'=>'analista de sistemas de automação',]);

        CompanyOccupationsModel::create(['code'=>'212420','occupation'=>'Analista de suporte computacional','filter'=>'analista de suporte computacional',]);

        CompanyOccupationsModel::create(['code'=>'212425','occupation'=>'Arquiteto de soluções de tecnologia da informação','filter'=>'arquiteto de soluções de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'212430','occupation'=>'Analista de testes de tecnologia da informação','filter'=>'analista de testes de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'213105','occupation'=>'Físico','filter'=>'físico',]);

        CompanyOccupationsModel::create(['code'=>'213110','occupation'=>'Físico (acústica)','filter'=>'físico (acústica)',]);

        CompanyOccupationsModel::create(['code'=>'213115','occupation'=>'Físico (atômica e molecular)','filter'=>'físico (atômica e molecular)',]);

        CompanyOccupationsModel::create(['code'=>'213120','occupation'=>'Físico (cosmologia)','filter'=>'físico (cosmologia)',]);

        CompanyOccupationsModel::create(['code'=>'213125','occupation'=>'Físico (estatística e matemática)','filter'=>'físico (estatística e matemática)',]);

        CompanyOccupationsModel::create(['code'=>'213130','occupation'=>'Físico (fluidos)','filter'=>'físico (fluidos)',]);

        CompanyOccupationsModel::create(['code'=>'213135','occupation'=>'Físico (instrumentação)','filter'=>'físico (instrumentação)',]);

        CompanyOccupationsModel::create(['code'=>'213140','occupation'=>'Físico (matéria condensada)','filter'=>'físico (matéria condensada)',]);

        CompanyOccupationsModel::create(['code'=>'213145','occupation'=>'Físico (materiais)','filter'=>'físico (materiais)',]);

        CompanyOccupationsModel::create(['code'=>'213150','occupation'=>'Físico (medicina)','filter'=>'físico (medicina)',]);

        CompanyOccupationsModel::create(['code'=>'213155','occupation'=>'Físico (nuclear e reatores)','filter'=>'físico (nuclear e reatores)',]);

        CompanyOccupationsModel::create(['code'=>'213160','occupation'=>'Físico (óptica)','filter'=>'físico (óptica)',]);

        CompanyOccupationsModel::create(['code'=>'213165','occupation'=>'Físico (partículas e campos)','filter'=>'físico (partículas e campos)',]);

        CompanyOccupationsModel::create(['code'=>'213170','occupation'=>'Físico (plasma)','filter'=>'físico (plasma)',]);

        CompanyOccupationsModel::create(['code'=>'213175','occupation'=>'Físico (térmica)','filter'=>'físico (térmica)',]);

        CompanyOccupationsModel::create(['code'=>'213205','occupation'=>'Químico','filter'=>'químico',]);

        CompanyOccupationsModel::create(['code'=>'213210','occupation'=>'Químico industrial','filter'=>'químico industrial',]);

        CompanyOccupationsModel::create(['code'=>'213215','occupation'=>'Tecnólogo em processos químicos','filter'=>'tecnólogo em processos químicos',]);

        CompanyOccupationsModel::create(['code'=>'213305','occupation'=>'Astrônomo','filter'=>'astrônomo',]);

        CompanyOccupationsModel::create(['code'=>'213310','occupation'=>'Geofísico espacial','filter'=>'geofísico espacial',]);

        CompanyOccupationsModel::create(['code'=>'213315','occupation'=>'Meteorologista','filter'=>'meteorologista',]);

        CompanyOccupationsModel::create(['code'=>'213405','occupation'=>'Geólogo','filter'=>'geólogo',]);

        CompanyOccupationsModel::create(['code'=>'213410','occupation'=>'Geólogo de engenharia','filter'=>'geólogo de engenharia',]);

        CompanyOccupationsModel::create(['code'=>'213415','occupation'=>'Geofísico','filter'=>'geofísico',]);

        CompanyOccupationsModel::create(['code'=>'213420','occupation'=>'Geoquímico','filter'=>'geoquímico',]);

        CompanyOccupationsModel::create(['code'=>'213425','occupation'=>'Hidrogeólogo','filter'=>'hidrogeólogo',]);

        CompanyOccupationsModel::create(['code'=>'213430','occupation'=>'Paleontólogo','filter'=>'paleontólogo',]);

        CompanyOccupationsModel::create(['code'=>'213435','occupation'=>'Petrógrafo','filter'=>'petrógrafo',]);

        CompanyOccupationsModel::create(['code'=>'213440','occupation'=>'Oceanógrafo','filter'=>'oceanógrafo',]);

        CompanyOccupationsModel::create(['code'=>'214005','occupation'=>'Engenheiro ambiental','filter'=>'engenheiro ambiental',]);

        CompanyOccupationsModel::create(['code'=>'214010','occupation'=>'Tecnólogo em meio ambiente','filter'=>'tecnólogo em meio ambiente',]);

        CompanyOccupationsModel::create(['code'=>'214105','occupation'=>'Arquiteto de edificações','filter'=>'arquiteto de edificações',]);

        CompanyOccupationsModel::create(['code'=>'214110','occupation'=>'Arquiteto de interiores','filter'=>'arquiteto de interiores',]);

        CompanyOccupationsModel::create(['code'=>'214115','occupation'=>'Arquiteto de patrimônio','filter'=>'arquiteto de patrimônio',]);

        CompanyOccupationsModel::create(['code'=>'214120','occupation'=>'Arquiteto paisagista','filter'=>'arquiteto paisagista',]);

        CompanyOccupationsModel::create(['code'=>'214125','occupation'=>'Arquiteto urbanista','filter'=>'arquiteto urbanista',]);

        CompanyOccupationsModel::create(['code'=>'214130','occupation'=>'Urbanista','filter'=>'urbanista',]);

        CompanyOccupationsModel::create(['code'=>'214205','occupation'=>'Engenheiro civil','filter'=>'engenheiro civil',]);

        CompanyOccupationsModel::create(['code'=>'214210','occupation'=>'Engenheiro civil (aeroportos)','filter'=>'engenheiro civil (aeroportos)',]);

        CompanyOccupationsModel::create(['code'=>'214215','occupation'=>'Engenheiro civil (edificações)','filter'=>'engenheiro civil (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'214220','occupation'=>'Engenheiro civil (estruturas metálicas)','filter'=>'engenheiro civil (estruturas metálicas)',]);

        CompanyOccupationsModel::create(['code'=>'214225','occupation'=>'Engenheiro civil (ferrovias e metrovias)','filter'=>'engenheiro civil (ferrovias e metrovias)',]);

        CompanyOccupationsModel::create(['code'=>'214230','occupation'=>'Engenheiro civil (geotécnia)','filter'=>'engenheiro civil (geotécnia)',]);

        CompanyOccupationsModel::create(['code'=>'214235','occupation'=>'Engenheiro civil (hidrologia)','filter'=>'engenheiro civil (hidrologia)',]);

        CompanyOccupationsModel::create(['code'=>'214240','occupation'=>'Engenheiro civil (hidráulica)','filter'=>'engenheiro civil (hidráulica)',]);

        CompanyOccupationsModel::create(['code'=>'214245','occupation'=>'Engenheiro civil (pontes e viadutos)','filter'=>'engenheiro civil (pontes e viadutos)',]);

        CompanyOccupationsModel::create(['code'=>'214250','occupation'=>'Engenheiro civil (portos e vias navegáveis)','filter'=>'engenheiro civil (portos e vias navegáveis)',]);

        CompanyOccupationsModel::create(['code'=>'214255','occupation'=>'Engenheiro civil (rodovias)','filter'=>'engenheiro civil (rodovias)',]);

        CompanyOccupationsModel::create(['code'=>'214260','occupation'=>'Engenheiro civil (saneamento)','filter'=>'engenheiro civil (saneamento)',]);

        CompanyOccupationsModel::create(['code'=>'214265','occupation'=>'Engenheiro civil (túneis)','filter'=>'engenheiro civil (túneis)',]);

        CompanyOccupationsModel::create(['code'=>'214270','occupation'=>'Engenheiro civil (transportes e trânsito)','filter'=>'engenheiro civil (transportes e trânsito)',]);

        CompanyOccupationsModel::create(['code'=>'214280','occupation'=>'Tecnólogo em construção civil','filter'=>'tecnólogo em construção civil',]);

        CompanyOccupationsModel::create(['code'=>'214305','occupation'=>'Engenheiro eletricista','filter'=>'engenheiro eletricista',]);

        CompanyOccupationsModel::create(['code'=>'214310','occupation'=>'Engenheiro eletrônico','filter'=>'engenheiro eletrônico',]);

        CompanyOccupationsModel::create(['code'=>'214315','occupation'=>'Engenheiro eletricista de manutenção','filter'=>'engenheiro eletricista de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'214320','occupation'=>'Engenheiro eletricista de projetos','filter'=>'engenheiro eletricista de projetos',]);

        CompanyOccupationsModel::create(['code'=>'214325','occupation'=>'Engenheiro eletrônico de manutenção','filter'=>'engenheiro eletrônico de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'214330','occupation'=>'Engenheiro eletrônico de projetos','filter'=>'engenheiro eletrônico de projetos',]);

        CompanyOccupationsModel::create(['code'=>'214335','occupation'=>'Engenheiro de manutenção de telecomunicações','filter'=>'engenheiro de manutenção de telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'214340','occupation'=>'Engenheiro de telecomunicações','filter'=>'engenheiro de telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'214345','occupation'=>'Engenheiro projetista de telecomunicações','filter'=>'engenheiro projetista de telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'214350','occupation'=>'Engenheiro de redes de comunicação','filter'=>'engenheiro de redes de comunicação',]);

        CompanyOccupationsModel::create(['code'=>'214360','occupation'=>'Tecnólogo em eletricidade','filter'=>'tecnólogo em eletricidade',]);

        CompanyOccupationsModel::create(['code'=>'214365','occupation'=>'Tecnólogo em eletrônica','filter'=>'tecnólogo em eletrônica',]);

        CompanyOccupationsModel::create(['code'=>'214370','occupation'=>'Tecnólogo em telecomunicações','filter'=>'tecnólogo em telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'214375','occupation'=>'Engenheiro de energia','filter'=>'engenheiro de energia',]);

        CompanyOccupationsModel::create(['code'=>'214380','occupation'=>'Engenheiro biomédico','filter'=>'engenheiro biomédico',]);

        CompanyOccupationsModel::create(['code'=>'214405','occupation'=>'Engenheiro mecânico','filter'=>'engenheiro mecânico',]);

        CompanyOccupationsModel::create(['code'=>'214410','occupation'=>'Engenheiro mecânico automotivo','filter'=>'engenheiro mecânico automotivo',]);

        CompanyOccupationsModel::create(['code'=>'214415','occupation'=>'Engenheiro mecânico (energia nuclear)','filter'=>'engenheiro mecânico (energia nuclear)',]);

        CompanyOccupationsModel::create(['code'=>'214420','occupation'=>'Engenheiro mecânico industrial','filter'=>'engenheiro mecânico industrial',]);

        CompanyOccupationsModel::create(['code'=>'214425','occupation'=>'Engenheiro aeronáutico','filter'=>'engenheiro aeronáutico',]);

        CompanyOccupationsModel::create(['code'=>'214430','occupation'=>'Engenheiro naval','filter'=>'engenheiro naval',]);

        CompanyOccupationsModel::create(['code'=>'214435','occupation'=>'Tecnólogo em fabricação mecânica','filter'=>'tecnólogo em fabricação mecânica',]);

        CompanyOccupationsModel::create(['code'=>'214505','occupation'=>'Engenheiro químico','filter'=>'engenheiro químico',]);

        CompanyOccupationsModel::create(['code'=>'214510','occupation'=>'Engenheiro químico (indústria química)','filter'=>'engenheiro químico (indústria química)',]);

        CompanyOccupationsModel::create(['code'=>'214515','occupation'=>'Engenheiro químico (mineração, metalurgia, siderurgia, cimenteira e cerâmica)','filter'=>'engenheiro químico (mineração, metalurgia, siderurgia, cimenteira e cerâmica)',]);

        CompanyOccupationsModel::create(['code'=>'214520','occupation'=>'Engenheiro químico (papel e celulose)','filter'=>'engenheiro químico (papel e celulose)',]);

        CompanyOccupationsModel::create(['code'=>'214525','occupation'=>'Engenheiro químico (petróleo e borracha)','filter'=>'engenheiro químico (petróleo e borracha)',]);

        CompanyOccupationsModel::create(['code'=>'214530','occupation'=>'Engenheiro químico (utilidades e meio ambiente)','filter'=>'engenheiro químico (utilidades e meio ambiente)',]);

        CompanyOccupationsModel::create(['code'=>'214535','occupation'=>'Tecnólogo em produção sulcroalcooleira','filter'=>'tecnólogo em produção sulcroalcooleira',]);

        CompanyOccupationsModel::create(['code'=>'214540','occupation'=>'Engenheiro têxtil','filter'=>'engenheiro têxtil',]);

        CompanyOccupationsModel::create(['code'=>'214605','occupation'=>'Engenheiro de materiais','filter'=>'engenheiro de materiais',]);

        CompanyOccupationsModel::create(['code'=>'214610','occupation'=>'Engenheiro metalurgista','filter'=>'engenheiro metalurgista',]);

        CompanyOccupationsModel::create(['code'=>'214615','occupation'=>'Tecnólogo em metalurgia','filter'=>'tecnólogo em metalurgia',]);

        CompanyOccupationsModel::create(['code'=>'214705','occupation'=>'Engenheiro de minas','filter'=>'engenheiro de minas',]);

        CompanyOccupationsModel::create(['code'=>'214710','occupation'=>'Engenheiro de minas (beneficiamento)','filter'=>'engenheiro de minas (beneficiamento)',]);

        CompanyOccupationsModel::create(['code'=>'214715','occupation'=>'Engenheiro de minas (lavra a céu aberto)','filter'=>'engenheiro de minas (lavra a céu aberto)',]);

        CompanyOccupationsModel::create(['code'=>'214720','occupation'=>'Engenheiro de minas (lavra subterrânea)','filter'=>'engenheiro de minas (lavra subterrânea)',]);

        CompanyOccupationsModel::create(['code'=>'214725','occupation'=>'Engenheiro de minas (pesquisa mineral)','filter'=>'engenheiro de minas (pesquisa mineral)',]);

        CompanyOccupationsModel::create(['code'=>'214730','occupation'=>'Engenheiro de minas (planejamento)','filter'=>'engenheiro de minas (planejamento)',]);

        CompanyOccupationsModel::create(['code'=>'214735','occupation'=>'Engenheiro de minas (processo)','filter'=>'engenheiro de minas (processo)',]);

        CompanyOccupationsModel::create(['code'=>'214740','occupation'=>'Engenheiro de minas (projeto)','filter'=>'engenheiro de minas (projeto)',]);

        CompanyOccupationsModel::create(['code'=>'214745','occupation'=>'Tecnólogo em petróleo e gás','filter'=>'tecnólogo em petróleo e gás',]);

        CompanyOccupationsModel::create(['code'=>'214750','occupation'=>'Tecnólogo em rochas ornamentais','filter'=>'tecnólogo em rochas ornamentais',]);

        CompanyOccupationsModel::create(['code'=>'214805','occupation'=>'Engenheiro agrimensor','filter'=>'engenheiro agrimensor',]);

        CompanyOccupationsModel::create(['code'=>'214810','occupation'=>'Engenheiro cartógrafo','filter'=>'engenheiro cartógrafo',]);

        CompanyOccupationsModel::create(['code'=>'214905','occupation'=>'Engenheiro de produção','filter'=>'engenheiro de produção',]);

        CompanyOccupationsModel::create(['code'=>'214910','occupation'=>'Engenheiro de controle de qualidade','filter'=>'engenheiro de controle de qualidade',]);

        CompanyOccupationsModel::create(['code'=>'214915','occupation'=>'Engenheiro de segurança do trabalho','filter'=>'engenheiro de segurança do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'214920','occupation'=>'Engenheiro de riscos','filter'=>'engenheiro de riscos',]);

        CompanyOccupationsModel::create(['code'=>'214925','occupation'=>'Engenheiro de tempos e movimentos','filter'=>'engenheiro de tempos e movimentos',]);

        CompanyOccupationsModel::create(['code'=>'214930','occupation'=>'Tecnólogo em produção industrial','filter'=>'tecnólogo em produção industrial',]);

        CompanyOccupationsModel::create(['code'=>'214935','occupation'=>'Tecnólogo em segurança do trabalho','filter'=>'tecnólogo em segurança do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'214940','occupation'=>'Higienista ocupacional','filter'=>'higienista ocupacional',]);

        CompanyOccupationsModel::create(['code'=>'214945','occupation'=>'Engenheiro de logistica','filter'=>'engenheiro de logistica',]);

        CompanyOccupationsModel::create(['code'=>'215105','occupation'=>'Agente de manobra e docagem','filter'=>'agente de manobra e docagem',]);

        CompanyOccupationsModel::create(['code'=>'215110','occupation'=>'Capitão de manobra da marinha mercante','filter'=>'capitão de manobra da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215115','occupation'=>'Comandante da marinha mercante','filter'=>'comandante da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215120','occupation'=>'Coordenador de operações de combate à poluição no meio aquaviário','filter'=>'coordenador de operações de combate à poluição no meio aquaviário',]);

        CompanyOccupationsModel::create(['code'=>'215125','occupation'=>'Imediato da marinha mercante','filter'=>'imediato da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215130','occupation'=>'Inspetor de terminal','filter'=>'inspetor de terminal',]);

        CompanyOccupationsModel::create(['code'=>'215135','occupation'=>'Inspetor naval','filter'=>'inspetor naval',]);

        CompanyOccupationsModel::create(['code'=>'215140','occupation'=>'Oficial de quarto de navegação da marinha mercante','filter'=>'oficial de quarto de navegação da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215145','occupation'=>'Prático de portos da marinha mercante','filter'=>'prático de portos da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215150','occupation'=>'Vistoriador naval','filter'=>'vistoriador naval',]);

        CompanyOccupationsModel::create(['code'=>'215205','occupation'=>'Oficial superior de máquinas da marinha mercante','filter'=>'oficial superior de máquinas da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215210','occupation'=>'Primeiro oficial de máquinas da marinha mercante','filter'=>'primeiro oficial de máquinas da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215215','occupation'=>'Segundo oficial de máquinas da marinha mercante','filter'=>'segundo oficial de máquinas da marinha mercante',]);

        CompanyOccupationsModel::create(['code'=>'215220','occupation'=>'Superintendente técnico no transporte aquaviário','filter'=>'superintendente técnico no transporte aquaviário',]);

        CompanyOccupationsModel::create(['code'=>'215305','occupation'=>'Piloto de aeronaves','filter'=>'piloto de aeronaves',]);

        CompanyOccupationsModel::create(['code'=>'215310','occupation'=>'Piloto de ensaios em vôo','filter'=>'piloto de ensaios em vôo',]);

        CompanyOccupationsModel::create(['code'=>'215315','occupation'=>'Instrutor de vôo','filter'=>'instrutor de vôo',]);

        CompanyOccupationsModel::create(['code'=>'221105','occupation'=>'Biólogo','filter'=>'biólogo',]);

        CompanyOccupationsModel::create(['code'=>'221205','occupation'=>'Biomédico','filter'=>'biomédico',]);

        CompanyOccupationsModel::create(['code'=>'222105','occupation'=>'Engenheiro agrícola','filter'=>'engenheiro agrícola',]);

        CompanyOccupationsModel::create(['code'=>'222110','occupation'=>'Engenheiro agrônomo','filter'=>'engenheiro agrônomo',]);

        CompanyOccupationsModel::create(['code'=>'222115','occupation'=>'Engenheiro de pesca','filter'=>'engenheiro de pesca',]);

        CompanyOccupationsModel::create(['code'=>'222120','occupation'=>'Engenheiro florestal','filter'=>'engenheiro florestal',]);

        CompanyOccupationsModel::create(['code'=>'222125','occupation'=>'Tecnólogo em agronegócio','filter'=>'tecnólogo em agronegócio',]);

        CompanyOccupationsModel::create(['code'=>'222205','occupation'=>'Engenheiro de alimentos','filter'=>'engenheiro de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'222215','occupation'=>'Tecnólogo em alimentos','filter'=>'tecnólogo em alimentos',]);

        CompanyOccupationsModel::create(['code'=>'223204','occupation'=>'Cirurgião dentista - auditor','filter'=>'cirurgião dentista - auditor',]);

        CompanyOccupationsModel::create(['code'=>'223208','occupation'=>'Cirurgião dentista - clínico geral','filter'=>'cirurgião dentista - clínico geral',]);

        CompanyOccupationsModel::create(['code'=>'223212','occupation'=>'Cirurgião dentista - endodontista','filter'=>'cirurgião dentista - endodontista',]);

        CompanyOccupationsModel::create(['code'=>'223216','occupation'=>'Cirurgião dentista - epidemiologista','filter'=>'cirurgião dentista - epidemiologista',]);

        CompanyOccupationsModel::create(['code'=>'223220','occupation'=>'Cirurgião dentista - estomatologista','filter'=>'cirurgião dentista - estomatologista',]);

        CompanyOccupationsModel::create(['code'=>'223224','occupation'=>'Cirurgião dentista - implantodontista','filter'=>'cirurgião dentista - implantodontista',]);

        CompanyOccupationsModel::create(['code'=>'223228','occupation'=>'Cirurgião dentista - odontogeriatra','filter'=>'cirurgião dentista - odontogeriatra',]);

        CompanyOccupationsModel::create(['code'=>'223232','occupation'=>'Cirurgião dentista - odontologista legal','filter'=>'cirurgião dentista - odontologista legal',]);

        CompanyOccupationsModel::create(['code'=>'223236','occupation'=>'Cirurgião dentista - odontopediatra','filter'=>'cirurgião dentista - odontopediatra',]);

        CompanyOccupationsModel::create(['code'=>'223240','occupation'=>'Cirurgião dentista - ortopedista e ortodontista','filter'=>'cirurgião dentista - ortopedista e ortodontista',]);

        CompanyOccupationsModel::create(['code'=>'223244','occupation'=>'Cirurgião dentista - patologista bucal','filter'=>'cirurgião dentista - patologista bucal',]);

        CompanyOccupationsModel::create(['code'=>'223248','occupation'=>'Cirurgião dentista - periodontista','filter'=>'cirurgião dentista - periodontista',]);

        CompanyOccupationsModel::create(['code'=>'223252','occupation'=>'Cirurgião dentista - protesiólogo bucomaxilofacial','filter'=>'cirurgião dentista - protesiólogo bucomaxilofacial',]);

        CompanyOccupationsModel::create(['code'=>'223256','occupation'=>'Cirurgião dentista - protesista','filter'=>'cirurgião dentista - protesista',]);

        CompanyOccupationsModel::create(['code'=>'223260','occupation'=>'Cirurgião dentista - radiologista','filter'=>'cirurgião dentista - radiologista',]);

        CompanyOccupationsModel::create(['code'=>'223264','occupation'=>'Cirurgião dentista - reabilitador oral','filter'=>'cirurgião dentista - reabilitador oral',]);

        CompanyOccupationsModel::create(['code'=>'223268','occupation'=>'Cirurgião dentista - traumatologista bucomaxilofacial','filter'=>'cirurgião dentista - traumatologista bucomaxilofacial',]);

        CompanyOccupationsModel::create(['code'=>'223272','occupation'=>'Cirurgião dentista de saúde coletiva','filter'=>'cirurgião dentista de saúde coletiva',]);

        CompanyOccupationsModel::create(['code'=>'223276','occupation'=>'Cirurgião dentista - odontologia do trabalho','filter'=>'cirurgião dentista - odontologia do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'223280','occupation'=>'Cirurgião dentista - dentística','filter'=>'cirurgião dentista - dentística',]);

        CompanyOccupationsModel::create(['code'=>'223284','occupation'=>'Cirurgião dentista - disfunção temporomandibular e dor orofacial','filter'=>'cirurgião dentista - disfunção temporomandibular e dor orofacial',]);

        CompanyOccupationsModel::create(['code'=>'223288','occupation'=>'Cirurgião dentista - odontologia para pacientes com necessidades especiais','filter'=>'cirurgião dentista - odontologia para pacientes com necessidades especiais',]);

        CompanyOccupationsModel::create(['code'=>'223293','occupation'=>'Cirurgião-dentista da estratégia de saúde da família','filter'=>'cirurgião-dentista da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'223305','occupation'=>'Médico veterinário','filter'=>'médico veterinário',]);

        CompanyOccupationsModel::create(['code'=>'223310','occupation'=>'Zootecnista','filter'=>'zootecnista',]);

        CompanyOccupationsModel::create(['code'=>'223405','occupation'=>'Farmacêutico','filter'=>'farmacêutico',]);

        CompanyOccupationsModel::create(['code'=>'223415','occupation'=>'Farmacêutico analista clínico','filter'=>'farmacêutico analista clínico',]);

        CompanyOccupationsModel::create(['code'=>'223420','occupation'=>'Farmacêutico de alimentos','filter'=>'farmacêutico de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'223425','occupation'=>'Farmacêutico práticas integrativas e complementares','filter'=>'farmacêutico práticas integrativas e complementares',]);

        CompanyOccupationsModel::create(['code'=>'223430','occupation'=>'Farmacêutico em saúde pública','filter'=>'farmacêutico em saúde pública',]);

        CompanyOccupationsModel::create(['code'=>'223435','occupation'=>'Farmacêutico industrial','filter'=>'farmacêutico industrial',]);

        CompanyOccupationsModel::create(['code'=>'223440','occupation'=>'Farmacêutico toxicologista','filter'=>'farmacêutico toxicologista',]);

        CompanyOccupationsModel::create(['code'=>'223445','occupation'=>'Farmacêutico hospitalar e clínico','filter'=>'farmacêutico hospitalar e clínico',]);

        CompanyOccupationsModel::create(['code'=>'223505','occupation'=>'Enfermeiro','filter'=>'enfermeiro',]);

        CompanyOccupationsModel::create(['code'=>'223510','occupation'=>'Enfermeiro auditor','filter'=>'enfermeiro auditor',]);

        CompanyOccupationsModel::create(['code'=>'223515','occupation'=>'Enfermeiro de bordo','filter'=>'enfermeiro de bordo',]);

        CompanyOccupationsModel::create(['code'=>'223520','occupation'=>'Enfermeiro de centro cirúrgico','filter'=>'enfermeiro de centro cirúrgico',]);

        CompanyOccupationsModel::create(['code'=>'223525','occupation'=>'Enfermeiro de terapia intensiva','filter'=>'enfermeiro de terapia intensiva',]);

        CompanyOccupationsModel::create(['code'=>'223530','occupation'=>'Enfermeiro do trabalho','filter'=>'enfermeiro do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'223535','occupation'=>'Enfermeiro nefrologista','filter'=>'enfermeiro nefrologista',]);

        CompanyOccupationsModel::create(['code'=>'223540','occupation'=>'Enfermeiro neonatologista','filter'=>'enfermeiro neonatologista',]);

        CompanyOccupationsModel::create(['code'=>'223545','occupation'=>'Enfermeiro obstétrico','filter'=>'enfermeiro obstétrico',]);

        CompanyOccupationsModel::create(['code'=>'223550','occupation'=>'Enfermeiro psiquiátrico','filter'=>'enfermeiro psiquiátrico',]);

        CompanyOccupationsModel::create(['code'=>'223555','occupation'=>'Enfermeiro puericultor e pediátrico','filter'=>'enfermeiro puericultor e pediátrico',]);

        CompanyOccupationsModel::create(['code'=>'223560','occupation'=>'Enfermeiro sanitarista','filter'=>'enfermeiro sanitarista',]);

        CompanyOccupationsModel::create(['code'=>'223565','occupation'=>'Enfermeiro da estratégia de saúde da família','filter'=>'enfermeiro da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'223570','occupation'=>'Perfusionista','filter'=>'perfusionista',]);

        CompanyOccupationsModel::create(['code'=>'223575','occupation'=>'Obstetriz','filter'=>'obstetriz',]);

        CompanyOccupationsModel::create(['code'=>'223580','occupation'=>'Enfermeiro estomaterapeuta','filter'=>'enfermeiro estomaterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'223585','occupation'=>'Enfermeiro forense','filter'=>'enfermeiro forense',]);

        CompanyOccupationsModel::create(['code'=>'223605','occupation'=>'Fisioterapeuta geral','filter'=>'fisioterapeuta geral',]);

        CompanyOccupationsModel::create(['code'=>'223625','occupation'=>'Fisioterapeuta respiratória','filter'=>'fisioterapeuta respiratória',]);

        CompanyOccupationsModel::create(['code'=>'223630','occupation'=>'Fisioterapeuta neurofuncional','filter'=>'fisioterapeuta neurofuncional',]);

        CompanyOccupationsModel::create(['code'=>'223635','occupation'=>'Fisioterapeuta traumato-ortopédica funcional','filter'=>'fisioterapeuta traumato-ortopédica funcional',]);

        CompanyOccupationsModel::create(['code'=>'223640','occupation'=>'Fisioterapeuta osteopata','filter'=>'fisioterapeuta osteopata',]);

        CompanyOccupationsModel::create(['code'=>'223645','occupation'=>'Fisioterapeuta quiropraxista','filter'=>'fisioterapeuta quiropraxista',]);

        CompanyOccupationsModel::create(['code'=>'223650','occupation'=>'Fisioterapeuta acupunturista','filter'=>'fisioterapeuta acupunturista',]);

        CompanyOccupationsModel::create(['code'=>'223655','occupation'=>'Fisioterapeuta esportivo','filter'=>'fisioterapeuta esportivo',]);

        CompanyOccupationsModel::create(['code'=>'223660','occupation'=>'Fisioterapeuta do trabalho','filter'=>'fisioterapeuta do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'223705','occupation'=>'Dietista','filter'=>'dietista',]);

        CompanyOccupationsModel::create(['code'=>'223710','occupation'=>'Nutricionista','filter'=>'nutricionista',]);

        CompanyOccupationsModel::create(['code'=>'223810','occupation'=>'Fonoaudiólogo geral','filter'=>'fonoaudiólogo geral',]);

        CompanyOccupationsModel::create(['code'=>'223815','occupation'=>'Fonoaudiólogo educacional','filter'=>'fonoaudiólogo educacional',]);

        CompanyOccupationsModel::create(['code'=>'223820','occupation'=>'Fonoaudiólogo em audiologia','filter'=>'fonoaudiólogo em audiologia',]);

        CompanyOccupationsModel::create(['code'=>'223825','occupation'=>'Fonoaudiólogo em disfagia','filter'=>'fonoaudiólogo em disfagia',]);

        CompanyOccupationsModel::create(['code'=>'223830','occupation'=>'Fonoaudiólogo em linguagem','filter'=>'fonoaudiólogo em linguagem',]);

        CompanyOccupationsModel::create(['code'=>'223835','occupation'=>'Fonoaudiólogo em motricidade orofacial','filter'=>'fonoaudiólogo em motricidade orofacial',]);

        CompanyOccupationsModel::create(['code'=>'223840','occupation'=>'Fonoaudiólogo em saúde coletiva','filter'=>'fonoaudiólogo em saúde coletiva',]);

        CompanyOccupationsModel::create(['code'=>'223845','occupation'=>'Fonoaudiólogo em voz','filter'=>'fonoaudiólogo em voz',]);

        CompanyOccupationsModel::create(['code'=>'223905','occupation'=>'Terapeuta ocupacional','filter'=>'terapeuta ocupacional',]);

        CompanyOccupationsModel::create(['code'=>'223910','occupation'=>'Ortoptista','filter'=>'ortoptista',]);

        CompanyOccupationsModel::create(['code'=>'223915','occupation'=>'Psicomotricista','filter'=>'psicomotricista',]);

        CompanyOccupationsModel::create(['code'=>'224105','occupation'=>'Avaliador físico','filter'=>'avaliador físico',]);

        CompanyOccupationsModel::create(['code'=>'224110','occupation'=>'Ludomotricista','filter'=>'ludomotricista',]);

        CompanyOccupationsModel::create(['code'=>'224115','occupation'=>'Preparador de atleta','filter'=>'preparador de atleta',]);

        CompanyOccupationsModel::create(['code'=>'224120','occupation'=>'Preparador físico','filter'=>'preparador físico',]);

        CompanyOccupationsModel::create(['code'=>'224125','occupation'=>'Técnico de desporto individual e coletivo (exceto futebol)','filter'=>'técnico de desporto individual e coletivo (exceto futebol)',]);

        CompanyOccupationsModel::create(['code'=>'224130','occupation'=>'Técnico de laboratório e fiscalização desportiva','filter'=>'técnico de laboratório e fiscalização desportiva',]);

        CompanyOccupationsModel::create(['code'=>'224135','occupation'=>'Treinador profissional de futebol','filter'=>'treinador profissional de futebol',]);

        CompanyOccupationsModel::create(['code'=>'224140','occupation'=>'Profissional de educação física na saúde','filter'=>'profissional de educação física na saúde',]);

        CompanyOccupationsModel::create(['code'=>'225103','occupation'=>'Médico infectologista','filter'=>'médico infectologista',]);

        CompanyOccupationsModel::create(['code'=>'225105','occupation'=>'Médico acupunturista','filter'=>'médico acupunturista',]);

        CompanyOccupationsModel::create(['code'=>'225106','occupation'=>'Médico legista','filter'=>'médico legista',]);

        CompanyOccupationsModel::create(['code'=>'225109','occupation'=>'Médico nefrologista','filter'=>'médico nefrologista',]);

        CompanyOccupationsModel::create(['code'=>'225110','occupation'=>'Médico alergista e imunologista','filter'=>'médico alergista e imunologista',]);

        CompanyOccupationsModel::create(['code'=>'225112','occupation'=>'Médico neurologista','filter'=>'médico neurologista',]);

        CompanyOccupationsModel::create(['code'=>'225115','occupation'=>'Médico angiologista','filter'=>'médico angiologista',]);

        CompanyOccupationsModel::create(['code'=>'225118','occupation'=>'Médico nutrologista','filter'=>'médico nutrologista',]);

        CompanyOccupationsModel::create(['code'=>'225120','occupation'=>'Médico cardiologista','filter'=>'médico cardiologista',]);

        CompanyOccupationsModel::create(['code'=>'225121','occupation'=>'Médico oncologista clínico','filter'=>'médico oncologista clínico',]);

        CompanyOccupationsModel::create(['code'=>'225122','occupation'=>'Médico cancerologista pediátrico','filter'=>'médico cancerologista pediátrico',]);

        CompanyOccupationsModel::create(['code'=>'225124','occupation'=>'Médico pediatra','filter'=>'médico pediatra',]);

        CompanyOccupationsModel::create(['code'=>'225125','occupation'=>'Médico clínico','filter'=>'médico clínico',]);

        CompanyOccupationsModel::create(['code'=>'225127','occupation'=>'Médico pneumologista','filter'=>'médico pneumologista',]);

        CompanyOccupationsModel::create(['code'=>'225130','occupation'=>'Médico de família e comunidade','filter'=>'médico de família e comunidade',]);

        CompanyOccupationsModel::create(['code'=>'225133','occupation'=>'Médico psiquiatra','filter'=>'médico psiquiatra',]);

        CompanyOccupationsModel::create(['code'=>'225135','occupation'=>'Médico dermatologista','filter'=>'médico dermatologista',]);

        CompanyOccupationsModel::create(['code'=>'225136','occupation'=>'Médico reumatologista','filter'=>'médico reumatologista',]);

        CompanyOccupationsModel::create(['code'=>'225139','occupation'=>'Médico sanitarista','filter'=>'médico sanitarista',]);

        CompanyOccupationsModel::create(['code'=>'225140','occupation'=>'Médico do trabalho','filter'=>'médico do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'225142','occupation'=>'Médico da estratégia de saúde da família','filter'=>'médico da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'225145','occupation'=>'Médico em medicina de tráfego','filter'=>'médico em medicina de tráfego',]);

        CompanyOccupationsModel::create(['code'=>'225148','occupation'=>'Médico anatomopatologista','filter'=>'médico anatomopatologista',]);

        CompanyOccupationsModel::create(['code'=>'225150','occupation'=>'Médico em medicina intensiva','filter'=>'médico em medicina intensiva',]);

        CompanyOccupationsModel::create(['code'=>'225151','occupation'=>'Médico anestesiologista','filter'=>'médico anestesiologista',]);

        CompanyOccupationsModel::create(['code'=>'225154','occupation'=>'Médico antroposófico','filter'=>'médico antroposófico',]);

        CompanyOccupationsModel::create(['code'=>'225155','occupation'=>'Médico endocrinologista e metabologista','filter'=>'médico endocrinologista e metabologista',]);

        CompanyOccupationsModel::create(['code'=>'225160','occupation'=>'Médico fisiatra','filter'=>'médico fisiatra',]);

        CompanyOccupationsModel::create(['code'=>'225165','occupation'=>'Médico gastroenterologista','filter'=>'médico gastroenterologista',]);

        CompanyOccupationsModel::create(['code'=>'225170','occupation'=>'Médico generalista','filter'=>'médico generalista',]);

        CompanyOccupationsModel::create(['code'=>'225175','occupation'=>'Médico geneticista','filter'=>'médico geneticista',]);

        CompanyOccupationsModel::create(['code'=>'225180','occupation'=>'Médico geriatra','filter'=>'médico geriatra',]);

        CompanyOccupationsModel::create(['code'=>'225185','occupation'=>'Médico hematologista','filter'=>'médico hematologista',]);

        CompanyOccupationsModel::create(['code'=>'225195','occupation'=>'Médico homeopata','filter'=>'médico homeopata',]);

        CompanyOccupationsModel::create(['code'=>'225203','occupation'=>'Médico em cirurgia vascular','filter'=>'médico em cirurgia vascular',]);

        CompanyOccupationsModel::create(['code'=>'225210','occupation'=>'Médico cirurgião cardiovascular','filter'=>'médico cirurgião cardiovascular',]);

        CompanyOccupationsModel::create(['code'=>'225215','occupation'=>'Médico cirurgião de cabeça e pescoço','filter'=>'médico cirurgião de cabeça e pescoço',]);

        CompanyOccupationsModel::create(['code'=>'225220','occupation'=>'Médico cirurgião do aparelho digestivo','filter'=>'médico cirurgião do aparelho digestivo',]);

        CompanyOccupationsModel::create(['code'=>'225225','occupation'=>'Médico cirurgião geral','filter'=>'médico cirurgião geral',]);

        CompanyOccupationsModel::create(['code'=>'225230','occupation'=>'Médico cirurgião pediátrico','filter'=>'médico cirurgião pediátrico',]);

        CompanyOccupationsModel::create(['code'=>'225235','occupation'=>'Médico cirurgião plástico','filter'=>'médico cirurgião plástico',]);

        CompanyOccupationsModel::create(['code'=>'225240','occupation'=>'Médico cirurgião torácico','filter'=>'médico cirurgião torácico',]);

        CompanyOccupationsModel::create(['code'=>'225250','occupation'=>'Médico ginecologista e obstetra','filter'=>'médico ginecologista e obstetra',]);

        CompanyOccupationsModel::create(['code'=>'225255','occupation'=>'Médico mastologista','filter'=>'médico mastologista',]);

        CompanyOccupationsModel::create(['code'=>'225260','occupation'=>'Médico neurocirurgião','filter'=>'médico neurocirurgião',]);

        CompanyOccupationsModel::create(['code'=>'225265','occupation'=>'Médico oftalmologista','filter'=>'médico oftalmologista',]);

        CompanyOccupationsModel::create(['code'=>'225270','occupation'=>'Médico ortopedista e traumatologista','filter'=>'médico ortopedista e traumatologista',]);

        CompanyOccupationsModel::create(['code'=>'225275','occupation'=>'Médico otorrinolaringologista','filter'=>'médico otorrinolaringologista',]);

        CompanyOccupationsModel::create(['code'=>'225280','occupation'=>'Médico coloproctologista','filter'=>'médico coloproctologista',]);

        CompanyOccupationsModel::create(['code'=>'225285','occupation'=>'Médico urologista','filter'=>'médico urologista',]);

        CompanyOccupationsModel::create(['code'=>'225290','occupation'=>'Médico cancerologista cirurgíco','filter'=>'médico cancerologista cirurgíco',]);

        CompanyOccupationsModel::create(['code'=>'225295','occupation'=>'Médico cirurgião da mão','filter'=>'médico cirurgião da mão',]);

        CompanyOccupationsModel::create(['code'=>'225305','occupation'=>'Médico citopatologista','filter'=>'médico citopatologista',]);

        CompanyOccupationsModel::create(['code'=>'225310','occupation'=>'Médico em endoscopia','filter'=>'médico em endoscopia',]);

        CompanyOccupationsModel::create(['code'=>'225315','occupation'=>'Médico em medicina nuclear','filter'=>'médico em medicina nuclear',]);

        CompanyOccupationsModel::create(['code'=>'225320','occupation'=>'Médico em radiologia e diagnóstico por imagem','filter'=>'médico em radiologia e diagnóstico por imagem',]);

        CompanyOccupationsModel::create(['code'=>'225325','occupation'=>'Médico patologista','filter'=>'médico patologista',]);

        CompanyOccupationsModel::create(['code'=>'225330','occupation'=>'Médico radioterapeuta','filter'=>'médico radioterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'225335','occupation'=>'Médico patologista clínico / medicina laboratorial','filter'=>'médico patologista clínico / medicina laboratorial',]);

        CompanyOccupationsModel::create(['code'=>'225340','occupation'=>'Médico hemoterapeuta','filter'=>'médico hemoterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'225345','occupation'=>'Médico hiperbarista','filter'=>'médico hiperbarista',]);

        CompanyOccupationsModel::create(['code'=>'225350','occupation'=>'Médico neurofisiologista clínico','filter'=>'médico neurofisiologista clínico',]);

        CompanyOccupationsModel::create(['code'=>'225355','occupation'=>'Médico radiologista intervencionista','filter'=>'médico radiologista intervencionista',]);

        CompanyOccupationsModel::create(['code'=>'226105','occupation'=>'Quiropraxista','filter'=>'quiropraxista',]);

        CompanyOccupationsModel::create(['code'=>'226110','occupation'=>'Osteopata','filter'=>'osteopata',]);

        CompanyOccupationsModel::create(['code'=>'226305','occupation'=>'Musicoterapeuta','filter'=>'musicoterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'226310','occupation'=>'Arteterapeuta','filter'=>'arteterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'226315','occupation'=>'Equoterapeuta','filter'=>'equoterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'226320','occupation'=>'Naturólogo','filter'=>'naturólogo',]);

        CompanyOccupationsModel::create(['code'=>'231105','occupation'=>'Professor de nível superior na educação infantil (quatro a seis anos)','filter'=>'professor de nível superior na educação infantil (quatro a seis anos)',]);

        CompanyOccupationsModel::create(['code'=>'231110','occupation'=>'Professor de nível superior na educação infantil (zero a três anos)','filter'=>'professor de nível superior na educação infantil (zero a três anos)',]);

        CompanyOccupationsModel::create(['code'=>'231205','occupation'=>'Professor da educação de jovens e adultos do ensino fundamental (primeira a quarta série)','filter'=>'professor da educação de jovens e adultos do ensino fundamental (primeira a quarta série)',]);

        CompanyOccupationsModel::create(['code'=>'231210','occupation'=>'Professor de nível superior do ensino fundamental (primeira a quarta série)','filter'=>'professor de nível superior do ensino fundamental (primeira a quarta série)',]);

        CompanyOccupationsModel::create(['code'=>'231305','occupation'=>'Professor de ciências exatas e naturais do ensino fundamental','filter'=>'professor de ciências exatas e naturais do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231310','occupation'=>'Professor de educação artística do ensino fundamental','filter'=>'professor de educação artística do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231315','occupation'=>'Professor de educação física do ensino fundamental','filter'=>'professor de educação física do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231320','occupation'=>'Professor de geografia do ensino fundamental','filter'=>'professor de geografia do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231325','occupation'=>'Professor de história do ensino fundamental','filter'=>'professor de história do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231330','occupation'=>'Professor de língua estrangeira moderna do ensino fundamental','filter'=>'professor de língua estrangeira moderna do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231335','occupation'=>'Professor de língua portuguesa do ensino fundamental','filter'=>'professor de língua portuguesa do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'231340','occupation'=>'Professor de matemática do ensino fundamental','filter'=>'professor de matemática do ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'232105','occupation'=>'Professor de artes no ensino médio','filter'=>'professor de artes no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232110','occupation'=>'Professor de biologia no ensino médio','filter'=>'professor de biologia no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232115','occupation'=>'Professor de disciplinas pedagógicas no ensino médio','filter'=>'professor de disciplinas pedagógicas no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232120','occupation'=>'Professor de educação física no ensino médio','filter'=>'professor de educação física no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232125','occupation'=>'Professor de filosofia no ensino médio','filter'=>'professor de filosofia no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232130','occupation'=>'Professor de física no ensino médio','filter'=>'professor de física no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232135','occupation'=>'Professor de geografia no ensino médio','filter'=>'professor de geografia no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232140','occupation'=>'Professor de história no ensino médio','filter'=>'professor de história no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232145','occupation'=>'Professor de língua e literatura brasileira no ensino médio','filter'=>'professor de língua e literatura brasileira no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232150','occupation'=>'Professor de língua estrangeira moderna no ensino médio','filter'=>'professor de língua estrangeira moderna no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232155','occupation'=>'Professor de matemática no ensino médio','filter'=>'professor de matemática no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232160','occupation'=>'Professor de psicologia no ensino médio','filter'=>'professor de psicologia no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232165','occupation'=>'Professor de química no ensino médio','filter'=>'professor de química no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'232170','occupation'=>'Professor de sociologia no ensino médio','filter'=>'professor de sociologia no ensino médio',]);

        CompanyOccupationsModel::create(['code'=>'233105','occupation'=>'Professor da área de meio ambiente','filter'=>'professor da área de meio ambiente',]);

        CompanyOccupationsModel::create(['code'=>'233110','occupation'=>'Professor de desenho técnico','filter'=>'professor de desenho técnico',]);

        CompanyOccupationsModel::create(['code'=>'233115','occupation'=>'Professor de técnicas agrícolas','filter'=>'professor de técnicas agrícolas',]);

        CompanyOccupationsModel::create(['code'=>'233120','occupation'=>'Professor de técnicas comerciais e secretariais','filter'=>'professor de técnicas comerciais e secretariais',]);

        CompanyOccupationsModel::create(['code'=>'233125','occupation'=>'Professor de técnicas de enfermagem','filter'=>'professor de técnicas de enfermagem',]);

        CompanyOccupationsModel::create(['code'=>'233130','occupation'=>'Professor de técnicas industriais','filter'=>'professor de técnicas industriais',]);

        CompanyOccupationsModel::create(['code'=>'233135','occupation'=>'Professor de tecnologia e cálculo técnico','filter'=>'professor de tecnologia e cálculo técnico',]);

        CompanyOccupationsModel::create(['code'=>'233205','occupation'=>'Instrutor de aprendizagem e treinamento agropecuário','filter'=>'instrutor de aprendizagem e treinamento agropecuário',]);

        CompanyOccupationsModel::create(['code'=>'233210','occupation'=>'Instrutor de aprendizagem e treinamento industrial','filter'=>'instrutor de aprendizagem e treinamento industrial',]);

        CompanyOccupationsModel::create(['code'=>'233215','occupation'=>'Instrutor de aprendizagem e treinamento comercial','filter'=>'instrutor de aprendizagem e treinamento comercial',]);

        CompanyOccupationsModel::create(['code'=>'233220','occupation'=>'Professor instrutor de ensino e aprendizagem agroflorestal','filter'=>'professor instrutor de ensino e aprendizagem agroflorestal',]);

        CompanyOccupationsModel::create(['code'=>'233225','occupation'=>'Professor instrutor de ensino e aprendizagem em serviços','filter'=>'professor instrutor de ensino e aprendizagem em serviços',]);

        CompanyOccupationsModel::create(['code'=>'234105','occupation'=>'Professor de matemática aplicada (no ensino superior)','filter'=>'professor de matemática aplicada (no ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234110','occupation'=>'Professor de matemática pura (no ensino superior)','filter'=>'professor de matemática pura (no ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234115','occupation'=>'Professor de estatística (no ensino superior)','filter'=>'professor de estatística (no ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234120','occupation'=>'Professor de computação (no ensino superior)','filter'=>'professor de computação (no ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234125','occupation'=>'Professor de pesquisa operacional (no ensino superior)','filter'=>'professor de pesquisa operacional (no ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234205','occupation'=>'Professor de física (ensino superior)','filter'=>'professor de física (ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234210','occupation'=>'Professor de química (ensino superior)','filter'=>'professor de química (ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234215','occupation'=>'Professor de astronomia (ensino superior)','filter'=>'professor de astronomia (ensino superior)',]);

        CompanyOccupationsModel::create(['code'=>'234305','occupation'=>'Professor de arquitetura','filter'=>'professor de arquitetura',]);

        CompanyOccupationsModel::create(['code'=>'234310','occupation'=>'Professor de engenharia','filter'=>'professor de engenharia',]);

        CompanyOccupationsModel::create(['code'=>'234315','occupation'=>'Professor de geofísica','filter'=>'professor de geofísica',]);

        CompanyOccupationsModel::create(['code'=>'234320','occupation'=>'Professor de geologia','filter'=>'professor de geologia',]);

        CompanyOccupationsModel::create(['code'=>'234405','occupation'=>'Professor de ciências biológicas do ensino superior','filter'=>'professor de ciências biológicas do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234410','occupation'=>'Professor de educação física no ensino superior','filter'=>'professor de educação física no ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234415','occupation'=>'Professor de enfermagem do ensino superior','filter'=>'professor de enfermagem do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234420','occupation'=>'Professor de farmácia e bioquímica','filter'=>'professor de farmácia e bioquímica',]);

        CompanyOccupationsModel::create(['code'=>'234425','occupation'=>'Professor de fisioterapia','filter'=>'professor de fisioterapia',]);

        CompanyOccupationsModel::create(['code'=>'234430','occupation'=>'Professor de fonoaudiologia','filter'=>'professor de fonoaudiologia',]);

        CompanyOccupationsModel::create(['code'=>'234435','occupation'=>'Professor de medicina','filter'=>'professor de medicina',]);

        CompanyOccupationsModel::create(['code'=>'234440','occupation'=>'Professor de medicina veterinária','filter'=>'professor de medicina veterinária',]);

        CompanyOccupationsModel::create(['code'=>'234445','occupation'=>'Professor de nutrição','filter'=>'professor de nutrição',]);

        CompanyOccupationsModel::create(['code'=>'234450','occupation'=>'Professor de odontologia','filter'=>'professor de odontologia',]);

        CompanyOccupationsModel::create(['code'=>'234455','occupation'=>'Professor de terapia ocupacional','filter'=>'professor de terapia ocupacional',]);

        CompanyOccupationsModel::create(['code'=>'234460','occupation'=>'Professor de zootecnia do ensino superior','filter'=>'professor de zootecnia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234505','occupation'=>'Professor de ensino superior na área de didática','filter'=>'professor de ensino superior na área de didática',]);

        CompanyOccupationsModel::create(['code'=>'234510','occupation'=>'Professor de ensino superior na área de orientação educacional','filter'=>'professor de ensino superior na área de orientação educacional',]);

        CompanyOccupationsModel::create(['code'=>'234515','occupation'=>'Professor de ensino superior na área de pesquisa educacional','filter'=>'professor de ensino superior na área de pesquisa educacional',]);

        CompanyOccupationsModel::create(['code'=>'234520','occupation'=>'Professor de ensino superior na área de prática de ensino','filter'=>'professor de ensino superior na área de prática de ensino',]);

        CompanyOccupationsModel::create(['code'=>'234604','occupation'=>'Professor de língua alemã','filter'=>'professor de língua alemã',]);

        CompanyOccupationsModel::create(['code'=>'234608','occupation'=>'Professor de língua italiana','filter'=>'professor de língua italiana',]);

        CompanyOccupationsModel::create(['code'=>'234612','occupation'=>'Professor de língua francesa','filter'=>'professor de língua francesa',]);

        CompanyOccupationsModel::create(['code'=>'234616','occupation'=>'Professor de língua inglesa','filter'=>'professor de língua inglesa',]);

        CompanyOccupationsModel::create(['code'=>'234620','occupation'=>'Professor de língua espanhola','filter'=>'professor de língua espanhola',]);

        CompanyOccupationsModel::create(['code'=>'234624','occupation'=>'Professor de língua portuguesa','filter'=>'professor de língua portuguesa',]);

        CompanyOccupationsModel::create(['code'=>'234628','occupation'=>'Professor de literatura brasileira','filter'=>'professor de literatura brasileira',]);

        CompanyOccupationsModel::create(['code'=>'234632','occupation'=>'Professor de literatura portuguesa','filter'=>'professor de literatura portuguesa',]);

        CompanyOccupationsModel::create(['code'=>'234636','occupation'=>'Professor de literatura alemã','filter'=>'professor de literatura alemã',]);

        CompanyOccupationsModel::create(['code'=>'234640','occupation'=>'Professor de literatura comparada','filter'=>'professor de literatura comparada',]);

        CompanyOccupationsModel::create(['code'=>'234644','occupation'=>'Professor de literatura espanhola','filter'=>'professor de literatura espanhola',]);

        CompanyOccupationsModel::create(['code'=>'234648','occupation'=>'Professor de literatura francesa','filter'=>'professor de literatura francesa',]);

        CompanyOccupationsModel::create(['code'=>'234652','occupation'=>'Professor de literatura inglesa','filter'=>'professor de literatura inglesa',]);

        CompanyOccupationsModel::create(['code'=>'234656','occupation'=>'Professor de literatura italiana','filter'=>'professor de literatura italiana',]);

        CompanyOccupationsModel::create(['code'=>'234660','occupation'=>'Professor de literatura de línguas estrangeiras modernas','filter'=>'professor de literatura de línguas estrangeiras modernas',]);

        CompanyOccupationsModel::create(['code'=>'234664','occupation'=>'Professor de outras línguas e literaturas','filter'=>'professor de outras línguas e literaturas',]);

        CompanyOccupationsModel::create(['code'=>'234668','occupation'=>'Professor de línguas estrangeiras modernas','filter'=>'professor de línguas estrangeiras modernas',]);

        CompanyOccupationsModel::create(['code'=>'234672','occupation'=>'Professor de lingüística e lingüística aplicada','filter'=>'professor de lingüística e lingüística aplicada',]);

        CompanyOccupationsModel::create(['code'=>'234676','occupation'=>'Professor de filologia e crítica textual','filter'=>'professor de filologia e crítica textual',]);

        CompanyOccupationsModel::create(['code'=>'234680','occupation'=>'Professor de semiótica','filter'=>'professor de semiótica',]);

        CompanyOccupationsModel::create(['code'=>'234684','occupation'=>'Professor de teoria da literatura','filter'=>'professor de teoria da literatura',]);

        CompanyOccupationsModel::create(['code'=>'234689','occupation'=>'Professor de língua brasileira de sinais (libras)','filter'=>'professor de língua brasileira de sinais (libras)',]);

        CompanyOccupationsModel::create(['code'=>'234705','occupation'=>'Professor de antropologia do ensino superior','filter'=>'professor de antropologia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234710','occupation'=>'Professor de arquivologia do ensino superior','filter'=>'professor de arquivologia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234715','occupation'=>'Professor de biblioteconomia do ensino superior','filter'=>'professor de biblioteconomia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234720','occupation'=>'Professor de ciência política do ensino superior','filter'=>'professor de ciência política do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234725','occupation'=>'Professor de comunicação social do ensino superior','filter'=>'professor de comunicação social do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234730','occupation'=>'Professor de direito do ensino superior','filter'=>'professor de direito do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234735','occupation'=>'Professor de filosofia do ensino superior','filter'=>'professor de filosofia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234740','occupation'=>'Professor de geografia do ensino superior','filter'=>'professor de geografia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234745','occupation'=>'Professor de história do ensino superior','filter'=>'professor de história do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234750','occupation'=>'Professor de jornalismo','filter'=>'professor de jornalismo',]);

        CompanyOccupationsModel::create(['code'=>'234755','occupation'=>'Professor de museologia do ensino superior','filter'=>'professor de museologia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234760','occupation'=>'Professor de psicologia do ensino superior','filter'=>'professor de psicologia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234765','occupation'=>'Professor de serviço social do ensino superior','filter'=>'professor de serviço social do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234770','occupation'=>'Professor de sociologia do ensino superior','filter'=>'professor de sociologia do ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234805','occupation'=>'Professor de economia','filter'=>'professor de economia',]);

        CompanyOccupationsModel::create(['code'=>'234810','occupation'=>'Professor de administração','filter'=>'professor de administração',]);

        CompanyOccupationsModel::create(['code'=>'234815','occupation'=>'Professor de contabilidade','filter'=>'professor de contabilidade',]);

        CompanyOccupationsModel::create(['code'=>'234905','occupation'=>'Professor de artes do espetáculo no ensino superior','filter'=>'professor de artes do espetáculo no ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'234910','occupation'=>'Professor de artes visuais no ensino superior (artes plásticas e multimídia)','filter'=>'professor de artes visuais no ensino superior (artes plásticas e multimídia)',]);

        CompanyOccupationsModel::create(['code'=>'234915','occupation'=>'Professor de música no ensino superior','filter'=>'professor de música no ensino superior',]);

        CompanyOccupationsModel::create(['code'=>'239205','occupation'=>'Professor de alunos com deficiência auditiva e surdos','filter'=>'professor de alunos com deficiência auditiva e surdos',]);

        CompanyOccupationsModel::create(['code'=>'239210','occupation'=>'Professor de alunos com deficiência física','filter'=>'professor de alunos com deficiência física',]);

        CompanyOccupationsModel::create(['code'=>'239215','occupation'=>'Professor de alunos com deficiência mental','filter'=>'professor de alunos com deficiência mental',]);

        CompanyOccupationsModel::create(['code'=>'239220','occupation'=>'Professor de alunos com deficiência múltipla','filter'=>'professor de alunos com deficiência múltipla',]);

        CompanyOccupationsModel::create(['code'=>'239225','occupation'=>'Professor de alunos com deficiência visual','filter'=>'professor de alunos com deficiência visual',]);

        CompanyOccupationsModel::create(['code'=>'239405','occupation'=>'Coordenador pedagógico','filter'=>'coordenador pedagógico',]);

        CompanyOccupationsModel::create(['code'=>'239410','occupation'=>'Orientador educacional','filter'=>'orientador educacional',]);

        CompanyOccupationsModel::create(['code'=>'239415','occupation'=>'Pedagogo','filter'=>'pedagogo',]);

        CompanyOccupationsModel::create(['code'=>'239420','occupation'=>'Professor de técnicas e recursos audiovisuais','filter'=>'professor de técnicas e recursos audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'239425','occupation'=>'Psicopedagogo','filter'=>'psicopedagogo',]);

        CompanyOccupationsModel::create(['code'=>'239430','occupation'=>'Supervisor de ensino','filter'=>'supervisor de ensino',]);

        CompanyOccupationsModel::create(['code'=>'239435','occupation'=>'Designer educacional','filter'=>'designer educacional',]);

        CompanyOccupationsModel::create(['code'=>'239440','occupation'=>'Neuropsicopedagogo clinico','filter'=>'neuropsicopedagogo clinico',]);

        CompanyOccupationsModel::create(['code'=>'239445','occupation'=>'Neuropsicopedagogo institucional','filter'=>'neuropsicopedagogo institucional',]);

        CompanyOccupationsModel::create(['code'=>'241005','occupation'=>'Advogado','filter'=>'advogado',]);

        CompanyOccupationsModel::create(['code'=>'241010','occupation'=>'Advogado de empresa','filter'=>'advogado de empresa',]);

        CompanyOccupationsModel::create(['code'=>'241015','occupation'=>'Advogado (direito civil)','filter'=>'advogado (direito civil)',]);

        CompanyOccupationsModel::create(['code'=>'241020','occupation'=>'Advogado (direito público)','filter'=>'advogado (direito público)',]);

        CompanyOccupationsModel::create(['code'=>'241025','occupation'=>'Advogado (direito penal)','filter'=>'advogado (direito penal)',]);

        CompanyOccupationsModel::create(['code'=>'241030','occupation'=>'Advogado (áreas especiais)','filter'=>'advogado (áreas especiais)',]);

        CompanyOccupationsModel::create(['code'=>'241035','occupation'=>'Advogado (direito do trabalho)','filter'=>'advogado (direito do trabalho)',]);

        CompanyOccupationsModel::create(['code'=>'241040','occupation'=>'Consultor jurídico','filter'=>'consultor jurídico',]);

        CompanyOccupationsModel::create(['code'=>'241205','occupation'=>'Advogado da união','filter'=>'advogado da união',]);

        CompanyOccupationsModel::create(['code'=>'241210','occupation'=>'Procurador autárquico','filter'=>'procurador autárquico',]);

        CompanyOccupationsModel::create(['code'=>'241215','occupation'=>'Procurador da fazenda nacional','filter'=>'procurador da fazenda nacional',]);

        CompanyOccupationsModel::create(['code'=>'241220','occupation'=>'Procurador do estado','filter'=>'procurador do estado',]);

        CompanyOccupationsModel::create(['code'=>'241225','occupation'=>'Procurador do município','filter'=>'procurador do município',]);

        CompanyOccupationsModel::create(['code'=>'241230','occupation'=>'Procurador federal','filter'=>'procurador federal',]);

        CompanyOccupationsModel::create(['code'=>'241235','occupation'=>'Procurador fundacional','filter'=>'procurador fundacional',]);

        CompanyOccupationsModel::create(['code'=>'241305','occupation'=>'Oficial de registro de contratos marítimos','filter'=>'oficial de registro de contratos marítimos',]);

        CompanyOccupationsModel::create(['code'=>'241310','occupation'=>'Oficial do registro civil de pessoas jurídicas','filter'=>'oficial do registro civil de pessoas jurídicas',]);

        CompanyOccupationsModel::create(['code'=>'241315','occupation'=>'Oficial do registro civil de pessoas naturais','filter'=>'oficial do registro civil de pessoas naturais',]);

        CompanyOccupationsModel::create(['code'=>'241320','occupation'=>'Oficial do registro de distribuições','filter'=>'oficial do registro de distribuições',]);

        CompanyOccupationsModel::create(['code'=>'241325','occupation'=>'Oficial do registro de imóveis','filter'=>'oficial do registro de imóveis',]);

        CompanyOccupationsModel::create(['code'=>'241330','occupation'=>'Oficial do registro de títulos e documentos','filter'=>'oficial do registro de títulos e documentos',]);

        CompanyOccupationsModel::create(['code'=>'241335','occupation'=>'Tabelião de notas','filter'=>'tabelião de notas',]);

        CompanyOccupationsModel::create(['code'=>'241340','occupation'=>'Tabelião de protestos','filter'=>'tabelião de protestos',]);

        CompanyOccupationsModel::create(['code'=>'241405','occupation'=>'Conselheiro julgador','filter'=>'conselheiro julgador',]);

        CompanyOccupationsModel::create(['code'=>'242205','occupation'=>'Procurador da república','filter'=>'procurador da república',]);

        CompanyOccupationsModel::create(['code'=>'242210','occupation'=>'Procurador de justiça','filter'=>'procurador de justiça',]);

        CompanyOccupationsModel::create(['code'=>'242215','occupation'=>'Procurador de justiça militar','filter'=>'procurador de justiça militar',]);

        CompanyOccupationsModel::create(['code'=>'242220','occupation'=>'Procurador do trabalho','filter'=>'procurador do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'242225','occupation'=>'Procurador regional da república','filter'=>'procurador regional da república',]);

        CompanyOccupationsModel::create(['code'=>'242230','occupation'=>'Procurador regional do trabalho','filter'=>'procurador regional do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'242235','occupation'=>'Promotor de justiça','filter'=>'promotor de justiça',]);

        CompanyOccupationsModel::create(['code'=>'242240','occupation'=>'Subprocurador de justiça militar','filter'=>'subprocurador de justiça militar',]);

        CompanyOccupationsModel::create(['code'=>'242245','occupation'=>'Subprocurador-geral da república','filter'=>'subprocurador-geral da república',]);

        CompanyOccupationsModel::create(['code'=>'242250','occupation'=>'Subprocurador-geral do trabalho','filter'=>'subprocurador-geral do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'242305','occupation'=>'Delegado de polícia','filter'=>'delegado de polícia',]);

        CompanyOccupationsModel::create(['code'=>'242405','occupation'=>'Defensor público','filter'=>'defensor público',]);

        CompanyOccupationsModel::create(['code'=>'242410','occupation'=>'Procurador da assistência judiciária','filter'=>'procurador da assistência judiciária',]);

        CompanyOccupationsModel::create(['code'=>'242905','occupation'=>'Oficial de inteligência','filter'=>'oficial de inteligência',]);

        CompanyOccupationsModel::create(['code'=>'242910','occupation'=>'Oficial técnico de inteligência','filter'=>'oficial técnico de inteligência',]);

        CompanyOccupationsModel::create(['code'=>'251105','occupation'=>'Antropólogo','filter'=>'antropólogo',]);

        CompanyOccupationsModel::create(['code'=>'251110','occupation'=>'Arqueólogo','filter'=>'arqueólogo',]);

        CompanyOccupationsModel::create(['code'=>'251115','occupation'=>'Cientista político','filter'=>'cientista político',]);

        CompanyOccupationsModel::create(['code'=>'251120','occupation'=>'Sociólogo','filter'=>'sociólogo',]);

        CompanyOccupationsModel::create(['code'=>'251205','occupation'=>'Economista','filter'=>'economista',]);

        CompanyOccupationsModel::create(['code'=>'251210','occupation'=>'Economista agroindustrial','filter'=>'economista agroindustrial',]);

        CompanyOccupationsModel::create(['code'=>'251215','occupation'=>'Economista financeiro','filter'=>'economista financeiro',]);

        CompanyOccupationsModel::create(['code'=>'251220','occupation'=>'Economista industrial','filter'=>'economista industrial',]);

        CompanyOccupationsModel::create(['code'=>'251225','occupation'=>'Economista do setor público','filter'=>'economista do setor público',]);

        CompanyOccupationsModel::create(['code'=>'251230','occupation'=>'Economista ambiental','filter'=>'economista ambiental',]);

        CompanyOccupationsModel::create(['code'=>'251235','occupation'=>'Economista regional e urbano','filter'=>'economista regional e urbano',]);

        CompanyOccupationsModel::create(['code'=>'251305','occupation'=>'Geógrafo','filter'=>'geógrafo',]);

        CompanyOccupationsModel::create(['code'=>'251405','occupation'=>'Filósofo','filter'=>'filósofo',]);

        CompanyOccupationsModel::create(['code'=>'251505','occupation'=>'Psicólogo educacional','filter'=>'psicólogo educacional',]);

        CompanyOccupationsModel::create(['code'=>'251510','occupation'=>'Psicólogo clínico','filter'=>'psicólogo clínico',]);

        CompanyOccupationsModel::create(['code'=>'251515','occupation'=>'Psicólogo do esporte','filter'=>'psicólogo do esporte',]);

        CompanyOccupationsModel::create(['code'=>'251520','occupation'=>'Psicólogo hospitalar','filter'=>'psicólogo hospitalar',]);

        CompanyOccupationsModel::create(['code'=>'251525','occupation'=>'Psicólogo jurídico','filter'=>'psicólogo jurídico',]);

        CompanyOccupationsModel::create(['code'=>'251530','occupation'=>'Psicólogo social','filter'=>'psicólogo social',]);

        CompanyOccupationsModel::create(['code'=>'251535','occupation'=>'Psicólogo do trânsito','filter'=>'psicólogo do trânsito',]);

        CompanyOccupationsModel::create(['code'=>'251540','occupation'=>'Psicólogo do trabalho','filter'=>'psicólogo do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'251545','occupation'=>'Neuropsicólogo','filter'=>'neuropsicólogo',]);

        CompanyOccupationsModel::create(['code'=>'251550','occupation'=>'Psicanalista','filter'=>'psicanalista',]);

        CompanyOccupationsModel::create(['code'=>'251555','occupation'=>'Psicólogo acupunturista','filter'=>'psicólogo acupunturista',]);

        CompanyOccupationsModel::create(['code'=>'251605','occupation'=>'Assistente social','filter'=>'assistente social',]);

        CompanyOccupationsModel::create(['code'=>'251610','occupation'=>'Economista doméstico','filter'=>'economista doméstico',]);

        CompanyOccupationsModel::create(['code'=>'252105','occupation'=>'Administrador','filter'=>'administrador',]);

        CompanyOccupationsModel::create(['code'=>'252205','occupation'=>'Auditor (contadores e afins)','filter'=>'auditor (contadores e afins)',]);

        CompanyOccupationsModel::create(['code'=>'252210','occupation'=>'Contador','filter'=>'contador',]);

        CompanyOccupationsModel::create(['code'=>'252215','occupation'=>'Perito contábil','filter'=>'perito contábil',]);

        CompanyOccupationsModel::create(['code'=>'252305','occupation'=>'Secretária(o) executiva(o)','filter'=>'secretária(o) executiva(o)',]);

        CompanyOccupationsModel::create(['code'=>'252310','occupation'=>'Secretário bilíngüe','filter'=>'secretário bilíngüe',]);

        CompanyOccupationsModel::create(['code'=>'252315','occupation'=>'Secretária trilíngüe','filter'=>'secretária trilíngüe',]);

        CompanyOccupationsModel::create(['code'=>'252320','occupation'=>'Tecnólogo em secretariado escolar','filter'=>'tecnólogo em secretariado escolar',]);

        CompanyOccupationsModel::create(['code'=>'252405','occupation'=>'Analista de recursos humanos','filter'=>'analista de recursos humanos',]);

        CompanyOccupationsModel::create(['code'=>'252505','occupation'=>'Administrador de fundos e carteiras de investimento','filter'=>'administrador de fundos e carteiras de investimento',]);

        CompanyOccupationsModel::create(['code'=>'252510','occupation'=>'Analista de câmbio','filter'=>'analista de câmbio',]);

        CompanyOccupationsModel::create(['code'=>'252515','occupation'=>'Analista de cobrança (instituições financeiras)','filter'=>'analista de cobrança (instituições financeiras)',]);

        CompanyOccupationsModel::create(['code'=>'252525','occupation'=>'Analista de crédito (instituições financeiras)','filter'=>'analista de crédito (instituições financeiras)',]);

        CompanyOccupationsModel::create(['code'=>'252530','occupation'=>'Analista de crédito rural','filter'=>'analista de crédito rural',]);

        CompanyOccupationsModel::create(['code'=>'252535','occupation'=>'Analista de leasing','filter'=>'analista de leasing',]);

        CompanyOccupationsModel::create(['code'=>'252540','occupation'=>'Analista de produtos bancários','filter'=>'analista de produtos bancários',]);

        CompanyOccupationsModel::create(['code'=>'252545','occupation'=>'Analista financeiro (instituições financeiras)','filter'=>'analista financeiro (instituições financeiras)',]);

        CompanyOccupationsModel::create(['code'=>'252550','occupation'=>'Profissional de relações com investidores','filter'=>'profissional de relações com investidores',]);

        CompanyOccupationsModel::create(['code'=>'252605','occupation'=>'Gestor em segurança','filter'=>'gestor em segurança',]);

        CompanyOccupationsModel::create(['code'=>'252705','occupation'=>'Analista de pcp (programação e controle da produção)','filter'=>'analista de pcp (programação e controle da produção)',]);

        CompanyOccupationsModel::create(['code'=>'252710','occupation'=>'Analista de planejamento de materias','filter'=>'analista de planejamento de materias',]);

        CompanyOccupationsModel::create(['code'=>'252715','occupation'=>'Analista de logistica','filter'=>'analista de logistica',]);

        CompanyOccupationsModel::create(['code'=>'252720','occupation'=>'Analista de projetos logisticos','filter'=>'analista de projetos logisticos',]);

        CompanyOccupationsModel::create(['code'=>'252725','occupation'=>'Analista de gestão de estoque','filter'=>'analista de gestão de estoque',]);

        CompanyOccupationsModel::create(['code'=>'253110','occupation'=>'Redator de publicidade','filter'=>'redator de publicidade',]);

        CompanyOccupationsModel::create(['code'=>'253115','occupation'=>'Publicitário','filter'=>'publicitário',]);

        CompanyOccupationsModel::create(['code'=>'253120','occupation'=>'Diretor de mídia (publicidade)','filter'=>'diretor de mídia (publicidade)',]);

        CompanyOccupationsModel::create(['code'=>'253125','occupation'=>'Diretor de arte (publicidade)','filter'=>'diretor de arte (publicidade)',]);

        CompanyOccupationsModel::create(['code'=>'253130','occupation'=>'Diretor de criação','filter'=>'diretor de criação',]);

        CompanyOccupationsModel::create(['code'=>'253135','occupation'=>'Diretor de contas (publicidade)','filter'=>'diretor de contas (publicidade)',]);

        CompanyOccupationsModel::create(['code'=>'253140','occupation'=>'Agenciador de propaganda','filter'=>'agenciador de propaganda',]);

        CompanyOccupationsModel::create(['code'=>'253205','occupation'=>'Gerente de captação (fundos e investimentos institucionais)','filter'=>'gerente de captação (fundos e investimentos institucionais)',]);

        CompanyOccupationsModel::create(['code'=>'253210','occupation'=>'Gerente de clientes especiais (private)','filter'=>'gerente de clientes especiais (private)',]);

        CompanyOccupationsModel::create(['code'=>'253215','occupation'=>'Gerente de contas - pessoa física e jurídica','filter'=>'gerente de contas - pessoa física e jurídica',]);

        CompanyOccupationsModel::create(['code'=>'253220','occupation'=>'Gerente de grandes contas (corporate)','filter'=>'gerente de grandes contas (corporate)',]);

        CompanyOccupationsModel::create(['code'=>'253225','occupation'=>'Operador de negócios','filter'=>'operador de negócios',]);

        CompanyOccupationsModel::create(['code'=>'253305','occupation'=>'Corretor de valores, ativos financeiros, mercadorias e derivativos','filter'=>'corretor de valores, ativos financeiros, mercadorias e derivativos',]);

        CompanyOccupationsModel::create(['code'=>'253405','occupation'=>'Analista de mídias sociais','filter'=>'analista de mídias sociais',]);

        CompanyOccupationsModel::create(['code'=>'253410','occupation'=>'Influenciador digital','filter'=>'influenciador digital',]);

        CompanyOccupationsModel::create(['code'=>'254105','occupation'=>'Auditor-fiscal da receita federal','filter'=>'auditor-fiscal da receita federal',]);

        CompanyOccupationsModel::create(['code'=>'254110','occupation'=>'Técnico da receita federal','filter'=>'técnico da receita federal',]);

        CompanyOccupationsModel::create(['code'=>'254205','occupation'=>'Auditor-fiscal da previdência social','filter'=>'auditor-fiscal da previdência social',]);

        CompanyOccupationsModel::create(['code'=>'254305','occupation'=>'Auditor-fiscal do trabalho','filter'=>'auditor-fiscal do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'254310','occupation'=>'Agente de higiene e segurança','filter'=>'agente de higiene e segurança',]);

        CompanyOccupationsModel::create(['code'=>'254405','occupation'=>'Fiscal de tributos estadual','filter'=>'fiscal de tributos estadual',]);

        CompanyOccupationsModel::create(['code'=>'254410','occupation'=>'Fiscal de tributos municipal','filter'=>'fiscal de tributos municipal',]);

        CompanyOccupationsModel::create(['code'=>'254415','occupation'=>'Técnico de tributos estadual','filter'=>'técnico de tributos estadual',]);

        CompanyOccupationsModel::create(['code'=>'254420','occupation'=>'Técnico de tributos municipal','filter'=>'técnico de tributos municipal',]);

        CompanyOccupationsModel::create(['code'=>'254505','occupation'=>'Fiscal de atividades urbanas','filter'=>'fiscal de atividades urbanas',]);

        CompanyOccupationsModel::create(['code'=>'261105','occupation'=>'Arquivista pesquisador (jornalismo)','filter'=>'arquivista pesquisador (jornalismo)',]);

        CompanyOccupationsModel::create(['code'=>'261110','occupation'=>'Assessor de imprensa','filter'=>'assessor de imprensa',]);

        CompanyOccupationsModel::create(['code'=>'261115','occupation'=>'Diretor de redação','filter'=>'diretor de redação',]);

        CompanyOccupationsModel::create(['code'=>'261120','occupation'=>'Editor','filter'=>'editor',]);

        CompanyOccupationsModel::create(['code'=>'261125','occupation'=>'Jornalista','filter'=>'jornalista',]);

        CompanyOccupationsModel::create(['code'=>'261130','occupation'=>'Produtor de texto','filter'=>'produtor de texto',]);

        CompanyOccupationsModel::create(['code'=>'261135','occupation'=>'Repórter (exclusive rádio e televisão)','filter'=>'repórter (exclusive rádio e televisão)',]);

        CompanyOccupationsModel::create(['code'=>'261140','occupation'=>'Revisor de texto','filter'=>'revisor de texto',]);

        CompanyOccupationsModel::create(['code'=>'261205','occupation'=>'Bibliotecário','filter'=>'bibliotecário',]);

        CompanyOccupationsModel::create(['code'=>'261210','occupation'=>'Documentalista','filter'=>'documentalista',]);

        CompanyOccupationsModel::create(['code'=>'261215','occupation'=>'Analista de informações (pesquisador de informações de rede)','filter'=>'analista de informações (pesquisador de informações de rede)',]);

        CompanyOccupationsModel::create(['code'=>'261305','occupation'=>'Arquivista','filter'=>'arquivista',]);

        CompanyOccupationsModel::create(['code'=>'261310','occupation'=>'Museólogo','filter'=>'museólogo',]);

        CompanyOccupationsModel::create(['code'=>'261405','occupation'=>'Filólogo','filter'=>'filólogo',]);

        CompanyOccupationsModel::create(['code'=>'261410','occupation'=>'Intérprete','filter'=>'intérprete',]);

        CompanyOccupationsModel::create(['code'=>'261415','occupation'=>'Lingüista','filter'=>'lingüista',]);

        CompanyOccupationsModel::create(['code'=>'261420','occupation'=>'Tradutor','filter'=>'tradutor',]);

        CompanyOccupationsModel::create(['code'=>'261425','occupation'=>'Intérprete de língua de sinais','filter'=>'intérprete de língua de sinais',]);

        CompanyOccupationsModel::create(['code'=>'261430','occupation'=>'Audiodescritor','filter'=>'audiodescritor',]);

        CompanyOccupationsModel::create(['code'=>'261505','occupation'=>'Autor-roteirista','filter'=>'autor-roteirista',]);

        CompanyOccupationsModel::create(['code'=>'261510','occupation'=>'Crítico','filter'=>'crítico',]);

        CompanyOccupationsModel::create(['code'=>'261515','occupation'=>'Escritor de ficção','filter'=>'escritor de ficção',]);

        CompanyOccupationsModel::create(['code'=>'261520','occupation'=>'Escritor de não ficção','filter'=>'escritor de não ficção',]);

        CompanyOccupationsModel::create(['code'=>'261525','occupation'=>'Poeta','filter'=>'poeta',]);

        CompanyOccupationsModel::create(['code'=>'261530','occupation'=>'Redator de textos técnicos','filter'=>'redator de textos técnicos',]);

        CompanyOccupationsModel::create(['code'=>'261605','occupation'=>'Editor de jornal','filter'=>'editor de jornal',]);

        CompanyOccupationsModel::create(['code'=>'261610','occupation'=>'Editor de livro','filter'=>'editor de livro',]);

        CompanyOccupationsModel::create(['code'=>'261615','occupation'=>'Editor de mídia eletrônica','filter'=>'editor de mídia eletrônica',]);

        CompanyOccupationsModel::create(['code'=>'261620','occupation'=>'Editor de revista','filter'=>'editor de revista',]);

        CompanyOccupationsModel::create(['code'=>'261625','occupation'=>'Editor de revista científica','filter'=>'editor de revista científica',]);

        CompanyOccupationsModel::create(['code'=>'261705','occupation'=>'Âncora de mídias audiovisuais','filter'=>'Âncora de mídias audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'261710','occupation'=>'Comentarista de mídias audiovisuais','filter'=>'comentarista de mídias audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'261715','occupation'=>'Locutor de mídias audiovisuais','filter'=>'locutor de mídias audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'261730','occupation'=>'Repórter de mídias audiovisuais','filter'=>'repórter de mídias audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'261805','occupation'=>'Fotógrafo','filter'=>'fotógrafo',]);

        CompanyOccupationsModel::create(['code'=>'261810','occupation'=>'Fotógrafo publicitário','filter'=>'fotógrafo publicitário',]);

        CompanyOccupationsModel::create(['code'=>'261815','occupation'=>'Fotógrafo retratista','filter'=>'fotógrafo retratista',]);

        CompanyOccupationsModel::create(['code'=>'261820','occupation'=>'Repórter fotográfico','filter'=>'repórter fotográfico',]);

        CompanyOccupationsModel::create(['code'=>'261905','occupation'=>'Continuista','filter'=>'continuista',]);

        CompanyOccupationsModel::create(['code'=>'261910','occupation'=>'Assistente de direção (tv)','filter'=>'assistente de direção (tv)',]);

        CompanyOccupationsModel::create(['code'=>'262105','occupation'=>'Produtor cultural','filter'=>'produtor cultural',]);

        CompanyOccupationsModel::create(['code'=>'262110','occupation'=>'Produtor cinematográfico','filter'=>'produtor cinematográfico',]);

        CompanyOccupationsModel::create(['code'=>'262115','occupation'=>'Produtor de rádio','filter'=>'produtor de rádio',]);

        CompanyOccupationsModel::create(['code'=>'262120','occupation'=>'Produtor de teatro','filter'=>'produtor de teatro',]);

        CompanyOccupationsModel::create(['code'=>'262125','occupation'=>'Produtor de televisão','filter'=>'produtor de televisão',]);

        CompanyOccupationsModel::create(['code'=>'262130','occupation'=>'Tecnólogo em produção fonográfica','filter'=>'tecnólogo em produção fonográfica',]);

        CompanyOccupationsModel::create(['code'=>'262135','occupation'=>'Tecnólogo em produção audiovisual','filter'=>'tecnólogo em produção audiovisual',]);

        CompanyOccupationsModel::create(['code'=>'262205','occupation'=>'Diretor de cinema','filter'=>'diretor de cinema',]);

        CompanyOccupationsModel::create(['code'=>'262210','occupation'=>'Diretor de programas de rádio','filter'=>'diretor de programas de rádio',]);

        CompanyOccupationsModel::create(['code'=>'262215','occupation'=>'Diretor de programas de televisão','filter'=>'diretor de programas de televisão',]);

        CompanyOccupationsModel::create(['code'=>'262220','occupation'=>'Diretor teatral','filter'=>'diretor teatral',]);

        CompanyOccupationsModel::create(['code'=>'262225','occupation'=>'Diretor de programação','filter'=>'diretor de programação',]);

        CompanyOccupationsModel::create(['code'=>'262230','occupation'=>'Diretor de produção','filter'=>'diretor de produção',]);

        CompanyOccupationsModel::create(['code'=>'262235','occupation'=>'Diretor artistíco','filter'=>'diretor artistíco',]);

        CompanyOccupationsModel::create(['code'=>'262305','occupation'=>'Cenógrafo carnavalesco e festas populares','filter'=>'cenógrafo carnavalesco e festas populares',]);

        CompanyOccupationsModel::create(['code'=>'262310','occupation'=>'Cenógrafo de cinema','filter'=>'cenógrafo de cinema',]);

        CompanyOccupationsModel::create(['code'=>'262315','occupation'=>'Cenógrafo de eventos','filter'=>'cenógrafo de eventos',]);

        CompanyOccupationsModel::create(['code'=>'262320','occupation'=>'Cenógrafo de teatro','filter'=>'cenógrafo de teatro',]);

        CompanyOccupationsModel::create(['code'=>'262325','occupation'=>'Cenógrafo de tv','filter'=>'cenógrafo de tv',]);

        CompanyOccupationsModel::create(['code'=>'262330','occupation'=>'Diretor de arte','filter'=>'diretor de arte',]);

        CompanyOccupationsModel::create(['code'=>'262405','occupation'=>'Artista (artes visuais)','filter'=>'artista (artes visuais)',]);

        CompanyOccupationsModel::create(['code'=>'262410','occupation'=>'Desenhista industrial gráfico (designer gráfico)','filter'=>'desenhista industrial gráfico (designer gráfico)',]);

        CompanyOccupationsModel::create(['code'=>'262415','occupation'=>'Conservador-restaurador de bens culturais','filter'=>'conservador-restaurador de bens culturais',]);

        CompanyOccupationsModel::create(['code'=>'262420','occupation'=>'Desenhista industrial de produto (designer de produto)','filter'=>'desenhista industrial de produto (designer de produto)',]);

        CompanyOccupationsModel::create(['code'=>'262425','occupation'=>'Desenhista industrial de produto de moda (designer de moda)','filter'=>'desenhista industrial de produto de moda (designer de moda)',]);

        CompanyOccupationsModel::create(['code'=>'262505','occupation'=>'Ator','filter'=>'ator',]);

        CompanyOccupationsModel::create(['code'=>'262605','occupation'=>'Compositor','filter'=>'compositor',]);

        CompanyOccupationsModel::create(['code'=>'262610','occupation'=>'Músico arranjador','filter'=>'músico arranjador',]);

        CompanyOccupationsModel::create(['code'=>'262615','occupation'=>'Músico regente','filter'=>'músico regente',]);

        CompanyOccupationsModel::create(['code'=>'262620','occupation'=>'Musicólogo','filter'=>'musicólogo',]);

        CompanyOccupationsModel::create(['code'=>'262705','occupation'=>'Músico intérprete cantor','filter'=>'músico intérprete cantor',]);

        CompanyOccupationsModel::create(['code'=>'262710','occupation'=>'Músico intérprete instrumentista','filter'=>'músico intérprete instrumentista',]);

        CompanyOccupationsModel::create(['code'=>'262805','occupation'=>'Assistente de coreografia','filter'=>'assistente de coreografia',]);

        CompanyOccupationsModel::create(['code'=>'262810','occupation'=>'Bailarino (exceto danças populares)','filter'=>'bailarino (exceto danças populares)',]);

        CompanyOccupationsModel::create(['code'=>'262815','occupation'=>'Coreógrafo','filter'=>'coreógrafo',]);

        CompanyOccupationsModel::create(['code'=>'262820','occupation'=>'Dramaturgo de dança','filter'=>'dramaturgo de dança',]);

        CompanyOccupationsModel::create(['code'=>'262825','occupation'=>'Ensaiador de dança','filter'=>'ensaiador de dança',]);

        CompanyOccupationsModel::create(['code'=>'262830','occupation'=>'Professor de dança','filter'=>'professor de dança',]);

        CompanyOccupationsModel::create(['code'=>'262905','occupation'=>'Decorador de interiores de nível superior','filter'=>'decorador de interiores de nível superior',]);

        CompanyOccupationsModel::create(['code'=>'263105','occupation'=>'Ministro de culto religioso','filter'=>'ministro de culto religioso',]);

        CompanyOccupationsModel::create(['code'=>'263110','occupation'=>'Missionário','filter'=>'missionário',]);

        CompanyOccupationsModel::create(['code'=>'263115','occupation'=>'Teólogo','filter'=>'teólogo',]);

        CompanyOccupationsModel::create(['code'=>'271105','occupation'=>'Chefe de cozinha','filter'=>'chefe de cozinha',]);

        CompanyOccupationsModel::create(['code'=>'271110','occupation'=>'Tecnólogo em gastronomia','filter'=>'tecnólogo em gastronomia',]);

        CompanyOccupationsModel::create(['code'=>'300105','occupation'=>'Técnico em mecatrônica - automação da manufatura','filter'=>'técnico em mecatrônica - automação da manufatura',]);

        CompanyOccupationsModel::create(['code'=>'300110','occupation'=>'Técnico em mecatrônica - robótica','filter'=>'técnico em mecatrônica - robótica',]);

        CompanyOccupationsModel::create(['code'=>'300305','occupation'=>'Técnico em eletromecânica','filter'=>'técnico em eletromecânica',]);

        CompanyOccupationsModel::create(['code'=>'30105','occupation'=>'Coronel bombeiro militar','filter'=>'coronel bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'30110','occupation'=>'Major bombeiro militar','filter'=>'major bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'301105','occupation'=>'Técnico de laboratório industrial','filter'=>'técnico de laboratório industrial',]);

        CompanyOccupationsModel::create(['code'=>'301110','occupation'=>'Técnico de laboratório de análises físico-químicas (materiais de construção)','filter'=>'técnico de laboratório de análises físico-químicas (materiais de construção)',]);

        CompanyOccupationsModel::create(['code'=>'301115','occupation'=>'Técnico químico de petróleo','filter'=>'técnico químico de petróleo',]);

        CompanyOccupationsModel::create(['code'=>'30115','occupation'=>'Tenente-coronel bombeiro militar','filter'=>'tenente-coronel bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'301205','occupation'=>'Técnico de apoio à bioengenharia','filter'=>'técnico de apoio à bioengenharia',]);

        CompanyOccupationsModel::create(['code'=>'30205','occupation'=>'Capitão bombeiro militar','filter'=>'capitão bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'30305','occupation'=>'Tenente do corpo de bombeiros militar','filter'=>'tenente do corpo de bombeiros militar',]);

        CompanyOccupationsModel::create(['code'=>'31105','occupation'=>'Subtenente bombeiro militar','filter'=>'subtenente bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'31110','occupation'=>'Sargento bombeiro militar','filter'=>'sargento bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'311105','occupation'=>'Técnico químico','filter'=>'técnico químico',]);

        CompanyOccupationsModel::create(['code'=>'311110','occupation'=>'Técnico de celulose e papel','filter'=>'técnico de celulose e papel',]);

        CompanyOccupationsModel::create(['code'=>'311115','occupation'=>'Técnico em curtimento','filter'=>'técnico em curtimento',]);

        CompanyOccupationsModel::create(['code'=>'311205','occupation'=>'Técnico em petroquímica','filter'=>'técnico em petroquímica',]);

        CompanyOccupationsModel::create(['code'=>'311305','occupation'=>'Técnico em materiais, produtos cerâmicos e vidros','filter'=>'técnico em materiais, produtos cerâmicos e vidros',]);

        CompanyOccupationsModel::create(['code'=>'311405','occupation'=>'Técnico em borracha','filter'=>'técnico em borracha',]);

        CompanyOccupationsModel::create(['code'=>'311410','occupation'=>'Técnico em plástico','filter'=>'técnico em plástico',]);

        CompanyOccupationsModel::create(['code'=>'311505','occupation'=>'Técnico de controle de meio ambiente','filter'=>'técnico de controle de meio ambiente',]);

        CompanyOccupationsModel::create(['code'=>'311510','occupation'=>'Técnico de meteorologia','filter'=>'técnico de meteorologia',]);

        CompanyOccupationsModel::create(['code'=>'311515','occupation'=>'Técnico de utilidade (produção e distribuição de vapor, gases, óleos, combustíveis, energia)','filter'=>'técnico de utilidade (produção e distribuição de vapor, gases, óleos, combustíveis, energia)',]);

        CompanyOccupationsModel::create(['code'=>'311520','occupation'=>'Técnico em tratamento de efluentes','filter'=>'técnico em tratamento de efluentes',]);

        CompanyOccupationsModel::create(['code'=>'311605','occupation'=>'Técnico têxtil','filter'=>'técnico têxtil',]);

        CompanyOccupationsModel::create(['code'=>'311610','occupation'=>'Técnico têxtil (tratamentos químicos)','filter'=>'técnico têxtil (tratamentos químicos)',]);

        CompanyOccupationsModel::create(['code'=>'311615','occupation'=>'Técnico têxtil de fiação','filter'=>'técnico têxtil de fiação',]);

        CompanyOccupationsModel::create(['code'=>'311620','occupation'=>'Técnico têxtil de malharia','filter'=>'técnico têxtil de malharia',]);

        CompanyOccupationsModel::create(['code'=>'311625','occupation'=>'Técnico têxtil de tecelagem','filter'=>'técnico têxtil de tecelagem',]);

        CompanyOccupationsModel::create(['code'=>'311705','occupation'=>'Colorista de papel','filter'=>'colorista de papel',]);

        CompanyOccupationsModel::create(['code'=>'311710','occupation'=>'Colorista têxtil','filter'=>'colorista têxtil',]);

        CompanyOccupationsModel::create(['code'=>'311715','occupation'=>'Preparador de tintas','filter'=>'preparador de tintas',]);

        CompanyOccupationsModel::create(['code'=>'311720','occupation'=>'Preparador de tintas (fábrica de tecidos)','filter'=>'preparador de tintas (fábrica de tecidos)',]);

        CompanyOccupationsModel::create(['code'=>'311725','occupation'=>'Tingidor de couros e peles','filter'=>'tingidor de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'31205','occupation'=>'Cabo bombeiro militar','filter'=>'cabo bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'31210','occupation'=>'Soldado bombeiro militar','filter'=>'soldado bombeiro militar',]);

        CompanyOccupationsModel::create(['code'=>'312105','occupation'=>'Técnico de obras civis','filter'=>'técnico de obras civis',]);

        CompanyOccupationsModel::create(['code'=>'312205','occupation'=>'Técnico de estradas','filter'=>'técnico de estradas',]);

        CompanyOccupationsModel::create(['code'=>'312210','occupation'=>'Técnico de saneamento','filter'=>'técnico de saneamento',]);

        CompanyOccupationsModel::create(['code'=>'312305','occupation'=>'Técnico em agrimensura','filter'=>'técnico em agrimensura',]);

        CompanyOccupationsModel::create(['code'=>'312310','occupation'=>'Técnico em geodésia e cartografia','filter'=>'técnico em geodésia e cartografia',]);

        CompanyOccupationsModel::create(['code'=>'312315','occupation'=>'Técnico em hidrografia','filter'=>'técnico em hidrografia',]);

        CompanyOccupationsModel::create(['code'=>'312320','occupation'=>'Topógrafo','filter'=>'topógrafo',]);

        CompanyOccupationsModel::create(['code'=>'313105','occupation'=>'Eletrotécnico','filter'=>'eletrotécnico',]);

        CompanyOccupationsModel::create(['code'=>'313110','occupation'=>'Eletrotécnico (produção de energia)','filter'=>'eletrotécnico (produção de energia)',]);

        CompanyOccupationsModel::create(['code'=>'313115','occupation'=>'Eletrotécnico na fabricação, montagem e instalação de máquinas e equipamentos','filter'=>'eletrotécnico na fabricação, montagem e instalação de máquinas e equipamentos',]);

        CompanyOccupationsModel::create(['code'=>'313120','occupation'=>'Técnico de manutenção elétrica','filter'=>'técnico de manutenção elétrica',]);

        CompanyOccupationsModel::create(['code'=>'313125','occupation'=>'Técnico de manutenção elétrica de máquina','filter'=>'técnico de manutenção elétrica de máquina',]);

        CompanyOccupationsModel::create(['code'=>'313130','occupation'=>'Técnico eletricista','filter'=>'técnico eletricista',]);

        CompanyOccupationsModel::create(['code'=>'313205','occupation'=>'Técnico de manutenção eletrônica','filter'=>'técnico de manutenção eletrônica',]);

        CompanyOccupationsModel::create(['code'=>'313210','occupation'=>'Técnico de manutenção eletrônica (circuitos de máquinas com comando numérico)','filter'=>'técnico de manutenção eletrônica (circuitos de máquinas com comando numérico)',]);

        CompanyOccupationsModel::create(['code'=>'313215','occupation'=>'Técnico eletrônico','filter'=>'técnico eletrônico',]);

        CompanyOccupationsModel::create(['code'=>'313220','occupation'=>'Técnico em manutenção de equipamentos de informática','filter'=>'técnico em manutenção de equipamentos de informática',]);

        CompanyOccupationsModel::create(['code'=>'313305','occupation'=>'Técnico de comunicação de dados','filter'=>'técnico de comunicação de dados',]);

        CompanyOccupationsModel::create(['code'=>'313310','occupation'=>'Técnico de rede (telecomunicações)','filter'=>'técnico de rede (telecomunicações)',]);

        CompanyOccupationsModel::create(['code'=>'313315','occupation'=>'Técnico de telecomunicações (telefonia)','filter'=>'técnico de telecomunicações (telefonia)',]);

        CompanyOccupationsModel::create(['code'=>'313320','occupation'=>'Técnico de transmissão (telecomunicações)','filter'=>'técnico de transmissão (telecomunicações)',]);

        CompanyOccupationsModel::create(['code'=>'313405','occupation'=>'Técnico em calibração','filter'=>'técnico em calibração',]);

        CompanyOccupationsModel::create(['code'=>'313410','occupation'=>'Técnico em instrumentação','filter'=>'técnico em instrumentação',]);

        CompanyOccupationsModel::create(['code'=>'313415','occupation'=>'Encarregado de manutenção de instrumentos de controle, medição e similares','filter'=>'encarregado de manutenção de instrumentos de controle, medição e similares',]);

        CompanyOccupationsModel::create(['code'=>'313505','occupation'=>'Técnico em fotônica','filter'=>'técnico em fotônica',]);

        CompanyOccupationsModel::create(['code'=>'314105','occupation'=>'Técnico em mecânica de precisão','filter'=>'técnico em mecânica de precisão',]);

        CompanyOccupationsModel::create(['code'=>'314110','occupation'=>'Técnico mecânico','filter'=>'técnico mecânico',]);

        CompanyOccupationsModel::create(['code'=>'314115','occupation'=>'Técnico mecânico (calefação, ventilação e refrigeração)','filter'=>'técnico mecânico (calefação, ventilação e refrigeração)',]);

        CompanyOccupationsModel::create(['code'=>'314120','occupation'=>'Técnico mecânico (máquinas)','filter'=>'técnico mecânico (máquinas)',]);

        CompanyOccupationsModel::create(['code'=>'314125','occupation'=>'Técnico mecânico (motores)','filter'=>'técnico mecânico (motores)',]);

        CompanyOccupationsModel::create(['code'=>'314205','occupation'=>'Técnico mecânico na fabricação de ferramentas','filter'=>'técnico mecânico na fabricação de ferramentas',]);

        CompanyOccupationsModel::create(['code'=>'314210','occupation'=>'Técnico mecânico na manutenção de ferramentas','filter'=>'técnico mecânico na manutenção de ferramentas',]);

        CompanyOccupationsModel::create(['code'=>'314305','occupation'=>'Técnico em automobilística','filter'=>'técnico em automobilística',]);

        CompanyOccupationsModel::create(['code'=>'314310','occupation'=>'Técnico mecânico (aeronaves)','filter'=>'técnico mecânico (aeronaves)',]);

        CompanyOccupationsModel::create(['code'=>'314315','occupation'=>'Técnico mecânico (embarcações)','filter'=>'técnico mecânico (embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'314405','occupation'=>'Técnico de manutenção de sistemas e instrumentos','filter'=>'técnico de manutenção de sistemas e instrumentos',]);

        CompanyOccupationsModel::create(['code'=>'314410','occupation'=>'Técnico em manutenção de máquinas','filter'=>'técnico em manutenção de máquinas',]);

        CompanyOccupationsModel::create(['code'=>'314610','occupation'=>'Técnico em caldeiraria','filter'=>'técnico em caldeiraria',]);

        CompanyOccupationsModel::create(['code'=>'314615','occupation'=>'Técnico em estruturas metálicas','filter'=>'técnico em estruturas metálicas',]);

        CompanyOccupationsModel::create(['code'=>'314620','occupation'=>'Técnico em soldagem','filter'=>'técnico em soldagem',]);

        CompanyOccupationsModel::create(['code'=>'314625','occupation'=>'Tecnólogo em soldagem','filter'=>'tecnólogo em soldagem',]);

        CompanyOccupationsModel::create(['code'=>'314705','occupation'=>'Técnico de acabamento em siderurgia','filter'=>'técnico de acabamento em siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'314710','occupation'=>'Técnico de aciaria em siderurgia','filter'=>'técnico de aciaria em siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'314715','occupation'=>'Técnico de fundição em siderurgia','filter'=>'técnico de fundição em siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'314720','occupation'=>'Técnico de laminação em siderurgia','filter'=>'técnico de laminação em siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'314725','occupation'=>'Técnico de redução na siderurgia (primeira fusão)','filter'=>'técnico de redução na siderurgia (primeira fusão)',]);

        CompanyOccupationsModel::create(['code'=>'314730','occupation'=>'Técnico de refratário em siderurgia','filter'=>'técnico de refratário em siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'314805','occupation'=>'Inspetor de equipamentos','filter'=>'inspetor de equipamentos',]);

        CompanyOccupationsModel::create(['code'=>'314810','occupation'=>'Inspetor de fabricação','filter'=>'inspetor de fabricação',]);

        CompanyOccupationsModel::create(['code'=>'314815','occupation'=>'Inspetor de ensaios não destrutivos','filter'=>'inspetor de ensaios não destrutivos',]);

        CompanyOccupationsModel::create(['code'=>'314825','occupation'=>'Inspetor de dutos','filter'=>'inspetor de dutos',]);

        CompanyOccupationsModel::create(['code'=>'314830','occupation'=>'Inspetor de controle dimensional','filter'=>'inspetor de controle dimensional',]);

        CompanyOccupationsModel::create(['code'=>'314835','occupation'=>'Inspetor de pintura','filter'=>'inspetor de pintura',]);

        CompanyOccupationsModel::create(['code'=>'314840','occupation'=>'Inspetor de manutenção','filter'=>'inspetor de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'314845','occupation'=>'Inspetor de soldagem','filter'=>'inspetor de soldagem',]);

        CompanyOccupationsModel::create(['code'=>'316105','occupation'=>'Técnico em geofísica','filter'=>'técnico em geofísica',]);

        CompanyOccupationsModel::create(['code'=>'316110','occupation'=>'Técnico em geologia','filter'=>'técnico em geologia',]);

        CompanyOccupationsModel::create(['code'=>'316115','occupation'=>'Técnico em geoquímica','filter'=>'técnico em geoquímica',]);

        CompanyOccupationsModel::create(['code'=>'316120','occupation'=>'Técnico em geotecnia','filter'=>'técnico em geotecnia',]);

        CompanyOccupationsModel::create(['code'=>'316305','occupation'=>'Técnico de mineração','filter'=>'técnico de mineração',]);

        CompanyOccupationsModel::create(['code'=>'316310','occupation'=>'Técnico de mineração (óleo e petróleo)','filter'=>'técnico de mineração (óleo e petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'316315','occupation'=>'Técnico em processamento mineral (exceto petróleo)','filter'=>'técnico em processamento mineral (exceto petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'316320','occupation'=>'Técnico em pesquisa mineral','filter'=>'técnico em pesquisa mineral',]);

        CompanyOccupationsModel::create(['code'=>'316325','occupation'=>'Técnico de produção em refino de petróleo','filter'=>'técnico de produção em refino de petróleo',]);

        CompanyOccupationsModel::create(['code'=>'316330','occupation'=>'Técnico em planejamento de lavra de minas','filter'=>'técnico em planejamento de lavra de minas',]);

        CompanyOccupationsModel::create(['code'=>'316335','occupation'=>'Desincrustador (poços de petróleo)','filter'=>'desincrustador (poços de petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'316340','occupation'=>'Cimentador (poços de petróleo)','filter'=>'cimentador (poços de petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'317105','occupation'=>'Desenvolvedor web (técnico)','filter'=>'desenvolvedor web (técnico)',]);

        CompanyOccupationsModel::create(['code'=>'317110','occupation'=>'Desenvolvedor de sistemas de tecnologia da informação (técnico)','filter'=>'desenvolvedor de sistemas de tecnologia da informação (técnico)',]);

        CompanyOccupationsModel::create(['code'=>'317115','occupation'=>'Programador de máquinas - ferramenta com comando numérico','filter'=>'programador de máquinas - ferramenta com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'317120','occupation'=>'Desenvolvedor de multimídia','filter'=>'desenvolvedor de multimídia',]);

        CompanyOccupationsModel::create(['code'=>'317205','occupation'=>'Operador de computador','filter'=>'operador de computador',]);

        CompanyOccupationsModel::create(['code'=>'317210','occupation'=>'Técnico de suporte ao usuário de tecnologia da informação','filter'=>'técnico de suporte ao usuário de tecnologia da informação',]);

        CompanyOccupationsModel::create(['code'=>'318005','occupation'=>'Desenhista técnico','filter'=>'desenhista técnico',]);

        CompanyOccupationsModel::create(['code'=>'318010','occupation'=>'Desenhista copista','filter'=>'desenhista copista',]);

        CompanyOccupationsModel::create(['code'=>'318015','occupation'=>'Desenhista detalhista','filter'=>'desenhista detalhista',]);

        CompanyOccupationsModel::create(['code'=>'318105','occupation'=>'Desenhista técnico (arquitetura)','filter'=>'desenhista técnico (arquitetura)',]);

        CompanyOccupationsModel::create(['code'=>'318110','occupation'=>'Desenhista técnico (cartografia)','filter'=>'desenhista técnico (cartografia)',]);

        CompanyOccupationsModel::create(['code'=>'318115','occupation'=>'Desenhista técnico (construção civil)','filter'=>'desenhista técnico (construção civil)',]);

        CompanyOccupationsModel::create(['code'=>'318120','occupation'=>'Desenhista técnico (instalações hidrossanitárias)','filter'=>'desenhista técnico (instalações hidrossanitárias)',]);

        CompanyOccupationsModel::create(['code'=>'318205','occupation'=>'Desenhista técnico mecânico','filter'=>'desenhista técnico mecânico',]);

        CompanyOccupationsModel::create(['code'=>'318210','occupation'=>'Desenhista técnico aeronáutico','filter'=>'desenhista técnico aeronáutico',]);

        CompanyOccupationsModel::create(['code'=>'318215','occupation'=>'Desenhista técnico naval','filter'=>'desenhista técnico naval',]);

        CompanyOccupationsModel::create(['code'=>'318305','occupation'=>'Desenhista técnico (eletricidade e eletrônica)','filter'=>'desenhista técnico (eletricidade e eletrônica)',]);

        CompanyOccupationsModel::create(['code'=>'318310','occupation'=>'Desenhista técnico (calefação, ventilação e refrigeração)','filter'=>'desenhista técnico (calefação, ventilação e refrigeração)',]);

        CompanyOccupationsModel::create(['code'=>'318405','occupation'=>'Desenhista técnico (artes gráficas)','filter'=>'desenhista técnico (artes gráficas)',]);

        CompanyOccupationsModel::create(['code'=>'318410','occupation'=>'Desenhista técnico (ilustrações artísticas)','filter'=>'desenhista técnico (ilustrações artísticas)',]);

        CompanyOccupationsModel::create(['code'=>'318415','occupation'=>'Desenhista técnico (ilustrações técnicas)','filter'=>'desenhista técnico (ilustrações técnicas)',]);

        CompanyOccupationsModel::create(['code'=>'318420','occupation'=>'Desenhista técnico (indústria têxtil)','filter'=>'desenhista técnico (indústria têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'318425','occupation'=>'Desenhista técnico (mobiliário)','filter'=>'desenhista técnico (mobiliário)',]);

        CompanyOccupationsModel::create(['code'=>'318430','occupation'=>'Desenhista técnico de embalagens, maquetes e leiautes','filter'=>'desenhista técnico de embalagens, maquetes e leiautes',]);

        CompanyOccupationsModel::create(['code'=>'318505','occupation'=>'Desenhista projetista de arquitetura','filter'=>'desenhista projetista de arquitetura',]);

        CompanyOccupationsModel::create(['code'=>'318510','occupation'=>'Desenhista projetista de construção civil','filter'=>'desenhista projetista de construção civil',]);

        CompanyOccupationsModel::create(['code'=>'318605','occupation'=>'Desenhista projetista de máquinas','filter'=>'desenhista projetista de máquinas',]);

        CompanyOccupationsModel::create(['code'=>'318610','occupation'=>'Desenhista projetista mecânico','filter'=>'desenhista projetista mecânico',]);

        CompanyOccupationsModel::create(['code'=>'318705','occupation'=>'Desenhista projetista de eletricidade','filter'=>'desenhista projetista de eletricidade',]);

        CompanyOccupationsModel::create(['code'=>'318710','occupation'=>'Desenhista projetista eletrônico','filter'=>'desenhista projetista eletrônico',]);

        CompanyOccupationsModel::create(['code'=>'318805','occupation'=>'Projetista de móveis','filter'=>'projetista de móveis',]);

        CompanyOccupationsModel::create(['code'=>'318810','occupation'=>'Modelista de roupas','filter'=>'modelista de roupas',]);

        CompanyOccupationsModel::create(['code'=>'318815','occupation'=>'Modelista de calçados','filter'=>'modelista de calçados',]);

        CompanyOccupationsModel::create(['code'=>'319105','occupation'=>'Técnico em calçados e artefatos de couro','filter'=>'técnico em calçados e artefatos de couro',]);

        CompanyOccupationsModel::create(['code'=>'319110','occupation'=>'Técnico em confecções do vestuário','filter'=>'técnico em confecções do vestuário',]);

        CompanyOccupationsModel::create(['code'=>'319205','occupation'=>'Técnico do mobiliário','filter'=>'técnico do mobiliário',]);

        CompanyOccupationsModel::create(['code'=>'320105','occupation'=>'Técnico em bioterismo','filter'=>'técnico em bioterismo',]);

        CompanyOccupationsModel::create(['code'=>'320110','occupation'=>'Técnico em histologia','filter'=>'técnico em histologia',]);

        CompanyOccupationsModel::create(['code'=>'321105','occupation'=>'Técnico agrícola','filter'=>'técnico agrícola',]);

        CompanyOccupationsModel::create(['code'=>'321110','occupation'=>'Técnico agropecuário','filter'=>'técnico agropecuário',]);

        CompanyOccupationsModel::create(['code'=>'321205','occupation'=>'Técnico em madeira','filter'=>'técnico em madeira',]);

        CompanyOccupationsModel::create(['code'=>'321210','occupation'=>'Técnico florestal','filter'=>'técnico florestal',]);

        CompanyOccupationsModel::create(['code'=>'321305','occupation'=>'Técnico em piscicultura','filter'=>'técnico em piscicultura',]);

        CompanyOccupationsModel::create(['code'=>'321310','occupation'=>'Técnico em carcinicultura','filter'=>'técnico em carcinicultura',]);

        CompanyOccupationsModel::create(['code'=>'321315','occupation'=>'Técnico em mitilicultura','filter'=>'técnico em mitilicultura',]);

        CompanyOccupationsModel::create(['code'=>'321320','occupation'=>'Técnico em ranicultura','filter'=>'técnico em ranicultura',]);

        CompanyOccupationsModel::create(['code'=>'322105','occupation'=>'Técnico em acupuntura','filter'=>'técnico em acupuntura',]);

        CompanyOccupationsModel::create(['code'=>'322110','occupation'=>'Podólogo','filter'=>'podólogo',]);

        CompanyOccupationsModel::create(['code'=>'322115','occupation'=>'Técnico em quiropraxia','filter'=>'técnico em quiropraxia',]);

        CompanyOccupationsModel::create(['code'=>'322120','occupation'=>'Massoterapeuta','filter'=>'massoterapeuta',]);

        CompanyOccupationsModel::create(['code'=>'322125','occupation'=>'Terapeuta holístico','filter'=>'terapeuta holístico',]);

        CompanyOccupationsModel::create(['code'=>'322130','occupation'=>'Esteticista','filter'=>'esteticista',]);

        CompanyOccupationsModel::create(['code'=>'322135','occupation'=>'Doula','filter'=>'doula',]);

        CompanyOccupationsModel::create(['code'=>'322140','occupation'=>'Instrutor de pilates','filter'=>'instrutor de pilates',]);

        CompanyOccupationsModel::create(['code'=>'322205','occupation'=>'Técnico de enfermagem','filter'=>'técnico de enfermagem',]);

        CompanyOccupationsModel::create(['code'=>'322210','occupation'=>'Técnico de enfermagem de terapia intensiva','filter'=>'técnico de enfermagem de terapia intensiva',]);

        CompanyOccupationsModel::create(['code'=>'322215','occupation'=>'Técnico de enfermagem do trabalho','filter'=>'técnico de enfermagem do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'322220','occupation'=>'Técnico de enfermagem psiquiátrica','filter'=>'técnico de enfermagem psiquiátrica',]);

        CompanyOccupationsModel::create(['code'=>'322225','occupation'=>'Instrumentador cirúrgico','filter'=>'instrumentador cirúrgico',]);

        CompanyOccupationsModel::create(['code'=>'322230','occupation'=>'Auxiliar de enfermagem','filter'=>'auxiliar de enfermagem',]);

        CompanyOccupationsModel::create(['code'=>'322235','occupation'=>'Auxiliar de enfermagem do trabalho','filter'=>'auxiliar de enfermagem do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'322240','occupation'=>'Auxiliar de saúde (navegação marítima)','filter'=>'auxiliar de saúde (navegação marítima)',]);

        CompanyOccupationsModel::create(['code'=>'322245','occupation'=>'Técnico de enfermagem da estratégia de saúde da família','filter'=>'técnico de enfermagem da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'322250','occupation'=>'Auxiliar de enfermagem da estratégia de saúde da família','filter'=>'auxiliar de enfermagem da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'322255','occupation'=>'Técnico em agente comunitário de saúde','filter'=>'técnico em agente comunitário de saúde',]);

        CompanyOccupationsModel::create(['code'=>'322305','occupation'=>'Técnico em óptica e optometria','filter'=>'técnico em óptica e optometria',]);

        CompanyOccupationsModel::create(['code'=>'322405','occupation'=>'Técnico em saúde bucal','filter'=>'técnico em saúde bucal',]);

        CompanyOccupationsModel::create(['code'=>'322410','occupation'=>'Protético dentário','filter'=>'protético dentário',]);

        CompanyOccupationsModel::create(['code'=>'322415','occupation'=>'Auxiliar em saúde bucal','filter'=>'auxiliar em saúde bucal',]);

        CompanyOccupationsModel::create(['code'=>'322420','occupation'=>'Auxiliar de prótese dentária','filter'=>'auxiliar de prótese dentária',]);

        CompanyOccupationsModel::create(['code'=>'322425','occupation'=>'Técnico em saúde bucal da estratégia de saúde da família','filter'=>'técnico em saúde bucal da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'322430','occupation'=>'Auxiliar em saúde bucal da estratégia de saúde da família','filter'=>'auxiliar em saúde bucal da estratégia de saúde da família',]);

        CompanyOccupationsModel::create(['code'=>'322505','occupation'=>'Técnico de ortopedia','filter'=>'técnico de ortopedia',]);

        CompanyOccupationsModel::create(['code'=>'322605','occupation'=>'Técnico de imobilização ortopédica','filter'=>'técnico de imobilização ortopédica',]);

        CompanyOccupationsModel::create(['code'=>'323105','occupation'=>'Técnico em pecuária','filter'=>'técnico em pecuária',]);

        CompanyOccupationsModel::create(['code'=>'324105','occupation'=>'Técnico em métodos eletrográficos em encefalografia','filter'=>'técnico em métodos eletrográficos em encefalografia',]);

        CompanyOccupationsModel::create(['code'=>'324110','occupation'=>'Técnico em métodos gráficos em cardiologia','filter'=>'técnico em métodos gráficos em cardiologia',]);

        CompanyOccupationsModel::create(['code'=>'324115','occupation'=>'Técnico em radiologia e imagenologia','filter'=>'técnico em radiologia e imagenologia',]);

        CompanyOccupationsModel::create(['code'=>'324120','occupation'=>'Tecnólogo em radiologia','filter'=>'tecnólogo em radiologia',]);

        CompanyOccupationsModel::create(['code'=>'324125','occupation'=>'Tecnólogo oftálmico','filter'=>'tecnólogo oftálmico',]);

        CompanyOccupationsModel::create(['code'=>'324130','occupation'=>'Técnico em espirometria','filter'=>'técnico em espirometria',]);

        CompanyOccupationsModel::create(['code'=>'324135','occupation'=>'Técnico em polissonografia','filter'=>'técnico em polissonografia',]);

        CompanyOccupationsModel::create(['code'=>'324140','occupation'=>'Dosimetrista clínico','filter'=>'dosimetrista clínico',]);

        CompanyOccupationsModel::create(['code'=>'324205','occupation'=>'Técnico em patologia clínica','filter'=>'técnico em patologia clínica',]);

        CompanyOccupationsModel::create(['code'=>'324215','occupation'=>'Citotécnico','filter'=>'citotécnico',]);

        CompanyOccupationsModel::create(['code'=>'324220','occupation'=>'Técnico em hemoterapia','filter'=>'técnico em hemoterapia',]);

        CompanyOccupationsModel::create(['code'=>'325005','occupation'=>'Enólogo','filter'=>'enólogo',]);

        CompanyOccupationsModel::create(['code'=>'325010','occupation'=>'Aromista','filter'=>'aromista',]);

        CompanyOccupationsModel::create(['code'=>'325015','occupation'=>'Perfumista','filter'=>'perfumista',]);

        CompanyOccupationsModel::create(['code'=>'325105','occupation'=>'Auxiliar técnico em laboratório de farmácia','filter'=>'auxiliar técnico em laboratório de farmácia',]);

        CompanyOccupationsModel::create(['code'=>'325110','occupation'=>'Técnico em laboratório de farmácia','filter'=>'técnico em laboratório de farmácia',]);

        CompanyOccupationsModel::create(['code'=>'325115','occupation'=>'Técnico em farmácia','filter'=>'técnico em farmácia',]);

        CompanyOccupationsModel::create(['code'=>'325205','occupation'=>'Técnico de alimentos','filter'=>'técnico de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'325210','occupation'=>'Técnico em nutrição e dietética','filter'=>'técnico em nutrição e dietética',]);

        CompanyOccupationsModel::create(['code'=>'325305','occupation'=>'Técnico em biotecnologia','filter'=>'técnico em biotecnologia',]);

        CompanyOccupationsModel::create(['code'=>'325310','occupation'=>'Técnico em imunobiológicos','filter'=>'técnico em imunobiológicos',]);

        CompanyOccupationsModel::create(['code'=>'328105','occupation'=>'Embalsamador','filter'=>'embalsamador',]);

        CompanyOccupationsModel::create(['code'=>'328110','occupation'=>'Taxidermista','filter'=>'taxidermista',]);

        CompanyOccupationsModel::create(['code'=>'331105','occupation'=>'Professor de nível médio na educação infantil','filter'=>'professor de nível médio na educação infantil',]);

        CompanyOccupationsModel::create(['code'=>'331110','occupation'=>'Auxiliar de desenvolvimento infantil','filter'=>'auxiliar de desenvolvimento infantil',]);

        CompanyOccupationsModel::create(['code'=>'331205','occupation'=>'Professor de nível médio no ensino fundamental','filter'=>'professor de nível médio no ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'331305','occupation'=>'Professor de nível médio no ensino profissionalizante','filter'=>'professor de nível médio no ensino profissionalizante',]);

        CompanyOccupationsModel::create(['code'=>'332105','occupation'=>'Professor leigo no ensino fundamental','filter'=>'professor leigo no ensino fundamental',]);

        CompanyOccupationsModel::create(['code'=>'332205','occupation'=>'Professor prático no ensino profissionalizante','filter'=>'professor prático no ensino profissionalizante',]);

        CompanyOccupationsModel::create(['code'=>'333105','occupation'=>'Instrutor de auto-escola','filter'=>'instrutor de auto-escola',]);

        CompanyOccupationsModel::create(['code'=>'333110','occupation'=>'Instrutor de cursos livres','filter'=>'instrutor de cursos livres',]);

        CompanyOccupationsModel::create(['code'=>'333115','occupation'=>'Professores de cursos livres','filter'=>'professores de cursos livres',]);

        CompanyOccupationsModel::create(['code'=>'334105','occupation'=>'Inspetor de alunos de escola privada','filter'=>'inspetor de alunos de escola privada',]);

        CompanyOccupationsModel::create(['code'=>'334110','occupation'=>'Inspetor de alunos de escola pública','filter'=>'inspetor de alunos de escola pública',]);

        CompanyOccupationsModel::create(['code'=>'334115','occupation'=>'Monitor de transporte escolar','filter'=>'monitor de transporte escolar',]);

        CompanyOccupationsModel::create(['code'=>'341105','occupation'=>'Piloto comercial (exceto linhas aéreas)','filter'=>'piloto comercial (exceto linhas aéreas)',]);

        CompanyOccupationsModel::create(['code'=>'341110','occupation'=>'Piloto comercial de helicóptero (exceto linhas aéreas)','filter'=>'piloto comercial de helicóptero (exceto linhas aéreas)',]);

        CompanyOccupationsModel::create(['code'=>'341115','occupation'=>'Mecânico de vôo','filter'=>'mecânico de vôo',]);

        CompanyOccupationsModel::create(['code'=>'341120','occupation'=>'Piloto agrícola','filter'=>'piloto agrícola',]);

        CompanyOccupationsModel::create(['code'=>'341205','occupation'=>'Contramestre de cabotagem','filter'=>'contramestre de cabotagem',]);

        CompanyOccupationsModel::create(['code'=>'341210','occupation'=>'Mestre de cabotagem','filter'=>'mestre de cabotagem',]);

        CompanyOccupationsModel::create(['code'=>'341215','occupation'=>'Mestre fluvial','filter'=>'mestre fluvial',]);

        CompanyOccupationsModel::create(['code'=>'341220','occupation'=>'Patrão de pesca de alto-mar','filter'=>'patrão de pesca de alto-mar',]);

        CompanyOccupationsModel::create(['code'=>'341225','occupation'=>'Patrão de pesca na navegação interior','filter'=>'patrão de pesca na navegação interior',]);

        CompanyOccupationsModel::create(['code'=>'341230','occupation'=>'Piloto fluvial','filter'=>'piloto fluvial',]);

        CompanyOccupationsModel::create(['code'=>'341235','occupation'=>'Técnico em sinalização náutica','filter'=>'técnico em sinalização náutica',]);

        CompanyOccupationsModel::create(['code'=>'341240','occupation'=>'Técnicos em manobras em equipamentos de convés','filter'=>'técnicos em manobras em equipamentos de convés',]);

        CompanyOccupationsModel::create(['code'=>'341245','occupation'=>'Técnico em sinais navais','filter'=>'técnico em sinais navais',]);

        CompanyOccupationsModel::create(['code'=>'341250','occupation'=>'Auxiliar técnico de sinalização nautica','filter'=>'auxiliar técnico de sinalização nautica',]);

        CompanyOccupationsModel::create(['code'=>'341305','occupation'=>'Condutor maquinista motorista fluvial','filter'=>'condutor maquinista motorista fluvial',]);

        CompanyOccupationsModel::create(['code'=>'341310','occupation'=>'Condutor de máquinas','filter'=>'condutor de máquinas',]);

        CompanyOccupationsModel::create(['code'=>'341315','occupation'=>'Eletricista de bordo','filter'=>'eletricista de bordo',]);

        CompanyOccupationsModel::create(['code'=>'341320','occupation'=>'Condutor de máquinas (bombeador)','filter'=>'condutor de máquinas (bombeador)',]);

        CompanyOccupationsModel::create(['code'=>'341325','occupation'=>'Condutor de máquinas (mecânico)','filter'=>'condutor de máquinas (mecânico)',]);

        CompanyOccupationsModel::create(['code'=>'342105','occupation'=>'Analista de transporte em comércio exterior','filter'=>'analista de transporte em comércio exterior',]);

        CompanyOccupationsModel::create(['code'=>'342110','occupation'=>'Operador de transporte multimodal','filter'=>'operador de transporte multimodal',]);

        CompanyOccupationsModel::create(['code'=>'342115','occupation'=>'Controlador de serviços de máquinas e veículos','filter'=>'controlador de serviços de máquinas e veículos',]);

        CompanyOccupationsModel::create(['code'=>'342120','occupation'=>'Afretador','filter'=>'afretador',]);

        CompanyOccupationsModel::create(['code'=>'342125','occupation'=>'Tecnólogo em logística de transporte','filter'=>'tecnólogo em logística de transporte',]);

        CompanyOccupationsModel::create(['code'=>'342205','occupation'=>'Ajudante de despachante aduaneiro','filter'=>'ajudante de despachante aduaneiro',]);

        CompanyOccupationsModel::create(['code'=>'342210','occupation'=>'Despachante aduaneiro','filter'=>'despachante aduaneiro',]);

        CompanyOccupationsModel::create(['code'=>'342215','occupation'=>'Analista de desembaraço aduaneiro','filter'=>'analista de desembaraço aduaneiro',]);

        CompanyOccupationsModel::create(['code'=>'342305','occupation'=>'Chefe de serviço de transporte rodoviário (passageiros e cargas)','filter'=>'chefe de serviço de transporte rodoviário (passageiros e cargas)',]);

        CompanyOccupationsModel::create(['code'=>'342310','occupation'=>'Inspetor de serviços de transportes rodoviários (passageiros e cargas)','filter'=>'inspetor de serviços de transportes rodoviários (passageiros e cargas)',]);

        CompanyOccupationsModel::create(['code'=>'342315','occupation'=>'Supervisor de carga e descarga','filter'=>'supervisor de carga e descarga',]);

        CompanyOccupationsModel::create(['code'=>'342405','occupation'=>'Agente de estação (ferrovia e metrô)','filter'=>'agente de estação (ferrovia e metrô)',]);

        CompanyOccupationsModel::create(['code'=>'342410','occupation'=>'Operador de centro de controle (ferrovia e metrô)','filter'=>'operador de centro de controle (ferrovia e metrô)',]);

        CompanyOccupationsModel::create(['code'=>'342505','occupation'=>'Controlador de tráfego aéreo','filter'=>'controlador de tráfego aéreo',]);

        CompanyOccupationsModel::create(['code'=>'342510','occupation'=>'Despachante operacional de vôo','filter'=>'despachante operacional de vôo',]);

        CompanyOccupationsModel::create(['code'=>'342515','occupation'=>'Fiscal de aviação civil (fac)','filter'=>'fiscal de aviação civil (fac)',]);

        CompanyOccupationsModel::create(['code'=>'342530','occupation'=>'Inspetor de aviação civil','filter'=>'inspetor de aviação civil',]);

        CompanyOccupationsModel::create(['code'=>'342535','occupation'=>'Operador de atendimento aeroviário','filter'=>'operador de atendimento aeroviário',]);

        CompanyOccupationsModel::create(['code'=>'342540','occupation'=>'Supervisor da administração de aeroportos','filter'=>'supervisor da administração de aeroportos',]);

        CompanyOccupationsModel::create(['code'=>'342545','occupation'=>'Supervisor de empresa aérea em aeroportos','filter'=>'supervisor de empresa aérea em aeroportos',]);

        CompanyOccupationsModel::create(['code'=>'342550','occupation'=>'Agente de proteção de aviação civil','filter'=>'agente de proteção de aviação civil',]);

        CompanyOccupationsModel::create(['code'=>'342555','occupation'=>'Fiscal de pista de aeroporto','filter'=>'fiscal de pista de aeroporto',]);

        CompanyOccupationsModel::create(['code'=>'342560','occupation'=>'Operador de rampa ( transporte aéreo)','filter'=>'operador de rampa ( transporte aéreo)',]);

        CompanyOccupationsModel::create(['code'=>'342605','occupation'=>'Chefe de estação portuária','filter'=>'chefe de estação portuária',]);

        CompanyOccupationsModel::create(['code'=>'342610','occupation'=>'Supervisor de operações portuárias','filter'=>'supervisor de operações portuárias',]);

        CompanyOccupationsModel::create(['code'=>'351105','occupation'=>'Técnico de contabilidade','filter'=>'técnico de contabilidade',]);

        CompanyOccupationsModel::create(['code'=>'351110','occupation'=>'Chefe de contabilidade (técnico)','filter'=>'chefe de contabilidade (técnico)',]);

        CompanyOccupationsModel::create(['code'=>'351115','occupation'=>'Consultor contábil (técnico)','filter'=>'consultor contábil (técnico)',]);

        CompanyOccupationsModel::create(['code'=>'351305','occupation'=>'Técnico em administração','filter'=>'técnico em administração',]);

        CompanyOccupationsModel::create(['code'=>'351310','occupation'=>'Técnico em administração de comércio exterior','filter'=>'técnico em administração de comércio exterior',]);

        CompanyOccupationsModel::create(['code'=>'351315','occupation'=>'Agente de recrutamento e seleção','filter'=>'agente de recrutamento e seleção',]);

        CompanyOccupationsModel::create(['code'=>'351405','occupation'=>'Escrevente','filter'=>'escrevente',]);

        CompanyOccupationsModel::create(['code'=>'351410','occupation'=>'Escrivão judicial','filter'=>'escrivão judicial',]);

        CompanyOccupationsModel::create(['code'=>'351415','occupation'=>'Escrivão extra - judicial','filter'=>'escrivão extra - judicial',]);

        CompanyOccupationsModel::create(['code'=>'351420','occupation'=>'Escrivão de polícia','filter'=>'escrivão de polícia',]);

        CompanyOccupationsModel::create(['code'=>'351425','occupation'=>'Oficial de justiça','filter'=>'oficial de justiça',]);

        CompanyOccupationsModel::create(['code'=>'351430','occupation'=>'Auxiliar de serviços jurídicos','filter'=>'auxiliar de serviços jurídicos',]);

        CompanyOccupationsModel::create(['code'=>'351435','occupation'=>'Mediador de conflitos','filter'=>'mediador de conflitos',]);

        CompanyOccupationsModel::create(['code'=>'351440','occupation'=>'Árbitro extrajudicial','filter'=>'Árbitro extrajudicial',]);

        CompanyOccupationsModel::create(['code'=>'351505','occupation'=>'Técnico em secretariado','filter'=>'técnico em secretariado',]);

        CompanyOccupationsModel::create(['code'=>'351510','occupation'=>'Taquígrafo','filter'=>'taquígrafo',]);

        CompanyOccupationsModel::create(['code'=>'351515','occupation'=>'Estenotipista','filter'=>'estenotipista',]);

        CompanyOccupationsModel::create(['code'=>'351605','occupation'=>'Técnico em segurança do trabalho','filter'=>'técnico em segurança do trabalho',]);

        CompanyOccupationsModel::create(['code'=>'351610','occupation'=>'Técnico em higiene ocupacional','filter'=>'técnico em higiene ocupacional',]);

        CompanyOccupationsModel::create(['code'=>'351705','occupation'=>'Analista de seguros (técnico)','filter'=>'analista de seguros (técnico)',]);

        CompanyOccupationsModel::create(['code'=>'351710','occupation'=>'Analista de sinistros','filter'=>'analista de sinistros',]);

        CompanyOccupationsModel::create(['code'=>'351715','occupation'=>'Assistente comercial de seguros','filter'=>'assistente comercial de seguros',]);

        CompanyOccupationsModel::create(['code'=>'351720','occupation'=>'Assistente técnico de seguros','filter'=>'assistente técnico de seguros',]);

        CompanyOccupationsModel::create(['code'=>'351725','occupation'=>'Inspetor de risco','filter'=>'inspetor de risco',]);

        CompanyOccupationsModel::create(['code'=>'351730','occupation'=>'Inspetor de sinistros','filter'=>'inspetor de sinistros',]);

        CompanyOccupationsModel::create(['code'=>'351735','occupation'=>'Técnico de resseguros','filter'=>'técnico de resseguros',]);

        CompanyOccupationsModel::create(['code'=>'351740','occupation'=>'Técnico de seguros','filter'=>'técnico de seguros',]);

        CompanyOccupationsModel::create(['code'=>'351805','occupation'=>'Detetive profissional','filter'=>'detetive profissional',]);

        CompanyOccupationsModel::create(['code'=>'351810','occupation'=>'Investigador de polícia','filter'=>'investigador de polícia',]);

        CompanyOccupationsModel::create(['code'=>'351815','occupation'=>'Papiloscopista policial','filter'=>'papiloscopista policial',]);

        CompanyOccupationsModel::create(['code'=>'351905','occupation'=>'Agente de inteligência','filter'=>'agente de inteligência',]);

        CompanyOccupationsModel::create(['code'=>'351910','occupation'=>'Agente técnico de inteligência','filter'=>'agente técnico de inteligência',]);

        CompanyOccupationsModel::create(['code'=>'352205','occupation'=>'Agente de defesa ambiental','filter'=>'agente de defesa ambiental',]);

        CompanyOccupationsModel::create(['code'=>'352210','occupation'=>'Agente de saúde pública','filter'=>'agente de saúde pública',]);

        CompanyOccupationsModel::create(['code'=>'352305','occupation'=>'Metrologista','filter'=>'metrologista',]);

        CompanyOccupationsModel::create(['code'=>'352310','occupation'=>'Agente fiscal de qualidade','filter'=>'agente fiscal de qualidade',]);

        CompanyOccupationsModel::create(['code'=>'352315','occupation'=>'Agente fiscal metrológico','filter'=>'agente fiscal metrológico',]);

        CompanyOccupationsModel::create(['code'=>'352320','occupation'=>'Agente fiscal têxtil','filter'=>'agente fiscal têxtil',]);

        CompanyOccupationsModel::create(['code'=>'352405','occupation'=>'Agente de direitos autorais','filter'=>'agente de direitos autorais',]);

        CompanyOccupationsModel::create(['code'=>'352410','occupation'=>'Avaliador de produtos dos meios de comunicação','filter'=>'avaliador de produtos dos meios de comunicação',]);

        CompanyOccupationsModel::create(['code'=>'352420','occupation'=>'Técnico em direitos autorais','filter'=>'técnico em direitos autorais',]);

        CompanyOccupationsModel::create(['code'=>'353205','occupation'=>'Técnico de operações e serviços bancários - câmbio','filter'=>'técnico de operações e serviços bancários - câmbio',]);

        CompanyOccupationsModel::create(['code'=>'353210','occupation'=>'Técnico de operações e serviços bancários - crédito imobiliário','filter'=>'técnico de operações e serviços bancários - crédito imobiliário',]);

        CompanyOccupationsModel::create(['code'=>'353215','occupation'=>'Técnico de operações e serviços bancários - crédito rural','filter'=>'técnico de operações e serviços bancários - crédito rural',]);

        CompanyOccupationsModel::create(['code'=>'353220','occupation'=>'Técnico de operações e serviços bancários - leasing','filter'=>'técnico de operações e serviços bancários - leasing',]);

        CompanyOccupationsModel::create(['code'=>'353225','occupation'=>'Técnico de operações e serviços bancários - renda fixa e variável','filter'=>'técnico de operações e serviços bancários - renda fixa e variável',]);

        CompanyOccupationsModel::create(['code'=>'353230','occupation'=>'Tesoureiro de banco','filter'=>'tesoureiro de banco',]);

        CompanyOccupationsModel::create(['code'=>'353235','occupation'=>'Chefe de serviços bancários','filter'=>'chefe de serviços bancários',]);

        CompanyOccupationsModel::create(['code'=>'354120','occupation'=>'Agente de vendas de serviços','filter'=>'agente de vendas de serviços',]);

        CompanyOccupationsModel::create(['code'=>'354125','occupation'=>'Assistente de vendas','filter'=>'assistente de vendas',]);

        CompanyOccupationsModel::create(['code'=>'354130','occupation'=>'Promotor de vendas especializado','filter'=>'promotor de vendas especializado',]);

        CompanyOccupationsModel::create(['code'=>'354135','occupation'=>'Técnico de vendas','filter'=>'técnico de vendas',]);

        CompanyOccupationsModel::create(['code'=>'354140','occupation'=>'Técnico em atendimento e vendas','filter'=>'técnico em atendimento e vendas',]);

        CompanyOccupationsModel::create(['code'=>'354145','occupation'=>'Vendedor pracista','filter'=>'vendedor pracista',]);

        CompanyOccupationsModel::create(['code'=>'354150','occupation'=>'Propagandista de produtos famacêuticos','filter'=>'propagandista de produtos famacêuticos',]);

        CompanyOccupationsModel::create(['code'=>'354205','occupation'=>'Comprador','filter'=>'comprador',]);

        CompanyOccupationsModel::create(['code'=>'354210','occupation'=>'Supervisor de compras','filter'=>'supervisor de compras',]);

        CompanyOccupationsModel::create(['code'=>'354305','occupation'=>'Analista de exportação e importação','filter'=>'analista de exportação e importação',]);

        CompanyOccupationsModel::create(['code'=>'354405','occupation'=>'Leiloeiro','filter'=>'leiloeiro',]);

        CompanyOccupationsModel::create(['code'=>'354410','occupation'=>'Avaliador de imóveis','filter'=>'avaliador de imóveis',]);

        CompanyOccupationsModel::create(['code'=>'354415','occupation'=>'Avaliador de bens móveis','filter'=>'avaliador de bens móveis',]);

        CompanyOccupationsModel::create(['code'=>'354505','occupation'=>'Corretor de seguros','filter'=>'corretor de seguros',]);

        CompanyOccupationsModel::create(['code'=>'354605','occupation'=>'Corretor de imóveis','filter'=>'corretor de imóveis',]);

        CompanyOccupationsModel::create(['code'=>'354610','occupation'=>'Corretor de grãos','filter'=>'corretor de grãos',]);

        CompanyOccupationsModel::create(['code'=>'354705','occupation'=>'Representante comercial autônomo','filter'=>'representante comercial autônomo',]);

        CompanyOccupationsModel::create(['code'=>'354805','occupation'=>'Técnico em turismo','filter'=>'técnico em turismo',]);

        CompanyOccupationsModel::create(['code'=>'354810','occupation'=>'Operador de turismo','filter'=>'operador de turismo',]);

        CompanyOccupationsModel::create(['code'=>'354815','occupation'=>'Agente de viagem','filter'=>'agente de viagem',]);

        CompanyOccupationsModel::create(['code'=>'354820','occupation'=>'Organizador de evento','filter'=>'organizador de evento',]);

        CompanyOccupationsModel::create(['code'=>'354825','occupation'=>'Cerimonialista','filter'=>'cerimonialista',]);

        CompanyOccupationsModel::create(['code'=>'371105','occupation'=>'Auxiliar de biblioteca','filter'=>'auxiliar de biblioteca',]);

        CompanyOccupationsModel::create(['code'=>'371110','occupation'=>'Técnico em biblioteconomia','filter'=>'técnico em biblioteconomia',]);

        CompanyOccupationsModel::create(['code'=>'371205','occupation'=>'Colecionador de selos e moedas','filter'=>'colecionador de selos e moedas',]);

        CompanyOccupationsModel::create(['code'=>'371210','occupation'=>'Técnico em museologia','filter'=>'técnico em museologia',]);

        CompanyOccupationsModel::create(['code'=>'371305','occupation'=>'Técnico em programação visual','filter'=>'técnico em programação visual',]);

        CompanyOccupationsModel::create(['code'=>'371310','occupation'=>'Técnico gráfico','filter'=>'técnico gráfico',]);

        CompanyOccupationsModel::create(['code'=>'371405','occupation'=>'Recreador de acantonamento','filter'=>'recreador de acantonamento',]);

        CompanyOccupationsModel::create(['code'=>'371410','occupation'=>'Recreador','filter'=>'recreador',]);

        CompanyOccupationsModel::create(['code'=>'372105','occupation'=>'Diretor de fotografia','filter'=>'diretor de fotografia',]);

        CompanyOccupationsModel::create(['code'=>'372110','occupation'=>'Iluminador (televisão)','filter'=>'iluminador (televisão)',]);

        CompanyOccupationsModel::create(['code'=>'372115','occupation'=>'Operador de câmera de televisão','filter'=>'operador de câmera de televisão',]);

        CompanyOccupationsModel::create(['code'=>'372205','occupation'=>'Operador de rede de teleprocessamento','filter'=>'operador de rede de teleprocessamento',]);

        CompanyOccupationsModel::create(['code'=>'372210','occupation'=>'Radiotelegrafista','filter'=>'radiotelegrafista',]);

        CompanyOccupationsModel::create(['code'=>'373105','occupation'=>'Operador de mídia audiovisual','filter'=>'operador de mídia audiovisual',]);

        CompanyOccupationsModel::create(['code'=>'373130','occupation'=>'Técnico de sistemas audiovisuais','filter'=>'técnico de sistemas audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'373135','occupation'=>'Operador de controle mestre','filter'=>'operador de controle mestre',]);

        CompanyOccupationsModel::create(['code'=>'373140','occupation'=>'Coordenador de programação','filter'=>'coordenador de programação',]);

        CompanyOccupationsModel::create(['code'=>'373145','occupation'=>'Assistente de operações audiovisuais','filter'=>'assistente de operações audiovisuais',]);

        CompanyOccupationsModel::create(['code'=>'373220','occupation'=>'Supervisor técnico operacional de sistemas de televisão e produtoras de vídeo','filter'=>'supervisor técnico operacional de sistemas de televisão e produtoras de vídeo',]);

        CompanyOccupationsModel::create(['code'=>'373225','occupation'=>'Supervisor de operações (mídias audiovisuais)','filter'=>'supervisor de operações (mídias audiovisuais)',]);

        CompanyOccupationsModel::create(['code'=>'373230','occupation'=>'Supervisor técnico (mídias audiovisuais)','filter'=>'supervisor técnico (mídias audiovisuais)',]);

        CompanyOccupationsModel::create(['code'=>'374105','occupation'=>'Técnico em gravação de áudio','filter'=>'técnico em gravação de áudio',]);

        CompanyOccupationsModel::create(['code'=>'374110','occupation'=>'Técnico em instalação de equipamentos de áudio','filter'=>'técnico em instalação de equipamentos de áudio',]);

        CompanyOccupationsModel::create(['code'=>'374115','occupation'=>'Técnico em masterização de áudio','filter'=>'técnico em masterização de áudio',]);

        CompanyOccupationsModel::create(['code'=>'374120','occupation'=>'Projetista de som','filter'=>'projetista de som',]);

        CompanyOccupationsModel::create(['code'=>'374125','occupation'=>'Técnico em sonorização','filter'=>'técnico em sonorização',]);

        CompanyOccupationsModel::create(['code'=>'374130','occupation'=>'Técnico em mixagem de áudio','filter'=>'técnico em mixagem de áudio',]);

        CompanyOccupationsModel::create(['code'=>'374135','occupation'=>'Projetista de sistemas de áudio','filter'=>'projetista de sistemas de áudio',]);

        CompanyOccupationsModel::create(['code'=>'374140','occupation'=>'Microfonista','filter'=>'microfonista',]);

        CompanyOccupationsModel::create(['code'=>'374145','occupation'=>'Dj (disc jockey)','filter'=>'dj (disc jockey)',]);

        CompanyOccupationsModel::create(['code'=>'374150','occupation'=>'Sonoplasta','filter'=>'sonoplasta',]);

        CompanyOccupationsModel::create(['code'=>'374155','occupation'=>'Analista musical','filter'=>'analista musical',]);

        CompanyOccupationsModel::create(['code'=>'374205','occupation'=>'Cenotécnico (cinema, vídeo, televisão, teatro e espetáculos)','filter'=>'cenotécnico (cinema, vídeo, televisão, teatro e espetáculos)',]);

        CompanyOccupationsModel::create(['code'=>'374210','occupation'=>'Maquinista de cinema e vídeo','filter'=>'maquinista de cinema e vídeo',]);

        CompanyOccupationsModel::create(['code'=>'374215','occupation'=>'Maquinista de teatro e espetáculos','filter'=>'maquinista de teatro e espetáculos',]);

        CompanyOccupationsModel::create(['code'=>'374305','occupation'=>'Operador de projetor cinematográfico','filter'=>'operador de projetor cinematográfico',]);

        CompanyOccupationsModel::create(['code'=>'374310','occupation'=>'Operador-mantenedor de projetor cinematográfico','filter'=>'operador-mantenedor de projetor cinematográfico',]);

        CompanyOccupationsModel::create(['code'=>'374405','occupation'=>'Editor de mídia audiovisual','filter'=>'editor de mídia audiovisual',]);

        CompanyOccupationsModel::create(['code'=>'374410','occupation'=>'Finalizador de filmes','filter'=>'finalizador de filmes',]);

        CompanyOccupationsModel::create(['code'=>'374415','occupation'=>'Finalizador de vídeo','filter'=>'finalizador de vídeo',]);

        CompanyOccupationsModel::create(['code'=>'374420','occupation'=>'Montador de filmes','filter'=>'montador de filmes',]);

        CompanyOccupationsModel::create(['code'=>'374425','occupation'=>'Diretor de imagens (tv)','filter'=>'diretor de imagens (tv)',]);

        CompanyOccupationsModel::create(['code'=>'375105','occupation'=>'Designer de interiores','filter'=>'designer de interiores',]);

        CompanyOccupationsModel::create(['code'=>'375110','occupation'=>'Designer de vitrines','filter'=>'designer de vitrines',]);

        CompanyOccupationsModel::create(['code'=>'375115','occupation'=>'Visual merchandiser','filter'=>'visual merchandiser',]);

        CompanyOccupationsModel::create(['code'=>'375120','occupation'=>'Decorador de eventos','filter'=>'decorador de eventos',]);

        CompanyOccupationsModel::create(['code'=>'375125','occupation'=>'Produtor de moda','filter'=>'produtor de moda',]);

        CompanyOccupationsModel::create(['code'=>'375130','occupation'=>'Profissional de organização (personal organizer)','filter'=>'profissional de organização (personal organizer)',]);

        CompanyOccupationsModel::create(['code'=>'376105','occupation'=>'Dançarino tradicional','filter'=>'dançarino tradicional',]);

        CompanyOccupationsModel::create(['code'=>'376110','occupation'=>'Dançarino popular','filter'=>'dançarino popular',]);

        CompanyOccupationsModel::create(['code'=>'376205','occupation'=>'Acrobata','filter'=>'acrobata',]);

        CompanyOccupationsModel::create(['code'=>'376210','occupation'=>'Artista aéreo','filter'=>'artista aéreo',]);

        CompanyOccupationsModel::create(['code'=>'376215','occupation'=>'Artista de circo (outros)','filter'=>'artista de circo (outros)',]);

        CompanyOccupationsModel::create(['code'=>'376220','occupation'=>'Contorcionista','filter'=>'contorcionista',]);

        CompanyOccupationsModel::create(['code'=>'376225','occupation'=>'Domador de animais (circense)','filter'=>'domador de animais (circense)',]);

        CompanyOccupationsModel::create(['code'=>'376230','occupation'=>'Equilibrista','filter'=>'equilibrista',]);

        CompanyOccupationsModel::create(['code'=>'376235','occupation'=>'Mágico','filter'=>'mágico',]);

        CompanyOccupationsModel::create(['code'=>'376240','occupation'=>'Malabarista','filter'=>'malabarista',]);

        CompanyOccupationsModel::create(['code'=>'376245','occupation'=>'Palhaço','filter'=>'palhaço',]);

        CompanyOccupationsModel::create(['code'=>'376250','occupation'=>'Titeriteiro','filter'=>'titeriteiro',]);

        CompanyOccupationsModel::create(['code'=>'376255','occupation'=>'Trapezista','filter'=>'trapezista',]);

        CompanyOccupationsModel::create(['code'=>'376305','occupation'=>'Apresentador de eventos','filter'=>'apresentador de eventos',]);

        CompanyOccupationsModel::create(['code'=>'376310','occupation'=>'Apresentador de festas populares','filter'=>'apresentador de festas populares',]);

        CompanyOccupationsModel::create(['code'=>'376315','occupation'=>'Apresentador de programas de rádio','filter'=>'apresentador de programas de rádio',]);

        CompanyOccupationsModel::create(['code'=>'376320','occupation'=>'Apresentador de programas de televisão','filter'=>'apresentador de programas de televisão',]);

        CompanyOccupationsModel::create(['code'=>'376325','occupation'=>'Apresentador de circo','filter'=>'apresentador de circo',]);

        CompanyOccupationsModel::create(['code'=>'376330','occupation'=>'Mestre de cerimonias','filter'=>'mestre de cerimonias',]);

        CompanyOccupationsModel::create(['code'=>'376405','occupation'=>'Modelo artístico','filter'=>'modelo artístico',]);

        CompanyOccupationsModel::create(['code'=>'376410','occupation'=>'Modelo de modas','filter'=>'modelo de modas',]);

        CompanyOccupationsModel::create(['code'=>'376415','occupation'=>'Modelo publicitário','filter'=>'modelo publicitário',]);

        CompanyOccupationsModel::create(['code'=>'377105','occupation'=>'Atleta profissional (outras modalidades)','filter'=>'atleta profissional (outras modalidades)',]);

        CompanyOccupationsModel::create(['code'=>'377110','occupation'=>'Atleta profissional de futebol','filter'=>'atleta profissional de futebol',]);

        CompanyOccupationsModel::create(['code'=>'377115','occupation'=>'Atleta profissional de golfe','filter'=>'atleta profissional de golfe',]);

        CompanyOccupationsModel::create(['code'=>'377120','occupation'=>'Atleta profissional de luta','filter'=>'atleta profissional de luta',]);

        CompanyOccupationsModel::create(['code'=>'377125','occupation'=>'Atleta profissional de tênis','filter'=>'atleta profissional de tênis',]);

        CompanyOccupationsModel::create(['code'=>'377130','occupation'=>'Jóquei','filter'=>'jóquei',]);

        CompanyOccupationsModel::create(['code'=>'377135','occupation'=>'Piloto de competição automobilística','filter'=>'piloto de competição automobilística',]);

        CompanyOccupationsModel::create(['code'=>'377140','occupation'=>'Profissional de atletismo','filter'=>'profissional de atletismo',]);

        CompanyOccupationsModel::create(['code'=>'377145','occupation'=>'Pugilista','filter'=>'pugilista',]);

        CompanyOccupationsModel::create(['code'=>'377205','occupation'=>'Árbitro desportivo','filter'=>'Árbitro desportivo',]);

        CompanyOccupationsModel::create(['code'=>'377210','occupation'=>'Árbitro de atletismo','filter'=>'Árbitro de atletismo',]);

        CompanyOccupationsModel::create(['code'=>'377215','occupation'=>'Árbitro de basquete','filter'=>'Árbitro de basquete',]);

        CompanyOccupationsModel::create(['code'=>'377220','occupation'=>'Árbitro de futebol','filter'=>'Árbitro de futebol',]);

        CompanyOccupationsModel::create(['code'=>'377225','occupation'=>'Árbitro de futebol de salão','filter'=>'Árbitro de futebol de salão',]);

        CompanyOccupationsModel::create(['code'=>'377230','occupation'=>'Árbitro de judô','filter'=>'Árbitro de judô',]);

        CompanyOccupationsModel::create(['code'=>'377235','occupation'=>'Árbitro de karatê','filter'=>'Árbitro de karatê',]);

        CompanyOccupationsModel::create(['code'=>'377240','occupation'=>'Árbitro de poló aquático','filter'=>'Árbitro de poló aquático',]);

        CompanyOccupationsModel::create(['code'=>'377245','occupation'=>'Árbitro de vôlei','filter'=>'Árbitro de vôlei',]);

        CompanyOccupationsModel::create(['code'=>'391105','occupation'=>'Cronoanalista','filter'=>'cronoanalista',]);

        CompanyOccupationsModel::create(['code'=>'391110','occupation'=>'Cronometrista','filter'=>'cronometrista',]);

        CompanyOccupationsModel::create(['code'=>'391115','occupation'=>'Controlador de entrada e saída','filter'=>'controlador de entrada e saída',]);

        CompanyOccupationsModel::create(['code'=>'391120','occupation'=>'Planejista','filter'=>'planejista',]);

        CompanyOccupationsModel::create(['code'=>'391125','occupation'=>'Técnico de planejamento de produção','filter'=>'técnico de planejamento de produção',]);

        CompanyOccupationsModel::create(['code'=>'391130','occupation'=>'Técnico de planejamento e programação da manutenção','filter'=>'técnico de planejamento e programação da manutenção',]);

        CompanyOccupationsModel::create(['code'=>'391135','occupation'=>'Técnico de matéria-prima e material','filter'=>'técnico de matéria-prima e material',]);

        CompanyOccupationsModel::create(['code'=>'391140','occupation'=>'Analista de manutenção (equipamentos aéreos)','filter'=>'analista de manutenção (equipamentos aéreos)',]);

        CompanyOccupationsModel::create(['code'=>'391145','occupation'=>'Analista de planejamento de manutenção','filter'=>'analista de planejamento de manutenção',]);

        CompanyOccupationsModel::create(['code'=>'391205','occupation'=>'Inspetor de qualidade','filter'=>'inspetor de qualidade',]);

        CompanyOccupationsModel::create(['code'=>'391210','occupation'=>'Técnico de garantia da qualidade','filter'=>'técnico de garantia da qualidade',]);

        CompanyOccupationsModel::create(['code'=>'391215','occupation'=>'Operador de inspeção de qualidade','filter'=>'operador de inspeção de qualidade',]);

        CompanyOccupationsModel::create(['code'=>'391220','occupation'=>'Técnico de painel de controle','filter'=>'técnico de painel de controle',]);

        CompanyOccupationsModel::create(['code'=>'391225','occupation'=>'Escolhedor de papel','filter'=>'escolhedor de papel',]);

        CompanyOccupationsModel::create(['code'=>'391230','occupation'=>'Técnico operacional de serviços de correios','filter'=>'técnico operacional de serviços de correios',]);

        CompanyOccupationsModel::create(['code'=>'395105','occupation'=>'Técnico de apoio em pesquisa e desenvolvimento (exceto agropecuário e florestal)','filter'=>'técnico de apoio em pesquisa e desenvolvimento (exceto agropecuário e florestal)',]);

        CompanyOccupationsModel::create(['code'=>'395110','occupation'=>'Técnico de apoio em pesquisa e desenvolvimento agropecuário florestal','filter'=>'técnico de apoio em pesquisa e desenvolvimento agropecuário florestal',]);

        CompanyOccupationsModel::create(['code'=>'410105','occupation'=>'Supervisor administrativo','filter'=>'supervisor administrativo',]);

        CompanyOccupationsModel::create(['code'=>'410205','occupation'=>'Supervisor de almoxarifado','filter'=>'supervisor de almoxarifado',]);

        CompanyOccupationsModel::create(['code'=>'410210','occupation'=>'Supervisor de câmbio','filter'=>'supervisor de câmbio',]);

        CompanyOccupationsModel::create(['code'=>'410215','occupation'=>'Supervisor de contas a pagar','filter'=>'supervisor de contas a pagar',]);

        CompanyOccupationsModel::create(['code'=>'410220','occupation'=>'Supervisor de controle patrimonial','filter'=>'supervisor de controle patrimonial',]);

        CompanyOccupationsModel::create(['code'=>'410225','occupation'=>'Supervisor de crédito e cobrança','filter'=>'supervisor de crédito e cobrança',]);

        CompanyOccupationsModel::create(['code'=>'410230','occupation'=>'Supervisor de orçamento','filter'=>'supervisor de orçamento',]);

        CompanyOccupationsModel::create(['code'=>'410235','occupation'=>'Supervisor de tesouraria','filter'=>'supervisor de tesouraria',]);

        CompanyOccupationsModel::create(['code'=>'410240','occupation'=>'Supervisor de logística','filter'=>'supervisor de logística',]);

        CompanyOccupationsModel::create(['code'=>'411005','occupation'=>'Auxiliar de escritório','filter'=>'auxiliar de escritório',]);

        CompanyOccupationsModel::create(['code'=>'411010','occupation'=>'Assistente administrativo','filter'=>'assistente administrativo',]);

        CompanyOccupationsModel::create(['code'=>'411015','occupation'=>'Atendente de judiciário','filter'=>'atendente de judiciário',]);

        CompanyOccupationsModel::create(['code'=>'411020','occupation'=>'Auxiliar de judiciário','filter'=>'auxiliar de judiciário',]);

        CompanyOccupationsModel::create(['code'=>'411025','occupation'=>'Auxiliar de cartório','filter'=>'auxiliar de cartório',]);

        CompanyOccupationsModel::create(['code'=>'411030','occupation'=>'Auxiliar de pessoal','filter'=>'auxiliar de pessoal',]);

        CompanyOccupationsModel::create(['code'=>'411035','occupation'=>'Auxiliar de estatística','filter'=>'auxiliar de estatística',]);

        CompanyOccupationsModel::create(['code'=>'411040','occupation'=>'Auxiliar de seguros','filter'=>'auxiliar de seguros',]);

        CompanyOccupationsModel::create(['code'=>'411045','occupation'=>'Auxiliar de serviços de importação e exportação','filter'=>'auxiliar de serviços de importação e exportação',]);

        CompanyOccupationsModel::create(['code'=>'411050','occupation'=>'Agente de microcrédito','filter'=>'agente de microcrédito',]);

        CompanyOccupationsModel::create(['code'=>'411055','occupation'=>'Captador de recursos','filter'=>'captador de recursos',]);

        CompanyOccupationsModel::create(['code'=>'412105','occupation'=>'Datilógrafo','filter'=>'datilógrafo',]);

        CompanyOccupationsModel::create(['code'=>'412110','occupation'=>'Digitador','filter'=>'digitador',]);

        CompanyOccupationsModel::create(['code'=>'412115','occupation'=>'Operador de mensagens de telecomunicações (correios)','filter'=>'operador de mensagens de telecomunicações (correios)',]);

        CompanyOccupationsModel::create(['code'=>'412120','occupation'=>'Supervisor de digitação e operação','filter'=>'supervisor de digitação e operação',]);

        CompanyOccupationsModel::create(['code'=>'412205','occupation'=>'Contínuo','filter'=>'contínuo',]);

        CompanyOccupationsModel::create(['code'=>'413105','occupation'=>'Analista de folha de pagamento','filter'=>'analista de folha de pagamento',]);

        CompanyOccupationsModel::create(['code'=>'413110','occupation'=>'Auxiliar de contabilidade','filter'=>'auxiliar de contabilidade',]);

        CompanyOccupationsModel::create(['code'=>'413115','occupation'=>'Auxiliar de faturamento','filter'=>'auxiliar de faturamento',]);

        CompanyOccupationsModel::create(['code'=>'413205','occupation'=>'Atendente de agência','filter'=>'atendente de agência',]);

        CompanyOccupationsModel::create(['code'=>'413210','occupation'=>'Caixa de banco','filter'=>'caixa de banco',]);

        CompanyOccupationsModel::create(['code'=>'413215','occupation'=>'Compensador de banco','filter'=>'compensador de banco',]);

        CompanyOccupationsModel::create(['code'=>'413220','occupation'=>'Conferente de serviços bancários','filter'=>'conferente de serviços bancários',]);

        CompanyOccupationsModel::create(['code'=>'413225','occupation'=>'Escriturário de banco','filter'=>'escriturário de banco',]);

        CompanyOccupationsModel::create(['code'=>'413230','occupation'=>'Operador de cobrança bancária','filter'=>'operador de cobrança bancária',]);

        CompanyOccupationsModel::create(['code'=>'414105','occupation'=>'Almoxarife','filter'=>'almoxarife',]);

        CompanyOccupationsModel::create(['code'=>'414110','occupation'=>'Armazenista','filter'=>'armazenista',]);

        CompanyOccupationsModel::create(['code'=>'414115','occupation'=>'Balanceiro','filter'=>'balanceiro',]);

        CompanyOccupationsModel::create(['code'=>'414120','occupation'=>'Conferente mercadoria (exceto carga e descarga)','filter'=>'conferente mercadoria (exceto carga e descarga)',]);

        CompanyOccupationsModel::create(['code'=>'414125','occupation'=>'Estoquista','filter'=>'estoquista',]);

        CompanyOccupationsModel::create(['code'=>'414135','occupation'=>'Expedidor de mercadorias','filter'=>'expedidor de mercadorias',]);

        CompanyOccupationsModel::create(['code'=>'414140','occupation'=>'Auxiliar de logistica','filter'=>'auxiliar de logistica',]);

        CompanyOccupationsModel::create(['code'=>'414205','occupation'=>'Apontador de mão-de-obra','filter'=>'apontador de mão-de-obra',]);

        CompanyOccupationsModel::create(['code'=>'414210','occupation'=>'Apontador de produção','filter'=>'apontador de produção',]);

        CompanyOccupationsModel::create(['code'=>'414215','occupation'=>'Conferente de carga e descarga','filter'=>'conferente de carga e descarga',]);

        CompanyOccupationsModel::create(['code'=>'415105','occupation'=>'Arquivista de documentos','filter'=>'arquivista de documentos',]);

        CompanyOccupationsModel::create(['code'=>'415115','occupation'=>'Codificador de dados','filter'=>'codificador de dados',]);

        CompanyOccupationsModel::create(['code'=>'415120','occupation'=>'Fitotecário','filter'=>'fitotecário',]);

        CompanyOccupationsModel::create(['code'=>'415125','occupation'=>'Kardexista','filter'=>'kardexista',]);

        CompanyOccupationsModel::create(['code'=>'415130','occupation'=>'Operador de máquina copiadora (exceto operador de gráfica rápida)','filter'=>'operador de máquina copiadora (exceto operador de gráfica rápida)',]);

        CompanyOccupationsModel::create(['code'=>'415205','occupation'=>'Carteiro','filter'=>'carteiro',]);

        CompanyOccupationsModel::create(['code'=>'415210','occupation'=>'Operador de triagem e transbordo','filter'=>'operador de triagem e transbordo',]);

        CompanyOccupationsModel::create(['code'=>'415215','occupation'=>'Entregador de publicações','filter'=>'entregador de publicações',]);

        CompanyOccupationsModel::create(['code'=>'415305','occupation'=>'Registrador de câncer','filter'=>'registrador de câncer',]);

        CompanyOccupationsModel::create(['code'=>'415310','occupation'=>'Analista de informação em saúde','filter'=>'analista de informação em saúde',]);

        CompanyOccupationsModel::create(['code'=>'420105','occupation'=>'Supervisor de caixas e bilheteiros (exceto caixa de banco)','filter'=>'supervisor de caixas e bilheteiros (exceto caixa de banco)',]);

        CompanyOccupationsModel::create(['code'=>'420110','occupation'=>'Supervisor de cobrança','filter'=>'supervisor de cobrança',]);

        CompanyOccupationsModel::create(['code'=>'420115','occupation'=>'Supervisor de coletadores de apostas e de jogos','filter'=>'supervisor de coletadores de apostas e de jogos',]);

        CompanyOccupationsModel::create(['code'=>'420120','occupation'=>'Supervisor de entrevistadores e recenseadores','filter'=>'supervisor de entrevistadores e recenseadores',]);

        CompanyOccupationsModel::create(['code'=>'420125','occupation'=>'Supervisor de recepcionistas','filter'=>'supervisor de recepcionistas',]);

        CompanyOccupationsModel::create(['code'=>'420130','occupation'=>'Supervisor de telefonistas','filter'=>'supervisor de telefonistas',]);

        CompanyOccupationsModel::create(['code'=>'420135','occupation'=>'Supervisor de telemarketing e atendimento','filter'=>'supervisor de telemarketing e atendimento',]);

        CompanyOccupationsModel::create(['code'=>'421105','occupation'=>'Atendente comercial (agência postal)','filter'=>'atendente comercial (agência postal)',]);

        CompanyOccupationsModel::create(['code'=>'421110','occupation'=>'Bilheteiro de transportes coletivos','filter'=>'bilheteiro de transportes coletivos',]);

        CompanyOccupationsModel::create(['code'=>'421115','occupation'=>'Bilheteiro no serviço de diversões','filter'=>'bilheteiro no serviço de diversões',]);

        CompanyOccupationsModel::create(['code'=>'421120','occupation'=>'Emissor de passagens','filter'=>'emissor de passagens',]);

        CompanyOccupationsModel::create(['code'=>'421125','occupation'=>'Operador de caixa','filter'=>'operador de caixa',]);

        CompanyOccupationsModel::create(['code'=>'421205','occupation'=>'Recebedor de apostas (loteria)','filter'=>'recebedor de apostas (loteria)',]);

        CompanyOccupationsModel::create(['code'=>'421210','occupation'=>'Recebedor de apostas (turfe)','filter'=>'recebedor de apostas (turfe)',]);

        CompanyOccupationsModel::create(['code'=>'421305','occupation'=>'Cobrador externo','filter'=>'cobrador externo',]);

        CompanyOccupationsModel::create(['code'=>'421310','occupation'=>'Cobrador interno','filter'=>'cobrador interno',]);

        CompanyOccupationsModel::create(['code'=>'421315','occupation'=>'Localizador (cobrador)','filter'=>'localizador (cobrador)',]);

        CompanyOccupationsModel::create(['code'=>'422105','occupation'=>'Recepcionista, em geral','filter'=>'recepcionista, em geral',]);

        CompanyOccupationsModel::create(['code'=>'422110','occupation'=>'Recepcionista de consultório médico ou dentário','filter'=>'recepcionista de consultório médico ou dentário',]);

        CompanyOccupationsModel::create(['code'=>'422115','occupation'=>'Recepcionista de seguro saúde','filter'=>'recepcionista de seguro saúde',]);

        CompanyOccupationsModel::create(['code'=>'422120','occupation'=>'Recepcionista de hotel','filter'=>'recepcionista de hotel',]);

        CompanyOccupationsModel::create(['code'=>'422125','occupation'=>'Recepcionista de banco','filter'=>'recepcionista de banco',]);

        CompanyOccupationsModel::create(['code'=>'422130','occupation'=>'Concierge','filter'=>'concierge',]);

        CompanyOccupationsModel::create(['code'=>'422205','occupation'=>'Telefonista','filter'=>'telefonista',]);

        CompanyOccupationsModel::create(['code'=>'422210','occupation'=>'Teleoperador','filter'=>'teleoperador',]);

        CompanyOccupationsModel::create(['code'=>'422220','occupation'=>'Operador de rádio-chamada','filter'=>'operador de rádio-chamada',]);

        CompanyOccupationsModel::create(['code'=>'422305','occupation'=>'Operador de telemarketing ativo','filter'=>'operador de telemarketing ativo',]);

        CompanyOccupationsModel::create(['code'=>'422310','occupation'=>'Operador de telemarketing ativo e receptivo','filter'=>'operador de telemarketing ativo e receptivo',]);

        CompanyOccupationsModel::create(['code'=>'422315','occupation'=>'Operador de telemarketing receptivo','filter'=>'operador de telemarketing receptivo',]);

        CompanyOccupationsModel::create(['code'=>'422320','occupation'=>'Operador de telemarketing técnico','filter'=>'operador de telemarketing técnico',]);

        CompanyOccupationsModel::create(['code'=>'422330','occupation'=>'Teleatendente de emergência','filter'=>'teleatendente de emergência',]);

        CompanyOccupationsModel::create(['code'=>'422335','occupation'=>'Monitor de teleatendimento','filter'=>'monitor de teleatendimento',]);

        CompanyOccupationsModel::create(['code'=>'423105','occupation'=>'Despachante documentalista','filter'=>'despachante documentalista',]);

        CompanyOccupationsModel::create(['code'=>'423110','occupation'=>'Despachante de trânsito','filter'=>'despachante de trânsito',]);

        CompanyOccupationsModel::create(['code'=>'423115','occupation'=>'Vistoriador veicular','filter'=>'vistoriador veicular',]);

        CompanyOccupationsModel::create(['code'=>'424105','occupation'=>'Entrevistador censitário e de pesquisas amostrais','filter'=>'entrevistador censitário e de pesquisas amostrais',]);

        CompanyOccupationsModel::create(['code'=>'424110','occupation'=>'Entrevistador de pesquisa de opinião e mídia','filter'=>'entrevistador de pesquisa de opinião e mídia',]);

        CompanyOccupationsModel::create(['code'=>'424115','occupation'=>'Entrevistador de pesquisas de mercado','filter'=>'entrevistador de pesquisas de mercado',]);

        CompanyOccupationsModel::create(['code'=>'424120','occupation'=>'Entrevistador de preços','filter'=>'entrevistador de preços',]);

        CompanyOccupationsModel::create(['code'=>'424125','occupation'=>'Escriturário em estatística','filter'=>'escriturário em estatística',]);

        CompanyOccupationsModel::create(['code'=>'424130','occupation'=>'Entrevistador social','filter'=>'entrevistador social',]);

        CompanyOccupationsModel::create(['code'=>'424205','occupation'=>'Coordenador de provas (concurso, avaliação, exame)','filter'=>'coordenador de provas (concurso, avaliação, exame)',]);

        CompanyOccupationsModel::create(['code'=>'424210','occupation'=>'Aplicador de provas (concurso, avaliação,exame)','filter'=>'aplicador de provas (concurso, avaliação,exame)',]);

        CompanyOccupationsModel::create(['code'=>'510105','occupation'=>'Supervisor de transportes','filter'=>'supervisor de transportes',]);

        CompanyOccupationsModel::create(['code'=>'510110','occupation'=>'Administrador de edifícios','filter'=>'administrador de edifícios',]);

        CompanyOccupationsModel::create(['code'=>'510115','occupation'=>'Supervisor de andar','filter'=>'supervisor de andar',]);

        CompanyOccupationsModel::create(['code'=>'510120','occupation'=>'Chefe de portaria de hotel','filter'=>'chefe de portaria de hotel',]);

        CompanyOccupationsModel::create(['code'=>'510130','occupation'=>'Chefe de bar','filter'=>'chefe de bar',]);

        CompanyOccupationsModel::create(['code'=>'510135','occupation'=>'Maître','filter'=>'maître',]);

        CompanyOccupationsModel::create(['code'=>'510205','occupation'=>'Supervisor de lavanderia','filter'=>'supervisor de lavanderia',]);

        CompanyOccupationsModel::create(['code'=>'510305','occupation'=>'Supervisor de bombeiros','filter'=>'supervisor de bombeiros',]);

        CompanyOccupationsModel::create(['code'=>'510310','occupation'=>'Supervisor de vigilantes','filter'=>'supervisor de vigilantes',]);

        CompanyOccupationsModel::create(['code'=>'511105','occupation'=>'Comissário de vôo','filter'=>'comissário de vôo',]);

        CompanyOccupationsModel::create(['code'=>'511110','occupation'=>'Comissário de trem','filter'=>'comissário de trem',]);

        CompanyOccupationsModel::create(['code'=>'511115','occupation'=>'Taifeiro (exceto militares)','filter'=>'taifeiro (exceto militares)',]);

        CompanyOccupationsModel::create(['code'=>'511205','occupation'=>'Fiscal de transportes coletivos (exceto trem)','filter'=>'fiscal de transportes coletivos (exceto trem)',]);

        CompanyOccupationsModel::create(['code'=>'511210','occupation'=>'Despachante de transportes coletivos (exceto trem)','filter'=>'despachante de transportes coletivos (exceto trem)',]);

        CompanyOccupationsModel::create(['code'=>'511215','occupation'=>'Cobrador de transportes coletivos (exceto trem)','filter'=>'cobrador de transportes coletivos (exceto trem)',]);

        CompanyOccupationsModel::create(['code'=>'511220','occupation'=>'Bilheteiro (estações de metrô, ferroviárias e assemelhadas)','filter'=>'bilheteiro (estações de metrô, ferroviárias e assemelhadas)',]);

        CompanyOccupationsModel::create(['code'=>'511405','occupation'=>'Guia de turismo','filter'=>'guia de turismo',]);

        CompanyOccupationsModel::create(['code'=>'511505','occupation'=>'Condutor de turismo de aventura','filter'=>'condutor de turismo de aventura',]);

        CompanyOccupationsModel::create(['code'=>'511510','occupation'=>'Condutor de turismo de pesca','filter'=>'condutor de turismo de pesca',]);

        CompanyOccupationsModel::create(['code'=>'511515','occupation'=>'Condutor turismo náutico','filter'=>'condutor turismo náutico',]);

        CompanyOccupationsModel::create(['code'=>'512105','occupation'=>'Empregado doméstico nos serviços gerais','filter'=>'empregado doméstico nos serviços gerais',]);

        CompanyOccupationsModel::create(['code'=>'512110','occupation'=>'Empregado doméstico arrumador','filter'=>'empregado doméstico arrumador',]);

        CompanyOccupationsModel::create(['code'=>'512115','occupation'=>'Empregado doméstico faxineiro','filter'=>'empregado doméstico faxineiro',]);

        CompanyOccupationsModel::create(['code'=>'512120','occupation'=>'Empregado doméstico diarista','filter'=>'empregado doméstico diarista',]);

        CompanyOccupationsModel::create(['code'=>'513105','occupation'=>'Mordomo de residência','filter'=>'mordomo de residência',]);

        CompanyOccupationsModel::create(['code'=>'513110','occupation'=>'Mordomo de hotelaria','filter'=>'mordomo de hotelaria',]);

        CompanyOccupationsModel::create(['code'=>'513115','occupation'=>'Governanta de hotelaria','filter'=>'governanta de hotelaria',]);

        CompanyOccupationsModel::create(['code'=>'513205','occupation'=>'Cozinheiro geral','filter'=>'cozinheiro geral',]);

        CompanyOccupationsModel::create(['code'=>'513210','occupation'=>'Cozinheiro do serviço doméstico','filter'=>'cozinheiro do serviço doméstico',]);

        CompanyOccupationsModel::create(['code'=>'513215','occupation'=>'Cozinheiro industrial','filter'=>'cozinheiro industrial',]);

        CompanyOccupationsModel::create(['code'=>'513220','occupation'=>'Cozinheiro de hospital','filter'=>'cozinheiro de hospital',]);

        CompanyOccupationsModel::create(['code'=>'513225','occupation'=>'Cozinheiro de embarcações','filter'=>'cozinheiro de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'513305','occupation'=>'Camareiro de teatro','filter'=>'camareiro de teatro',]);

        CompanyOccupationsModel::create(['code'=>'513310','occupation'=>'Camareiro de televisão','filter'=>'camareiro de televisão',]);

        CompanyOccupationsModel::create(['code'=>'513315','occupation'=>'Camareiro de hotel','filter'=>'camareiro de hotel',]);

        CompanyOccupationsModel::create(['code'=>'513320','occupation'=>'Camareiro de embarcações','filter'=>'camareiro de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'513325','occupation'=>'Guarda-roupeiro de cinema','filter'=>'guarda-roupeiro de cinema',]);

        CompanyOccupationsModel::create(['code'=>'513405','occupation'=>'Garçom','filter'=>'garçom',]);

        CompanyOccupationsModel::create(['code'=>'513410','occupation'=>'Sommelier','filter'=>'sommelier',]);

        CompanyOccupationsModel::create(['code'=>'513415','occupation'=>'Cumim','filter'=>'cumim',]);

        CompanyOccupationsModel::create(['code'=>'513420','occupation'=>'Barman','filter'=>'barman',]);

        CompanyOccupationsModel::create(['code'=>'513425','occupation'=>'Copeiro','filter'=>'copeiro',]);

        CompanyOccupationsModel::create(['code'=>'513430','occupation'=>'Copeiro de hospital','filter'=>'copeiro de hospital',]);

        CompanyOccupationsModel::create(['code'=>'513435','occupation'=>'Atendente de lanchonete','filter'=>'atendente de lanchonete',]);

        CompanyOccupationsModel::create(['code'=>'513440','occupation'=>'Barista','filter'=>'barista',]);

        CompanyOccupationsModel::create(['code'=>'513505','occupation'=>'Auxiliar nos serviços de alimentação','filter'=>'auxiliar nos serviços de alimentação',]);

        CompanyOccupationsModel::create(['code'=>'513605','occupation'=>'Churrasqueiro','filter'=>'churrasqueiro',]);

        CompanyOccupationsModel::create(['code'=>'513610','occupation'=>'Pizzaiolo','filter'=>'pizzaiolo',]);

        CompanyOccupationsModel::create(['code'=>'513615','occupation'=>'Sushiman','filter'=>'sushiman',]);

        CompanyOccupationsModel::create(['code'=>'514105','occupation'=>'Ascensorista','filter'=>'ascensorista',]);

        CompanyOccupationsModel::create(['code'=>'514110','occupation'=>'Garagista','filter'=>'garagista',]);

        CompanyOccupationsModel::create(['code'=>'514115','occupation'=>'Sacristão','filter'=>'sacristão',]);

        CompanyOccupationsModel::create(['code'=>'514120','occupation'=>'Zelador de edifício','filter'=>'zelador de edifício',]);

        CompanyOccupationsModel::create(['code'=>'514205','occupation'=>'Coletor de lixo domiciliar','filter'=>'coletor de lixo domiciliar',]);

        CompanyOccupationsModel::create(['code'=>'514215','occupation'=>'Varredor de rua','filter'=>'varredor de rua',]);

        CompanyOccupationsModel::create(['code'=>'514225','occupation'=>'Trabalhador de serviços de limpeza e conservação de áreas públicas','filter'=>'trabalhador de serviços de limpeza e conservação de áreas públicas',]);

        CompanyOccupationsModel::create(['code'=>'514230','occupation'=>'Coletor de resíduos sólidos de serviços de saúde','filter'=>'coletor de resíduos sólidos de serviços de saúde',]);

        CompanyOccupationsModel::create(['code'=>'514305','occupation'=>'Limpador de vidros','filter'=>'limpador de vidros',]);

        CompanyOccupationsModel::create(['code'=>'514310','occupation'=>'Auxiliar de manutenção predial','filter'=>'auxiliar de manutenção predial',]);

        CompanyOccupationsModel::create(['code'=>'514315','occupation'=>'Limpador de fachadas','filter'=>'limpador de fachadas',]);

        CompanyOccupationsModel::create(['code'=>'514320','occupation'=>'Faxineiro','filter'=>'faxineiro',]);

        CompanyOccupationsModel::create(['code'=>'514325','occupation'=>'Trabalhador da manutenção de edificações','filter'=>'trabalhador da manutenção de edificações',]);

        CompanyOccupationsModel::create(['code'=>'514330','occupation'=>'Limpador de piscinas','filter'=>'limpador de piscinas',]);

        CompanyOccupationsModel::create(['code'=>'515105','occupation'=>'Agente comunitário de saúde','filter'=>'agente comunitário de saúde',]);

        CompanyOccupationsModel::create(['code'=>'515110','occupation'=>'Atendente de enfermagem','filter'=>'atendente de enfermagem',]);

        CompanyOccupationsModel::create(['code'=>'515115','occupation'=>'Parteira leiga','filter'=>'parteira leiga',]);

        CompanyOccupationsModel::create(['code'=>'515120','occupation'=>'Visitador sanitário','filter'=>'visitador sanitário',]);

        CompanyOccupationsModel::create(['code'=>'515125','occupation'=>'Agente indígena de saúde','filter'=>'agente indígena de saúde',]);

        CompanyOccupationsModel::create(['code'=>'515130','occupation'=>'Agente indígena de saneamento','filter'=>'agente indígena de saneamento',]);

        CompanyOccupationsModel::create(['code'=>'515135','occupation'=>'Socorrista (exceto médicos e enfermeiros)','filter'=>'socorrista (exceto médicos e enfermeiros)',]);

        CompanyOccupationsModel::create(['code'=>'515140','occupation'=>'Agente de combate às endemias','filter'=>'agente de combate às endemias',]);

        CompanyOccupationsModel::create(['code'=>'515205','occupation'=>'Auxiliar de banco de sangue','filter'=>'auxiliar de banco de sangue',]);

        CompanyOccupationsModel::create(['code'=>'515210','occupation'=>'Auxiliar de farmácia de manipulação','filter'=>'auxiliar de farmácia de manipulação',]);

        CompanyOccupationsModel::create(['code'=>'515215','occupation'=>'Auxiliar de laboratório de análises clínicas','filter'=>'auxiliar de laboratório de análises clínicas',]);

        CompanyOccupationsModel::create(['code'=>'515220','occupation'=>'Auxiliar de laboratório de imunobiológicos','filter'=>'auxiliar de laboratório de imunobiológicos',]);

        CompanyOccupationsModel::create(['code'=>'515225','occupation'=>'Auxiliar de produção farmacêutica','filter'=>'auxiliar de produção farmacêutica',]);

        CompanyOccupationsModel::create(['code'=>'515305','occupation'=>'Educador social','filter'=>'educador social',]);

        CompanyOccupationsModel::create(['code'=>'515310','occupation'=>'Agente de ação social','filter'=>'agente de ação social',]);

        CompanyOccupationsModel::create(['code'=>'515315','occupation'=>'Monitor de dependente químico','filter'=>'monitor de dependente químico',]);

        CompanyOccupationsModel::create(['code'=>'515320','occupation'=>'Conselheiro tutelar','filter'=>'conselheiro tutelar',]);

        CompanyOccupationsModel::create(['code'=>'515325','occupation'=>'Sócioeducador','filter'=>'sócioeducador',]);

        CompanyOccupationsModel::create(['code'=>'515330','occupation'=>'Monitor de ressocialização prisional','filter'=>'monitor de ressocialização prisional',]);

        CompanyOccupationsModel::create(['code'=>'516105','occupation'=>'Barbeiro','filter'=>'barbeiro',]);

        CompanyOccupationsModel::create(['code'=>'516110','occupation'=>'Cabeleireiro','filter'=>'cabeleireiro',]);

        CompanyOccupationsModel::create(['code'=>'516120','occupation'=>'Manicure/pedicure','filter'=>'manicure/pedicure',]);

        CompanyOccupationsModel::create(['code'=>'516125','occupation'=>'Maquiador','filter'=>'maquiador',]);

        CompanyOccupationsModel::create(['code'=>'516130','occupation'=>'Maquiador de caracterização','filter'=>'maquiador de caracterização',]);

        CompanyOccupationsModel::create(['code'=>'516145','occupation'=>'Designer de unhas','filter'=>'designer de unhas',]);

        CompanyOccupationsModel::create(['code'=>'516150','occupation'=>'Designer de sobrancelhas','filter'=>'designer de sobrancelhas',]);

        CompanyOccupationsModel::create(['code'=>'516155','occupation'=>'Designer de cílios','filter'=>'designer de cílios',]);

        CompanyOccupationsModel::create(['code'=>'516205','occupation'=>'Babá','filter'=>'babá',]);

        CompanyOccupationsModel::create(['code'=>'516210','occupation'=>'Cuidador de idosos','filter'=>'cuidador de idosos',]);

        CompanyOccupationsModel::create(['code'=>'516215','occupation'=>'Mãe social','filter'=>'mãe social',]);

        CompanyOccupationsModel::create(['code'=>'516220','occupation'=>'Cuidador em saúde','filter'=>'cuidador em saúde',]);

        CompanyOccupationsModel::create(['code'=>'516305','occupation'=>'Lavadeiro, em geral','filter'=>'lavadeiro, em geral',]);

        CompanyOccupationsModel::create(['code'=>'516310','occupation'=>'Lavador de roupas a maquina','filter'=>'lavador de roupas a maquina',]);

        CompanyOccupationsModel::create(['code'=>'516315','occupation'=>'Lavador de artefatos de tapeçaria','filter'=>'lavador de artefatos de tapeçaria',]);

        CompanyOccupationsModel::create(['code'=>'516320','occupation'=>'Limpador a seco, à máquina','filter'=>'limpador a seco, à máquina',]);

        CompanyOccupationsModel::create(['code'=>'516325','occupation'=>'Passador de roupas em geral','filter'=>'passador de roupas em geral',]);

        CompanyOccupationsModel::create(['code'=>'516330','occupation'=>'Tingidor de roupas','filter'=>'tingidor de roupas',]);

        CompanyOccupationsModel::create(['code'=>'516335','occupation'=>'Conferente-expedidor de roupas (lavanderias)','filter'=>'conferente-expedidor de roupas (lavanderias)',]);

        CompanyOccupationsModel::create(['code'=>'516340','occupation'=>'Atendente de lavanderia','filter'=>'atendente de lavanderia',]);

        CompanyOccupationsModel::create(['code'=>'516345','occupation'=>'Auxiliar de lavanderia','filter'=>'auxiliar de lavanderia',]);

        CompanyOccupationsModel::create(['code'=>'516405','occupation'=>'Lavador de roupas','filter'=>'lavador de roupas',]);

        CompanyOccupationsModel::create(['code'=>'516410','occupation'=>'Limpador de roupas a seco, à mão','filter'=>'limpador de roupas a seco, à mão',]);

        CompanyOccupationsModel::create(['code'=>'516415','occupation'=>'Passador de roupas, à mão','filter'=>'passador de roupas, à mão',]);

        CompanyOccupationsModel::create(['code'=>'516505','occupation'=>'Agente funerário','filter'=>'agente funerário',]);

        CompanyOccupationsModel::create(['code'=>'516605','occupation'=>'Operador de forno (serviços funerários)','filter'=>'operador de forno (serviços funerários)',]);

        CompanyOccupationsModel::create(['code'=>'516610','occupation'=>'Sepultador','filter'=>'sepultador',]);

        CompanyOccupationsModel::create(['code'=>'516705','occupation'=>'Astrólogo','filter'=>'astrólogo',]);

        CompanyOccupationsModel::create(['code'=>'516710','occupation'=>'Numerólogo','filter'=>'numerólogo',]);

        CompanyOccupationsModel::create(['code'=>'516805','occupation'=>'Esotérico','filter'=>'esotérico',]);

        CompanyOccupationsModel::create(['code'=>'516810','occupation'=>'Paranormal','filter'=>'paranormal',]);

        CompanyOccupationsModel::create(['code'=>'516905','occupation'=>'Tatuador','filter'=>'tatuador',]);

        CompanyOccupationsModel::create(['code'=>'516910','occupation'=>'Micropigmentador','filter'=>'micropigmentador',]);

        CompanyOccupationsModel::create(['code'=>'516915','occupation'=>'Body piercer','filter'=>'body piercer',]);

        CompanyOccupationsModel::create(['code'=>'517105','occupation'=>'Bombeiro de aeródromo','filter'=>'bombeiro de aeródromo',]);

        CompanyOccupationsModel::create(['code'=>'517110','occupation'=>'Bombeiro civil','filter'=>'bombeiro civil',]);

        CompanyOccupationsModel::create(['code'=>'517115','occupation'=>'Salva-vidas','filter'=>'salva-vidas',]);

        CompanyOccupationsModel::create(['code'=>'517120','occupation'=>'Brigadista florestal','filter'=>'brigadista florestal',]);

        CompanyOccupationsModel::create(['code'=>'517125','occupation'=>'Chefe de brigada','filter'=>'chefe de brigada',]);

        CompanyOccupationsModel::create(['code'=>'517130','occupation'=>'Agente de proteção e defesa civil','filter'=>'agente de proteção e defesa civil',]);

        CompanyOccupationsModel::create(['code'=>'517205','occupation'=>'Agente de polícia federal','filter'=>'agente de polícia federal',]);

        CompanyOccupationsModel::create(['code'=>'517210','occupation'=>'Policial rodoviário federal','filter'=>'policial rodoviário federal',]);

        CompanyOccupationsModel::create(['code'=>'517215','occupation'=>'Guarda-civil municipal','filter'=>'guarda-civil municipal',]);

        CompanyOccupationsModel::create(['code'=>'517220','occupation'=>'Agente de trânsito','filter'=>'agente de trânsito',]);

        CompanyOccupationsModel::create(['code'=>'517225','occupation'=>'Policial legislativo','filter'=>'policial legislativo',]);

        CompanyOccupationsModel::create(['code'=>'517230','occupation'=>'Policial penal','filter'=>'policial penal',]);

        CompanyOccupationsModel::create(['code'=>'517235','occupation'=>'Guarda portuário','filter'=>'guarda portuário',]);

        CompanyOccupationsModel::create(['code'=>'517305','occupation'=>'Vigilante de proteção de aeroporto','filter'=>'vigilante de proteção de aeroporto',]);

        CompanyOccupationsModel::create(['code'=>'517310','occupation'=>'Agente de segurança','filter'=>'agente de segurança',]);

        CompanyOccupationsModel::create(['code'=>'517320','occupation'=>'Vigia florestal','filter'=>'vigia florestal',]);

        CompanyOccupationsModel::create(['code'=>'517325','occupation'=>'Vigia portuário','filter'=>'vigia portuário',]);

        CompanyOccupationsModel::create(['code'=>'517330','occupation'=>'Vigilante','filter'=>'vigilante',]);

        CompanyOccupationsModel::create(['code'=>'517405','occupation'=>'Porteiro (hotel)','filter'=>'porteiro (hotel)',]);

        CompanyOccupationsModel::create(['code'=>'517410','occupation'=>'Porteiro de edifícios','filter'=>'porteiro de edifícios',]);

        CompanyOccupationsModel::create(['code'=>'517415','occupation'=>'Agente de portaria','filter'=>'agente de portaria',]);

        CompanyOccupationsModel::create(['code'=>'517420','occupation'=>'Vigia','filter'=>'vigia',]);

        CompanyOccupationsModel::create(['code'=>'517425','occupation'=>'Fiscal de loja','filter'=>'fiscal de loja',]);

        CompanyOccupationsModel::create(['code'=>'519105','occupation'=>'Ciclista mensageiro','filter'=>'ciclista mensageiro',]);

        CompanyOccupationsModel::create(['code'=>'519110','occupation'=>'Motofretista','filter'=>'motofretista',]);

        CompanyOccupationsModel::create(['code'=>'519115','occupation'=>'Mototaxista','filter'=>'mototaxista',]);

        CompanyOccupationsModel::create(['code'=>'519205','occupation'=>'Catador de material reciclável','filter'=>'catador de material reciclável',]);

        CompanyOccupationsModel::create(['code'=>'519210','occupation'=>'Selecionador de material reciclável','filter'=>'selecionador de material reciclável',]);

        CompanyOccupationsModel::create(['code'=>'519215','occupation'=>'Operador de prensa de material reciclável','filter'=>'operador de prensa de material reciclável',]);

        CompanyOccupationsModel::create(['code'=>'519305','occupation'=>'Auxiliar de veterinário','filter'=>'auxiliar de veterinário',]);

        CompanyOccupationsModel::create(['code'=>'519310','occupation'=>'Esteticista de animais domésticos','filter'=>'esteticista de animais domésticos',]);

        CompanyOccupationsModel::create(['code'=>'519315','occupation'=>'Banhista de animais domésticos','filter'=>'banhista de animais domésticos',]);

        CompanyOccupationsModel::create(['code'=>'519320','occupation'=>'Tosador de animais domésticos','filter'=>'tosador de animais domésticos',]);

        CompanyOccupationsModel::create(['code'=>'519805','occupation'=>'Profissional do sexo','filter'=>'profissional do sexo',]);

        CompanyOccupationsModel::create(['code'=>'519905','occupation'=>'Cartazeiro','filter'=>'cartazeiro',]);

        CompanyOccupationsModel::create(['code'=>'519910','occupation'=>'Controlador de pragas','filter'=>'controlador de pragas',]);

        CompanyOccupationsModel::create(['code'=>'519915','occupation'=>'Engraxate','filter'=>'engraxate',]);

        CompanyOccupationsModel::create(['code'=>'519920','occupation'=>'Gandula','filter'=>'gandula',]);

        CompanyOccupationsModel::create(['code'=>'519925','occupation'=>'Guardador de veículos','filter'=>'guardador de veículos',]);

        CompanyOccupationsModel::create(['code'=>'519930','occupation'=>'Lavador de garrafas, vidros e outros utensílios','filter'=>'lavador de garrafas, vidros e outros utensílios',]);

        CompanyOccupationsModel::create(['code'=>'519935','occupation'=>'Lavador de veículos','filter'=>'lavador de veículos',]);

        CompanyOccupationsModel::create(['code'=>'519940','occupation'=>'Leiturista','filter'=>'leiturista',]);

        CompanyOccupationsModel::create(['code'=>'519945','occupation'=>'Recepcionista de casas de espetáculos','filter'=>'recepcionista de casas de espetáculos',]);

        CompanyOccupationsModel::create(['code'=>'520105','occupation'=>'Supervisor de vendas de serviços','filter'=>'supervisor de vendas de serviços',]);

        CompanyOccupationsModel::create(['code'=>'520110','occupation'=>'Supervisor de vendas comercial','filter'=>'supervisor de vendas comercial',]);

        CompanyOccupationsModel::create(['code'=>'521105','occupation'=>'Vendedor em comércio atacadista','filter'=>'vendedor em comércio atacadista',]);

        CompanyOccupationsModel::create(['code'=>'521110','occupation'=>'Vendedor de comércio varejista','filter'=>'vendedor de comércio varejista',]);

        CompanyOccupationsModel::create(['code'=>'521115','occupation'=>'Promotor de vendas','filter'=>'promotor de vendas',]);

        CompanyOccupationsModel::create(['code'=>'521120','occupation'=>'Demonstrador de mercadorias','filter'=>'demonstrador de mercadorias',]);

        CompanyOccupationsModel::create(['code'=>'521125','occupation'=>'Repositor de mercadorias','filter'=>'repositor de mercadorias',]);

        CompanyOccupationsModel::create(['code'=>'521130','occupation'=>'Atendente de farmácia - balconista','filter'=>'atendente de farmácia - balconista',]);

        CompanyOccupationsModel::create(['code'=>'521135','occupation'=>'Frentista','filter'=>'frentista',]);

        CompanyOccupationsModel::create(['code'=>'521140','occupation'=>'Atendente de lojas e mercados','filter'=>'atendente de lojas e mercados',]);

        CompanyOccupationsModel::create(['code'=>'523105','occupation'=>'Instalador de cortinas e persianas, portas sanfonadas e boxe','filter'=>'instalador de cortinas e persianas, portas sanfonadas e boxe',]);

        CompanyOccupationsModel::create(['code'=>'523110','occupation'=>'Instalador de som e acessórios de veículos','filter'=>'instalador de som e acessórios de veículos',]);

        CompanyOccupationsModel::create(['code'=>'523115','occupation'=>'Chaveiro','filter'=>'chaveiro',]);

        CompanyOccupationsModel::create(['code'=>'523120','occupation'=>'Aplicador de vinil autoadesivo','filter'=>'aplicador de vinil autoadesivo',]);

        CompanyOccupationsModel::create(['code'=>'523125','occupation'=>'Estampador de placa de identificação veicular (epiv)','filter'=>'estampador de placa de identificação veicular (epiv)',]);

        CompanyOccupationsModel::create(['code'=>'524105','occupation'=>'Vendedor em domicílio','filter'=>'vendedor em domicílio',]);

        CompanyOccupationsModel::create(['code'=>'524205','occupation'=>'Feirante','filter'=>'feirante',]);

        CompanyOccupationsModel::create(['code'=>'524210','occupation'=>'Jornaleiro (em banca de jornal)','filter'=>'jornaleiro (em banca de jornal)',]);

        CompanyOccupationsModel::create(['code'=>'524215','occupation'=>'Vendedor permissionário','filter'=>'vendedor permissionário',]);

        CompanyOccupationsModel::create(['code'=>'524305','occupation'=>'Vendedor ambulante','filter'=>'vendedor ambulante',]);

        CompanyOccupationsModel::create(['code'=>'524310','occupation'=>'Pipoqueiro ambulante','filter'=>'pipoqueiro ambulante',]);

        CompanyOccupationsModel::create(['code'=>'524315','occupation'=>'Baiana de acarajé','filter'=>'baiana de acarajé',]);

        CompanyOccupationsModel::create(['code'=>'611005','occupation'=>'Produtor agropecuário, em geral','filter'=>'produtor agropecuário, em geral',]);

        CompanyOccupationsModel::create(['code'=>'612005','occupation'=>'Produtor agrícola polivalente','filter'=>'produtor agrícola polivalente',]);

        CompanyOccupationsModel::create(['code'=>'612105','occupation'=>'Produtor de arroz','filter'=>'produtor de arroz',]);

        CompanyOccupationsModel::create(['code'=>'612110','occupation'=>'Produtor de cana-de-açúcar','filter'=>'produtor de cana-de-açúcar',]);

        CompanyOccupationsModel::create(['code'=>'612115','occupation'=>'Produtor de cereais de inverno','filter'=>'produtor de cereais de inverno',]);

        CompanyOccupationsModel::create(['code'=>'612120','occupation'=>'Produtor de gramíneas forrageiras','filter'=>'produtor de gramíneas forrageiras',]);

        CompanyOccupationsModel::create(['code'=>'612125','occupation'=>'Produtor de milho e sorgo','filter'=>'produtor de milho e sorgo',]);

        CompanyOccupationsModel::create(['code'=>'612205','occupation'=>'Produtor de algodão','filter'=>'produtor de algodão',]);

        CompanyOccupationsModel::create(['code'=>'612210','occupation'=>'Produtor de curauá','filter'=>'produtor de curauá',]);

        CompanyOccupationsModel::create(['code'=>'612215','occupation'=>'Produtor de juta','filter'=>'produtor de juta',]);

        CompanyOccupationsModel::create(['code'=>'612220','occupation'=>'Produtor de rami','filter'=>'produtor de rami',]);

        CompanyOccupationsModel::create(['code'=>'612225','occupation'=>'Produtor de sisal','filter'=>'produtor de sisal',]);

        CompanyOccupationsModel::create(['code'=>'612305','occupation'=>'Produtor na olericultura de legumes','filter'=>'produtor na olericultura de legumes',]);

        CompanyOccupationsModel::create(['code'=>'612310','occupation'=>'Produtor na olericultura de raízes, bulbos e tubérculos','filter'=>'produtor na olericultura de raízes, bulbos e tubérculos',]);

        CompanyOccupationsModel::create(['code'=>'612315','occupation'=>'Produtor na olericultura de talos, folhas e flores','filter'=>'produtor na olericultura de talos, folhas e flores',]);

        CompanyOccupationsModel::create(['code'=>'612320','occupation'=>'Produtor na olericultura de frutos e sementes','filter'=>'produtor na olericultura de frutos e sementes',]);

        CompanyOccupationsModel::create(['code'=>'612405','occupation'=>'Produtor de flores de corte','filter'=>'produtor de flores de corte',]);

        CompanyOccupationsModel::create(['code'=>'612410','occupation'=>'Produtor de flores em vaso','filter'=>'produtor de flores em vaso',]);

        CompanyOccupationsModel::create(['code'=>'612415','occupation'=>'Produtor de forrações','filter'=>'produtor de forrações',]);

        CompanyOccupationsModel::create(['code'=>'612420','occupation'=>'Produtor de plantas ornamentais','filter'=>'produtor de plantas ornamentais',]);

        CompanyOccupationsModel::create(['code'=>'612505','occupation'=>'Produtor de árvores frutíferas','filter'=>'produtor de árvores frutíferas',]);

        CompanyOccupationsModel::create(['code'=>'612510','occupation'=>'Produtor de espécies frutíferas rasteiras','filter'=>'produtor de espécies frutíferas rasteiras',]);

        CompanyOccupationsModel::create(['code'=>'612515','occupation'=>'Produtor de espécies frutíferas trepadeiras','filter'=>'produtor de espécies frutíferas trepadeiras',]);

        CompanyOccupationsModel::create(['code'=>'612605','occupation'=>'Cafeicultor','filter'=>'cafeicultor',]);

        CompanyOccupationsModel::create(['code'=>'612610','occupation'=>'Produtor de cacau','filter'=>'produtor de cacau',]);

        CompanyOccupationsModel::create(['code'=>'612615','occupation'=>'Produtor de erva-mate','filter'=>'produtor de erva-mate',]);

        CompanyOccupationsModel::create(['code'=>'612620','occupation'=>'Produtor de fumo','filter'=>'produtor de fumo',]);

        CompanyOccupationsModel::create(['code'=>'612625','occupation'=>'Produtor de guaraná','filter'=>'produtor de guaraná',]);

        CompanyOccupationsModel::create(['code'=>'612705','occupation'=>'Produtor da cultura de amendoim','filter'=>'produtor da cultura de amendoim',]);

        CompanyOccupationsModel::create(['code'=>'612710','occupation'=>'Produtor da cultura de canola','filter'=>'produtor da cultura de canola',]);

        CompanyOccupationsModel::create(['code'=>'612715','occupation'=>'Produtor da cultura de coco-da-baia','filter'=>'produtor da cultura de coco-da-baia',]);

        CompanyOccupationsModel::create(['code'=>'612720','occupation'=>'Produtor da cultura de dendê','filter'=>'produtor da cultura de dendê',]);

        CompanyOccupationsModel::create(['code'=>'612725','occupation'=>'Produtor da cultura de girassol','filter'=>'produtor da cultura de girassol',]);

        CompanyOccupationsModel::create(['code'=>'612730','occupation'=>'Produtor da cultura de linho','filter'=>'produtor da cultura de linho',]);

        CompanyOccupationsModel::create(['code'=>'612735','occupation'=>'Produtor da cultura de mamona','filter'=>'produtor da cultura de mamona',]);

        CompanyOccupationsModel::create(['code'=>'612740','occupation'=>'Produtor da cultura de soja','filter'=>'produtor da cultura de soja',]);

        CompanyOccupationsModel::create(['code'=>'612805','occupation'=>'Produtor de especiarias','filter'=>'produtor de especiarias',]);

        CompanyOccupationsModel::create(['code'=>'612810','occupation'=>'Produtor de plantas aromáticas e medicinais','filter'=>'produtor de plantas aromáticas e medicinais',]);

        CompanyOccupationsModel::create(['code'=>'613005','occupation'=>'Criador em pecuária polivalente','filter'=>'criador em pecuária polivalente',]);

        CompanyOccupationsModel::create(['code'=>'613010','occupation'=>'Criador de animais domésticos','filter'=>'criador de animais domésticos',]);

        CompanyOccupationsModel::create(['code'=>'613105','occupation'=>'Criador de asininos e muares','filter'=>'criador de asininos e muares',]);

        CompanyOccupationsModel::create(['code'=>'613110','occupation'=>'Criador de bovinos (corte)','filter'=>'criador de bovinos (corte)',]);

        CompanyOccupationsModel::create(['code'=>'613115','occupation'=>'Criador de bovinos (leite)','filter'=>'criador de bovinos (leite)',]);

        CompanyOccupationsModel::create(['code'=>'613120','occupation'=>'Criador de bubalinos (corte)','filter'=>'criador de bubalinos (corte)',]);

        CompanyOccupationsModel::create(['code'=>'613125','occupation'=>'Criador de bubalinos (leite)','filter'=>'criador de bubalinos (leite)',]);

        CompanyOccupationsModel::create(['code'=>'613130','occupation'=>'Criador de eqüínos','filter'=>'criador de eqüínos',]);

        CompanyOccupationsModel::create(['code'=>'613205','occupation'=>'Criador de caprinos','filter'=>'criador de caprinos',]);

        CompanyOccupationsModel::create(['code'=>'613210','occupation'=>'Criador de ovinos','filter'=>'criador de ovinos',]);

        CompanyOccupationsModel::create(['code'=>'613215','occupation'=>'Criador de suínos','filter'=>'criador de suínos',]);

        CompanyOccupationsModel::create(['code'=>'613305','occupation'=>'Avicultor','filter'=>'avicultor',]);

        CompanyOccupationsModel::create(['code'=>'613310','occupation'=>'Cunicultor','filter'=>'cunicultor',]);

        CompanyOccupationsModel::create(['code'=>'613405','occupation'=>'Apicultor','filter'=>'apicultor',]);

        CompanyOccupationsModel::create(['code'=>'613410','occupation'=>'Criador de animais produtores de veneno','filter'=>'criador de animais produtores de veneno',]);

        CompanyOccupationsModel::create(['code'=>'613415','occupation'=>'Minhocultor','filter'=>'minhocultor',]);

        CompanyOccupationsModel::create(['code'=>'613420','occupation'=>'Sericultor','filter'=>'sericultor',]);

        CompanyOccupationsModel::create(['code'=>'620105','occupation'=>'Supervisor de exploração agrícola','filter'=>'supervisor de exploração agrícola',]);

        CompanyOccupationsModel::create(['code'=>'620110','occupation'=>'Supervisor de exploração agropecuária','filter'=>'supervisor de exploração agropecuária',]);

        CompanyOccupationsModel::create(['code'=>'620115','occupation'=>'Supervisor de exploração pecuária','filter'=>'supervisor de exploração pecuária',]);

        CompanyOccupationsModel::create(['code'=>'621005','occupation'=>'Trabalhador agropecuário em geral','filter'=>'trabalhador agropecuário em geral',]);

        CompanyOccupationsModel::create(['code'=>'622005','occupation'=>'Caseiro (agricultura)','filter'=>'caseiro (agricultura)',]);

        CompanyOccupationsModel::create(['code'=>'622010','occupation'=>'Jardineiro','filter'=>'jardineiro',]);

        CompanyOccupationsModel::create(['code'=>'622015','occupation'=>'Trabalhador na produção de mudas e sementes','filter'=>'trabalhador na produção de mudas e sementes',]);

        CompanyOccupationsModel::create(['code'=>'622020','occupation'=>'Trabalhador volante da agricultura','filter'=>'trabalhador volante da agricultura',]);

        CompanyOccupationsModel::create(['code'=>'622105','occupation'=>'Trabalhador da cultura de arroz','filter'=>'trabalhador da cultura de arroz',]);

        CompanyOccupationsModel::create(['code'=>'622110','occupation'=>'Trabalhador da cultura de cana-de-açúcar','filter'=>'trabalhador da cultura de cana-de-açúcar',]);

        CompanyOccupationsModel::create(['code'=>'622115','occupation'=>'Trabalhador da cultura de milho e sorgo','filter'=>'trabalhador da cultura de milho e sorgo',]);

        CompanyOccupationsModel::create(['code'=>'622120','occupation'=>'Trabalhador da cultura de trigo, aveia, cevada e triticale','filter'=>'trabalhador da cultura de trigo, aveia, cevada e triticale',]);

        CompanyOccupationsModel::create(['code'=>'622205','occupation'=>'Trabalhador da cultura de algodão','filter'=>'trabalhador da cultura de algodão',]);

        CompanyOccupationsModel::create(['code'=>'622210','occupation'=>'Trabalhador da cultura de sisal','filter'=>'trabalhador da cultura de sisal',]);

        CompanyOccupationsModel::create(['code'=>'622215','occupation'=>'Trabalhador da cultura do rami','filter'=>'trabalhador da cultura do rami',]);

        CompanyOccupationsModel::create(['code'=>'622305','occupation'=>'Trabalhador na olericultura (frutos e sementes)','filter'=>'trabalhador na olericultura (frutos e sementes)',]);

        CompanyOccupationsModel::create(['code'=>'622310','occupation'=>'Trabalhador na olericultura (legumes)','filter'=>'trabalhador na olericultura (legumes)',]);

        CompanyOccupationsModel::create(['code'=>'622315','occupation'=>'Trabalhador na olericultura (raízes, bulbos e tubérculos)','filter'=>'trabalhador na olericultura (raízes, bulbos e tubérculos)',]);

        CompanyOccupationsModel::create(['code'=>'622320','occupation'=>'Trabalhador na olericultura (talos, folhas e flores)','filter'=>'trabalhador na olericultura (talos, folhas e flores)',]);

        CompanyOccupationsModel::create(['code'=>'622405','occupation'=>'Trabalhador no cultivo de flores e folhagens de corte','filter'=>'trabalhador no cultivo de flores e folhagens de corte',]);

        CompanyOccupationsModel::create(['code'=>'622410','occupation'=>'Trabalhador no cultivo de flores em vaso','filter'=>'trabalhador no cultivo de flores em vaso',]);

        CompanyOccupationsModel::create(['code'=>'622415','occupation'=>'Trabalhador no cultivo de forrações','filter'=>'trabalhador no cultivo de forrações',]);

        CompanyOccupationsModel::create(['code'=>'622420','occupation'=>'Trabalhador no cultivo de mudas','filter'=>'trabalhador no cultivo de mudas',]);

        CompanyOccupationsModel::create(['code'=>'622425','occupation'=>'Trabalhador no cultivo de plantas ornamentais','filter'=>'trabalhador no cultivo de plantas ornamentais',]);

        CompanyOccupationsModel::create(['code'=>'622505','occupation'=>'Trabalhador no cultivo de árvores frutíferas','filter'=>'trabalhador no cultivo de árvores frutíferas',]);

        CompanyOccupationsModel::create(['code'=>'622510','occupation'=>'Trabalhador no cultivo de espécies frutíferas rasteiras','filter'=>'trabalhador no cultivo de espécies frutíferas rasteiras',]);

        CompanyOccupationsModel::create(['code'=>'622515','occupation'=>'Trabalhador no cultivo de trepadeiras frutíferas','filter'=>'trabalhador no cultivo de trepadeiras frutíferas',]);

        CompanyOccupationsModel::create(['code'=>'622605','occupation'=>'Trabalhador da cultura de cacau','filter'=>'trabalhador da cultura de cacau',]);

        CompanyOccupationsModel::create(['code'=>'622610','occupation'=>'Trabalhador da cultura de café','filter'=>'trabalhador da cultura de café',]);

        CompanyOccupationsModel::create(['code'=>'622615','occupation'=>'Trabalhador da cultura de erva-mate','filter'=>'trabalhador da cultura de erva-mate',]);

        CompanyOccupationsModel::create(['code'=>'622620','occupation'=>'Trabalhador da cultura de fumo','filter'=>'trabalhador da cultura de fumo',]);

        CompanyOccupationsModel::create(['code'=>'622625','occupation'=>'Trabalhador da cultura de guaraná','filter'=>'trabalhador da cultura de guaraná',]);

        CompanyOccupationsModel::create(['code'=>'622705','occupation'=>'Trabalhador na cultura de amendoim','filter'=>'trabalhador na cultura de amendoim',]);

        CompanyOccupationsModel::create(['code'=>'622710','occupation'=>'Trabalhador na cultura de canola','filter'=>'trabalhador na cultura de canola',]);

        CompanyOccupationsModel::create(['code'=>'622715','occupation'=>'Trabalhador na cultura de coco-da-baía','filter'=>'trabalhador na cultura de coco-da-baía',]);

        CompanyOccupationsModel::create(['code'=>'622720','occupation'=>'Trabalhador na cultura de dendê','filter'=>'trabalhador na cultura de dendê',]);

        CompanyOccupationsModel::create(['code'=>'622725','occupation'=>'Trabalhador na cultura de mamona','filter'=>'trabalhador na cultura de mamona',]);

        CompanyOccupationsModel::create(['code'=>'622730','occupation'=>'Trabalhador na cultura de soja','filter'=>'trabalhador na cultura de soja',]);

        CompanyOccupationsModel::create(['code'=>'622735','occupation'=>'Trabalhador na cultura do girassol','filter'=>'trabalhador na cultura do girassol',]);

        CompanyOccupationsModel::create(['code'=>'622740','occupation'=>'Trabalhador na cultura do linho','filter'=>'trabalhador na cultura do linho',]);

        CompanyOccupationsModel::create(['code'=>'622805','occupation'=>'Trabalhador da cultura de especiarias','filter'=>'trabalhador da cultura de especiarias',]);

        CompanyOccupationsModel::create(['code'=>'622810','occupation'=>'Trabalhador da cultura de plantas aromáticas e medicinais','filter'=>'trabalhador da cultura de plantas aromáticas e medicinais',]);

        CompanyOccupationsModel::create(['code'=>'623005','occupation'=>'Adestrador de animais','filter'=>'adestrador de animais',]);

        CompanyOccupationsModel::create(['code'=>'623010','occupation'=>'Inseminador','filter'=>'inseminador',]);

        CompanyOccupationsModel::create(['code'=>'623015','occupation'=>'Trabalhador de pecuária polivalente','filter'=>'trabalhador de pecuária polivalente',]);

        CompanyOccupationsModel::create(['code'=>'623020','occupation'=>'Tratador de animais','filter'=>'tratador de animais',]);

        CompanyOccupationsModel::create(['code'=>'623025','occupation'=>'Casqueador de animais','filter'=>'casqueador de animais',]);

        CompanyOccupationsModel::create(['code'=>'623030','occupation'=>'Ferrador de animais','filter'=>'ferrador de animais',]);

        CompanyOccupationsModel::create(['code'=>'623105','occupation'=>'Trabalhador da pecuária (asininos e muares)','filter'=>'trabalhador da pecuária (asininos e muares)',]);

        CompanyOccupationsModel::create(['code'=>'623110','occupation'=>'Trabalhador da pecuária (bovinos corte)','filter'=>'trabalhador da pecuária (bovinos corte)',]);

        CompanyOccupationsModel::create(['code'=>'623115','occupation'=>'Trabalhador da pecuária (bovinos leite)','filter'=>'trabalhador da pecuária (bovinos leite)',]);

        CompanyOccupationsModel::create(['code'=>'623120','occupation'=>'Trabalhador da pecuária (bubalinos)','filter'=>'trabalhador da pecuária (bubalinos)',]);

        CompanyOccupationsModel::create(['code'=>'623125','occupation'=>'Trabalhador da pecuária (eqüinos)','filter'=>'trabalhador da pecuária (eqüinos)',]);

        CompanyOccupationsModel::create(['code'=>'623205','occupation'=>'Trabalhador da caprinocultura','filter'=>'trabalhador da caprinocultura',]);

        CompanyOccupationsModel::create(['code'=>'623210','occupation'=>'Trabalhador da ovinocultura','filter'=>'trabalhador da ovinocultura',]);

        CompanyOccupationsModel::create(['code'=>'623215','occupation'=>'Trabalhador da suinocultura','filter'=>'trabalhador da suinocultura',]);

        CompanyOccupationsModel::create(['code'=>'623305','occupation'=>'Trabalhador da avicultura de corte','filter'=>'trabalhador da avicultura de corte',]);

        CompanyOccupationsModel::create(['code'=>'623310','occupation'=>'Trabalhador da avicultura de postura','filter'=>'trabalhador da avicultura de postura',]);

        CompanyOccupationsModel::create(['code'=>'623315','occupation'=>'Operador de incubadora','filter'=>'operador de incubadora',]);

        CompanyOccupationsModel::create(['code'=>'623320','occupation'=>'Trabalhador da cunicultura','filter'=>'trabalhador da cunicultura',]);

        CompanyOccupationsModel::create(['code'=>'623325','occupation'=>'Sexador','filter'=>'sexador',]);

        CompanyOccupationsModel::create(['code'=>'623405','occupation'=>'Trabalhador em criatórios de animais produtores de veneno','filter'=>'trabalhador em criatórios de animais produtores de veneno',]);

        CompanyOccupationsModel::create(['code'=>'623410','occupation'=>'Trabalhador na apicultura','filter'=>'trabalhador na apicultura',]);

        CompanyOccupationsModel::create(['code'=>'623415','occupation'=>'Trabalhador na minhocultura','filter'=>'trabalhador na minhocultura',]);

        CompanyOccupationsModel::create(['code'=>'623420','occupation'=>'Trabalhador na sericicultura','filter'=>'trabalhador na sericicultura',]);

        CompanyOccupationsModel::create(['code'=>'630105','occupation'=>'Supervisor da aqüicultura','filter'=>'supervisor da aqüicultura',]);

        CompanyOccupationsModel::create(['code'=>'630110','occupation'=>'Supervisor da área florestal','filter'=>'supervisor da área florestal',]);

        CompanyOccupationsModel::create(['code'=>'631005','occupation'=>'Catador de caranguejos e siris','filter'=>'catador de caranguejos e siris',]);

        CompanyOccupationsModel::create(['code'=>'631010','occupation'=>'Catador de mariscos','filter'=>'catador de mariscos',]);

        CompanyOccupationsModel::create(['code'=>'631015','occupation'=>'Pescador artesanal de lagostas','filter'=>'pescador artesanal de lagostas',]);

        CompanyOccupationsModel::create(['code'=>'631020','occupation'=>'Pescador artesanal de peixes e camarões','filter'=>'pescador artesanal de peixes e camarões',]);

        CompanyOccupationsModel::create(['code'=>'631105','occupation'=>'Pescador artesanal de água doce','filter'=>'pescador artesanal de água doce',]);

        CompanyOccupationsModel::create(['code'=>'631205','occupation'=>'Pescador industrial','filter'=>'pescador industrial',]);

        CompanyOccupationsModel::create(['code'=>'631210','occupation'=>'Pescador profissional','filter'=>'pescador profissional',]);

        CompanyOccupationsModel::create(['code'=>'631305','occupation'=>'Criador de camarões','filter'=>'criador de camarões',]);

        CompanyOccupationsModel::create(['code'=>'631310','occupation'=>'Criador de jacarés','filter'=>'criador de jacarés',]);

        CompanyOccupationsModel::create(['code'=>'631315','occupation'=>'Criador de mexilhões','filter'=>'criador de mexilhões',]);

        CompanyOccupationsModel::create(['code'=>'631320','occupation'=>'Criador de ostras','filter'=>'criador de ostras',]);

        CompanyOccupationsModel::create(['code'=>'631325','occupation'=>'Criador de peixes','filter'=>'criador de peixes',]);

        CompanyOccupationsModel::create(['code'=>'631330','occupation'=>'Criador de quelônios','filter'=>'criador de quelônios',]);

        CompanyOccupationsModel::create(['code'=>'631335','occupation'=>'Criador de rãs','filter'=>'criador de rãs',]);

        CompanyOccupationsModel::create(['code'=>'631405','occupation'=>'Gelador industrial','filter'=>'gelador industrial',]);

        CompanyOccupationsModel::create(['code'=>'631410','occupation'=>'Gelador profissional','filter'=>'gelador profissional',]);

        CompanyOccupationsModel::create(['code'=>'631415','occupation'=>'Proeiro','filter'=>'proeiro',]);

        CompanyOccupationsModel::create(['code'=>'631420','occupation'=>'Redeiro (pesca)','filter'=>'redeiro (pesca)',]);

        CompanyOccupationsModel::create(['code'=>'632005','occupation'=>'Guia florestal','filter'=>'guia florestal',]);

        CompanyOccupationsModel::create(['code'=>'632010','occupation'=>'Raizeiro','filter'=>'raizeiro',]);

        CompanyOccupationsModel::create(['code'=>'632015','occupation'=>'Viveirista florestal','filter'=>'viveirista florestal',]);

        CompanyOccupationsModel::create(['code'=>'632105','occupation'=>'Classificador de toras','filter'=>'classificador de toras',]);

        CompanyOccupationsModel::create(['code'=>'632110','occupation'=>'Cubador de madeira','filter'=>'cubador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'632115','occupation'=>'Identificador florestal','filter'=>'identificador florestal',]);

        CompanyOccupationsModel::create(['code'=>'632120','occupation'=>'Operador de motosserra','filter'=>'operador de motosserra',]);

        CompanyOccupationsModel::create(['code'=>'632125','occupation'=>'Trabalhador de extração florestal, em geral','filter'=>'trabalhador de extração florestal, em geral',]);

        CompanyOccupationsModel::create(['code'=>'632205','occupation'=>'Seringueiro','filter'=>'seringueiro',]);

        CompanyOccupationsModel::create(['code'=>'632210','occupation'=>'Trabalhador da exploração de espécies produtoras de gomas não elásticas','filter'=>'trabalhador da exploração de espécies produtoras de gomas não elásticas',]);

        CompanyOccupationsModel::create(['code'=>'632215','occupation'=>'Trabalhador da exploração de resinas','filter'=>'trabalhador da exploração de resinas',]);

        CompanyOccupationsModel::create(['code'=>'632305','occupation'=>'Trabalhador da exploração de andiroba','filter'=>'trabalhador da exploração de andiroba',]);

        CompanyOccupationsModel::create(['code'=>'632310','occupation'=>'Trabalhador da exploração de babaçu','filter'=>'trabalhador da exploração de babaçu',]);

        CompanyOccupationsModel::create(['code'=>'632315','occupation'=>'Trabalhador da exploração de bacaba','filter'=>'trabalhador da exploração de bacaba',]);

        CompanyOccupationsModel::create(['code'=>'632320','occupation'=>'Trabalhador da exploração de buriti','filter'=>'trabalhador da exploração de buriti',]);

        CompanyOccupationsModel::create(['code'=>'632325','occupation'=>'Trabalhador da exploração de carnaúba','filter'=>'trabalhador da exploração de carnaúba',]);

        CompanyOccupationsModel::create(['code'=>'632330','occupation'=>'Trabalhador da exploração de coco-da-praia','filter'=>'trabalhador da exploração de coco-da-praia',]);

        CompanyOccupationsModel::create(['code'=>'632335','occupation'=>'Trabalhador da exploração de copaíba','filter'=>'trabalhador da exploração de copaíba',]);

        CompanyOccupationsModel::create(['code'=>'632340','occupation'=>'Trabalhador da exploração de malva (pãina)','filter'=>'trabalhador da exploração de malva (pãina)',]);

        CompanyOccupationsModel::create(['code'=>'632345','occupation'=>'Trabalhador da exploração de murumuru','filter'=>'trabalhador da exploração de murumuru',]);

        CompanyOccupationsModel::create(['code'=>'632350','occupation'=>'Trabalhador da exploração de oiticica','filter'=>'trabalhador da exploração de oiticica',]);

        CompanyOccupationsModel::create(['code'=>'632355','occupation'=>'Trabalhador da exploração de ouricuri','filter'=>'trabalhador da exploração de ouricuri',]);

        CompanyOccupationsModel::create(['code'=>'632360','occupation'=>'Trabalhador da exploração de pequi','filter'=>'trabalhador da exploração de pequi',]);

        CompanyOccupationsModel::create(['code'=>'632365','occupation'=>'Trabalhador da exploração de piaçava','filter'=>'trabalhador da exploração de piaçava',]);

        CompanyOccupationsModel::create(['code'=>'632370','occupation'=>'Trabalhador da exploração de tucum','filter'=>'trabalhador da exploração de tucum',]);

        CompanyOccupationsModel::create(['code'=>'632405','occupation'=>'Trabalhador da exploração de açaí','filter'=>'trabalhador da exploração de açaí',]);

        CompanyOccupationsModel::create(['code'=>'632410','occupation'=>'Trabalhador da exploração de castanha','filter'=>'trabalhador da exploração de castanha',]);

        CompanyOccupationsModel::create(['code'=>'632415','occupation'=>'Trabalhador da exploração de pinhão','filter'=>'trabalhador da exploração de pinhão',]);

        CompanyOccupationsModel::create(['code'=>'632420','occupation'=>'Trabalhador da exploração de pupunha','filter'=>'trabalhador da exploração de pupunha',]);

        CompanyOccupationsModel::create(['code'=>'632505','occupation'=>'Trabalhador da exploração de árvores e arbustos produtores de substâncias aromát., Medic. E tóxicas','filter'=>'trabalhador da exploração de árvores e arbustos produtores de substâncias aromát., medic. e tóxicas',]);

        CompanyOccupationsModel::create(['code'=>'632510','occupation'=>'Trabalhador da exploração de cipós produtores de substâncias aromáticas, medicinais e tóxicas','filter'=>'trabalhador da exploração de cipós produtores de substâncias aromáticas, medicinais e tóxicas',]);

        CompanyOccupationsModel::create(['code'=>'632515','occupation'=>'Trabalhador da exploração de madeiras tanantes','filter'=>'trabalhador da exploração de madeiras tanantes',]);

        CompanyOccupationsModel::create(['code'=>'632520','occupation'=>'Trabalhador da exploração de raízes produtoras de substâncias aromáticas, medicinais e tóxicas','filter'=>'trabalhador da exploração de raízes produtoras de substâncias aromáticas, medicinais e tóxicas',]);

        CompanyOccupationsModel::create(['code'=>'632525','occupation'=>'Trabalhador da extração de substâncias aromáticas, medicinais e tóxicas, em geral','filter'=>'trabalhador da extração de substâncias aromáticas, medicinais e tóxicas, em geral',]);

        CompanyOccupationsModel::create(['code'=>'632605','occupation'=>'Carvoeiro','filter'=>'carvoeiro',]);

        CompanyOccupationsModel::create(['code'=>'632610','occupation'=>'Carbonizador','filter'=>'carbonizador',]);

        CompanyOccupationsModel::create(['code'=>'632615','occupation'=>'Ajudante de carvoaria','filter'=>'ajudante de carvoaria',]);

        CompanyOccupationsModel::create(['code'=>'641005','occupation'=>'Operador de colheitadeira','filter'=>'operador de colheitadeira',]);

        CompanyOccupationsModel::create(['code'=>'641010','occupation'=>'Operador de máquinas de beneficiamento de produtos agrícolas','filter'=>'operador de máquinas de beneficiamento de produtos agrícolas',]);

        CompanyOccupationsModel::create(['code'=>'641015','occupation'=>'Tratorista agrícola','filter'=>'tratorista agrícola',]);

        CompanyOccupationsModel::create(['code'=>'642005','occupation'=>'Operador de colhedor florestal','filter'=>'operador de colhedor florestal',]);

        CompanyOccupationsModel::create(['code'=>'642010','occupation'=>'Operador de máquinas florestais estáticas','filter'=>'operador de máquinas florestais estáticas',]);

        CompanyOccupationsModel::create(['code'=>'642015','occupation'=>'Operador de trator florestal','filter'=>'operador de trator florestal',]);

        CompanyOccupationsModel::create(['code'=>'643005','occupation'=>'Trabalhador na operação de sistema de irrigação localizada (microaspersão e gotejamento)','filter'=>'trabalhador na operação de sistema de irrigação localizada (microaspersão e gotejamento)',]);

        CompanyOccupationsModel::create(['code'=>'643010','occupation'=>'Trabalhador na operação de sistema de irrigação por aspersão (pivô central)','filter'=>'trabalhador na operação de sistema de irrigação por aspersão (pivô central)',]);

        CompanyOccupationsModel::create(['code'=>'643015','occupation'=>'Trabalhador na operação de sistemas convencionais de irrigação por aspersão','filter'=>'trabalhador na operação de sistemas convencionais de irrigação por aspersão',]);

        CompanyOccupationsModel::create(['code'=>'643020','occupation'=>'Trabalhador na operação de sistemas de irrigação e aspersão (alto propelido)','filter'=>'trabalhador na operação de sistemas de irrigação e aspersão (alto propelido)',]);

        CompanyOccupationsModel::create(['code'=>'643025','occupation'=>'Trabalhador na operação de sistemas de irrigação por superfície e drenagem','filter'=>'trabalhador na operação de sistemas de irrigação por superfície e drenagem',]);

        CompanyOccupationsModel::create(['code'=>'710105','occupation'=>'Supervisor de apoio operacional na mineração','filter'=>'supervisor de apoio operacional na mineração',]);

        CompanyOccupationsModel::create(['code'=>'710110','occupation'=>'Supervisor de extração de sal','filter'=>'supervisor de extração de sal',]);

        CompanyOccupationsModel::create(['code'=>'710115','occupation'=>'Supervisor de perfuração e desmonte','filter'=>'supervisor de perfuração e desmonte',]);

        CompanyOccupationsModel::create(['code'=>'710120','occupation'=>'Supervisor de produção na mineração','filter'=>'supervisor de produção na mineração',]);

        CompanyOccupationsModel::create(['code'=>'710125','occupation'=>'Supervisor de transporte na mineração','filter'=>'supervisor de transporte na mineração',]);

        CompanyOccupationsModel::create(['code'=>'710205','occupation'=>'Mestre (construção civil)','filter'=>'mestre (construção civil)',]);

        CompanyOccupationsModel::create(['code'=>'710210','occupation'=>'Mestre de linhas (ferrovias)','filter'=>'mestre de linhas (ferrovias)',]);

        CompanyOccupationsModel::create(['code'=>'710215','occupation'=>'Inspetor de terraplenagem','filter'=>'inspetor de terraplenagem',]);

        CompanyOccupationsModel::create(['code'=>'710220','occupation'=>'Supervisor de usina de concreto','filter'=>'supervisor de usina de concreto',]);

        CompanyOccupationsModel::create(['code'=>'710225','occupation'=>'Fiscal de pátio de usina de concreto','filter'=>'fiscal de pátio de usina de concreto',]);

        CompanyOccupationsModel::create(['code'=>'711105','occupation'=>'Amostrador de minérios','filter'=>'amostrador de minérios',]);

        CompanyOccupationsModel::create(['code'=>'711110','occupation'=>'Canteiro','filter'=>'canteiro',]);

        CompanyOccupationsModel::create(['code'=>'711115','occupation'=>'Destroçador de pedra','filter'=>'destroçador de pedra',]);

        CompanyOccupationsModel::create(['code'=>'711120','occupation'=>'Detonador','filter'=>'detonador',]);

        CompanyOccupationsModel::create(['code'=>'711125','occupation'=>'Escorador de minas','filter'=>'escorador de minas',]);

        CompanyOccupationsModel::create(['code'=>'711130','occupation'=>'Mineiro','filter'=>'mineiro',]);

        CompanyOccupationsModel::create(['code'=>'711205','occupation'=>'Operador de caminhão (minas e pedreiras)','filter'=>'operador de caminhão (minas e pedreiras)',]);

        CompanyOccupationsModel::create(['code'=>'711210','occupation'=>'Operador de carregadeira','filter'=>'operador de carregadeira',]);

        CompanyOccupationsModel::create(['code'=>'711215','occupation'=>'Operador de máquina cortadora (minas e pedreiras)','filter'=>'operador de máquina cortadora (minas e pedreiras)',]);

        CompanyOccupationsModel::create(['code'=>'711220','occupation'=>'Operador de máquina de extração contínua (minas de carvão)','filter'=>'operador de máquina de extração contínua (minas de carvão)',]);

        CompanyOccupationsModel::create(['code'=>'711225','occupation'=>'Operador de máquina perfuradora (minas e pedreiras)','filter'=>'operador de máquina perfuradora (minas e pedreiras)',]);

        CompanyOccupationsModel::create(['code'=>'711230','occupation'=>'Operador de máquina perfuratriz','filter'=>'operador de máquina perfuratriz',]);

        CompanyOccupationsModel::create(['code'=>'711235','occupation'=>'Operador de motoniveladora (extração de minerais sólidos)','filter'=>'operador de motoniveladora (extração de minerais sólidos)',]);

        CompanyOccupationsModel::create(['code'=>'711240','occupation'=>'Operador de schutthecar','filter'=>'operador de schutthecar',]);

        CompanyOccupationsModel::create(['code'=>'711245','occupation'=>'Operador de trator (minas e pedreiras)','filter'=>'operador de trator (minas e pedreiras)',]);

        CompanyOccupationsModel::create(['code'=>'711305','occupation'=>'Operador de sonda de percussão','filter'=>'operador de sonda de percussão',]);

        CompanyOccupationsModel::create(['code'=>'711310','occupation'=>'Operador de sonda rotativa','filter'=>'operador de sonda rotativa',]);

        CompanyOccupationsModel::create(['code'=>'711315','occupation'=>'Sondador (poços de petróleo e gás)','filter'=>'sondador (poços de petróleo e gás)',]);

        CompanyOccupationsModel::create(['code'=>'711320','occupation'=>'Sondador de poços (exceto de petróleo e gás)','filter'=>'sondador de poços (exceto de petróleo e gás)',]);

        CompanyOccupationsModel::create(['code'=>'711325','occupation'=>'Plataformista (petróleo)','filter'=>'plataformista (petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'711330','occupation'=>'Torrista (petróleo)','filter'=>'torrista (petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'711405','occupation'=>'Garimpeiro','filter'=>'garimpeiro',]);

        CompanyOccupationsModel::create(['code'=>'711410','occupation'=>'Operador de salina (sal marinho)','filter'=>'operador de salina (sal marinho)',]);

        CompanyOccupationsModel::create(['code'=>'712105','occupation'=>'Moleiro de minérios','filter'=>'moleiro de minérios',]);

        CompanyOccupationsModel::create(['code'=>'712110','occupation'=>'Operador de aparelho de flotação','filter'=>'operador de aparelho de flotação',]);

        CompanyOccupationsModel::create(['code'=>'712115','occupation'=>'Operador de aparelho de precipitação (minas de ouro ou prata)','filter'=>'operador de aparelho de precipitação (minas de ouro ou prata)',]);

        CompanyOccupationsModel::create(['code'=>'712120','occupation'=>'Operador de britador de mandíbulas','filter'=>'operador de britador de mandíbulas',]);

        CompanyOccupationsModel::create(['code'=>'712125','occupation'=>'Operador de espessador','filter'=>'operador de espessador',]);

        CompanyOccupationsModel::create(['code'=>'712130','occupation'=>'Operador de jig (minas)','filter'=>'operador de jig (minas)',]);

        CompanyOccupationsModel::create(['code'=>'712135','occupation'=>'Operador de peneiras hidráulicas','filter'=>'operador de peneiras hidráulicas',]);

        CompanyOccupationsModel::create(['code'=>'712205','occupation'=>'Cortador de pedras','filter'=>'cortador de pedras',]);

        CompanyOccupationsModel::create(['code'=>'712210','occupation'=>'Gravador de inscrições em pedra','filter'=>'gravador de inscrições em pedra',]);

        CompanyOccupationsModel::create(['code'=>'712215','occupation'=>'Gravador de relevos em pedra','filter'=>'gravador de relevos em pedra',]);

        CompanyOccupationsModel::create(['code'=>'712220','occupation'=>'Polidor de pedras','filter'=>'polidor de pedras',]);

        CompanyOccupationsModel::create(['code'=>'712225','occupation'=>'Torneiro (lavra de pedra)','filter'=>'torneiro (lavra de pedra)',]);

        CompanyOccupationsModel::create(['code'=>'712230','occupation'=>'Traçador de pedras','filter'=>'traçador de pedras',]);

        CompanyOccupationsModel::create(['code'=>'715105','occupation'=>'Operador de bate-estacas','filter'=>'operador de bate-estacas',]);

        CompanyOccupationsModel::create(['code'=>'715110','occupation'=>'Operador de compactadora de solos','filter'=>'operador de compactadora de solos',]);

        CompanyOccupationsModel::create(['code'=>'715115','occupation'=>'Operador de escavadeira','filter'=>'operador de escavadeira',]);

        CompanyOccupationsModel::create(['code'=>'715120','occupation'=>'Operador de máquina de abrir valas','filter'=>'operador de máquina de abrir valas',]);

        CompanyOccupationsModel::create(['code'=>'715125','occupation'=>'Operador de máquinas de construção civil e mineração','filter'=>'operador de máquinas de construção civil e mineração',]);

        CompanyOccupationsModel::create(['code'=>'715130','occupation'=>'Operador de motoniveladora','filter'=>'operador de motoniveladora',]);

        CompanyOccupationsModel::create(['code'=>'715135','occupation'=>'Operador de pá carregadeira','filter'=>'operador de pá carregadeira',]);

        CompanyOccupationsModel::create(['code'=>'715140','occupation'=>'Operador de pavimentadora (asfalto, concreto e materiais similares)','filter'=>'operador de pavimentadora (asfalto, concreto e materiais similares)',]);

        CompanyOccupationsModel::create(['code'=>'715145','occupation'=>'Operador de trator de lâmina','filter'=>'operador de trator de lâmina',]);

        CompanyOccupationsModel::create(['code'=>'715205','occupation'=>'Calceteiro','filter'=>'calceteiro',]);

        CompanyOccupationsModel::create(['code'=>'715210','occupation'=>'Pedreiro','filter'=>'pedreiro',]);

        CompanyOccupationsModel::create(['code'=>'715215','occupation'=>'Pedreiro (chaminés industriais)','filter'=>'pedreiro (chaminés industriais)',]);

        CompanyOccupationsModel::create(['code'=>'715220','occupation'=>'Pedreiro (material refratário)','filter'=>'pedreiro (material refratário)',]);

        CompanyOccupationsModel::create(['code'=>'715225','occupation'=>'Pedreiro (mineração)','filter'=>'pedreiro (mineração)',]);

        CompanyOccupationsModel::create(['code'=>'715230','occupation'=>'Pedreiro de edificações','filter'=>'pedreiro de edificações',]);

        CompanyOccupationsModel::create(['code'=>'715305','occupation'=>'Armador de estrutura de concreto','filter'=>'armador de estrutura de concreto',]);

        CompanyOccupationsModel::create(['code'=>'715310','occupation'=>'Moldador de corpos de prova em usinas de concreto','filter'=>'moldador de corpos de prova em usinas de concreto',]);

        CompanyOccupationsModel::create(['code'=>'715315','occupation'=>'Armador de estrutura de concreto armado','filter'=>'armador de estrutura de concreto armado',]);

        CompanyOccupationsModel::create(['code'=>'715405','occupation'=>'Operador de betoneira','filter'=>'operador de betoneira',]);

        CompanyOccupationsModel::create(['code'=>'715410','occupation'=>'Operador de bomba de concreto','filter'=>'operador de bomba de concreto',]);

        CompanyOccupationsModel::create(['code'=>'715415','occupation'=>'Operador de central de concreto','filter'=>'operador de central de concreto',]);

        CompanyOccupationsModel::create(['code'=>'715420','occupation'=>'Operador de usina de asfalto','filter'=>'operador de usina de asfalto',]);

        CompanyOccupationsModel::create(['code'=>'715505','occupation'=>'Carpinteiro','filter'=>'carpinteiro',]);

        CompanyOccupationsModel::create(['code'=>'715510','occupation'=>'Carpinteiro (esquadrias)','filter'=>'carpinteiro (esquadrias)',]);

        CompanyOccupationsModel::create(['code'=>'715515','occupation'=>'Carpinteiro (cenários)','filter'=>'carpinteiro (cenários)',]);

        CompanyOccupationsModel::create(['code'=>'715520','occupation'=>'Carpinteiro (mineração)','filter'=>'carpinteiro (mineração)',]);

        CompanyOccupationsModel::create(['code'=>'715525','occupation'=>'Carpinteiro de obras','filter'=>'carpinteiro de obras',]);

        CompanyOccupationsModel::create(['code'=>'715530','occupation'=>'Carpinteiro (telhados)','filter'=>'carpinteiro (telhados)',]);

        CompanyOccupationsModel::create(['code'=>'715535','occupation'=>'Carpinteiro de fôrmas para concreto','filter'=>'carpinteiro de fôrmas para concreto',]);

        CompanyOccupationsModel::create(['code'=>'715540','occupation'=>'Carpinteiro de obras civis de arte (pontes, túneis, barragens)','filter'=>'carpinteiro de obras civis de arte (pontes, túneis, barragens)',]);

        CompanyOccupationsModel::create(['code'=>'715545','occupation'=>'Montador de andaimes (edificações)','filter'=>'montador de andaimes (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'715605','occupation'=>'Eletricista de instalações (cenários)','filter'=>'eletricista de instalações (cenários)',]);

        CompanyOccupationsModel::create(['code'=>'715610','occupation'=>'Eletricista de instalações (edifícios)','filter'=>'eletricista de instalações (edifícios)',]);

        CompanyOccupationsModel::create(['code'=>'715615','occupation'=>'Eletricista de instalações','filter'=>'eletricista de instalações',]);

        CompanyOccupationsModel::create(['code'=>'715705','occupation'=>'Aplicador de asfalto impermeabilizante (coberturas)','filter'=>'aplicador de asfalto impermeabilizante (coberturas)',]);

        CompanyOccupationsModel::create(['code'=>'715710','occupation'=>'Instalador de isolantes acústicos','filter'=>'instalador de isolantes acústicos',]);

        CompanyOccupationsModel::create(['code'=>'715715','occupation'=>'Instalador de isolantes térmicos (refrigeração e climatização)','filter'=>'instalador de isolantes térmicos (refrigeração e climatização)',]);

        CompanyOccupationsModel::create(['code'=>'715720','occupation'=>'Instalador de isolantes térmicos de caldeira e tubulações','filter'=>'instalador de isolantes térmicos de caldeira e tubulações',]);

        CompanyOccupationsModel::create(['code'=>'715725','occupation'=>'Instalador de material isolante, a mão (edificações)','filter'=>'instalador de material isolante, a mão (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'715730','occupation'=>'Instalador de material isolante, à máquina (edificações)','filter'=>'instalador de material isolante, à máquina (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'716105','occupation'=>'Acabador de superfícies de concreto','filter'=>'acabador de superfícies de concreto',]);

        CompanyOccupationsModel::create(['code'=>'716110','occupation'=>'Revestidor de superfícies de concreto','filter'=>'revestidor de superfícies de concreto',]);

        CompanyOccupationsModel::create(['code'=>'716205','occupation'=>'Telhador (telhas de argila e materiais similares)','filter'=>'telhador (telhas de argila e materiais similares)',]);

        CompanyOccupationsModel::create(['code'=>'716210','occupation'=>'Telhador (telhas de cimento-amianto)','filter'=>'telhador (telhas de cimento-amianto)',]);

        CompanyOccupationsModel::create(['code'=>'716215','occupation'=>'Telhador (telhas metálicas)','filter'=>'telhador (telhas metálicas)',]);

        CompanyOccupationsModel::create(['code'=>'716220','occupation'=>'Telhador (telhas plásticas)','filter'=>'telhador (telhas plásticas)',]);

        CompanyOccupationsModel::create(['code'=>'716305','occupation'=>'Vidraceiro','filter'=>'vidraceiro',]);

        CompanyOccupationsModel::create(['code'=>'716310','occupation'=>'Vidraceiro (edificações)','filter'=>'vidraceiro (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'716315','occupation'=>'Vidraceiro (vitrais)','filter'=>'vidraceiro (vitrais)',]);

        CompanyOccupationsModel::create(['code'=>'716405','occupation'=>'Gesseiro','filter'=>'gesseiro',]);

        CompanyOccupationsModel::create(['code'=>'716505','occupation'=>'Assoalhador','filter'=>'assoalhador',]);

        CompanyOccupationsModel::create(['code'=>'716510','occupation'=>'Assentador de revestimentos cerâmicos','filter'=>'assentador de revestimentos cerâmicos',]);

        CompanyOccupationsModel::create(['code'=>'716515','occupation'=>'Pastilheiro','filter'=>'pastilheiro',]);

        CompanyOccupationsModel::create(['code'=>'716520','occupation'=>'Lustrador de piso','filter'=>'lustrador de piso',]);

        CompanyOccupationsModel::create(['code'=>'716525','occupation'=>'Marmorista (construção)','filter'=>'marmorista (construção)',]);

        CompanyOccupationsModel::create(['code'=>'716530','occupation'=>'Mosaísta','filter'=>'mosaísta',]);

        CompanyOccupationsModel::create(['code'=>'716535','occupation'=>'Taqueiro','filter'=>'taqueiro',]);

        CompanyOccupationsModel::create(['code'=>'716540','occupation'=>'Rejuntador de revestimentos','filter'=>'rejuntador de revestimentos',]);

        CompanyOccupationsModel::create(['code'=>'716605','occupation'=>'Calafetador','filter'=>'calafetador',]);

        CompanyOccupationsModel::create(['code'=>'716610','occupation'=>'Pintor de obras','filter'=>'pintor de obras',]);

        CompanyOccupationsModel::create(['code'=>'716615','occupation'=>'Revestidor de interiores (papel, material plástico e emborrachados)','filter'=>'revestidor de interiores (papel, material plástico e emborrachados)',]);

        CompanyOccupationsModel::create(['code'=>'717005','occupation'=>'Demolidor de edificações','filter'=>'demolidor de edificações',]);

        CompanyOccupationsModel::create(['code'=>'717010','occupation'=>'Operador de martelete','filter'=>'operador de martelete',]);

        CompanyOccupationsModel::create(['code'=>'717015','occupation'=>'Poceiro (edificações)','filter'=>'poceiro (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'717020','occupation'=>'Servente de obras','filter'=>'servente de obras',]);

        CompanyOccupationsModel::create(['code'=>'717025','occupation'=>'Vibradorista','filter'=>'vibradorista',]);

        CompanyOccupationsModel::create(['code'=>'720105','occupation'=>'Mestre (afiador de ferramentas)','filter'=>'mestre (afiador de ferramentas)',]);

        CompanyOccupationsModel::create(['code'=>'720110','occupation'=>'Mestre de caldeiraria','filter'=>'mestre de caldeiraria',]);

        CompanyOccupationsModel::create(['code'=>'720115','occupation'=>'Mestre de ferramentaria','filter'=>'mestre de ferramentaria',]);

        CompanyOccupationsModel::create(['code'=>'720120','occupation'=>'Mestre de forjaria','filter'=>'mestre de forjaria',]);

        CompanyOccupationsModel::create(['code'=>'720125','occupation'=>'Mestre de fundição','filter'=>'mestre de fundição',]);

        CompanyOccupationsModel::create(['code'=>'720130','occupation'=>'Mestre de galvanoplastia','filter'=>'mestre de galvanoplastia',]);

        CompanyOccupationsModel::create(['code'=>'720135','occupation'=>'Mestre de pintura (tratamento de superfícies)','filter'=>'mestre de pintura (tratamento de superfícies)',]);

        CompanyOccupationsModel::create(['code'=>'720140','occupation'=>'Mestre de soldagem','filter'=>'mestre de soldagem',]);

        CompanyOccupationsModel::create(['code'=>'720145','occupation'=>'Mestre de trefilação de metais','filter'=>'mestre de trefilação de metais',]);

        CompanyOccupationsModel::create(['code'=>'720150','occupation'=>'Mestre de usinagem','filter'=>'mestre de usinagem',]);

        CompanyOccupationsModel::create(['code'=>'720155','occupation'=>'Mestre serralheiro','filter'=>'mestre serralheiro',]);

        CompanyOccupationsModel::create(['code'=>'720160','occupation'=>'Supervisor de controle de tratamento térmico','filter'=>'supervisor de controle de tratamento térmico',]);

        CompanyOccupationsModel::create(['code'=>'720205','occupation'=>'Mestre (construção naval)','filter'=>'mestre (construção naval)',]);

        CompanyOccupationsModel::create(['code'=>'720210','occupation'=>'Mestre (indústria de automotores e material de transportes)','filter'=>'mestre (indústria de automotores e material de transportes)',]);

        CompanyOccupationsModel::create(['code'=>'720215','occupation'=>'Mestre (indústria de máquinas e outros equipamentos mecânicos)','filter'=>'mestre (indústria de máquinas e outros equipamentos mecânicos)',]);

        CompanyOccupationsModel::create(['code'=>'720220','occupation'=>'Mestre de construção de fornos','filter'=>'mestre de construção de fornos',]);

        CompanyOccupationsModel::create(['code'=>'721105','occupation'=>'Ferramenteiro','filter'=>'ferramenteiro',]);

        CompanyOccupationsModel::create(['code'=>'721110','occupation'=>'Ferramenteiro de mandris, calibradores e outros dispositivos','filter'=>'ferramenteiro de mandris, calibradores e outros dispositivos',]);

        CompanyOccupationsModel::create(['code'=>'721115','occupation'=>'Modelador de metais (fundição)','filter'=>'modelador de metais (fundição)',]);

        CompanyOccupationsModel::create(['code'=>'721205','occupation'=>'Operador de máquina de eletroerosão','filter'=>'operador de máquina de eletroerosão',]);

        CompanyOccupationsModel::create(['code'=>'721210','occupation'=>'Operador de máquinas operatrizes','filter'=>'operador de máquinas operatrizes',]);

        CompanyOccupationsModel::create(['code'=>'721215','occupation'=>'Operador de máquinas-ferramenta convencionais','filter'=>'operador de máquinas-ferramenta convencionais',]);

        CompanyOccupationsModel::create(['code'=>'721220','occupation'=>'Operador de usinagem convencional por abrasão','filter'=>'operador de usinagem convencional por abrasão',]);

        CompanyOccupationsModel::create(['code'=>'721225','occupation'=>'Preparador de máquinas-ferramenta','filter'=>'preparador de máquinas-ferramenta',]);

        CompanyOccupationsModel::create(['code'=>'721305','occupation'=>'Afiador de cardas','filter'=>'afiador de cardas',]);

        CompanyOccupationsModel::create(['code'=>'721310','occupation'=>'Afiador de cutelaria','filter'=>'afiador de cutelaria',]);

        CompanyOccupationsModel::create(['code'=>'721315','occupation'=>'Afiador de ferramentas','filter'=>'afiador de ferramentas',]);

        CompanyOccupationsModel::create(['code'=>'721320','occupation'=>'Afiador de serras','filter'=>'afiador de serras',]);

        CompanyOccupationsModel::create(['code'=>'721325','occupation'=>'Polidor de metais','filter'=>'polidor de metais',]);

        CompanyOccupationsModel::create(['code'=>'721405','occupation'=>'Operador de centro de usinagem com comando numérico','filter'=>'operador de centro de usinagem com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'721410','occupation'=>'Operador de fresadora com comando numérico','filter'=>'operador de fresadora com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'721415','occupation'=>'Operador de mandriladora com comando numérico','filter'=>'operador de mandriladora com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'721420','occupation'=>'Operador de máquina eletroerosão, à fio, com comando numérico','filter'=>'operador de máquina eletroerosão, à fio, com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'721425','occupation'=>'Operador de retificadora com comando numérico','filter'=>'operador de retificadora com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'721430','occupation'=>'Operador de torno com comando numérico','filter'=>'operador de torno com comando numérico',]);

        CompanyOccupationsModel::create(['code'=>'722105','occupation'=>'Forjador','filter'=>'forjador',]);

        CompanyOccupationsModel::create(['code'=>'722110','occupation'=>'Forjador a martelo','filter'=>'forjador a martelo',]);

        CompanyOccupationsModel::create(['code'=>'722115','occupation'=>'Forjador prensista','filter'=>'forjador prensista',]);

        CompanyOccupationsModel::create(['code'=>'722205','occupation'=>'Fundidor de metais','filter'=>'fundidor de metais',]);

        CompanyOccupationsModel::create(['code'=>'722210','occupation'=>'Operador de lingotamento','filter'=>'operador de lingotamento',]);

        CompanyOccupationsModel::create(['code'=>'722215','occupation'=>'Operador de acabamento de peças fundidas','filter'=>'operador de acabamento de peças fundidas',]);

        CompanyOccupationsModel::create(['code'=>'722220','occupation'=>'Operador de máquina de fundição','filter'=>'operador de máquina de fundição',]);

        CompanyOccupationsModel::create(['code'=>'722230','occupation'=>'Operador de vazamento','filter'=>'operador de vazamento',]);

        CompanyOccupationsModel::create(['code'=>'722235','occupation'=>'Preparador de panelas','filter'=>'preparador de panelas',]);

        CompanyOccupationsModel::create(['code'=>'722305','occupation'=>'Macheiro, a mão','filter'=>'macheiro, a mão',]);

        CompanyOccupationsModel::create(['code'=>'722310','occupation'=>'Macheiro, a máquina','filter'=>'macheiro, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'722315','occupation'=>'Moldador, a mão','filter'=>'moldador, a mão',]);

        CompanyOccupationsModel::create(['code'=>'722320','occupation'=>'Moldador, a máquina','filter'=>'moldador, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'722325','occupation'=>'Operador de equipamentos de preparação de areia','filter'=>'operador de equipamentos de preparação de areia',]);

        CompanyOccupationsModel::create(['code'=>'722330','occupation'=>'Operador de máquina de moldar automatizada','filter'=>'operador de máquina de moldar automatizada',]);

        CompanyOccupationsModel::create(['code'=>'722405','occupation'=>'Cableador','filter'=>'cableador',]);

        CompanyOccupationsModel::create(['code'=>'722410','occupation'=>'Estirador de tubos de metal sem costura','filter'=>'estirador de tubos de metal sem costura',]);

        CompanyOccupationsModel::create(['code'=>'722415','occupation'=>'Trefilador de metais, à máquina','filter'=>'trefilador de metais, à máquina',]);

        CompanyOccupationsModel::create(['code'=>'723105','occupation'=>'Cementador de metais','filter'=>'cementador de metais',]);

        CompanyOccupationsModel::create(['code'=>'723110','occupation'=>'Normalizador de metais e de compósitos','filter'=>'normalizador de metais e de compósitos',]);

        CompanyOccupationsModel::create(['code'=>'723115','occupation'=>'Operador de equipamento para resfriamento','filter'=>'operador de equipamento para resfriamento',]);

        CompanyOccupationsModel::create(['code'=>'723120','occupation'=>'Operador de forno de tratamento térmico de metais','filter'=>'operador de forno de tratamento térmico de metais',]);

        CompanyOccupationsModel::create(['code'=>'723125','occupation'=>'Temperador de metais e de compósitos','filter'=>'temperador de metais e de compósitos',]);

        CompanyOccupationsModel::create(['code'=>'723205','occupation'=>'Decapador','filter'=>'decapador',]);

        CompanyOccupationsModel::create(['code'=>'723210','occupation'=>'Fosfatizador','filter'=>'fosfatizador',]);

        CompanyOccupationsModel::create(['code'=>'723215','occupation'=>'Galvanizador','filter'=>'galvanizador',]);

        CompanyOccupationsModel::create(['code'=>'723220','occupation'=>'Metalizador a pistola','filter'=>'metalizador a pistola',]);

        CompanyOccupationsModel::create(['code'=>'723225','occupation'=>'Metalizador (banho quente)','filter'=>'metalizador (banho quente)',]);

        CompanyOccupationsModel::create(['code'=>'723230','occupation'=>'Operador de máquina recobridora de arame','filter'=>'operador de máquina recobridora de arame',]);

        CompanyOccupationsModel::create(['code'=>'723235','occupation'=>'Operador de zincagem (processo eletrolítico)','filter'=>'operador de zincagem (processo eletrolítico)',]);

        CompanyOccupationsModel::create(['code'=>'723240','occupation'=>'Oxidador','filter'=>'oxidador',]);

        CompanyOccupationsModel::create(['code'=>'723305','occupation'=>'Operador de equipamento de secagem de pintura','filter'=>'operador de equipamento de secagem de pintura',]);

        CompanyOccupationsModel::create(['code'=>'723310','occupation'=>'Pintor a pincel e rolo (exceto obras e estruturas metálicas)','filter'=>'pintor a pincel e rolo (exceto obras e estruturas metálicas)',]);

        CompanyOccupationsModel::create(['code'=>'723315','occupation'=>'Pintor de estruturas metálicas','filter'=>'pintor de estruturas metálicas',]);

        CompanyOccupationsModel::create(['code'=>'723320','occupation'=>'Pintor de veículos (fabricação)','filter'=>'pintor de veículos (fabricação)',]);

        CompanyOccupationsModel::create(['code'=>'723325','occupation'=>'Pintor por imersão','filter'=>'pintor por imersão',]);

        CompanyOccupationsModel::create(['code'=>'723330','occupation'=>'Pintor, a pistola (exceto obras e estruturas metálicas)','filter'=>'pintor, a pistola (exceto obras e estruturas metálicas)',]);

        CompanyOccupationsModel::create(['code'=>'724105','occupation'=>'Assentador de canalização (edificações)','filter'=>'assentador de canalização (edificações)',]);

        CompanyOccupationsModel::create(['code'=>'724110','occupation'=>'Encanador','filter'=>'encanador',]);

        CompanyOccupationsModel::create(['code'=>'724115','occupation'=>'Instalador de tubulações','filter'=>'instalador de tubulações',]);

        CompanyOccupationsModel::create(['code'=>'724120','occupation'=>'Instalador de tubulações (aeronaves)','filter'=>'instalador de tubulações (aeronaves)',]);

        CompanyOccupationsModel::create(['code'=>'724125','occupation'=>'Instalador de tubulações (embarcações)','filter'=>'instalador de tubulações (embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'724130','occupation'=>'Instalador de tubulações de gás combustível (produção e distribuição)','filter'=>'instalador de tubulações de gás combustível (produção e distribuição)',]);

        CompanyOccupationsModel::create(['code'=>'724135','occupation'=>'Instalador de tubulações de vapor (produção e distribuição)','filter'=>'instalador de tubulações de vapor (produção e distribuição)',]);

        CompanyOccupationsModel::create(['code'=>'724205','occupation'=>'Montador de estruturas metálicas','filter'=>'montador de estruturas metálicas',]);

        CompanyOccupationsModel::create(['code'=>'724210','occupation'=>'Montador de estruturas metálicas de embarcações','filter'=>'montador de estruturas metálicas de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'724215','occupation'=>'Rebitador a martelo pneumático','filter'=>'rebitador a martelo pneumático',]);

        CompanyOccupationsModel::create(['code'=>'724220','occupation'=>'Preparador de estruturas metálicas','filter'=>'preparador de estruturas metálicas',]);

        CompanyOccupationsModel::create(['code'=>'724225','occupation'=>'Riscador de estruturas metálicas','filter'=>'riscador de estruturas metálicas',]);

        CompanyOccupationsModel::create(['code'=>'724230','occupation'=>'Rebitador, a mão','filter'=>'rebitador, a mão',]);

        CompanyOccupationsModel::create(['code'=>'724305','occupation'=>'Brasador','filter'=>'brasador',]);

        CompanyOccupationsModel::create(['code'=>'724310','occupation'=>'Oxicortador a mão e a máquina','filter'=>'oxicortador a mão e a máquina',]);

        CompanyOccupationsModel::create(['code'=>'724315','occupation'=>'Soldador','filter'=>'soldador',]);

        CompanyOccupationsModel::create(['code'=>'724320','occupation'=>'Soldador a oxigás','filter'=>'soldador a oxigás',]);

        CompanyOccupationsModel::create(['code'=>'724325','occupation'=>'Soldador elétrico','filter'=>'soldador elétrico',]);

        CompanyOccupationsModel::create(['code'=>'724405','occupation'=>'Caldeireiro (chapas de cobre)','filter'=>'caldeireiro (chapas de cobre)',]);

        CompanyOccupationsModel::create(['code'=>'724410','occupation'=>'Caldeireiro (chapas de ferro e aço)','filter'=>'caldeireiro (chapas de ferro e aço)',]);

        CompanyOccupationsModel::create(['code'=>'724415','occupation'=>'Chapeador','filter'=>'chapeador',]);

        CompanyOccupationsModel::create(['code'=>'724420','occupation'=>'Chapeador de carrocerias metálicas (fabricação)','filter'=>'chapeador de carrocerias metálicas (fabricação)',]);

        CompanyOccupationsModel::create(['code'=>'724425','occupation'=>'Chapeador naval','filter'=>'chapeador naval',]);

        CompanyOccupationsModel::create(['code'=>'724430','occupation'=>'Chapeador de aeronaves','filter'=>'chapeador de aeronaves',]);

        CompanyOccupationsModel::create(['code'=>'724435','occupation'=>'Funileiro industrial','filter'=>'funileiro industrial',]);

        CompanyOccupationsModel::create(['code'=>'724440','occupation'=>'Serralheiro','filter'=>'serralheiro',]);

        CompanyOccupationsModel::create(['code'=>'724505','occupation'=>'Operador de máquina de cilindrar chapas','filter'=>'operador de máquina de cilindrar chapas',]);

        CompanyOccupationsModel::create(['code'=>'724510','occupation'=>'Operador de máquina de dobrar chapas','filter'=>'operador de máquina de dobrar chapas',]);

        CompanyOccupationsModel::create(['code'=>'724515','occupation'=>'Prensista (operador de prensa)','filter'=>'prensista (operador de prensa)',]);

        CompanyOccupationsModel::create(['code'=>'724605','occupation'=>'Operador de laços de cabos de aço','filter'=>'operador de laços de cabos de aço',]);

        CompanyOccupationsModel::create(['code'=>'724610','occupation'=>'Trançador de cabos de aço','filter'=>'trançador de cabos de aço',]);

        CompanyOccupationsModel::create(['code'=>'725005','occupation'=>'Ajustador ferramenteiro','filter'=>'ajustador ferramenteiro',]);

        CompanyOccupationsModel::create(['code'=>'725010','occupation'=>'Ajustador mecânico','filter'=>'ajustador mecânico',]);

        CompanyOccupationsModel::create(['code'=>'725015','occupation'=>'Ajustador mecânico (usinagem em bancada e em máquinas-ferramentas)','filter'=>'ajustador mecânico (usinagem em bancada e em máquinas-ferramentas)',]);

        CompanyOccupationsModel::create(['code'=>'725020','occupation'=>'Ajustador mecânico em bancada','filter'=>'ajustador mecânico em bancada',]);

        CompanyOccupationsModel::create(['code'=>'725025','occupation'=>'Ajustador naval (reparo e construção)','filter'=>'ajustador naval (reparo e construção)',]);

        CompanyOccupationsModel::create(['code'=>'725030','occupation'=>'Operador de manutenção e recarga de extintor de incêndio','filter'=>'operador de manutenção e recarga de extintor de incêndio',]);

        CompanyOccupationsModel::create(['code'=>'725105','occupation'=>'Montador de máquinas, motores e acessórios (montagem em série)','filter'=>'montador de máquinas, motores e acessórios (montagem em série)',]);

        CompanyOccupationsModel::create(['code'=>'725205','occupation'=>'Montador de máquinas','filter'=>'montador de máquinas',]);

        CompanyOccupationsModel::create(['code'=>'725210','occupation'=>'Montador de máquinas gráficas','filter'=>'montador de máquinas gráficas',]);

        CompanyOccupationsModel::create(['code'=>'725215','occupation'=>'Montador de máquinas operatrizes para madeira','filter'=>'montador de máquinas operatrizes para madeira',]);

        CompanyOccupationsModel::create(['code'=>'725220','occupation'=>'Montador de máquinas têxteis','filter'=>'montador de máquinas têxteis',]);

        CompanyOccupationsModel::create(['code'=>'725225','occupation'=>'Montador de máquinas-ferramentas (usinagem de metais)','filter'=>'montador de máquinas-ferramentas (usinagem de metais)',]);

        CompanyOccupationsModel::create(['code'=>'725305','occupation'=>'Montador de equipamento de levantamento','filter'=>'montador de equipamento de levantamento',]);

        CompanyOccupationsModel::create(['code'=>'725310','occupation'=>'Montador de máquinas agrícolas','filter'=>'montador de máquinas agrícolas',]);

        CompanyOccupationsModel::create(['code'=>'725315','occupation'=>'Montador de máquinas de minas e pedreiras','filter'=>'montador de máquinas de minas e pedreiras',]);

        CompanyOccupationsModel::create(['code'=>'725320','occupation'=>'Montador de máquinas de terraplenagem','filter'=>'montador de máquinas de terraplenagem',]);

        CompanyOccupationsModel::create(['code'=>'725405','occupation'=>'Mecânico montador de motores de aeronaves','filter'=>'mecânico montador de motores de aeronaves',]);

        CompanyOccupationsModel::create(['code'=>'725410','occupation'=>'Mecânico montador de motores de embarcações','filter'=>'mecânico montador de motores de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'725415','occupation'=>'Mecânico montador de motores de explosão e diesel','filter'=>'mecânico montador de motores de explosão e diesel',]);

        CompanyOccupationsModel::create(['code'=>'725420','occupation'=>'Mecânico montador de turboalimentadores','filter'=>'mecânico montador de turboalimentadores',]);

        CompanyOccupationsModel::create(['code'=>'725505','occupation'=>'Montador de veículos (linha de montagem)','filter'=>'montador de veículos (linha de montagem)',]);

        CompanyOccupationsModel::create(['code'=>'725510','occupation'=>'Operador de time de montagem','filter'=>'operador de time de montagem',]);

        CompanyOccupationsModel::create(['code'=>'725605','occupation'=>'Montador de estruturas de aeronaves','filter'=>'montador de estruturas de aeronaves',]);

        CompanyOccupationsModel::create(['code'=>'725610','occupation'=>'Montador de sistemas de combustível de aeronaves','filter'=>'montador de sistemas de combustível de aeronaves',]);

        CompanyOccupationsModel::create(['code'=>'725705','occupation'=>'Mecânico de refrigeração','filter'=>'mecânico de refrigeração',]);

        CompanyOccupationsModel::create(['code'=>'730105','occupation'=>'Supervisor de montagem e instalação eletroeletrônica','filter'=>'supervisor de montagem e instalação eletroeletrônica',]);

        CompanyOccupationsModel::create(['code'=>'731105','occupation'=>'Montador de equipamentos eletrônicos (aparelhos médicos)','filter'=>'montador de equipamentos eletrônicos (aparelhos médicos)',]);

        CompanyOccupationsModel::create(['code'=>'731110','occupation'=>'Montador de equipamentos eletrônicos (computadores e equipamentos auxiliares)','filter'=>'montador de equipamentos eletrônicos (computadores e equipamentos auxiliares)',]);

        CompanyOccupationsModel::create(['code'=>'731115','occupation'=>'Montador de equipamentos elétricos (instrumentos de medição)','filter'=>'montador de equipamentos elétricos (instrumentos de medição)',]);

        CompanyOccupationsModel::create(['code'=>'731120','occupation'=>'Montador de equipamentos elétricos (aparelhos eletrodomésticos)','filter'=>'montador de equipamentos elétricos (aparelhos eletrodomésticos)',]);

        CompanyOccupationsModel::create(['code'=>'731125','occupation'=>'Montador de equipamentos elétricos (centrais elétricas)','filter'=>'montador de equipamentos elétricos (centrais elétricas)',]);

        CompanyOccupationsModel::create(['code'=>'731130','occupation'=>'Montador de equipamentos elétricos (motores e dínamos)','filter'=>'montador de equipamentos elétricos (motores e dínamos)',]);

        CompanyOccupationsModel::create(['code'=>'731135','occupation'=>'Montador de equipamentos elétricos','filter'=>'montador de equipamentos elétricos',]);

        CompanyOccupationsModel::create(['code'=>'731140','occupation'=>'Montador de equipamentos eletrônicos (instalações de sinalização)','filter'=>'montador de equipamentos eletrônicos (instalações de sinalização)',]);

        CompanyOccupationsModel::create(['code'=>'731145','occupation'=>'Montador de equipamentos eletrônicos (máquinas industriais)','filter'=>'montador de equipamentos eletrônicos (máquinas industriais)',]);

        CompanyOccupationsModel::create(['code'=>'731150','occupation'=>'Montador de equipamentos eletrônicos','filter'=>'montador de equipamentos eletrônicos',]);

        CompanyOccupationsModel::create(['code'=>'731155','occupation'=>'Montador de equipamentos elétricos (elevadores e equipamentos similares)','filter'=>'montador de equipamentos elétricos (elevadores e equipamentos similares)',]);

        CompanyOccupationsModel::create(['code'=>'731160','occupation'=>'Montador de equipamentos elétricos (transformadores)','filter'=>'montador de equipamentos elétricos (transformadores)',]);

        CompanyOccupationsModel::create(['code'=>'731165','occupation'=>'Bobinador eletricista, à mão','filter'=>'bobinador eletricista, à mão',]);

        CompanyOccupationsModel::create(['code'=>'731170','occupation'=>'Bobinador eletricista, à máquina','filter'=>'bobinador eletricista, à máquina',]);

        CompanyOccupationsModel::create(['code'=>'731175','occupation'=>'Operador de linha de montagem (aparelhos elétricos)','filter'=>'operador de linha de montagem (aparelhos elétricos)',]);

        CompanyOccupationsModel::create(['code'=>'731180','occupation'=>'Operador de linha de montagem (aparelhos eletrônicos)','filter'=>'operador de linha de montagem (aparelhos eletrônicos)',]);

        CompanyOccupationsModel::create(['code'=>'731205','occupation'=>'Montador de equipamentos eletrônicos (estação de rádio, tv e equipamentos de radar)','filter'=>'montador de equipamentos eletrônicos (estação de rádio, tv e equipamentos de radar)',]);

        CompanyOccupationsModel::create(['code'=>'731305','occupation'=>'Instalador-reparador de equipamentos de comutação em telefonia','filter'=>'instalador-reparador de equipamentos de comutação em telefonia',]);

        CompanyOccupationsModel::create(['code'=>'731310','occupation'=>'Instalador-reparador de equipamentos de energia em telefonia','filter'=>'instalador-reparador de equipamentos de energia em telefonia',]);

        CompanyOccupationsModel::create(['code'=>'731315','occupation'=>'Instalador-reparador de equipamentos de transmissão em telefonia','filter'=>'instalador-reparador de equipamentos de transmissão em telefonia',]);

        CompanyOccupationsModel::create(['code'=>'731320','occupation'=>'Instalador-reparador de linhas e aparelhos de telecomunicações','filter'=>'instalador-reparador de linhas e aparelhos de telecomunicações',]);

        CompanyOccupationsModel::create(['code'=>'731325','occupation'=>'Instalador-reparador de redes e cabos telefônicos','filter'=>'instalador-reparador de redes e cabos telefônicos',]);

        CompanyOccupationsModel::create(['code'=>'731330','occupation'=>'Reparador de aparelhos de telecomunicações em laboratório','filter'=>'reparador de aparelhos de telecomunicações em laboratório',]);

        CompanyOccupationsModel::create(['code'=>'732105','occupation'=>'Eletricista de manutenção de linhas elétricas, telefônicas e de comunicação de dados','filter'=>'eletricista de manutenção de linhas elétricas, telefônicas e de comunicação de dados',]);

        CompanyOccupationsModel::create(['code'=>'732110','occupation'=>'Emendador de cabos elétricos e telefônicos (aéreos e subterrâneos)','filter'=>'emendador de cabos elétricos e telefônicos (aéreos e subterrâneos)',]);

        CompanyOccupationsModel::create(['code'=>'732115','occupation'=>'Examinador de cabos, linhas elétricas e telefônicas','filter'=>'examinador de cabos, linhas elétricas e telefônicas',]);

        CompanyOccupationsModel::create(['code'=>'732120','occupation'=>'Instalador de linhas elétricas de alta e baixa - tensão (rede aérea e subterrânea)','filter'=>'instalador de linhas elétricas de alta e baixa - tensão (rede aérea e subterrânea)',]);

        CompanyOccupationsModel::create(['code'=>'732125','occupation'=>'Instalador eletricista (tração de veículos)','filter'=>'instalador eletricista (tração de veículos)',]);

        CompanyOccupationsModel::create(['code'=>'732130','occupation'=>'Instalador-reparador de redes telefônicas e de comunicação de dados','filter'=>'instalador-reparador de redes telefônicas e de comunicação de dados',]);

        CompanyOccupationsModel::create(['code'=>'732135','occupation'=>'Ligador de linhas telefônicas','filter'=>'ligador de linhas telefônicas',]);

        CompanyOccupationsModel::create(['code'=>'732140','occupation'=>'Instalador de sistemas fotovoltaicos','filter'=>'instalador de sistemas fotovoltaicos',]);

        CompanyOccupationsModel::create(['code'=>'740105','occupation'=>'Supervisor da mecânica de precisão','filter'=>'supervisor da mecânica de precisão',]);

        CompanyOccupationsModel::create(['code'=>'740110','occupation'=>'Supervisor de fabricação de instrumentos musicais','filter'=>'supervisor de fabricação de instrumentos musicais',]);

        CompanyOccupationsModel::create(['code'=>'741105','occupation'=>'Ajustador de instrumentos de precisão','filter'=>'ajustador de instrumentos de precisão',]);

        CompanyOccupationsModel::create(['code'=>'741110','occupation'=>'Montador de instrumentos de óptica','filter'=>'montador de instrumentos de óptica',]);

        CompanyOccupationsModel::create(['code'=>'741115','occupation'=>'Montador de instrumentos de precisão','filter'=>'montador de instrumentos de precisão',]);

        CompanyOccupationsModel::create(['code'=>'741120','occupation'=>'Relojoeiro (fabricação)','filter'=>'relojoeiro (fabricação)',]);

        CompanyOccupationsModel::create(['code'=>'741125','occupation'=>'Relojoeiro (reparação)','filter'=>'relojoeiro (reparação)',]);

        CompanyOccupationsModel::create(['code'=>'742105','occupation'=>'Afinador de instrumentos musicais','filter'=>'afinador de instrumentos musicais',]);

        CompanyOccupationsModel::create(['code'=>'742110','occupation'=>'Confeccionador de acordeão','filter'=>'confeccionador de acordeão',]);

        CompanyOccupationsModel::create(['code'=>'742115','occupation'=>'Confeccionador de instrumentos de corda','filter'=>'confeccionador de instrumentos de corda',]);

        CompanyOccupationsModel::create(['code'=>'742120','occupation'=>'Confeccionador de instrumentos de percussão (pele, couro ou plástico)','filter'=>'confeccionador de instrumentos de percussão (pele, couro ou plástico)',]);

        CompanyOccupationsModel::create(['code'=>'742125','occupation'=>'Confeccionador de instrumentos de sopro (madeira)','filter'=>'confeccionador de instrumentos de sopro (madeira)',]);

        CompanyOccupationsModel::create(['code'=>'742130','occupation'=>'Confeccionador de instrumentos de sopro (metal)','filter'=>'confeccionador de instrumentos de sopro (metal)',]);

        CompanyOccupationsModel::create(['code'=>'742135','occupation'=>'Confeccionador de órgão','filter'=>'confeccionador de órgão',]);

        CompanyOccupationsModel::create(['code'=>'742140','occupation'=>'Confeccionador de piano','filter'=>'confeccionador de piano',]);

        CompanyOccupationsModel::create(['code'=>'750105','occupation'=>'Supervisor de joalheria','filter'=>'supervisor de joalheria',]);

        CompanyOccupationsModel::create(['code'=>'750205','occupation'=>'Supervisor da indústria de minerais não metálicos (exceto os derivados de petróleo e carvão)','filter'=>'supervisor da indústria de minerais não metálicos (exceto os derivados de petróleo e carvão)',]);

        CompanyOccupationsModel::create(['code'=>'751005','occupation'=>'Engastador (jóias)','filter'=>'engastador (jóias)',]);

        CompanyOccupationsModel::create(['code'=>'751010','occupation'=>'Joalheiro','filter'=>'joalheiro',]);

        CompanyOccupationsModel::create(['code'=>'751015','occupation'=>'Joalheiro (reparações)','filter'=>'joalheiro (reparações)',]);

        CompanyOccupationsModel::create(['code'=>'751020','occupation'=>'Lapidador (jóias)','filter'=>'lapidador (jóias)',]);

        CompanyOccupationsModel::create(['code'=>'751105','occupation'=>'Bate-folha a máquina','filter'=>'bate-folha a máquina',]);

        CompanyOccupationsModel::create(['code'=>'751110','occupation'=>'Fundidor (joalheria e ourivesaria)','filter'=>'fundidor (joalheria e ourivesaria)',]);

        CompanyOccupationsModel::create(['code'=>'751115','occupation'=>'Gravador (joalheria e ourivesaria)','filter'=>'gravador (joalheria e ourivesaria)',]);

        CompanyOccupationsModel::create(['code'=>'751120','occupation'=>'Laminador de metais preciosos a mão','filter'=>'laminador de metais preciosos a mão',]);

        CompanyOccupationsModel::create(['code'=>'751125','occupation'=>'Ourives','filter'=>'ourives',]);

        CompanyOccupationsModel::create(['code'=>'751130','occupation'=>'Trefilador (joalheria e ourivesaria)','filter'=>'trefilador (joalheria e ourivesaria)',]);

        CompanyOccupationsModel::create(['code'=>'752105','occupation'=>'Artesão modelador (vidros)','filter'=>'artesão modelador (vidros)',]);

        CompanyOccupationsModel::create(['code'=>'752110','occupation'=>'Moldador (vidros)','filter'=>'moldador (vidros)',]);

        CompanyOccupationsModel::create(['code'=>'752115','occupation'=>'Soprador de vidro','filter'=>'soprador de vidro',]);

        CompanyOccupationsModel::create(['code'=>'752120','occupation'=>'Transformador de tubos de vidro','filter'=>'transformador de tubos de vidro',]);

        CompanyOccupationsModel::create(['code'=>'752205','occupation'=>'Aplicador serigráfico em vidros','filter'=>'aplicador serigráfico em vidros',]);

        CompanyOccupationsModel::create(['code'=>'752210','occupation'=>'Cortador de vidro','filter'=>'cortador de vidro',]);

        CompanyOccupationsModel::create(['code'=>'752215','occupation'=>'Gravador de vidro a água-forte','filter'=>'gravador de vidro a água-forte',]);

        CompanyOccupationsModel::create(['code'=>'752220','occupation'=>'Gravador de vidro a esmeril','filter'=>'gravador de vidro a esmeril',]);

        CompanyOccupationsModel::create(['code'=>'752225','occupation'=>'Gravador de vidro a jato de areia','filter'=>'gravador de vidro a jato de areia',]);

        CompanyOccupationsModel::create(['code'=>'752230','occupation'=>'Lapidador de vidros e cristais','filter'=>'lapidador de vidros e cristais',]);

        CompanyOccupationsModel::create(['code'=>'752235','occupation'=>'Surfassagista','filter'=>'surfassagista',]);

        CompanyOccupationsModel::create(['code'=>'752305','occupation'=>'Ceramista','filter'=>'ceramista',]);

        CompanyOccupationsModel::create(['code'=>'752310','occupation'=>'Ceramista (torno de pedal e motor)','filter'=>'ceramista (torno de pedal e motor)',]);

        CompanyOccupationsModel::create(['code'=>'752315','occupation'=>'Ceramista (torno semi-automático)','filter'=>'ceramista (torno semi-automático)',]);

        CompanyOccupationsModel::create(['code'=>'752320','occupation'=>'Ceramista modelador','filter'=>'ceramista modelador',]);

        CompanyOccupationsModel::create(['code'=>'752325','occupation'=>'Ceramista moldador','filter'=>'ceramista moldador',]);

        CompanyOccupationsModel::create(['code'=>'752330','occupation'=>'Ceramista prensador','filter'=>'ceramista prensador',]);

        CompanyOccupationsModel::create(['code'=>'752405','occupation'=>'Decorador de cerâmica','filter'=>'decorador de cerâmica',]);

        CompanyOccupationsModel::create(['code'=>'752410','occupation'=>'Decorador de vidro','filter'=>'decorador de vidro',]);

        CompanyOccupationsModel::create(['code'=>'752415','occupation'=>'Decorador de vidro à pincel','filter'=>'decorador de vidro à pincel',]);

        CompanyOccupationsModel::create(['code'=>'752420','occupation'=>'Operador de esmaltadeira','filter'=>'operador de esmaltadeira',]);

        CompanyOccupationsModel::create(['code'=>'752425','occupation'=>'Operador de espelhamento','filter'=>'operador de espelhamento',]);

        CompanyOccupationsModel::create(['code'=>'752430','occupation'=>'Pintor de cerâmica, a pincel','filter'=>'pintor de cerâmica, a pincel',]);

        CompanyOccupationsModel::create(['code'=>'760105','occupation'=>'Contramestre de acabamento (indústria têxtil)','filter'=>'contramestre de acabamento (indústria têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'760110','occupation'=>'Contramestre de fiação (indústria têxtil)','filter'=>'contramestre de fiação (indústria têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'760115','occupation'=>'Contramestre de malharia (indústria têxtil)','filter'=>'contramestre de malharia (indústria têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'760120','occupation'=>'Contramestre de tecelagem (indústria têxtil)','filter'=>'contramestre de tecelagem (indústria têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'760125','occupation'=>'Mestre (indústria têxtil e de confecções)','filter'=>'mestre (indústria têxtil e de confecções)',]);

        CompanyOccupationsModel::create(['code'=>'760205','occupation'=>'Supervisor de curtimento','filter'=>'supervisor de curtimento',]);

        CompanyOccupationsModel::create(['code'=>'760305','occupation'=>'Encarregado de corte na confecção do vestuário','filter'=>'encarregado de corte na confecção do vestuário',]);

        CompanyOccupationsModel::create(['code'=>'760310','occupation'=>'Encarregado de costura na confecção do vestuário','filter'=>'encarregado de costura na confecção do vestuário',]);

        CompanyOccupationsModel::create(['code'=>'760405','occupation'=>'Supervisor (indústria de calçados e artefatos de couro)','filter'=>'supervisor (indústria de calçados e artefatos de couro)',]);

        CompanyOccupationsModel::create(['code'=>'760505','occupation'=>'Supervisor da confecção de artefatos de tecidos, couros e afins','filter'=>'supervisor da confecção de artefatos de tecidos, couros e afins',]);

        CompanyOccupationsModel::create(['code'=>'760605','occupation'=>'Supervisor das artes gráficas (indústria editorial e gráfica)','filter'=>'supervisor das artes gráficas (indústria editorial e gráfica)',]);

        CompanyOccupationsModel::create(['code'=>'761005','occupation'=>'Operador polivalente da indústria têxtil','filter'=>'operador polivalente da indústria têxtil',]);

        CompanyOccupationsModel::create(['code'=>'761105','occupation'=>'Classificador de fibras têxteis','filter'=>'classificador de fibras têxteis',]);

        CompanyOccupationsModel::create(['code'=>'761110','occupation'=>'Lavador de lã','filter'=>'lavador de lã',]);

        CompanyOccupationsModel::create(['code'=>'761205','occupation'=>'Operador de abertura (fiação)','filter'=>'operador de abertura (fiação)',]);

        CompanyOccupationsModel::create(['code'=>'761210','occupation'=>'Operador de binadeira','filter'=>'operador de binadeira',]);

        CompanyOccupationsModel::create(['code'=>'761215','occupation'=>'Operador de bobinadeira','filter'=>'operador de bobinadeira',]);

        CompanyOccupationsModel::create(['code'=>'761220','occupation'=>'Operador de cardas','filter'=>'operador de cardas',]);

        CompanyOccupationsModel::create(['code'=>'761225','occupation'=>'Operador de conicaleira','filter'=>'operador de conicaleira',]);

        CompanyOccupationsModel::create(['code'=>'761230','occupation'=>'Operador de filatório','filter'=>'operador de filatório',]);

        CompanyOccupationsModel::create(['code'=>'761235','occupation'=>'Operador de laminadeira e reunideira','filter'=>'operador de laminadeira e reunideira',]);

        CompanyOccupationsModel::create(['code'=>'761240','occupation'=>'Operador de maçaroqueira','filter'=>'operador de maçaroqueira',]);

        CompanyOccupationsModel::create(['code'=>'761245','occupation'=>'Operador de open-end','filter'=>'operador de open-end',]);

        CompanyOccupationsModel::create(['code'=>'761250','occupation'=>'Operador de passador (fiação)','filter'=>'operador de passador (fiação)',]);

        CompanyOccupationsModel::create(['code'=>'761255','occupation'=>'Operador de penteadeira','filter'=>'operador de penteadeira',]);

        CompanyOccupationsModel::create(['code'=>'761260','occupation'=>'Operador de retorcedeira','filter'=>'operador de retorcedeira',]);

        CompanyOccupationsModel::create(['code'=>'761303','occupation'=>'Tecelão (redes)','filter'=>'tecelão (redes)',]);

        CompanyOccupationsModel::create(['code'=>'761306','occupation'=>'Tecelão (rendas e bordados)','filter'=>'tecelão (rendas e bordados)',]);

        CompanyOccupationsModel::create(['code'=>'761309','occupation'=>'Tecelão (tear automático)','filter'=>'tecelão (tear automático)',]);

        CompanyOccupationsModel::create(['code'=>'761312','occupation'=>'Tecelão (tear jacquard)','filter'=>'tecelão (tear jacquard)',]);

        CompanyOccupationsModel::create(['code'=>'761315','occupation'=>'Tecelão (tear mecânico de maquineta)','filter'=>'tecelão (tear mecânico de maquineta)',]);

        CompanyOccupationsModel::create(['code'=>'761318','occupation'=>'Tecelão (tear mecânico de xadrez)','filter'=>'tecelão (tear mecânico de xadrez)',]);

        CompanyOccupationsModel::create(['code'=>'761321','occupation'=>'Tecelão (tear mecânico liso)','filter'=>'tecelão (tear mecânico liso)',]);

        CompanyOccupationsModel::create(['code'=>'761324','occupation'=>'Tecelão (tear mecânico, exceto jacquard)','filter'=>'tecelão (tear mecânico, exceto jacquard)',]);

        CompanyOccupationsModel::create(['code'=>'761327','occupation'=>'Tecelão de malhas, a máquina','filter'=>'tecelão de malhas, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'761330','occupation'=>'Tecelão de malhas (máquina circular)','filter'=>'tecelão de malhas (máquina circular)',]);

        CompanyOccupationsModel::create(['code'=>'761333','occupation'=>'Tecelão de malhas (máquina retilínea)','filter'=>'tecelão de malhas (máquina retilínea)',]);

        CompanyOccupationsModel::create(['code'=>'761336','occupation'=>'Tecelão de meias, a máquina','filter'=>'tecelão de meias, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'761339','occupation'=>'Tecelão de meias (máquina circular)','filter'=>'tecelão de meias (máquina circular)',]);

        CompanyOccupationsModel::create(['code'=>'761342','occupation'=>'Tecelão de meias (máquina retilínea)','filter'=>'tecelão de meias (máquina retilínea)',]);

        CompanyOccupationsModel::create(['code'=>'761345','occupation'=>'Tecelão de tapetes, a máquina','filter'=>'tecelão de tapetes, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'761348','occupation'=>'Operador de engomadeira de urdume','filter'=>'operador de engomadeira de urdume',]);

        CompanyOccupationsModel::create(['code'=>'761351','occupation'=>'Operador de espuladeira','filter'=>'operador de espuladeira',]);

        CompanyOccupationsModel::create(['code'=>'761354','occupation'=>'Operador de máquina de cordoalha','filter'=>'operador de máquina de cordoalha',]);

        CompanyOccupationsModel::create(['code'=>'761357','occupation'=>'Operador de urdideira','filter'=>'operador de urdideira',]);

        CompanyOccupationsModel::create(['code'=>'761360','occupation'=>'Passamaneiro a máquina','filter'=>'passamaneiro a máquina',]);

        CompanyOccupationsModel::create(['code'=>'761363','occupation'=>'Remetedor de fios','filter'=>'remetedor de fios',]);

        CompanyOccupationsModel::create(['code'=>'761366','occupation'=>'Picotador de cartões jacquard','filter'=>'picotador de cartões jacquard',]);

        CompanyOccupationsModel::create(['code'=>'761405','occupation'=>'Alvejador (tecidos)','filter'=>'alvejador (tecidos)',]);

        CompanyOccupationsModel::create(['code'=>'761410','occupation'=>'Estampador de tecido','filter'=>'estampador de tecido',]);

        CompanyOccupationsModel::create(['code'=>'761415','occupation'=>'Operador de calandras (tecidos)','filter'=>'operador de calandras (tecidos)',]);

        CompanyOccupationsModel::create(['code'=>'761420','occupation'=>'Operador de chamuscadeira de tecidos','filter'=>'operador de chamuscadeira de tecidos',]);

        CompanyOccupationsModel::create(['code'=>'761425','occupation'=>'Operador de impermeabilizador de tecidos','filter'=>'operador de impermeabilizador de tecidos',]);

        CompanyOccupationsModel::create(['code'=>'761430','occupation'=>'Operador de máquina de lavar fios e tecidos','filter'=>'operador de máquina de lavar fios e tecidos',]);

        CompanyOccupationsModel::create(['code'=>'761435','occupation'=>'Operador de rameuse','filter'=>'operador de rameuse',]);

        CompanyOccupationsModel::create(['code'=>'761805','occupation'=>'Inspetor de estamparia (produção têxtil)','filter'=>'inspetor de estamparia (produção têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'761810','occupation'=>'Revisor de fios (produção têxtil)','filter'=>'revisor de fios (produção têxtil)',]);

        CompanyOccupationsModel::create(['code'=>'761815','occupation'=>'Revisor de tecidos acabados','filter'=>'revisor de tecidos acabados',]);

        CompanyOccupationsModel::create(['code'=>'761820','occupation'=>'Revisor de tecidos crus','filter'=>'revisor de tecidos crus',]);

        CompanyOccupationsModel::create(['code'=>'762005','occupation'=>'Trabalhador polivalente do curtimento de couros e peles','filter'=>'trabalhador polivalente do curtimento de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762105','occupation'=>'Classificador de peles','filter'=>'classificador de peles',]);

        CompanyOccupationsModel::create(['code'=>'762110','occupation'=>'Descarnador de couros e peles, à maquina','filter'=>'descarnador de couros e peles, à maquina',]);

        CompanyOccupationsModel::create(['code'=>'762115','occupation'=>'Estirador de couros e peles (preparação)','filter'=>'estirador de couros e peles (preparação)',]);

        CompanyOccupationsModel::create(['code'=>'762120','occupation'=>'Fuloneiro','filter'=>'fuloneiro',]);

        CompanyOccupationsModel::create(['code'=>'762125','occupation'=>'Rachador de couros e peles','filter'=>'rachador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762205','occupation'=>'Curtidor (couros e peles)','filter'=>'curtidor (couros e peles)',]);

        CompanyOccupationsModel::create(['code'=>'762210','occupation'=>'Classificador de couros','filter'=>'classificador de couros',]);

        CompanyOccupationsModel::create(['code'=>'762215','occupation'=>'Enxugador de couros','filter'=>'enxugador de couros',]);

        CompanyOccupationsModel::create(['code'=>'762220','occupation'=>'Rebaixador de couros','filter'=>'rebaixador de couros',]);

        CompanyOccupationsModel::create(['code'=>'762305','occupation'=>'Estirador de couros e peles (acabamento)','filter'=>'estirador de couros e peles (acabamento)',]);

        CompanyOccupationsModel::create(['code'=>'762310','occupation'=>'Fuloneiro no acabamento de couros e peles','filter'=>'fuloneiro no acabamento de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762315','occupation'=>'Lixador de couros e peles','filter'=>'lixador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762320','occupation'=>'Matizador de couros e peles','filter'=>'matizador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762325','occupation'=>'Operador de máquinas do acabamento de couros e peles','filter'=>'operador de máquinas do acabamento de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762330','occupation'=>'Prensador de couros e peles','filter'=>'prensador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762335','occupation'=>'Palecionador de couros e peles','filter'=>'palecionador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'762340','occupation'=>'Preparador de couros curtidos','filter'=>'preparador de couros curtidos',]);

        CompanyOccupationsModel::create(['code'=>'762345','occupation'=>'Vaqueador de couros e peles','filter'=>'vaqueador de couros e peles',]);

        CompanyOccupationsModel::create(['code'=>'763005','occupation'=>'Alfaiate','filter'=>'alfaiate',]);

        CompanyOccupationsModel::create(['code'=>'763010','occupation'=>'Costureira de peças sob encomenda','filter'=>'costureira de peças sob encomenda',]);

        CompanyOccupationsModel::create(['code'=>'763015','occupation'=>'Costureira de reparação de roupas','filter'=>'costureira de reparação de roupas',]);

        CompanyOccupationsModel::create(['code'=>'763020','occupation'=>'Costureiro de roupa de couro e pele','filter'=>'costureiro de roupa de couro e pele',]);

        CompanyOccupationsModel::create(['code'=>'763105','occupation'=>'Auxiliar de corte (preparação da confecção de roupas)','filter'=>'auxiliar de corte (preparação da confecção de roupas)',]);

        CompanyOccupationsModel::create(['code'=>'763110','occupation'=>'Cortador de roupas','filter'=>'cortador de roupas',]);

        CompanyOccupationsModel::create(['code'=>'763115','occupation'=>'Enfestador de roupas','filter'=>'enfestador de roupas',]);

        CompanyOccupationsModel::create(['code'=>'763120','occupation'=>'Riscador de roupas','filter'=>'riscador de roupas',]);

        CompanyOccupationsModel::create(['code'=>'763125','occupation'=>'Ajudante de confecção','filter'=>'ajudante de confecção',]);

        CompanyOccupationsModel::create(['code'=>'763205','occupation'=>'Costureiro de roupas de couro e pele, a máquina na confecção em série','filter'=>'costureiro de roupas de couro e pele, a máquina na confecção em série',]);

        CompanyOccupationsModel::create(['code'=>'763210','occupation'=>'Costureiro na confecção em série','filter'=>'costureiro na confecção em série',]);

        CompanyOccupationsModel::create(['code'=>'763215','occupation'=>'Costureiro, a máquina na confecção em série','filter'=>'costureiro, a máquina na confecção em série',]);

        CompanyOccupationsModel::create(['code'=>'763305','occupation'=>'Arrematadeira','filter'=>'arrematadeira',]);

        CompanyOccupationsModel::create(['code'=>'763310','occupation'=>'Bordador, à máquina','filter'=>'bordador, à máquina',]);

        CompanyOccupationsModel::create(['code'=>'763315','occupation'=>'Marcador de peças confeccionadas para bordar','filter'=>'marcador de peças confeccionadas para bordar',]);

        CompanyOccupationsModel::create(['code'=>'763320','occupation'=>'Operador de máquina de costura de acabamento','filter'=>'operador de máquina de costura de acabamento',]);

        CompanyOccupationsModel::create(['code'=>'763325','occupation'=>'Passadeira de peças confeccionadas','filter'=>'passadeira de peças confeccionadas',]);

        CompanyOccupationsModel::create(['code'=>'764005','occupation'=>'Trabalhador polivalente da confecção de calçados','filter'=>'trabalhador polivalente da confecção de calçados',]);

        CompanyOccupationsModel::create(['code'=>'764105','occupation'=>'Cortador de calçados, a máquina (exceto solas e palmilhas)','filter'=>'cortador de calçados, a máquina (exceto solas e palmilhas)',]);

        CompanyOccupationsModel::create(['code'=>'764110','occupation'=>'Cortador de solas e palmilhas, a máquina','filter'=>'cortador de solas e palmilhas, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'764115','occupation'=>'Preparador de calçados','filter'=>'preparador de calçados',]);

        CompanyOccupationsModel::create(['code'=>'764120','occupation'=>'Preparador de solas e palmilhas','filter'=>'preparador de solas e palmilhas',]);

        CompanyOccupationsModel::create(['code'=>'764205','occupation'=>'Costurador de calçados, a máquina','filter'=>'costurador de calçados, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'764210','occupation'=>'Montador de calçados','filter'=>'montador de calçados',]);

        CompanyOccupationsModel::create(['code'=>'764305','occupation'=>'Acabador de calçados','filter'=>'acabador de calçados',]);

        CompanyOccupationsModel::create(['code'=>'765005','occupation'=>'Confeccionador de artefatos de couro (exceto sapatos)','filter'=>'confeccionador de artefatos de couro (exceto sapatos)',]);

        CompanyOccupationsModel::create(['code'=>'765010','occupation'=>'Chapeleiro de senhoras','filter'=>'chapeleiro de senhoras',]);

        CompanyOccupationsModel::create(['code'=>'765015','occupation'=>'Boneleiro','filter'=>'boneleiro',]);

        CompanyOccupationsModel::create(['code'=>'765105','occupation'=>'Cortador de artefatos de couro (exceto roupas e calçados)','filter'=>'cortador de artefatos de couro (exceto roupas e calçados)',]);

        CompanyOccupationsModel::create(['code'=>'765110','occupation'=>'Cortador de tapeçaria','filter'=>'cortador de tapeçaria',]);

        CompanyOccupationsModel::create(['code'=>'765205','occupation'=>'Colchoeiro (confecção de colchões)','filter'=>'colchoeiro (confecção de colchões)',]);

        CompanyOccupationsModel::create(['code'=>'765215','occupation'=>'Confeccionador de brinquedos de pano','filter'=>'confeccionador de brinquedos de pano',]);

        CompanyOccupationsModel::create(['code'=>'765225','occupation'=>'Confeccionador de velas náuticas, barracas e toldos','filter'=>'confeccionador de velas náuticas, barracas e toldos',]);

        CompanyOccupationsModel::create(['code'=>'765230','occupation'=>'Estofador de aviões','filter'=>'estofador de aviões',]);

        CompanyOccupationsModel::create(['code'=>'765235','occupation'=>'Estofador de móveis','filter'=>'estofador de móveis',]);

        CompanyOccupationsModel::create(['code'=>'765240','occupation'=>'Tapeceiro de autos','filter'=>'tapeceiro de autos',]);

        CompanyOccupationsModel::create(['code'=>'765310','occupation'=>'Costurador de artefatos de couro, a máquina (exceto roupas e calçados)','filter'=>'costurador de artefatos de couro, a máquina (exceto roupas e calçados)',]);

        CompanyOccupationsModel::create(['code'=>'765315','occupation'=>'Montador de artefatos de couro (exceto roupas e calçados)','filter'=>'montador de artefatos de couro (exceto roupas e calçados)',]);

        CompanyOccupationsModel::create(['code'=>'765405','occupation'=>'Trabalhador do acabamento de artefatos de tecidos e couros','filter'=>'trabalhador do acabamento de artefatos de tecidos e couros',]);

        CompanyOccupationsModel::create(['code'=>'766105','occupation'=>'Copiador de chapa','filter'=>'copiador de chapa',]);

        CompanyOccupationsModel::create(['code'=>'766115','occupation'=>'Gravador de matriz para flexografia (clicherista)','filter'=>'gravador de matriz para flexografia (clicherista)',]);

        CompanyOccupationsModel::create(['code'=>'766120','occupation'=>'Editor de texto e imagem','filter'=>'editor de texto e imagem',]);

        CompanyOccupationsModel::create(['code'=>'766125','occupation'=>'Montador de fotolito (analógico e digital)','filter'=>'montador de fotolito (analógico e digital)',]);

        CompanyOccupationsModel::create(['code'=>'766130','occupation'=>'Gravador de matriz para rotogravura (eletromecânico e químico)','filter'=>'gravador de matriz para rotogravura (eletromecânico e químico)',]);

        CompanyOccupationsModel::create(['code'=>'766135','occupation'=>'Gravador de matriz calcográfica','filter'=>'gravador de matriz calcográfica',]);

        CompanyOccupationsModel::create(['code'=>'766140','occupation'=>'Gravador de matriz serigráfica','filter'=>'gravador de matriz serigráfica',]);

        CompanyOccupationsModel::create(['code'=>'766145','occupation'=>'Operador de sistemas de prova (analógico e digital)','filter'=>'operador de sistemas de prova (analógico e digital)',]);

        CompanyOccupationsModel::create(['code'=>'766150','occupation'=>'Operador de processo de tratamento de imagem','filter'=>'operador de processo de tratamento de imagem',]);

        CompanyOccupationsModel::create(['code'=>'766155','occupation'=>'Programador visual gráfico','filter'=>'programador visual gráfico',]);

        CompanyOccupationsModel::create(['code'=>'766205','occupation'=>'Impressor (serigrafia)','filter'=>'impressor (serigrafia)',]);

        CompanyOccupationsModel::create(['code'=>'766210','occupation'=>'Impressor calcográfico','filter'=>'impressor calcográfico',]);

        CompanyOccupationsModel::create(['code'=>'766215','occupation'=>'Impressor de ofsete (plano e rotativo)','filter'=>'impressor de ofsete (plano e rotativo)',]);

        CompanyOccupationsModel::create(['code'=>'766220','occupation'=>'Impressor de rotativa','filter'=>'impressor de rotativa',]);

        CompanyOccupationsModel::create(['code'=>'766225','occupation'=>'Impressor de rotogravura','filter'=>'impressor de rotogravura',]);

        CompanyOccupationsModel::create(['code'=>'766230','occupation'=>'Impressor digital','filter'=>'impressor digital',]);

        CompanyOccupationsModel::create(['code'=>'766235','occupation'=>'Impressor flexográfico','filter'=>'impressor flexográfico',]);

        CompanyOccupationsModel::create(['code'=>'766240','occupation'=>'Impressor letterset','filter'=>'impressor letterset',]);

        CompanyOccupationsModel::create(['code'=>'766245','occupation'=>'Impressor tampográfico','filter'=>'impressor tampográfico',]);

        CompanyOccupationsModel::create(['code'=>'766250','occupation'=>'Impressor tipográfico','filter'=>'impressor tipográfico',]);

        CompanyOccupationsModel::create(['code'=>'766305','occupation'=>'Acabador de embalagens (flexíveis e cartotécnicas)','filter'=>'acabador de embalagens (flexíveis e cartotécnicas)',]);

        CompanyOccupationsModel::create(['code'=>'766310','occupation'=>'Impressor de corte e vinco','filter'=>'impressor de corte e vinco',]);

        CompanyOccupationsModel::create(['code'=>'766315','occupation'=>'Operador de acabamento (indústria gráfica)','filter'=>'operador de acabamento (indústria gráfica)',]);

        CompanyOccupationsModel::create(['code'=>'766320','occupation'=>'Operador de guilhotina (corte de papel)','filter'=>'operador de guilhotina (corte de papel)',]);

        CompanyOccupationsModel::create(['code'=>'766325','occupation'=>'Preparador de matrizes de corte e vinco','filter'=>'preparador de matrizes de corte e vinco',]);

        CompanyOccupationsModel::create(['code'=>'766405','occupation'=>'Laboratorista fotográfico','filter'=>'laboratorista fotográfico',]);

        CompanyOccupationsModel::create(['code'=>'766410','occupation'=>'Revelador de filmes fotográficos, em preto e branco','filter'=>'revelador de filmes fotográficos, em preto e branco',]);

        CompanyOccupationsModel::create(['code'=>'766415','occupation'=>'Revelador de filmes fotográficos, em cores','filter'=>'revelador de filmes fotográficos, em cores',]);

        CompanyOccupationsModel::create(['code'=>'766420','occupation'=>'Auxiliar de radiologia (revelação fotográfica)','filter'=>'auxiliar de radiologia (revelação fotográfica)',]);

        CompanyOccupationsModel::create(['code'=>'768105','occupation'=>'Tecelão (tear manual)','filter'=>'tecelão (tear manual)',]);

        CompanyOccupationsModel::create(['code'=>'768110','occupation'=>'Tecelão de tapetes, a mão','filter'=>'tecelão de tapetes, a mão',]);

        CompanyOccupationsModel::create(['code'=>'768115','occupation'=>'Tricoteiro, à mão','filter'=>'tricoteiro, à mão',]);

        CompanyOccupationsModel::create(['code'=>'768120','occupation'=>'Redeiro','filter'=>'redeiro',]);

        CompanyOccupationsModel::create(['code'=>'768125','occupation'=>'Chapeleiro (chapéus de palha)','filter'=>'chapeleiro (chapéus de palha)',]);

        CompanyOccupationsModel::create(['code'=>'768130','occupation'=>'Crocheteiro, a mão','filter'=>'crocheteiro, a mão',]);

        CompanyOccupationsModel::create(['code'=>'768205','occupation'=>'Bordador, a mão','filter'=>'bordador, a mão',]);

        CompanyOccupationsModel::create(['code'=>'768210','occupation'=>'Cerzidor','filter'=>'cerzidor',]);

        CompanyOccupationsModel::create(['code'=>'768305','occupation'=>'Artífice do couro','filter'=>'artífice do couro',]);

        CompanyOccupationsModel::create(['code'=>'768310','occupation'=>'Cortador de calçados, a mão (exceto solas)','filter'=>'cortador de calçados, a mão (exceto solas)',]);

        CompanyOccupationsModel::create(['code'=>'768315','occupation'=>'Costurador de artefatos de couro, a mão (exceto roupas e calçados)','filter'=>'costurador de artefatos de couro, a mão (exceto roupas e calçados)',]);

        CompanyOccupationsModel::create(['code'=>'768320','occupation'=>'Sapateiro (calçados sob medida)','filter'=>'sapateiro (calçados sob medida)',]);

        CompanyOccupationsModel::create(['code'=>'768325','occupation'=>'Seleiro','filter'=>'seleiro',]);

        CompanyOccupationsModel::create(['code'=>'768605','occupation'=>'Tipógrafo','filter'=>'tipógrafo',]);

        CompanyOccupationsModel::create(['code'=>'768610','occupation'=>'Linotipista','filter'=>'linotipista',]);

        CompanyOccupationsModel::create(['code'=>'768615','occupation'=>'Monotipista','filter'=>'monotipista',]);

        CompanyOccupationsModel::create(['code'=>'768620','occupation'=>'Paginador','filter'=>'paginador',]);

        CompanyOccupationsModel::create(['code'=>'768625','occupation'=>'Pintor de letreiros','filter'=>'pintor de letreiros',]);

        CompanyOccupationsModel::create(['code'=>'768630','occupation'=>'Confeccionador de carimbos de borracha','filter'=>'confeccionador de carimbos de borracha',]);

        CompanyOccupationsModel::create(['code'=>'768705','occupation'=>'Gravador, à mão (encadernação)','filter'=>'gravador, à mão (encadernação)',]);

        CompanyOccupationsModel::create(['code'=>'768710','occupation'=>'Restaurador de livros','filter'=>'restaurador de livros',]);

        CompanyOccupationsModel::create(['code'=>'770105','occupation'=>'Mestre (indústria de madeira e mobiliário)','filter'=>'mestre (indústria de madeira e mobiliário)',]);

        CompanyOccupationsModel::create(['code'=>'770110','occupation'=>'Mestre carpinteiro','filter'=>'mestre carpinteiro',]);

        CompanyOccupationsModel::create(['code'=>'771105','occupation'=>'Marceneiro','filter'=>'marceneiro',]);

        CompanyOccupationsModel::create(['code'=>'771110','occupation'=>'Modelador de madeira','filter'=>'modelador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'771115','occupation'=>'Maquetista na marcenaria','filter'=>'maquetista na marcenaria',]);

        CompanyOccupationsModel::create(['code'=>'771120','occupation'=>'Tanoeiro','filter'=>'tanoeiro',]);

        CompanyOccupationsModel::create(['code'=>'772105','occupation'=>'Classificador de madeira','filter'=>'classificador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'772110','occupation'=>'Impregnador de madeira','filter'=>'impregnador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'772115','occupation'=>'Secador de madeira','filter'=>'secador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773105','occupation'=>'Cortador de laminados de madeira','filter'=>'cortador de laminados de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773110','occupation'=>'Operador de serras no desdobramento de madeira','filter'=>'operador de serras no desdobramento de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773115','occupation'=>'Serrador de bordas no desdobramento de madeira','filter'=>'serrador de bordas no desdobramento de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773120','occupation'=>'Serrador de madeira','filter'=>'serrador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773125','occupation'=>'Serrador de madeira (serra circular múltipla)','filter'=>'serrador de madeira (serra circular múltipla)',]);

        CompanyOccupationsModel::create(['code'=>'773130','occupation'=>'Serrador de madeira (serra de fita múltipla)','filter'=>'serrador de madeira (serra de fita múltipla)',]);

        CompanyOccupationsModel::create(['code'=>'773205','occupation'=>'Operador de máquina intercaladora de placas (compensados)','filter'=>'operador de máquina intercaladora de placas (compensados)',]);

        CompanyOccupationsModel::create(['code'=>'773210','occupation'=>'Prensista de aglomerados','filter'=>'prensista de aglomerados',]);

        CompanyOccupationsModel::create(['code'=>'773215','occupation'=>'Prensista de compensados','filter'=>'prensista de compensados',]);

        CompanyOccupationsModel::create(['code'=>'773220','occupation'=>'Preparador de aglomerantes','filter'=>'preparador de aglomerantes',]);

        CompanyOccupationsModel::create(['code'=>'773305','occupation'=>'Operador de desempenadeira na usinagem convencional de madeira','filter'=>'operador de desempenadeira na usinagem convencional de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773310','occupation'=>'Operador de entalhadeira (usinagem de madeira)','filter'=>'operador de entalhadeira (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773315','occupation'=>'Operador de fresadora (usinagem de madeira)','filter'=>'operador de fresadora (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773320','occupation'=>'Operador de lixadeira (usinagem de madeira)','filter'=>'operador de lixadeira (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773325','occupation'=>'Operador de máquina de usinagem madeira, em geral','filter'=>'operador de máquina de usinagem madeira, em geral',]);

        CompanyOccupationsModel::create(['code'=>'773330','occupation'=>'Operador de molduradora (usinagem de madeira)','filter'=>'operador de molduradora (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773335','occupation'=>'Operador de plaina desengrossadeira','filter'=>'operador de plaina desengrossadeira',]);

        CompanyOccupationsModel::create(['code'=>'773340','occupation'=>'Operador de serras (usinagem de madeira)','filter'=>'operador de serras (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773345','occupation'=>'Operador de torno automático (usinagem de madeira)','filter'=>'operador de torno automático (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773350','occupation'=>'Operador de tupia (usinagem de madeira)','filter'=>'operador de tupia (usinagem de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'773355','occupation'=>'Torneiro na usinagem convencional de madeira','filter'=>'torneiro na usinagem convencional de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773405','occupation'=>'Operador de máquina bordatriz','filter'=>'operador de máquina bordatriz',]);

        CompanyOccupationsModel::create(['code'=>'773410','occupation'=>'Operador de máquina de cortina d´água (produção de móveis)','filter'=>'operador de máquina de cortina d´água (produção de móveis)',]);

        CompanyOccupationsModel::create(['code'=>'773415','occupation'=>'Operador de máquina de usinagem de madeira (produção em série)','filter'=>'operador de máquina de usinagem de madeira (produção em série)',]);

        CompanyOccupationsModel::create(['code'=>'773420','occupation'=>'Operador de prensa de alta freqüência na usinagem de madeira','filter'=>'operador de prensa de alta freqüência na usinagem de madeira',]);

        CompanyOccupationsModel::create(['code'=>'773505','occupation'=>'Operador de centro de usinagem de madeira (cnc)','filter'=>'operador de centro de usinagem de madeira (cnc)',]);

        CompanyOccupationsModel::create(['code'=>'773510','occupation'=>'Operador de máquinas de usinar madeira (cnc)','filter'=>'operador de máquinas de usinar madeira (cnc)',]);

        CompanyOccupationsModel::create(['code'=>'774105','occupation'=>'Montador de móveis e artefatos de madeira','filter'=>'montador de móveis e artefatos de madeira',]);

        CompanyOccupationsModel::create(['code'=>'775105','occupation'=>'Entalhador de madeira','filter'=>'entalhador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'775110','occupation'=>'Folheador de móveis de madeira','filter'=>'folheador de móveis de madeira',]);

        CompanyOccupationsModel::create(['code'=>'775115','occupation'=>'Lustrador de peças de madeira','filter'=>'lustrador de peças de madeira',]);

        CompanyOccupationsModel::create(['code'=>'775120','occupation'=>'Marcheteiro','filter'=>'marcheteiro',]);

        CompanyOccupationsModel::create(['code'=>'776405','occupation'=>'Cesteiro','filter'=>'cesteiro',]);

        CompanyOccupationsModel::create(['code'=>'776410','occupation'=>'Confeccionador de escovas, pincéis e produtos similares (a mão)','filter'=>'confeccionador de escovas, pincéis e produtos similares (a mão)',]);

        CompanyOccupationsModel::create(['code'=>'776415','occupation'=>'Confeccionador de escovas, pincéis e produtos similares (a máquina)','filter'=>'confeccionador de escovas, pincéis e produtos similares (a máquina)',]);

        CompanyOccupationsModel::create(['code'=>'776420','occupation'=>'Confeccionador de móveis de vime, junco e bambu','filter'=>'confeccionador de móveis de vime, junco e bambu',]);

        CompanyOccupationsModel::create(['code'=>'776425','occupation'=>'Esteireiro','filter'=>'esteireiro',]);

        CompanyOccupationsModel::create(['code'=>'776430','occupation'=>'Vassoureiro','filter'=>'vassoureiro',]);

        CompanyOccupationsModel::create(['code'=>'777105','occupation'=>'Carpinteiro naval (construção de pequenas embarcações)','filter'=>'carpinteiro naval (construção de pequenas embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'777110','occupation'=>'Carpinteiro naval (embarcações)','filter'=>'carpinteiro naval (embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'777115','occupation'=>'Carpinteiro naval (estaleiros)','filter'=>'carpinteiro naval (estaleiros)',]);

        CompanyOccupationsModel::create(['code'=>'777205','occupation'=>'Carpinteiro de carretas','filter'=>'carpinteiro de carretas',]);

        CompanyOccupationsModel::create(['code'=>'777210','occupation'=>'Carpinteiro de carrocerias','filter'=>'carpinteiro de carrocerias',]);

        CompanyOccupationsModel::create(['code'=>'780105','occupation'=>'Supervisor de embalagem e etiquetagem','filter'=>'supervisor de embalagem e etiquetagem',]);

        CompanyOccupationsModel::create(['code'=>'781105','occupation'=>'Condutor de processos robotizados de pintura','filter'=>'condutor de processos robotizados de pintura',]);

        CompanyOccupationsModel::create(['code'=>'781110','occupation'=>'Condutor de processos robotizados de soldagem','filter'=>'condutor de processos robotizados de soldagem',]);

        CompanyOccupationsModel::create(['code'=>'781305','occupation'=>'Operador de veículos subaquáticos controlados remotamente','filter'=>'operador de veículos subaquáticos controlados remotamente',]);

        CompanyOccupationsModel::create(['code'=>'781310','occupation'=>'Operador de aeronaves não tripuladas','filter'=>'operador de aeronaves não tripuladas',]);

        CompanyOccupationsModel::create(['code'=>'781705','occupation'=>'Mergulhador profissional (raso e profundo)','filter'=>'mergulhador profissional (raso e profundo)',]);

        CompanyOccupationsModel::create(['code'=>'782105','occupation'=>'Operador de draga','filter'=>'operador de draga',]);

        CompanyOccupationsModel::create(['code'=>'782110','occupation'=>'Operador de guindaste (fixo)','filter'=>'operador de guindaste (fixo)',]);

        CompanyOccupationsModel::create(['code'=>'782115','occupation'=>'Operador de guindaste móvel','filter'=>'operador de guindaste móvel',]);

        CompanyOccupationsModel::create(['code'=>'782120','occupation'=>'Operador de máquina rodoferroviária','filter'=>'operador de máquina rodoferroviária',]);

        CompanyOccupationsModel::create(['code'=>'782125','occupation'=>'Operador de monta-cargas (construção civil)','filter'=>'operador de monta-cargas (construção civil)',]);

        CompanyOccupationsModel::create(['code'=>'782130','occupation'=>'Operador de ponte rolante','filter'=>'operador de ponte rolante',]);

        CompanyOccupationsModel::create(['code'=>'782135','occupation'=>'Operador de pórtico rolante','filter'=>'operador de pórtico rolante',]);

        CompanyOccupationsModel::create(['code'=>'782140','occupation'=>'Operador de talha elétrica','filter'=>'operador de talha elétrica',]);

        CompanyOccupationsModel::create(['code'=>'782145','occupation'=>'Sinaleiro (ponte-rolante)','filter'=>'sinaleiro (ponte-rolante)',]);

        CompanyOccupationsModel::create(['code'=>'782205','occupation'=>'Guincheiro (construção civil)','filter'=>'guincheiro (construção civil)',]);

        CompanyOccupationsModel::create(['code'=>'782210','occupation'=>'Operador de docagem','filter'=>'operador de docagem',]);

        CompanyOccupationsModel::create(['code'=>'782220','occupation'=>'Operador de empilhadeira','filter'=>'operador de empilhadeira',]);

        CompanyOccupationsModel::create(['code'=>'782305','occupation'=>'Motorista de carro de passeio','filter'=>'motorista de carro de passeio',]);

        CompanyOccupationsModel::create(['code'=>'782310','occupation'=>'Motorista de furgão ou veículo similar','filter'=>'motorista de furgão ou veículo similar',]);

        CompanyOccupationsModel::create(['code'=>'782315','occupation'=>'Motorista de táxi','filter'=>'motorista de táxi',]);

        CompanyOccupationsModel::create(['code'=>'782320','occupation'=>'Condutor de ambulância','filter'=>'condutor de ambulância',]);

        CompanyOccupationsModel::create(['code'=>'782405','occupation'=>'Motorista de ônibus rodoviário','filter'=>'motorista de ônibus rodoviário',]);

        CompanyOccupationsModel::create(['code'=>'782410','occupation'=>'Motorista de ônibus urbano','filter'=>'motorista de ônibus urbano',]);

        CompanyOccupationsModel::create(['code'=>'782415','occupation'=>'Motorista de trólebus','filter'=>'motorista de trólebus',]);

        CompanyOccupationsModel::create(['code'=>'782505','occupation'=>'Caminhoneiro autônomo (rotas regionais e internacionais)','filter'=>'caminhoneiro autônomo (rotas regionais e internacionais)',]);

        CompanyOccupationsModel::create(['code'=>'782510','occupation'=>'Motorista de caminhão (rotas regionais e internacionais)','filter'=>'motorista de caminhão (rotas regionais e internacionais)',]);

        CompanyOccupationsModel::create(['code'=>'782515','occupation'=>'Motorista operacional de guincho','filter'=>'motorista operacional de guincho',]);

        CompanyOccupationsModel::create(['code'=>'782605','occupation'=>'Operador de trem de metrô','filter'=>'operador de trem de metrô',]);

        CompanyOccupationsModel::create(['code'=>'782610','occupation'=>'Maquinista de trem','filter'=>'maquinista de trem',]);

        CompanyOccupationsModel::create(['code'=>'782615','occupation'=>'Maquinista de trem metropolitano','filter'=>'maquinista de trem metropolitano',]);

        CompanyOccupationsModel::create(['code'=>'782620','occupation'=>'Motorneiro','filter'=>'motorneiro',]);

        CompanyOccupationsModel::create(['code'=>'782625','occupation'=>'Auxiliar de maquinista de trem','filter'=>'auxiliar de maquinista de trem',]);

        CompanyOccupationsModel::create(['code'=>'782630','occupation'=>'Operador de teleférico (passageiros)','filter'=>'operador de teleférico (passageiros)',]);

        CompanyOccupationsModel::create(['code'=>'782705','occupation'=>'Marinheiro de convés (marítimo e fluviário)','filter'=>'marinheiro de convés (marítimo e fluviário)',]);

        CompanyOccupationsModel::create(['code'=>'782710','occupation'=>'Marinheiro de máquinas','filter'=>'marinheiro de máquinas',]);

        CompanyOccupationsModel::create(['code'=>'782715','occupation'=>'Moço de convés (marítimo e fluviário)','filter'=>'moço de convés (marítimo e fluviário)',]);

        CompanyOccupationsModel::create(['code'=>'782720','occupation'=>'Moço de máquinas (marítimo e fluviário)','filter'=>'moço de máquinas (marítimo e fluviário)',]);

        CompanyOccupationsModel::create(['code'=>'782725','occupation'=>'Marinheiro de esporte e recreio','filter'=>'marinheiro de esporte e recreio',]);

        CompanyOccupationsModel::create(['code'=>'782730','occupation'=>'Marinheiro auxiliar de convés (marítimo e aquaviario)','filter'=>'marinheiro auxiliar de convés (marítimo e aquaviario)',]);

        CompanyOccupationsModel::create(['code'=>'782735','occupation'=>'Marinheiro auxiliar de máquinas (marítimo e aquaviário)','filter'=>'marinheiro auxiliar de máquinas (marítimo e aquaviário)',]);

        CompanyOccupationsModel::create(['code'=>'782805','occupation'=>'Condutor de veículos de tração animal (ruas e estradas)','filter'=>'condutor de veículos de tração animal (ruas e estradas)',]);

        CompanyOccupationsModel::create(['code'=>'782810','occupation'=>'Tropeiro','filter'=>'tropeiro',]);

        CompanyOccupationsModel::create(['code'=>'782815','occupation'=>'Boiadeiro','filter'=>'boiadeiro',]);

        CompanyOccupationsModel::create(['code'=>'782820','occupation'=>'Condutor de veículos a pedais','filter'=>'condutor de veículos a pedais',]);

        CompanyOccupationsModel::create(['code'=>'783105','occupation'=>'Agente de pátio','filter'=>'agente de pátio',]);

        CompanyOccupationsModel::create(['code'=>'783110','occupation'=>'Manobrador','filter'=>'manobrador',]);

        CompanyOccupationsModel::create(['code'=>'783205','occupation'=>'Carregador (aeronaves)','filter'=>'carregador (aeronaves)',]);

        CompanyOccupationsModel::create(['code'=>'783210','occupation'=>'Carregador (armazém)','filter'=>'carregador (armazém)',]);

        CompanyOccupationsModel::create(['code'=>'783215','occupation'=>'Carregador (veículos de transportes terrestres)','filter'=>'carregador (veículos de transportes terrestres)',]);

        CompanyOccupationsModel::create(['code'=>'783220','occupation'=>'Estivador','filter'=>'estivador',]);

        CompanyOccupationsModel::create(['code'=>'783225','occupation'=>'Ajudante de motorista','filter'=>'ajudante de motorista',]);

        CompanyOccupationsModel::create(['code'=>'783230','occupation'=>'Bloqueiro (trabalhador portuário)','filter'=>'bloqueiro (trabalhador portuário)',]);

        CompanyOccupationsModel::create(['code'=>'783235','occupation'=>'Trabalhador portuário de capatazia','filter'=>'trabalhador portuário de capatazia',]);

        CompanyOccupationsModel::create(['code'=>'783240','occupation'=>'Amarrador e desamarrado de embarcações','filter'=>'amarrador e desamarrado de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'784105','occupation'=>'Embalador, a mão','filter'=>'embalador, a mão',]);

        CompanyOccupationsModel::create(['code'=>'784110','occupation'=>'Embalador, a máquina','filter'=>'embalador, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'784115','occupation'=>'Operador de máquina de etiquetar','filter'=>'operador de máquina de etiquetar',]);

        CompanyOccupationsModel::create(['code'=>'784120','occupation'=>'Operador de máquina de envasar líquidos','filter'=>'operador de máquina de envasar líquidos',]);

        CompanyOccupationsModel::create(['code'=>'784125','occupation'=>'Operador de prensa de enfardamento','filter'=>'operador de prensa de enfardamento',]);

        CompanyOccupationsModel::create(['code'=>'784205','occupation'=>'Alimentador de linha de produção','filter'=>'alimentador de linha de produção',]);

        CompanyOccupationsModel::create(['code'=>'791105','occupation'=>'Artesão bordador','filter'=>'artesão bordador',]);

        CompanyOccupationsModel::create(['code'=>'791110','occupation'=>'Artesão ceramista','filter'=>'artesão ceramista',]);

        CompanyOccupationsModel::create(['code'=>'791115','occupation'=>'Artesão com material reciclável','filter'=>'artesão com material reciclável',]);

        CompanyOccupationsModel::create(['code'=>'791120','occupation'=>'Artesão confeccionador de biojóias e ecojóias','filter'=>'artesão confeccionador de biojóias e ecojóias',]);

        CompanyOccupationsModel::create(['code'=>'791125','occupation'=>'Artesão do couro','filter'=>'artesão do couro',]);

        CompanyOccupationsModel::create(['code'=>'791130','occupation'=>'Artesão escultor','filter'=>'artesão escultor',]);

        CompanyOccupationsModel::create(['code'=>'791135','occupation'=>'Artesão moveleiro (exceto reciclado)','filter'=>'artesão moveleiro (exceto reciclado)',]);

        CompanyOccupationsModel::create(['code'=>'791140','occupation'=>'Artesão tecelão','filter'=>'artesão tecelão',]);

        CompanyOccupationsModel::create(['code'=>'791145','occupation'=>'Artesão trançador','filter'=>'artesão trançador',]);

        CompanyOccupationsModel::create(['code'=>'791150','occupation'=>'Artesão crocheteiro','filter'=>'artesão crocheteiro',]);

        CompanyOccupationsModel::create(['code'=>'791155','occupation'=>'Artesão tricoteiro','filter'=>'artesão tricoteiro',]);

        CompanyOccupationsModel::create(['code'=>'791160','occupation'=>'Artesão rendeiro','filter'=>'artesão rendeiro',]);

        CompanyOccupationsModel::create(['code'=>'810105','occupation'=>'Mestre (indústria petroquímica e carboquímica)','filter'=>'mestre (indústria petroquímica e carboquímica)',]);

        CompanyOccupationsModel::create(['code'=>'810110','occupation'=>'Mestre de produção química','filter'=>'mestre de produção química',]);

        CompanyOccupationsModel::create(['code'=>'810205','occupation'=>'Mestre (indústria de borracha e plástico)','filter'=>'mestre (indústria de borracha e plástico)',]);

        CompanyOccupationsModel::create(['code'=>'810305','occupation'=>'Mestre de produção farmacêutica','filter'=>'mestre de produção farmacêutica',]);

        CompanyOccupationsModel::create(['code'=>'811005','occupation'=>'Operador de processos químicos e petroquímicos','filter'=>'operador de processos químicos e petroquímicos',]);

        CompanyOccupationsModel::create(['code'=>'811010','occupation'=>'Operador de sala de controle de instalações químicas, petroquímicas e afins','filter'=>'operador de sala de controle de instalações químicas, petroquímicas e afins',]);

        CompanyOccupationsModel::create(['code'=>'811105','occupation'=>'Moleiro (tratamentos químicos e afins)','filter'=>'moleiro (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811110','occupation'=>'Operador de máquina misturadeira (tratamentos químicos e afins)','filter'=>'operador de máquina misturadeira (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811115','occupation'=>'Operador de britadeira (tratamentos químicos e afins)','filter'=>'operador de britadeira (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811120','occupation'=>'Operador de concentração','filter'=>'operador de concentração',]);

        CompanyOccupationsModel::create(['code'=>'811125','occupation'=>'Trabalhador da fabricação de resinas e vernizes','filter'=>'trabalhador da fabricação de resinas e vernizes',]);

        CompanyOccupationsModel::create(['code'=>'811130','occupation'=>'Trabalhador de fabricação de tintas','filter'=>'trabalhador de fabricação de tintas',]);

        CompanyOccupationsModel::create(['code'=>'811205','occupation'=>'Operador de calcinação (tratamento químico e afins)','filter'=>'operador de calcinação (tratamento químico e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811215','occupation'=>'Operador de tratamento químico de materiais radioativos','filter'=>'operador de tratamento químico de materiais radioativos',]);

        CompanyOccupationsModel::create(['code'=>'811305','occupation'=>'Operador de centrifugadora (tratamentos químicos e afins)','filter'=>'operador de centrifugadora (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811310','occupation'=>'Operador de exploração de petróleo','filter'=>'operador de exploração de petróleo',]);

        CompanyOccupationsModel::create(['code'=>'811315','occupation'=>'Operador de filtro de secagem (mineração)','filter'=>'operador de filtro de secagem (mineração)',]);

        CompanyOccupationsModel::create(['code'=>'811320','occupation'=>'Operador de filtro de tambor rotativo (tratamentos químicos e afins)','filter'=>'operador de filtro de tambor rotativo (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811325','occupation'=>'Operador de filtro-esteira (mineração)','filter'=>'operador de filtro-esteira (mineração)',]);

        CompanyOccupationsModel::create(['code'=>'811330','occupation'=>'Operador de filtro-prensa (tratamentos químicos e afins)','filter'=>'operador de filtro-prensa (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811335','occupation'=>'Operador de filtros de parafina (tratamentos químicos e afins)','filter'=>'operador de filtros de parafina (tratamentos químicos e afins)',]);

        CompanyOccupationsModel::create(['code'=>'811405','occupation'=>'Destilador de madeira','filter'=>'destilador de madeira',]);

        CompanyOccupationsModel::create(['code'=>'811410','occupation'=>'Destilador de produtos químicos (exceto petróleo)','filter'=>'destilador de produtos químicos (exceto petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'811415','occupation'=>'Operador de alambique de funcionamento contínuo (produtos químicos, exceto petróleo)','filter'=>'operador de alambique de funcionamento contínuo (produtos químicos, exceto petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'811420','occupation'=>'Operador de aparelho de reação e conversão (produtos químicos, exceto petróleo)','filter'=>'operador de aparelho de reação e conversão (produtos químicos, exceto petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'811425','occupation'=>'Operador de equipamento de destilação de álcool','filter'=>'operador de equipamento de destilação de álcool',]);

        CompanyOccupationsModel::create(['code'=>'811430','occupation'=>'Operador de evaporador na destilação','filter'=>'operador de evaporador na destilação',]);

        CompanyOccupationsModel::create(['code'=>'811505','occupation'=>'Operador de painel de controle (refinação de petróleo)','filter'=>'operador de painel de controle (refinação de petróleo)',]);

        CompanyOccupationsModel::create(['code'=>'811510','occupation'=>'Operador de transferência e estocagem - na refinação do petróleo','filter'=>'operador de transferência e estocagem - na refinação do petróleo',]);

        CompanyOccupationsModel::create(['code'=>'811605','occupation'=>'Operador de britador de coque','filter'=>'operador de britador de coque',]);

        CompanyOccupationsModel::create(['code'=>'811610','occupation'=>'Operador de carro de apagamento e coque','filter'=>'operador de carro de apagamento e coque',]);

        CompanyOccupationsModel::create(['code'=>'811615','occupation'=>'Operador de destilação e subprodutos de coque','filter'=>'operador de destilação e subprodutos de coque',]);

        CompanyOccupationsModel::create(['code'=>'811620','occupation'=>'Operador de enfornamento e desenfornamento de coque','filter'=>'operador de enfornamento e desenfornamento de coque',]);

        CompanyOccupationsModel::create(['code'=>'811625','occupation'=>'Operador de exaustor (coqueria)','filter'=>'operador de exaustor (coqueria)',]);

        CompanyOccupationsModel::create(['code'=>'811630','occupation'=>'Operador de painel de controle','filter'=>'operador de painel de controle',]);

        CompanyOccupationsModel::create(['code'=>'811635','occupation'=>'Operador de preservação e controle térmico','filter'=>'operador de preservação e controle térmico',]);

        CompanyOccupationsModel::create(['code'=>'811640','occupation'=>'Operador de reator de coque de petróleo','filter'=>'operador de reator de coque de petróleo',]);

        CompanyOccupationsModel::create(['code'=>'811645','occupation'=>'Operador de refrigeração (coqueria)','filter'=>'operador de refrigeração (coqueria)',]);

        CompanyOccupationsModel::create(['code'=>'811650','occupation'=>'Operador de sistema de reversão (coqueria)','filter'=>'operador de sistema de reversão (coqueria)',]);

        CompanyOccupationsModel::create(['code'=>'811705','occupation'=>'Bamburista','filter'=>'bamburista',]);

        CompanyOccupationsModel::create(['code'=>'811710','occupation'=>'Calandrista de borracha','filter'=>'calandrista de borracha',]);

        CompanyOccupationsModel::create(['code'=>'811715','occupation'=>'Confeccionador de pneumáticos','filter'=>'confeccionador de pneumáticos',]);

        CompanyOccupationsModel::create(['code'=>'811725','occupation'=>'Confeccionador de velas por imersão','filter'=>'confeccionador de velas por imersão',]);

        CompanyOccupationsModel::create(['code'=>'811735','occupation'=>'Confeccionador de velas por moldagem','filter'=>'confeccionador de velas por moldagem',]);

        CompanyOccupationsModel::create(['code'=>'811745','occupation'=>'Laminador de plástico','filter'=>'laminador de plástico',]);

        CompanyOccupationsModel::create(['code'=>'811750','occupation'=>'Moldador de borracha por compressão','filter'=>'moldador de borracha por compressão',]);

        CompanyOccupationsModel::create(['code'=>'811760','occupation'=>'Moldador de plástico por compressão','filter'=>'moldador de plástico por compressão',]);

        CompanyOccupationsModel::create(['code'=>'811770','occupation'=>'Moldador de plástico por injeção','filter'=>'moldador de plástico por injeção',]);

        CompanyOccupationsModel::create(['code'=>'811775','occupation'=>'Trefilador de borracha','filter'=>'trefilador de borracha',]);

        CompanyOccupationsModel::create(['code'=>'811805','occupation'=>'Operador de máquina de produtos farmacêuticos','filter'=>'operador de máquina de produtos farmacêuticos',]);

        CompanyOccupationsModel::create(['code'=>'811810','occupation'=>'Drageador (medicamentos)','filter'=>'drageador (medicamentos)',]);

        CompanyOccupationsModel::create(['code'=>'811815','occupation'=>'Operador de máquina de fabricação de cosméticos','filter'=>'operador de máquina de fabricação de cosméticos',]);

        CompanyOccupationsModel::create(['code'=>'811820','occupation'=>'Operador de máquina de fabricação de produtos de higiene e limpeza (sabão, sabonete, detergente, absorvente, fraldas cotonetes e outros)','filter'=>'operador de máquina de fabricação de produtos de higiene e limpeza (sabão, sabonete, detergente, absorvente, fraldas cotonetes e outros)',]);

        CompanyOccupationsModel::create(['code'=>'812105','occupation'=>'Pirotécnico','filter'=>'pirotécnico',]);

        CompanyOccupationsModel::create(['code'=>'812110','occupation'=>'Trabalhador da fabricação de munição e explosivos','filter'=>'trabalhador da fabricação de munição e explosivos',]);

        CompanyOccupationsModel::create(['code'=>'813105','occupation'=>'Cilindrista (petroquímica e afins)','filter'=>'cilindrista (petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'813110','occupation'=>'Operador de calandra (química, petroquímica e afins)','filter'=>'operador de calandra (química, petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'813115','occupation'=>'Operador de extrusora (química, petroquímica e afins)','filter'=>'operador de extrusora (química, petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'813120','occupation'=>'Operador de processo (química, petroquímica e afins)','filter'=>'operador de processo (química, petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'813125','occupation'=>'Operador de produção (química, petroquímica e afins)','filter'=>'operador de produção (química, petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'813130','occupation'=>'Técnico de operação (química, petroquímica e afins)','filter'=>'técnico de operação (química, petroquímica e afins)',]);

        CompanyOccupationsModel::create(['code'=>'818105','occupation'=>'Assistente de laboratório industrial','filter'=>'assistente de laboratório industrial',]);

        CompanyOccupationsModel::create(['code'=>'818110','occupation'=>'Auxiliar de laboratório de análises físico-químicas','filter'=>'auxiliar de laboratório de análises físico-químicas',]);

        CompanyOccupationsModel::create(['code'=>'820105','occupation'=>'Mestre de siderurgia','filter'=>'mestre de siderurgia',]);

        CompanyOccupationsModel::create(['code'=>'820110','occupation'=>'Mestre de aciaria','filter'=>'mestre de aciaria',]);

        CompanyOccupationsModel::create(['code'=>'820115','occupation'=>'Mestre de alto-forno','filter'=>'mestre de alto-forno',]);

        CompanyOccupationsModel::create(['code'=>'820120','occupation'=>'Mestre de forno elétrico','filter'=>'mestre de forno elétrico',]);

        CompanyOccupationsModel::create(['code'=>'820125','occupation'=>'Mestre de laminação','filter'=>'mestre de laminação',]);

        CompanyOccupationsModel::create(['code'=>'820205','occupation'=>'Supervisor de fabricação de produtos cerâmicos, porcelanatos e afins','filter'=>'supervisor de fabricação de produtos cerâmicos, porcelanatos e afins',]);

        CompanyOccupationsModel::create(['code'=>'820210','occupation'=>'Supervisor de fabricação de produtos de vidro','filter'=>'supervisor de fabricação de produtos de vidro',]);

        CompanyOccupationsModel::create(['code'=>'821105','occupation'=>'Operador de centro de controle ( sinterização)','filter'=>'operador de centro de controle ( sinterização)',]);

        CompanyOccupationsModel::create(['code'=>'821110','occupation'=>'Operador de máquina de sinterizar','filter'=>'operador de máquina de sinterizar',]);

        CompanyOccupationsModel::create(['code'=>'821205','occupation'=>'Forneiro e operador (alto-forno)','filter'=>'forneiro e operador (alto-forno)',]);

        CompanyOccupationsModel::create(['code'=>'821210','occupation'=>'Forneiro e operador (conversor a oxigênio)','filter'=>'forneiro e operador (conversor a oxigênio)',]);

        CompanyOccupationsModel::create(['code'=>'821215','occupation'=>'Forneiro e operador (forno elétrico)','filter'=>'forneiro e operador (forno elétrico)',]);

        CompanyOccupationsModel::create(['code'=>'821220','occupation'=>'Forneiro e operador (refino de metais não-ferrosos)','filter'=>'forneiro e operador (refino de metais não-ferrosos)',]);

        CompanyOccupationsModel::create(['code'=>'821225','occupation'=>'Forneiro e operador de forno de redução direta','filter'=>'forneiro e operador de forno de redução direta',]);

        CompanyOccupationsModel::create(['code'=>'821230','occupation'=>'Operador de aciaria (basculamento de convertedor)','filter'=>'operador de aciaria (basculamento de convertedor)',]);

        CompanyOccupationsModel::create(['code'=>'821235','occupation'=>'Operador de aciaria (dessulfuração de gusa)','filter'=>'operador de aciaria (dessulfuração de gusa)',]);

        CompanyOccupationsModel::create(['code'=>'821240','occupation'=>'Operador de aciaria (recebimento de gusa)','filter'=>'operador de aciaria (recebimento de gusa)',]);

        CompanyOccupationsModel::create(['code'=>'821245','occupation'=>'Operador de área de corrida','filter'=>'operador de área de corrida',]);

        CompanyOccupationsModel::create(['code'=>'821250','occupation'=>'Operador de desgaseificação','filter'=>'operador de desgaseificação',]);

        CompanyOccupationsModel::create(['code'=>'821255','occupation'=>'Soprador de convertedor','filter'=>'soprador de convertedor',]);

        CompanyOccupationsModel::create(['code'=>'821305','occupation'=>'Operador de laminador','filter'=>'operador de laminador',]);

        CompanyOccupationsModel::create(['code'=>'821310','occupation'=>'Operador de laminador de barras a frio','filter'=>'operador de laminador de barras a frio',]);

        CompanyOccupationsModel::create(['code'=>'821315','occupation'=>'Operador de laminador de barras a quente','filter'=>'operador de laminador de barras a quente',]);

        CompanyOccupationsModel::create(['code'=>'821320','occupation'=>'Operador de laminador de metais não-ferrosos','filter'=>'operador de laminador de metais não-ferrosos',]);

        CompanyOccupationsModel::create(['code'=>'821325','occupation'=>'Operador de laminador de tubos','filter'=>'operador de laminador de tubos',]);

        CompanyOccupationsModel::create(['code'=>'821330','occupation'=>'Operador de montagem de cilindros e mancais','filter'=>'operador de montagem de cilindros e mancais',]);

        CompanyOccupationsModel::create(['code'=>'821335','occupation'=>'Recuperador de guias e cilindros','filter'=>'recuperador de guias e cilindros',]);

        CompanyOccupationsModel::create(['code'=>'821405','occupation'=>'Encarregado de acabamento de chapas e metais (têmpera)','filter'=>'encarregado de acabamento de chapas e metais (têmpera)',]);

        CompanyOccupationsModel::create(['code'=>'821410','occupation'=>'Escarfador','filter'=>'escarfador',]);

        CompanyOccupationsModel::create(['code'=>'821415','occupation'=>'Marcador de produtos (siderúrgico e metalúrgico)','filter'=>'marcador de produtos (siderúrgico e metalúrgico)',]);

        CompanyOccupationsModel::create(['code'=>'821420','occupation'=>'Operador de bobinadeira de tiras a quente, no acabamento de chapas e metais','filter'=>'operador de bobinadeira de tiras a quente, no acabamento de chapas e metais',]);

        CompanyOccupationsModel::create(['code'=>'821425','occupation'=>'Operador de cabine de laminação (fio-máquina)','filter'=>'operador de cabine de laminação (fio-máquina)',]);

        CompanyOccupationsModel::create(['code'=>'821430','occupation'=>'Operador de escória e sucata','filter'=>'operador de escória e sucata',]);

        CompanyOccupationsModel::create(['code'=>'821435','occupation'=>'Operador de jato abrasivo','filter'=>'operador de jato abrasivo',]);

        CompanyOccupationsModel::create(['code'=>'821440','occupation'=>'Operador de tesoura mecânica e máquina de corte, no acabamento de chapas e metais','filter'=>'operador de tesoura mecânica e máquina de corte, no acabamento de chapas e metais',]);

        CompanyOccupationsModel::create(['code'=>'821445','occupation'=>'Preparador de sucata e aparas','filter'=>'preparador de sucata e aparas',]);

        CompanyOccupationsModel::create(['code'=>'821450','occupation'=>'Rebarbador de metal','filter'=>'rebarbador de metal',]);

        CompanyOccupationsModel::create(['code'=>'822105','occupation'=>'Forneiro de cubilô','filter'=>'forneiro de cubilô',]);

        CompanyOccupationsModel::create(['code'=>'822110','occupation'=>'Forneiro de forno-poço','filter'=>'forneiro de forno-poço',]);

        CompanyOccupationsModel::create(['code'=>'822115','occupation'=>'Forneiro de fundição (forno de redução)','filter'=>'forneiro de fundição (forno de redução)',]);

        CompanyOccupationsModel::create(['code'=>'822120','occupation'=>'Forneiro de reaquecimento e tratamento térmico na metalurgia','filter'=>'forneiro de reaquecimento e tratamento térmico na metalurgia',]);

        CompanyOccupationsModel::create(['code'=>'822125','occupation'=>'Forneiro de revérbero','filter'=>'forneiro de revérbero',]);

        CompanyOccupationsModel::create(['code'=>'823105','occupation'=>'Preparador de massa (fabricação de abrasivos)','filter'=>'preparador de massa (fabricação de abrasivos)',]);

        CompanyOccupationsModel::create(['code'=>'823110','occupation'=>'Preparador de massa (fabricação de vidro)','filter'=>'preparador de massa (fabricação de vidro)',]);

        CompanyOccupationsModel::create(['code'=>'823115','occupation'=>'Preparador de massa de argila','filter'=>'preparador de massa de argila',]);

        CompanyOccupationsModel::create(['code'=>'823120','occupation'=>'Preparador de barbotina','filter'=>'preparador de barbotina',]);

        CompanyOccupationsModel::create(['code'=>'823125','occupation'=>'Preparador de esmaltes (cerâmica)','filter'=>'preparador de esmaltes (cerâmica)',]);

        CompanyOccupationsModel::create(['code'=>'823130','occupation'=>'Preparador de aditivos','filter'=>'preparador de aditivos',]);

        CompanyOccupationsModel::create(['code'=>'823135','occupation'=>'Operador de atomizador','filter'=>'operador de atomizador',]);

        CompanyOccupationsModel::create(['code'=>'823210','occupation'=>'Extrusor de fios ou fibras de vidro','filter'=>'extrusor de fios ou fibras de vidro',]);

        CompanyOccupationsModel::create(['code'=>'823215','occupation'=>'Forneiro na fundição de vidro','filter'=>'forneiro na fundição de vidro',]);

        CompanyOccupationsModel::create(['code'=>'823220','occupation'=>'Forneiro no recozimento de vidro','filter'=>'forneiro no recozimento de vidro',]);

        CompanyOccupationsModel::create(['code'=>'823230','occupation'=>'Moldador de abrasivos na fabricação de cerâmica, vidro e porcelana','filter'=>'moldador de abrasivos na fabricação de cerâmica, vidro e porcelana',]);

        CompanyOccupationsModel::create(['code'=>'823235','occupation'=>'Operador de banho metálico de vidro por flutuação','filter'=>'operador de banho metálico de vidro por flutuação',]);

        CompanyOccupationsModel::create(['code'=>'823240','occupation'=>'Operador de máquina de soprar vidro','filter'=>'operador de máquina de soprar vidro',]);

        CompanyOccupationsModel::create(['code'=>'823245','occupation'=>'Operador de máquina extrusora de varetas e tubos de vidro','filter'=>'operador de máquina extrusora de varetas e tubos de vidro',]);

        CompanyOccupationsModel::create(['code'=>'823250','occupation'=>'Operador de prensa de moldar vidro','filter'=>'operador de prensa de moldar vidro',]);

        CompanyOccupationsModel::create(['code'=>'823255','occupation'=>'Temperador de vidro','filter'=>'temperador de vidro',]);

        CompanyOccupationsModel::create(['code'=>'823265','occupation'=>'Trabalhador na fabricação de produtos abrasivos','filter'=>'trabalhador na fabricação de produtos abrasivos',]);

        CompanyOccupationsModel::create(['code'=>'823305','occupation'=>'Classificador e empilhador de tijolos refratários','filter'=>'classificador e empilhador de tijolos refratários',]);

        CompanyOccupationsModel::create(['code'=>'823315','occupation'=>'Forneiro (materiais de construção)','filter'=>'forneiro (materiais de construção)',]);

        CompanyOccupationsModel::create(['code'=>'823320','occupation'=>'Trabalhador da elaboração de pré-fabricados (cimento amianto)','filter'=>'trabalhador da elaboração de pré-fabricados (cimento amianto)',]);

        CompanyOccupationsModel::create(['code'=>'823325','occupation'=>'Trabalhador da elaboração de pré-fabricados (concreto armado)','filter'=>'trabalhador da elaboração de pré-fabricados (concreto armado)',]);

        CompanyOccupationsModel::create(['code'=>'823330','occupation'=>'Trabalhador da fabricação de pedras artificiais','filter'=>'trabalhador da fabricação de pedras artificiais',]);

        CompanyOccupationsModel::create(['code'=>'828105','occupation'=>'Oleiro (fabricação de telhas)','filter'=>'oleiro (fabricação de telhas)',]);

        CompanyOccupationsModel::create(['code'=>'828110','occupation'=>'Oleiro (fabricação de tijolos)','filter'=>'oleiro (fabricação de tijolos)',]);

        CompanyOccupationsModel::create(['code'=>'830105','occupation'=>'Mestre (indústria de celulose, papel e papelão)','filter'=>'mestre (indústria de celulose, papel e papelão)',]);

        CompanyOccupationsModel::create(['code'=>'831105','occupation'=>'Cilindreiro na preparação de pasta para fabricação de papel','filter'=>'cilindreiro na preparação de pasta para fabricação de papel',]);

        CompanyOccupationsModel::create(['code'=>'831110','occupation'=>'Operador de branqueador de pasta para fabricação de papel','filter'=>'operador de branqueador de pasta para fabricação de papel',]);

        CompanyOccupationsModel::create(['code'=>'831115','occupation'=>'Operador de digestor de pasta para fabricação de papel','filter'=>'operador de digestor de pasta para fabricação de papel',]);

        CompanyOccupationsModel::create(['code'=>'831120','occupation'=>'Operador de lavagem e depuração de pasta para fabricação de papel','filter'=>'operador de lavagem e depuração de pasta para fabricação de papel',]);

        CompanyOccupationsModel::create(['code'=>'831125','occupation'=>'Operador de máquina de secar celulose','filter'=>'operador de máquina de secar celulose',]);

        CompanyOccupationsModel::create(['code'=>'832105','occupation'=>'Calandrista de papel','filter'=>'calandrista de papel',]);

        CompanyOccupationsModel::create(['code'=>'832110','occupation'=>'Operador de cortadeira de papel','filter'=>'operador de cortadeira de papel',]);

        CompanyOccupationsModel::create(['code'=>'832115','occupation'=>'Operador de máquina de fabricar papel (fase úmida)','filter'=>'operador de máquina de fabricar papel (fase úmida)',]);

        CompanyOccupationsModel::create(['code'=>'832120','occupation'=>'Operador de máquina de fabricar papel (fase seca)','filter'=>'operador de máquina de fabricar papel (fase seca)',]);

        CompanyOccupationsModel::create(['code'=>'832125','occupation'=>'Operador de máquina de fabricar papel e papelão','filter'=>'operador de máquina de fabricar papel e papelão',]);

        CompanyOccupationsModel::create(['code'=>'832135','occupation'=>'Operador de rebobinadeira na fabricação de papel e papelão','filter'=>'operador de rebobinadeira na fabricação de papel e papelão',]);

        CompanyOccupationsModel::create(['code'=>'833105','occupation'=>'Cartonageiro, a máquina','filter'=>'cartonageiro, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'833110','occupation'=>'Confeccionador de bolsas, sacos e sacolas e papel, a máquina','filter'=>'confeccionador de bolsas, sacos e sacolas e papel, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'833115','occupation'=>'Confeccionador de sacos de celofane, a máquina','filter'=>'confeccionador de sacos de celofane, a máquina',]);

        CompanyOccupationsModel::create(['code'=>'833120','occupation'=>'Operador de máquina de cortar e dobrar papelão','filter'=>'operador de máquina de cortar e dobrar papelão',]);

        CompanyOccupationsModel::create(['code'=>'833125','occupation'=>'Operador de prensa de embutir papelão','filter'=>'operador de prensa de embutir papelão',]);

        CompanyOccupationsModel::create(['code'=>'833205','occupation'=>'Cartonageiro, a mão (caixas de papelão)','filter'=>'cartonageiro, a mão (caixas de papelão)',]);

        CompanyOccupationsModel::create(['code'=>'840105','occupation'=>'Supervisor de produção da indústria alimentícia','filter'=>'supervisor de produção da indústria alimentícia',]);

        CompanyOccupationsModel::create(['code'=>'840110','occupation'=>'Supervisor da indústria de bebidas','filter'=>'supervisor da indústria de bebidas',]);

        CompanyOccupationsModel::create(['code'=>'840115','occupation'=>'Supervisor da indústria de fumo','filter'=>'supervisor da indústria de fumo',]);

        CompanyOccupationsModel::create(['code'=>'840120','occupation'=>'Chefe de confeitaria','filter'=>'chefe de confeitaria',]);

        CompanyOccupationsModel::create(['code'=>'841105','occupation'=>'Moleiro de cereais (exceto arroz)','filter'=>'moleiro de cereais (exceto arroz)',]);

        CompanyOccupationsModel::create(['code'=>'841110','occupation'=>'Moleiro de especiarias','filter'=>'moleiro de especiarias',]);

        CompanyOccupationsModel::create(['code'=>'841115','occupation'=>'Operador de processo de moagem','filter'=>'operador de processo de moagem',]);

        CompanyOccupationsModel::create(['code'=>'841205','occupation'=>'Moedor de sal','filter'=>'moedor de sal',]);

        CompanyOccupationsModel::create(['code'=>'841210','occupation'=>'Refinador de sal','filter'=>'refinador de sal',]);

        CompanyOccupationsModel::create(['code'=>'841305','occupation'=>'Operador de cristalização na refinação de açucar','filter'=>'operador de cristalização na refinação de açucar',]);

        CompanyOccupationsModel::create(['code'=>'841310','occupation'=>'Operador de equipamentos de refinação de açúcar (processo contínuo)','filter'=>'operador de equipamentos de refinação de açúcar (processo contínuo)',]);

        CompanyOccupationsModel::create(['code'=>'841315','occupation'=>'Operador de moenda na fabricação de açúcar','filter'=>'operador de moenda na fabricação de açúcar',]);

        CompanyOccupationsModel::create(['code'=>'841320','occupation'=>'Operador de tratamento de calda na refinação de açúcar','filter'=>'operador de tratamento de calda na refinação de açúcar',]);

        CompanyOccupationsModel::create(['code'=>'841408','occupation'=>'Cozinhador (conservação de alimentos)','filter'=>'cozinhador (conservação de alimentos)',]);

        CompanyOccupationsModel::create(['code'=>'841416','occupation'=>'Cozinhador de carnes','filter'=>'cozinhador de carnes',]);

        CompanyOccupationsModel::create(['code'=>'841420','occupation'=>'Cozinhador de frutas e legumes','filter'=>'cozinhador de frutas e legumes',]);

        CompanyOccupationsModel::create(['code'=>'841428','occupation'=>'Cozinhador de pescado','filter'=>'cozinhador de pescado',]);

        CompanyOccupationsModel::create(['code'=>'841432','occupation'=>'Desidratador de alimentos','filter'=>'desidratador de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'841440','occupation'=>'Esterilizador de alimentos','filter'=>'esterilizador de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'841444','occupation'=>'Hidrogenador de óleos e gorduras','filter'=>'hidrogenador de óleos e gorduras',]);

        CompanyOccupationsModel::create(['code'=>'841448','occupation'=>'Lagareiro','filter'=>'lagareiro',]);

        CompanyOccupationsModel::create(['code'=>'841456','occupation'=>'Operador de câmaras frias','filter'=>'operador de câmaras frias',]);

        CompanyOccupationsModel::create(['code'=>'841460','occupation'=>'Operador de preparação de grãos vegetais (óleos e gorduras)','filter'=>'operador de preparação de grãos vegetais (óleos e gorduras)',]);

        CompanyOccupationsModel::create(['code'=>'841464','occupation'=>'Prensador de frutas (exceto oleaginosas)','filter'=>'prensador de frutas (exceto oleaginosas)',]);

        CompanyOccupationsModel::create(['code'=>'841468','occupation'=>'Preparador de rações','filter'=>'preparador de rações',]);

        CompanyOccupationsModel::create(['code'=>'841472','occupation'=>'Refinador de óleo e gordura','filter'=>'refinador de óleo e gordura',]);

        CompanyOccupationsModel::create(['code'=>'841476','occupation'=>'Trabalhador de fabricação de margarina','filter'=>'trabalhador de fabricação de margarina',]);

        CompanyOccupationsModel::create(['code'=>'841484','occupation'=>'Trabalhador de preparação de pescados (limpeza)','filter'=>'trabalhador de preparação de pescados (limpeza)',]);

        CompanyOccupationsModel::create(['code'=>'841505','occupation'=>'Trabalhador de tratamento do leite e fabricação de laticínios e afins','filter'=>'trabalhador de tratamento do leite e fabricação de laticínios e afins',]);

        CompanyOccupationsModel::create(['code'=>'841605','occupation'=>'Misturador de café','filter'=>'misturador de café',]);

        CompanyOccupationsModel::create(['code'=>'841610','occupation'=>'Torrador de café','filter'=>'torrador de café',]);

        CompanyOccupationsModel::create(['code'=>'841615','occupation'=>'Moedor de café','filter'=>'moedor de café',]);

        CompanyOccupationsModel::create(['code'=>'841620','occupation'=>'Operador de extração de café solúvel','filter'=>'operador de extração de café solúvel',]);

        CompanyOccupationsModel::create(['code'=>'841625','occupation'=>'Torrador de cacau','filter'=>'torrador de cacau',]);

        CompanyOccupationsModel::create(['code'=>'841630','occupation'=>'Misturador de chá ou mate','filter'=>'misturador de chá ou mate',]);

        CompanyOccupationsModel::create(['code'=>'841705','occupation'=>'Alambiqueiro','filter'=>'alambiqueiro',]);

        CompanyOccupationsModel::create(['code'=>'841710','occupation'=>'Filtrador de cerveja','filter'=>'filtrador de cerveja',]);

        CompanyOccupationsModel::create(['code'=>'841715','occupation'=>'Fermentador','filter'=>'fermentador',]);

        CompanyOccupationsModel::create(['code'=>'841720','occupation'=>'Trabalhador de fabricação de vinhos','filter'=>'trabalhador de fabricação de vinhos',]);

        CompanyOccupationsModel::create(['code'=>'841725','occupation'=>'Malteiro (germinação)','filter'=>'malteiro (germinação)',]);

        CompanyOccupationsModel::create(['code'=>'841730','occupation'=>'Cozinhador de malte','filter'=>'cozinhador de malte',]);

        CompanyOccupationsModel::create(['code'=>'841735','occupation'=>'Dessecador de malte','filter'=>'dessecador de malte',]);

        CompanyOccupationsModel::create(['code'=>'841740','occupation'=>'Vinagreiro','filter'=>'vinagreiro',]);

        CompanyOccupationsModel::create(['code'=>'841745','occupation'=>'Xaropeiro','filter'=>'xaropeiro',]);

        CompanyOccupationsModel::create(['code'=>'841805','occupation'=>'Operador de forno (fabricação de pães, biscoitos e similares)','filter'=>'operador de forno (fabricação de pães, biscoitos e similares)',]);

        CompanyOccupationsModel::create(['code'=>'841810','occupation'=>'Operador de máquinas de fabricação de doces, salgados e massas alimentícias','filter'=>'operador de máquinas de fabricação de doces, salgados e massas alimentícias',]);

        CompanyOccupationsModel::create(['code'=>'841815','occupation'=>'Operador de máquinas de fabricação de chocolates e achocolatados','filter'=>'operador de máquinas de fabricação de chocolates e achocolatados',]);

        CompanyOccupationsModel::create(['code'=>'842105','occupation'=>'Preparador de melado e essência de fumo','filter'=>'preparador de melado e essência de fumo',]);

        CompanyOccupationsModel::create(['code'=>'842110','occupation'=>'Processador de fumo','filter'=>'processador de fumo',]);

        CompanyOccupationsModel::create(['code'=>'842115','occupation'=>'Classificador de fumo','filter'=>'classificador de fumo',]);

        CompanyOccupationsModel::create(['code'=>'842120','occupation'=>'Auxiliar de processamento de fumo','filter'=>'auxiliar de processamento de fumo',]);

        CompanyOccupationsModel::create(['code'=>'842125','occupation'=>'Operador de máquina (fabricação de cigarros)','filter'=>'operador de máquina (fabricação de cigarros)',]);

        CompanyOccupationsModel::create(['code'=>'842135','occupation'=>'Operador de máquina de preparação de matéria prima para produção de cigarros','filter'=>'operador de máquina de preparação de matéria prima para produção de cigarros',]);

        CompanyOccupationsModel::create(['code'=>'842205','occupation'=>'Preparador de fumo na fabricação de charutos','filter'=>'preparador de fumo na fabricação de charutos',]);

        CompanyOccupationsModel::create(['code'=>'842210','occupation'=>'Operador de máquina de fabricar charutos e cigarrilhas','filter'=>'operador de máquina de fabricar charutos e cigarrilhas',]);

        CompanyOccupationsModel::create(['code'=>'842215','occupation'=>'Classificador de charutos','filter'=>'classificador de charutos',]);

        CompanyOccupationsModel::create(['code'=>'842220','occupation'=>'Cortador de charutos','filter'=>'cortador de charutos',]);

        CompanyOccupationsModel::create(['code'=>'842225','occupation'=>'Celofanista na fabricação de charutos','filter'=>'celofanista na fabricação de charutos',]);

        CompanyOccupationsModel::create(['code'=>'842230','occupation'=>'Charuteiro a mão','filter'=>'charuteiro a mão',]);

        CompanyOccupationsModel::create(['code'=>'842235','occupation'=>'Degustador de charutos','filter'=>'degustador de charutos',]);

        CompanyOccupationsModel::create(['code'=>'848105','occupation'=>'Defumador de carnes e pescados','filter'=>'defumador de carnes e pescados',]);

        CompanyOccupationsModel::create(['code'=>'848110','occupation'=>'Salgador de alimentos','filter'=>'salgador de alimentos',]);

        CompanyOccupationsModel::create(['code'=>'848115','occupation'=>'Salsicheiro (fabricação de lingüiça, salsicha e produtos similares)','filter'=>'salsicheiro (fabricação de lingüiça, salsicha e produtos similares)',]);

        CompanyOccupationsModel::create(['code'=>'848205','occupation'=>'Pasteurizador','filter'=>'pasteurizador',]);

        CompanyOccupationsModel::create(['code'=>'848210','occupation'=>'Queijeiro na fabricação de laticínio','filter'=>'queijeiro na fabricação de laticínio',]);

        CompanyOccupationsModel::create(['code'=>'848215','occupation'=>'Manteigueiro na fabricação de laticínio','filter'=>'manteigueiro na fabricação de laticínio',]);

        CompanyOccupationsModel::create(['code'=>'848305','occupation'=>'Padeiro','filter'=>'padeiro',]);

        CompanyOccupationsModel::create(['code'=>'848310','occupation'=>'Confeiteiro','filter'=>'confeiteiro',]);

        CompanyOccupationsModel::create(['code'=>'848315','occupation'=>'Masseiro (massas alimentícias)','filter'=>'masseiro (massas alimentícias)',]);

        CompanyOccupationsModel::create(['code'=>'848325','occupation'=>'Trabalhador de fabricação de sorvete','filter'=>'trabalhador de fabricação de sorvete',]);

        CompanyOccupationsModel::create(['code'=>'848405','occupation'=>'Degustador de café','filter'=>'degustador de café',]);

        CompanyOccupationsModel::create(['code'=>'848410','occupation'=>'Degustador de chá','filter'=>'degustador de chá',]);

        CompanyOccupationsModel::create(['code'=>'848415','occupation'=>'Degustador de derivados de cacau','filter'=>'degustador de derivados de cacau',]);

        CompanyOccupationsModel::create(['code'=>'848420','occupation'=>'Degustador de vinhos ou licores','filter'=>'degustador de vinhos ou licores',]);

        CompanyOccupationsModel::create(['code'=>'848425','occupation'=>'Classificador de grãos','filter'=>'classificador de grãos',]);

        CompanyOccupationsModel::create(['code'=>'848505','occupation'=>'Abatedor','filter'=>'abatedor',]);

        CompanyOccupationsModel::create(['code'=>'848510','occupation'=>'Açougueiro','filter'=>'açougueiro',]);

        CompanyOccupationsModel::create(['code'=>'848515','occupation'=>'Desossador','filter'=>'desossador',]);

        CompanyOccupationsModel::create(['code'=>'848520','occupation'=>'Magarefe','filter'=>'magarefe',]);

        CompanyOccupationsModel::create(['code'=>'848525','occupation'=>'Retalhador de carne','filter'=>'retalhador de carne',]);

        CompanyOccupationsModel::create(['code'=>'848605','occupation'=>'Trabalhador do beneficiamento de fumo','filter'=>'trabalhador do beneficiamento de fumo',]);

        CompanyOccupationsModel::create(['code'=>'860105','occupation'=>'Supervisor de manutenção eletromecânica (utilidades)','filter'=>'supervisor de manutenção eletromecânica (utilidades)',]);

        CompanyOccupationsModel::create(['code'=>'860110','occupation'=>'Supervisor de operação de fluidos (distribuição, captação, tratamento de água, gases, vapor)','filter'=>'supervisor de operação de fluidos (distribuição, captação, tratamento de água, gases, vapor)',]);

        CompanyOccupationsModel::create(['code'=>'860115','occupation'=>'Supervisor de operação elétrica (geração, transmissão e distribuição de energia elétrica)','filter'=>'supervisor de operação elétrica (geração, transmissão e distribuição de energia elétrica)',]);

        CompanyOccupationsModel::create(['code'=>'861105','occupation'=>'Operador de central hidrelétrica','filter'=>'operador de central hidrelétrica',]);

        CompanyOccupationsModel::create(['code'=>'861110','occupation'=>'Operador de quadro de distribuição de energia elétrica','filter'=>'operador de quadro de distribuição de energia elétrica',]);

        CompanyOccupationsModel::create(['code'=>'861115','occupation'=>'Operador de central termoelétrica','filter'=>'operador de central termoelétrica',]);

        CompanyOccupationsModel::create(['code'=>'861120','occupation'=>'Operador de reator nuclear','filter'=>'operador de reator nuclear',]);

        CompanyOccupationsModel::create(['code'=>'861205','occupation'=>'Operador de subestação','filter'=>'operador de subestação',]);

        CompanyOccupationsModel::create(['code'=>'862105','occupation'=>'Foguista (locomotivas a vapor)','filter'=>'foguista (locomotivas a vapor)',]);

        CompanyOccupationsModel::create(['code'=>'862110','occupation'=>'Maquinista de embarcações','filter'=>'maquinista de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'862115','occupation'=>'Operador de bateria de gás de hulha','filter'=>'operador de bateria de gás de hulha',]);

        CompanyOccupationsModel::create(['code'=>'862120','occupation'=>'Operador de caldeira','filter'=>'operador de caldeira',]);

        CompanyOccupationsModel::create(['code'=>'862130','occupation'=>'Operador de compressor de ar','filter'=>'operador de compressor de ar',]);

        CompanyOccupationsModel::create(['code'=>'862140','occupation'=>'Operador de estação de bombeamento','filter'=>'operador de estação de bombeamento',]);

        CompanyOccupationsModel::create(['code'=>'862150','occupation'=>'Operador de máquinas fixas, em geral','filter'=>'operador de máquinas fixas, em geral',]);

        CompanyOccupationsModel::create(['code'=>'862155','occupation'=>'Operador de utilidade (produção e distribuição de vapor, gás, óleo, combustível, energia, oxigênio)','filter'=>'operador de utilidade (produção e distribuição de vapor, gás, óleo, combustível, energia, oxigênio)',]);

        CompanyOccupationsModel::create(['code'=>'862160','occupation'=>'Operador de abastecimento de combustível de aeronave','filter'=>'operador de abastecimento de combustível de aeronave',]);

        CompanyOccupationsModel::create(['code'=>'862205','occupation'=>'Operador de estação de captação, tratamento e distribuição de água','filter'=>'operador de estação de captação, tratamento e distribuição de água',]);

        CompanyOccupationsModel::create(['code'=>'862305','occupation'=>'Operador de estação de tratamento de água e efluentes','filter'=>'operador de estação de tratamento de água e efluentes',]);

        CompanyOccupationsModel::create(['code'=>'862310','occupation'=>'Operador de forno de incineração no tratamento de água, efluentes e resíduos industriais','filter'=>'operador de forno de incineração no tratamento de água, efluentes e resíduos industriais',]);

        CompanyOccupationsModel::create(['code'=>'862405','occupation'=>'Operador de instalação de extração, processamento, envasamento e distribuição de gases','filter'=>'operador de instalação de extração, processamento, envasamento e distribuição de gases',]);

        CompanyOccupationsModel::create(['code'=>'862505','occupation'=>'Operador de instalação de refrigeração','filter'=>'operador de instalação de refrigeração',]);

        CompanyOccupationsModel::create(['code'=>'862510','occupation'=>'Operador de refrigeração com amônia','filter'=>'operador de refrigeração com amônia',]);

        CompanyOccupationsModel::create(['code'=>'862515','occupation'=>'Operador de instalação de ar-condicionado','filter'=>'operador de instalação de ar-condicionado',]);

        CompanyOccupationsModel::create(['code'=>'910105','occupation'=>'Encarregado de manutenção mecânica de sistemas operacionais','filter'=>'encarregado de manutenção mecânica de sistemas operacionais',]);

        CompanyOccupationsModel::create(['code'=>'910110','occupation'=>'Supervisor de manutenção de aparelhos térmicos, de climatização e de refrigeração','filter'=>'supervisor de manutenção de aparelhos térmicos, de climatização e de refrigeração',]);

        CompanyOccupationsModel::create(['code'=>'910115','occupation'=>'Supervisor de manutenção de bombas, motores, compressores e equipamentos de transmissão','filter'=>'supervisor de manutenção de bombas, motores, compressores e equipamentos de transmissão',]);

        CompanyOccupationsModel::create(['code'=>'910120','occupation'=>'Supervisor de manutenção de máquinas gráficas','filter'=>'supervisor de manutenção de máquinas gráficas',]);

        CompanyOccupationsModel::create(['code'=>'910125','occupation'=>'Supervisor de manutenção de máquinas industriais têxteis','filter'=>'supervisor de manutenção de máquinas industriais têxteis',]);

        CompanyOccupationsModel::create(['code'=>'910130','occupation'=>'Supervisor de manutenção de máquinas operatrizes e de usinagem','filter'=>'supervisor de manutenção de máquinas operatrizes e de usinagem',]);

        CompanyOccupationsModel::create(['code'=>'910205','occupation'=>'Supervisor da manutenção e reparação de veículos leves','filter'=>'supervisor da manutenção e reparação de veículos leves',]);

        CompanyOccupationsModel::create(['code'=>'910210','occupation'=>'Supervisor da manutenção e reparação de veículos pesados','filter'=>'supervisor da manutenção e reparação de veículos pesados',]);

        CompanyOccupationsModel::create(['code'=>'910905','occupation'=>'Supervisor de reparos linhas férreas','filter'=>'supervisor de reparos linhas férreas',]);

        CompanyOccupationsModel::create(['code'=>'910910','occupation'=>'Supervisor de manutenção de vias férreas','filter'=>'supervisor de manutenção de vias férreas',]);

        CompanyOccupationsModel::create(['code'=>'911105','occupation'=>'Mecânico de manutenção de bomba injetora (exceto de veículos automotores)','filter'=>'mecânico de manutenção de bomba injetora (exceto de veículos automotores)',]);

        CompanyOccupationsModel::create(['code'=>'911110','occupation'=>'Mecânico de manutenção de bombas','filter'=>'mecânico de manutenção de bombas',]);

        CompanyOccupationsModel::create(['code'=>'911115','occupation'=>'Mecânico de manutenção de compressores de ar','filter'=>'mecânico de manutenção de compressores de ar',]);

        CompanyOccupationsModel::create(['code'=>'911120','occupation'=>'Mecânico de manutenção de motores diesel (exceto de veículos automotores)','filter'=>'mecânico de manutenção de motores diesel (exceto de veículos automotores)',]);

        CompanyOccupationsModel::create(['code'=>'911125','occupation'=>'Mecânico de manutenção de redutores','filter'=>'mecânico de manutenção de redutores',]);

        CompanyOccupationsModel::create(['code'=>'911130','occupation'=>'Mecânico de manutenção de turbinas (exceto de aeronaves)','filter'=>'mecânico de manutenção de turbinas (exceto de aeronaves)',]);

        CompanyOccupationsModel::create(['code'=>'911135','occupation'=>'Mecânico de manutenção de turbocompressores','filter'=>'mecânico de manutenção de turbocompressores',]);

        CompanyOccupationsModel::create(['code'=>'911205','occupation'=>'Mecânico de manutenção e instalação de aparelhos de climatização e refrigeração','filter'=>'mecânico de manutenção e instalação de aparelhos de climatização e refrigeração',]);

        CompanyOccupationsModel::create(['code'=>'911305','occupation'=>'Mecânico de manutenção de máquinas, em geral','filter'=>'mecânico de manutenção de máquinas, em geral',]);

        CompanyOccupationsModel::create(['code'=>'911310','occupation'=>'Mecânico de manutenção de máquinas gráficas','filter'=>'mecânico de manutenção de máquinas gráficas',]);

        CompanyOccupationsModel::create(['code'=>'911315','occupation'=>'Mecânico de manutenção de máquinas operatrizes (lavra de madeira)','filter'=>'mecânico de manutenção de máquinas operatrizes (lavra de madeira)',]);

        CompanyOccupationsModel::create(['code'=>'911320','occupation'=>'Mecânico de manutenção de máquinas têxteis','filter'=>'mecânico de manutenção de máquinas têxteis',]);

        CompanyOccupationsModel::create(['code'=>'911325','occupation'=>'Mecânico de manutenção de máquinas-ferramentas (usinagem de metais)','filter'=>'mecânico de manutenção de máquinas-ferramentas (usinagem de metais)',]);

        CompanyOccupationsModel::create(['code'=>'913105','occupation'=>'Mecânico de manutenção de aparelhos de levantamento','filter'=>'mecânico de manutenção de aparelhos de levantamento',]);

        CompanyOccupationsModel::create(['code'=>'913110','occupation'=>'Mecânico de manutenção de equipamento de mineração','filter'=>'mecânico de manutenção de equipamento de mineração',]);

        CompanyOccupationsModel::create(['code'=>'913115','occupation'=>'Mecânico de manutenção de máquinas agrícolas','filter'=>'mecânico de manutenção de máquinas agrícolas',]);

        CompanyOccupationsModel::create(['code'=>'913120','occupation'=>'Mecânico de manutenção de máquinas de construção e terraplenagem','filter'=>'mecânico de manutenção de máquinas de construção e terraplenagem',]);

        CompanyOccupationsModel::create(['code'=>'913125','occupation'=>'Vulcanizador de correias transportadoras','filter'=>'vulcanizador de correias transportadoras',]);

        CompanyOccupationsModel::create(['code'=>'914105','occupation'=>'Mecânico de manutenção de aeronaves, em geral','filter'=>'mecânico de manutenção de aeronaves, em geral',]);

        CompanyOccupationsModel::create(['code'=>'914110','occupation'=>'Mecânico de manutenção de sistema hidráulico de aeronaves (serviços de pista e hangar)','filter'=>'mecânico de manutenção de sistema hidráulico de aeronaves (serviços de pista e hangar)',]);

        CompanyOccupationsModel::create(['code'=>'914205','occupation'=>'Mecânico de manutenção de motores e equipamentos navais','filter'=>'mecânico de manutenção de motores e equipamentos navais',]);

        CompanyOccupationsModel::create(['code'=>'914305','occupation'=>'Mecânico de manutenção de veículos ferroviários','filter'=>'mecânico de manutenção de veículos ferroviários',]);

        CompanyOccupationsModel::create(['code'=>'914405','occupation'=>'Mecânico de manutenção de automóveis, motocicletas e veículos similares','filter'=>'mecânico de manutenção de automóveis, motocicletas e veículos similares',]);

        CompanyOccupationsModel::create(['code'=>'914410','occupation'=>'Mecânico de manutenção de empilhadeiras e outros veículos de cargas leves','filter'=>'mecânico de manutenção de empilhadeiras e outros veículos de cargas leves',]);

        CompanyOccupationsModel::create(['code'=>'914415','occupation'=>'Mecânico de manutenção de motocicletas','filter'=>'mecânico de manutenção de motocicletas',]);

        CompanyOccupationsModel::create(['code'=>'914420','occupation'=>'Mecânico de manutenção de tratores','filter'=>'mecânico de manutenção de tratores',]);

        CompanyOccupationsModel::create(['code'=>'914425','occupation'=>'Mecânico de veículos automotores a diesel (exceto tratores)','filter'=>'mecânico de veículos automotores a diesel (exceto tratores)',]);

        CompanyOccupationsModel::create(['code'=>'915105','occupation'=>'Técnico em manutenção de instrumentos de medição e precisão','filter'=>'técnico em manutenção de instrumentos de medição e precisão',]);

        CompanyOccupationsModel::create(['code'=>'915110','occupation'=>'Técnico em manutenção de hidrômetros','filter'=>'técnico em manutenção de hidrômetros',]);

        CompanyOccupationsModel::create(['code'=>'915115','occupation'=>'Técnico em manutenção de balanças','filter'=>'técnico em manutenção de balanças',]);

        CompanyOccupationsModel::create(['code'=>'915205','occupation'=>'Restaurador de instrumentos musicais (exceto cordas arcadas)','filter'=>'restaurador de instrumentos musicais (exceto cordas arcadas)',]);

        CompanyOccupationsModel::create(['code'=>'915210','occupation'=>'Reparador de instrumentos musicais','filter'=>'reparador de instrumentos musicais',]);

        CompanyOccupationsModel::create(['code'=>'915215','occupation'=>'Luthier (restauração de cordas arcadas)','filter'=>'luthier (restauração de cordas arcadas)',]);

        CompanyOccupationsModel::create(['code'=>'915305','occupation'=>'Técnico em manutenção de equipamentos e instrumentos médico-hospitalares','filter'=>'técnico em manutenção de equipamentos e instrumentos médico-hospitalares',]);

        CompanyOccupationsModel::create(['code'=>'915405','occupation'=>'Reparador de equipamentos fotográficos','filter'=>'reparador de equipamentos fotográficos',]);

        CompanyOccupationsModel::create(['code'=>'919105','occupation'=>'Lubrificador industrial','filter'=>'lubrificador industrial',]);

        CompanyOccupationsModel::create(['code'=>'919110','occupation'=>'Lubrificador de veículos automotores (exceto embarcações)','filter'=>'lubrificador de veículos automotores (exceto embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'919115','occupation'=>'Lubrificador de embarcações','filter'=>'lubrificador de embarcações',]);

        CompanyOccupationsModel::create(['code'=>'919205','occupation'=>'Mecânico de manutenção de máquinas cortadoras de grama, roçadeiras, motosserras e similares','filter'=>'mecânico de manutenção de máquinas cortadoras de grama, roçadeiras, motosserras e similares',]);

        CompanyOccupationsModel::create(['code'=>'919305','occupation'=>'Mecânico de manutenção de aparelhos esportivos e de ginástica','filter'=>'mecânico de manutenção de aparelhos esportivos e de ginástica',]);

        CompanyOccupationsModel::create(['code'=>'919310','occupation'=>'Mecânico de manutenção de bicicletas e veículos similares','filter'=>'mecânico de manutenção de bicicletas e veículos similares',]);

        CompanyOccupationsModel::create(['code'=>'919315','occupation'=>'Montador de bicicletas','filter'=>'montador de bicicletas',]);

        CompanyOccupationsModel::create(['code'=>'950105','occupation'=>'Supervisor de manutenção elétrica de alta tensão industrial','filter'=>'supervisor de manutenção elétrica de alta tensão industrial',]);

        CompanyOccupationsModel::create(['code'=>'950110','occupation'=>'Supervisor de manutenção eletromecânica industrial, comercial e predial','filter'=>'supervisor de manutenção eletromecânica industrial, comercial e predial',]);

        CompanyOccupationsModel::create(['code'=>'950205','occupation'=>'Encarregado de manutenção elétrica de veículos','filter'=>'encarregado de manutenção elétrica de veículos',]);

        CompanyOccupationsModel::create(['code'=>'950305','occupation'=>'Supervisor de manutenção eletromecânica','filter'=>'supervisor de manutenção eletromecânica',]);

        CompanyOccupationsModel::create(['code'=>'951105','occupation'=>'Eletricista de manutenção eletroeletrônica','filter'=>'eletricista de manutenção eletroeletrônica',]);

        CompanyOccupationsModel::create(['code'=>'951305','occupation'=>'Instalador de sistemas eletroeletrônicos de segurança','filter'=>'instalador de sistemas eletroeletrônicos de segurança',]);

        CompanyOccupationsModel::create(['code'=>'951310','occupation'=>'Mantenedor de sistemas eletroeletrônicos de segurança','filter'=>'mantenedor de sistemas eletroeletrônicos de segurança',]);

        CompanyOccupationsModel::create(['code'=>'951315','occupation'=>'Monitor de sistemas eletrônicos de segurança interno','filter'=>'monitor de sistemas eletrônicos de segurança interno',]);

        CompanyOccupationsModel::create(['code'=>'951320','occupation'=>'Monitor de sistemas eletrônicos de segurança externo','filter'=>'monitor de sistemas eletrônicos de segurança externo',]);

        CompanyOccupationsModel::create(['code'=>'953105','occupation'=>'Eletricista de instalações (aeronaves)','filter'=>'eletricista de instalações (aeronaves)',]);

        CompanyOccupationsModel::create(['code'=>'953110','occupation'=>'Eletricista de instalações (embarcações)','filter'=>'eletricista de instalações (embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'953115','occupation'=>'Eletricista de instalações (veículos automotores e máquinas operatrizes, exceto aeronaves e embarcações)','filter'=>'eletricista de instalações (veículos automotores e máquinas operatrizes, exceto aeronaves e embarcações)',]);

        CompanyOccupationsModel::create(['code'=>'954105','occupation'=>'Eletromecânico de manutenção de elevadores','filter'=>'eletromecânico de manutenção de elevadores',]);

        CompanyOccupationsModel::create(['code'=>'954110','occupation'=>'Eletromecânico de manutenção de escadas rolantes','filter'=>'eletromecânico de manutenção de escadas rolantes',]);

        CompanyOccupationsModel::create(['code'=>'954115','occupation'=>'Eletromecânico de manutenção de portas automáticas','filter'=>'eletromecânico de manutenção de portas automáticas',]);

        CompanyOccupationsModel::create(['code'=>'954120','occupation'=>'Mecânico de manutenção de instalações mecânicas de edifícios','filter'=>'mecânico de manutenção de instalações mecânicas de edifícios',]);

        CompanyOccupationsModel::create(['code'=>'954125','occupation'=>'Operador eletromecânico','filter'=>'operador eletromecânico',]);

        CompanyOccupationsModel::create(['code'=>'954205','occupation'=>'Reparador de aparelhos eletrodomésticos (exceto imagem e som)','filter'=>'reparador de aparelhos eletrodomésticos (exceto imagem e som)',]);

        CompanyOccupationsModel::create(['code'=>'954210','occupation'=>'Reparador de rádio, tv e som','filter'=>'reparador de rádio, tv e som',]);

        CompanyOccupationsModel::create(['code'=>'954305','occupation'=>'Reparador de equipamentos de escritório','filter'=>'reparador de equipamentos de escritório',]);

        CompanyOccupationsModel::create(['code'=>'991105','occupation'=>'Conservador de via permanente (trilhos)','filter'=>'conservador de via permanente (trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'991110','occupation'=>'Inspetor de via permanente (trilhos)','filter'=>'inspetor de via permanente (trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'991115','occupation'=>'Operador de máquinas especiais em conservação de via permanente (trilhos)','filter'=>'operador de máquinas especiais em conservação de via permanente (trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'991120','occupation'=>'Soldador aluminotérmico em conservação de trilhos','filter'=>'soldador aluminotérmico em conservação de trilhos',]);

        CompanyOccupationsModel::create(['code'=>'991205','occupation'=>'Mantenedor de equipamentos de parques de diversões e similares','filter'=>'mantenedor de equipamentos de parques de diversões e similares',]);

        CompanyOccupationsModel::create(['code'=>'991305','occupation'=>'Funileiro de veículos (reparação)','filter'=>'funileiro de veículos (reparação)',]);

        CompanyOccupationsModel::create(['code'=>'991310','occupation'=>'Montador de veículos (reparação)','filter'=>'montador de veículos (reparação)',]);

        CompanyOccupationsModel::create(['code'=>'991315','occupation'=>'Pintor de veículos (reparação)','filter'=>'pintor de veículos (reparação)',]);

        CompanyOccupationsModel::create(['code'=>'992105','occupation'=>'Alinhador de pneus','filter'=>'alinhador de pneus',]);

        CompanyOccupationsModel::create(['code'=>'992110','occupation'=>'Balanceador','filter'=>'balanceador',]);

        CompanyOccupationsModel::create(['code'=>'992115','occupation'=>'Borracheiro','filter'=>'borracheiro',]);

        CompanyOccupationsModel::create(['code'=>'992120','occupation'=>'Lavador de peças','filter'=>'lavador de peças',]);

        CompanyOccupationsModel::create(['code'=>'992205','occupation'=>'Encarregado geral de operações de conservação de vias permanentes (exceto trilhos)','filter'=>'encarregado geral de operações de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'992210','occupation'=>'Encarregado de equipe de conservação de vias permanentes (exceto trilhos)','filter'=>'encarregado de equipe de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'992215','occupation'=>'Operador de ceifadeira na conservação de vias permanentes','filter'=>'operador de ceifadeira na conservação de vias permanentes',]);

        CompanyOccupationsModel::create(['code'=>'992220','occupation'=>'Pedreiro de conservação de vias permanentes (exceto trilhos)','filter'=>'pedreiro de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupationsModel::create(['code'=>'992225','occupation'=>'Auxiliar geral de conservação de vias permanentes (exceto trilhos)','filter'=>'auxiliar geral de conservação de vias permanentes (exceto trilhos)',]);
    }
}
