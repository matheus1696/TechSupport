<?php

namespace Database\Seeders;

use App\Models\Company\CompanyOccupation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyOccupationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CompanyOccupation::create(['code'=>'10105','title'=>'Oficial general da aeronáutica','filter'=>'oficial general da aeronáutica',]);

        CompanyOccupation::create(['code'=>'10110','title'=>'Oficial general do exército','filter'=>'oficial general do exército',]);

        CompanyOccupation::create(['code'=>'10115','title'=>'Oficial general da marinha','filter'=>'oficial general da marinha',]);

        CompanyOccupation::create(['code'=>'10205','title'=>'Oficial da aeronáutica','filter'=>'oficial da aeronáutica',]);

        CompanyOccupation::create(['code'=>'10210','title'=>'Oficial do exército','filter'=>'oficial do exército',]);

        CompanyOccupation::create(['code'=>'10215','title'=>'Oficial da marinha','filter'=>'oficial da marinha',]);

        CompanyOccupation::create(['code'=>'10305','title'=>'Praça da aeronáutica','filter'=>'praça da aeronáutica',]);

        CompanyOccupation::create(['code'=>'10310','title'=>'Praça do exército','filter'=>'praça do exército',]);

        CompanyOccupation::create(['code'=>'10315','title'=>'Praça da marinha','filter'=>'praça da marinha',]);

        CompanyOccupation::create(['code'=>'111105','title'=>'Senador','filter'=>'senador',]);

        CompanyOccupation::create(['code'=>'111110','title'=>'Deputado federal','filter'=>'deputado federal',]);

        CompanyOccupation::create(['code'=>'111115','title'=>'Deputado estadual e distrital','filter'=>'deputado estadual e distrital',]);

        CompanyOccupation::create(['code'=>'111120','title'=>'Vereador','filter'=>'vereador',]);

        CompanyOccupation::create(['code'=>'111205','title'=>'Presidente da república','filter'=>'presidente da república',]);

        CompanyOccupation::create(['code'=>'111210','title'=>'Vice-presidente da república','filter'=>'vice-presidente da república',]);

        CompanyOccupation::create(['code'=>'111215','title'=>'Ministro de estado','filter'=>'ministro de estado',]);

        CompanyOccupation::create(['code'=>'111220','title'=>'Secretário - executivo','filter'=>'secretário - executivo',]);

        CompanyOccupation::create(['code'=>'111225','title'=>'Membro superior do poder executivo','filter'=>'membro superior do poder executivo',]);

        CompanyOccupation::create(['code'=>'111230','title'=>'Governador de estado','filter'=>'governador de estado',]);

        CompanyOccupation::create(['code'=>'111235','title'=>'Governador do distrito federal','filter'=>'governador do distrito federal',]);

        CompanyOccupation::create(['code'=>'111240','title'=>'Vice-governador de estado','filter'=>'vice-governador de estado',]);

        CompanyOccupation::create(['code'=>'111245','title'=>'Vice-governador do distrito federal','filter'=>'vice-governador do distrito federal',]);

        CompanyOccupation::create(['code'=>'111250','title'=>'Prefeito','filter'=>'prefeito',]);

        CompanyOccupation::create(['code'=>'111255','title'=>'Vice-prefeito','filter'=>'vice-prefeito',]);

        CompanyOccupation::create(['code'=>'111305','title'=>'Ministro do supremo tribunal federal','filter'=>'ministro do supremo tribunal federal',]);

        CompanyOccupation::create(['code'=>'111310','title'=>'Ministro do superior tribunal de justiça','filter'=>'ministro do superior tribunal de justiça',]);

        CompanyOccupation::create(['code'=>'111315','title'=>'Ministro do superior tribunal militar','filter'=>'ministro do superior tribunal militar',]);

        CompanyOccupation::create(['code'=>'111320','title'=>'Ministro do superior tribunal do trabalho','filter'=>'ministro do superior tribunal do trabalho',]);

        CompanyOccupation::create(['code'=>'111325','title'=>'Juiz de direito','filter'=>'juiz de direito',]);

        CompanyOccupation::create(['code'=>'111330','title'=>'Juiz federal','filter'=>'juiz federal',]);

        CompanyOccupation::create(['code'=>'111335','title'=>'Juiz auditor federal - justiça militar','filter'=>'juiz auditor federal - justiça militar',]);

        CompanyOccupation::create(['code'=>'111340','title'=>'Juiz auditor estadual - justiça militar','filter'=>'juiz auditor estadual - justiça militar',]);

        CompanyOccupation::create(['code'=>'111345','title'=>'Juiz do trabalho','filter'=>'juiz do trabalho',]);

        CompanyOccupation::create(['code'=>'111405','title'=>'Dirigente do serviço público federal','filter'=>'dirigente do serviço público federal',]);

        CompanyOccupation::create(['code'=>'111410','title'=>'Dirigente do serviço público estadual e distrital','filter'=>'dirigente do serviço público estadual e distrital',]);

        CompanyOccupation::create(['code'=>'111415','title'=>'Dirigente do serviço público municipal','filter'=>'dirigente do serviço público municipal',]);

        CompanyOccupation::create(['code'=>'111505','title'=>'Especialista de políticas públicas e gestão governamental - eppgg','filter'=>'especialista de políticas públicas e gestão governamental - eppgg',]);

        CompanyOccupation::create(['code'=>'111510','title'=>'Analista de planejamento e orçamento - apo','filter'=>'analista de planejamento e orçamento - apo',]);

        CompanyOccupation::create(['code'=>'113005','title'=>'Cacique','filter'=>'cacique',]);

        CompanyOccupation::create(['code'=>'113010','title'=>'Líder de comunidade caiçara','filter'=>'líder de comunidade caiçara',]);

        CompanyOccupation::create(['code'=>'113015','title'=>'Membro de liderança quilombola','filter'=>'membro de liderança quilombola',]);

        CompanyOccupation::create(['code'=>'114105','title'=>'Dirigente de partido político','filter'=>'dirigente de partido político',]);

        CompanyOccupation::create(['code'=>'114205','title'=>'Dirigente de entidade de trabalhadores','filter'=>'dirigente de entidade de trabalhadores',]);

        CompanyOccupation::create(['code'=>'114210','title'=>'Dirigente de entidade patronal','filter'=>'dirigente de entidade patronal',]);

        CompanyOccupation::create(['code'=>'114305','title'=>'Dirigente e administrador de organização religiosa','filter'=>'dirigente e administrador de organização religiosa',]);

        CompanyOccupation::create(['code'=>'114405','title'=>'Dirigente e administrador de organização da sociedade civil sem fins lucrativos','filter'=>'dirigente e administrador de organização da sociedade civil sem fins lucrativos',]);

        CompanyOccupation::create(['code'=>'121005','title'=>'Diretor de planejamento estratégico','filter'=>'diretor de planejamento estratégico',]);

        CompanyOccupation::create(['code'=>'121010','title'=>'Diretor geral de empresa e organizações (exceto de interesse público)','filter'=>'diretor geral de empresa e organizações (exceto de interesse público)',]);

        CompanyOccupation::create(['code'=>'122105','title'=>'Diretor de produção e operações em empresa agropecuária','filter'=>'diretor de produção e operações em empresa agropecuária',]);

        CompanyOccupation::create(['code'=>'122110','title'=>'Diretor de produção e operações em empresa aqüícola','filter'=>'diretor de produção e operações em empresa aqüícola',]);

        CompanyOccupation::create(['code'=>'122115','title'=>'Diretor de produção e operações em empresa florestal','filter'=>'diretor de produção e operações em empresa florestal',]);

        CompanyOccupation::create(['code'=>'122120','title'=>'Diretor de produção e operações em empresa pesqueira','filter'=>'diretor de produção e operações em empresa pesqueira',]);

        CompanyOccupation::create(['code'=>'122205','title'=>'Diretor de produção e operações da indústria de transformação, extração mineral e utilidades','filter'=>'diretor de produção e operações da indústria de transformação, extração mineral e utilidades',]);

        CompanyOccupation::create(['code'=>'122305','title'=>'Diretor de operações de obras pública e civil','filter'=>'diretor de operações de obras pública e civil',]);

        CompanyOccupation::create(['code'=>'122405','title'=>'Diretor de operações comerciais (comércio atacadista e varejista)','filter'=>'diretor de operações comerciais (comércio atacadista e varejista)',]);

        CompanyOccupation::create(['code'=>'122505','title'=>'Diretor de produção e operações de alimentação','filter'=>'diretor de produção e operações de alimentação',]);

        CompanyOccupation::create(['code'=>'122510','title'=>'Diretor de produção e operações de hotel','filter'=>'diretor de produção e operações de hotel',]);

        CompanyOccupation::create(['code'=>'122515','title'=>'Diretor de produção e operações de turismo','filter'=>'diretor de produção e operações de turismo',]);

        CompanyOccupation::create(['code'=>'122520','title'=>'Turismólogo','filter'=>'turismólogo',]);

        CompanyOccupation::create(['code'=>'122605','title'=>'Diretor de operações de correios','filter'=>'diretor de operações de correios',]);

        CompanyOccupation::create(['code'=>'122610','title'=>'Diretor de operações de serviços de armazenamento','filter'=>'diretor de operações de serviços de armazenamento',]);

        CompanyOccupation::create(['code'=>'122615','title'=>'Diretor de operações de serviços de telecomunicações','filter'=>'diretor de operações de serviços de telecomunicações',]);

        CompanyOccupation::create(['code'=>'122620','title'=>'Diretor de operações de serviços de transporte','filter'=>'diretor de operações de serviços de transporte',]);

        CompanyOccupation::create(['code'=>'122705','title'=>'Diretor comercial em operações de intermediação financeira','filter'=>'diretor comercial em operações de intermediação financeira',]);

        CompanyOccupation::create(['code'=>'122710','title'=>'Diretor de produtos bancários','filter'=>'diretor de produtos bancários',]);

        CompanyOccupation::create(['code'=>'122715','title'=>'Diretor de crédito rural','filter'=>'diretor de crédito rural',]);

        CompanyOccupation::create(['code'=>'122720','title'=>'Diretor de câmbio e comércio exterior','filter'=>'diretor de câmbio e comércio exterior',]);

        CompanyOccupation::create(['code'=>'122725','title'=>'Diretor de compliance','filter'=>'diretor de compliance',]);

        CompanyOccupation::create(['code'=>'122730','title'=>'Diretor de crédito (exceto crédito imobiliário)','filter'=>'diretor de crédito (exceto crédito imobiliário)',]);

        CompanyOccupation::create(['code'=>'122735','title'=>'Diretor de crédito imobiliário','filter'=>'diretor de crédito imobiliário',]);

        CompanyOccupation::create(['code'=>'122740','title'=>'Diretor de leasing','filter'=>'diretor de leasing',]);

        CompanyOccupation::create(['code'=>'122745','title'=>'Diretor de mercado de capitais','filter'=>'diretor de mercado de capitais',]);

        CompanyOccupation::create(['code'=>'122750','title'=>'Diretor de recuperação de créditos em operações de intermediação financeira','filter'=>'diretor de recuperação de créditos em operações de intermediação financeira',]);

        CompanyOccupation::create(['code'=>'122755','title'=>'Diretor de riscos de mercado','filter'=>'diretor de riscos de mercado',]);

        CompanyOccupation::create(['code'=>'123105','title'=>'Diretor administrativo','filter'=>'diretor administrativo',]);

        CompanyOccupation::create(['code'=>'123110','title'=>'Diretor administrativo e financeiro','filter'=>'diretor administrativo e financeiro',]);

        CompanyOccupation::create(['code'=>'123115','title'=>'Diretor financeiro','filter'=>'diretor financeiro',]);

        CompanyOccupation::create(['code'=>'123205','title'=>'Diretor de recursos humanos','filter'=>'diretor de recursos humanos',]);

        CompanyOccupation::create(['code'=>'123210','title'=>'Diretor de relações de trabalho','filter'=>'diretor de relações de trabalho',]);

        CompanyOccupation::create(['code'=>'123305','title'=>'Diretor comercial','filter'=>'diretor comercial',]);

        CompanyOccupation::create(['code'=>'123310','title'=>'Diretor de marketing','filter'=>'diretor de marketing',]);

        CompanyOccupation::create(['code'=>'123405','title'=>'Diretor de suprimentos','filter'=>'diretor de suprimentos',]);

        CompanyOccupation::create(['code'=>'123410','title'=>'Diretor de suprimentos no serviço público','filter'=>'diretor de suprimentos no serviço público',]);

        CompanyOccupation::create(['code'=>'123605','title'=>'Diretor de tecnologia da informação','filter'=>'diretor de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'123705','title'=>'Diretor de pesquisa e desenvolvimento (p&d)','filter'=>'diretor de pesquisa e desenvolvimento (p&d)',]);

        CompanyOccupation::create(['code'=>'123805','title'=>'Diretor de manutenção','filter'=>'diretor de manutenção',]);

        CompanyOccupation::create(['code'=>'131105','title'=>'Diretor de serviços culturais','filter'=>'diretor de serviços culturais',]);

        CompanyOccupation::create(['code'=>'131110','title'=>'Diretor de serviços sociais','filter'=>'diretor de serviços sociais',]);

        CompanyOccupation::create(['code'=>'131115','title'=>'Gerente de serviços culturais','filter'=>'gerente de serviços culturais',]);

        CompanyOccupation::create(['code'=>'131120','title'=>'Gerente de serviços sociais','filter'=>'gerente de serviços sociais',]);

        CompanyOccupation::create(['code'=>'131205','title'=>'Diretor de serviços de saúde','filter'=>'diretor de serviços de saúde',]);

        CompanyOccupation::create(['code'=>'131210','title'=>'Gerente de serviços de saúde','filter'=>'gerente de serviços de saúde',]);

        CompanyOccupation::create(['code'=>'131215','title'=>'Tecnólogo em gestão hospitalar','filter'=>'tecnólogo em gestão hospitalar',]);

        CompanyOccupation::create(['code'=>'131220','title'=>'Gerontólogo','filter'=>'gerontólogo',]);

        CompanyOccupation::create(['code'=>'131225','title'=>'Sanitarista','filter'=>'sanitarista',]);

        CompanyOccupation::create(['code'=>'131305','title'=>'Diretor de instituição educacional da área privada','filter'=>'diretor de instituição educacional da área privada',]);

        CompanyOccupation::create(['code'=>'131310','title'=>'Diretor de instituição educacional pública','filter'=>'diretor de instituição educacional pública',]);

        CompanyOccupation::create(['code'=>'131315','title'=>'Gerente de instituição educacional da área privada','filter'=>'gerente de instituição educacional da área privada',]);

        CompanyOccupation::create(['code'=>'131320','title'=>'Gerente de serviços educacionais da área pública','filter'=>'gerente de serviços educacionais da área pública',]);

        CompanyOccupation::create(['code'=>'141105','title'=>'Gerente de produção e operações aqüícolas','filter'=>'gerente de produção e operações aqüícolas',]);

        CompanyOccupation::create(['code'=>'141110','title'=>'Gerente de produção e operações florestais','filter'=>'gerente de produção e operações florestais',]);

        CompanyOccupation::create(['code'=>'141115','title'=>'Gerente de produção e operações agropecuárias','filter'=>'gerente de produção e operações agropecuárias',]);

        CompanyOccupation::create(['code'=>'141120','title'=>'Gerente de produção e operações pesqueiras','filter'=>'gerente de produção e operações pesqueiras',]);

        CompanyOccupation::create(['code'=>'141205','title'=>'Gerente de produção e operações','filter'=>'gerente de produção e operações',]);

        CompanyOccupation::create(['code'=>'141305','title'=>'Gerente de produção e operações da construção civil e obras públicas','filter'=>'gerente de produção e operações da construção civil e obras públicas',]);

        CompanyOccupation::create(['code'=>'141405','title'=>'Comerciante atacadista','filter'=>'comerciante atacadista',]);

        CompanyOccupation::create(['code'=>'141410','title'=>'Comerciante varejista','filter'=>'comerciante varejista',]);

        CompanyOccupation::create(['code'=>'141415','title'=>'Gerente de loja e supermercado','filter'=>'gerente de loja e supermercado',]);

        CompanyOccupation::create(['code'=>'141420','title'=>'Gerente de operações de serviços de assistência técnica','filter'=>'gerente de operações de serviços de assistência técnica',]);

        CompanyOccupation::create(['code'=>'141505','title'=>'Gerente de hotel','filter'=>'gerente de hotel',]);

        CompanyOccupation::create(['code'=>'141510','title'=>'Gerente de restaurante','filter'=>'gerente de restaurante',]);

        CompanyOccupation::create(['code'=>'141515','title'=>'Gerente de bar','filter'=>'gerente de bar',]);

        CompanyOccupation::create(['code'=>'141520','title'=>'Gerente de pensão','filter'=>'gerente de pensão',]);

        CompanyOccupation::create(['code'=>'141525','title'=>'Gerente de turismo','filter'=>'gerente de turismo',]);

        CompanyOccupation::create(['code'=>'141605','title'=>'Gerente de operações de transportes','filter'=>'gerente de operações de transportes',]);

        CompanyOccupation::create(['code'=>'141610','title'=>'Gerente de operações de correios e telecomunicações','filter'=>'gerente de operações de correios e telecomunicações',]);

        CompanyOccupation::create(['code'=>'141615','title'=>'Gerente de logística (armazenagem e distribuição)','filter'=>'gerente de logística (armazenagem e distribuição)',]);

        CompanyOccupation::create(['code'=>'141705','title'=>'Gerente de produtos bancários','filter'=>'gerente de produtos bancários',]);

        CompanyOccupation::create(['code'=>'141710','title'=>'Gerente de agência','filter'=>'gerente de agência',]);

        CompanyOccupation::create(['code'=>'141715','title'=>'Gerente de câmbio e comércio exterior','filter'=>'gerente de câmbio e comércio exterior',]);

        CompanyOccupation::create(['code'=>'141720','title'=>'Gerente de crédito e cobrança','filter'=>'gerente de crédito e cobrança',]);

        CompanyOccupation::create(['code'=>'141725','title'=>'Gerente de crédito imobiliário','filter'=>'gerente de crédito imobiliário',]);

        CompanyOccupation::create(['code'=>'141730','title'=>'Gerente de crédito rural','filter'=>'gerente de crédito rural',]);

        CompanyOccupation::create(['code'=>'141735','title'=>'Gerente de recuperação de crédito','filter'=>'gerente de recuperação de crédito',]);

        CompanyOccupation::create(['code'=>'141805','title'=>'Gerente de administração em aeroportos','filter'=>'gerente de administração em aeroportos',]);

        CompanyOccupation::create(['code'=>'141810','title'=>'Gerente de empresa aérea e empresa de serviços auxiliares ao transporte aéreo (esata) em aeroportos','filter'=>'gerente de empresa aérea e empresa de serviços auxiliares ao transporte aéreo (esata) em aeroportos',]);

        CompanyOccupation::create(['code'=>'141815','title'=>'Gerente de operações em aeroportos','filter'=>'gerente de operações em aeroportos',]);

        CompanyOccupation::create(['code'=>'141820','title'=>'Gerente de operações de cargas','filter'=>'gerente de operações de cargas',]);

        CompanyOccupation::create(['code'=>'141825','title'=>'Gerente de segurança da aviação civil','filter'=>'gerente de segurança da aviação civil',]);

        CompanyOccupation::create(['code'=>'141830','title'=>'Gerente de segurança operacional (aviação civil)','filter'=>'gerente de segurança operacional (aviação civil)',]);

        CompanyOccupation::create(['code'=>'142105','title'=>'Gerente administrativo','filter'=>'gerente administrativo',]);

        CompanyOccupation::create(['code'=>'142110','title'=>'Gerente de riscos','filter'=>'gerente de riscos',]);

        CompanyOccupation::create(['code'=>'142115','title'=>'Gerente financeiro','filter'=>'gerente financeiro',]);

        CompanyOccupation::create(['code'=>'142120','title'=>'Tecnólogo em gestão administrativo- financeira','filter'=>'tecnólogo em gestão administrativo- financeira',]);

        CompanyOccupation::create(['code'=>'142125','title'=>'Analista de compliance','filter'=>'analista de compliance',]);

        CompanyOccupation::create(['code'=>'142130','title'=>'Analista de riscos','filter'=>'analista de riscos',]);

        CompanyOccupation::create(['code'=>'142135','title'=>'Oficial de proteção de dados pessoais (dpo)','filter'=>'oficial de proteção de dados pessoais (dpo)',]);

        CompanyOccupation::create(['code'=>'142140','title'=>'Gerente de facility management','filter'=>'gerente de facility management',]);

        CompanyOccupation::create(['code'=>'142205','title'=>'Gerente de recursos humanos','filter'=>'gerente de recursos humanos',]);

        CompanyOccupation::create(['code'=>'142210','title'=>'Gerente de departamento pessoal','filter'=>'gerente de departamento pessoal',]);

        CompanyOccupation::create(['code'=>'142305','title'=>'Gerente comercial','filter'=>'gerente comercial',]);

        CompanyOccupation::create(['code'=>'142310','title'=>'Gerente de comunicação','filter'=>'gerente de comunicação',]);

        CompanyOccupation::create(['code'=>'142315','title'=>'Gerente de marketing','filter'=>'gerente de marketing',]);

        CompanyOccupation::create(['code'=>'142320','title'=>'Gerente de vendas','filter'=>'gerente de vendas',]);

        CompanyOccupation::create(['code'=>'142325','title'=>'Relações públicas','filter'=>'relações públicas',]);

        CompanyOccupation::create(['code'=>'142330','title'=>'Analista de negócios','filter'=>'analista de negócios',]);

        CompanyOccupation::create(['code'=>'142335','title'=>'Analista de pesquisa de mercado','filter'=>'analista de pesquisa de mercado',]);

        CompanyOccupation::create(['code'=>'142340','title'=>'Ouvidor','filter'=>'ouvidor',]);

        CompanyOccupation::create(['code'=>'142345','title'=>'Profissional de relações institucionais e governamentais','filter'=>'profissional de relações institucionais e governamentais',]);

        CompanyOccupation::create(['code'=>'142350','title'=>'Profissonal de relações internacionais','filter'=>'profissonal de relações internacionais',]);

        CompanyOccupation::create(['code'=>'142355','title'=>'Analista de e-commerce','filter'=>'analista de e-commerce',]);

        CompanyOccupation::create(['code'=>'142405','title'=>'Gerente de compras','filter'=>'gerente de compras',]);

        CompanyOccupation::create(['code'=>'142410','title'=>'Gerente de suprimentos','filter'=>'gerente de suprimentos',]);

        CompanyOccupation::create(['code'=>'142415','title'=>'Gerente de almoxarifado','filter'=>'gerente de almoxarifado',]);

        CompanyOccupation::create(['code'=>'142505','title'=>'Gerente de infraestrutura de tecnologia da informação','filter'=>'gerente de infraestrutura de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'142510','title'=>'Gerente de desenvolvimento de sistemas','filter'=>'gerente de desenvolvimento de sistemas',]);

        CompanyOccupation::create(['code'=>'142515','title'=>'Gerente de operação de tecnologia da informação','filter'=>'gerente de operação de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'142520','title'=>'Gerente de projetos de tecnologia da informação','filter'=>'gerente de projetos de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'142525','title'=>'Gerente de segurança da informação','filter'=>'gerente de segurança da informação',]);

        CompanyOccupation::create(['code'=>'142530','title'=>'Gerente de suporte técnico de tecnologia da informação','filter'=>'gerente de suporte técnico de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'142535','title'=>'Tecnólogo em gestão da tecnologia da informação','filter'=>'tecnólogo em gestão da tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'142605','title'=>'Gerente de pesquisa e desenvolvimento (p&d)','filter'=>'gerente de pesquisa e desenvolvimento (p&d)',]);

        CompanyOccupation::create(['code'=>'142610','title'=>'Especialista em desenvolvimento de cigarros','filter'=>'especialista em desenvolvimento de cigarros',]);

        CompanyOccupation::create(['code'=>'142705','title'=>'Gerente de projetos e serviços de manutenção','filter'=>'gerente de projetos e serviços de manutenção',]);

        CompanyOccupation::create(['code'=>'142710','title'=>'Tecnólogo em sistemas biomédicos','filter'=>'tecnólogo em sistemas biomédicos',]);

        CompanyOccupation::create(['code'=>'20105','title'=>'Coronel da polícia militar','filter'=>'coronel da polícia militar',]);

        CompanyOccupation::create(['code'=>'20110','title'=>'Tenente-coronel da polícia militar','filter'=>'tenente-coronel da polícia militar',]);

        CompanyOccupation::create(['code'=>'201105','title'=>'Bioengenheiro','filter'=>'bioengenheiro',]);

        CompanyOccupation::create(['code'=>'201110','title'=>'Biotecnologista','filter'=>'biotecnologista',]);

        CompanyOccupation::create(['code'=>'201115','title'=>'Geneticista','filter'=>'geneticista',]);

        CompanyOccupation::create(['code'=>'20115','title'=>'Major da polícia militar','filter'=>'major da polícia militar',]);

        CompanyOccupation::create(['code'=>'201205','title'=>'Pesquisador em metrologia','filter'=>'pesquisador em metrologia',]);

        CompanyOccupation::create(['code'=>'201210','title'=>'Especialista em calibrações metrológicas','filter'=>'especialista em calibrações metrológicas',]);

        CompanyOccupation::create(['code'=>'201215','title'=>'Especialista em ensaios metrológicos','filter'=>'especialista em ensaios metrológicos',]);

        CompanyOccupation::create(['code'=>'201220','title'=>'Especialista em instrumentação metrológica','filter'=>'especialista em instrumentação metrológica',]);

        CompanyOccupation::create(['code'=>'201225','title'=>'Especialista em materiais de referência metrológica','filter'=>'especialista em materiais de referência metrológica',]);

        CompanyOccupation::create(['code'=>'20205','title'=>'Capitão da polícia militar','filter'=>'capitão da polícia militar',]);

        CompanyOccupation::create(['code'=>'202105','title'=>'Engenheiro mecatrônico','filter'=>'engenheiro mecatrônico',]);

        CompanyOccupation::create(['code'=>'202110','title'=>'Engenheiro de controle e automação','filter'=>'engenheiro de controle e automação',]);

        CompanyOccupation::create(['code'=>'202115','title'=>'Tecnólogo em mecatrônica','filter'=>'tecnólogo em mecatrônica',]);

        CompanyOccupation::create(['code'=>'202120','title'=>'Tecnólogo em automação industrial','filter'=>'tecnólogo em automação industrial',]);

        CompanyOccupation::create(['code'=>'203005','title'=>'Pesquisador em biologia ambiental','filter'=>'pesquisador em biologia ambiental',]);

        CompanyOccupation::create(['code'=>'203010','title'=>'Pesquisador em biologia animal','filter'=>'pesquisador em biologia animal',]);

        CompanyOccupation::create(['code'=>'203015','title'=>'Pesquisador em biologia de microorganismos e parasitas','filter'=>'pesquisador em biologia de microorganismos e parasitas',]);

        CompanyOccupation::create(['code'=>'203020','title'=>'Pesquisador em biologia humana','filter'=>'pesquisador em biologia humana',]);

        CompanyOccupation::create(['code'=>'203025','title'=>'Pesquisador em biologia vegetal','filter'=>'pesquisador em biologia vegetal',]);

        CompanyOccupation::create(['code'=>'20305','title'=>'Primeiro tenente de polícia militar','filter'=>'primeiro tenente de polícia militar',]);

        CompanyOccupation::create(['code'=>'20310','title'=>'Segundo tenente de polícia militar','filter'=>'segundo tenente de polícia militar',]);

        CompanyOccupation::create(['code'=>'203105','title'=>'Pesquisador em ciências da computação e informática','filter'=>'pesquisador em ciências da computação e informática',]);

        CompanyOccupation::create(['code'=>'203110','title'=>'Pesquisador em ciências da terra e meio ambiente','filter'=>'pesquisador em ciências da terra e meio ambiente',]);

        CompanyOccupation::create(['code'=>'203115','title'=>'Pesquisador em física','filter'=>'pesquisador em física',]);

        CompanyOccupation::create(['code'=>'203120','title'=>'Pesquisador em matemática','filter'=>'pesquisador em matemática',]);

        CompanyOccupation::create(['code'=>'203125','title'=>'Pesquisador em química','filter'=>'pesquisador em química',]);

        CompanyOccupation::create(['code'=>'203205','title'=>'Pesquisador de engenharia civil','filter'=>'pesquisador de engenharia civil',]);

        CompanyOccupation::create(['code'=>'203210','title'=>'Pesquisador de engenharia e tecnologia (outras áreas da engenharia)','filter'=>'pesquisador de engenharia e tecnologia (outras áreas da engenharia)',]);

        CompanyOccupation::create(['code'=>'203215','title'=>'Pesquisador de engenharia elétrica e eletrônica','filter'=>'pesquisador de engenharia elétrica e eletrônica',]);

        CompanyOccupation::create(['code'=>'203220','title'=>'Pesquisador de engenharia mecânica','filter'=>'pesquisador de engenharia mecânica',]);

        CompanyOccupation::create(['code'=>'203225','title'=>'Pesquisador de engenharia metalúrgica, de minas e de materiais','filter'=>'pesquisador de engenharia metalúrgica, de minas e de materiais',]);

        CompanyOccupation::create(['code'=>'203230','title'=>'Pesquisador de engenharia química','filter'=>'pesquisador de engenharia química',]);

        CompanyOccupation::create(['code'=>'203305','title'=>'Pesquisador de clínica médica','filter'=>'pesquisador de clínica médica',]);

        CompanyOccupation::create(['code'=>'203310','title'=>'Pesquisador de medicina básica','filter'=>'pesquisador de medicina básica',]);

        CompanyOccupation::create(['code'=>'203315','title'=>'Pesquisador em medicina veterinária','filter'=>'pesquisador em medicina veterinária',]);

        CompanyOccupation::create(['code'=>'203320','title'=>'Pesquisador em saúde coletiva','filter'=>'pesquisador em saúde coletiva',]);

        CompanyOccupation::create(['code'=>'203405','title'=>'Pesquisador em ciências agronômicas','filter'=>'pesquisador em ciências agronômicas',]);

        CompanyOccupation::create(['code'=>'203410','title'=>'Pesquisador em ciências da pesca e aqüicultura','filter'=>'pesquisador em ciências da pesca e aqüicultura',]);

        CompanyOccupation::create(['code'=>'203415','title'=>'Pesquisador em ciências da zootecnia','filter'=>'pesquisador em ciências da zootecnia',]);

        CompanyOccupation::create(['code'=>'203420','title'=>'Pesquisador em ciências florestais','filter'=>'pesquisador em ciências florestais',]);

        CompanyOccupation::create(['code'=>'203505','title'=>'Pesquisador em ciências sociais e humanas','filter'=>'pesquisador em ciências sociais e humanas',]);

        CompanyOccupation::create(['code'=>'203510','title'=>'Pesquisador em economia','filter'=>'pesquisador em economia',]);

        CompanyOccupation::create(['code'=>'203515','title'=>'Pesquisador em ciências da educação','filter'=>'pesquisador em ciências da educação',]);

        CompanyOccupation::create(['code'=>'203520','title'=>'Pesquisador em história','filter'=>'pesquisador em história',]);

        CompanyOccupation::create(['code'=>'203525','title'=>'Pesquisador em psicologia','filter'=>'pesquisador em psicologia',]);

        CompanyOccupation::create(['code'=>'204105','title'=>'Perito criminal','filter'=>'perito criminal',]);

        CompanyOccupation::create(['code'=>'204110','title'=>'Perito judicial','filter'=>'perito judicial',]);

        CompanyOccupation::create(['code'=>'21105','title'=>'Subtenente da policia militar','filter'=>'subtenente da policia militar',]);

        CompanyOccupation::create(['code'=>'21110','title'=>'Sargento da policia militar','filter'=>'sargento da policia militar',]);

        CompanyOccupation::create(['code'=>'211105','title'=>'Atuário','filter'=>'atuário',]);

        CompanyOccupation::create(['code'=>'211110','title'=>'Especialista em pesquisa operacional','filter'=>'especialista em pesquisa operacional',]);

        CompanyOccupation::create(['code'=>'211115','title'=>'Matemático','filter'=>'matemático',]);

        CompanyOccupation::create(['code'=>'211120','title'=>'Matemático aplicado','filter'=>'matemático aplicado',]);

        CompanyOccupation::create(['code'=>'211205','title'=>'Estatístico','filter'=>'estatístico',]);

        CompanyOccupation::create(['code'=>'211210','title'=>'Estatístico (estatística aplicada)','filter'=>'estatístico (estatística aplicada)',]);

        CompanyOccupation::create(['code'=>'211215','title'=>'Estatístico teórico','filter'=>'estatístico teórico',]);

        CompanyOccupation::create(['code'=>'211220','title'=>'Cientista de dados','filter'=>'cientista de dados',]);

        CompanyOccupation::create(['code'=>'21205','title'=>'Cabo da polícia militar','filter'=>'cabo da polícia militar',]);

        CompanyOccupation::create(['code'=>'21210','title'=>'Soldado da polícia militar','filter'=>'soldado da polícia militar',]);

        CompanyOccupation::create(['code'=>'212205','title'=>'Engenheiro de aplicativos em computação','filter'=>'engenheiro de aplicativos em computação',]);

        CompanyOccupation::create(['code'=>'212210','title'=>'Engenheiro de equipamentos em computação','filter'=>'engenheiro de equipamentos em computação',]);

        CompanyOccupation::create(['code'=>'212215','title'=>'Engenheiros de sistemas operacionais em computação','filter'=>'engenheiros de sistemas operacionais em computação',]);

        CompanyOccupation::create(['code'=>'212305','title'=>'Administrador de banco de dados','filter'=>'administrador de banco de dados',]);

        CompanyOccupation::create(['code'=>'212310','title'=>'Administrador de redes','filter'=>'administrador de redes',]);

        CompanyOccupation::create(['code'=>'212315','title'=>'Administrador de sistemas operacionais','filter'=>'administrador de sistemas operacionais',]);

        CompanyOccupation::create(['code'=>'212320','title'=>'Administrador em segurança da informação','filter'=>'administrador em segurança da informação',]);

        CompanyOccupation::create(['code'=>'212405','title'=>'Analista de desenvolvimento de sistemas','filter'=>'analista de desenvolvimento de sistemas',]);

        CompanyOccupation::create(['code'=>'212410','title'=>'Analista de redes e de comunicação de dados','filter'=>'analista de redes e de comunicação de dados',]);

        CompanyOccupation::create(['code'=>'212415','title'=>'Analista de sistemas de automação','filter'=>'analista de sistemas de automação',]);

        CompanyOccupation::create(['code'=>'212420','title'=>'Analista de suporte computacional','filter'=>'analista de suporte computacional',]);

        CompanyOccupation::create(['code'=>'212425','title'=>'Arquiteto de soluções de tecnologia da informação','filter'=>'arquiteto de soluções de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'212430','title'=>'Analista de testes de tecnologia da informação','filter'=>'analista de testes de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'213105','title'=>'Físico','filter'=>'físico',]);

        CompanyOccupation::create(['code'=>'213110','title'=>'Físico (acústica)','filter'=>'físico (acústica)',]);

        CompanyOccupation::create(['code'=>'213115','title'=>'Físico (atômica e molecular)','filter'=>'físico (atômica e molecular)',]);

        CompanyOccupation::create(['code'=>'213120','title'=>'Físico (cosmologia)','filter'=>'físico (cosmologia)',]);

        CompanyOccupation::create(['code'=>'213125','title'=>'Físico (estatística e matemática)','filter'=>'físico (estatística e matemática)',]);

        CompanyOccupation::create(['code'=>'213130','title'=>'Físico (fluidos)','filter'=>'físico (fluidos)',]);

        CompanyOccupation::create(['code'=>'213135','title'=>'Físico (instrumentação)','filter'=>'físico (instrumentação)',]);

        CompanyOccupation::create(['code'=>'213140','title'=>'Físico (matéria condensada)','filter'=>'físico (matéria condensada)',]);

        CompanyOccupation::create(['code'=>'213145','title'=>'Físico (materiais)','filter'=>'físico (materiais)',]);

        CompanyOccupation::create(['code'=>'213150','title'=>'Físico (medicina)','filter'=>'físico (medicina)',]);

        CompanyOccupation::create(['code'=>'213155','title'=>'Físico (nuclear e reatores)','filter'=>'físico (nuclear e reatores)',]);

        CompanyOccupation::create(['code'=>'213160','title'=>'Físico (óptica)','filter'=>'físico (óptica)',]);

        CompanyOccupation::create(['code'=>'213165','title'=>'Físico (partículas e campos)','filter'=>'físico (partículas e campos)',]);

        CompanyOccupation::create(['code'=>'213170','title'=>'Físico (plasma)','filter'=>'físico (plasma)',]);

        CompanyOccupation::create(['code'=>'213175','title'=>'Físico (térmica)','filter'=>'físico (térmica)',]);

        CompanyOccupation::create(['code'=>'213205','title'=>'Químico','filter'=>'químico',]);

        CompanyOccupation::create(['code'=>'213210','title'=>'Químico industrial','filter'=>'químico industrial',]);

        CompanyOccupation::create(['code'=>'213215','title'=>'Tecnólogo em processos químicos','filter'=>'tecnólogo em processos químicos',]);

        CompanyOccupation::create(['code'=>'213305','title'=>'Astrônomo','filter'=>'astrônomo',]);

        CompanyOccupation::create(['code'=>'213310','title'=>'Geofísico espacial','filter'=>'geofísico espacial',]);

        CompanyOccupation::create(['code'=>'213315','title'=>'Meteorologista','filter'=>'meteorologista',]);

        CompanyOccupation::create(['code'=>'213405','title'=>'Geólogo','filter'=>'geólogo',]);

        CompanyOccupation::create(['code'=>'213410','title'=>'Geólogo de engenharia','filter'=>'geólogo de engenharia',]);

        CompanyOccupation::create(['code'=>'213415','title'=>'Geofísico','filter'=>'geofísico',]);

        CompanyOccupation::create(['code'=>'213420','title'=>'Geoquímico','filter'=>'geoquímico',]);

        CompanyOccupation::create(['code'=>'213425','title'=>'Hidrogeólogo','filter'=>'hidrogeólogo',]);

        CompanyOccupation::create(['code'=>'213430','title'=>'Paleontólogo','filter'=>'paleontólogo',]);

        CompanyOccupation::create(['code'=>'213435','title'=>'Petrógrafo','filter'=>'petrógrafo',]);

        CompanyOccupation::create(['code'=>'213440','title'=>'Oceanógrafo','filter'=>'oceanógrafo',]);

        CompanyOccupation::create(['code'=>'214005','title'=>'Engenheiro ambiental','filter'=>'engenheiro ambiental',]);

        CompanyOccupation::create(['code'=>'214010','title'=>'Tecnólogo em meio ambiente','filter'=>'tecnólogo em meio ambiente',]);

        CompanyOccupation::create(['code'=>'214105','title'=>'Arquiteto de edificações','filter'=>'arquiteto de edificações',]);

        CompanyOccupation::create(['code'=>'214110','title'=>'Arquiteto de interiores','filter'=>'arquiteto de interiores',]);

        CompanyOccupation::create(['code'=>'214115','title'=>'Arquiteto de patrimônio','filter'=>'arquiteto de patrimônio',]);

        CompanyOccupation::create(['code'=>'214120','title'=>'Arquiteto paisagista','filter'=>'arquiteto paisagista',]);

        CompanyOccupation::create(['code'=>'214125','title'=>'Arquiteto urbanista','filter'=>'arquiteto urbanista',]);

        CompanyOccupation::create(['code'=>'214130','title'=>'Urbanista','filter'=>'urbanista',]);

        CompanyOccupation::create(['code'=>'214205','title'=>'Engenheiro civil','filter'=>'engenheiro civil',]);

        CompanyOccupation::create(['code'=>'214210','title'=>'Engenheiro civil (aeroportos)','filter'=>'engenheiro civil (aeroportos)',]);

        CompanyOccupation::create(['code'=>'214215','title'=>'Engenheiro civil (edificações)','filter'=>'engenheiro civil (edificações)',]);

        CompanyOccupation::create(['code'=>'214220','title'=>'Engenheiro civil (estruturas metálicas)','filter'=>'engenheiro civil (estruturas metálicas)',]);

        CompanyOccupation::create(['code'=>'214225','title'=>'Engenheiro civil (ferrovias e metrovias)','filter'=>'engenheiro civil (ferrovias e metrovias)',]);

        CompanyOccupation::create(['code'=>'214230','title'=>'Engenheiro civil (geotécnia)','filter'=>'engenheiro civil (geotécnia)',]);

        CompanyOccupation::create(['code'=>'214235','title'=>'Engenheiro civil (hidrologia)','filter'=>'engenheiro civil (hidrologia)',]);

        CompanyOccupation::create(['code'=>'214240','title'=>'Engenheiro civil (hidráulica)','filter'=>'engenheiro civil (hidráulica)',]);

        CompanyOccupation::create(['code'=>'214245','title'=>'Engenheiro civil (pontes e viadutos)','filter'=>'engenheiro civil (pontes e viadutos)',]);

        CompanyOccupation::create(['code'=>'214250','title'=>'Engenheiro civil (portos e vias navegáveis)','filter'=>'engenheiro civil (portos e vias navegáveis)',]);

        CompanyOccupation::create(['code'=>'214255','title'=>'Engenheiro civil (rodovias)','filter'=>'engenheiro civil (rodovias)',]);

        CompanyOccupation::create(['code'=>'214260','title'=>'Engenheiro civil (saneamento)','filter'=>'engenheiro civil (saneamento)',]);

        CompanyOccupation::create(['code'=>'214265','title'=>'Engenheiro civil (túneis)','filter'=>'engenheiro civil (túneis)',]);

        CompanyOccupation::create(['code'=>'214270','title'=>'Engenheiro civil (transportes e trânsito)','filter'=>'engenheiro civil (transportes e trânsito)',]);

        CompanyOccupation::create(['code'=>'214280','title'=>'Tecnólogo em construção civil','filter'=>'tecnólogo em construção civil',]);

        CompanyOccupation::create(['code'=>'214305','title'=>'Engenheiro eletricista','filter'=>'engenheiro eletricista',]);

        CompanyOccupation::create(['code'=>'214310','title'=>'Engenheiro eletrônico','filter'=>'engenheiro eletrônico',]);

        CompanyOccupation::create(['code'=>'214315','title'=>'Engenheiro eletricista de manutenção','filter'=>'engenheiro eletricista de manutenção',]);

        CompanyOccupation::create(['code'=>'214320','title'=>'Engenheiro eletricista de projetos','filter'=>'engenheiro eletricista de projetos',]);

        CompanyOccupation::create(['code'=>'214325','title'=>'Engenheiro eletrônico de manutenção','filter'=>'engenheiro eletrônico de manutenção',]);

        CompanyOccupation::create(['code'=>'214330','title'=>'Engenheiro eletrônico de projetos','filter'=>'engenheiro eletrônico de projetos',]);

        CompanyOccupation::create(['code'=>'214335','title'=>'Engenheiro de manutenção de telecomunicações','filter'=>'engenheiro de manutenção de telecomunicações',]);

        CompanyOccupation::create(['code'=>'214340','title'=>'Engenheiro de telecomunicações','filter'=>'engenheiro de telecomunicações',]);

        CompanyOccupation::create(['code'=>'214345','title'=>'Engenheiro projetista de telecomunicações','filter'=>'engenheiro projetista de telecomunicações',]);

        CompanyOccupation::create(['code'=>'214350','title'=>'Engenheiro de redes de comunicação','filter'=>'engenheiro de redes de comunicação',]);

        CompanyOccupation::create(['code'=>'214360','title'=>'Tecnólogo em eletricidade','filter'=>'tecnólogo em eletricidade',]);

        CompanyOccupation::create(['code'=>'214365','title'=>'Tecnólogo em eletrônica','filter'=>'tecnólogo em eletrônica',]);

        CompanyOccupation::create(['code'=>'214370','title'=>'Tecnólogo em telecomunicações','filter'=>'tecnólogo em telecomunicações',]);

        CompanyOccupation::create(['code'=>'214375','title'=>'Engenheiro de energia','filter'=>'engenheiro de energia',]);

        CompanyOccupation::create(['code'=>'214380','title'=>'Engenheiro biomédico','filter'=>'engenheiro biomédico',]);

        CompanyOccupation::create(['code'=>'214405','title'=>'Engenheiro mecânico','filter'=>'engenheiro mecânico',]);

        CompanyOccupation::create(['code'=>'214410','title'=>'Engenheiro mecânico automotivo','filter'=>'engenheiro mecânico automotivo',]);

        CompanyOccupation::create(['code'=>'214415','title'=>'Engenheiro mecânico (energia nuclear)','filter'=>'engenheiro mecânico (energia nuclear)',]);

        CompanyOccupation::create(['code'=>'214420','title'=>'Engenheiro mecânico industrial','filter'=>'engenheiro mecânico industrial',]);

        CompanyOccupation::create(['code'=>'214425','title'=>'Engenheiro aeronáutico','filter'=>'engenheiro aeronáutico',]);

        CompanyOccupation::create(['code'=>'214430','title'=>'Engenheiro naval','filter'=>'engenheiro naval',]);

        CompanyOccupation::create(['code'=>'214435','title'=>'Tecnólogo em fabricação mecânica','filter'=>'tecnólogo em fabricação mecânica',]);

        CompanyOccupation::create(['code'=>'214505','title'=>'Engenheiro químico','filter'=>'engenheiro químico',]);

        CompanyOccupation::create(['code'=>'214510','title'=>'Engenheiro químico (indústria química)','filter'=>'engenheiro químico (indústria química)',]);

        CompanyOccupation::create(['code'=>'214515','title'=>'Engenheiro químico (mineração, metalurgia, siderurgia, cimenteira e cerâmica)','filter'=>'engenheiro químico (mineração, metalurgia, siderurgia, cimenteira e cerâmica)',]);

        CompanyOccupation::create(['code'=>'214520','title'=>'Engenheiro químico (papel e celulose)','filter'=>'engenheiro químico (papel e celulose)',]);

        CompanyOccupation::create(['code'=>'214525','title'=>'Engenheiro químico (petróleo e borracha)','filter'=>'engenheiro químico (petróleo e borracha)',]);

        CompanyOccupation::create(['code'=>'214530','title'=>'Engenheiro químico (utilidades e meio ambiente)','filter'=>'engenheiro químico (utilidades e meio ambiente)',]);

        CompanyOccupation::create(['code'=>'214535','title'=>'Tecnólogo em produção sulcroalcooleira','filter'=>'tecnólogo em produção sulcroalcooleira',]);

        CompanyOccupation::create(['code'=>'214540','title'=>'Engenheiro têxtil','filter'=>'engenheiro têxtil',]);

        CompanyOccupation::create(['code'=>'214605','title'=>'Engenheiro de materiais','filter'=>'engenheiro de materiais',]);

        CompanyOccupation::create(['code'=>'214610','title'=>'Engenheiro metalurgista','filter'=>'engenheiro metalurgista',]);

        CompanyOccupation::create(['code'=>'214615','title'=>'Tecnólogo em metalurgia','filter'=>'tecnólogo em metalurgia',]);

        CompanyOccupation::create(['code'=>'214705','title'=>'Engenheiro de minas','filter'=>'engenheiro de minas',]);

        CompanyOccupation::create(['code'=>'214710','title'=>'Engenheiro de minas (beneficiamento)','filter'=>'engenheiro de minas (beneficiamento)',]);

        CompanyOccupation::create(['code'=>'214715','title'=>'Engenheiro de minas (lavra a céu aberto)','filter'=>'engenheiro de minas (lavra a céu aberto)',]);

        CompanyOccupation::create(['code'=>'214720','title'=>'Engenheiro de minas (lavra subterrânea)','filter'=>'engenheiro de minas (lavra subterrânea)',]);

        CompanyOccupation::create(['code'=>'214725','title'=>'Engenheiro de minas (pesquisa mineral)','filter'=>'engenheiro de minas (pesquisa mineral)',]);

        CompanyOccupation::create(['code'=>'214730','title'=>'Engenheiro de minas (planejamento)','filter'=>'engenheiro de minas (planejamento)',]);

        CompanyOccupation::create(['code'=>'214735','title'=>'Engenheiro de minas (processo)','filter'=>'engenheiro de minas (processo)',]);

        CompanyOccupation::create(['code'=>'214740','title'=>'Engenheiro de minas (projeto)','filter'=>'engenheiro de minas (projeto)',]);

        CompanyOccupation::create(['code'=>'214745','title'=>'Tecnólogo em petróleo e gás','filter'=>'tecnólogo em petróleo e gás',]);

        CompanyOccupation::create(['code'=>'214750','title'=>'Tecnólogo em rochas ornamentais','filter'=>'tecnólogo em rochas ornamentais',]);

        CompanyOccupation::create(['code'=>'214805','title'=>'Engenheiro agrimensor','filter'=>'engenheiro agrimensor',]);

        CompanyOccupation::create(['code'=>'214810','title'=>'Engenheiro cartógrafo','filter'=>'engenheiro cartógrafo',]);

        CompanyOccupation::create(['code'=>'214905','title'=>'Engenheiro de produção','filter'=>'engenheiro de produção',]);

        CompanyOccupation::create(['code'=>'214910','title'=>'Engenheiro de controle de qualidade','filter'=>'engenheiro de controle de qualidade',]);

        CompanyOccupation::create(['code'=>'214915','title'=>'Engenheiro de segurança do trabalho','filter'=>'engenheiro de segurança do trabalho',]);

        CompanyOccupation::create(['code'=>'214920','title'=>'Engenheiro de riscos','filter'=>'engenheiro de riscos',]);

        CompanyOccupation::create(['code'=>'214925','title'=>'Engenheiro de tempos e movimentos','filter'=>'engenheiro de tempos e movimentos',]);

        CompanyOccupation::create(['code'=>'214930','title'=>'Tecnólogo em produção industrial','filter'=>'tecnólogo em produção industrial',]);

        CompanyOccupation::create(['code'=>'214935','title'=>'Tecnólogo em segurança do trabalho','filter'=>'tecnólogo em segurança do trabalho',]);

        CompanyOccupation::create(['code'=>'214940','title'=>'Higienista ocupacional','filter'=>'higienista ocupacional',]);

        CompanyOccupation::create(['code'=>'214945','title'=>'Engenheiro de logistica','filter'=>'engenheiro de logistica',]);

        CompanyOccupation::create(['code'=>'215105','title'=>'Agente de manobra e docagem','filter'=>'agente de manobra e docagem',]);

        CompanyOccupation::create(['code'=>'215110','title'=>'Capitão de manobra da marinha mercante','filter'=>'capitão de manobra da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215115','title'=>'Comandante da marinha mercante','filter'=>'comandante da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215120','title'=>'Coordenador de operações de combate à poluição no meio aquaviário','filter'=>'coordenador de operações de combate à poluição no meio aquaviário',]);

        CompanyOccupation::create(['code'=>'215125','title'=>'Imediato da marinha mercante','filter'=>'imediato da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215130','title'=>'Inspetor de terminal','filter'=>'inspetor de terminal',]);

        CompanyOccupation::create(['code'=>'215135','title'=>'Inspetor naval','filter'=>'inspetor naval',]);

        CompanyOccupation::create(['code'=>'215140','title'=>'Oficial de quarto de navegação da marinha mercante','filter'=>'oficial de quarto de navegação da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215145','title'=>'Prático de portos da marinha mercante','filter'=>'prático de portos da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215150','title'=>'Vistoriador naval','filter'=>'vistoriador naval',]);

        CompanyOccupation::create(['code'=>'215205','title'=>'Oficial superior de máquinas da marinha mercante','filter'=>'oficial superior de máquinas da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215210','title'=>'Primeiro oficial de máquinas da marinha mercante','filter'=>'primeiro oficial de máquinas da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215215','title'=>'Segundo oficial de máquinas da marinha mercante','filter'=>'segundo oficial de máquinas da marinha mercante',]);

        CompanyOccupation::create(['code'=>'215220','title'=>'Superintendente técnico no transporte aquaviário','filter'=>'superintendente técnico no transporte aquaviário',]);

        CompanyOccupation::create(['code'=>'215305','title'=>'Piloto de aeronaves','filter'=>'piloto de aeronaves',]);

        CompanyOccupation::create(['code'=>'215310','title'=>'Piloto de ensaios em vôo','filter'=>'piloto de ensaios em vôo',]);

        CompanyOccupation::create(['code'=>'215315','title'=>'Instrutor de vôo','filter'=>'instrutor de vôo',]);

        CompanyOccupation::create(['code'=>'221105','title'=>'Biólogo','filter'=>'biólogo',]);

        CompanyOccupation::create(['code'=>'221205','title'=>'Biomédico','filter'=>'biomédico',]);

        CompanyOccupation::create(['code'=>'222105','title'=>'Engenheiro agrícola','filter'=>'engenheiro agrícola',]);

        CompanyOccupation::create(['code'=>'222110','title'=>'Engenheiro agrônomo','filter'=>'engenheiro agrônomo',]);

        CompanyOccupation::create(['code'=>'222115','title'=>'Engenheiro de pesca','filter'=>'engenheiro de pesca',]);

        CompanyOccupation::create(['code'=>'222120','title'=>'Engenheiro florestal','filter'=>'engenheiro florestal',]);

        CompanyOccupation::create(['code'=>'222125','title'=>'Tecnólogo em agronegócio','filter'=>'tecnólogo em agronegócio',]);

        CompanyOccupation::create(['code'=>'222205','title'=>'Engenheiro de alimentos','filter'=>'engenheiro de alimentos',]);

        CompanyOccupation::create(['code'=>'222215','title'=>'Tecnólogo em alimentos','filter'=>'tecnólogo em alimentos',]);

        CompanyOccupation::create(['code'=>'223204','title'=>'Cirurgião dentista - auditor','filter'=>'cirurgião dentista - auditor',]);

        CompanyOccupation::create(['code'=>'223208','title'=>'Cirurgião dentista - clínico geral','filter'=>'cirurgião dentista - clínico geral',]);

        CompanyOccupation::create(['code'=>'223212','title'=>'Cirurgião dentista - endodontista','filter'=>'cirurgião dentista - endodontista',]);

        CompanyOccupation::create(['code'=>'223216','title'=>'Cirurgião dentista - epidemiologista','filter'=>'cirurgião dentista - epidemiologista',]);

        CompanyOccupation::create(['code'=>'223220','title'=>'Cirurgião dentista - estomatologista','filter'=>'cirurgião dentista - estomatologista',]);

        CompanyOccupation::create(['code'=>'223224','title'=>'Cirurgião dentista - implantodontista','filter'=>'cirurgião dentista - implantodontista',]);

        CompanyOccupation::create(['code'=>'223228','title'=>'Cirurgião dentista - odontogeriatra','filter'=>'cirurgião dentista - odontogeriatra',]);

        CompanyOccupation::create(['code'=>'223232','title'=>'Cirurgião dentista - odontologista legal','filter'=>'cirurgião dentista - odontologista legal',]);

        CompanyOccupation::create(['code'=>'223236','title'=>'Cirurgião dentista - odontopediatra','filter'=>'cirurgião dentista - odontopediatra',]);

        CompanyOccupation::create(['code'=>'223240','title'=>'Cirurgião dentista - ortopedista e ortodontista','filter'=>'cirurgião dentista - ortopedista e ortodontista',]);

        CompanyOccupation::create(['code'=>'223244','title'=>'Cirurgião dentista - patologista bucal','filter'=>'cirurgião dentista - patologista bucal',]);

        CompanyOccupation::create(['code'=>'223248','title'=>'Cirurgião dentista - periodontista','filter'=>'cirurgião dentista - periodontista',]);

        CompanyOccupation::create(['code'=>'223252','title'=>'Cirurgião dentista - protesiólogo bucomaxilofacial','filter'=>'cirurgião dentista - protesiólogo bucomaxilofacial',]);

        CompanyOccupation::create(['code'=>'223256','title'=>'Cirurgião dentista - protesista','filter'=>'cirurgião dentista - protesista',]);

        CompanyOccupation::create(['code'=>'223260','title'=>'Cirurgião dentista - radiologista','filter'=>'cirurgião dentista - radiologista',]);

        CompanyOccupation::create(['code'=>'223264','title'=>'Cirurgião dentista - reabilitador oral','filter'=>'cirurgião dentista - reabilitador oral',]);

        CompanyOccupation::create(['code'=>'223268','title'=>'Cirurgião dentista - traumatologista bucomaxilofacial','filter'=>'cirurgião dentista - traumatologista bucomaxilofacial',]);

        CompanyOccupation::create(['code'=>'223272','title'=>'Cirurgião dentista de saúde coletiva','filter'=>'cirurgião dentista de saúde coletiva',]);

        CompanyOccupation::create(['code'=>'223276','title'=>'Cirurgião dentista - odontologia do trabalho','filter'=>'cirurgião dentista - odontologia do trabalho',]);

        CompanyOccupation::create(['code'=>'223280','title'=>'Cirurgião dentista - dentística','filter'=>'cirurgião dentista - dentística',]);

        CompanyOccupation::create(['code'=>'223284','title'=>'Cirurgião dentista - disfunção temporomandibular e dor orofacial','filter'=>'cirurgião dentista - disfunção temporomandibular e dor orofacial',]);

        CompanyOccupation::create(['code'=>'223288','title'=>'Cirurgião dentista - odontologia para pacientes com necessidades especiais','filter'=>'cirurgião dentista - odontologia para pacientes com necessidades especiais',]);

        CompanyOccupation::create(['code'=>'223293','title'=>'Cirurgião-dentista da estratégia de saúde da família','filter'=>'cirurgião-dentista da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'223305','title'=>'Médico veterinário','filter'=>'médico veterinário',]);

        CompanyOccupation::create(['code'=>'223310','title'=>'Zootecnista','filter'=>'zootecnista',]);

        CompanyOccupation::create(['code'=>'223405','title'=>'Farmacêutico','filter'=>'farmacêutico',]);

        CompanyOccupation::create(['code'=>'223415','title'=>'Farmacêutico analista clínico','filter'=>'farmacêutico analista clínico',]);

        CompanyOccupation::create(['code'=>'223420','title'=>'Farmacêutico de alimentos','filter'=>'farmacêutico de alimentos',]);

        CompanyOccupation::create(['code'=>'223425','title'=>'Farmacêutico práticas integrativas e complementares','filter'=>'farmacêutico práticas integrativas e complementares',]);

        CompanyOccupation::create(['code'=>'223430','title'=>'Farmacêutico em saúde pública','filter'=>'farmacêutico em saúde pública',]);

        CompanyOccupation::create(['code'=>'223435','title'=>'Farmacêutico industrial','filter'=>'farmacêutico industrial',]);

        CompanyOccupation::create(['code'=>'223440','title'=>'Farmacêutico toxicologista','filter'=>'farmacêutico toxicologista',]);

        CompanyOccupation::create(['code'=>'223445','title'=>'Farmacêutico hospitalar e clínico','filter'=>'farmacêutico hospitalar e clínico',]);

        CompanyOccupation::create(['code'=>'223505','title'=>'Enfermeiro','filter'=>'enfermeiro',]);

        CompanyOccupation::create(['code'=>'223510','title'=>'Enfermeiro auditor','filter'=>'enfermeiro auditor',]);

        CompanyOccupation::create(['code'=>'223515','title'=>'Enfermeiro de bordo','filter'=>'enfermeiro de bordo',]);

        CompanyOccupation::create(['code'=>'223520','title'=>'Enfermeiro de centro cirúrgico','filter'=>'enfermeiro de centro cirúrgico',]);

        CompanyOccupation::create(['code'=>'223525','title'=>'Enfermeiro de terapia intensiva','filter'=>'enfermeiro de terapia intensiva',]);

        CompanyOccupation::create(['code'=>'223530','title'=>'Enfermeiro do trabalho','filter'=>'enfermeiro do trabalho',]);

        CompanyOccupation::create(['code'=>'223535','title'=>'Enfermeiro nefrologista','filter'=>'enfermeiro nefrologista',]);

        CompanyOccupation::create(['code'=>'223540','title'=>'Enfermeiro neonatologista','filter'=>'enfermeiro neonatologista',]);

        CompanyOccupation::create(['code'=>'223545','title'=>'Enfermeiro obstétrico','filter'=>'enfermeiro obstétrico',]);

        CompanyOccupation::create(['code'=>'223550','title'=>'Enfermeiro psiquiátrico','filter'=>'enfermeiro psiquiátrico',]);

        CompanyOccupation::create(['code'=>'223555','title'=>'Enfermeiro puericultor e pediátrico','filter'=>'enfermeiro puericultor e pediátrico',]);

        CompanyOccupation::create(['code'=>'223560','title'=>'Enfermeiro sanitarista','filter'=>'enfermeiro sanitarista',]);

        CompanyOccupation::create(['code'=>'223565','title'=>'Enfermeiro da estratégia de saúde da família','filter'=>'enfermeiro da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'223570','title'=>'Perfusionista','filter'=>'perfusionista',]);

        CompanyOccupation::create(['code'=>'223575','title'=>'Obstetriz','filter'=>'obstetriz',]);

        CompanyOccupation::create(['code'=>'223580','title'=>'Enfermeiro estomaterapeuta','filter'=>'enfermeiro estomaterapeuta',]);

        CompanyOccupation::create(['code'=>'223585','title'=>'Enfermeiro forense','filter'=>'enfermeiro forense',]);

        CompanyOccupation::create(['code'=>'223605','title'=>'Fisioterapeuta geral','filter'=>'fisioterapeuta geral',]);

        CompanyOccupation::create(['code'=>'223625','title'=>'Fisioterapeuta respiratória','filter'=>'fisioterapeuta respiratória',]);

        CompanyOccupation::create(['code'=>'223630','title'=>'Fisioterapeuta neurofuncional','filter'=>'fisioterapeuta neurofuncional',]);

        CompanyOccupation::create(['code'=>'223635','title'=>'Fisioterapeuta traumato-ortopédica funcional','filter'=>'fisioterapeuta traumato-ortopédica funcional',]);

        CompanyOccupation::create(['code'=>'223640','title'=>'Fisioterapeuta osteopata','filter'=>'fisioterapeuta osteopata',]);

        CompanyOccupation::create(['code'=>'223645','title'=>'Fisioterapeuta quiropraxista','filter'=>'fisioterapeuta quiropraxista',]);

        CompanyOccupation::create(['code'=>'223650','title'=>'Fisioterapeuta acupunturista','filter'=>'fisioterapeuta acupunturista',]);

        CompanyOccupation::create(['code'=>'223655','title'=>'Fisioterapeuta esportivo','filter'=>'fisioterapeuta esportivo',]);

        CompanyOccupation::create(['code'=>'223660','title'=>'Fisioterapeuta do trabalho','filter'=>'fisioterapeuta do trabalho',]);

        CompanyOccupation::create(['code'=>'223705','title'=>'Dietista','filter'=>'dietista',]);

        CompanyOccupation::create(['code'=>'223710','title'=>'Nutricionista','filter'=>'nutricionista',]);

        CompanyOccupation::create(['code'=>'223810','title'=>'Fonoaudiólogo geral','filter'=>'fonoaudiólogo geral',]);

        CompanyOccupation::create(['code'=>'223815','title'=>'Fonoaudiólogo educacional','filter'=>'fonoaudiólogo educacional',]);

        CompanyOccupation::create(['code'=>'223820','title'=>'Fonoaudiólogo em audiologia','filter'=>'fonoaudiólogo em audiologia',]);

        CompanyOccupation::create(['code'=>'223825','title'=>'Fonoaudiólogo em disfagia','filter'=>'fonoaudiólogo em disfagia',]);

        CompanyOccupation::create(['code'=>'223830','title'=>'Fonoaudiólogo em linguagem','filter'=>'fonoaudiólogo em linguagem',]);

        CompanyOccupation::create(['code'=>'223835','title'=>'Fonoaudiólogo em motricidade orofacial','filter'=>'fonoaudiólogo em motricidade orofacial',]);

        CompanyOccupation::create(['code'=>'223840','title'=>'Fonoaudiólogo em saúde coletiva','filter'=>'fonoaudiólogo em saúde coletiva',]);

        CompanyOccupation::create(['code'=>'223845','title'=>'Fonoaudiólogo em voz','filter'=>'fonoaudiólogo em voz',]);

        CompanyOccupation::create(['code'=>'223905','title'=>'Terapeuta ocupacional','filter'=>'terapeuta ocupacional',]);

        CompanyOccupation::create(['code'=>'223910','title'=>'Ortoptista','filter'=>'ortoptista',]);

        CompanyOccupation::create(['code'=>'223915','title'=>'Psicomotricista','filter'=>'psicomotricista',]);

        CompanyOccupation::create(['code'=>'224105','title'=>'Avaliador físico','filter'=>'avaliador físico',]);

        CompanyOccupation::create(['code'=>'224110','title'=>'Ludomotricista','filter'=>'ludomotricista',]);

        CompanyOccupation::create(['code'=>'224115','title'=>'Preparador de atleta','filter'=>'preparador de atleta',]);

        CompanyOccupation::create(['code'=>'224120','title'=>'Preparador físico','filter'=>'preparador físico',]);

        CompanyOccupation::create(['code'=>'224125','title'=>'Técnico de desporto individual e coletivo (exceto futebol)','filter'=>'técnico de desporto individual e coletivo (exceto futebol)',]);

        CompanyOccupation::create(['code'=>'224130','title'=>'Técnico de laboratório e fiscalização desportiva','filter'=>'técnico de laboratório e fiscalização desportiva',]);

        CompanyOccupation::create(['code'=>'224135','title'=>'Treinador profissional de futebol','filter'=>'treinador profissional de futebol',]);

        CompanyOccupation::create(['code'=>'224140','title'=>'Profissional de educação física na saúde','filter'=>'profissional de educação física na saúde',]);

        CompanyOccupation::create(['code'=>'225103','title'=>'Médico infectologista','filter'=>'médico infectologista',]);

        CompanyOccupation::create(['code'=>'225105','title'=>'Médico acupunturista','filter'=>'médico acupunturista',]);

        CompanyOccupation::create(['code'=>'225106','title'=>'Médico legista','filter'=>'médico legista',]);

        CompanyOccupation::create(['code'=>'225109','title'=>'Médico nefrologista','filter'=>'médico nefrologista',]);

        CompanyOccupation::create(['code'=>'225110','title'=>'Médico alergista e imunologista','filter'=>'médico alergista e imunologista',]);

        CompanyOccupation::create(['code'=>'225112','title'=>'Médico neurologista','filter'=>'médico neurologista',]);

        CompanyOccupation::create(['code'=>'225115','title'=>'Médico angiologista','filter'=>'médico angiologista',]);

        CompanyOccupation::create(['code'=>'225118','title'=>'Médico nutrologista','filter'=>'médico nutrologista',]);

        CompanyOccupation::create(['code'=>'225120','title'=>'Médico cardiologista','filter'=>'médico cardiologista',]);

        CompanyOccupation::create(['code'=>'225121','title'=>'Médico oncologista clínico','filter'=>'médico oncologista clínico',]);

        CompanyOccupation::create(['code'=>'225122','title'=>'Médico cancerologista pediátrico','filter'=>'médico cancerologista pediátrico',]);

        CompanyOccupation::create(['code'=>'225124','title'=>'Médico pediatra','filter'=>'médico pediatra',]);

        CompanyOccupation::create(['code'=>'225125','title'=>'Médico clínico','filter'=>'médico clínico',]);

        CompanyOccupation::create(['code'=>'225127','title'=>'Médico pneumologista','filter'=>'médico pneumologista',]);

        CompanyOccupation::create(['code'=>'225130','title'=>'Médico de família e comunidade','filter'=>'médico de família e comunidade',]);

        CompanyOccupation::create(['code'=>'225133','title'=>'Médico psiquiatra','filter'=>'médico psiquiatra',]);

        CompanyOccupation::create(['code'=>'225135','title'=>'Médico dermatologista','filter'=>'médico dermatologista',]);

        CompanyOccupation::create(['code'=>'225136','title'=>'Médico reumatologista','filter'=>'médico reumatologista',]);

        CompanyOccupation::create(['code'=>'225139','title'=>'Médico sanitarista','filter'=>'médico sanitarista',]);

        CompanyOccupation::create(['code'=>'225140','title'=>'Médico do trabalho','filter'=>'médico do trabalho',]);

        CompanyOccupation::create(['code'=>'225142','title'=>'Médico da estratégia de saúde da família','filter'=>'médico da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'225145','title'=>'Médico em medicina de tráfego','filter'=>'médico em medicina de tráfego',]);

        CompanyOccupation::create(['code'=>'225148','title'=>'Médico anatomopatologista','filter'=>'médico anatomopatologista',]);

        CompanyOccupation::create(['code'=>'225150','title'=>'Médico em medicina intensiva','filter'=>'médico em medicina intensiva',]);

        CompanyOccupation::create(['code'=>'225151','title'=>'Médico anestesiologista','filter'=>'médico anestesiologista',]);

        CompanyOccupation::create(['code'=>'225154','title'=>'Médico antroposófico','filter'=>'médico antroposófico',]);

        CompanyOccupation::create(['code'=>'225155','title'=>'Médico endocrinologista e metabologista','filter'=>'médico endocrinologista e metabologista',]);

        CompanyOccupation::create(['code'=>'225160','title'=>'Médico fisiatra','filter'=>'médico fisiatra',]);

        CompanyOccupation::create(['code'=>'225165','title'=>'Médico gastroenterologista','filter'=>'médico gastroenterologista',]);

        CompanyOccupation::create(['code'=>'225170','title'=>'Médico generalista','filter'=>'médico generalista',]);

        CompanyOccupation::create(['code'=>'225175','title'=>'Médico geneticista','filter'=>'médico geneticista',]);

        CompanyOccupation::create(['code'=>'225180','title'=>'Médico geriatra','filter'=>'médico geriatra',]);

        CompanyOccupation::create(['code'=>'225185','title'=>'Médico hematologista','filter'=>'médico hematologista',]);

        CompanyOccupation::create(['code'=>'225195','title'=>'Médico homeopata','filter'=>'médico homeopata',]);

        CompanyOccupation::create(['code'=>'225203','title'=>'Médico em cirurgia vascular','filter'=>'médico em cirurgia vascular',]);

        CompanyOccupation::create(['code'=>'225210','title'=>'Médico cirurgião cardiovascular','filter'=>'médico cirurgião cardiovascular',]);

        CompanyOccupation::create(['code'=>'225215','title'=>'Médico cirurgião de cabeça e pescoço','filter'=>'médico cirurgião de cabeça e pescoço',]);

        CompanyOccupation::create(['code'=>'225220','title'=>'Médico cirurgião do aparelho digestivo','filter'=>'médico cirurgião do aparelho digestivo',]);

        CompanyOccupation::create(['code'=>'225225','title'=>'Médico cirurgião geral','filter'=>'médico cirurgião geral',]);

        CompanyOccupation::create(['code'=>'225230','title'=>'Médico cirurgião pediátrico','filter'=>'médico cirurgião pediátrico',]);

        CompanyOccupation::create(['code'=>'225235','title'=>'Médico cirurgião plástico','filter'=>'médico cirurgião plástico',]);

        CompanyOccupation::create(['code'=>'225240','title'=>'Médico cirurgião torácico','filter'=>'médico cirurgião torácico',]);

        CompanyOccupation::create(['code'=>'225250','title'=>'Médico ginecologista e obstetra','filter'=>'médico ginecologista e obstetra',]);

        CompanyOccupation::create(['code'=>'225255','title'=>'Médico mastologista','filter'=>'médico mastologista',]);

        CompanyOccupation::create(['code'=>'225260','title'=>'Médico neurocirurgião','filter'=>'médico neurocirurgião',]);

        CompanyOccupation::create(['code'=>'225265','title'=>'Médico oftalmologista','filter'=>'médico oftalmologista',]);

        CompanyOccupation::create(['code'=>'225270','title'=>'Médico ortopedista e traumatologista','filter'=>'médico ortopedista e traumatologista',]);

        CompanyOccupation::create(['code'=>'225275','title'=>'Médico otorrinolaringologista','filter'=>'médico otorrinolaringologista',]);

        CompanyOccupation::create(['code'=>'225280','title'=>'Médico coloproctologista','filter'=>'médico coloproctologista',]);

        CompanyOccupation::create(['code'=>'225285','title'=>'Médico urologista','filter'=>'médico urologista',]);

        CompanyOccupation::create(['code'=>'225290','title'=>'Médico cancerologista cirurgíco','filter'=>'médico cancerologista cirurgíco',]);

        CompanyOccupation::create(['code'=>'225295','title'=>'Médico cirurgião da mão','filter'=>'médico cirurgião da mão',]);

        CompanyOccupation::create(['code'=>'225305','title'=>'Médico citopatologista','filter'=>'médico citopatologista',]);

        CompanyOccupation::create(['code'=>'225310','title'=>'Médico em endoscopia','filter'=>'médico em endoscopia',]);

        CompanyOccupation::create(['code'=>'225315','title'=>'Médico em medicina nuclear','filter'=>'médico em medicina nuclear',]);

        CompanyOccupation::create(['code'=>'225320','title'=>'Médico em radiologia e diagnóstico por imagem','filter'=>'médico em radiologia e diagnóstico por imagem',]);

        CompanyOccupation::create(['code'=>'225325','title'=>'Médico patologista','filter'=>'médico patologista',]);

        CompanyOccupation::create(['code'=>'225330','title'=>'Médico radioterapeuta','filter'=>'médico radioterapeuta',]);

        CompanyOccupation::create(['code'=>'225335','title'=>'Médico patologista clínico / medicina laboratorial','filter'=>'médico patologista clínico / medicina laboratorial',]);

        CompanyOccupation::create(['code'=>'225340','title'=>'Médico hemoterapeuta','filter'=>'médico hemoterapeuta',]);

        CompanyOccupation::create(['code'=>'225345','title'=>'Médico hiperbarista','filter'=>'médico hiperbarista',]);

        CompanyOccupation::create(['code'=>'225350','title'=>'Médico neurofisiologista clínico','filter'=>'médico neurofisiologista clínico',]);

        CompanyOccupation::create(['code'=>'225355','title'=>'Médico radiologista intervencionista','filter'=>'médico radiologista intervencionista',]);

        CompanyOccupation::create(['code'=>'226105','title'=>'Quiropraxista','filter'=>'quiropraxista',]);

        CompanyOccupation::create(['code'=>'226110','title'=>'Osteopata','filter'=>'osteopata',]);

        CompanyOccupation::create(['code'=>'226305','title'=>'Musicoterapeuta','filter'=>'musicoterapeuta',]);

        CompanyOccupation::create(['code'=>'226310','title'=>'Arteterapeuta','filter'=>'arteterapeuta',]);

        CompanyOccupation::create(['code'=>'226315','title'=>'Equoterapeuta','filter'=>'equoterapeuta',]);

        CompanyOccupation::create(['code'=>'226320','title'=>'Naturólogo','filter'=>'naturólogo',]);

        CompanyOccupation::create(['code'=>'231105','title'=>'Professor de nível superior na educação infantil (quatro a seis anos)','filter'=>'professor de nível superior na educação infantil (quatro a seis anos)',]);

        CompanyOccupation::create(['code'=>'231110','title'=>'Professor de nível superior na educação infantil (zero a três anos)','filter'=>'professor de nível superior na educação infantil (zero a três anos)',]);

        CompanyOccupation::create(['code'=>'231205','title'=>'Professor da educação de jovens e adultos do ensino fundamental (primeira a quarta série)','filter'=>'professor da educação de jovens e adultos do ensino fundamental (primeira a quarta série)',]);

        CompanyOccupation::create(['code'=>'231210','title'=>'Professor de nível superior do ensino fundamental (primeira a quarta série)','filter'=>'professor de nível superior do ensino fundamental (primeira a quarta série)',]);

        CompanyOccupation::create(['code'=>'231305','title'=>'Professor de ciências exatas e naturais do ensino fundamental','filter'=>'professor de ciências exatas e naturais do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231310','title'=>'Professor de educação artística do ensino fundamental','filter'=>'professor de educação artística do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231315','title'=>'Professor de educação física do ensino fundamental','filter'=>'professor de educação física do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231320','title'=>'Professor de geografia do ensino fundamental','filter'=>'professor de geografia do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231325','title'=>'Professor de história do ensino fundamental','filter'=>'professor de história do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231330','title'=>'Professor de língua estrangeira moderna do ensino fundamental','filter'=>'professor de língua estrangeira moderna do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231335','title'=>'Professor de língua portuguesa do ensino fundamental','filter'=>'professor de língua portuguesa do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'231340','title'=>'Professor de matemática do ensino fundamental','filter'=>'professor de matemática do ensino fundamental',]);

        CompanyOccupation::create(['code'=>'232105','title'=>'Professor de artes no ensino médio','filter'=>'professor de artes no ensino médio',]);

        CompanyOccupation::create(['code'=>'232110','title'=>'Professor de biologia no ensino médio','filter'=>'professor de biologia no ensino médio',]);

        CompanyOccupation::create(['code'=>'232115','title'=>'Professor de disciplinas pedagógicas no ensino médio','filter'=>'professor de disciplinas pedagógicas no ensino médio',]);

        CompanyOccupation::create(['code'=>'232120','title'=>'Professor de educação física no ensino médio','filter'=>'professor de educação física no ensino médio',]);

        CompanyOccupation::create(['code'=>'232125','title'=>'Professor de filosofia no ensino médio','filter'=>'professor de filosofia no ensino médio',]);

        CompanyOccupation::create(['code'=>'232130','title'=>'Professor de física no ensino médio','filter'=>'professor de física no ensino médio',]);

        CompanyOccupation::create(['code'=>'232135','title'=>'Professor de geografia no ensino médio','filter'=>'professor de geografia no ensino médio',]);

        CompanyOccupation::create(['code'=>'232140','title'=>'Professor de história no ensino médio','filter'=>'professor de história no ensino médio',]);

        CompanyOccupation::create(['code'=>'232145','title'=>'Professor de língua e literatura brasileira no ensino médio','filter'=>'professor de língua e literatura brasileira no ensino médio',]);

        CompanyOccupation::create(['code'=>'232150','title'=>'Professor de língua estrangeira moderna no ensino médio','filter'=>'professor de língua estrangeira moderna no ensino médio',]);

        CompanyOccupation::create(['code'=>'232155','title'=>'Professor de matemática no ensino médio','filter'=>'professor de matemática no ensino médio',]);

        CompanyOccupation::create(['code'=>'232160','title'=>'Professor de psicologia no ensino médio','filter'=>'professor de psicologia no ensino médio',]);

        CompanyOccupation::create(['code'=>'232165','title'=>'Professor de química no ensino médio','filter'=>'professor de química no ensino médio',]);

        CompanyOccupation::create(['code'=>'232170','title'=>'Professor de sociologia no ensino médio','filter'=>'professor de sociologia no ensino médio',]);

        CompanyOccupation::create(['code'=>'233105','title'=>'Professor da área de meio ambiente','filter'=>'professor da área de meio ambiente',]);

        CompanyOccupation::create(['code'=>'233110','title'=>'Professor de desenho técnico','filter'=>'professor de desenho técnico',]);

        CompanyOccupation::create(['code'=>'233115','title'=>'Professor de técnicas agrícolas','filter'=>'professor de técnicas agrícolas',]);

        CompanyOccupation::create(['code'=>'233120','title'=>'Professor de técnicas comerciais e secretariais','filter'=>'professor de técnicas comerciais e secretariais',]);

        CompanyOccupation::create(['code'=>'233125','title'=>'Professor de técnicas de enfermagem','filter'=>'professor de técnicas de enfermagem',]);

        CompanyOccupation::create(['code'=>'233130','title'=>'Professor de técnicas industriais','filter'=>'professor de técnicas industriais',]);

        CompanyOccupation::create(['code'=>'233135','title'=>'Professor de tecnologia e cálculo técnico','filter'=>'professor de tecnologia e cálculo técnico',]);

        CompanyOccupation::create(['code'=>'233205','title'=>'Instrutor de aprendizagem e treinamento agropecuário','filter'=>'instrutor de aprendizagem e treinamento agropecuário',]);

        CompanyOccupation::create(['code'=>'233210','title'=>'Instrutor de aprendizagem e treinamento industrial','filter'=>'instrutor de aprendizagem e treinamento industrial',]);

        CompanyOccupation::create(['code'=>'233215','title'=>'Instrutor de aprendizagem e treinamento comercial','filter'=>'instrutor de aprendizagem e treinamento comercial',]);

        CompanyOccupation::create(['code'=>'233220','title'=>'Professor instrutor de ensino e aprendizagem agroflorestal','filter'=>'professor instrutor de ensino e aprendizagem agroflorestal',]);

        CompanyOccupation::create(['code'=>'233225','title'=>'Professor instrutor de ensino e aprendizagem em serviços','filter'=>'professor instrutor de ensino e aprendizagem em serviços',]);

        CompanyOccupation::create(['code'=>'234105','title'=>'Professor de matemática aplicada (no ensino superior)','filter'=>'professor de matemática aplicada (no ensino superior)',]);

        CompanyOccupation::create(['code'=>'234110','title'=>'Professor de matemática pura (no ensino superior)','filter'=>'professor de matemática pura (no ensino superior)',]);

        CompanyOccupation::create(['code'=>'234115','title'=>'Professor de estatística (no ensino superior)','filter'=>'professor de estatística (no ensino superior)',]);

        CompanyOccupation::create(['code'=>'234120','title'=>'Professor de computação (no ensino superior)','filter'=>'professor de computação (no ensino superior)',]);

        CompanyOccupation::create(['code'=>'234125','title'=>'Professor de pesquisa operacional (no ensino superior)','filter'=>'professor de pesquisa operacional (no ensino superior)',]);

        CompanyOccupation::create(['code'=>'234205','title'=>'Professor de física (ensino superior)','filter'=>'professor de física (ensino superior)',]);

        CompanyOccupation::create(['code'=>'234210','title'=>'Professor de química (ensino superior)','filter'=>'professor de química (ensino superior)',]);

        CompanyOccupation::create(['code'=>'234215','title'=>'Professor de astronomia (ensino superior)','filter'=>'professor de astronomia (ensino superior)',]);

        CompanyOccupation::create(['code'=>'234305','title'=>'Professor de arquitetura','filter'=>'professor de arquitetura',]);

        CompanyOccupation::create(['code'=>'234310','title'=>'Professor de engenharia','filter'=>'professor de engenharia',]);

        CompanyOccupation::create(['code'=>'234315','title'=>'Professor de geofísica','filter'=>'professor de geofísica',]);

        CompanyOccupation::create(['code'=>'234320','title'=>'Professor de geologia','filter'=>'professor de geologia',]);

        CompanyOccupation::create(['code'=>'234405','title'=>'Professor de ciências biológicas do ensino superior','filter'=>'professor de ciências biológicas do ensino superior',]);

        CompanyOccupation::create(['code'=>'234410','title'=>'Professor de educação física no ensino superior','filter'=>'professor de educação física no ensino superior',]);

        CompanyOccupation::create(['code'=>'234415','title'=>'Professor de enfermagem do ensino superior','filter'=>'professor de enfermagem do ensino superior',]);

        CompanyOccupation::create(['code'=>'234420','title'=>'Professor de farmácia e bioquímica','filter'=>'professor de farmácia e bioquímica',]);

        CompanyOccupation::create(['code'=>'234425','title'=>'Professor de fisioterapia','filter'=>'professor de fisioterapia',]);

        CompanyOccupation::create(['code'=>'234430','title'=>'Professor de fonoaudiologia','filter'=>'professor de fonoaudiologia',]);

        CompanyOccupation::create(['code'=>'234435','title'=>'Professor de medicina','filter'=>'professor de medicina',]);

        CompanyOccupation::create(['code'=>'234440','title'=>'Professor de medicina veterinária','filter'=>'professor de medicina veterinária',]);

        CompanyOccupation::create(['code'=>'234445','title'=>'Professor de nutrição','filter'=>'professor de nutrição',]);

        CompanyOccupation::create(['code'=>'234450','title'=>'Professor de odontologia','filter'=>'professor de odontologia',]);

        CompanyOccupation::create(['code'=>'234455','title'=>'Professor de terapia ocupacional','filter'=>'professor de terapia ocupacional',]);

        CompanyOccupation::create(['code'=>'234460','title'=>'Professor de zootecnia do ensino superior','filter'=>'professor de zootecnia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234505','title'=>'Professor de ensino superior na área de didática','filter'=>'professor de ensino superior na área de didática',]);

        CompanyOccupation::create(['code'=>'234510','title'=>'Professor de ensino superior na área de orientação educacional','filter'=>'professor de ensino superior na área de orientação educacional',]);

        CompanyOccupation::create(['code'=>'234515','title'=>'Professor de ensino superior na área de pesquisa educacional','filter'=>'professor de ensino superior na área de pesquisa educacional',]);

        CompanyOccupation::create(['code'=>'234520','title'=>'Professor de ensino superior na área de prática de ensino','filter'=>'professor de ensino superior na área de prática de ensino',]);

        CompanyOccupation::create(['code'=>'234604','title'=>'Professor de língua alemã','filter'=>'professor de língua alemã',]);

        CompanyOccupation::create(['code'=>'234608','title'=>'Professor de língua italiana','filter'=>'professor de língua italiana',]);

        CompanyOccupation::create(['code'=>'234612','title'=>'Professor de língua francesa','filter'=>'professor de língua francesa',]);

        CompanyOccupation::create(['code'=>'234616','title'=>'Professor de língua inglesa','filter'=>'professor de língua inglesa',]);

        CompanyOccupation::create(['code'=>'234620','title'=>'Professor de língua espanhola','filter'=>'professor de língua espanhola',]);

        CompanyOccupation::create(['code'=>'234624','title'=>'Professor de língua portuguesa','filter'=>'professor de língua portuguesa',]);

        CompanyOccupation::create(['code'=>'234628','title'=>'Professor de literatura brasileira','filter'=>'professor de literatura brasileira',]);

        CompanyOccupation::create(['code'=>'234632','title'=>'Professor de literatura portuguesa','filter'=>'professor de literatura portuguesa',]);

        CompanyOccupation::create(['code'=>'234636','title'=>'Professor de literatura alemã','filter'=>'professor de literatura alemã',]);

        CompanyOccupation::create(['code'=>'234640','title'=>'Professor de literatura comparada','filter'=>'professor de literatura comparada',]);

        CompanyOccupation::create(['code'=>'234644','title'=>'Professor de literatura espanhola','filter'=>'professor de literatura espanhola',]);

        CompanyOccupation::create(['code'=>'234648','title'=>'Professor de literatura francesa','filter'=>'professor de literatura francesa',]);

        CompanyOccupation::create(['code'=>'234652','title'=>'Professor de literatura inglesa','filter'=>'professor de literatura inglesa',]);

        CompanyOccupation::create(['code'=>'234656','title'=>'Professor de literatura italiana','filter'=>'professor de literatura italiana',]);

        CompanyOccupation::create(['code'=>'234660','title'=>'Professor de literatura de línguas estrangeiras modernas','filter'=>'professor de literatura de línguas estrangeiras modernas',]);

        CompanyOccupation::create(['code'=>'234664','title'=>'Professor de outras línguas e literaturas','filter'=>'professor de outras línguas e literaturas',]);

        CompanyOccupation::create(['code'=>'234668','title'=>'Professor de línguas estrangeiras modernas','filter'=>'professor de línguas estrangeiras modernas',]);

        CompanyOccupation::create(['code'=>'234672','title'=>'Professor de lingüística e lingüística aplicada','filter'=>'professor de lingüística e lingüística aplicada',]);

        CompanyOccupation::create(['code'=>'234676','title'=>'Professor de filologia e crítica textual','filter'=>'professor de filologia e crítica textual',]);

        CompanyOccupation::create(['code'=>'234680','title'=>'Professor de semiótica','filter'=>'professor de semiótica',]);

        CompanyOccupation::create(['code'=>'234684','title'=>'Professor de teoria da literatura','filter'=>'professor de teoria da literatura',]);

        CompanyOccupation::create(['code'=>'234689','title'=>'Professor de língua brasileira de sinais (libras)','filter'=>'professor de língua brasileira de sinais (libras)',]);

        CompanyOccupation::create(['code'=>'234705','title'=>'Professor de antropologia do ensino superior','filter'=>'professor de antropologia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234710','title'=>'Professor de arquivologia do ensino superior','filter'=>'professor de arquivologia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234715','title'=>'Professor de biblioteconomia do ensino superior','filter'=>'professor de biblioteconomia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234720','title'=>'Professor de ciência política do ensino superior','filter'=>'professor de ciência política do ensino superior',]);

        CompanyOccupation::create(['code'=>'234725','title'=>'Professor de comunicação social do ensino superior','filter'=>'professor de comunicação social do ensino superior',]);

        CompanyOccupation::create(['code'=>'234730','title'=>'Professor de direito do ensino superior','filter'=>'professor de direito do ensino superior',]);

        CompanyOccupation::create(['code'=>'234735','title'=>'Professor de filosofia do ensino superior','filter'=>'professor de filosofia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234740','title'=>'Professor de geografia do ensino superior','filter'=>'professor de geografia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234745','title'=>'Professor de história do ensino superior','filter'=>'professor de história do ensino superior',]);

        CompanyOccupation::create(['code'=>'234750','title'=>'Professor de jornalismo','filter'=>'professor de jornalismo',]);

        CompanyOccupation::create(['code'=>'234755','title'=>'Professor de museologia do ensino superior','filter'=>'professor de museologia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234760','title'=>'Professor de psicologia do ensino superior','filter'=>'professor de psicologia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234765','title'=>'Professor de serviço social do ensino superior','filter'=>'professor de serviço social do ensino superior',]);

        CompanyOccupation::create(['code'=>'234770','title'=>'Professor de sociologia do ensino superior','filter'=>'professor de sociologia do ensino superior',]);

        CompanyOccupation::create(['code'=>'234805','title'=>'Professor de economia','filter'=>'professor de economia',]);

        CompanyOccupation::create(['code'=>'234810','title'=>'Professor de administração','filter'=>'professor de administração',]);

        CompanyOccupation::create(['code'=>'234815','title'=>'Professor de contabilidade','filter'=>'professor de contabilidade',]);

        CompanyOccupation::create(['code'=>'234905','title'=>'Professor de artes do espetáculo no ensino superior','filter'=>'professor de artes do espetáculo no ensino superior',]);

        CompanyOccupation::create(['code'=>'234910','title'=>'Professor de artes visuais no ensino superior (artes plásticas e multimídia)','filter'=>'professor de artes visuais no ensino superior (artes plásticas e multimídia)',]);

        CompanyOccupation::create(['code'=>'234915','title'=>'Professor de música no ensino superior','filter'=>'professor de música no ensino superior',]);

        CompanyOccupation::create(['code'=>'239205','title'=>'Professor de alunos com deficiência auditiva e surdos','filter'=>'professor de alunos com deficiência auditiva e surdos',]);

        CompanyOccupation::create(['code'=>'239210','title'=>'Professor de alunos com deficiência física','filter'=>'professor de alunos com deficiência física',]);

        CompanyOccupation::create(['code'=>'239215','title'=>'Professor de alunos com deficiência mental','filter'=>'professor de alunos com deficiência mental',]);

        CompanyOccupation::create(['code'=>'239220','title'=>'Professor de alunos com deficiência múltipla','filter'=>'professor de alunos com deficiência múltipla',]);

        CompanyOccupation::create(['code'=>'239225','title'=>'Professor de alunos com deficiência visual','filter'=>'professor de alunos com deficiência visual',]);

        CompanyOccupation::create(['code'=>'239405','title'=>'Coordenador pedagógico','filter'=>'coordenador pedagógico',]);

        CompanyOccupation::create(['code'=>'239410','title'=>'Orientador educacional','filter'=>'orientador educacional',]);

        CompanyOccupation::create(['code'=>'239415','title'=>'Pedagogo','filter'=>'pedagogo',]);

        CompanyOccupation::create(['code'=>'239420','title'=>'Professor de técnicas e recursos audiovisuais','filter'=>'professor de técnicas e recursos audiovisuais',]);

        CompanyOccupation::create(['code'=>'239425','title'=>'Psicopedagogo','filter'=>'psicopedagogo',]);

        CompanyOccupation::create(['code'=>'239430','title'=>'Supervisor de ensino','filter'=>'supervisor de ensino',]);

        CompanyOccupation::create(['code'=>'239435','title'=>'Designer educacional','filter'=>'designer educacional',]);

        CompanyOccupation::create(['code'=>'239440','title'=>'Neuropsicopedagogo clinico','filter'=>'neuropsicopedagogo clinico',]);

        CompanyOccupation::create(['code'=>'239445','title'=>'Neuropsicopedagogo institucional','filter'=>'neuropsicopedagogo institucional',]);

        CompanyOccupation::create(['code'=>'241005','title'=>'Advogado','filter'=>'advogado',]);

        CompanyOccupation::create(['code'=>'241010','title'=>'Advogado de empresa','filter'=>'advogado de empresa',]);

        CompanyOccupation::create(['code'=>'241015','title'=>'Advogado (direito civil)','filter'=>'advogado (direito civil)',]);

        CompanyOccupation::create(['code'=>'241020','title'=>'Advogado (direito público)','filter'=>'advogado (direito público)',]);

        CompanyOccupation::create(['code'=>'241025','title'=>'Advogado (direito penal)','filter'=>'advogado (direito penal)',]);

        CompanyOccupation::create(['code'=>'241030','title'=>'Advogado (áreas especiais)','filter'=>'advogado (áreas especiais)',]);

        CompanyOccupation::create(['code'=>'241035','title'=>'Advogado (direito do trabalho)','filter'=>'advogado (direito do trabalho)',]);

        CompanyOccupation::create(['code'=>'241040','title'=>'Consultor jurídico','filter'=>'consultor jurídico',]);

        CompanyOccupation::create(['code'=>'241205','title'=>'Advogado da união','filter'=>'advogado da união',]);

        CompanyOccupation::create(['code'=>'241210','title'=>'Procurador autárquico','filter'=>'procurador autárquico',]);

        CompanyOccupation::create(['code'=>'241215','title'=>'Procurador da fazenda nacional','filter'=>'procurador da fazenda nacional',]);

        CompanyOccupation::create(['code'=>'241220','title'=>'Procurador do estado','filter'=>'procurador do estado',]);

        CompanyOccupation::create(['code'=>'241225','title'=>'Procurador do município','filter'=>'procurador do município',]);

        CompanyOccupation::create(['code'=>'241230','title'=>'Procurador federal','filter'=>'procurador federal',]);

        CompanyOccupation::create(['code'=>'241235','title'=>'Procurador fundacional','filter'=>'procurador fundacional',]);

        CompanyOccupation::create(['code'=>'241305','title'=>'Oficial de registro de contratos marítimos','filter'=>'oficial de registro de contratos marítimos',]);

        CompanyOccupation::create(['code'=>'241310','title'=>'Oficial do registro civil de pessoas jurídicas','filter'=>'oficial do registro civil de pessoas jurídicas',]);

        CompanyOccupation::create(['code'=>'241315','title'=>'Oficial do registro civil de pessoas naturais','filter'=>'oficial do registro civil de pessoas naturais',]);

        CompanyOccupation::create(['code'=>'241320','title'=>'Oficial do registro de distribuições','filter'=>'oficial do registro de distribuições',]);

        CompanyOccupation::create(['code'=>'241325','title'=>'Oficial do registro de imóveis','filter'=>'oficial do registro de imóveis',]);

        CompanyOccupation::create(['code'=>'241330','title'=>'Oficial do registro de títulos e documentos','filter'=>'oficial do registro de títulos e documentos',]);

        CompanyOccupation::create(['code'=>'241335','title'=>'Tabelião de notas','filter'=>'tabelião de notas',]);

        CompanyOccupation::create(['code'=>'241340','title'=>'Tabelião de protestos','filter'=>'tabelião de protestos',]);

        CompanyOccupation::create(['code'=>'241405','title'=>'Conselheiro julgador','filter'=>'conselheiro julgador',]);

        CompanyOccupation::create(['code'=>'242205','title'=>'Procurador da república','filter'=>'procurador da república',]);

        CompanyOccupation::create(['code'=>'242210','title'=>'Procurador de justiça','filter'=>'procurador de justiça',]);

        CompanyOccupation::create(['code'=>'242215','title'=>'Procurador de justiça militar','filter'=>'procurador de justiça militar',]);

        CompanyOccupation::create(['code'=>'242220','title'=>'Procurador do trabalho','filter'=>'procurador do trabalho',]);

        CompanyOccupation::create(['code'=>'242225','title'=>'Procurador regional da república','filter'=>'procurador regional da república',]);

        CompanyOccupation::create(['code'=>'242230','title'=>'Procurador regional do trabalho','filter'=>'procurador regional do trabalho',]);

        CompanyOccupation::create(['code'=>'242235','title'=>'Promotor de justiça','filter'=>'promotor de justiça',]);

        CompanyOccupation::create(['code'=>'242240','title'=>'Subprocurador de justiça militar','filter'=>'subprocurador de justiça militar',]);

        CompanyOccupation::create(['code'=>'242245','title'=>'Subprocurador-geral da república','filter'=>'subprocurador-geral da república',]);

        CompanyOccupation::create(['code'=>'242250','title'=>'Subprocurador-geral do trabalho','filter'=>'subprocurador-geral do trabalho',]);

        CompanyOccupation::create(['code'=>'242305','title'=>'Delegado de polícia','filter'=>'delegado de polícia',]);

        CompanyOccupation::create(['code'=>'242405','title'=>'Defensor público','filter'=>'defensor público',]);

        CompanyOccupation::create(['code'=>'242410','title'=>'Procurador da assistência judiciária','filter'=>'procurador da assistência judiciária',]);

        CompanyOccupation::create(['code'=>'242905','title'=>'Oficial de inteligência','filter'=>'oficial de inteligência',]);

        CompanyOccupation::create(['code'=>'242910','title'=>'Oficial técnico de inteligência','filter'=>'oficial técnico de inteligência',]);

        CompanyOccupation::create(['code'=>'251105','title'=>'Antropólogo','filter'=>'antropólogo',]);

        CompanyOccupation::create(['code'=>'251110','title'=>'Arqueólogo','filter'=>'arqueólogo',]);

        CompanyOccupation::create(['code'=>'251115','title'=>'Cientista político','filter'=>'cientista político',]);

        CompanyOccupation::create(['code'=>'251120','title'=>'Sociólogo','filter'=>'sociólogo',]);

        CompanyOccupation::create(['code'=>'251205','title'=>'Economista','filter'=>'economista',]);

        CompanyOccupation::create(['code'=>'251210','title'=>'Economista agroindustrial','filter'=>'economista agroindustrial',]);

        CompanyOccupation::create(['code'=>'251215','title'=>'Economista financeiro','filter'=>'economista financeiro',]);

        CompanyOccupation::create(['code'=>'251220','title'=>'Economista industrial','filter'=>'economista industrial',]);

        CompanyOccupation::create(['code'=>'251225','title'=>'Economista do setor público','filter'=>'economista do setor público',]);

        CompanyOccupation::create(['code'=>'251230','title'=>'Economista ambiental','filter'=>'economista ambiental',]);

        CompanyOccupation::create(['code'=>'251235','title'=>'Economista regional e urbano','filter'=>'economista regional e urbano',]);

        CompanyOccupation::create(['code'=>'251305','title'=>'Geógrafo','filter'=>'geógrafo',]);

        CompanyOccupation::create(['code'=>'251405','title'=>'Filósofo','filter'=>'filósofo',]);

        CompanyOccupation::create(['code'=>'251505','title'=>'Psicólogo educacional','filter'=>'psicólogo educacional',]);

        CompanyOccupation::create(['code'=>'251510','title'=>'Psicólogo clínico','filter'=>'psicólogo clínico',]);

        CompanyOccupation::create(['code'=>'251515','title'=>'Psicólogo do esporte','filter'=>'psicólogo do esporte',]);

        CompanyOccupation::create(['code'=>'251520','title'=>'Psicólogo hospitalar','filter'=>'psicólogo hospitalar',]);

        CompanyOccupation::create(['code'=>'251525','title'=>'Psicólogo jurídico','filter'=>'psicólogo jurídico',]);

        CompanyOccupation::create(['code'=>'251530','title'=>'Psicólogo social','filter'=>'psicólogo social',]);

        CompanyOccupation::create(['code'=>'251535','title'=>'Psicólogo do trânsito','filter'=>'psicólogo do trânsito',]);

        CompanyOccupation::create(['code'=>'251540','title'=>'Psicólogo do trabalho','filter'=>'psicólogo do trabalho',]);

        CompanyOccupation::create(['code'=>'251545','title'=>'Neuropsicólogo','filter'=>'neuropsicólogo',]);

        CompanyOccupation::create(['code'=>'251550','title'=>'Psicanalista','filter'=>'psicanalista',]);

        CompanyOccupation::create(['code'=>'251555','title'=>'Psicólogo acupunturista','filter'=>'psicólogo acupunturista',]);

        CompanyOccupation::create(['code'=>'251605','title'=>'Assistente social','filter'=>'assistente social',]);

        CompanyOccupation::create(['code'=>'251610','title'=>'Economista doméstico','filter'=>'economista doméstico',]);

        CompanyOccupation::create(['code'=>'252105','title'=>'Administrador','filter'=>'administrador',]);

        CompanyOccupation::create(['code'=>'252205','title'=>'Auditor (contadores e afins)','filter'=>'auditor (contadores e afins)',]);

        CompanyOccupation::create(['code'=>'252210','title'=>'Contador','filter'=>'contador',]);

        CompanyOccupation::create(['code'=>'252215','title'=>'Perito contábil','filter'=>'perito contábil',]);

        CompanyOccupation::create(['code'=>'252305','title'=>'Secretária(o) executiva(o)','filter'=>'secretária(o) executiva(o)',]);

        CompanyOccupation::create(['code'=>'252310','title'=>'Secretário bilíngüe','filter'=>'secretário bilíngüe',]);

        CompanyOccupation::create(['code'=>'252315','title'=>'Secretária trilíngüe','filter'=>'secretária trilíngüe',]);

        CompanyOccupation::create(['code'=>'252320','title'=>'Tecnólogo em secretariado escolar','filter'=>'tecnólogo em secretariado escolar',]);

        CompanyOccupation::create(['code'=>'252405','title'=>'Analista de recursos humanos','filter'=>'analista de recursos humanos',]);

        CompanyOccupation::create(['code'=>'252505','title'=>'Administrador de fundos e carteiras de investimento','filter'=>'administrador de fundos e carteiras de investimento',]);

        CompanyOccupation::create(['code'=>'252510','title'=>'Analista de câmbio','filter'=>'analista de câmbio',]);

        CompanyOccupation::create(['code'=>'252515','title'=>'Analista de cobrança (instituições financeiras)','filter'=>'analista de cobrança (instituições financeiras)',]);

        CompanyOccupation::create(['code'=>'252525','title'=>'Analista de crédito (instituições financeiras)','filter'=>'analista de crédito (instituições financeiras)',]);

        CompanyOccupation::create(['code'=>'252530','title'=>'Analista de crédito rural','filter'=>'analista de crédito rural',]);

        CompanyOccupation::create(['code'=>'252535','title'=>'Analista de leasing','filter'=>'analista de leasing',]);

        CompanyOccupation::create(['code'=>'252540','title'=>'Analista de produtos bancários','filter'=>'analista de produtos bancários',]);

        CompanyOccupation::create(['code'=>'252545','title'=>'Analista financeiro (instituições financeiras)','filter'=>'analista financeiro (instituições financeiras)',]);

        CompanyOccupation::create(['code'=>'252550','title'=>'Profissional de relações com investidores','filter'=>'profissional de relações com investidores',]);

        CompanyOccupation::create(['code'=>'252605','title'=>'Gestor em segurança','filter'=>'gestor em segurança',]);

        CompanyOccupation::create(['code'=>'252705','title'=>'Analista de pcp (programação e controle da produção)','filter'=>'analista de pcp (programação e controle da produção)',]);

        CompanyOccupation::create(['code'=>'252710','title'=>'Analista de planejamento de materias','filter'=>'analista de planejamento de materias',]);

        CompanyOccupation::create(['code'=>'252715','title'=>'Analista de logistica','filter'=>'analista de logistica',]);

        CompanyOccupation::create(['code'=>'252720','title'=>'Analista de projetos logisticos','filter'=>'analista de projetos logisticos',]);

        CompanyOccupation::create(['code'=>'252725','title'=>'Analista de gestão de estoque','filter'=>'analista de gestão de estoque',]);

        CompanyOccupation::create(['code'=>'253110','title'=>'Redator de publicidade','filter'=>'redator de publicidade',]);

        CompanyOccupation::create(['code'=>'253115','title'=>'Publicitário','filter'=>'publicitário',]);

        CompanyOccupation::create(['code'=>'253120','title'=>'Diretor de mídia (publicidade)','filter'=>'diretor de mídia (publicidade)',]);

        CompanyOccupation::create(['code'=>'253125','title'=>'Diretor de arte (publicidade)','filter'=>'diretor de arte (publicidade)',]);

        CompanyOccupation::create(['code'=>'253130','title'=>'Diretor de criação','filter'=>'diretor de criação',]);

        CompanyOccupation::create(['code'=>'253135','title'=>'Diretor de contas (publicidade)','filter'=>'diretor de contas (publicidade)',]);

        CompanyOccupation::create(['code'=>'253140','title'=>'Agenciador de propaganda','filter'=>'agenciador de propaganda',]);

        CompanyOccupation::create(['code'=>'253205','title'=>'Gerente de captação (fundos e investimentos institucionais)','filter'=>'gerente de captação (fundos e investimentos institucionais)',]);

        CompanyOccupation::create(['code'=>'253210','title'=>'Gerente de clientes especiais (private)','filter'=>'gerente de clientes especiais (private)',]);

        CompanyOccupation::create(['code'=>'253215','title'=>'Gerente de contas - pessoa física e jurídica','filter'=>'gerente de contas - pessoa física e jurídica',]);

        CompanyOccupation::create(['code'=>'253220','title'=>'Gerente de grandes contas (corporate)','filter'=>'gerente de grandes contas (corporate)',]);

        CompanyOccupation::create(['code'=>'253225','title'=>'Operador de negócios','filter'=>'operador de negócios',]);

        CompanyOccupation::create(['code'=>'253305','title'=>'Corretor de valores, ativos financeiros, mercadorias e derivativos','filter'=>'corretor de valores, ativos financeiros, mercadorias e derivativos',]);

        CompanyOccupation::create(['code'=>'253405','title'=>'Analista de mídias sociais','filter'=>'analista de mídias sociais',]);

        CompanyOccupation::create(['code'=>'253410','title'=>'Influenciador digital','filter'=>'influenciador digital',]);

        CompanyOccupation::create(['code'=>'254105','title'=>'Auditor-fiscal da receita federal','filter'=>'auditor-fiscal da receita federal',]);

        CompanyOccupation::create(['code'=>'254110','title'=>'Técnico da receita federal','filter'=>'técnico da receita federal',]);

        CompanyOccupation::create(['code'=>'254205','title'=>'Auditor-fiscal da previdência social','filter'=>'auditor-fiscal da previdência social',]);

        CompanyOccupation::create(['code'=>'254305','title'=>'Auditor-fiscal do trabalho','filter'=>'auditor-fiscal do trabalho',]);

        CompanyOccupation::create(['code'=>'254310','title'=>'Agente de higiene e segurança','filter'=>'agente de higiene e segurança',]);

        CompanyOccupation::create(['code'=>'254405','title'=>'Fiscal de tributos estadual','filter'=>'fiscal de tributos estadual',]);

        CompanyOccupation::create(['code'=>'254410','title'=>'Fiscal de tributos municipal','filter'=>'fiscal de tributos municipal',]);

        CompanyOccupation::create(['code'=>'254415','title'=>'Técnico de tributos estadual','filter'=>'técnico de tributos estadual',]);

        CompanyOccupation::create(['code'=>'254420','title'=>'Técnico de tributos municipal','filter'=>'técnico de tributos municipal',]);

        CompanyOccupation::create(['code'=>'254505','title'=>'Fiscal de atividades urbanas','filter'=>'fiscal de atividades urbanas',]);

        CompanyOccupation::create(['code'=>'261105','title'=>'Arquivista pesquisador (jornalismo)','filter'=>'arquivista pesquisador (jornalismo)',]);

        CompanyOccupation::create(['code'=>'261110','title'=>'Assessor de imprensa','filter'=>'assessor de imprensa',]);

        CompanyOccupation::create(['code'=>'261115','title'=>'Diretor de redação','filter'=>'diretor de redação',]);

        CompanyOccupation::create(['code'=>'261120','title'=>'Editor','filter'=>'editor',]);

        CompanyOccupation::create(['code'=>'261125','title'=>'Jornalista','filter'=>'jornalista',]);

        CompanyOccupation::create(['code'=>'261130','title'=>'Produtor de texto','filter'=>'produtor de texto',]);

        CompanyOccupation::create(['code'=>'261135','title'=>'Repórter (exclusive rádio e televisão)','filter'=>'repórter (exclusive rádio e televisão)',]);

        CompanyOccupation::create(['code'=>'261140','title'=>'Revisor de texto','filter'=>'revisor de texto',]);

        CompanyOccupation::create(['code'=>'261205','title'=>'Bibliotecário','filter'=>'bibliotecário',]);

        CompanyOccupation::create(['code'=>'261210','title'=>'Documentalista','filter'=>'documentalista',]);

        CompanyOccupation::create(['code'=>'261215','title'=>'Analista de informações (pesquisador de informações de rede)','filter'=>'analista de informações (pesquisador de informações de rede)',]);

        CompanyOccupation::create(['code'=>'261305','title'=>'Arquivista','filter'=>'arquivista',]);

        CompanyOccupation::create(['code'=>'261310','title'=>'Museólogo','filter'=>'museólogo',]);

        CompanyOccupation::create(['code'=>'261405','title'=>'Filólogo','filter'=>'filólogo',]);

        CompanyOccupation::create(['code'=>'261410','title'=>'Intérprete','filter'=>'intérprete',]);

        CompanyOccupation::create(['code'=>'261415','title'=>'Lingüista','filter'=>'lingüista',]);

        CompanyOccupation::create(['code'=>'261420','title'=>'Tradutor','filter'=>'tradutor',]);

        CompanyOccupation::create(['code'=>'261425','title'=>'Intérprete de língua de sinais','filter'=>'intérprete de língua de sinais',]);

        CompanyOccupation::create(['code'=>'261430','title'=>'Audiodescritor','filter'=>'audiodescritor',]);

        CompanyOccupation::create(['code'=>'261505','title'=>'Autor-roteirista','filter'=>'autor-roteirista',]);

        CompanyOccupation::create(['code'=>'261510','title'=>'Crítico','filter'=>'crítico',]);

        CompanyOccupation::create(['code'=>'261515','title'=>'Escritor de ficção','filter'=>'escritor de ficção',]);

        CompanyOccupation::create(['code'=>'261520','title'=>'Escritor de não ficção','filter'=>'escritor de não ficção',]);

        CompanyOccupation::create(['code'=>'261525','title'=>'Poeta','filter'=>'poeta',]);

        CompanyOccupation::create(['code'=>'261530','title'=>'Redator de textos técnicos','filter'=>'redator de textos técnicos',]);

        CompanyOccupation::create(['code'=>'261605','title'=>'Editor de jornal','filter'=>'editor de jornal',]);

        CompanyOccupation::create(['code'=>'261610','title'=>'Editor de livro','filter'=>'editor de livro',]);

        CompanyOccupation::create(['code'=>'261615','title'=>'Editor de mídia eletrônica','filter'=>'editor de mídia eletrônica',]);

        CompanyOccupation::create(['code'=>'261620','title'=>'Editor de revista','filter'=>'editor de revista',]);

        CompanyOccupation::create(['code'=>'261625','title'=>'Editor de revista científica','filter'=>'editor de revista científica',]);

        CompanyOccupation::create(['code'=>'261705','title'=>'Âncora de mídias audiovisuais','filter'=>'Âncora de mídias audiovisuais',]);

        CompanyOccupation::create(['code'=>'261710','title'=>'Comentarista de mídias audiovisuais','filter'=>'comentarista de mídias audiovisuais',]);

        CompanyOccupation::create(['code'=>'261715','title'=>'Locutor de mídias audiovisuais','filter'=>'locutor de mídias audiovisuais',]);

        CompanyOccupation::create(['code'=>'261730','title'=>'Repórter de mídias audiovisuais','filter'=>'repórter de mídias audiovisuais',]);

        CompanyOccupation::create(['code'=>'261805','title'=>'Fotógrafo','filter'=>'fotógrafo',]);

        CompanyOccupation::create(['code'=>'261810','title'=>'Fotógrafo publicitário','filter'=>'fotógrafo publicitário',]);

        CompanyOccupation::create(['code'=>'261815','title'=>'Fotógrafo retratista','filter'=>'fotógrafo retratista',]);

        CompanyOccupation::create(['code'=>'261820','title'=>'Repórter fotográfico','filter'=>'repórter fotográfico',]);

        CompanyOccupation::create(['code'=>'261905','title'=>'Continuista','filter'=>'continuista',]);

        CompanyOccupation::create(['code'=>'261910','title'=>'Assistente de direção (tv)','filter'=>'assistente de direção (tv)',]);

        CompanyOccupation::create(['code'=>'262105','title'=>'Produtor cultural','filter'=>'produtor cultural',]);

        CompanyOccupation::create(['code'=>'262110','title'=>'Produtor cinematográfico','filter'=>'produtor cinematográfico',]);

        CompanyOccupation::create(['code'=>'262115','title'=>'Produtor de rádio','filter'=>'produtor de rádio',]);

        CompanyOccupation::create(['code'=>'262120','title'=>'Produtor de teatro','filter'=>'produtor de teatro',]);

        CompanyOccupation::create(['code'=>'262125','title'=>'Produtor de televisão','filter'=>'produtor de televisão',]);

        CompanyOccupation::create(['code'=>'262130','title'=>'Tecnólogo em produção fonográfica','filter'=>'tecnólogo em produção fonográfica',]);

        CompanyOccupation::create(['code'=>'262135','title'=>'Tecnólogo em produção audiovisual','filter'=>'tecnólogo em produção audiovisual',]);

        CompanyOccupation::create(['code'=>'262205','title'=>'Diretor de cinema','filter'=>'diretor de cinema',]);

        CompanyOccupation::create(['code'=>'262210','title'=>'Diretor de programas de rádio','filter'=>'diretor de programas de rádio',]);

        CompanyOccupation::create(['code'=>'262215','title'=>'Diretor de programas de televisão','filter'=>'diretor de programas de televisão',]);

        CompanyOccupation::create(['code'=>'262220','title'=>'Diretor teatral','filter'=>'diretor teatral',]);

        CompanyOccupation::create(['code'=>'262225','title'=>'Diretor de programação','filter'=>'diretor de programação',]);

        CompanyOccupation::create(['code'=>'262230','title'=>'Diretor de produção','filter'=>'diretor de produção',]);

        CompanyOccupation::create(['code'=>'262235','title'=>'Diretor artistíco','filter'=>'diretor artistíco',]);

        CompanyOccupation::create(['code'=>'262305','title'=>'Cenógrafo carnavalesco e festas populares','filter'=>'cenógrafo carnavalesco e festas populares',]);

        CompanyOccupation::create(['code'=>'262310','title'=>'Cenógrafo de cinema','filter'=>'cenógrafo de cinema',]);

        CompanyOccupation::create(['code'=>'262315','title'=>'Cenógrafo de eventos','filter'=>'cenógrafo de eventos',]);

        CompanyOccupation::create(['code'=>'262320','title'=>'Cenógrafo de teatro','filter'=>'cenógrafo de teatro',]);

        CompanyOccupation::create(['code'=>'262325','title'=>'Cenógrafo de tv','filter'=>'cenógrafo de tv',]);

        CompanyOccupation::create(['code'=>'262330','title'=>'Diretor de arte','filter'=>'diretor de arte',]);

        CompanyOccupation::create(['code'=>'262405','title'=>'Artista (artes visuais)','filter'=>'artista (artes visuais)',]);

        CompanyOccupation::create(['code'=>'262410','title'=>'Desenhista industrial gráfico (designer gráfico)','filter'=>'desenhista industrial gráfico (designer gráfico)',]);

        CompanyOccupation::create(['code'=>'262415','title'=>'Conservador-restaurador de bens culturais','filter'=>'conservador-restaurador de bens culturais',]);

        CompanyOccupation::create(['code'=>'262420','title'=>'Desenhista industrial de produto (designer de produto)','filter'=>'desenhista industrial de produto (designer de produto)',]);

        CompanyOccupation::create(['code'=>'262425','title'=>'Desenhista industrial de produto de moda (designer de moda)','filter'=>'desenhista industrial de produto de moda (designer de moda)',]);

        CompanyOccupation::create(['code'=>'262505','title'=>'Ator','filter'=>'ator',]);

        CompanyOccupation::create(['code'=>'262605','title'=>'Compositor','filter'=>'compositor',]);

        CompanyOccupation::create(['code'=>'262610','title'=>'Músico arranjador','filter'=>'músico arranjador',]);

        CompanyOccupation::create(['code'=>'262615','title'=>'Músico regente','filter'=>'músico regente',]);

        CompanyOccupation::create(['code'=>'262620','title'=>'Musicólogo','filter'=>'musicólogo',]);

        CompanyOccupation::create(['code'=>'262705','title'=>'Músico intérprete cantor','filter'=>'músico intérprete cantor',]);

        CompanyOccupation::create(['code'=>'262710','title'=>'Músico intérprete instrumentista','filter'=>'músico intérprete instrumentista',]);

        CompanyOccupation::create(['code'=>'262805','title'=>'Assistente de coreografia','filter'=>'assistente de coreografia',]);

        CompanyOccupation::create(['code'=>'262810','title'=>'Bailarino (exceto danças populares)','filter'=>'bailarino (exceto danças populares)',]);

        CompanyOccupation::create(['code'=>'262815','title'=>'Coreógrafo','filter'=>'coreógrafo',]);

        CompanyOccupation::create(['code'=>'262820','title'=>'Dramaturgo de dança','filter'=>'dramaturgo de dança',]);

        CompanyOccupation::create(['code'=>'262825','title'=>'Ensaiador de dança','filter'=>'ensaiador de dança',]);

        CompanyOccupation::create(['code'=>'262830','title'=>'Professor de dança','filter'=>'professor de dança',]);

        CompanyOccupation::create(['code'=>'262905','title'=>'Decorador de interiores de nível superior','filter'=>'decorador de interiores de nível superior',]);

        CompanyOccupation::create(['code'=>'263105','title'=>'Ministro de culto religioso','filter'=>'ministro de culto religioso',]);

        CompanyOccupation::create(['code'=>'263110','title'=>'Missionário','filter'=>'missionário',]);

        CompanyOccupation::create(['code'=>'263115','title'=>'Teólogo','filter'=>'teólogo',]);

        CompanyOccupation::create(['code'=>'271105','title'=>'Chefe de cozinha','filter'=>'chefe de cozinha',]);

        CompanyOccupation::create(['code'=>'271110','title'=>'Tecnólogo em gastronomia','filter'=>'tecnólogo em gastronomia',]);

        CompanyOccupation::create(['code'=>'300105','title'=>'Técnico em mecatrônica - automação da manufatura','filter'=>'técnico em mecatrônica - automação da manufatura',]);

        CompanyOccupation::create(['code'=>'300110','title'=>'Técnico em mecatrônica - robótica','filter'=>'técnico em mecatrônica - robótica',]);

        CompanyOccupation::create(['code'=>'300305','title'=>'Técnico em eletromecânica','filter'=>'técnico em eletromecânica',]);

        CompanyOccupation::create(['code'=>'30105','title'=>'Coronel bombeiro militar','filter'=>'coronel bombeiro militar',]);

        CompanyOccupation::create(['code'=>'30110','title'=>'Major bombeiro militar','filter'=>'major bombeiro militar',]);

        CompanyOccupation::create(['code'=>'301105','title'=>'Técnico de laboratório industrial','filter'=>'técnico de laboratório industrial',]);

        CompanyOccupation::create(['code'=>'301110','title'=>'Técnico de laboratório de análises físico-químicas (materiais de construção)','filter'=>'técnico de laboratório de análises físico-químicas (materiais de construção)',]);

        CompanyOccupation::create(['code'=>'301115','title'=>'Técnico químico de petróleo','filter'=>'técnico químico de petróleo',]);

        CompanyOccupation::create(['code'=>'30115','title'=>'Tenente-coronel bombeiro militar','filter'=>'tenente-coronel bombeiro militar',]);

        CompanyOccupation::create(['code'=>'301205','title'=>'Técnico de apoio à bioengenharia','filter'=>'técnico de apoio à bioengenharia',]);

        CompanyOccupation::create(['code'=>'30205','title'=>'Capitão bombeiro militar','filter'=>'capitão bombeiro militar',]);

        CompanyOccupation::create(['code'=>'30305','title'=>'Tenente do corpo de bombeiros militar','filter'=>'tenente do corpo de bombeiros militar',]);

        CompanyOccupation::create(['code'=>'31105','title'=>'Subtenente bombeiro militar','filter'=>'subtenente bombeiro militar',]);

        CompanyOccupation::create(['code'=>'31110','title'=>'Sargento bombeiro militar','filter'=>'sargento bombeiro militar',]);

        CompanyOccupation::create(['code'=>'311105','title'=>'Técnico químico','filter'=>'técnico químico',]);

        CompanyOccupation::create(['code'=>'311110','title'=>'Técnico de celulose e papel','filter'=>'técnico de celulose e papel',]);

        CompanyOccupation::create(['code'=>'311115','title'=>'Técnico em curtimento','filter'=>'técnico em curtimento',]);

        CompanyOccupation::create(['code'=>'311205','title'=>'Técnico em petroquímica','filter'=>'técnico em petroquímica',]);

        CompanyOccupation::create(['code'=>'311305','title'=>'Técnico em materiais, produtos cerâmicos e vidros','filter'=>'técnico em materiais, produtos cerâmicos e vidros',]);

        CompanyOccupation::create(['code'=>'311405','title'=>'Técnico em borracha','filter'=>'técnico em borracha',]);

        CompanyOccupation::create(['code'=>'311410','title'=>'Técnico em plástico','filter'=>'técnico em plástico',]);

        CompanyOccupation::create(['code'=>'311505','title'=>'Técnico de controle de meio ambiente','filter'=>'técnico de controle de meio ambiente',]);

        CompanyOccupation::create(['code'=>'311510','title'=>'Técnico de meteorologia','filter'=>'técnico de meteorologia',]);

        CompanyOccupation::create(['code'=>'311515','title'=>'Técnico de utilidade (produção e distribuição de vapor, gases, óleos, combustíveis, energia)','filter'=>'técnico de utilidade (produção e distribuição de vapor, gases, óleos, combustíveis, energia)',]);

        CompanyOccupation::create(['code'=>'311520','title'=>'Técnico em tratamento de efluentes','filter'=>'técnico em tratamento de efluentes',]);

        CompanyOccupation::create(['code'=>'311605','title'=>'Técnico têxtil','filter'=>'técnico têxtil',]);

        CompanyOccupation::create(['code'=>'311610','title'=>'Técnico têxtil (tratamentos químicos)','filter'=>'técnico têxtil (tratamentos químicos)',]);

        CompanyOccupation::create(['code'=>'311615','title'=>'Técnico têxtil de fiação','filter'=>'técnico têxtil de fiação',]);

        CompanyOccupation::create(['code'=>'311620','title'=>'Técnico têxtil de malharia','filter'=>'técnico têxtil de malharia',]);

        CompanyOccupation::create(['code'=>'311625','title'=>'Técnico têxtil de tecelagem','filter'=>'técnico têxtil de tecelagem',]);

        CompanyOccupation::create(['code'=>'311705','title'=>'Colorista de papel','filter'=>'colorista de papel',]);

        CompanyOccupation::create(['code'=>'311710','title'=>'Colorista têxtil','filter'=>'colorista têxtil',]);

        CompanyOccupation::create(['code'=>'311715','title'=>'Preparador de tintas','filter'=>'preparador de tintas',]);

        CompanyOccupation::create(['code'=>'311720','title'=>'Preparador de tintas (fábrica de tecidos)','filter'=>'preparador de tintas (fábrica de tecidos)',]);

        CompanyOccupation::create(['code'=>'311725','title'=>'Tingidor de couros e peles','filter'=>'tingidor de couros e peles',]);

        CompanyOccupation::create(['code'=>'31205','title'=>'Cabo bombeiro militar','filter'=>'cabo bombeiro militar',]);

        CompanyOccupation::create(['code'=>'31210','title'=>'Soldado bombeiro militar','filter'=>'soldado bombeiro militar',]);

        CompanyOccupation::create(['code'=>'312105','title'=>'Técnico de obras civis','filter'=>'técnico de obras civis',]);

        CompanyOccupation::create(['code'=>'312205','title'=>'Técnico de estradas','filter'=>'técnico de estradas',]);

        CompanyOccupation::create(['code'=>'312210','title'=>'Técnico de saneamento','filter'=>'técnico de saneamento',]);

        CompanyOccupation::create(['code'=>'312305','title'=>'Técnico em agrimensura','filter'=>'técnico em agrimensura',]);

        CompanyOccupation::create(['code'=>'312310','title'=>'Técnico em geodésia e cartografia','filter'=>'técnico em geodésia e cartografia',]);

        CompanyOccupation::create(['code'=>'312315','title'=>'Técnico em hidrografia','filter'=>'técnico em hidrografia',]);

        CompanyOccupation::create(['code'=>'312320','title'=>'Topógrafo','filter'=>'topógrafo',]);

        CompanyOccupation::create(['code'=>'313105','title'=>'Eletrotécnico','filter'=>'eletrotécnico',]);

        CompanyOccupation::create(['code'=>'313110','title'=>'Eletrotécnico (produção de energia)','filter'=>'eletrotécnico (produção de energia)',]);

        CompanyOccupation::create(['code'=>'313115','title'=>'Eletrotécnico na fabricação, montagem e instalação de máquinas e equipamentos','filter'=>'eletrotécnico na fabricação, montagem e instalação de máquinas e equipamentos',]);

        CompanyOccupation::create(['code'=>'313120','title'=>'Técnico de manutenção elétrica','filter'=>'técnico de manutenção elétrica',]);

        CompanyOccupation::create(['code'=>'313125','title'=>'Técnico de manutenção elétrica de máquina','filter'=>'técnico de manutenção elétrica de máquina',]);

        CompanyOccupation::create(['code'=>'313130','title'=>'Técnico eletricista','filter'=>'técnico eletricista',]);

        CompanyOccupation::create(['code'=>'313205','title'=>'Técnico de manutenção eletrônica','filter'=>'técnico de manutenção eletrônica',]);

        CompanyOccupation::create(['code'=>'313210','title'=>'Técnico de manutenção eletrônica (circuitos de máquinas com comando numérico)','filter'=>'técnico de manutenção eletrônica (circuitos de máquinas com comando numérico)',]);

        CompanyOccupation::create(['code'=>'313215','title'=>'Técnico eletrônico','filter'=>'técnico eletrônico',]);

        CompanyOccupation::create(['code'=>'313220','title'=>'Técnico em manutenção de equipamentos de informática','filter'=>'técnico em manutenção de equipamentos de informática',]);

        CompanyOccupation::create(['code'=>'313305','title'=>'Técnico de comunicação de dados','filter'=>'técnico de comunicação de dados',]);

        CompanyOccupation::create(['code'=>'313310','title'=>'Técnico de rede (telecomunicações)','filter'=>'técnico de rede (telecomunicações)',]);

        CompanyOccupation::create(['code'=>'313315','title'=>'Técnico de telecomunicações (telefonia)','filter'=>'técnico de telecomunicações (telefonia)',]);

        CompanyOccupation::create(['code'=>'313320','title'=>'Técnico de transmissão (telecomunicações)','filter'=>'técnico de transmissão (telecomunicações)',]);

        CompanyOccupation::create(['code'=>'313405','title'=>'Técnico em calibração','filter'=>'técnico em calibração',]);

        CompanyOccupation::create(['code'=>'313410','title'=>'Técnico em instrumentação','filter'=>'técnico em instrumentação',]);

        CompanyOccupation::create(['code'=>'313415','title'=>'Encarregado de manutenção de instrumentos de controle, medição e similares','filter'=>'encarregado de manutenção de instrumentos de controle, medição e similares',]);

        CompanyOccupation::create(['code'=>'313505','title'=>'Técnico em fotônica','filter'=>'técnico em fotônica',]);

        CompanyOccupation::create(['code'=>'314105','title'=>'Técnico em mecânica de precisão','filter'=>'técnico em mecânica de precisão',]);

        CompanyOccupation::create(['code'=>'314110','title'=>'Técnico mecânico','filter'=>'técnico mecânico',]);

        CompanyOccupation::create(['code'=>'314115','title'=>'Técnico mecânico (calefação, ventilação e refrigeração)','filter'=>'técnico mecânico (calefação, ventilação e refrigeração)',]);

        CompanyOccupation::create(['code'=>'314120','title'=>'Técnico mecânico (máquinas)','filter'=>'técnico mecânico (máquinas)',]);

        CompanyOccupation::create(['code'=>'314125','title'=>'Técnico mecânico (motores)','filter'=>'técnico mecânico (motores)',]);

        CompanyOccupation::create(['code'=>'314205','title'=>'Técnico mecânico na fabricação de ferramentas','filter'=>'técnico mecânico na fabricação de ferramentas',]);

        CompanyOccupation::create(['code'=>'314210','title'=>'Técnico mecânico na manutenção de ferramentas','filter'=>'técnico mecânico na manutenção de ferramentas',]);

        CompanyOccupation::create(['code'=>'314305','title'=>'Técnico em automobilística','filter'=>'técnico em automobilística',]);

        CompanyOccupation::create(['code'=>'314310','title'=>'Técnico mecânico (aeronaves)','filter'=>'técnico mecânico (aeronaves)',]);

        CompanyOccupation::create(['code'=>'314315','title'=>'Técnico mecânico (embarcações)','filter'=>'técnico mecânico (embarcações)',]);

        CompanyOccupation::create(['code'=>'314405','title'=>'Técnico de manutenção de sistemas e instrumentos','filter'=>'técnico de manutenção de sistemas e instrumentos',]);

        CompanyOccupation::create(['code'=>'314410','title'=>'Técnico em manutenção de máquinas','filter'=>'técnico em manutenção de máquinas',]);

        CompanyOccupation::create(['code'=>'314610','title'=>'Técnico em caldeiraria','filter'=>'técnico em caldeiraria',]);

        CompanyOccupation::create(['code'=>'314615','title'=>'Técnico em estruturas metálicas','filter'=>'técnico em estruturas metálicas',]);

        CompanyOccupation::create(['code'=>'314620','title'=>'Técnico em soldagem','filter'=>'técnico em soldagem',]);

        CompanyOccupation::create(['code'=>'314625','title'=>'Tecnólogo em soldagem','filter'=>'tecnólogo em soldagem',]);

        CompanyOccupation::create(['code'=>'314705','title'=>'Técnico de acabamento em siderurgia','filter'=>'técnico de acabamento em siderurgia',]);

        CompanyOccupation::create(['code'=>'314710','title'=>'Técnico de aciaria em siderurgia','filter'=>'técnico de aciaria em siderurgia',]);

        CompanyOccupation::create(['code'=>'314715','title'=>'Técnico de fundição em siderurgia','filter'=>'técnico de fundição em siderurgia',]);

        CompanyOccupation::create(['code'=>'314720','title'=>'Técnico de laminação em siderurgia','filter'=>'técnico de laminação em siderurgia',]);

        CompanyOccupation::create(['code'=>'314725','title'=>'Técnico de redução na siderurgia (primeira fusão)','filter'=>'técnico de redução na siderurgia (primeira fusão)',]);

        CompanyOccupation::create(['code'=>'314730','title'=>'Técnico de refratário em siderurgia','filter'=>'técnico de refratário em siderurgia',]);

        CompanyOccupation::create(['code'=>'314805','title'=>'Inspetor de equipamentos','filter'=>'inspetor de equipamentos',]);

        CompanyOccupation::create(['code'=>'314810','title'=>'Inspetor de fabricação','filter'=>'inspetor de fabricação',]);

        CompanyOccupation::create(['code'=>'314815','title'=>'Inspetor de ensaios não destrutivos','filter'=>'inspetor de ensaios não destrutivos',]);

        CompanyOccupation::create(['code'=>'314825','title'=>'Inspetor de dutos','filter'=>'inspetor de dutos',]);

        CompanyOccupation::create(['code'=>'314830','title'=>'Inspetor de controle dimensional','filter'=>'inspetor de controle dimensional',]);

        CompanyOccupation::create(['code'=>'314835','title'=>'Inspetor de pintura','filter'=>'inspetor de pintura',]);

        CompanyOccupation::create(['code'=>'314840','title'=>'Inspetor de manutenção','filter'=>'inspetor de manutenção',]);

        CompanyOccupation::create(['code'=>'314845','title'=>'Inspetor de soldagem','filter'=>'inspetor de soldagem',]);

        CompanyOccupation::create(['code'=>'316105','title'=>'Técnico em geofísica','filter'=>'técnico em geofísica',]);

        CompanyOccupation::create(['code'=>'316110','title'=>'Técnico em geologia','filter'=>'técnico em geologia',]);

        CompanyOccupation::create(['code'=>'316115','title'=>'Técnico em geoquímica','filter'=>'técnico em geoquímica',]);

        CompanyOccupation::create(['code'=>'316120','title'=>'Técnico em geotecnia','filter'=>'técnico em geotecnia',]);

        CompanyOccupation::create(['code'=>'316305','title'=>'Técnico de mineração','filter'=>'técnico de mineração',]);

        CompanyOccupation::create(['code'=>'316310','title'=>'Técnico de mineração (óleo e petróleo)','filter'=>'técnico de mineração (óleo e petróleo)',]);

        CompanyOccupation::create(['code'=>'316315','title'=>'Técnico em processamento mineral (exceto petróleo)','filter'=>'técnico em processamento mineral (exceto petróleo)',]);

        CompanyOccupation::create(['code'=>'316320','title'=>'Técnico em pesquisa mineral','filter'=>'técnico em pesquisa mineral',]);

        CompanyOccupation::create(['code'=>'316325','title'=>'Técnico de produção em refino de petróleo','filter'=>'técnico de produção em refino de petróleo',]);

        CompanyOccupation::create(['code'=>'316330','title'=>'Técnico em planejamento de lavra de minas','filter'=>'técnico em planejamento de lavra de minas',]);

        CompanyOccupation::create(['code'=>'316335','title'=>'Desincrustador (poços de petróleo)','filter'=>'desincrustador (poços de petróleo)',]);

        CompanyOccupation::create(['code'=>'316340','title'=>'Cimentador (poços de petróleo)','filter'=>'cimentador (poços de petróleo)',]);

        CompanyOccupation::create(['code'=>'317105','title'=>'Desenvolvedor web (técnico)','filter'=>'desenvolvedor web (técnico)',]);

        CompanyOccupation::create(['code'=>'317110','title'=>'Desenvolvedor de sistemas de tecnologia da informação (técnico)','filter'=>'desenvolvedor de sistemas de tecnologia da informação (técnico)',]);

        CompanyOccupation::create(['code'=>'317115','title'=>'Programador de máquinas - ferramenta com comando numérico','filter'=>'programador de máquinas - ferramenta com comando numérico',]);

        CompanyOccupation::create(['code'=>'317120','title'=>'Desenvolvedor de multimídia','filter'=>'desenvolvedor de multimídia',]);

        CompanyOccupation::create(['code'=>'317205','title'=>'Operador de computador','filter'=>'operador de computador',]);

        CompanyOccupation::create(['code'=>'317210','title'=>'Técnico de suporte ao usuário de tecnologia da informação','filter'=>'técnico de suporte ao usuário de tecnologia da informação',]);

        CompanyOccupation::create(['code'=>'318005','title'=>'Desenhista técnico','filter'=>'desenhista técnico',]);

        CompanyOccupation::create(['code'=>'318010','title'=>'Desenhista copista','filter'=>'desenhista copista',]);

        CompanyOccupation::create(['code'=>'318015','title'=>'Desenhista detalhista','filter'=>'desenhista detalhista',]);

        CompanyOccupation::create(['code'=>'318105','title'=>'Desenhista técnico (arquitetura)','filter'=>'desenhista técnico (arquitetura)',]);

        CompanyOccupation::create(['code'=>'318110','title'=>'Desenhista técnico (cartografia)','filter'=>'desenhista técnico (cartografia)',]);

        CompanyOccupation::create(['code'=>'318115','title'=>'Desenhista técnico (construção civil)','filter'=>'desenhista técnico (construção civil)',]);

        CompanyOccupation::create(['code'=>'318120','title'=>'Desenhista técnico (instalações hidrossanitárias)','filter'=>'desenhista técnico (instalações hidrossanitárias)',]);

        CompanyOccupation::create(['code'=>'318205','title'=>'Desenhista técnico mecânico','filter'=>'desenhista técnico mecânico',]);

        CompanyOccupation::create(['code'=>'318210','title'=>'Desenhista técnico aeronáutico','filter'=>'desenhista técnico aeronáutico',]);

        CompanyOccupation::create(['code'=>'318215','title'=>'Desenhista técnico naval','filter'=>'desenhista técnico naval',]);

        CompanyOccupation::create(['code'=>'318305','title'=>'Desenhista técnico (eletricidade e eletrônica)','filter'=>'desenhista técnico (eletricidade e eletrônica)',]);

        CompanyOccupation::create(['code'=>'318310','title'=>'Desenhista técnico (calefação, ventilação e refrigeração)','filter'=>'desenhista técnico (calefação, ventilação e refrigeração)',]);

        CompanyOccupation::create(['code'=>'318405','title'=>'Desenhista técnico (artes gráficas)','filter'=>'desenhista técnico (artes gráficas)',]);

        CompanyOccupation::create(['code'=>'318410','title'=>'Desenhista técnico (ilustrações artísticas)','filter'=>'desenhista técnico (ilustrações artísticas)',]);

        CompanyOccupation::create(['code'=>'318415','title'=>'Desenhista técnico (ilustrações técnicas)','filter'=>'desenhista técnico (ilustrações técnicas)',]);

        CompanyOccupation::create(['code'=>'318420','title'=>'Desenhista técnico (indústria têxtil)','filter'=>'desenhista técnico (indústria têxtil)',]);

        CompanyOccupation::create(['code'=>'318425','title'=>'Desenhista técnico (mobiliário)','filter'=>'desenhista técnico (mobiliário)',]);

        CompanyOccupation::create(['code'=>'318430','title'=>'Desenhista técnico de embalagens, maquetes e leiautes','filter'=>'desenhista técnico de embalagens, maquetes e leiautes',]);

        CompanyOccupation::create(['code'=>'318505','title'=>'Desenhista projetista de arquitetura','filter'=>'desenhista projetista de arquitetura',]);

        CompanyOccupation::create(['code'=>'318510','title'=>'Desenhista projetista de construção civil','filter'=>'desenhista projetista de construção civil',]);

        CompanyOccupation::create(['code'=>'318605','title'=>'Desenhista projetista de máquinas','filter'=>'desenhista projetista de máquinas',]);

        CompanyOccupation::create(['code'=>'318610','title'=>'Desenhista projetista mecânico','filter'=>'desenhista projetista mecânico',]);

        CompanyOccupation::create(['code'=>'318705','title'=>'Desenhista projetista de eletricidade','filter'=>'desenhista projetista de eletricidade',]);

        CompanyOccupation::create(['code'=>'318710','title'=>'Desenhista projetista eletrônico','filter'=>'desenhista projetista eletrônico',]);

        CompanyOccupation::create(['code'=>'318805','title'=>'Projetista de móveis','filter'=>'projetista de móveis',]);

        CompanyOccupation::create(['code'=>'318810','title'=>'Modelista de roupas','filter'=>'modelista de roupas',]);

        CompanyOccupation::create(['code'=>'318815','title'=>'Modelista de calçados','filter'=>'modelista de calçados',]);

        CompanyOccupation::create(['code'=>'319105','title'=>'Técnico em calçados e artefatos de couro','filter'=>'técnico em calçados e artefatos de couro',]);

        CompanyOccupation::create(['code'=>'319110','title'=>'Técnico em confecções do vestuário','filter'=>'técnico em confecções do vestuário',]);

        CompanyOccupation::create(['code'=>'319205','title'=>'Técnico do mobiliário','filter'=>'técnico do mobiliário',]);

        CompanyOccupation::create(['code'=>'320105','title'=>'Técnico em bioterismo','filter'=>'técnico em bioterismo',]);

        CompanyOccupation::create(['code'=>'320110','title'=>'Técnico em histologia','filter'=>'técnico em histologia',]);

        CompanyOccupation::create(['code'=>'321105','title'=>'Técnico agrícola','filter'=>'técnico agrícola',]);

        CompanyOccupation::create(['code'=>'321110','title'=>'Técnico agropecuário','filter'=>'técnico agropecuário',]);

        CompanyOccupation::create(['code'=>'321205','title'=>'Técnico em madeira','filter'=>'técnico em madeira',]);

        CompanyOccupation::create(['code'=>'321210','title'=>'Técnico florestal','filter'=>'técnico florestal',]);

        CompanyOccupation::create(['code'=>'321305','title'=>'Técnico em piscicultura','filter'=>'técnico em piscicultura',]);

        CompanyOccupation::create(['code'=>'321310','title'=>'Técnico em carcinicultura','filter'=>'técnico em carcinicultura',]);

        CompanyOccupation::create(['code'=>'321315','title'=>'Técnico em mitilicultura','filter'=>'técnico em mitilicultura',]);

        CompanyOccupation::create(['code'=>'321320','title'=>'Técnico em ranicultura','filter'=>'técnico em ranicultura',]);

        CompanyOccupation::create(['code'=>'322105','title'=>'Técnico em acupuntura','filter'=>'técnico em acupuntura',]);

        CompanyOccupation::create(['code'=>'322110','title'=>'Podólogo','filter'=>'podólogo',]);

        CompanyOccupation::create(['code'=>'322115','title'=>'Técnico em quiropraxia','filter'=>'técnico em quiropraxia',]);

        CompanyOccupation::create(['code'=>'322120','title'=>'Massoterapeuta','filter'=>'massoterapeuta',]);

        CompanyOccupation::create(['code'=>'322125','title'=>'Terapeuta holístico','filter'=>'terapeuta holístico',]);

        CompanyOccupation::create(['code'=>'322130','title'=>'Esteticista','filter'=>'esteticista',]);

        CompanyOccupation::create(['code'=>'322135','title'=>'Doula','filter'=>'doula',]);

        CompanyOccupation::create(['code'=>'322140','title'=>'Instrutor de pilates','filter'=>'instrutor de pilates',]);

        CompanyOccupation::create(['code'=>'322205','title'=>'Técnico de enfermagem','filter'=>'técnico de enfermagem',]);

        CompanyOccupation::create(['code'=>'322210','title'=>'Técnico de enfermagem de terapia intensiva','filter'=>'técnico de enfermagem de terapia intensiva',]);

        CompanyOccupation::create(['code'=>'322215','title'=>'Técnico de enfermagem do trabalho','filter'=>'técnico de enfermagem do trabalho',]);

        CompanyOccupation::create(['code'=>'322220','title'=>'Técnico de enfermagem psiquiátrica','filter'=>'técnico de enfermagem psiquiátrica',]);

        CompanyOccupation::create(['code'=>'322225','title'=>'Instrumentador cirúrgico','filter'=>'instrumentador cirúrgico',]);

        CompanyOccupation::create(['code'=>'322230','title'=>'Auxiliar de enfermagem','filter'=>'auxiliar de enfermagem',]);

        CompanyOccupation::create(['code'=>'322235','title'=>'Auxiliar de enfermagem do trabalho','filter'=>'auxiliar de enfermagem do trabalho',]);

        CompanyOccupation::create(['code'=>'322240','title'=>'Auxiliar de saúde (navegação marítima)','filter'=>'auxiliar de saúde (navegação marítima)',]);

        CompanyOccupation::create(['code'=>'322245','title'=>'Técnico de enfermagem da estratégia de saúde da família','filter'=>'técnico de enfermagem da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'322250','title'=>'Auxiliar de enfermagem da estratégia de saúde da família','filter'=>'auxiliar de enfermagem da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'322255','title'=>'Técnico em agente comunitário de saúde','filter'=>'técnico em agente comunitário de saúde',]);

        CompanyOccupation::create(['code'=>'322305','title'=>'Técnico em óptica e optometria','filter'=>'técnico em óptica e optometria',]);

        CompanyOccupation::create(['code'=>'322405','title'=>'Técnico em saúde bucal','filter'=>'técnico em saúde bucal',]);

        CompanyOccupation::create(['code'=>'322410','title'=>'Protético dentário','filter'=>'protético dentário',]);

        CompanyOccupation::create(['code'=>'322415','title'=>'Auxiliar em saúde bucal','filter'=>'auxiliar em saúde bucal',]);

        CompanyOccupation::create(['code'=>'322420','title'=>'Auxiliar de prótese dentária','filter'=>'auxiliar de prótese dentária',]);

        CompanyOccupation::create(['code'=>'322425','title'=>'Técnico em saúde bucal da estratégia de saúde da família','filter'=>'técnico em saúde bucal da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'322430','title'=>'Auxiliar em saúde bucal da estratégia de saúde da família','filter'=>'auxiliar em saúde bucal da estratégia de saúde da família',]);

        CompanyOccupation::create(['code'=>'322505','title'=>'Técnico de ortopedia','filter'=>'técnico de ortopedia',]);

        CompanyOccupation::create(['code'=>'322605','title'=>'Técnico de imobilização ortopédica','filter'=>'técnico de imobilização ortopédica',]);

        CompanyOccupation::create(['code'=>'323105','title'=>'Técnico em pecuária','filter'=>'técnico em pecuária',]);

        CompanyOccupation::create(['code'=>'324105','title'=>'Técnico em métodos eletrográficos em encefalografia','filter'=>'técnico em métodos eletrográficos em encefalografia',]);

        CompanyOccupation::create(['code'=>'324110','title'=>'Técnico em métodos gráficos em cardiologia','filter'=>'técnico em métodos gráficos em cardiologia',]);

        CompanyOccupation::create(['code'=>'324115','title'=>'Técnico em radiologia e imagenologia','filter'=>'técnico em radiologia e imagenologia',]);

        CompanyOccupation::create(['code'=>'324120','title'=>'Tecnólogo em radiologia','filter'=>'tecnólogo em radiologia',]);

        CompanyOccupation::create(['code'=>'324125','title'=>'Tecnólogo oftálmico','filter'=>'tecnólogo oftálmico',]);

        CompanyOccupation::create(['code'=>'324130','title'=>'Técnico em espirometria','filter'=>'técnico em espirometria',]);

        CompanyOccupation::create(['code'=>'324135','title'=>'Técnico em polissonografia','filter'=>'técnico em polissonografia',]);

        CompanyOccupation::create(['code'=>'324140','title'=>'Dosimetrista clínico','filter'=>'dosimetrista clínico',]);

        CompanyOccupation::create(['code'=>'324205','title'=>'Técnico em patologia clínica','filter'=>'técnico em patologia clínica',]);

        CompanyOccupation::create(['code'=>'324215','title'=>'Citotécnico','filter'=>'citotécnico',]);

        CompanyOccupation::create(['code'=>'324220','title'=>'Técnico em hemoterapia','filter'=>'técnico em hemoterapia',]);

        CompanyOccupation::create(['code'=>'325005','title'=>'Enólogo','filter'=>'enólogo',]);

        CompanyOccupation::create(['code'=>'325010','title'=>'Aromista','filter'=>'aromista',]);

        CompanyOccupation::create(['code'=>'325015','title'=>'Perfumista','filter'=>'perfumista',]);

        CompanyOccupation::create(['code'=>'325105','title'=>'Auxiliar técnico em laboratório de farmácia','filter'=>'auxiliar técnico em laboratório de farmácia',]);

        CompanyOccupation::create(['code'=>'325110','title'=>'Técnico em laboratório de farmácia','filter'=>'técnico em laboratório de farmácia',]);

        CompanyOccupation::create(['code'=>'325115','title'=>'Técnico em farmácia','filter'=>'técnico em farmácia',]);

        CompanyOccupation::create(['code'=>'325205','title'=>'Técnico de alimentos','filter'=>'técnico de alimentos',]);

        CompanyOccupation::create(['code'=>'325210','title'=>'Técnico em nutrição e dietética','filter'=>'técnico em nutrição e dietética',]);

        CompanyOccupation::create(['code'=>'325305','title'=>'Técnico em biotecnologia','filter'=>'técnico em biotecnologia',]);

        CompanyOccupation::create(['code'=>'325310','title'=>'Técnico em imunobiológicos','filter'=>'técnico em imunobiológicos',]);

        CompanyOccupation::create(['code'=>'328105','title'=>'Embalsamador','filter'=>'embalsamador',]);

        CompanyOccupation::create(['code'=>'328110','title'=>'Taxidermista','filter'=>'taxidermista',]);

        CompanyOccupation::create(['code'=>'331105','title'=>'Professor de nível médio na educação infantil','filter'=>'professor de nível médio na educação infantil',]);

        CompanyOccupation::create(['code'=>'331110','title'=>'Auxiliar de desenvolvimento infantil','filter'=>'auxiliar de desenvolvimento infantil',]);

        CompanyOccupation::create(['code'=>'331205','title'=>'Professor de nível médio no ensino fundamental','filter'=>'professor de nível médio no ensino fundamental',]);

        CompanyOccupation::create(['code'=>'331305','title'=>'Professor de nível médio no ensino profissionalizante','filter'=>'professor de nível médio no ensino profissionalizante',]);

        CompanyOccupation::create(['code'=>'332105','title'=>'Professor leigo no ensino fundamental','filter'=>'professor leigo no ensino fundamental',]);

        CompanyOccupation::create(['code'=>'332205','title'=>'Professor prático no ensino profissionalizante','filter'=>'professor prático no ensino profissionalizante',]);

        CompanyOccupation::create(['code'=>'333105','title'=>'Instrutor de auto-escola','filter'=>'instrutor de auto-escola',]);

        CompanyOccupation::create(['code'=>'333110','title'=>'Instrutor de cursos livres','filter'=>'instrutor de cursos livres',]);

        CompanyOccupation::create(['code'=>'333115','title'=>'Professores de cursos livres','filter'=>'professores de cursos livres',]);

        CompanyOccupation::create(['code'=>'334105','title'=>'Inspetor de alunos de escola privada','filter'=>'inspetor de alunos de escola privada',]);

        CompanyOccupation::create(['code'=>'334110','title'=>'Inspetor de alunos de escola pública','filter'=>'inspetor de alunos de escola pública',]);

        CompanyOccupation::create(['code'=>'334115','title'=>'Monitor de transporte escolar','filter'=>'monitor de transporte escolar',]);

        CompanyOccupation::create(['code'=>'341105','title'=>'Piloto comercial (exceto linhas aéreas)','filter'=>'piloto comercial (exceto linhas aéreas)',]);

        CompanyOccupation::create(['code'=>'341110','title'=>'Piloto comercial de helicóptero (exceto linhas aéreas)','filter'=>'piloto comercial de helicóptero (exceto linhas aéreas)',]);

        CompanyOccupation::create(['code'=>'341115','title'=>'Mecânico de vôo','filter'=>'mecânico de vôo',]);

        CompanyOccupation::create(['code'=>'341120','title'=>'Piloto agrícola','filter'=>'piloto agrícola',]);

        CompanyOccupation::create(['code'=>'341205','title'=>'Contramestre de cabotagem','filter'=>'contramestre de cabotagem',]);

        CompanyOccupation::create(['code'=>'341210','title'=>'Mestre de cabotagem','filter'=>'mestre de cabotagem',]);

        CompanyOccupation::create(['code'=>'341215','title'=>'Mestre fluvial','filter'=>'mestre fluvial',]);

        CompanyOccupation::create(['code'=>'341220','title'=>'Patrão de pesca de alto-mar','filter'=>'patrão de pesca de alto-mar',]);

        CompanyOccupation::create(['code'=>'341225','title'=>'Patrão de pesca na navegação interior','filter'=>'patrão de pesca na navegação interior',]);

        CompanyOccupation::create(['code'=>'341230','title'=>'Piloto fluvial','filter'=>'piloto fluvial',]);

        CompanyOccupation::create(['code'=>'341235','title'=>'Técnico em sinalização náutica','filter'=>'técnico em sinalização náutica',]);

        CompanyOccupation::create(['code'=>'341240','title'=>'Técnicos em manobras em equipamentos de convés','filter'=>'técnicos em manobras em equipamentos de convés',]);

        CompanyOccupation::create(['code'=>'341245','title'=>'Técnico em sinais navais','filter'=>'técnico em sinais navais',]);

        CompanyOccupation::create(['code'=>'341250','title'=>'Auxiliar técnico de sinalização nautica','filter'=>'auxiliar técnico de sinalização nautica',]);

        CompanyOccupation::create(['code'=>'341305','title'=>'Condutor maquinista motorista fluvial','filter'=>'condutor maquinista motorista fluvial',]);

        CompanyOccupation::create(['code'=>'341310','title'=>'Condutor de máquinas','filter'=>'condutor de máquinas',]);

        CompanyOccupation::create(['code'=>'341315','title'=>'Eletricista de bordo','filter'=>'eletricista de bordo',]);

        CompanyOccupation::create(['code'=>'341320','title'=>'Condutor de máquinas (bombeador)','filter'=>'condutor de máquinas (bombeador)',]);

        CompanyOccupation::create(['code'=>'341325','title'=>'Condutor de máquinas (mecânico)','filter'=>'condutor de máquinas (mecânico)',]);

        CompanyOccupation::create(['code'=>'342105','title'=>'Analista de transporte em comércio exterior','filter'=>'analista de transporte em comércio exterior',]);

        CompanyOccupation::create(['code'=>'342110','title'=>'Operador de transporte multimodal','filter'=>'operador de transporte multimodal',]);

        CompanyOccupation::create(['code'=>'342115','title'=>'Controlador de serviços de máquinas e veículos','filter'=>'controlador de serviços de máquinas e veículos',]);

        CompanyOccupation::create(['code'=>'342120','title'=>'Afretador','filter'=>'afretador',]);

        CompanyOccupation::create(['code'=>'342125','title'=>'Tecnólogo em logística de transporte','filter'=>'tecnólogo em logística de transporte',]);

        CompanyOccupation::create(['code'=>'342205','title'=>'Ajudante de despachante aduaneiro','filter'=>'ajudante de despachante aduaneiro',]);

        CompanyOccupation::create(['code'=>'342210','title'=>'Despachante aduaneiro','filter'=>'despachante aduaneiro',]);

        CompanyOccupation::create(['code'=>'342215','title'=>'Analista de desembaraço aduaneiro','filter'=>'analista de desembaraço aduaneiro',]);

        CompanyOccupation::create(['code'=>'342305','title'=>'Chefe de serviço de transporte rodoviário (passageiros e cargas)','filter'=>'chefe de serviço de transporte rodoviário (passageiros e cargas)',]);

        CompanyOccupation::create(['code'=>'342310','title'=>'Inspetor de serviços de transportes rodoviários (passageiros e cargas)','filter'=>'inspetor de serviços de transportes rodoviários (passageiros e cargas)',]);

        CompanyOccupation::create(['code'=>'342315','title'=>'Supervisor de carga e descarga','filter'=>'supervisor de carga e descarga',]);

        CompanyOccupation::create(['code'=>'342405','title'=>'Agente de estação (ferrovia e metrô)','filter'=>'agente de estação (ferrovia e metrô)',]);

        CompanyOccupation::create(['code'=>'342410','title'=>'Operador de centro de controle (ferrovia e metrô)','filter'=>'operador de centro de controle (ferrovia e metrô)',]);

        CompanyOccupation::create(['code'=>'342505','title'=>'Controlador de tráfego aéreo','filter'=>'controlador de tráfego aéreo',]);

        CompanyOccupation::create(['code'=>'342510','title'=>'Despachante operacional de vôo','filter'=>'despachante operacional de vôo',]);

        CompanyOccupation::create(['code'=>'342515','title'=>'Fiscal de aviação civil (fac)','filter'=>'fiscal de aviação civil (fac)',]);

        CompanyOccupation::create(['code'=>'342530','title'=>'Inspetor de aviação civil','filter'=>'inspetor de aviação civil',]);

        CompanyOccupation::create(['code'=>'342535','title'=>'Operador de atendimento aeroviário','filter'=>'operador de atendimento aeroviário',]);

        CompanyOccupation::create(['code'=>'342540','title'=>'Supervisor da administração de aeroportos','filter'=>'supervisor da administração de aeroportos',]);

        CompanyOccupation::create(['code'=>'342545','title'=>'Supervisor de empresa aérea em aeroportos','filter'=>'supervisor de empresa aérea em aeroportos',]);

        CompanyOccupation::create(['code'=>'342550','title'=>'Agente de proteção de aviação civil','filter'=>'agente de proteção de aviação civil',]);

        CompanyOccupation::create(['code'=>'342555','title'=>'Fiscal de pista de aeroporto','filter'=>'fiscal de pista de aeroporto',]);

        CompanyOccupation::create(['code'=>'342560','title'=>'Operador de rampa ( transporte aéreo)','filter'=>'operador de rampa ( transporte aéreo)',]);

        CompanyOccupation::create(['code'=>'342605','title'=>'Chefe de estação portuária','filter'=>'chefe de estação portuária',]);

        CompanyOccupation::create(['code'=>'342610','title'=>'Supervisor de operações portuárias','filter'=>'supervisor de operações portuárias',]);

        CompanyOccupation::create(['code'=>'351105','title'=>'Técnico de contabilidade','filter'=>'técnico de contabilidade',]);

        CompanyOccupation::create(['code'=>'351110','title'=>'Chefe de contabilidade (técnico)','filter'=>'chefe de contabilidade (técnico)',]);

        CompanyOccupation::create(['code'=>'351115','title'=>'Consultor contábil (técnico)','filter'=>'consultor contábil (técnico)',]);

        CompanyOccupation::create(['code'=>'351305','title'=>'Técnico em administração','filter'=>'técnico em administração',]);

        CompanyOccupation::create(['code'=>'351310','title'=>'Técnico em administração de comércio exterior','filter'=>'técnico em administração de comércio exterior',]);

        CompanyOccupation::create(['code'=>'351315','title'=>'Agente de recrutamento e seleção','filter'=>'agente de recrutamento e seleção',]);

        CompanyOccupation::create(['code'=>'351405','title'=>'Escrevente','filter'=>'escrevente',]);

        CompanyOccupation::create(['code'=>'351410','title'=>'Escrivão judicial','filter'=>'escrivão judicial',]);

        CompanyOccupation::create(['code'=>'351415','title'=>'Escrivão extra - judicial','filter'=>'escrivão extra - judicial',]);

        CompanyOccupation::create(['code'=>'351420','title'=>'Escrivão de polícia','filter'=>'escrivão de polícia',]);

        CompanyOccupation::create(['code'=>'351425','title'=>'Oficial de justiça','filter'=>'oficial de justiça',]);

        CompanyOccupation::create(['code'=>'351430','title'=>'Auxiliar de serviços jurídicos','filter'=>'auxiliar de serviços jurídicos',]);

        CompanyOccupation::create(['code'=>'351435','title'=>'Mediador de conflitos','filter'=>'mediador de conflitos',]);

        CompanyOccupation::create(['code'=>'351440','title'=>'Árbitro extrajudicial','filter'=>'Árbitro extrajudicial',]);

        CompanyOccupation::create(['code'=>'351505','title'=>'Técnico em secretariado','filter'=>'técnico em secretariado',]);

        CompanyOccupation::create(['code'=>'351510','title'=>'Taquígrafo','filter'=>'taquígrafo',]);

        CompanyOccupation::create(['code'=>'351515','title'=>'Estenotipista','filter'=>'estenotipista',]);

        CompanyOccupation::create(['code'=>'351605','title'=>'Técnico em segurança do trabalho','filter'=>'técnico em segurança do trabalho',]);

        CompanyOccupation::create(['code'=>'351610','title'=>'Técnico em higiene ocupacional','filter'=>'técnico em higiene ocupacional',]);

        CompanyOccupation::create(['code'=>'351705','title'=>'Analista de seguros (técnico)','filter'=>'analista de seguros (técnico)',]);

        CompanyOccupation::create(['code'=>'351710','title'=>'Analista de sinistros','filter'=>'analista de sinistros',]);

        CompanyOccupation::create(['code'=>'351715','title'=>'Assistente comercial de seguros','filter'=>'assistente comercial de seguros',]);

        CompanyOccupation::create(['code'=>'351720','title'=>'Assistente técnico de seguros','filter'=>'assistente técnico de seguros',]);

        CompanyOccupation::create(['code'=>'351725','title'=>'Inspetor de risco','filter'=>'inspetor de risco',]);

        CompanyOccupation::create(['code'=>'351730','title'=>'Inspetor de sinistros','filter'=>'inspetor de sinistros',]);

        CompanyOccupation::create(['code'=>'351735','title'=>'Técnico de resseguros','filter'=>'técnico de resseguros',]);

        CompanyOccupation::create(['code'=>'351740','title'=>'Técnico de seguros','filter'=>'técnico de seguros',]);

        CompanyOccupation::create(['code'=>'351805','title'=>'Detetive profissional','filter'=>'detetive profissional',]);

        CompanyOccupation::create(['code'=>'351810','title'=>'Investigador de polícia','filter'=>'investigador de polícia',]);

        CompanyOccupation::create(['code'=>'351815','title'=>'Papiloscopista policial','filter'=>'papiloscopista policial',]);

        CompanyOccupation::create(['code'=>'351905','title'=>'Agente de inteligência','filter'=>'agente de inteligência',]);

        CompanyOccupation::create(['code'=>'351910','title'=>'Agente técnico de inteligência','filter'=>'agente técnico de inteligência',]);

        CompanyOccupation::create(['code'=>'352205','title'=>'Agente de defesa ambiental','filter'=>'agente de defesa ambiental',]);

        CompanyOccupation::create(['code'=>'352210','title'=>'Agente de saúde pública','filter'=>'agente de saúde pública',]);

        CompanyOccupation::create(['code'=>'352305','title'=>'Metrologista','filter'=>'metrologista',]);

        CompanyOccupation::create(['code'=>'352310','title'=>'Agente fiscal de qualidade','filter'=>'agente fiscal de qualidade',]);

        CompanyOccupation::create(['code'=>'352315','title'=>'Agente fiscal metrológico','filter'=>'agente fiscal metrológico',]);

        CompanyOccupation::create(['code'=>'352320','title'=>'Agente fiscal têxtil','filter'=>'agente fiscal têxtil',]);

        CompanyOccupation::create(['code'=>'352405','title'=>'Agente de direitos autorais','filter'=>'agente de direitos autorais',]);

        CompanyOccupation::create(['code'=>'352410','title'=>'Avaliador de produtos dos meios de comunicação','filter'=>'avaliador de produtos dos meios de comunicação',]);

        CompanyOccupation::create(['code'=>'352420','title'=>'Técnico em direitos autorais','filter'=>'técnico em direitos autorais',]);

        CompanyOccupation::create(['code'=>'353205','title'=>'Técnico de operações e serviços bancários - câmbio','filter'=>'técnico de operações e serviços bancários - câmbio',]);

        CompanyOccupation::create(['code'=>'353210','title'=>'Técnico de operações e serviços bancários - crédito imobiliário','filter'=>'técnico de operações e serviços bancários - crédito imobiliário',]);

        CompanyOccupation::create(['code'=>'353215','title'=>'Técnico de operações e serviços bancários - crédito rural','filter'=>'técnico de operações e serviços bancários - crédito rural',]);

        CompanyOccupation::create(['code'=>'353220','title'=>'Técnico de operações e serviços bancários - leasing','filter'=>'técnico de operações e serviços bancários - leasing',]);

        CompanyOccupation::create(['code'=>'353225','title'=>'Técnico de operações e serviços bancários - renda fixa e variável','filter'=>'técnico de operações e serviços bancários - renda fixa e variável',]);

        CompanyOccupation::create(['code'=>'353230','title'=>'Tesoureiro de banco','filter'=>'tesoureiro de banco',]);

        CompanyOccupation::create(['code'=>'353235','title'=>'Chefe de serviços bancários','filter'=>'chefe de serviços bancários',]);

        CompanyOccupation::create(['code'=>'354120','title'=>'Agente de vendas de serviços','filter'=>'agente de vendas de serviços',]);

        CompanyOccupation::create(['code'=>'354125','title'=>'Assistente de vendas','filter'=>'assistente de vendas',]);

        CompanyOccupation::create(['code'=>'354130','title'=>'Promotor de vendas especializado','filter'=>'promotor de vendas especializado',]);

        CompanyOccupation::create(['code'=>'354135','title'=>'Técnico de vendas','filter'=>'técnico de vendas',]);

        CompanyOccupation::create(['code'=>'354140','title'=>'Técnico em atendimento e vendas','filter'=>'técnico em atendimento e vendas',]);

        CompanyOccupation::create(['code'=>'354145','title'=>'Vendedor pracista','filter'=>'vendedor pracista',]);

        CompanyOccupation::create(['code'=>'354150','title'=>'Propagandista de produtos famacêuticos','filter'=>'propagandista de produtos famacêuticos',]);

        CompanyOccupation::create(['code'=>'354205','title'=>'Comprador','filter'=>'comprador',]);

        CompanyOccupation::create(['code'=>'354210','title'=>'Supervisor de compras','filter'=>'supervisor de compras',]);

        CompanyOccupation::create(['code'=>'354305','title'=>'Analista de exportação e importação','filter'=>'analista de exportação e importação',]);

        CompanyOccupation::create(['code'=>'354405','title'=>'Leiloeiro','filter'=>'leiloeiro',]);

        CompanyOccupation::create(['code'=>'354410','title'=>'Avaliador de imóveis','filter'=>'avaliador de imóveis',]);

        CompanyOccupation::create(['code'=>'354415','title'=>'Avaliador de bens móveis','filter'=>'avaliador de bens móveis',]);

        CompanyOccupation::create(['code'=>'354505','title'=>'Corretor de seguros','filter'=>'corretor de seguros',]);

        CompanyOccupation::create(['code'=>'354605','title'=>'Corretor de imóveis','filter'=>'corretor de imóveis',]);

        CompanyOccupation::create(['code'=>'354610','title'=>'Corretor de grãos','filter'=>'corretor de grãos',]);

        CompanyOccupation::create(['code'=>'354705','title'=>'Representante comercial autônomo','filter'=>'representante comercial autônomo',]);

        CompanyOccupation::create(['code'=>'354805','title'=>'Técnico em turismo','filter'=>'técnico em turismo',]);

        CompanyOccupation::create(['code'=>'354810','title'=>'Operador de turismo','filter'=>'operador de turismo',]);

        CompanyOccupation::create(['code'=>'354815','title'=>'Agente de viagem','filter'=>'agente de viagem',]);

        CompanyOccupation::create(['code'=>'354820','title'=>'Organizador de evento','filter'=>'organizador de evento',]);

        CompanyOccupation::create(['code'=>'354825','title'=>'Cerimonialista','filter'=>'cerimonialista',]);

        CompanyOccupation::create(['code'=>'371105','title'=>'Auxiliar de biblioteca','filter'=>'auxiliar de biblioteca',]);

        CompanyOccupation::create(['code'=>'371110','title'=>'Técnico em biblioteconomia','filter'=>'técnico em biblioteconomia',]);

        CompanyOccupation::create(['code'=>'371205','title'=>'Colecionador de selos e moedas','filter'=>'colecionador de selos e moedas',]);

        CompanyOccupation::create(['code'=>'371210','title'=>'Técnico em museologia','filter'=>'técnico em museologia',]);

        CompanyOccupation::create(['code'=>'371305','title'=>'Técnico em programação visual','filter'=>'técnico em programação visual',]);

        CompanyOccupation::create(['code'=>'371310','title'=>'Técnico gráfico','filter'=>'técnico gráfico',]);

        CompanyOccupation::create(['code'=>'371405','title'=>'Recreador de acantonamento','filter'=>'recreador de acantonamento',]);

        CompanyOccupation::create(['code'=>'371410','title'=>'Recreador','filter'=>'recreador',]);

        CompanyOccupation::create(['code'=>'372105','title'=>'Diretor de fotografia','filter'=>'diretor de fotografia',]);

        CompanyOccupation::create(['code'=>'372110','title'=>'Iluminador (televisão)','filter'=>'iluminador (televisão)',]);

        CompanyOccupation::create(['code'=>'372115','title'=>'Operador de câmera de televisão','filter'=>'operador de câmera de televisão',]);

        CompanyOccupation::create(['code'=>'372205','title'=>'Operador de rede de teleprocessamento','filter'=>'operador de rede de teleprocessamento',]);

        CompanyOccupation::create(['code'=>'372210','title'=>'Radiotelegrafista','filter'=>'radiotelegrafista',]);

        CompanyOccupation::create(['code'=>'373105','title'=>'Operador de mídia audiovisual','filter'=>'operador de mídia audiovisual',]);

        CompanyOccupation::create(['code'=>'373130','title'=>'Técnico de sistemas audiovisuais','filter'=>'técnico de sistemas audiovisuais',]);

        CompanyOccupation::create(['code'=>'373135','title'=>'Operador de controle mestre','filter'=>'operador de controle mestre',]);

        CompanyOccupation::create(['code'=>'373140','title'=>'Coordenador de programação','filter'=>'coordenador de programação',]);

        CompanyOccupation::create(['code'=>'373145','title'=>'Assistente de operações audiovisuais','filter'=>'assistente de operações audiovisuais',]);

        CompanyOccupation::create(['code'=>'373220','title'=>'Supervisor técnico operacional de sistemas de televisão e produtoras de vídeo','filter'=>'supervisor técnico operacional de sistemas de televisão e produtoras de vídeo',]);

        CompanyOccupation::create(['code'=>'373225','title'=>'Supervisor de operações (mídias audiovisuais)','filter'=>'supervisor de operações (mídias audiovisuais)',]);

        CompanyOccupation::create(['code'=>'373230','title'=>'Supervisor técnico (mídias audiovisuais)','filter'=>'supervisor técnico (mídias audiovisuais)',]);

        CompanyOccupation::create(['code'=>'374105','title'=>'Técnico em gravação de áudio','filter'=>'técnico em gravação de áudio',]);

        CompanyOccupation::create(['code'=>'374110','title'=>'Técnico em instalação de equipamentos de áudio','filter'=>'técnico em instalação de equipamentos de áudio',]);

        CompanyOccupation::create(['code'=>'374115','title'=>'Técnico em masterização de áudio','filter'=>'técnico em masterização de áudio',]);

        CompanyOccupation::create(['code'=>'374120','title'=>'Projetista de som','filter'=>'projetista de som',]);

        CompanyOccupation::create(['code'=>'374125','title'=>'Técnico em sonorização','filter'=>'técnico em sonorização',]);

        CompanyOccupation::create(['code'=>'374130','title'=>'Técnico em mixagem de áudio','filter'=>'técnico em mixagem de áudio',]);

        CompanyOccupation::create(['code'=>'374135','title'=>'Projetista de sistemas de áudio','filter'=>'projetista de sistemas de áudio',]);

        CompanyOccupation::create(['code'=>'374140','title'=>'Microfonista','filter'=>'microfonista',]);

        CompanyOccupation::create(['code'=>'374145','title'=>'Dj (disc jockey)','filter'=>'dj (disc jockey)',]);

        CompanyOccupation::create(['code'=>'374150','title'=>'Sonoplasta','filter'=>'sonoplasta',]);

        CompanyOccupation::create(['code'=>'374155','title'=>'Analista musical','filter'=>'analista musical',]);

        CompanyOccupation::create(['code'=>'374205','title'=>'Cenotécnico (cinema, vídeo, televisão, teatro e espetáculos)','filter'=>'cenotécnico (cinema, vídeo, televisão, teatro e espetáculos)',]);

        CompanyOccupation::create(['code'=>'374210','title'=>'Maquinista de cinema e vídeo','filter'=>'maquinista de cinema e vídeo',]);

        CompanyOccupation::create(['code'=>'374215','title'=>'Maquinista de teatro e espetáculos','filter'=>'maquinista de teatro e espetáculos',]);

        CompanyOccupation::create(['code'=>'374305','title'=>'Operador de projetor cinematográfico','filter'=>'operador de projetor cinematográfico',]);

        CompanyOccupation::create(['code'=>'374310','title'=>'Operador-mantenedor de projetor cinematográfico','filter'=>'operador-mantenedor de projetor cinematográfico',]);

        CompanyOccupation::create(['code'=>'374405','title'=>'Editor de mídia audiovisual','filter'=>'editor de mídia audiovisual',]);

        CompanyOccupation::create(['code'=>'374410','title'=>'Finalizador de filmes','filter'=>'finalizador de filmes',]);

        CompanyOccupation::create(['code'=>'374415','title'=>'Finalizador de vídeo','filter'=>'finalizador de vídeo',]);

        CompanyOccupation::create(['code'=>'374420','title'=>'Montador de filmes','filter'=>'montador de filmes',]);

        CompanyOccupation::create(['code'=>'374425','title'=>'Diretor de imagens (tv)','filter'=>'diretor de imagens (tv)',]);

        CompanyOccupation::create(['code'=>'375105','title'=>'Designer de interiores','filter'=>'designer de interiores',]);

        CompanyOccupation::create(['code'=>'375110','title'=>'Designer de vitrines','filter'=>'designer de vitrines',]);

        CompanyOccupation::create(['code'=>'375115','title'=>'Visual merchandiser','filter'=>'visual merchandiser',]);

        CompanyOccupation::create(['code'=>'375120','title'=>'Decorador de eventos','filter'=>'decorador de eventos',]);

        CompanyOccupation::create(['code'=>'375125','title'=>'Produtor de moda','filter'=>'produtor de moda',]);

        CompanyOccupation::create(['code'=>'375130','title'=>'Profissional de organização (personal organizer)','filter'=>'profissional de organização (personal organizer)',]);

        CompanyOccupation::create(['code'=>'376105','title'=>'Dançarino tradicional','filter'=>'dançarino tradicional',]);

        CompanyOccupation::create(['code'=>'376110','title'=>'Dançarino popular','filter'=>'dançarino popular',]);

        CompanyOccupation::create(['code'=>'376205','title'=>'Acrobata','filter'=>'acrobata',]);

        CompanyOccupation::create(['code'=>'376210','title'=>'Artista aéreo','filter'=>'artista aéreo',]);

        CompanyOccupation::create(['code'=>'376215','title'=>'Artista de circo (outros)','filter'=>'artista de circo (outros)',]);

        CompanyOccupation::create(['code'=>'376220','title'=>'Contorcionista','filter'=>'contorcionista',]);

        CompanyOccupation::create(['code'=>'376225','title'=>'Domador de animais (circense)','filter'=>'domador de animais (circense)',]);

        CompanyOccupation::create(['code'=>'376230','title'=>'Equilibrista','filter'=>'equilibrista',]);

        CompanyOccupation::create(['code'=>'376235','title'=>'Mágico','filter'=>'mágico',]);

        CompanyOccupation::create(['code'=>'376240','title'=>'Malabarista','filter'=>'malabarista',]);

        CompanyOccupation::create(['code'=>'376245','title'=>'Palhaço','filter'=>'palhaço',]);

        CompanyOccupation::create(['code'=>'376250','title'=>'Titeriteiro','filter'=>'titeriteiro',]);

        CompanyOccupation::create(['code'=>'376255','title'=>'Trapezista','filter'=>'trapezista',]);

        CompanyOccupation::create(['code'=>'376305','title'=>'Apresentador de eventos','filter'=>'apresentador de eventos',]);

        CompanyOccupation::create(['code'=>'376310','title'=>'Apresentador de festas populares','filter'=>'apresentador de festas populares',]);

        CompanyOccupation::create(['code'=>'376315','title'=>'Apresentador de programas de rádio','filter'=>'apresentador de programas de rádio',]);

        CompanyOccupation::create(['code'=>'376320','title'=>'Apresentador de programas de televisão','filter'=>'apresentador de programas de televisão',]);

        CompanyOccupation::create(['code'=>'376325','title'=>'Apresentador de circo','filter'=>'apresentador de circo',]);

        CompanyOccupation::create(['code'=>'376330','title'=>'Mestre de cerimonias','filter'=>'mestre de cerimonias',]);

        CompanyOccupation::create(['code'=>'376405','title'=>'Modelo artístico','filter'=>'modelo artístico',]);

        CompanyOccupation::create(['code'=>'376410','title'=>'Modelo de modas','filter'=>'modelo de modas',]);

        CompanyOccupation::create(['code'=>'376415','title'=>'Modelo publicitário','filter'=>'modelo publicitário',]);

        CompanyOccupation::create(['code'=>'377105','title'=>'Atleta profissional (outras modalidades)','filter'=>'atleta profissional (outras modalidades)',]);

        CompanyOccupation::create(['code'=>'377110','title'=>'Atleta profissional de futebol','filter'=>'atleta profissional de futebol',]);

        CompanyOccupation::create(['code'=>'377115','title'=>'Atleta profissional de golfe','filter'=>'atleta profissional de golfe',]);

        CompanyOccupation::create(['code'=>'377120','title'=>'Atleta profissional de luta','filter'=>'atleta profissional de luta',]);

        CompanyOccupation::create(['code'=>'377125','title'=>'Atleta profissional de tênis','filter'=>'atleta profissional de tênis',]);

        CompanyOccupation::create(['code'=>'377130','title'=>'Jóquei','filter'=>'jóquei',]);

        CompanyOccupation::create(['code'=>'377135','title'=>'Piloto de competição automobilística','filter'=>'piloto de competição automobilística',]);

        CompanyOccupation::create(['code'=>'377140','title'=>'Profissional de atletismo','filter'=>'profissional de atletismo',]);

        CompanyOccupation::create(['code'=>'377145','title'=>'Pugilista','filter'=>'pugilista',]);

        CompanyOccupation::create(['code'=>'377205','title'=>'Árbitro desportivo','filter'=>'Árbitro desportivo',]);

        CompanyOccupation::create(['code'=>'377210','title'=>'Árbitro de atletismo','filter'=>'Árbitro de atletismo',]);

        CompanyOccupation::create(['code'=>'377215','title'=>'Árbitro de basquete','filter'=>'Árbitro de basquete',]);

        CompanyOccupation::create(['code'=>'377220','title'=>'Árbitro de futebol','filter'=>'Árbitro de futebol',]);

        CompanyOccupation::create(['code'=>'377225','title'=>'Árbitro de futebol de salão','filter'=>'Árbitro de futebol de salão',]);

        CompanyOccupation::create(['code'=>'377230','title'=>'Árbitro de judô','filter'=>'Árbitro de judô',]);

        CompanyOccupation::create(['code'=>'377235','title'=>'Árbitro de karatê','filter'=>'Árbitro de karatê',]);

        CompanyOccupation::create(['code'=>'377240','title'=>'Árbitro de poló aquático','filter'=>'Árbitro de poló aquático',]);

        CompanyOccupation::create(['code'=>'377245','title'=>'Árbitro de vôlei','filter'=>'Árbitro de vôlei',]);

        CompanyOccupation::create(['code'=>'391105','title'=>'Cronoanalista','filter'=>'cronoanalista',]);

        CompanyOccupation::create(['code'=>'391110','title'=>'Cronometrista','filter'=>'cronometrista',]);

        CompanyOccupation::create(['code'=>'391115','title'=>'Controlador de entrada e saída','filter'=>'controlador de entrada e saída',]);

        CompanyOccupation::create(['code'=>'391120','title'=>'Planejista','filter'=>'planejista',]);

        CompanyOccupation::create(['code'=>'391125','title'=>'Técnico de planejamento de produção','filter'=>'técnico de planejamento de produção',]);

        CompanyOccupation::create(['code'=>'391130','title'=>'Técnico de planejamento e programação da manutenção','filter'=>'técnico de planejamento e programação da manutenção',]);

        CompanyOccupation::create(['code'=>'391135','title'=>'Técnico de matéria-prima e material','filter'=>'técnico de matéria-prima e material',]);

        CompanyOccupation::create(['code'=>'391140','title'=>'Analista de manutenção (equipamentos aéreos)','filter'=>'analista de manutenção (equipamentos aéreos)',]);

        CompanyOccupation::create(['code'=>'391145','title'=>'Analista de planejamento de manutenção','filter'=>'analista de planejamento de manutenção',]);

        CompanyOccupation::create(['code'=>'391205','title'=>'Inspetor de qualidade','filter'=>'inspetor de qualidade',]);

        CompanyOccupation::create(['code'=>'391210','title'=>'Técnico de garantia da qualidade','filter'=>'técnico de garantia da qualidade',]);

        CompanyOccupation::create(['code'=>'391215','title'=>'Operador de inspeção de qualidade','filter'=>'operador de inspeção de qualidade',]);

        CompanyOccupation::create(['code'=>'391220','title'=>'Técnico de painel de controle','filter'=>'técnico de painel de controle',]);

        CompanyOccupation::create(['code'=>'391225','title'=>'Escolhedor de papel','filter'=>'escolhedor de papel',]);

        CompanyOccupation::create(['code'=>'391230','title'=>'Técnico operacional de serviços de correios','filter'=>'técnico operacional de serviços de correios',]);

        CompanyOccupation::create(['code'=>'395105','title'=>'Técnico de apoio em pesquisa e desenvolvimento (exceto agropecuário e florestal)','filter'=>'técnico de apoio em pesquisa e desenvolvimento (exceto agropecuário e florestal)',]);

        CompanyOccupation::create(['code'=>'395110','title'=>'Técnico de apoio em pesquisa e desenvolvimento agropecuário florestal','filter'=>'técnico de apoio em pesquisa e desenvolvimento agropecuário florestal',]);

        CompanyOccupation::create(['code'=>'410105','title'=>'Supervisor administrativo','filter'=>'supervisor administrativo',]);

        CompanyOccupation::create(['code'=>'410205','title'=>'Supervisor de almoxarifado','filter'=>'supervisor de almoxarifado',]);

        CompanyOccupation::create(['code'=>'410210','title'=>'Supervisor de câmbio','filter'=>'supervisor de câmbio',]);

        CompanyOccupation::create(['code'=>'410215','title'=>'Supervisor de contas a pagar','filter'=>'supervisor de contas a pagar',]);

        CompanyOccupation::create(['code'=>'410220','title'=>'Supervisor de controle patrimonial','filter'=>'supervisor de controle patrimonial',]);

        CompanyOccupation::create(['code'=>'410225','title'=>'Supervisor de crédito e cobrança','filter'=>'supervisor de crédito e cobrança',]);

        CompanyOccupation::create(['code'=>'410230','title'=>'Supervisor de orçamento','filter'=>'supervisor de orçamento',]);

        CompanyOccupation::create(['code'=>'410235','title'=>'Supervisor de tesouraria','filter'=>'supervisor de tesouraria',]);

        CompanyOccupation::create(['code'=>'410240','title'=>'Supervisor de logística','filter'=>'supervisor de logística',]);

        CompanyOccupation::create(['code'=>'411005','title'=>'Auxiliar de escritório','filter'=>'auxiliar de escritório',]);

        CompanyOccupation::create(['code'=>'411010','title'=>'Assistente administrativo','filter'=>'assistente administrativo',]);

        CompanyOccupation::create(['code'=>'411015','title'=>'Atendente de judiciário','filter'=>'atendente de judiciário',]);

        CompanyOccupation::create(['code'=>'411020','title'=>'Auxiliar de judiciário','filter'=>'auxiliar de judiciário',]);

        CompanyOccupation::create(['code'=>'411025','title'=>'Auxiliar de cartório','filter'=>'auxiliar de cartório',]);

        CompanyOccupation::create(['code'=>'411030','title'=>'Auxiliar de pessoal','filter'=>'auxiliar de pessoal',]);

        CompanyOccupation::create(['code'=>'411035','title'=>'Auxiliar de estatística','filter'=>'auxiliar de estatística',]);

        CompanyOccupation::create(['code'=>'411040','title'=>'Auxiliar de seguros','filter'=>'auxiliar de seguros',]);

        CompanyOccupation::create(['code'=>'411045','title'=>'Auxiliar de serviços de importação e exportação','filter'=>'auxiliar de serviços de importação e exportação',]);

        CompanyOccupation::create(['code'=>'411050','title'=>'Agente de microcrédito','filter'=>'agente de microcrédito',]);

        CompanyOccupation::create(['code'=>'411055','title'=>'Captador de recursos','filter'=>'captador de recursos',]);

        CompanyOccupation::create(['code'=>'412105','title'=>'Datilógrafo','filter'=>'datilógrafo',]);

        CompanyOccupation::create(['code'=>'412110','title'=>'Digitador','filter'=>'digitador',]);

        CompanyOccupation::create(['code'=>'412115','title'=>'Operador de mensagens de telecomunicações (correios)','filter'=>'operador de mensagens de telecomunicações (correios)',]);

        CompanyOccupation::create(['code'=>'412120','title'=>'Supervisor de digitação e operação','filter'=>'supervisor de digitação e operação',]);

        CompanyOccupation::create(['code'=>'412205','title'=>'Contínuo','filter'=>'contínuo',]);

        CompanyOccupation::create(['code'=>'413105','title'=>'Analista de folha de pagamento','filter'=>'analista de folha de pagamento',]);

        CompanyOccupation::create(['code'=>'413110','title'=>'Auxiliar de contabilidade','filter'=>'auxiliar de contabilidade',]);

        CompanyOccupation::create(['code'=>'413115','title'=>'Auxiliar de faturamento','filter'=>'auxiliar de faturamento',]);

        CompanyOccupation::create(['code'=>'413205','title'=>'Atendente de agência','filter'=>'atendente de agência',]);

        CompanyOccupation::create(['code'=>'413210','title'=>'Caixa de banco','filter'=>'caixa de banco',]);

        CompanyOccupation::create(['code'=>'413215','title'=>'Compensador de banco','filter'=>'compensador de banco',]);

        CompanyOccupation::create(['code'=>'413220','title'=>'Conferente de serviços bancários','filter'=>'conferente de serviços bancários',]);

        CompanyOccupation::create(['code'=>'413225','title'=>'Escriturário de banco','filter'=>'escriturário de banco',]);

        CompanyOccupation::create(['code'=>'413230','title'=>'Operador de cobrança bancária','filter'=>'operador de cobrança bancária',]);

        CompanyOccupation::create(['code'=>'414105','title'=>'Almoxarife','filter'=>'almoxarife',]);

        CompanyOccupation::create(['code'=>'414110','title'=>'Armazenista','filter'=>'armazenista',]);

        CompanyOccupation::create(['code'=>'414115','title'=>'Balanceiro','filter'=>'balanceiro',]);

        CompanyOccupation::create(['code'=>'414120','title'=>'Conferente mercadoria (exceto carga e descarga)','filter'=>'conferente mercadoria (exceto carga e descarga)',]);

        CompanyOccupation::create(['code'=>'414125','title'=>'Estoquista','filter'=>'estoquista',]);

        CompanyOccupation::create(['code'=>'414135','title'=>'Expedidor de mercadorias','filter'=>'expedidor de mercadorias',]);

        CompanyOccupation::create(['code'=>'414140','title'=>'Auxiliar de logistica','filter'=>'auxiliar de logistica',]);

        CompanyOccupation::create(['code'=>'414205','title'=>'Apontador de mão-de-obra','filter'=>'apontador de mão-de-obra',]);

        CompanyOccupation::create(['code'=>'414210','title'=>'Apontador de produção','filter'=>'apontador de produção',]);

        CompanyOccupation::create(['code'=>'414215','title'=>'Conferente de carga e descarga','filter'=>'conferente de carga e descarga',]);

        CompanyOccupation::create(['code'=>'415105','title'=>'Arquivista de documentos','filter'=>'arquivista de documentos',]);

        CompanyOccupation::create(['code'=>'415115','title'=>'Codificador de dados','filter'=>'codificador de dados',]);

        CompanyOccupation::create(['code'=>'415120','title'=>'Fitotecário','filter'=>'fitotecário',]);

        CompanyOccupation::create(['code'=>'415125','title'=>'Kardexista','filter'=>'kardexista',]);

        CompanyOccupation::create(['code'=>'415130','title'=>'Operador de máquina copiadora (exceto operador de gráfica rápida)','filter'=>'operador de máquina copiadora (exceto operador de gráfica rápida)',]);

        CompanyOccupation::create(['code'=>'415205','title'=>'Carteiro','filter'=>'carteiro',]);

        CompanyOccupation::create(['code'=>'415210','title'=>'Operador de triagem e transbordo','filter'=>'operador de triagem e transbordo',]);

        CompanyOccupation::create(['code'=>'415215','title'=>'Entregador de publicações','filter'=>'entregador de publicações',]);

        CompanyOccupation::create(['code'=>'415305','title'=>'Registrador de câncer','filter'=>'registrador de câncer',]);

        CompanyOccupation::create(['code'=>'415310','title'=>'Analista de informação em saúde','filter'=>'analista de informação em saúde',]);

        CompanyOccupation::create(['code'=>'420105','title'=>'Supervisor de caixas e bilheteiros (exceto caixa de banco)','filter'=>'supervisor de caixas e bilheteiros (exceto caixa de banco)',]);

        CompanyOccupation::create(['code'=>'420110','title'=>'Supervisor de cobrança','filter'=>'supervisor de cobrança',]);

        CompanyOccupation::create(['code'=>'420115','title'=>'Supervisor de coletadores de apostas e de jogos','filter'=>'supervisor de coletadores de apostas e de jogos',]);

        CompanyOccupation::create(['code'=>'420120','title'=>'Supervisor de entrevistadores e recenseadores','filter'=>'supervisor de entrevistadores e recenseadores',]);

        CompanyOccupation::create(['code'=>'420125','title'=>'Supervisor de recepcionistas','filter'=>'supervisor de recepcionistas',]);

        CompanyOccupation::create(['code'=>'420130','title'=>'Supervisor de telefonistas','filter'=>'supervisor de telefonistas',]);

        CompanyOccupation::create(['code'=>'420135','title'=>'Supervisor de telemarketing e atendimento','filter'=>'supervisor de telemarketing e atendimento',]);

        CompanyOccupation::create(['code'=>'421105','title'=>'Atendente comercial (agência postal)','filter'=>'atendente comercial (agência postal)',]);

        CompanyOccupation::create(['code'=>'421110','title'=>'Bilheteiro de transportes coletivos','filter'=>'bilheteiro de transportes coletivos',]);

        CompanyOccupation::create(['code'=>'421115','title'=>'Bilheteiro no serviço de diversões','filter'=>'bilheteiro no serviço de diversões',]);

        CompanyOccupation::create(['code'=>'421120','title'=>'Emissor de passagens','filter'=>'emissor de passagens',]);

        CompanyOccupation::create(['code'=>'421125','title'=>'Operador de caixa','filter'=>'operador de caixa',]);

        CompanyOccupation::create(['code'=>'421205','title'=>'Recebedor de apostas (loteria)','filter'=>'recebedor de apostas (loteria)',]);

        CompanyOccupation::create(['code'=>'421210','title'=>'Recebedor de apostas (turfe)','filter'=>'recebedor de apostas (turfe)',]);

        CompanyOccupation::create(['code'=>'421305','title'=>'Cobrador externo','filter'=>'cobrador externo',]);

        CompanyOccupation::create(['code'=>'421310','title'=>'Cobrador interno','filter'=>'cobrador interno',]);

        CompanyOccupation::create(['code'=>'421315','title'=>'Localizador (cobrador)','filter'=>'localizador (cobrador)',]);

        CompanyOccupation::create(['code'=>'422105','title'=>'Recepcionista, em geral','filter'=>'recepcionista, em geral',]);

        CompanyOccupation::create(['code'=>'422110','title'=>'Recepcionista de consultório médico ou dentário','filter'=>'recepcionista de consultório médico ou dentário',]);

        CompanyOccupation::create(['code'=>'422115','title'=>'Recepcionista de seguro saúde','filter'=>'recepcionista de seguro saúde',]);

        CompanyOccupation::create(['code'=>'422120','title'=>'Recepcionista de hotel','filter'=>'recepcionista de hotel',]);

        CompanyOccupation::create(['code'=>'422125','title'=>'Recepcionista de banco','filter'=>'recepcionista de banco',]);

        CompanyOccupation::create(['code'=>'422130','title'=>'Concierge','filter'=>'concierge',]);

        CompanyOccupation::create(['code'=>'422205','title'=>'Telefonista','filter'=>'telefonista',]);

        CompanyOccupation::create(['code'=>'422210','title'=>'Teleoperador','filter'=>'teleoperador',]);

        CompanyOccupation::create(['code'=>'422220','title'=>'Operador de rádio-chamada','filter'=>'operador de rádio-chamada',]);

        CompanyOccupation::create(['code'=>'422305','title'=>'Operador de telemarketing ativo','filter'=>'operador de telemarketing ativo',]);

        CompanyOccupation::create(['code'=>'422310','title'=>'Operador de telemarketing ativo e receptivo','filter'=>'operador de telemarketing ativo e receptivo',]);

        CompanyOccupation::create(['code'=>'422315','title'=>'Operador de telemarketing receptivo','filter'=>'operador de telemarketing receptivo',]);

        CompanyOccupation::create(['code'=>'422320','title'=>'Operador de telemarketing técnico','filter'=>'operador de telemarketing técnico',]);

        CompanyOccupation::create(['code'=>'422330','title'=>'Teleatendente de emergência','filter'=>'teleatendente de emergência',]);

        CompanyOccupation::create(['code'=>'422335','title'=>'Monitor de teleatendimento','filter'=>'monitor de teleatendimento',]);

        CompanyOccupation::create(['code'=>'423105','title'=>'Despachante documentalista','filter'=>'despachante documentalista',]);

        CompanyOccupation::create(['code'=>'423110','title'=>'Despachante de trânsito','filter'=>'despachante de trânsito',]);

        CompanyOccupation::create(['code'=>'423115','title'=>'Vistoriador veicular','filter'=>'vistoriador veicular',]);

        CompanyOccupation::create(['code'=>'424105','title'=>'Entrevistador censitário e de pesquisas amostrais','filter'=>'entrevistador censitário e de pesquisas amostrais',]);

        CompanyOccupation::create(['code'=>'424110','title'=>'Entrevistador de pesquisa de opinião e mídia','filter'=>'entrevistador de pesquisa de opinião e mídia',]);

        CompanyOccupation::create(['code'=>'424115','title'=>'Entrevistador de pesquisas de mercado','filter'=>'entrevistador de pesquisas de mercado',]);

        CompanyOccupation::create(['code'=>'424120','title'=>'Entrevistador de preços','filter'=>'entrevistador de preços',]);

        CompanyOccupation::create(['code'=>'424125','title'=>'Escriturário em estatística','filter'=>'escriturário em estatística',]);

        CompanyOccupation::create(['code'=>'424130','title'=>'Entrevistador social','filter'=>'entrevistador social',]);

        CompanyOccupation::create(['code'=>'424205','title'=>'Coordenador de provas (concurso, avaliação, exame)','filter'=>'coordenador de provas (concurso, avaliação, exame)',]);

        CompanyOccupation::create(['code'=>'424210','title'=>'Aplicador de provas (concurso, avaliação,exame)','filter'=>'aplicador de provas (concurso, avaliação,exame)',]);

        CompanyOccupation::create(['code'=>'510105','title'=>'Supervisor de transportes','filter'=>'supervisor de transportes',]);

        CompanyOccupation::create(['code'=>'510110','title'=>'Administrador de edifícios','filter'=>'administrador de edifícios',]);

        CompanyOccupation::create(['code'=>'510115','title'=>'Supervisor de andar','filter'=>'supervisor de andar',]);

        CompanyOccupation::create(['code'=>'510120','title'=>'Chefe de portaria de hotel','filter'=>'chefe de portaria de hotel',]);

        CompanyOccupation::create(['code'=>'510130','title'=>'Chefe de bar','filter'=>'chefe de bar',]);

        CompanyOccupation::create(['code'=>'510135','title'=>'Maître','filter'=>'maître',]);

        CompanyOccupation::create(['code'=>'510205','title'=>'Supervisor de lavanderia','filter'=>'supervisor de lavanderia',]);

        CompanyOccupation::create(['code'=>'510305','title'=>'Supervisor de bombeiros','filter'=>'supervisor de bombeiros',]);

        CompanyOccupation::create(['code'=>'510310','title'=>'Supervisor de vigilantes','filter'=>'supervisor de vigilantes',]);

        CompanyOccupation::create(['code'=>'511105','title'=>'Comissário de vôo','filter'=>'comissário de vôo',]);

        CompanyOccupation::create(['code'=>'511110','title'=>'Comissário de trem','filter'=>'comissário de trem',]);

        CompanyOccupation::create(['code'=>'511115','title'=>'Taifeiro (exceto militares)','filter'=>'taifeiro (exceto militares)',]);

        CompanyOccupation::create(['code'=>'511205','title'=>'Fiscal de transportes coletivos (exceto trem)','filter'=>'fiscal de transportes coletivos (exceto trem)',]);

        CompanyOccupation::create(['code'=>'511210','title'=>'Despachante de transportes coletivos (exceto trem)','filter'=>'despachante de transportes coletivos (exceto trem)',]);

        CompanyOccupation::create(['code'=>'511215','title'=>'Cobrador de transportes coletivos (exceto trem)','filter'=>'cobrador de transportes coletivos (exceto trem)',]);

        CompanyOccupation::create(['code'=>'511220','title'=>'Bilheteiro (estações de metrô, ferroviárias e assemelhadas)','filter'=>'bilheteiro (estações de metrô, ferroviárias e assemelhadas)',]);

        CompanyOccupation::create(['code'=>'511405','title'=>'Guia de turismo','filter'=>'guia de turismo',]);

        CompanyOccupation::create(['code'=>'511505','title'=>'Condutor de turismo de aventura','filter'=>'condutor de turismo de aventura',]);

        CompanyOccupation::create(['code'=>'511510','title'=>'Condutor de turismo de pesca','filter'=>'condutor de turismo de pesca',]);

        CompanyOccupation::create(['code'=>'511515','title'=>'Condutor turismo náutico','filter'=>'condutor turismo náutico',]);

        CompanyOccupation::create(['code'=>'512105','title'=>'Empregado doméstico nos serviços gerais','filter'=>'empregado doméstico nos serviços gerais',]);

        CompanyOccupation::create(['code'=>'512110','title'=>'Empregado doméstico arrumador','filter'=>'empregado doméstico arrumador',]);

        CompanyOccupation::create(['code'=>'512115','title'=>'Empregado doméstico faxineiro','filter'=>'empregado doméstico faxineiro',]);

        CompanyOccupation::create(['code'=>'512120','title'=>'Empregado doméstico diarista','filter'=>'empregado doméstico diarista',]);

        CompanyOccupation::create(['code'=>'513105','title'=>'Mordomo de residência','filter'=>'mordomo de residência',]);

        CompanyOccupation::create(['code'=>'513110','title'=>'Mordomo de hotelaria','filter'=>'mordomo de hotelaria',]);

        CompanyOccupation::create(['code'=>'513115','title'=>'Governanta de hotelaria','filter'=>'governanta de hotelaria',]);

        CompanyOccupation::create(['code'=>'513205','title'=>'Cozinheiro geral','filter'=>'cozinheiro geral',]);

        CompanyOccupation::create(['code'=>'513210','title'=>'Cozinheiro do serviço doméstico','filter'=>'cozinheiro do serviço doméstico',]);

        CompanyOccupation::create(['code'=>'513215','title'=>'Cozinheiro industrial','filter'=>'cozinheiro industrial',]);

        CompanyOccupation::create(['code'=>'513220','title'=>'Cozinheiro de hospital','filter'=>'cozinheiro de hospital',]);

        CompanyOccupation::create(['code'=>'513225','title'=>'Cozinheiro de embarcações','filter'=>'cozinheiro de embarcações',]);

        CompanyOccupation::create(['code'=>'513305','title'=>'Camareiro de teatro','filter'=>'camareiro de teatro',]);

        CompanyOccupation::create(['code'=>'513310','title'=>'Camareiro de televisão','filter'=>'camareiro de televisão',]);

        CompanyOccupation::create(['code'=>'513315','title'=>'Camareiro de hotel','filter'=>'camareiro de hotel',]);

        CompanyOccupation::create(['code'=>'513320','title'=>'Camareiro de embarcações','filter'=>'camareiro de embarcações',]);

        CompanyOccupation::create(['code'=>'513325','title'=>'Guarda-roupeiro de cinema','filter'=>'guarda-roupeiro de cinema',]);

        CompanyOccupation::create(['code'=>'513405','title'=>'Garçom','filter'=>'garçom',]);

        CompanyOccupation::create(['code'=>'513410','title'=>'Sommelier','filter'=>'sommelier',]);

        CompanyOccupation::create(['code'=>'513415','title'=>'Cumim','filter'=>'cumim',]);

        CompanyOccupation::create(['code'=>'513420','title'=>'Barman','filter'=>'barman',]);

        CompanyOccupation::create(['code'=>'513425','title'=>'Copeiro','filter'=>'copeiro',]);

        CompanyOccupation::create(['code'=>'513430','title'=>'Copeiro de hospital','filter'=>'copeiro de hospital',]);

        CompanyOccupation::create(['code'=>'513435','title'=>'Atendente de lanchonete','filter'=>'atendente de lanchonete',]);

        CompanyOccupation::create(['code'=>'513440','title'=>'Barista','filter'=>'barista',]);

        CompanyOccupation::create(['code'=>'513505','title'=>'Auxiliar nos serviços de alimentação','filter'=>'auxiliar nos serviços de alimentação',]);

        CompanyOccupation::create(['code'=>'513605','title'=>'Churrasqueiro','filter'=>'churrasqueiro',]);

        CompanyOccupation::create(['code'=>'513610','title'=>'Pizzaiolo','filter'=>'pizzaiolo',]);

        CompanyOccupation::create(['code'=>'513615','title'=>'Sushiman','filter'=>'sushiman',]);

        CompanyOccupation::create(['code'=>'514105','title'=>'Ascensorista','filter'=>'ascensorista',]);

        CompanyOccupation::create(['code'=>'514110','title'=>'Garagista','filter'=>'garagista',]);

        CompanyOccupation::create(['code'=>'514115','title'=>'Sacristão','filter'=>'sacristão',]);

        CompanyOccupation::create(['code'=>'514120','title'=>'Zelador de edifício','filter'=>'zelador de edifício',]);

        CompanyOccupation::create(['code'=>'514205','title'=>'Coletor de lixo domiciliar','filter'=>'coletor de lixo domiciliar',]);

        CompanyOccupation::create(['code'=>'514215','title'=>'Varredor de rua','filter'=>'varredor de rua',]);

        CompanyOccupation::create(['code'=>'514225','title'=>'Trabalhador de serviços de limpeza e conservação de áreas públicas','filter'=>'trabalhador de serviços de limpeza e conservação de áreas públicas',]);

        CompanyOccupation::create(['code'=>'514230','title'=>'Coletor de resíduos sólidos de serviços de saúde','filter'=>'coletor de resíduos sólidos de serviços de saúde',]);

        CompanyOccupation::create(['code'=>'514305','title'=>'Limpador de vidros','filter'=>'limpador de vidros',]);

        CompanyOccupation::create(['code'=>'514310','title'=>'Auxiliar de manutenção predial','filter'=>'auxiliar de manutenção predial',]);

        CompanyOccupation::create(['code'=>'514315','title'=>'Limpador de fachadas','filter'=>'limpador de fachadas',]);

        CompanyOccupation::create(['code'=>'514320','title'=>'Faxineiro','filter'=>'faxineiro',]);

        CompanyOccupation::create(['code'=>'514325','title'=>'Trabalhador da manutenção de edificações','filter'=>'trabalhador da manutenção de edificações',]);

        CompanyOccupation::create(['code'=>'514330','title'=>'Limpador de piscinas','filter'=>'limpador de piscinas',]);

        CompanyOccupation::create(['code'=>'515105','title'=>'Agente comunitário de saúde','filter'=>'agente comunitário de saúde',]);

        CompanyOccupation::create(['code'=>'515110','title'=>'Atendente de enfermagem','filter'=>'atendente de enfermagem',]);

        CompanyOccupation::create(['code'=>'515115','title'=>'Parteira leiga','filter'=>'parteira leiga',]);

        CompanyOccupation::create(['code'=>'515120','title'=>'Visitador sanitário','filter'=>'visitador sanitário',]);

        CompanyOccupation::create(['code'=>'515125','title'=>'Agente indígena de saúde','filter'=>'agente indígena de saúde',]);

        CompanyOccupation::create(['code'=>'515130','title'=>'Agente indígena de saneamento','filter'=>'agente indígena de saneamento',]);

        CompanyOccupation::create(['code'=>'515135','title'=>'Socorrista (exceto médicos e enfermeiros)','filter'=>'socorrista (exceto médicos e enfermeiros)',]);

        CompanyOccupation::create(['code'=>'515140','title'=>'Agente de combate às endemias','filter'=>'agente de combate às endemias',]);

        CompanyOccupation::create(['code'=>'515205','title'=>'Auxiliar de banco de sangue','filter'=>'auxiliar de banco de sangue',]);

        CompanyOccupation::create(['code'=>'515210','title'=>'Auxiliar de farmácia de manipulação','filter'=>'auxiliar de farmácia de manipulação',]);

        CompanyOccupation::create(['code'=>'515215','title'=>'Auxiliar de laboratório de análises clínicas','filter'=>'auxiliar de laboratório de análises clínicas',]);

        CompanyOccupation::create(['code'=>'515220','title'=>'Auxiliar de laboratório de imunobiológicos','filter'=>'auxiliar de laboratório de imunobiológicos',]);

        CompanyOccupation::create(['code'=>'515225','title'=>'Auxiliar de produção farmacêutica','filter'=>'auxiliar de produção farmacêutica',]);

        CompanyOccupation::create(['code'=>'515305','title'=>'Educador social','filter'=>'educador social',]);

        CompanyOccupation::create(['code'=>'515310','title'=>'Agente de ação social','filter'=>'agente de ação social',]);

        CompanyOccupation::create(['code'=>'515315','title'=>'Monitor de dependente químico','filter'=>'monitor de dependente químico',]);

        CompanyOccupation::create(['code'=>'515320','title'=>'Conselheiro tutelar','filter'=>'conselheiro tutelar',]);

        CompanyOccupation::create(['code'=>'515325','title'=>'Sócioeducador','filter'=>'sócioeducador',]);

        CompanyOccupation::create(['code'=>'515330','title'=>'Monitor de ressocialização prisional','filter'=>'monitor de ressocialização prisional',]);

        CompanyOccupation::create(['code'=>'516105','title'=>'Barbeiro','filter'=>'barbeiro',]);

        CompanyOccupation::create(['code'=>'516110','title'=>'Cabeleireiro','filter'=>'cabeleireiro',]);

        CompanyOccupation::create(['code'=>'516120','title'=>'Manicure/pedicure','filter'=>'manicure/pedicure',]);

        CompanyOccupation::create(['code'=>'516125','title'=>'Maquiador','filter'=>'maquiador',]);

        CompanyOccupation::create(['code'=>'516130','title'=>'Maquiador de caracterização','filter'=>'maquiador de caracterização',]);

        CompanyOccupation::create(['code'=>'516145','title'=>'Designer de unhas','filter'=>'designer de unhas',]);

        CompanyOccupation::create(['code'=>'516150','title'=>'Designer de sobrancelhas','filter'=>'designer de sobrancelhas',]);

        CompanyOccupation::create(['code'=>'516155','title'=>'Designer de cílios','filter'=>'designer de cílios',]);

        CompanyOccupation::create(['code'=>'516205','title'=>'Babá','filter'=>'babá',]);

        CompanyOccupation::create(['code'=>'516210','title'=>'Cuidador de idosos','filter'=>'cuidador de idosos',]);

        CompanyOccupation::create(['code'=>'516215','title'=>'Mãe social','filter'=>'mãe social',]);

        CompanyOccupation::create(['code'=>'516220','title'=>'Cuidador em saúde','filter'=>'cuidador em saúde',]);

        CompanyOccupation::create(['code'=>'516305','title'=>'Lavadeiro, em geral','filter'=>'lavadeiro, em geral',]);

        CompanyOccupation::create(['code'=>'516310','title'=>'Lavador de roupas a maquina','filter'=>'lavador de roupas a maquina',]);

        CompanyOccupation::create(['code'=>'516315','title'=>'Lavador de artefatos de tapeçaria','filter'=>'lavador de artefatos de tapeçaria',]);

        CompanyOccupation::create(['code'=>'516320','title'=>'Limpador a seco, à máquina','filter'=>'limpador a seco, à máquina',]);

        CompanyOccupation::create(['code'=>'516325','title'=>'Passador de roupas em geral','filter'=>'passador de roupas em geral',]);

        CompanyOccupation::create(['code'=>'516330','title'=>'Tingidor de roupas','filter'=>'tingidor de roupas',]);

        CompanyOccupation::create(['code'=>'516335','title'=>'Conferente-expedidor de roupas (lavanderias)','filter'=>'conferente-expedidor de roupas (lavanderias)',]);

        CompanyOccupation::create(['code'=>'516340','title'=>'Atendente de lavanderia','filter'=>'atendente de lavanderia',]);

        CompanyOccupation::create(['code'=>'516345','title'=>'Auxiliar de lavanderia','filter'=>'auxiliar de lavanderia',]);

        CompanyOccupation::create(['code'=>'516405','title'=>'Lavador de roupas','filter'=>'lavador de roupas',]);

        CompanyOccupation::create(['code'=>'516410','title'=>'Limpador de roupas a seco, à mão','filter'=>'limpador de roupas a seco, à mão',]);

        CompanyOccupation::create(['code'=>'516415','title'=>'Passador de roupas, à mão','filter'=>'passador de roupas, à mão',]);

        CompanyOccupation::create(['code'=>'516505','title'=>'Agente funerário','filter'=>'agente funerário',]);

        CompanyOccupation::create(['code'=>'516605','title'=>'Operador de forno (serviços funerários)','filter'=>'operador de forno (serviços funerários)',]);

        CompanyOccupation::create(['code'=>'516610','title'=>'Sepultador','filter'=>'sepultador',]);

        CompanyOccupation::create(['code'=>'516705','title'=>'Astrólogo','filter'=>'astrólogo',]);

        CompanyOccupation::create(['code'=>'516710','title'=>'Numerólogo','filter'=>'numerólogo',]);

        CompanyOccupation::create(['code'=>'516805','title'=>'Esotérico','filter'=>'esotérico',]);

        CompanyOccupation::create(['code'=>'516810','title'=>'Paranormal','filter'=>'paranormal',]);

        CompanyOccupation::create(['code'=>'516905','title'=>'Tatuador','filter'=>'tatuador',]);

        CompanyOccupation::create(['code'=>'516910','title'=>'Micropigmentador','filter'=>'micropigmentador',]);

        CompanyOccupation::create(['code'=>'516915','title'=>'Body piercer','filter'=>'body piercer',]);

        CompanyOccupation::create(['code'=>'517105','title'=>'Bombeiro de aeródromo','filter'=>'bombeiro de aeródromo',]);

        CompanyOccupation::create(['code'=>'517110','title'=>'Bombeiro civil','filter'=>'bombeiro civil',]);

        CompanyOccupation::create(['code'=>'517115','title'=>'Salva-vidas','filter'=>'salva-vidas',]);

        CompanyOccupation::create(['code'=>'517120','title'=>'Brigadista florestal','filter'=>'brigadista florestal',]);

        CompanyOccupation::create(['code'=>'517125','title'=>'Chefe de brigada','filter'=>'chefe de brigada',]);

        CompanyOccupation::create(['code'=>'517130','title'=>'Agente de proteção e defesa civil','filter'=>'agente de proteção e defesa civil',]);

        CompanyOccupation::create(['code'=>'517205','title'=>'Agente de polícia federal','filter'=>'agente de polícia federal',]);

        CompanyOccupation::create(['code'=>'517210','title'=>'Policial rodoviário federal','filter'=>'policial rodoviário federal',]);

        CompanyOccupation::create(['code'=>'517215','title'=>'Guarda-civil municipal','filter'=>'guarda-civil municipal',]);

        CompanyOccupation::create(['code'=>'517220','title'=>'Agente de trânsito','filter'=>'agente de trânsito',]);

        CompanyOccupation::create(['code'=>'517225','title'=>'Policial legislativo','filter'=>'policial legislativo',]);

        CompanyOccupation::create(['code'=>'517230','title'=>'Policial penal','filter'=>'policial penal',]);

        CompanyOccupation::create(['code'=>'517235','title'=>'Guarda portuário','filter'=>'guarda portuário',]);

        CompanyOccupation::create(['code'=>'517305','title'=>'Vigilante de proteção de aeroporto','filter'=>'vigilante de proteção de aeroporto',]);

        CompanyOccupation::create(['code'=>'517310','title'=>'Agente de segurança','filter'=>'agente de segurança',]);

        CompanyOccupation::create(['code'=>'517320','title'=>'Vigia florestal','filter'=>'vigia florestal',]);

        CompanyOccupation::create(['code'=>'517325','title'=>'Vigia portuário','filter'=>'vigia portuário',]);

        CompanyOccupation::create(['code'=>'517330','title'=>'Vigilante','filter'=>'vigilante',]);

        CompanyOccupation::create(['code'=>'517405','title'=>'Porteiro (hotel)','filter'=>'porteiro (hotel)',]);

        CompanyOccupation::create(['code'=>'517410','title'=>'Porteiro de edifícios','filter'=>'porteiro de edifícios',]);

        CompanyOccupation::create(['code'=>'517415','title'=>'Agente de portaria','filter'=>'agente de portaria',]);

        CompanyOccupation::create(['code'=>'517420','title'=>'Vigia','filter'=>'vigia',]);

        CompanyOccupation::create(['code'=>'517425','title'=>'Fiscal de loja','filter'=>'fiscal de loja',]);

        CompanyOccupation::create(['code'=>'519105','title'=>'Ciclista mensageiro','filter'=>'ciclista mensageiro',]);

        CompanyOccupation::create(['code'=>'519110','title'=>'Motofretista','filter'=>'motofretista',]);

        CompanyOccupation::create(['code'=>'519115','title'=>'Mototaxista','filter'=>'mototaxista',]);

        CompanyOccupation::create(['code'=>'519205','title'=>'Catador de material reciclável','filter'=>'catador de material reciclável',]);

        CompanyOccupation::create(['code'=>'519210','title'=>'Selecionador de material reciclável','filter'=>'selecionador de material reciclável',]);

        CompanyOccupation::create(['code'=>'519215','title'=>'Operador de prensa de material reciclável','filter'=>'operador de prensa de material reciclável',]);

        CompanyOccupation::create(['code'=>'519305','title'=>'Auxiliar de veterinário','filter'=>'auxiliar de veterinário',]);

        CompanyOccupation::create(['code'=>'519310','title'=>'Esteticista de animais domésticos','filter'=>'esteticista de animais domésticos',]);

        CompanyOccupation::create(['code'=>'519315','title'=>'Banhista de animais domésticos','filter'=>'banhista de animais domésticos',]);

        CompanyOccupation::create(['code'=>'519320','title'=>'Tosador de animais domésticos','filter'=>'tosador de animais domésticos',]);

        CompanyOccupation::create(['code'=>'519805','title'=>'Profissional do sexo','filter'=>'profissional do sexo',]);

        CompanyOccupation::create(['code'=>'519905','title'=>'Cartazeiro','filter'=>'cartazeiro',]);

        CompanyOccupation::create(['code'=>'519910','title'=>'Controlador de pragas','filter'=>'controlador de pragas',]);

        CompanyOccupation::create(['code'=>'519915','title'=>'Engraxate','filter'=>'engraxate',]);

        CompanyOccupation::create(['code'=>'519920','title'=>'Gandula','filter'=>'gandula',]);

        CompanyOccupation::create(['code'=>'519925','title'=>'Guardador de veículos','filter'=>'guardador de veículos',]);

        CompanyOccupation::create(['code'=>'519930','title'=>'Lavador de garrafas, vidros e outros utensílios','filter'=>'lavador de garrafas, vidros e outros utensílios',]);

        CompanyOccupation::create(['code'=>'519935','title'=>'Lavador de veículos','filter'=>'lavador de veículos',]);

        CompanyOccupation::create(['code'=>'519940','title'=>'Leiturista','filter'=>'leiturista',]);

        CompanyOccupation::create(['code'=>'519945','title'=>'Recepcionista de casas de espetáculos','filter'=>'recepcionista de casas de espetáculos',]);

        CompanyOccupation::create(['code'=>'520105','title'=>'Supervisor de vendas de serviços','filter'=>'supervisor de vendas de serviços',]);

        CompanyOccupation::create(['code'=>'520110','title'=>'Supervisor de vendas comercial','filter'=>'supervisor de vendas comercial',]);

        CompanyOccupation::create(['code'=>'521105','title'=>'Vendedor em comércio atacadista','filter'=>'vendedor em comércio atacadista',]);

        CompanyOccupation::create(['code'=>'521110','title'=>'Vendedor de comércio varejista','filter'=>'vendedor de comércio varejista',]);

        CompanyOccupation::create(['code'=>'521115','title'=>'Promotor de vendas','filter'=>'promotor de vendas',]);

        CompanyOccupation::create(['code'=>'521120','title'=>'Demonstrador de mercadorias','filter'=>'demonstrador de mercadorias',]);

        CompanyOccupation::create(['code'=>'521125','title'=>'Repositor de mercadorias','filter'=>'repositor de mercadorias',]);

        CompanyOccupation::create(['code'=>'521130','title'=>'Atendente de farmácia - balconista','filter'=>'atendente de farmácia - balconista',]);

        CompanyOccupation::create(['code'=>'521135','title'=>'Frentista','filter'=>'frentista',]);

        CompanyOccupation::create(['code'=>'521140','title'=>'Atendente de lojas e mercados','filter'=>'atendente de lojas e mercados',]);

        CompanyOccupation::create(['code'=>'523105','title'=>'Instalador de cortinas e persianas, portas sanfonadas e boxe','filter'=>'instalador de cortinas e persianas, portas sanfonadas e boxe',]);

        CompanyOccupation::create(['code'=>'523110','title'=>'Instalador de som e acessórios de veículos','filter'=>'instalador de som e acessórios de veículos',]);

        CompanyOccupation::create(['code'=>'523115','title'=>'Chaveiro','filter'=>'chaveiro',]);

        CompanyOccupation::create(['code'=>'523120','title'=>'Aplicador de vinil autoadesivo','filter'=>'aplicador de vinil autoadesivo',]);

        CompanyOccupation::create(['code'=>'523125','title'=>'Estampador de placa de identificação veicular (epiv)','filter'=>'estampador de placa de identificação veicular (epiv)',]);

        CompanyOccupation::create(['code'=>'524105','title'=>'Vendedor em domicílio','filter'=>'vendedor em domicílio',]);

        CompanyOccupation::create(['code'=>'524205','title'=>'Feirante','filter'=>'feirante',]);

        CompanyOccupation::create(['code'=>'524210','title'=>'Jornaleiro (em banca de jornal)','filter'=>'jornaleiro (em banca de jornal)',]);

        CompanyOccupation::create(['code'=>'524215','title'=>'Vendedor permissionário','filter'=>'vendedor permissionário',]);

        CompanyOccupation::create(['code'=>'524305','title'=>'Vendedor ambulante','filter'=>'vendedor ambulante',]);

        CompanyOccupation::create(['code'=>'524310','title'=>'Pipoqueiro ambulante','filter'=>'pipoqueiro ambulante',]);

        CompanyOccupation::create(['code'=>'524315','title'=>'Baiana de acarajé','filter'=>'baiana de acarajé',]);

        CompanyOccupation::create(['code'=>'611005','title'=>'Produtor agropecuário, em geral','filter'=>'produtor agropecuário, em geral',]);

        CompanyOccupation::create(['code'=>'612005','title'=>'Produtor agrícola polivalente','filter'=>'produtor agrícola polivalente',]);

        CompanyOccupation::create(['code'=>'612105','title'=>'Produtor de arroz','filter'=>'produtor de arroz',]);

        CompanyOccupation::create(['code'=>'612110','title'=>'Produtor de cana-de-açúcar','filter'=>'produtor de cana-de-açúcar',]);

        CompanyOccupation::create(['code'=>'612115','title'=>'Produtor de cereais de inverno','filter'=>'produtor de cereais de inverno',]);

        CompanyOccupation::create(['code'=>'612120','title'=>'Produtor de gramíneas forrageiras','filter'=>'produtor de gramíneas forrageiras',]);

        CompanyOccupation::create(['code'=>'612125','title'=>'Produtor de milho e sorgo','filter'=>'produtor de milho e sorgo',]);

        CompanyOccupation::create(['code'=>'612205','title'=>'Produtor de algodão','filter'=>'produtor de algodão',]);

        CompanyOccupation::create(['code'=>'612210','title'=>'Produtor de curauá','filter'=>'produtor de curauá',]);

        CompanyOccupation::create(['code'=>'612215','title'=>'Produtor de juta','filter'=>'produtor de juta',]);

        CompanyOccupation::create(['code'=>'612220','title'=>'Produtor de rami','filter'=>'produtor de rami',]);

        CompanyOccupation::create(['code'=>'612225','title'=>'Produtor de sisal','filter'=>'produtor de sisal',]);

        CompanyOccupation::create(['code'=>'612305','title'=>'Produtor na olericultura de legumes','filter'=>'produtor na olericultura de legumes',]);

        CompanyOccupation::create(['code'=>'612310','title'=>'Produtor na olericultura de raízes, bulbos e tubérculos','filter'=>'produtor na olericultura de raízes, bulbos e tubérculos',]);

        CompanyOccupation::create(['code'=>'612315','title'=>'Produtor na olericultura de talos, folhas e flores','filter'=>'produtor na olericultura de talos, folhas e flores',]);

        CompanyOccupation::create(['code'=>'612320','title'=>'Produtor na olericultura de frutos e sementes','filter'=>'produtor na olericultura de frutos e sementes',]);

        CompanyOccupation::create(['code'=>'612405','title'=>'Produtor de flores de corte','filter'=>'produtor de flores de corte',]);

        CompanyOccupation::create(['code'=>'612410','title'=>'Produtor de flores em vaso','filter'=>'produtor de flores em vaso',]);

        CompanyOccupation::create(['code'=>'612415','title'=>'Produtor de forrações','filter'=>'produtor de forrações',]);

        CompanyOccupation::create(['code'=>'612420','title'=>'Produtor de plantas ornamentais','filter'=>'produtor de plantas ornamentais',]);

        CompanyOccupation::create(['code'=>'612505','title'=>'Produtor de árvores frutíferas','filter'=>'produtor de árvores frutíferas',]);

        CompanyOccupation::create(['code'=>'612510','title'=>'Produtor de espécies frutíferas rasteiras','filter'=>'produtor de espécies frutíferas rasteiras',]);

        CompanyOccupation::create(['code'=>'612515','title'=>'Produtor de espécies frutíferas trepadeiras','filter'=>'produtor de espécies frutíferas trepadeiras',]);

        CompanyOccupation::create(['code'=>'612605','title'=>'Cafeicultor','filter'=>'cafeicultor',]);

        CompanyOccupation::create(['code'=>'612610','title'=>'Produtor de cacau','filter'=>'produtor de cacau',]);

        CompanyOccupation::create(['code'=>'612615','title'=>'Produtor de erva-mate','filter'=>'produtor de erva-mate',]);

        CompanyOccupation::create(['code'=>'612620','title'=>'Produtor de fumo','filter'=>'produtor de fumo',]);

        CompanyOccupation::create(['code'=>'612625','title'=>'Produtor de guaraná','filter'=>'produtor de guaraná',]);

        CompanyOccupation::create(['code'=>'612705','title'=>'Produtor da cultura de amendoim','filter'=>'produtor da cultura de amendoim',]);

        CompanyOccupation::create(['code'=>'612710','title'=>'Produtor da cultura de canola','filter'=>'produtor da cultura de canola',]);

        CompanyOccupation::create(['code'=>'612715','title'=>'Produtor da cultura de coco-da-baia','filter'=>'produtor da cultura de coco-da-baia',]);

        CompanyOccupation::create(['code'=>'612720','title'=>'Produtor da cultura de dendê','filter'=>'produtor da cultura de dendê',]);

        CompanyOccupation::create(['code'=>'612725','title'=>'Produtor da cultura de girassol','filter'=>'produtor da cultura de girassol',]);

        CompanyOccupation::create(['code'=>'612730','title'=>'Produtor da cultura de linho','filter'=>'produtor da cultura de linho',]);

        CompanyOccupation::create(['code'=>'612735','title'=>'Produtor da cultura de mamona','filter'=>'produtor da cultura de mamona',]);

        CompanyOccupation::create(['code'=>'612740','title'=>'Produtor da cultura de soja','filter'=>'produtor da cultura de soja',]);

        CompanyOccupation::create(['code'=>'612805','title'=>'Produtor de especiarias','filter'=>'produtor de especiarias',]);

        CompanyOccupation::create(['code'=>'612810','title'=>'Produtor de plantas aromáticas e medicinais','filter'=>'produtor de plantas aromáticas e medicinais',]);

        CompanyOccupation::create(['code'=>'613005','title'=>'Criador em pecuária polivalente','filter'=>'criador em pecuária polivalente',]);

        CompanyOccupation::create(['code'=>'613010','title'=>'Criador de animais domésticos','filter'=>'criador de animais domésticos',]);

        CompanyOccupation::create(['code'=>'613105','title'=>'Criador de asininos e muares','filter'=>'criador de asininos e muares',]);

        CompanyOccupation::create(['code'=>'613110','title'=>'Criador de bovinos (corte)','filter'=>'criador de bovinos (corte)',]);

        CompanyOccupation::create(['code'=>'613115','title'=>'Criador de bovinos (leite)','filter'=>'criador de bovinos (leite)',]);

        CompanyOccupation::create(['code'=>'613120','title'=>'Criador de bubalinos (corte)','filter'=>'criador de bubalinos (corte)',]);

        CompanyOccupation::create(['code'=>'613125','title'=>'Criador de bubalinos (leite)','filter'=>'criador de bubalinos (leite)',]);

        CompanyOccupation::create(['code'=>'613130','title'=>'Criador de eqüínos','filter'=>'criador de eqüínos',]);

        CompanyOccupation::create(['code'=>'613205','title'=>'Criador de caprinos','filter'=>'criador de caprinos',]);

        CompanyOccupation::create(['code'=>'613210','title'=>'Criador de ovinos','filter'=>'criador de ovinos',]);

        CompanyOccupation::create(['code'=>'613215','title'=>'Criador de suínos','filter'=>'criador de suínos',]);

        CompanyOccupation::create(['code'=>'613305','title'=>'Avicultor','filter'=>'avicultor',]);

        CompanyOccupation::create(['code'=>'613310','title'=>'Cunicultor','filter'=>'cunicultor',]);

        CompanyOccupation::create(['code'=>'613405','title'=>'Apicultor','filter'=>'apicultor',]);

        CompanyOccupation::create(['code'=>'613410','title'=>'Criador de animais produtores de veneno','filter'=>'criador de animais produtores de veneno',]);

        CompanyOccupation::create(['code'=>'613415','title'=>'Minhocultor','filter'=>'minhocultor',]);

        CompanyOccupation::create(['code'=>'613420','title'=>'Sericultor','filter'=>'sericultor',]);

        CompanyOccupation::create(['code'=>'620105','title'=>'Supervisor de exploração agrícola','filter'=>'supervisor de exploração agrícola',]);

        CompanyOccupation::create(['code'=>'620110','title'=>'Supervisor de exploração agropecuária','filter'=>'supervisor de exploração agropecuária',]);

        CompanyOccupation::create(['code'=>'620115','title'=>'Supervisor de exploração pecuária','filter'=>'supervisor de exploração pecuária',]);

        CompanyOccupation::create(['code'=>'621005','title'=>'Trabalhador agropecuário em geral','filter'=>'trabalhador agropecuário em geral',]);

        CompanyOccupation::create(['code'=>'622005','title'=>'Caseiro (agricultura)','filter'=>'caseiro (agricultura)',]);

        CompanyOccupation::create(['code'=>'622010','title'=>'Jardineiro','filter'=>'jardineiro',]);

        CompanyOccupation::create(['code'=>'622015','title'=>'Trabalhador na produção de mudas e sementes','filter'=>'trabalhador na produção de mudas e sementes',]);

        CompanyOccupation::create(['code'=>'622020','title'=>'Trabalhador volante da agricultura','filter'=>'trabalhador volante da agricultura',]);

        CompanyOccupation::create(['code'=>'622105','title'=>'Trabalhador da cultura de arroz','filter'=>'trabalhador da cultura de arroz',]);

        CompanyOccupation::create(['code'=>'622110','title'=>'Trabalhador da cultura de cana-de-açúcar','filter'=>'trabalhador da cultura de cana-de-açúcar',]);

        CompanyOccupation::create(['code'=>'622115','title'=>'Trabalhador da cultura de milho e sorgo','filter'=>'trabalhador da cultura de milho e sorgo',]);

        CompanyOccupation::create(['code'=>'622120','title'=>'Trabalhador da cultura de trigo, aveia, cevada e triticale','filter'=>'trabalhador da cultura de trigo, aveia, cevada e triticale',]);

        CompanyOccupation::create(['code'=>'622205','title'=>'Trabalhador da cultura de algodão','filter'=>'trabalhador da cultura de algodão',]);

        CompanyOccupation::create(['code'=>'622210','title'=>'Trabalhador da cultura de sisal','filter'=>'trabalhador da cultura de sisal',]);

        CompanyOccupation::create(['code'=>'622215','title'=>'Trabalhador da cultura do rami','filter'=>'trabalhador da cultura do rami',]);

        CompanyOccupation::create(['code'=>'622305','title'=>'Trabalhador na olericultura (frutos e sementes)','filter'=>'trabalhador na olericultura (frutos e sementes)',]);

        CompanyOccupation::create(['code'=>'622310','title'=>'Trabalhador na olericultura (legumes)','filter'=>'trabalhador na olericultura (legumes)',]);

        CompanyOccupation::create(['code'=>'622315','title'=>'Trabalhador na olericultura (raízes, bulbos e tubérculos)','filter'=>'trabalhador na olericultura (raízes, bulbos e tubérculos)',]);

        CompanyOccupation::create(['code'=>'622320','title'=>'Trabalhador na olericultura (talos, folhas e flores)','filter'=>'trabalhador na olericultura (talos, folhas e flores)',]);

        CompanyOccupation::create(['code'=>'622405','title'=>'Trabalhador no cultivo de flores e folhagens de corte','filter'=>'trabalhador no cultivo de flores e folhagens de corte',]);

        CompanyOccupation::create(['code'=>'622410','title'=>'Trabalhador no cultivo de flores em vaso','filter'=>'trabalhador no cultivo de flores em vaso',]);

        CompanyOccupation::create(['code'=>'622415','title'=>'Trabalhador no cultivo de forrações','filter'=>'trabalhador no cultivo de forrações',]);

        CompanyOccupation::create(['code'=>'622420','title'=>'Trabalhador no cultivo de mudas','filter'=>'trabalhador no cultivo de mudas',]);

        CompanyOccupation::create(['code'=>'622425','title'=>'Trabalhador no cultivo de plantas ornamentais','filter'=>'trabalhador no cultivo de plantas ornamentais',]);

        CompanyOccupation::create(['code'=>'622505','title'=>'Trabalhador no cultivo de árvores frutíferas','filter'=>'trabalhador no cultivo de árvores frutíferas',]);

        CompanyOccupation::create(['code'=>'622510','title'=>'Trabalhador no cultivo de espécies frutíferas rasteiras','filter'=>'trabalhador no cultivo de espécies frutíferas rasteiras',]);

        CompanyOccupation::create(['code'=>'622515','title'=>'Trabalhador no cultivo de trepadeiras frutíferas','filter'=>'trabalhador no cultivo de trepadeiras frutíferas',]);

        CompanyOccupation::create(['code'=>'622605','title'=>'Trabalhador da cultura de cacau','filter'=>'trabalhador da cultura de cacau',]);

        CompanyOccupation::create(['code'=>'622610','title'=>'Trabalhador da cultura de café','filter'=>'trabalhador da cultura de café',]);

        CompanyOccupation::create(['code'=>'622615','title'=>'Trabalhador da cultura de erva-mate','filter'=>'trabalhador da cultura de erva-mate',]);

        CompanyOccupation::create(['code'=>'622620','title'=>'Trabalhador da cultura de fumo','filter'=>'trabalhador da cultura de fumo',]);

        CompanyOccupation::create(['code'=>'622625','title'=>'Trabalhador da cultura de guaraná','filter'=>'trabalhador da cultura de guaraná',]);

        CompanyOccupation::create(['code'=>'622705','title'=>'Trabalhador na cultura de amendoim','filter'=>'trabalhador na cultura de amendoim',]);

        CompanyOccupation::create(['code'=>'622710','title'=>'Trabalhador na cultura de canola','filter'=>'trabalhador na cultura de canola',]);

        CompanyOccupation::create(['code'=>'622715','title'=>'Trabalhador na cultura de coco-da-baía','filter'=>'trabalhador na cultura de coco-da-baía',]);

        CompanyOccupation::create(['code'=>'622720','title'=>'Trabalhador na cultura de dendê','filter'=>'trabalhador na cultura de dendê',]);

        CompanyOccupation::create(['code'=>'622725','title'=>'Trabalhador na cultura de mamona','filter'=>'trabalhador na cultura de mamona',]);

        CompanyOccupation::create(['code'=>'622730','title'=>'Trabalhador na cultura de soja','filter'=>'trabalhador na cultura de soja',]);

        CompanyOccupation::create(['code'=>'622735','title'=>'Trabalhador na cultura do girassol','filter'=>'trabalhador na cultura do girassol',]);

        CompanyOccupation::create(['code'=>'622740','title'=>'Trabalhador na cultura do linho','filter'=>'trabalhador na cultura do linho',]);

        CompanyOccupation::create(['code'=>'622805','title'=>'Trabalhador da cultura de especiarias','filter'=>'trabalhador da cultura de especiarias',]);

        CompanyOccupation::create(['code'=>'622810','title'=>'Trabalhador da cultura de plantas aromáticas e medicinais','filter'=>'trabalhador da cultura de plantas aromáticas e medicinais',]);

        CompanyOccupation::create(['code'=>'623005','title'=>'Adestrador de animais','filter'=>'adestrador de animais',]);

        CompanyOccupation::create(['code'=>'623010','title'=>'Inseminador','filter'=>'inseminador',]);

        CompanyOccupation::create(['code'=>'623015','title'=>'Trabalhador de pecuária polivalente','filter'=>'trabalhador de pecuária polivalente',]);

        CompanyOccupation::create(['code'=>'623020','title'=>'Tratador de animais','filter'=>'tratador de animais',]);

        CompanyOccupation::create(['code'=>'623025','title'=>'Casqueador de animais','filter'=>'casqueador de animais',]);

        CompanyOccupation::create(['code'=>'623030','title'=>'Ferrador de animais','filter'=>'ferrador de animais',]);

        CompanyOccupation::create(['code'=>'623105','title'=>'Trabalhador da pecuária (asininos e muares)','filter'=>'trabalhador da pecuária (asininos e muares)',]);

        CompanyOccupation::create(['code'=>'623110','title'=>'Trabalhador da pecuária (bovinos corte)','filter'=>'trabalhador da pecuária (bovinos corte)',]);

        CompanyOccupation::create(['code'=>'623115','title'=>'Trabalhador da pecuária (bovinos leite)','filter'=>'trabalhador da pecuária (bovinos leite)',]);

        CompanyOccupation::create(['code'=>'623120','title'=>'Trabalhador da pecuária (bubalinos)','filter'=>'trabalhador da pecuária (bubalinos)',]);

        CompanyOccupation::create(['code'=>'623125','title'=>'Trabalhador da pecuária (eqüinos)','filter'=>'trabalhador da pecuária (eqüinos)',]);

        CompanyOccupation::create(['code'=>'623205','title'=>'Trabalhador da caprinocultura','filter'=>'trabalhador da caprinocultura',]);

        CompanyOccupation::create(['code'=>'623210','title'=>'Trabalhador da ovinocultura','filter'=>'trabalhador da ovinocultura',]);

        CompanyOccupation::create(['code'=>'623215','title'=>'Trabalhador da suinocultura','filter'=>'trabalhador da suinocultura',]);

        CompanyOccupation::create(['code'=>'623305','title'=>'Trabalhador da avicultura de corte','filter'=>'trabalhador da avicultura de corte',]);

        CompanyOccupation::create(['code'=>'623310','title'=>'Trabalhador da avicultura de postura','filter'=>'trabalhador da avicultura de postura',]);

        CompanyOccupation::create(['code'=>'623315','title'=>'Operador de incubadora','filter'=>'operador de incubadora',]);

        CompanyOccupation::create(['code'=>'623320','title'=>'Trabalhador da cunicultura','filter'=>'trabalhador da cunicultura',]);

        CompanyOccupation::create(['code'=>'623325','title'=>'Sexador','filter'=>'sexador',]);

        CompanyOccupation::create(['code'=>'623405','title'=>'Trabalhador em criatórios de animais produtores de veneno','filter'=>'trabalhador em criatórios de animais produtores de veneno',]);

        CompanyOccupation::create(['code'=>'623410','title'=>'Trabalhador na apicultura','filter'=>'trabalhador na apicultura',]);

        CompanyOccupation::create(['code'=>'623415','title'=>'Trabalhador na minhocultura','filter'=>'trabalhador na minhocultura',]);

        CompanyOccupation::create(['code'=>'623420','title'=>'Trabalhador na sericicultura','filter'=>'trabalhador na sericicultura',]);

        CompanyOccupation::create(['code'=>'630105','title'=>'Supervisor da aqüicultura','filter'=>'supervisor da aqüicultura',]);

        CompanyOccupation::create(['code'=>'630110','title'=>'Supervisor da área florestal','filter'=>'supervisor da área florestal',]);

        CompanyOccupation::create(['code'=>'631005','title'=>'Catador de caranguejos e siris','filter'=>'catador de caranguejos e siris',]);

        CompanyOccupation::create(['code'=>'631010','title'=>'Catador de mariscos','filter'=>'catador de mariscos',]);

        CompanyOccupation::create(['code'=>'631015','title'=>'Pescador artesanal de lagostas','filter'=>'pescador artesanal de lagostas',]);

        CompanyOccupation::create(['code'=>'631020','title'=>'Pescador artesanal de peixes e camarões','filter'=>'pescador artesanal de peixes e camarões',]);

        CompanyOccupation::create(['code'=>'631105','title'=>'Pescador artesanal de água doce','filter'=>'pescador artesanal de água doce',]);

        CompanyOccupation::create(['code'=>'631205','title'=>'Pescador industrial','filter'=>'pescador industrial',]);

        CompanyOccupation::create(['code'=>'631210','title'=>'Pescador profissional','filter'=>'pescador profissional',]);

        CompanyOccupation::create(['code'=>'631305','title'=>'Criador de camarões','filter'=>'criador de camarões',]);

        CompanyOccupation::create(['code'=>'631310','title'=>'Criador de jacarés','filter'=>'criador de jacarés',]);

        CompanyOccupation::create(['code'=>'631315','title'=>'Criador de mexilhões','filter'=>'criador de mexilhões',]);

        CompanyOccupation::create(['code'=>'631320','title'=>'Criador de ostras','filter'=>'criador de ostras',]);

        CompanyOccupation::create(['code'=>'631325','title'=>'Criador de peixes','filter'=>'criador de peixes',]);

        CompanyOccupation::create(['code'=>'631330','title'=>'Criador de quelônios','filter'=>'criador de quelônios',]);

        CompanyOccupation::create(['code'=>'631335','title'=>'Criador de rãs','filter'=>'criador de rãs',]);

        CompanyOccupation::create(['code'=>'631405','title'=>'Gelador industrial','filter'=>'gelador industrial',]);

        CompanyOccupation::create(['code'=>'631410','title'=>'Gelador profissional','filter'=>'gelador profissional',]);

        CompanyOccupation::create(['code'=>'631415','title'=>'Proeiro','filter'=>'proeiro',]);

        CompanyOccupation::create(['code'=>'631420','title'=>'Redeiro (pesca)','filter'=>'redeiro (pesca)',]);

        CompanyOccupation::create(['code'=>'632005','title'=>'Guia florestal','filter'=>'guia florestal',]);

        CompanyOccupation::create(['code'=>'632010','title'=>'Raizeiro','filter'=>'raizeiro',]);

        CompanyOccupation::create(['code'=>'632015','title'=>'Viveirista florestal','filter'=>'viveirista florestal',]);

        CompanyOccupation::create(['code'=>'632105','title'=>'Classificador de toras','filter'=>'classificador de toras',]);

        CompanyOccupation::create(['code'=>'632110','title'=>'Cubador de madeira','filter'=>'cubador de madeira',]);

        CompanyOccupation::create(['code'=>'632115','title'=>'Identificador florestal','filter'=>'identificador florestal',]);

        CompanyOccupation::create(['code'=>'632120','title'=>'Operador de motosserra','filter'=>'operador de motosserra',]);

        CompanyOccupation::create(['code'=>'632125','title'=>'Trabalhador de extração florestal, em geral','filter'=>'trabalhador de extração florestal, em geral',]);

        CompanyOccupation::create(['code'=>'632205','title'=>'Seringueiro','filter'=>'seringueiro',]);

        CompanyOccupation::create(['code'=>'632210','title'=>'Trabalhador da exploração de espécies produtoras de gomas não elásticas','filter'=>'trabalhador da exploração de espécies produtoras de gomas não elásticas',]);

        CompanyOccupation::create(['code'=>'632215','title'=>'Trabalhador da exploração de resinas','filter'=>'trabalhador da exploração de resinas',]);

        CompanyOccupation::create(['code'=>'632305','title'=>'Trabalhador da exploração de andiroba','filter'=>'trabalhador da exploração de andiroba',]);

        CompanyOccupation::create(['code'=>'632310','title'=>'Trabalhador da exploração de babaçu','filter'=>'trabalhador da exploração de babaçu',]);

        CompanyOccupation::create(['code'=>'632315','title'=>'Trabalhador da exploração de bacaba','filter'=>'trabalhador da exploração de bacaba',]);

        CompanyOccupation::create(['code'=>'632320','title'=>'Trabalhador da exploração de buriti','filter'=>'trabalhador da exploração de buriti',]);

        CompanyOccupation::create(['code'=>'632325','title'=>'Trabalhador da exploração de carnaúba','filter'=>'trabalhador da exploração de carnaúba',]);

        CompanyOccupation::create(['code'=>'632330','title'=>'Trabalhador da exploração de coco-da-praia','filter'=>'trabalhador da exploração de coco-da-praia',]);

        CompanyOccupation::create(['code'=>'632335','title'=>'Trabalhador da exploração de copaíba','filter'=>'trabalhador da exploração de copaíba',]);

        CompanyOccupation::create(['code'=>'632340','title'=>'Trabalhador da exploração de malva (pãina)','filter'=>'trabalhador da exploração de malva (pãina)',]);

        CompanyOccupation::create(['code'=>'632345','title'=>'Trabalhador da exploração de murumuru','filter'=>'trabalhador da exploração de murumuru',]);

        CompanyOccupation::create(['code'=>'632350','title'=>'Trabalhador da exploração de oiticica','filter'=>'trabalhador da exploração de oiticica',]);

        CompanyOccupation::create(['code'=>'632355','title'=>'Trabalhador da exploração de ouricuri','filter'=>'trabalhador da exploração de ouricuri',]);

        CompanyOccupation::create(['code'=>'632360','title'=>'Trabalhador da exploração de pequi','filter'=>'trabalhador da exploração de pequi',]);

        CompanyOccupation::create(['code'=>'632365','title'=>'Trabalhador da exploração de piaçava','filter'=>'trabalhador da exploração de piaçava',]);

        CompanyOccupation::create(['code'=>'632370','title'=>'Trabalhador da exploração de tucum','filter'=>'trabalhador da exploração de tucum',]);

        CompanyOccupation::create(['code'=>'632405','title'=>'Trabalhador da exploração de açaí','filter'=>'trabalhador da exploração de açaí',]);

        CompanyOccupation::create(['code'=>'632410','title'=>'Trabalhador da exploração de castanha','filter'=>'trabalhador da exploração de castanha',]);

        CompanyOccupation::create(['code'=>'632415','title'=>'Trabalhador da exploração de pinhão','filter'=>'trabalhador da exploração de pinhão',]);

        CompanyOccupation::create(['code'=>'632420','title'=>'Trabalhador da exploração de pupunha','filter'=>'trabalhador da exploração de pupunha',]);

        CompanyOccupation::create(['code'=>'632505','title'=>'Trabalhador da exploração de árvores e arbustos produtores de substâncias aromát., Medic. E tóxicas','filter'=>'trabalhador da exploração de árvores e arbustos produtores de substâncias aromát., medic. e tóxicas',]);

        CompanyOccupation::create(['code'=>'632510','title'=>'Trabalhador da exploração de cipós produtores de substâncias aromáticas, medicinais e tóxicas','filter'=>'trabalhador da exploração de cipós produtores de substâncias aromáticas, medicinais e tóxicas',]);

        CompanyOccupation::create(['code'=>'632515','title'=>'Trabalhador da exploração de madeiras tanantes','filter'=>'trabalhador da exploração de madeiras tanantes',]);

        CompanyOccupation::create(['code'=>'632520','title'=>'Trabalhador da exploração de raízes produtoras de substâncias aromáticas, medicinais e tóxicas','filter'=>'trabalhador da exploração de raízes produtoras de substâncias aromáticas, medicinais e tóxicas',]);

        CompanyOccupation::create(['code'=>'632525','title'=>'Trabalhador da extração de substâncias aromáticas, medicinais e tóxicas, em geral','filter'=>'trabalhador da extração de substâncias aromáticas, medicinais e tóxicas, em geral',]);

        CompanyOccupation::create(['code'=>'632605','title'=>'Carvoeiro','filter'=>'carvoeiro',]);

        CompanyOccupation::create(['code'=>'632610','title'=>'Carbonizador','filter'=>'carbonizador',]);

        CompanyOccupation::create(['code'=>'632615','title'=>'Ajudante de carvoaria','filter'=>'ajudante de carvoaria',]);

        CompanyOccupation::create(['code'=>'641005','title'=>'Operador de colheitadeira','filter'=>'operador de colheitadeira',]);

        CompanyOccupation::create(['code'=>'641010','title'=>'Operador de máquinas de beneficiamento de produtos agrícolas','filter'=>'operador de máquinas de beneficiamento de produtos agrícolas',]);

        CompanyOccupation::create(['code'=>'641015','title'=>'Tratorista agrícola','filter'=>'tratorista agrícola',]);

        CompanyOccupation::create(['code'=>'642005','title'=>'Operador de colhedor florestal','filter'=>'operador de colhedor florestal',]);

        CompanyOccupation::create(['code'=>'642010','title'=>'Operador de máquinas florestais estáticas','filter'=>'operador de máquinas florestais estáticas',]);

        CompanyOccupation::create(['code'=>'642015','title'=>'Operador de trator florestal','filter'=>'operador de trator florestal',]);

        CompanyOccupation::create(['code'=>'643005','title'=>'Trabalhador na operação de sistema de irrigação localizada (microaspersão e gotejamento)','filter'=>'trabalhador na operação de sistema de irrigação localizada (microaspersão e gotejamento)',]);

        CompanyOccupation::create(['code'=>'643010','title'=>'Trabalhador na operação de sistema de irrigação por aspersão (pivô central)','filter'=>'trabalhador na operação de sistema de irrigação por aspersão (pivô central)',]);

        CompanyOccupation::create(['code'=>'643015','title'=>'Trabalhador na operação de sistemas convencionais de irrigação por aspersão','filter'=>'trabalhador na operação de sistemas convencionais de irrigação por aspersão',]);

        CompanyOccupation::create(['code'=>'643020','title'=>'Trabalhador na operação de sistemas de irrigação e aspersão (alto propelido)','filter'=>'trabalhador na operação de sistemas de irrigação e aspersão (alto propelido)',]);

        CompanyOccupation::create(['code'=>'643025','title'=>'Trabalhador na operação de sistemas de irrigação por superfície e drenagem','filter'=>'trabalhador na operação de sistemas de irrigação por superfície e drenagem',]);

        CompanyOccupation::create(['code'=>'710105','title'=>'Supervisor de apoio operacional na mineração','filter'=>'supervisor de apoio operacional na mineração',]);

        CompanyOccupation::create(['code'=>'710110','title'=>'Supervisor de extração de sal','filter'=>'supervisor de extração de sal',]);

        CompanyOccupation::create(['code'=>'710115','title'=>'Supervisor de perfuração e desmonte','filter'=>'supervisor de perfuração e desmonte',]);

        CompanyOccupation::create(['code'=>'710120','title'=>'Supervisor de produção na mineração','filter'=>'supervisor de produção na mineração',]);

        CompanyOccupation::create(['code'=>'710125','title'=>'Supervisor de transporte na mineração','filter'=>'supervisor de transporte na mineração',]);

        CompanyOccupation::create(['code'=>'710205','title'=>'Mestre (construção civil)','filter'=>'mestre (construção civil)',]);

        CompanyOccupation::create(['code'=>'710210','title'=>'Mestre de linhas (ferrovias)','filter'=>'mestre de linhas (ferrovias)',]);

        CompanyOccupation::create(['code'=>'710215','title'=>'Inspetor de terraplenagem','filter'=>'inspetor de terraplenagem',]);

        CompanyOccupation::create(['code'=>'710220','title'=>'Supervisor de usina de concreto','filter'=>'supervisor de usina de concreto',]);

        CompanyOccupation::create(['code'=>'710225','title'=>'Fiscal de pátio de usina de concreto','filter'=>'fiscal de pátio de usina de concreto',]);

        CompanyOccupation::create(['code'=>'711105','title'=>'Amostrador de minérios','filter'=>'amostrador de minérios',]);

        CompanyOccupation::create(['code'=>'711110','title'=>'Canteiro','filter'=>'canteiro',]);

        CompanyOccupation::create(['code'=>'711115','title'=>'Destroçador de pedra','filter'=>'destroçador de pedra',]);

        CompanyOccupation::create(['code'=>'711120','title'=>'Detonador','filter'=>'detonador',]);

        CompanyOccupation::create(['code'=>'711125','title'=>'Escorador de minas','filter'=>'escorador de minas',]);

        CompanyOccupation::create(['code'=>'711130','title'=>'Mineiro','filter'=>'mineiro',]);

        CompanyOccupation::create(['code'=>'711205','title'=>'Operador de caminhão (minas e pedreiras)','filter'=>'operador de caminhão (minas e pedreiras)',]);

        CompanyOccupation::create(['code'=>'711210','title'=>'Operador de carregadeira','filter'=>'operador de carregadeira',]);

        CompanyOccupation::create(['code'=>'711215','title'=>'Operador de máquina cortadora (minas e pedreiras)','filter'=>'operador de máquina cortadora (minas e pedreiras)',]);

        CompanyOccupation::create(['code'=>'711220','title'=>'Operador de máquina de extração contínua (minas de carvão)','filter'=>'operador de máquina de extração contínua (minas de carvão)',]);

        CompanyOccupation::create(['code'=>'711225','title'=>'Operador de máquina perfuradora (minas e pedreiras)','filter'=>'operador de máquina perfuradora (minas e pedreiras)',]);

        CompanyOccupation::create(['code'=>'711230','title'=>'Operador de máquina perfuratriz','filter'=>'operador de máquina perfuratriz',]);

        CompanyOccupation::create(['code'=>'711235','title'=>'Operador de motoniveladora (extração de minerais sólidos)','filter'=>'operador de motoniveladora (extração de minerais sólidos)',]);

        CompanyOccupation::create(['code'=>'711240','title'=>'Operador de schutthecar','filter'=>'operador de schutthecar',]);

        CompanyOccupation::create(['code'=>'711245','title'=>'Operador de trator (minas e pedreiras)','filter'=>'operador de trator (minas e pedreiras)',]);

        CompanyOccupation::create(['code'=>'711305','title'=>'Operador de sonda de percussão','filter'=>'operador de sonda de percussão',]);

        CompanyOccupation::create(['code'=>'711310','title'=>'Operador de sonda rotativa','filter'=>'operador de sonda rotativa',]);

        CompanyOccupation::create(['code'=>'711315','title'=>'Sondador (poços de petróleo e gás)','filter'=>'sondador (poços de petróleo e gás)',]);

        CompanyOccupation::create(['code'=>'711320','title'=>'Sondador de poços (exceto de petróleo e gás)','filter'=>'sondador de poços (exceto de petróleo e gás)',]);

        CompanyOccupation::create(['code'=>'711325','title'=>'Plataformista (petróleo)','filter'=>'plataformista (petróleo)',]);

        CompanyOccupation::create(['code'=>'711330','title'=>'Torrista (petróleo)','filter'=>'torrista (petróleo)',]);

        CompanyOccupation::create(['code'=>'711405','title'=>'Garimpeiro','filter'=>'garimpeiro',]);

        CompanyOccupation::create(['code'=>'711410','title'=>'Operador de salina (sal marinho)','filter'=>'operador de salina (sal marinho)',]);

        CompanyOccupation::create(['code'=>'712105','title'=>'Moleiro de minérios','filter'=>'moleiro de minérios',]);

        CompanyOccupation::create(['code'=>'712110','title'=>'Operador de aparelho de flotação','filter'=>'operador de aparelho de flotação',]);

        CompanyOccupation::create(['code'=>'712115','title'=>'Operador de aparelho de precipitação (minas de ouro ou prata)','filter'=>'operador de aparelho de precipitação (minas de ouro ou prata)',]);

        CompanyOccupation::create(['code'=>'712120','title'=>'Operador de britador de mandíbulas','filter'=>'operador de britador de mandíbulas',]);

        CompanyOccupation::create(['code'=>'712125','title'=>'Operador de espessador','filter'=>'operador de espessador',]);

        CompanyOccupation::create(['code'=>'712130','title'=>'Operador de jig (minas)','filter'=>'operador de jig (minas)',]);

        CompanyOccupation::create(['code'=>'712135','title'=>'Operador de peneiras hidráulicas','filter'=>'operador de peneiras hidráulicas',]);

        CompanyOccupation::create(['code'=>'712205','title'=>'Cortador de pedras','filter'=>'cortador de pedras',]);

        CompanyOccupation::create(['code'=>'712210','title'=>'Gravador de inscrições em pedra','filter'=>'gravador de inscrições em pedra',]);

        CompanyOccupation::create(['code'=>'712215','title'=>'Gravador de relevos em pedra','filter'=>'gravador de relevos em pedra',]);

        CompanyOccupation::create(['code'=>'712220','title'=>'Polidor de pedras','filter'=>'polidor de pedras',]);

        CompanyOccupation::create(['code'=>'712225','title'=>'Torneiro (lavra de pedra)','filter'=>'torneiro (lavra de pedra)',]);

        CompanyOccupation::create(['code'=>'712230','title'=>'Traçador de pedras','filter'=>'traçador de pedras',]);

        CompanyOccupation::create(['code'=>'715105','title'=>'Operador de bate-estacas','filter'=>'operador de bate-estacas',]);

        CompanyOccupation::create(['code'=>'715110','title'=>'Operador de compactadora de solos','filter'=>'operador de compactadora de solos',]);

        CompanyOccupation::create(['code'=>'715115','title'=>'Operador de escavadeira','filter'=>'operador de escavadeira',]);

        CompanyOccupation::create(['code'=>'715120','title'=>'Operador de máquina de abrir valas','filter'=>'operador de máquina de abrir valas',]);

        CompanyOccupation::create(['code'=>'715125','title'=>'Operador de máquinas de construção civil e mineração','filter'=>'operador de máquinas de construção civil e mineração',]);

        CompanyOccupation::create(['code'=>'715130','title'=>'Operador de motoniveladora','filter'=>'operador de motoniveladora',]);

        CompanyOccupation::create(['code'=>'715135','title'=>'Operador de pá carregadeira','filter'=>'operador de pá carregadeira',]);

        CompanyOccupation::create(['code'=>'715140','title'=>'Operador de pavimentadora (asfalto, concreto e materiais similares)','filter'=>'operador de pavimentadora (asfalto, concreto e materiais similares)',]);

        CompanyOccupation::create(['code'=>'715145','title'=>'Operador de trator de lâmina','filter'=>'operador de trator de lâmina',]);

        CompanyOccupation::create(['code'=>'715205','title'=>'Calceteiro','filter'=>'calceteiro',]);

        CompanyOccupation::create(['code'=>'715210','title'=>'Pedreiro','filter'=>'pedreiro',]);

        CompanyOccupation::create(['code'=>'715215','title'=>'Pedreiro (chaminés industriais)','filter'=>'pedreiro (chaminés industriais)',]);

        CompanyOccupation::create(['code'=>'715220','title'=>'Pedreiro (material refratário)','filter'=>'pedreiro (material refratário)',]);

        CompanyOccupation::create(['code'=>'715225','title'=>'Pedreiro (mineração)','filter'=>'pedreiro (mineração)',]);

        CompanyOccupation::create(['code'=>'715230','title'=>'Pedreiro de edificações','filter'=>'pedreiro de edificações',]);

        CompanyOccupation::create(['code'=>'715305','title'=>'Armador de estrutura de concreto','filter'=>'armador de estrutura de concreto',]);

        CompanyOccupation::create(['code'=>'715310','title'=>'Moldador de corpos de prova em usinas de concreto','filter'=>'moldador de corpos de prova em usinas de concreto',]);

        CompanyOccupation::create(['code'=>'715315','title'=>'Armador de estrutura de concreto armado','filter'=>'armador de estrutura de concreto armado',]);

        CompanyOccupation::create(['code'=>'715405','title'=>'Operador de betoneira','filter'=>'operador de betoneira',]);

        CompanyOccupation::create(['code'=>'715410','title'=>'Operador de bomba de concreto','filter'=>'operador de bomba de concreto',]);

        CompanyOccupation::create(['code'=>'715415','title'=>'Operador de central de concreto','filter'=>'operador de central de concreto',]);

        CompanyOccupation::create(['code'=>'715420','title'=>'Operador de usina de asfalto','filter'=>'operador de usina de asfalto',]);

        CompanyOccupation::create(['code'=>'715505','title'=>'Carpinteiro','filter'=>'carpinteiro',]);

        CompanyOccupation::create(['code'=>'715510','title'=>'Carpinteiro (esquadrias)','filter'=>'carpinteiro (esquadrias)',]);

        CompanyOccupation::create(['code'=>'715515','title'=>'Carpinteiro (cenários)','filter'=>'carpinteiro (cenários)',]);

        CompanyOccupation::create(['code'=>'715520','title'=>'Carpinteiro (mineração)','filter'=>'carpinteiro (mineração)',]);

        CompanyOccupation::create(['code'=>'715525','title'=>'Carpinteiro de obras','filter'=>'carpinteiro de obras',]);

        CompanyOccupation::create(['code'=>'715530','title'=>'Carpinteiro (telhados)','filter'=>'carpinteiro (telhados)',]);

        CompanyOccupation::create(['code'=>'715535','title'=>'Carpinteiro de fôrmas para concreto','filter'=>'carpinteiro de fôrmas para concreto',]);

        CompanyOccupation::create(['code'=>'715540','title'=>'Carpinteiro de obras civis de arte (pontes, túneis, barragens)','filter'=>'carpinteiro de obras civis de arte (pontes, túneis, barragens)',]);

        CompanyOccupation::create(['code'=>'715545','title'=>'Montador de andaimes (edificações)','filter'=>'montador de andaimes (edificações)',]);

        CompanyOccupation::create(['code'=>'715605','title'=>'Eletricista de instalações (cenários)','filter'=>'eletricista de instalações (cenários)',]);

        CompanyOccupation::create(['code'=>'715610','title'=>'Eletricista de instalações (edifícios)','filter'=>'eletricista de instalações (edifícios)',]);

        CompanyOccupation::create(['code'=>'715615','title'=>'Eletricista de instalações','filter'=>'eletricista de instalações',]);

        CompanyOccupation::create(['code'=>'715705','title'=>'Aplicador de asfalto impermeabilizante (coberturas)','filter'=>'aplicador de asfalto impermeabilizante (coberturas)',]);

        CompanyOccupation::create(['code'=>'715710','title'=>'Instalador de isolantes acústicos','filter'=>'instalador de isolantes acústicos',]);

        CompanyOccupation::create(['code'=>'715715','title'=>'Instalador de isolantes térmicos (refrigeração e climatização)','filter'=>'instalador de isolantes térmicos (refrigeração e climatização)',]);

        CompanyOccupation::create(['code'=>'715720','title'=>'Instalador de isolantes térmicos de caldeira e tubulações','filter'=>'instalador de isolantes térmicos de caldeira e tubulações',]);

        CompanyOccupation::create(['code'=>'715725','title'=>'Instalador de material isolante, a mão (edificações)','filter'=>'instalador de material isolante, a mão (edificações)',]);

        CompanyOccupation::create(['code'=>'715730','title'=>'Instalador de material isolante, à máquina (edificações)','filter'=>'instalador de material isolante, à máquina (edificações)',]);

        CompanyOccupation::create(['code'=>'716105','title'=>'Acabador de superfícies de concreto','filter'=>'acabador de superfícies de concreto',]);

        CompanyOccupation::create(['code'=>'716110','title'=>'Revestidor de superfícies de concreto','filter'=>'revestidor de superfícies de concreto',]);

        CompanyOccupation::create(['code'=>'716205','title'=>'Telhador (telhas de argila e materiais similares)','filter'=>'telhador (telhas de argila e materiais similares)',]);

        CompanyOccupation::create(['code'=>'716210','title'=>'Telhador (telhas de cimento-amianto)','filter'=>'telhador (telhas de cimento-amianto)',]);

        CompanyOccupation::create(['code'=>'716215','title'=>'Telhador (telhas metálicas)','filter'=>'telhador (telhas metálicas)',]);

        CompanyOccupation::create(['code'=>'716220','title'=>'Telhador (telhas plásticas)','filter'=>'telhador (telhas plásticas)',]);

        CompanyOccupation::create(['code'=>'716305','title'=>'Vidraceiro','filter'=>'vidraceiro',]);

        CompanyOccupation::create(['code'=>'716310','title'=>'Vidraceiro (edificações)','filter'=>'vidraceiro (edificações)',]);

        CompanyOccupation::create(['code'=>'716315','title'=>'Vidraceiro (vitrais)','filter'=>'vidraceiro (vitrais)',]);

        CompanyOccupation::create(['code'=>'716405','title'=>'Gesseiro','filter'=>'gesseiro',]);

        CompanyOccupation::create(['code'=>'716505','title'=>'Assoalhador','filter'=>'assoalhador',]);

        CompanyOccupation::create(['code'=>'716510','title'=>'Assentador de revestimentos cerâmicos','filter'=>'assentador de revestimentos cerâmicos',]);

        CompanyOccupation::create(['code'=>'716515','title'=>'Pastilheiro','filter'=>'pastilheiro',]);

        CompanyOccupation::create(['code'=>'716520','title'=>'Lustrador de piso','filter'=>'lustrador de piso',]);

        CompanyOccupation::create(['code'=>'716525','title'=>'Marmorista (construção)','filter'=>'marmorista (construção)',]);

        CompanyOccupation::create(['code'=>'716530','title'=>'Mosaísta','filter'=>'mosaísta',]);

        CompanyOccupation::create(['code'=>'716535','title'=>'Taqueiro','filter'=>'taqueiro',]);

        CompanyOccupation::create(['code'=>'716540','title'=>'Rejuntador de revestimentos','filter'=>'rejuntador de revestimentos',]);

        CompanyOccupation::create(['code'=>'716605','title'=>'Calafetador','filter'=>'calafetador',]);

        CompanyOccupation::create(['code'=>'716610','title'=>'Pintor de obras','filter'=>'pintor de obras',]);

        CompanyOccupation::create(['code'=>'716615','title'=>'Revestidor de interiores (papel, material plástico e emborrachados)','filter'=>'revestidor de interiores (papel, material plástico e emborrachados)',]);

        CompanyOccupation::create(['code'=>'717005','title'=>'Demolidor de edificações','filter'=>'demolidor de edificações',]);

        CompanyOccupation::create(['code'=>'717010','title'=>'Operador de martelete','filter'=>'operador de martelete',]);

        CompanyOccupation::create(['code'=>'717015','title'=>'Poceiro (edificações)','filter'=>'poceiro (edificações)',]);

        CompanyOccupation::create(['code'=>'717020','title'=>'Servente de obras','filter'=>'servente de obras',]);

        CompanyOccupation::create(['code'=>'717025','title'=>'Vibradorista','filter'=>'vibradorista',]);

        CompanyOccupation::create(['code'=>'720105','title'=>'Mestre (afiador de ferramentas)','filter'=>'mestre (afiador de ferramentas)',]);

        CompanyOccupation::create(['code'=>'720110','title'=>'Mestre de caldeiraria','filter'=>'mestre de caldeiraria',]);

        CompanyOccupation::create(['code'=>'720115','title'=>'Mestre de ferramentaria','filter'=>'mestre de ferramentaria',]);

        CompanyOccupation::create(['code'=>'720120','title'=>'Mestre de forjaria','filter'=>'mestre de forjaria',]);

        CompanyOccupation::create(['code'=>'720125','title'=>'Mestre de fundição','filter'=>'mestre de fundição',]);

        CompanyOccupation::create(['code'=>'720130','title'=>'Mestre de galvanoplastia','filter'=>'mestre de galvanoplastia',]);

        CompanyOccupation::create(['code'=>'720135','title'=>'Mestre de pintura (tratamento de superfícies)','filter'=>'mestre de pintura (tratamento de superfícies)',]);

        CompanyOccupation::create(['code'=>'720140','title'=>'Mestre de soldagem','filter'=>'mestre de soldagem',]);

        CompanyOccupation::create(['code'=>'720145','title'=>'Mestre de trefilação de metais','filter'=>'mestre de trefilação de metais',]);

        CompanyOccupation::create(['code'=>'720150','title'=>'Mestre de usinagem','filter'=>'mestre de usinagem',]);

        CompanyOccupation::create(['code'=>'720155','title'=>'Mestre serralheiro','filter'=>'mestre serralheiro',]);

        CompanyOccupation::create(['code'=>'720160','title'=>'Supervisor de controle de tratamento térmico','filter'=>'supervisor de controle de tratamento térmico',]);

        CompanyOccupation::create(['code'=>'720205','title'=>'Mestre (construção naval)','filter'=>'mestre (construção naval)',]);

        CompanyOccupation::create(['code'=>'720210','title'=>'Mestre (indústria de automotores e material de transportes)','filter'=>'mestre (indústria de automotores e material de transportes)',]);

        CompanyOccupation::create(['code'=>'720215','title'=>'Mestre (indústria de máquinas e outros equipamentos mecânicos)','filter'=>'mestre (indústria de máquinas e outros equipamentos mecânicos)',]);

        CompanyOccupation::create(['code'=>'720220','title'=>'Mestre de construção de fornos','filter'=>'mestre de construção de fornos',]);

        CompanyOccupation::create(['code'=>'721105','title'=>'Ferramenteiro','filter'=>'ferramenteiro',]);

        CompanyOccupation::create(['code'=>'721110','title'=>'Ferramenteiro de mandris, calibradores e outros dispositivos','filter'=>'ferramenteiro de mandris, calibradores e outros dispositivos',]);

        CompanyOccupation::create(['code'=>'721115','title'=>'Modelador de metais (fundição)','filter'=>'modelador de metais (fundição)',]);

        CompanyOccupation::create(['code'=>'721205','title'=>'Operador de máquina de eletroerosão','filter'=>'operador de máquina de eletroerosão',]);

        CompanyOccupation::create(['code'=>'721210','title'=>'Operador de máquinas operatrizes','filter'=>'operador de máquinas operatrizes',]);

        CompanyOccupation::create(['code'=>'721215','title'=>'Operador de máquinas-ferramenta convencionais','filter'=>'operador de máquinas-ferramenta convencionais',]);

        CompanyOccupation::create(['code'=>'721220','title'=>'Operador de usinagem convencional por abrasão','filter'=>'operador de usinagem convencional por abrasão',]);

        CompanyOccupation::create(['code'=>'721225','title'=>'Preparador de máquinas-ferramenta','filter'=>'preparador de máquinas-ferramenta',]);

        CompanyOccupation::create(['code'=>'721305','title'=>'Afiador de cardas','filter'=>'afiador de cardas',]);

        CompanyOccupation::create(['code'=>'721310','title'=>'Afiador de cutelaria','filter'=>'afiador de cutelaria',]);

        CompanyOccupation::create(['code'=>'721315','title'=>'Afiador de ferramentas','filter'=>'afiador de ferramentas',]);

        CompanyOccupation::create(['code'=>'721320','title'=>'Afiador de serras','filter'=>'afiador de serras',]);

        CompanyOccupation::create(['code'=>'721325','title'=>'Polidor de metais','filter'=>'polidor de metais',]);

        CompanyOccupation::create(['code'=>'721405','title'=>'Operador de centro de usinagem com comando numérico','filter'=>'operador de centro de usinagem com comando numérico',]);

        CompanyOccupation::create(['code'=>'721410','title'=>'Operador de fresadora com comando numérico','filter'=>'operador de fresadora com comando numérico',]);

        CompanyOccupation::create(['code'=>'721415','title'=>'Operador de mandriladora com comando numérico','filter'=>'operador de mandriladora com comando numérico',]);

        CompanyOccupation::create(['code'=>'721420','title'=>'Operador de máquina eletroerosão, à fio, com comando numérico','filter'=>'operador de máquina eletroerosão, à fio, com comando numérico',]);

        CompanyOccupation::create(['code'=>'721425','title'=>'Operador de retificadora com comando numérico','filter'=>'operador de retificadora com comando numérico',]);

        CompanyOccupation::create(['code'=>'721430','title'=>'Operador de torno com comando numérico','filter'=>'operador de torno com comando numérico',]);

        CompanyOccupation::create(['code'=>'722105','title'=>'Forjador','filter'=>'forjador',]);

        CompanyOccupation::create(['code'=>'722110','title'=>'Forjador a martelo','filter'=>'forjador a martelo',]);

        CompanyOccupation::create(['code'=>'722115','title'=>'Forjador prensista','filter'=>'forjador prensista',]);

        CompanyOccupation::create(['code'=>'722205','title'=>'Fundidor de metais','filter'=>'fundidor de metais',]);

        CompanyOccupation::create(['code'=>'722210','title'=>'Operador de lingotamento','filter'=>'operador de lingotamento',]);

        CompanyOccupation::create(['code'=>'722215','title'=>'Operador de acabamento de peças fundidas','filter'=>'operador de acabamento de peças fundidas',]);

        CompanyOccupation::create(['code'=>'722220','title'=>'Operador de máquina de fundição','filter'=>'operador de máquina de fundição',]);

        CompanyOccupation::create(['code'=>'722230','title'=>'Operador de vazamento','filter'=>'operador de vazamento',]);

        CompanyOccupation::create(['code'=>'722235','title'=>'Preparador de panelas','filter'=>'preparador de panelas',]);

        CompanyOccupation::create(['code'=>'722305','title'=>'Macheiro, a mão','filter'=>'macheiro, a mão',]);

        CompanyOccupation::create(['code'=>'722310','title'=>'Macheiro, a máquina','filter'=>'macheiro, a máquina',]);

        CompanyOccupation::create(['code'=>'722315','title'=>'Moldador, a mão','filter'=>'moldador, a mão',]);

        CompanyOccupation::create(['code'=>'722320','title'=>'Moldador, a máquina','filter'=>'moldador, a máquina',]);

        CompanyOccupation::create(['code'=>'722325','title'=>'Operador de equipamentos de preparação de areia','filter'=>'operador de equipamentos de preparação de areia',]);

        CompanyOccupation::create(['code'=>'722330','title'=>'Operador de máquina de moldar automatizada','filter'=>'operador de máquina de moldar automatizada',]);

        CompanyOccupation::create(['code'=>'722405','title'=>'Cableador','filter'=>'cableador',]);

        CompanyOccupation::create(['code'=>'722410','title'=>'Estirador de tubos de metal sem costura','filter'=>'estirador de tubos de metal sem costura',]);

        CompanyOccupation::create(['code'=>'722415','title'=>'Trefilador de metais, à máquina','filter'=>'trefilador de metais, à máquina',]);

        CompanyOccupation::create(['code'=>'723105','title'=>'Cementador de metais','filter'=>'cementador de metais',]);

        CompanyOccupation::create(['code'=>'723110','title'=>'Normalizador de metais e de compósitos','filter'=>'normalizador de metais e de compósitos',]);

        CompanyOccupation::create(['code'=>'723115','title'=>'Operador de equipamento para resfriamento','filter'=>'operador de equipamento para resfriamento',]);

        CompanyOccupation::create(['code'=>'723120','title'=>'Operador de forno de tratamento térmico de metais','filter'=>'operador de forno de tratamento térmico de metais',]);

        CompanyOccupation::create(['code'=>'723125','title'=>'Temperador de metais e de compósitos','filter'=>'temperador de metais e de compósitos',]);

        CompanyOccupation::create(['code'=>'723205','title'=>'Decapador','filter'=>'decapador',]);

        CompanyOccupation::create(['code'=>'723210','title'=>'Fosfatizador','filter'=>'fosfatizador',]);

        CompanyOccupation::create(['code'=>'723215','title'=>'Galvanizador','filter'=>'galvanizador',]);

        CompanyOccupation::create(['code'=>'723220','title'=>'Metalizador a pistola','filter'=>'metalizador a pistola',]);

        CompanyOccupation::create(['code'=>'723225','title'=>'Metalizador (banho quente)','filter'=>'metalizador (banho quente)',]);

        CompanyOccupation::create(['code'=>'723230','title'=>'Operador de máquina recobridora de arame','filter'=>'operador de máquina recobridora de arame',]);

        CompanyOccupation::create(['code'=>'723235','title'=>'Operador de zincagem (processo eletrolítico)','filter'=>'operador de zincagem (processo eletrolítico)',]);

        CompanyOccupation::create(['code'=>'723240','title'=>'Oxidador','filter'=>'oxidador',]);

        CompanyOccupation::create(['code'=>'723305','title'=>'Operador de equipamento de secagem de pintura','filter'=>'operador de equipamento de secagem de pintura',]);

        CompanyOccupation::create(['code'=>'723310','title'=>'Pintor a pincel e rolo (exceto obras e estruturas metálicas)','filter'=>'pintor a pincel e rolo (exceto obras e estruturas metálicas)',]);

        CompanyOccupation::create(['code'=>'723315','title'=>'Pintor de estruturas metálicas','filter'=>'pintor de estruturas metálicas',]);

        CompanyOccupation::create(['code'=>'723320','title'=>'Pintor de veículos (fabricação)','filter'=>'pintor de veículos (fabricação)',]);

        CompanyOccupation::create(['code'=>'723325','title'=>'Pintor por imersão','filter'=>'pintor por imersão',]);

        CompanyOccupation::create(['code'=>'723330','title'=>'Pintor, a pistola (exceto obras e estruturas metálicas)','filter'=>'pintor, a pistola (exceto obras e estruturas metálicas)',]);

        CompanyOccupation::create(['code'=>'724105','title'=>'Assentador de canalização (edificações)','filter'=>'assentador de canalização (edificações)',]);

        CompanyOccupation::create(['code'=>'724110','title'=>'Encanador','filter'=>'encanador',]);

        CompanyOccupation::create(['code'=>'724115','title'=>'Instalador de tubulações','filter'=>'instalador de tubulações',]);

        CompanyOccupation::create(['code'=>'724120','title'=>'Instalador de tubulações (aeronaves)','filter'=>'instalador de tubulações (aeronaves)',]);

        CompanyOccupation::create(['code'=>'724125','title'=>'Instalador de tubulações (embarcações)','filter'=>'instalador de tubulações (embarcações)',]);

        CompanyOccupation::create(['code'=>'724130','title'=>'Instalador de tubulações de gás combustível (produção e distribuição)','filter'=>'instalador de tubulações de gás combustível (produção e distribuição)',]);

        CompanyOccupation::create(['code'=>'724135','title'=>'Instalador de tubulações de vapor (produção e distribuição)','filter'=>'instalador de tubulações de vapor (produção e distribuição)',]);

        CompanyOccupation::create(['code'=>'724205','title'=>'Montador de estruturas metálicas','filter'=>'montador de estruturas metálicas',]);

        CompanyOccupation::create(['code'=>'724210','title'=>'Montador de estruturas metálicas de embarcações','filter'=>'montador de estruturas metálicas de embarcações',]);

        CompanyOccupation::create(['code'=>'724215','title'=>'Rebitador a martelo pneumático','filter'=>'rebitador a martelo pneumático',]);

        CompanyOccupation::create(['code'=>'724220','title'=>'Preparador de estruturas metálicas','filter'=>'preparador de estruturas metálicas',]);

        CompanyOccupation::create(['code'=>'724225','title'=>'Riscador de estruturas metálicas','filter'=>'riscador de estruturas metálicas',]);

        CompanyOccupation::create(['code'=>'724230','title'=>'Rebitador, a mão','filter'=>'rebitador, a mão',]);

        CompanyOccupation::create(['code'=>'724305','title'=>'Brasador','filter'=>'brasador',]);

        CompanyOccupation::create(['code'=>'724310','title'=>'Oxicortador a mão e a máquina','filter'=>'oxicortador a mão e a máquina',]);

        CompanyOccupation::create(['code'=>'724315','title'=>'Soldador','filter'=>'soldador',]);

        CompanyOccupation::create(['code'=>'724320','title'=>'Soldador a oxigás','filter'=>'soldador a oxigás',]);

        CompanyOccupation::create(['code'=>'724325','title'=>'Soldador elétrico','filter'=>'soldador elétrico',]);

        CompanyOccupation::create(['code'=>'724405','title'=>'Caldeireiro (chapas de cobre)','filter'=>'caldeireiro (chapas de cobre)',]);

        CompanyOccupation::create(['code'=>'724410','title'=>'Caldeireiro (chapas de ferro e aço)','filter'=>'caldeireiro (chapas de ferro e aço)',]);

        CompanyOccupation::create(['code'=>'724415','title'=>'Chapeador','filter'=>'chapeador',]);

        CompanyOccupation::create(['code'=>'724420','title'=>'Chapeador de carrocerias metálicas (fabricação)','filter'=>'chapeador de carrocerias metálicas (fabricação)',]);

        CompanyOccupation::create(['code'=>'724425','title'=>'Chapeador naval','filter'=>'chapeador naval',]);

        CompanyOccupation::create(['code'=>'724430','title'=>'Chapeador de aeronaves','filter'=>'chapeador de aeronaves',]);

        CompanyOccupation::create(['code'=>'724435','title'=>'Funileiro industrial','filter'=>'funileiro industrial',]);

        CompanyOccupation::create(['code'=>'724440','title'=>'Serralheiro','filter'=>'serralheiro',]);

        CompanyOccupation::create(['code'=>'724505','title'=>'Operador de máquina de cilindrar chapas','filter'=>'operador de máquina de cilindrar chapas',]);

        CompanyOccupation::create(['code'=>'724510','title'=>'Operador de máquina de dobrar chapas','filter'=>'operador de máquina de dobrar chapas',]);

        CompanyOccupation::create(['code'=>'724515','title'=>'Prensista (operador de prensa)','filter'=>'prensista (operador de prensa)',]);

        CompanyOccupation::create(['code'=>'724605','title'=>'Operador de laços de cabos de aço','filter'=>'operador de laços de cabos de aço',]);

        CompanyOccupation::create(['code'=>'724610','title'=>'Trançador de cabos de aço','filter'=>'trançador de cabos de aço',]);

        CompanyOccupation::create(['code'=>'725005','title'=>'Ajustador ferramenteiro','filter'=>'ajustador ferramenteiro',]);

        CompanyOccupation::create(['code'=>'725010','title'=>'Ajustador mecânico','filter'=>'ajustador mecânico',]);

        CompanyOccupation::create(['code'=>'725015','title'=>'Ajustador mecânico (usinagem em bancada e em máquinas-ferramentas)','filter'=>'ajustador mecânico (usinagem em bancada e em máquinas-ferramentas)',]);

        CompanyOccupation::create(['code'=>'725020','title'=>'Ajustador mecânico em bancada','filter'=>'ajustador mecânico em bancada',]);

        CompanyOccupation::create(['code'=>'725025','title'=>'Ajustador naval (reparo e construção)','filter'=>'ajustador naval (reparo e construção)',]);

        CompanyOccupation::create(['code'=>'725030','title'=>'Operador de manutenção e recarga de extintor de incêndio','filter'=>'operador de manutenção e recarga de extintor de incêndio',]);

        CompanyOccupation::create(['code'=>'725105','title'=>'Montador de máquinas, motores e acessórios (montagem em série)','filter'=>'montador de máquinas, motores e acessórios (montagem em série)',]);

        CompanyOccupation::create(['code'=>'725205','title'=>'Montador de máquinas','filter'=>'montador de máquinas',]);

        CompanyOccupation::create(['code'=>'725210','title'=>'Montador de máquinas gráficas','filter'=>'montador de máquinas gráficas',]);

        CompanyOccupation::create(['code'=>'725215','title'=>'Montador de máquinas operatrizes para madeira','filter'=>'montador de máquinas operatrizes para madeira',]);

        CompanyOccupation::create(['code'=>'725220','title'=>'Montador de máquinas têxteis','filter'=>'montador de máquinas têxteis',]);

        CompanyOccupation::create(['code'=>'725225','title'=>'Montador de máquinas-ferramentas (usinagem de metais)','filter'=>'montador de máquinas-ferramentas (usinagem de metais)',]);

        CompanyOccupation::create(['code'=>'725305','title'=>'Montador de equipamento de levantamento','filter'=>'montador de equipamento de levantamento',]);

        CompanyOccupation::create(['code'=>'725310','title'=>'Montador de máquinas agrícolas','filter'=>'montador de máquinas agrícolas',]);

        CompanyOccupation::create(['code'=>'725315','title'=>'Montador de máquinas de minas e pedreiras','filter'=>'montador de máquinas de minas e pedreiras',]);

        CompanyOccupation::create(['code'=>'725320','title'=>'Montador de máquinas de terraplenagem','filter'=>'montador de máquinas de terraplenagem',]);

        CompanyOccupation::create(['code'=>'725405','title'=>'Mecânico montador de motores de aeronaves','filter'=>'mecânico montador de motores de aeronaves',]);

        CompanyOccupation::create(['code'=>'725410','title'=>'Mecânico montador de motores de embarcações','filter'=>'mecânico montador de motores de embarcações',]);

        CompanyOccupation::create(['code'=>'725415','title'=>'Mecânico montador de motores de explosão e diesel','filter'=>'mecânico montador de motores de explosão e diesel',]);

        CompanyOccupation::create(['code'=>'725420','title'=>'Mecânico montador de turboalimentadores','filter'=>'mecânico montador de turboalimentadores',]);

        CompanyOccupation::create(['code'=>'725505','title'=>'Montador de veículos (linha de montagem)','filter'=>'montador de veículos (linha de montagem)',]);

        CompanyOccupation::create(['code'=>'725510','title'=>'Operador de time de montagem','filter'=>'operador de time de montagem',]);

        CompanyOccupation::create(['code'=>'725605','title'=>'Montador de estruturas de aeronaves','filter'=>'montador de estruturas de aeronaves',]);

        CompanyOccupation::create(['code'=>'725610','title'=>'Montador de sistemas de combustível de aeronaves','filter'=>'montador de sistemas de combustível de aeronaves',]);

        CompanyOccupation::create(['code'=>'725705','title'=>'Mecânico de refrigeração','filter'=>'mecânico de refrigeração',]);

        CompanyOccupation::create(['code'=>'730105','title'=>'Supervisor de montagem e instalação eletroeletrônica','filter'=>'supervisor de montagem e instalação eletroeletrônica',]);

        CompanyOccupation::create(['code'=>'731105','title'=>'Montador de equipamentos eletrônicos (aparelhos médicos)','filter'=>'montador de equipamentos eletrônicos (aparelhos médicos)',]);

        CompanyOccupation::create(['code'=>'731110','title'=>'Montador de equipamentos eletrônicos (computadores e equipamentos auxiliares)','filter'=>'montador de equipamentos eletrônicos (computadores e equipamentos auxiliares)',]);

        CompanyOccupation::create(['code'=>'731115','title'=>'Montador de equipamentos elétricos (instrumentos de medição)','filter'=>'montador de equipamentos elétricos (instrumentos de medição)',]);

        CompanyOccupation::create(['code'=>'731120','title'=>'Montador de equipamentos elétricos (aparelhos eletrodomésticos)','filter'=>'montador de equipamentos elétricos (aparelhos eletrodomésticos)',]);

        CompanyOccupation::create(['code'=>'731125','title'=>'Montador de equipamentos elétricos (centrais elétricas)','filter'=>'montador de equipamentos elétricos (centrais elétricas)',]);

        CompanyOccupation::create(['code'=>'731130','title'=>'Montador de equipamentos elétricos (motores e dínamos)','filter'=>'montador de equipamentos elétricos (motores e dínamos)',]);

        CompanyOccupation::create(['code'=>'731135','title'=>'Montador de equipamentos elétricos','filter'=>'montador de equipamentos elétricos',]);

        CompanyOccupation::create(['code'=>'731140','title'=>'Montador de equipamentos eletrônicos (instalações de sinalização)','filter'=>'montador de equipamentos eletrônicos (instalações de sinalização)',]);

        CompanyOccupation::create(['code'=>'731145','title'=>'Montador de equipamentos eletrônicos (máquinas industriais)','filter'=>'montador de equipamentos eletrônicos (máquinas industriais)',]);

        CompanyOccupation::create(['code'=>'731150','title'=>'Montador de equipamentos eletrônicos','filter'=>'montador de equipamentos eletrônicos',]);

        CompanyOccupation::create(['code'=>'731155','title'=>'Montador de equipamentos elétricos (elevadores e equipamentos similares)','filter'=>'montador de equipamentos elétricos (elevadores e equipamentos similares)',]);

        CompanyOccupation::create(['code'=>'731160','title'=>'Montador de equipamentos elétricos (transformadores)','filter'=>'montador de equipamentos elétricos (transformadores)',]);

        CompanyOccupation::create(['code'=>'731165','title'=>'Bobinador eletricista, à mão','filter'=>'bobinador eletricista, à mão',]);

        CompanyOccupation::create(['code'=>'731170','title'=>'Bobinador eletricista, à máquina','filter'=>'bobinador eletricista, à máquina',]);

        CompanyOccupation::create(['code'=>'731175','title'=>'Operador de linha de montagem (aparelhos elétricos)','filter'=>'operador de linha de montagem (aparelhos elétricos)',]);

        CompanyOccupation::create(['code'=>'731180','title'=>'Operador de linha de montagem (aparelhos eletrônicos)','filter'=>'operador de linha de montagem (aparelhos eletrônicos)',]);

        CompanyOccupation::create(['code'=>'731205','title'=>'Montador de equipamentos eletrônicos (estação de rádio, tv e equipamentos de radar)','filter'=>'montador de equipamentos eletrônicos (estação de rádio, tv e equipamentos de radar)',]);

        CompanyOccupation::create(['code'=>'731305','title'=>'Instalador-reparador de equipamentos de comutação em telefonia','filter'=>'instalador-reparador de equipamentos de comutação em telefonia',]);

        CompanyOccupation::create(['code'=>'731310','title'=>'Instalador-reparador de equipamentos de energia em telefonia','filter'=>'instalador-reparador de equipamentos de energia em telefonia',]);

        CompanyOccupation::create(['code'=>'731315','title'=>'Instalador-reparador de equipamentos de transmissão em telefonia','filter'=>'instalador-reparador de equipamentos de transmissão em telefonia',]);

        CompanyOccupation::create(['code'=>'731320','title'=>'Instalador-reparador de linhas e aparelhos de telecomunicações','filter'=>'instalador-reparador de linhas e aparelhos de telecomunicações',]);

        CompanyOccupation::create(['code'=>'731325','title'=>'Instalador-reparador de redes e cabos telefônicos','filter'=>'instalador-reparador de redes e cabos telefônicos',]);

        CompanyOccupation::create(['code'=>'731330','title'=>'Reparador de aparelhos de telecomunicações em laboratório','filter'=>'reparador de aparelhos de telecomunicações em laboratório',]);

        CompanyOccupation::create(['code'=>'732105','title'=>'Eletricista de manutenção de linhas elétricas, telefônicas e de comunicação de dados','filter'=>'eletricista de manutenção de linhas elétricas, telefônicas e de comunicação de dados',]);

        CompanyOccupation::create(['code'=>'732110','title'=>'Emendador de cabos elétricos e telefônicos (aéreos e subterrâneos)','filter'=>'emendador de cabos elétricos e telefônicos (aéreos e subterrâneos)',]);

        CompanyOccupation::create(['code'=>'732115','title'=>'Examinador de cabos, linhas elétricas e telefônicas','filter'=>'examinador de cabos, linhas elétricas e telefônicas',]);

        CompanyOccupation::create(['code'=>'732120','title'=>'Instalador de linhas elétricas de alta e baixa - tensão (rede aérea e subterrânea)','filter'=>'instalador de linhas elétricas de alta e baixa - tensão (rede aérea e subterrânea)',]);

        CompanyOccupation::create(['code'=>'732125','title'=>'Instalador eletricista (tração de veículos)','filter'=>'instalador eletricista (tração de veículos)',]);

        CompanyOccupation::create(['code'=>'732130','title'=>'Instalador-reparador de redes telefônicas e de comunicação de dados','filter'=>'instalador-reparador de redes telefônicas e de comunicação de dados',]);

        CompanyOccupation::create(['code'=>'732135','title'=>'Ligador de linhas telefônicas','filter'=>'ligador de linhas telefônicas',]);

        CompanyOccupation::create(['code'=>'732140','title'=>'Instalador de sistemas fotovoltaicos','filter'=>'instalador de sistemas fotovoltaicos',]);

        CompanyOccupation::create(['code'=>'740105','title'=>'Supervisor da mecânica de precisão','filter'=>'supervisor da mecânica de precisão',]);

        CompanyOccupation::create(['code'=>'740110','title'=>'Supervisor de fabricação de instrumentos musicais','filter'=>'supervisor de fabricação de instrumentos musicais',]);

        CompanyOccupation::create(['code'=>'741105','title'=>'Ajustador de instrumentos de precisão','filter'=>'ajustador de instrumentos de precisão',]);

        CompanyOccupation::create(['code'=>'741110','title'=>'Montador de instrumentos de óptica','filter'=>'montador de instrumentos de óptica',]);

        CompanyOccupation::create(['code'=>'741115','title'=>'Montador de instrumentos de precisão','filter'=>'montador de instrumentos de precisão',]);

        CompanyOccupation::create(['code'=>'741120','title'=>'Relojoeiro (fabricação)','filter'=>'relojoeiro (fabricação)',]);

        CompanyOccupation::create(['code'=>'741125','title'=>'Relojoeiro (reparação)','filter'=>'relojoeiro (reparação)',]);

        CompanyOccupation::create(['code'=>'742105','title'=>'Afinador de instrumentos musicais','filter'=>'afinador de instrumentos musicais',]);

        CompanyOccupation::create(['code'=>'742110','title'=>'Confeccionador de acordeão','filter'=>'confeccionador de acordeão',]);

        CompanyOccupation::create(['code'=>'742115','title'=>'Confeccionador de instrumentos de corda','filter'=>'confeccionador de instrumentos de corda',]);

        CompanyOccupation::create(['code'=>'742120','title'=>'Confeccionador de instrumentos de percussão (pele, couro ou plástico)','filter'=>'confeccionador de instrumentos de percussão (pele, couro ou plástico)',]);

        CompanyOccupation::create(['code'=>'742125','title'=>'Confeccionador de instrumentos de sopro (madeira)','filter'=>'confeccionador de instrumentos de sopro (madeira)',]);

        CompanyOccupation::create(['code'=>'742130','title'=>'Confeccionador de instrumentos de sopro (metal)','filter'=>'confeccionador de instrumentos de sopro (metal)',]);

        CompanyOccupation::create(['code'=>'742135','title'=>'Confeccionador de órgão','filter'=>'confeccionador de órgão',]);

        CompanyOccupation::create(['code'=>'742140','title'=>'Confeccionador de piano','filter'=>'confeccionador de piano',]);

        CompanyOccupation::create(['code'=>'750105','title'=>'Supervisor de joalheria','filter'=>'supervisor de joalheria',]);

        CompanyOccupation::create(['code'=>'750205','title'=>'Supervisor da indústria de minerais não metálicos (exceto os derivados de petróleo e carvão)','filter'=>'supervisor da indústria de minerais não metálicos (exceto os derivados de petróleo e carvão)',]);

        CompanyOccupation::create(['code'=>'751005','title'=>'Engastador (jóias)','filter'=>'engastador (jóias)',]);

        CompanyOccupation::create(['code'=>'751010','title'=>'Joalheiro','filter'=>'joalheiro',]);

        CompanyOccupation::create(['code'=>'751015','title'=>'Joalheiro (reparações)','filter'=>'joalheiro (reparações)',]);

        CompanyOccupation::create(['code'=>'751020','title'=>'Lapidador (jóias)','filter'=>'lapidador (jóias)',]);

        CompanyOccupation::create(['code'=>'751105','title'=>'Bate-folha a máquina','filter'=>'bate-folha a máquina',]);

        CompanyOccupation::create(['code'=>'751110','title'=>'Fundidor (joalheria e ourivesaria)','filter'=>'fundidor (joalheria e ourivesaria)',]);

        CompanyOccupation::create(['code'=>'751115','title'=>'Gravador (joalheria e ourivesaria)','filter'=>'gravador (joalheria e ourivesaria)',]);

        CompanyOccupation::create(['code'=>'751120','title'=>'Laminador de metais preciosos a mão','filter'=>'laminador de metais preciosos a mão',]);

        CompanyOccupation::create(['code'=>'751125','title'=>'Ourives','filter'=>'ourives',]);

        CompanyOccupation::create(['code'=>'751130','title'=>'Trefilador (joalheria e ourivesaria)','filter'=>'trefilador (joalheria e ourivesaria)',]);

        CompanyOccupation::create(['code'=>'752105','title'=>'Artesão modelador (vidros)','filter'=>'artesão modelador (vidros)',]);

        CompanyOccupation::create(['code'=>'752110','title'=>'Moldador (vidros)','filter'=>'moldador (vidros)',]);

        CompanyOccupation::create(['code'=>'752115','title'=>'Soprador de vidro','filter'=>'soprador de vidro',]);

        CompanyOccupation::create(['code'=>'752120','title'=>'Transformador de tubos de vidro','filter'=>'transformador de tubos de vidro',]);

        CompanyOccupation::create(['code'=>'752205','title'=>'Aplicador serigráfico em vidros','filter'=>'aplicador serigráfico em vidros',]);

        CompanyOccupation::create(['code'=>'752210','title'=>'Cortador de vidro','filter'=>'cortador de vidro',]);

        CompanyOccupation::create(['code'=>'752215','title'=>'Gravador de vidro a água-forte','filter'=>'gravador de vidro a água-forte',]);

        CompanyOccupation::create(['code'=>'752220','title'=>'Gravador de vidro a esmeril','filter'=>'gravador de vidro a esmeril',]);

        CompanyOccupation::create(['code'=>'752225','title'=>'Gravador de vidro a jato de areia','filter'=>'gravador de vidro a jato de areia',]);

        CompanyOccupation::create(['code'=>'752230','title'=>'Lapidador de vidros e cristais','filter'=>'lapidador de vidros e cristais',]);

        CompanyOccupation::create(['code'=>'752235','title'=>'Surfassagista','filter'=>'surfassagista',]);

        CompanyOccupation::create(['code'=>'752305','title'=>'Ceramista','filter'=>'ceramista',]);

        CompanyOccupation::create(['code'=>'752310','title'=>'Ceramista (torno de pedal e motor)','filter'=>'ceramista (torno de pedal e motor)',]);

        CompanyOccupation::create(['code'=>'752315','title'=>'Ceramista (torno semi-automático)','filter'=>'ceramista (torno semi-automático)',]);

        CompanyOccupation::create(['code'=>'752320','title'=>'Ceramista modelador','filter'=>'ceramista modelador',]);

        CompanyOccupation::create(['code'=>'752325','title'=>'Ceramista moldador','filter'=>'ceramista moldador',]);

        CompanyOccupation::create(['code'=>'752330','title'=>'Ceramista prensador','filter'=>'ceramista prensador',]);

        CompanyOccupation::create(['code'=>'752405','title'=>'Decorador de cerâmica','filter'=>'decorador de cerâmica',]);

        CompanyOccupation::create(['code'=>'752410','title'=>'Decorador de vidro','filter'=>'decorador de vidro',]);

        CompanyOccupation::create(['code'=>'752415','title'=>'Decorador de vidro à pincel','filter'=>'decorador de vidro à pincel',]);

        CompanyOccupation::create(['code'=>'752420','title'=>'Operador de esmaltadeira','filter'=>'operador de esmaltadeira',]);

        CompanyOccupation::create(['code'=>'752425','title'=>'Operador de espelhamento','filter'=>'operador de espelhamento',]);

        CompanyOccupation::create(['code'=>'752430','title'=>'Pintor de cerâmica, a pincel','filter'=>'pintor de cerâmica, a pincel',]);

        CompanyOccupation::create(['code'=>'760105','title'=>'Contramestre de acabamento (indústria têxtil)','filter'=>'contramestre de acabamento (indústria têxtil)',]);

        CompanyOccupation::create(['code'=>'760110','title'=>'Contramestre de fiação (indústria têxtil)','filter'=>'contramestre de fiação (indústria têxtil)',]);

        CompanyOccupation::create(['code'=>'760115','title'=>'Contramestre de malharia (indústria têxtil)','filter'=>'contramestre de malharia (indústria têxtil)',]);

        CompanyOccupation::create(['code'=>'760120','title'=>'Contramestre de tecelagem (indústria têxtil)','filter'=>'contramestre de tecelagem (indústria têxtil)',]);

        CompanyOccupation::create(['code'=>'760125','title'=>'Mestre (indústria têxtil e de confecções)','filter'=>'mestre (indústria têxtil e de confecções)',]);

        CompanyOccupation::create(['code'=>'760205','title'=>'Supervisor de curtimento','filter'=>'supervisor de curtimento',]);

        CompanyOccupation::create(['code'=>'760305','title'=>'Encarregado de corte na confecção do vestuário','filter'=>'encarregado de corte na confecção do vestuário',]);

        CompanyOccupation::create(['code'=>'760310','title'=>'Encarregado de costura na confecção do vestuário','filter'=>'encarregado de costura na confecção do vestuário',]);

        CompanyOccupation::create(['code'=>'760405','title'=>'Supervisor (indústria de calçados e artefatos de couro)','filter'=>'supervisor (indústria de calçados e artefatos de couro)',]);

        CompanyOccupation::create(['code'=>'760505','title'=>'Supervisor da confecção de artefatos de tecidos, couros e afins','filter'=>'supervisor da confecção de artefatos de tecidos, couros e afins',]);

        CompanyOccupation::create(['code'=>'760605','title'=>'Supervisor das artes gráficas (indústria editorial e gráfica)','filter'=>'supervisor das artes gráficas (indústria editorial e gráfica)',]);

        CompanyOccupation::create(['code'=>'761005','title'=>'Operador polivalente da indústria têxtil','filter'=>'operador polivalente da indústria têxtil',]);

        CompanyOccupation::create(['code'=>'761105','title'=>'Classificador de fibras têxteis','filter'=>'classificador de fibras têxteis',]);

        CompanyOccupation::create(['code'=>'761110','title'=>'Lavador de lã','filter'=>'lavador de lã',]);

        CompanyOccupation::create(['code'=>'761205','title'=>'Operador de abertura (fiação)','filter'=>'operador de abertura (fiação)',]);

        CompanyOccupation::create(['code'=>'761210','title'=>'Operador de binadeira','filter'=>'operador de binadeira',]);

        CompanyOccupation::create(['code'=>'761215','title'=>'Operador de bobinadeira','filter'=>'operador de bobinadeira',]);

        CompanyOccupation::create(['code'=>'761220','title'=>'Operador de cardas','filter'=>'operador de cardas',]);

        CompanyOccupation::create(['code'=>'761225','title'=>'Operador de conicaleira','filter'=>'operador de conicaleira',]);

        CompanyOccupation::create(['code'=>'761230','title'=>'Operador de filatório','filter'=>'operador de filatório',]);

        CompanyOccupation::create(['code'=>'761235','title'=>'Operador de laminadeira e reunideira','filter'=>'operador de laminadeira e reunideira',]);

        CompanyOccupation::create(['code'=>'761240','title'=>'Operador de maçaroqueira','filter'=>'operador de maçaroqueira',]);

        CompanyOccupation::create(['code'=>'761245','title'=>'Operador de open-end','filter'=>'operador de open-end',]);

        CompanyOccupation::create(['code'=>'761250','title'=>'Operador de passador (fiação)','filter'=>'operador de passador (fiação)',]);

        CompanyOccupation::create(['code'=>'761255','title'=>'Operador de penteadeira','filter'=>'operador de penteadeira',]);

        CompanyOccupation::create(['code'=>'761260','title'=>'Operador de retorcedeira','filter'=>'operador de retorcedeira',]);

        CompanyOccupation::create(['code'=>'761303','title'=>'Tecelão (redes)','filter'=>'tecelão (redes)',]);

        CompanyOccupation::create(['code'=>'761306','title'=>'Tecelão (rendas e bordados)','filter'=>'tecelão (rendas e bordados)',]);

        CompanyOccupation::create(['code'=>'761309','title'=>'Tecelão (tear automático)','filter'=>'tecelão (tear automático)',]);

        CompanyOccupation::create(['code'=>'761312','title'=>'Tecelão (tear jacquard)','filter'=>'tecelão (tear jacquard)',]);

        CompanyOccupation::create(['code'=>'761315','title'=>'Tecelão (tear mecânico de maquineta)','filter'=>'tecelão (tear mecânico de maquineta)',]);

        CompanyOccupation::create(['code'=>'761318','title'=>'Tecelão (tear mecânico de xadrez)','filter'=>'tecelão (tear mecânico de xadrez)',]);

        CompanyOccupation::create(['code'=>'761321','title'=>'Tecelão (tear mecânico liso)','filter'=>'tecelão (tear mecânico liso)',]);

        CompanyOccupation::create(['code'=>'761324','title'=>'Tecelão (tear mecânico, exceto jacquard)','filter'=>'tecelão (tear mecânico, exceto jacquard)',]);

        CompanyOccupation::create(['code'=>'761327','title'=>'Tecelão de malhas, a máquina','filter'=>'tecelão de malhas, a máquina',]);

        CompanyOccupation::create(['code'=>'761330','title'=>'Tecelão de malhas (máquina circular)','filter'=>'tecelão de malhas (máquina circular)',]);

        CompanyOccupation::create(['code'=>'761333','title'=>'Tecelão de malhas (máquina retilínea)','filter'=>'tecelão de malhas (máquina retilínea)',]);

        CompanyOccupation::create(['code'=>'761336','title'=>'Tecelão de meias, a máquina','filter'=>'tecelão de meias, a máquina',]);

        CompanyOccupation::create(['code'=>'761339','title'=>'Tecelão de meias (máquina circular)','filter'=>'tecelão de meias (máquina circular)',]);

        CompanyOccupation::create(['code'=>'761342','title'=>'Tecelão de meias (máquina retilínea)','filter'=>'tecelão de meias (máquina retilínea)',]);

        CompanyOccupation::create(['code'=>'761345','title'=>'Tecelão de tapetes, a máquina','filter'=>'tecelão de tapetes, a máquina',]);

        CompanyOccupation::create(['code'=>'761348','title'=>'Operador de engomadeira de urdume','filter'=>'operador de engomadeira de urdume',]);

        CompanyOccupation::create(['code'=>'761351','title'=>'Operador de espuladeira','filter'=>'operador de espuladeira',]);

        CompanyOccupation::create(['code'=>'761354','title'=>'Operador de máquina de cordoalha','filter'=>'operador de máquina de cordoalha',]);

        CompanyOccupation::create(['code'=>'761357','title'=>'Operador de urdideira','filter'=>'operador de urdideira',]);

        CompanyOccupation::create(['code'=>'761360','title'=>'Passamaneiro a máquina','filter'=>'passamaneiro a máquina',]);

        CompanyOccupation::create(['code'=>'761363','title'=>'Remetedor de fios','filter'=>'remetedor de fios',]);

        CompanyOccupation::create(['code'=>'761366','title'=>'Picotador de cartões jacquard','filter'=>'picotador de cartões jacquard',]);

        CompanyOccupation::create(['code'=>'761405','title'=>'Alvejador (tecidos)','filter'=>'alvejador (tecidos)',]);

        CompanyOccupation::create(['code'=>'761410','title'=>'Estampador de tecido','filter'=>'estampador de tecido',]);

        CompanyOccupation::create(['code'=>'761415','title'=>'Operador de calandras (tecidos)','filter'=>'operador de calandras (tecidos)',]);

        CompanyOccupation::create(['code'=>'761420','title'=>'Operador de chamuscadeira de tecidos','filter'=>'operador de chamuscadeira de tecidos',]);

        CompanyOccupation::create(['code'=>'761425','title'=>'Operador de impermeabilizador de tecidos','filter'=>'operador de impermeabilizador de tecidos',]);

        CompanyOccupation::create(['code'=>'761430','title'=>'Operador de máquina de lavar fios e tecidos','filter'=>'operador de máquina de lavar fios e tecidos',]);

        CompanyOccupation::create(['code'=>'761435','title'=>'Operador de rameuse','filter'=>'operador de rameuse',]);

        CompanyOccupation::create(['code'=>'761805','title'=>'Inspetor de estamparia (produção têxtil)','filter'=>'inspetor de estamparia (produção têxtil)',]);

        CompanyOccupation::create(['code'=>'761810','title'=>'Revisor de fios (produção têxtil)','filter'=>'revisor de fios (produção têxtil)',]);

        CompanyOccupation::create(['code'=>'761815','title'=>'Revisor de tecidos acabados','filter'=>'revisor de tecidos acabados',]);

        CompanyOccupation::create(['code'=>'761820','title'=>'Revisor de tecidos crus','filter'=>'revisor de tecidos crus',]);

        CompanyOccupation::create(['code'=>'762005','title'=>'Trabalhador polivalente do curtimento de couros e peles','filter'=>'trabalhador polivalente do curtimento de couros e peles',]);

        CompanyOccupation::create(['code'=>'762105','title'=>'Classificador de peles','filter'=>'classificador de peles',]);

        CompanyOccupation::create(['code'=>'762110','title'=>'Descarnador de couros e peles, à maquina','filter'=>'descarnador de couros e peles, à maquina',]);

        CompanyOccupation::create(['code'=>'762115','title'=>'Estirador de couros e peles (preparação)','filter'=>'estirador de couros e peles (preparação)',]);

        CompanyOccupation::create(['code'=>'762120','title'=>'Fuloneiro','filter'=>'fuloneiro',]);

        CompanyOccupation::create(['code'=>'762125','title'=>'Rachador de couros e peles','filter'=>'rachador de couros e peles',]);

        CompanyOccupation::create(['code'=>'762205','title'=>'Curtidor (couros e peles)','filter'=>'curtidor (couros e peles)',]);

        CompanyOccupation::create(['code'=>'762210','title'=>'Classificador de couros','filter'=>'classificador de couros',]);

        CompanyOccupation::create(['code'=>'762215','title'=>'Enxugador de couros','filter'=>'enxugador de couros',]);

        CompanyOccupation::create(['code'=>'762220','title'=>'Rebaixador de couros','filter'=>'rebaixador de couros',]);

        CompanyOccupation::create(['code'=>'762305','title'=>'Estirador de couros e peles (acabamento)','filter'=>'estirador de couros e peles (acabamento)',]);

        CompanyOccupation::create(['code'=>'762310','title'=>'Fuloneiro no acabamento de couros e peles','filter'=>'fuloneiro no acabamento de couros e peles',]);

        CompanyOccupation::create(['code'=>'762315','title'=>'Lixador de couros e peles','filter'=>'lixador de couros e peles',]);

        CompanyOccupation::create(['code'=>'762320','title'=>'Matizador de couros e peles','filter'=>'matizador de couros e peles',]);

        CompanyOccupation::create(['code'=>'762325','title'=>'Operador de máquinas do acabamento de couros e peles','filter'=>'operador de máquinas do acabamento de couros e peles',]);

        CompanyOccupation::create(['code'=>'762330','title'=>'Prensador de couros e peles','filter'=>'prensador de couros e peles',]);

        CompanyOccupation::create(['code'=>'762335','title'=>'Palecionador de couros e peles','filter'=>'palecionador de couros e peles',]);

        CompanyOccupation::create(['code'=>'762340','title'=>'Preparador de couros curtidos','filter'=>'preparador de couros curtidos',]);

        CompanyOccupation::create(['code'=>'762345','title'=>'Vaqueador de couros e peles','filter'=>'vaqueador de couros e peles',]);

        CompanyOccupation::create(['code'=>'763005','title'=>'Alfaiate','filter'=>'alfaiate',]);

        CompanyOccupation::create(['code'=>'763010','title'=>'Costureira de peças sob encomenda','filter'=>'costureira de peças sob encomenda',]);

        CompanyOccupation::create(['code'=>'763015','title'=>'Costureira de reparação de roupas','filter'=>'costureira de reparação de roupas',]);

        CompanyOccupation::create(['code'=>'763020','title'=>'Costureiro de roupa de couro e pele','filter'=>'costureiro de roupa de couro e pele',]);

        CompanyOccupation::create(['code'=>'763105','title'=>'Auxiliar de corte (preparação da confecção de roupas)','filter'=>'auxiliar de corte (preparação da confecção de roupas)',]);

        CompanyOccupation::create(['code'=>'763110','title'=>'Cortador de roupas','filter'=>'cortador de roupas',]);

        CompanyOccupation::create(['code'=>'763115','title'=>'Enfestador de roupas','filter'=>'enfestador de roupas',]);

        CompanyOccupation::create(['code'=>'763120','title'=>'Riscador de roupas','filter'=>'riscador de roupas',]);

        CompanyOccupation::create(['code'=>'763125','title'=>'Ajudante de confecção','filter'=>'ajudante de confecção',]);

        CompanyOccupation::create(['code'=>'763205','title'=>'Costureiro de roupas de couro e pele, a máquina na confecção em série','filter'=>'costureiro de roupas de couro e pele, a máquina na confecção em série',]);

        CompanyOccupation::create(['code'=>'763210','title'=>'Costureiro na confecção em série','filter'=>'costureiro na confecção em série',]);

        CompanyOccupation::create(['code'=>'763215','title'=>'Costureiro, a máquina na confecção em série','filter'=>'costureiro, a máquina na confecção em série',]);

        CompanyOccupation::create(['code'=>'763305','title'=>'Arrematadeira','filter'=>'arrematadeira',]);

        CompanyOccupation::create(['code'=>'763310','title'=>'Bordador, à máquina','filter'=>'bordador, à máquina',]);

        CompanyOccupation::create(['code'=>'763315','title'=>'Marcador de peças confeccionadas para bordar','filter'=>'marcador de peças confeccionadas para bordar',]);

        CompanyOccupation::create(['code'=>'763320','title'=>'Operador de máquina de costura de acabamento','filter'=>'operador de máquina de costura de acabamento',]);

        CompanyOccupation::create(['code'=>'763325','title'=>'Passadeira de peças confeccionadas','filter'=>'passadeira de peças confeccionadas',]);

        CompanyOccupation::create(['code'=>'764005','title'=>'Trabalhador polivalente da confecção de calçados','filter'=>'trabalhador polivalente da confecção de calçados',]);

        CompanyOccupation::create(['code'=>'764105','title'=>'Cortador de calçados, a máquina (exceto solas e palmilhas)','filter'=>'cortador de calçados, a máquina (exceto solas e palmilhas)',]);

        CompanyOccupation::create(['code'=>'764110','title'=>'Cortador de solas e palmilhas, a máquina','filter'=>'cortador de solas e palmilhas, a máquina',]);

        CompanyOccupation::create(['code'=>'764115','title'=>'Preparador de calçados','filter'=>'preparador de calçados',]);

        CompanyOccupation::create(['code'=>'764120','title'=>'Preparador de solas e palmilhas','filter'=>'preparador de solas e palmilhas',]);

        CompanyOccupation::create(['code'=>'764205','title'=>'Costurador de calçados, a máquina','filter'=>'costurador de calçados, a máquina',]);

        CompanyOccupation::create(['code'=>'764210','title'=>'Montador de calçados','filter'=>'montador de calçados',]);

        CompanyOccupation::create(['code'=>'764305','title'=>'Acabador de calçados','filter'=>'acabador de calçados',]);

        CompanyOccupation::create(['code'=>'765005','title'=>'Confeccionador de artefatos de couro (exceto sapatos)','filter'=>'confeccionador de artefatos de couro (exceto sapatos)',]);

        CompanyOccupation::create(['code'=>'765010','title'=>'Chapeleiro de senhoras','filter'=>'chapeleiro de senhoras',]);

        CompanyOccupation::create(['code'=>'765015','title'=>'Boneleiro','filter'=>'boneleiro',]);

        CompanyOccupation::create(['code'=>'765105','title'=>'Cortador de artefatos de couro (exceto roupas e calçados)','filter'=>'cortador de artefatos de couro (exceto roupas e calçados)',]);

        CompanyOccupation::create(['code'=>'765110','title'=>'Cortador de tapeçaria','filter'=>'cortador de tapeçaria',]);

        CompanyOccupation::create(['code'=>'765205','title'=>'Colchoeiro (confecção de colchões)','filter'=>'colchoeiro (confecção de colchões)',]);

        CompanyOccupation::create(['code'=>'765215','title'=>'Confeccionador de brinquedos de pano','filter'=>'confeccionador de brinquedos de pano',]);

        CompanyOccupation::create(['code'=>'765225','title'=>'Confeccionador de velas náuticas, barracas e toldos','filter'=>'confeccionador de velas náuticas, barracas e toldos',]);

        CompanyOccupation::create(['code'=>'765230','title'=>'Estofador de aviões','filter'=>'estofador de aviões',]);

        CompanyOccupation::create(['code'=>'765235','title'=>'Estofador de móveis','filter'=>'estofador de móveis',]);

        CompanyOccupation::create(['code'=>'765240','title'=>'Tapeceiro de autos','filter'=>'tapeceiro de autos',]);

        CompanyOccupation::create(['code'=>'765310','title'=>'Costurador de artefatos de couro, a máquina (exceto roupas e calçados)','filter'=>'costurador de artefatos de couro, a máquina (exceto roupas e calçados)',]);

        CompanyOccupation::create(['code'=>'765315','title'=>'Montador de artefatos de couro (exceto roupas e calçados)','filter'=>'montador de artefatos de couro (exceto roupas e calçados)',]);

        CompanyOccupation::create(['code'=>'765405','title'=>'Trabalhador do acabamento de artefatos de tecidos e couros','filter'=>'trabalhador do acabamento de artefatos de tecidos e couros',]);

        CompanyOccupation::create(['code'=>'766105','title'=>'Copiador de chapa','filter'=>'copiador de chapa',]);

        CompanyOccupation::create(['code'=>'766115','title'=>'Gravador de matriz para flexografia (clicherista)','filter'=>'gravador de matriz para flexografia (clicherista)',]);

        CompanyOccupation::create(['code'=>'766120','title'=>'Editor de texto e imagem','filter'=>'editor de texto e imagem',]);

        CompanyOccupation::create(['code'=>'766125','title'=>'Montador de fotolito (analógico e digital)','filter'=>'montador de fotolito (analógico e digital)',]);

        CompanyOccupation::create(['code'=>'766130','title'=>'Gravador de matriz para rotogravura (eletromecânico e químico)','filter'=>'gravador de matriz para rotogravura (eletromecânico e químico)',]);

        CompanyOccupation::create(['code'=>'766135','title'=>'Gravador de matriz calcográfica','filter'=>'gravador de matriz calcográfica',]);

        CompanyOccupation::create(['code'=>'766140','title'=>'Gravador de matriz serigráfica','filter'=>'gravador de matriz serigráfica',]);

        CompanyOccupation::create(['code'=>'766145','title'=>'Operador de sistemas de prova (analógico e digital)','filter'=>'operador de sistemas de prova (analógico e digital)',]);

        CompanyOccupation::create(['code'=>'766150','title'=>'Operador de processo de tratamento de imagem','filter'=>'operador de processo de tratamento de imagem',]);

        CompanyOccupation::create(['code'=>'766155','title'=>'Programador visual gráfico','filter'=>'programador visual gráfico',]);

        CompanyOccupation::create(['code'=>'766205','title'=>'Impressor (serigrafia)','filter'=>'impressor (serigrafia)',]);

        CompanyOccupation::create(['code'=>'766210','title'=>'Impressor calcográfico','filter'=>'impressor calcográfico',]);

        CompanyOccupation::create(['code'=>'766215','title'=>'Impressor de ofsete (plano e rotativo)','filter'=>'impressor de ofsete (plano e rotativo)',]);

        CompanyOccupation::create(['code'=>'766220','title'=>'Impressor de rotativa','filter'=>'impressor de rotativa',]);

        CompanyOccupation::create(['code'=>'766225','title'=>'Impressor de rotogravura','filter'=>'impressor de rotogravura',]);

        CompanyOccupation::create(['code'=>'766230','title'=>'Impressor digital','filter'=>'impressor digital',]);

        CompanyOccupation::create(['code'=>'766235','title'=>'Impressor flexográfico','filter'=>'impressor flexográfico',]);

        CompanyOccupation::create(['code'=>'766240','title'=>'Impressor letterset','filter'=>'impressor letterset',]);

        CompanyOccupation::create(['code'=>'766245','title'=>'Impressor tampográfico','filter'=>'impressor tampográfico',]);

        CompanyOccupation::create(['code'=>'766250','title'=>'Impressor tipográfico','filter'=>'impressor tipográfico',]);

        CompanyOccupation::create(['code'=>'766305','title'=>'Acabador de embalagens (flexíveis e cartotécnicas)','filter'=>'acabador de embalagens (flexíveis e cartotécnicas)',]);

        CompanyOccupation::create(['code'=>'766310','title'=>'Impressor de corte e vinco','filter'=>'impressor de corte e vinco',]);

        CompanyOccupation::create(['code'=>'766315','title'=>'Operador de acabamento (indústria gráfica)','filter'=>'operador de acabamento (indústria gráfica)',]);

        CompanyOccupation::create(['code'=>'766320','title'=>'Operador de guilhotina (corte de papel)','filter'=>'operador de guilhotina (corte de papel)',]);

        CompanyOccupation::create(['code'=>'766325','title'=>'Preparador de matrizes de corte e vinco','filter'=>'preparador de matrizes de corte e vinco',]);

        CompanyOccupation::create(['code'=>'766405','title'=>'Laboratorista fotográfico','filter'=>'laboratorista fotográfico',]);

        CompanyOccupation::create(['code'=>'766410','title'=>'Revelador de filmes fotográficos, em preto e branco','filter'=>'revelador de filmes fotográficos, em preto e branco',]);

        CompanyOccupation::create(['code'=>'766415','title'=>'Revelador de filmes fotográficos, em cores','filter'=>'revelador de filmes fotográficos, em cores',]);

        CompanyOccupation::create(['code'=>'766420','title'=>'Auxiliar de radiologia (revelação fotográfica)','filter'=>'auxiliar de radiologia (revelação fotográfica)',]);

        CompanyOccupation::create(['code'=>'768105','title'=>'Tecelão (tear manual)','filter'=>'tecelão (tear manual)',]);

        CompanyOccupation::create(['code'=>'768110','title'=>'Tecelão de tapetes, a mão','filter'=>'tecelão de tapetes, a mão',]);

        CompanyOccupation::create(['code'=>'768115','title'=>'Tricoteiro, à mão','filter'=>'tricoteiro, à mão',]);

        CompanyOccupation::create(['code'=>'768120','title'=>'Redeiro','filter'=>'redeiro',]);

        CompanyOccupation::create(['code'=>'768125','title'=>'Chapeleiro (chapéus de palha)','filter'=>'chapeleiro (chapéus de palha)',]);

        CompanyOccupation::create(['code'=>'768130','title'=>'Crocheteiro, a mão','filter'=>'crocheteiro, a mão',]);

        CompanyOccupation::create(['code'=>'768205','title'=>'Bordador, a mão','filter'=>'bordador, a mão',]);

        CompanyOccupation::create(['code'=>'768210','title'=>'Cerzidor','filter'=>'cerzidor',]);

        CompanyOccupation::create(['code'=>'768305','title'=>'Artífice do couro','filter'=>'artífice do couro',]);

        CompanyOccupation::create(['code'=>'768310','title'=>'Cortador de calçados, a mão (exceto solas)','filter'=>'cortador de calçados, a mão (exceto solas)',]);

        CompanyOccupation::create(['code'=>'768315','title'=>'Costurador de artefatos de couro, a mão (exceto roupas e calçados)','filter'=>'costurador de artefatos de couro, a mão (exceto roupas e calçados)',]);

        CompanyOccupation::create(['code'=>'768320','title'=>'Sapateiro (calçados sob medida)','filter'=>'sapateiro (calçados sob medida)',]);

        CompanyOccupation::create(['code'=>'768325','title'=>'Seleiro','filter'=>'seleiro',]);

        CompanyOccupation::create(['code'=>'768605','title'=>'Tipógrafo','filter'=>'tipógrafo',]);

        CompanyOccupation::create(['code'=>'768610','title'=>'Linotipista','filter'=>'linotipista',]);

        CompanyOccupation::create(['code'=>'768615','title'=>'Monotipista','filter'=>'monotipista',]);

        CompanyOccupation::create(['code'=>'768620','title'=>'Paginador','filter'=>'paginador',]);

        CompanyOccupation::create(['code'=>'768625','title'=>'Pintor de letreiros','filter'=>'pintor de letreiros',]);

        CompanyOccupation::create(['code'=>'768630','title'=>'Confeccionador de carimbos de borracha','filter'=>'confeccionador de carimbos de borracha',]);

        CompanyOccupation::create(['code'=>'768705','title'=>'Gravador, à mão (encadernação)','filter'=>'gravador, à mão (encadernação)',]);

        CompanyOccupation::create(['code'=>'768710','title'=>'Restaurador de livros','filter'=>'restaurador de livros',]);

        CompanyOccupation::create(['code'=>'770105','title'=>'Mestre (indústria de madeira e mobiliário)','filter'=>'mestre (indústria de madeira e mobiliário)',]);

        CompanyOccupation::create(['code'=>'770110','title'=>'Mestre carpinteiro','filter'=>'mestre carpinteiro',]);

        CompanyOccupation::create(['code'=>'771105','title'=>'Marceneiro','filter'=>'marceneiro',]);

        CompanyOccupation::create(['code'=>'771110','title'=>'Modelador de madeira','filter'=>'modelador de madeira',]);

        CompanyOccupation::create(['code'=>'771115','title'=>'Maquetista na marcenaria','filter'=>'maquetista na marcenaria',]);

        CompanyOccupation::create(['code'=>'771120','title'=>'Tanoeiro','filter'=>'tanoeiro',]);

        CompanyOccupation::create(['code'=>'772105','title'=>'Classificador de madeira','filter'=>'classificador de madeira',]);

        CompanyOccupation::create(['code'=>'772110','title'=>'Impregnador de madeira','filter'=>'impregnador de madeira',]);

        CompanyOccupation::create(['code'=>'772115','title'=>'Secador de madeira','filter'=>'secador de madeira',]);

        CompanyOccupation::create(['code'=>'773105','title'=>'Cortador de laminados de madeira','filter'=>'cortador de laminados de madeira',]);

        CompanyOccupation::create(['code'=>'773110','title'=>'Operador de serras no desdobramento de madeira','filter'=>'operador de serras no desdobramento de madeira',]);

        CompanyOccupation::create(['code'=>'773115','title'=>'Serrador de bordas no desdobramento de madeira','filter'=>'serrador de bordas no desdobramento de madeira',]);

        CompanyOccupation::create(['code'=>'773120','title'=>'Serrador de madeira','filter'=>'serrador de madeira',]);

        CompanyOccupation::create(['code'=>'773125','title'=>'Serrador de madeira (serra circular múltipla)','filter'=>'serrador de madeira (serra circular múltipla)',]);

        CompanyOccupation::create(['code'=>'773130','title'=>'Serrador de madeira (serra de fita múltipla)','filter'=>'serrador de madeira (serra de fita múltipla)',]);

        CompanyOccupation::create(['code'=>'773205','title'=>'Operador de máquina intercaladora de placas (compensados)','filter'=>'operador de máquina intercaladora de placas (compensados)',]);

        CompanyOccupation::create(['code'=>'773210','title'=>'Prensista de aglomerados','filter'=>'prensista de aglomerados',]);

        CompanyOccupation::create(['code'=>'773215','title'=>'Prensista de compensados','filter'=>'prensista de compensados',]);

        CompanyOccupation::create(['code'=>'773220','title'=>'Preparador de aglomerantes','filter'=>'preparador de aglomerantes',]);

        CompanyOccupation::create(['code'=>'773305','title'=>'Operador de desempenadeira na usinagem convencional de madeira','filter'=>'operador de desempenadeira na usinagem convencional de madeira',]);

        CompanyOccupation::create(['code'=>'773310','title'=>'Operador de entalhadeira (usinagem de madeira)','filter'=>'operador de entalhadeira (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773315','title'=>'Operador de fresadora (usinagem de madeira)','filter'=>'operador de fresadora (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773320','title'=>'Operador de lixadeira (usinagem de madeira)','filter'=>'operador de lixadeira (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773325','title'=>'Operador de máquina de usinagem madeira, em geral','filter'=>'operador de máquina de usinagem madeira, em geral',]);

        CompanyOccupation::create(['code'=>'773330','title'=>'Operador de molduradora (usinagem de madeira)','filter'=>'operador de molduradora (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773335','title'=>'Operador de plaina desengrossadeira','filter'=>'operador de plaina desengrossadeira',]);

        CompanyOccupation::create(['code'=>'773340','title'=>'Operador de serras (usinagem de madeira)','filter'=>'operador de serras (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773345','title'=>'Operador de torno automático (usinagem de madeira)','filter'=>'operador de torno automático (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773350','title'=>'Operador de tupia (usinagem de madeira)','filter'=>'operador de tupia (usinagem de madeira)',]);

        CompanyOccupation::create(['code'=>'773355','title'=>'Torneiro na usinagem convencional de madeira','filter'=>'torneiro na usinagem convencional de madeira',]);

        CompanyOccupation::create(['code'=>'773405','title'=>'Operador de máquina bordatriz','filter'=>'operador de máquina bordatriz',]);

        CompanyOccupation::create(['code'=>'773410','title'=>'Operador de máquina de cortina d´água (produção de móveis)','filter'=>'operador de máquina de cortina d´água (produção de móveis)',]);

        CompanyOccupation::create(['code'=>'773415','title'=>'Operador de máquina de usinagem de madeira (produção em série)','filter'=>'operador de máquina de usinagem de madeira (produção em série)',]);

        CompanyOccupation::create(['code'=>'773420','title'=>'Operador de prensa de alta freqüência na usinagem de madeira','filter'=>'operador de prensa de alta freqüência na usinagem de madeira',]);

        CompanyOccupation::create(['code'=>'773505','title'=>'Operador de centro de usinagem de madeira (cnc)','filter'=>'operador de centro de usinagem de madeira (cnc)',]);

        CompanyOccupation::create(['code'=>'773510','title'=>'Operador de máquinas de usinar madeira (cnc)','filter'=>'operador de máquinas de usinar madeira (cnc)',]);

        CompanyOccupation::create(['code'=>'774105','title'=>'Montador de móveis e artefatos de madeira','filter'=>'montador de móveis e artefatos de madeira',]);

        CompanyOccupation::create(['code'=>'775105','title'=>'Entalhador de madeira','filter'=>'entalhador de madeira',]);

        CompanyOccupation::create(['code'=>'775110','title'=>'Folheador de móveis de madeira','filter'=>'folheador de móveis de madeira',]);

        CompanyOccupation::create(['code'=>'775115','title'=>'Lustrador de peças de madeira','filter'=>'lustrador de peças de madeira',]);

        CompanyOccupation::create(['code'=>'775120','title'=>'Marcheteiro','filter'=>'marcheteiro',]);

        CompanyOccupation::create(['code'=>'776405','title'=>'Cesteiro','filter'=>'cesteiro',]);

        CompanyOccupation::create(['code'=>'776410','title'=>'Confeccionador de escovas, pincéis e produtos similares (a mão)','filter'=>'confeccionador de escovas, pincéis e produtos similares (a mão)',]);

        CompanyOccupation::create(['code'=>'776415','title'=>'Confeccionador de escovas, pincéis e produtos similares (a máquina)','filter'=>'confeccionador de escovas, pincéis e produtos similares (a máquina)',]);

        CompanyOccupation::create(['code'=>'776420','title'=>'Confeccionador de móveis de vime, junco e bambu','filter'=>'confeccionador de móveis de vime, junco e bambu',]);

        CompanyOccupation::create(['code'=>'776425','title'=>'Esteireiro','filter'=>'esteireiro',]);

        CompanyOccupation::create(['code'=>'776430','title'=>'Vassoureiro','filter'=>'vassoureiro',]);

        CompanyOccupation::create(['code'=>'777105','title'=>'Carpinteiro naval (construção de pequenas embarcações)','filter'=>'carpinteiro naval (construção de pequenas embarcações)',]);

        CompanyOccupation::create(['code'=>'777110','title'=>'Carpinteiro naval (embarcações)','filter'=>'carpinteiro naval (embarcações)',]);

        CompanyOccupation::create(['code'=>'777115','title'=>'Carpinteiro naval (estaleiros)','filter'=>'carpinteiro naval (estaleiros)',]);

        CompanyOccupation::create(['code'=>'777205','title'=>'Carpinteiro de carretas','filter'=>'carpinteiro de carretas',]);

        CompanyOccupation::create(['code'=>'777210','title'=>'Carpinteiro de carrocerias','filter'=>'carpinteiro de carrocerias',]);

        CompanyOccupation::create(['code'=>'780105','title'=>'Supervisor de embalagem e etiquetagem','filter'=>'supervisor de embalagem e etiquetagem',]);

        CompanyOccupation::create(['code'=>'781105','title'=>'Condutor de processos robotizados de pintura','filter'=>'condutor de processos robotizados de pintura',]);

        CompanyOccupation::create(['code'=>'781110','title'=>'Condutor de processos robotizados de soldagem','filter'=>'condutor de processos robotizados de soldagem',]);

        CompanyOccupation::create(['code'=>'781305','title'=>'Operador de veículos subaquáticos controlados remotamente','filter'=>'operador de veículos subaquáticos controlados remotamente',]);

        CompanyOccupation::create(['code'=>'781310','title'=>'Operador de aeronaves não tripuladas','filter'=>'operador de aeronaves não tripuladas',]);

        CompanyOccupation::create(['code'=>'781705','title'=>'Mergulhador profissional (raso e profundo)','filter'=>'mergulhador profissional (raso e profundo)',]);

        CompanyOccupation::create(['code'=>'782105','title'=>'Operador de draga','filter'=>'operador de draga',]);

        CompanyOccupation::create(['code'=>'782110','title'=>'Operador de guindaste (fixo)','filter'=>'operador de guindaste (fixo)',]);

        CompanyOccupation::create(['code'=>'782115','title'=>'Operador de guindaste móvel','filter'=>'operador de guindaste móvel',]);

        CompanyOccupation::create(['code'=>'782120','title'=>'Operador de máquina rodoferroviária','filter'=>'operador de máquina rodoferroviária',]);

        CompanyOccupation::create(['code'=>'782125','title'=>'Operador de monta-cargas (construção civil)','filter'=>'operador de monta-cargas (construção civil)',]);

        CompanyOccupation::create(['code'=>'782130','title'=>'Operador de ponte rolante','filter'=>'operador de ponte rolante',]);

        CompanyOccupation::create(['code'=>'782135','title'=>'Operador de pórtico rolante','filter'=>'operador de pórtico rolante',]);

        CompanyOccupation::create(['code'=>'782140','title'=>'Operador de talha elétrica','filter'=>'operador de talha elétrica',]);

        CompanyOccupation::create(['code'=>'782145','title'=>'Sinaleiro (ponte-rolante)','filter'=>'sinaleiro (ponte-rolante)',]);

        CompanyOccupation::create(['code'=>'782205','title'=>'Guincheiro (construção civil)','filter'=>'guincheiro (construção civil)',]);

        CompanyOccupation::create(['code'=>'782210','title'=>'Operador de docagem','filter'=>'operador de docagem',]);

        CompanyOccupation::create(['code'=>'782220','title'=>'Operador de empilhadeira','filter'=>'operador de empilhadeira',]);

        CompanyOccupation::create(['code'=>'782305','title'=>'Motorista de carro de passeio','filter'=>'motorista de carro de passeio',]);

        CompanyOccupation::create(['code'=>'782310','title'=>'Motorista de furgão ou veículo similar','filter'=>'motorista de furgão ou veículo similar',]);

        CompanyOccupation::create(['code'=>'782315','title'=>'Motorista de táxi','filter'=>'motorista de táxi',]);

        CompanyOccupation::create(['code'=>'782320','title'=>'Condutor de ambulância','filter'=>'condutor de ambulância',]);

        CompanyOccupation::create(['code'=>'782405','title'=>'Motorista de ônibus rodoviário','filter'=>'motorista de ônibus rodoviário',]);

        CompanyOccupation::create(['code'=>'782410','title'=>'Motorista de ônibus urbano','filter'=>'motorista de ônibus urbano',]);

        CompanyOccupation::create(['code'=>'782415','title'=>'Motorista de trólebus','filter'=>'motorista de trólebus',]);

        CompanyOccupation::create(['code'=>'782505','title'=>'Caminhoneiro autônomo (rotas regionais e internacionais)','filter'=>'caminhoneiro autônomo (rotas regionais e internacionais)',]);

        CompanyOccupation::create(['code'=>'782510','title'=>'Motorista de caminhão (rotas regionais e internacionais)','filter'=>'motorista de caminhão (rotas regionais e internacionais)',]);

        CompanyOccupation::create(['code'=>'782515','title'=>'Motorista operacional de guincho','filter'=>'motorista operacional de guincho',]);

        CompanyOccupation::create(['code'=>'782605','title'=>'Operador de trem de metrô','filter'=>'operador de trem de metrô',]);

        CompanyOccupation::create(['code'=>'782610','title'=>'Maquinista de trem','filter'=>'maquinista de trem',]);

        CompanyOccupation::create(['code'=>'782615','title'=>'Maquinista de trem metropolitano','filter'=>'maquinista de trem metropolitano',]);

        CompanyOccupation::create(['code'=>'782620','title'=>'Motorneiro','filter'=>'motorneiro',]);

        CompanyOccupation::create(['code'=>'782625','title'=>'Auxiliar de maquinista de trem','filter'=>'auxiliar de maquinista de trem',]);

        CompanyOccupation::create(['code'=>'782630','title'=>'Operador de teleférico (passageiros)','filter'=>'operador de teleférico (passageiros)',]);

        CompanyOccupation::create(['code'=>'782705','title'=>'Marinheiro de convés (marítimo e fluviário)','filter'=>'marinheiro de convés (marítimo e fluviário)',]);

        CompanyOccupation::create(['code'=>'782710','title'=>'Marinheiro de máquinas','filter'=>'marinheiro de máquinas',]);

        CompanyOccupation::create(['code'=>'782715','title'=>'Moço de convés (marítimo e fluviário)','filter'=>'moço de convés (marítimo e fluviário)',]);

        CompanyOccupation::create(['code'=>'782720','title'=>'Moço de máquinas (marítimo e fluviário)','filter'=>'moço de máquinas (marítimo e fluviário)',]);

        CompanyOccupation::create(['code'=>'782725','title'=>'Marinheiro de esporte e recreio','filter'=>'marinheiro de esporte e recreio',]);

        CompanyOccupation::create(['code'=>'782730','title'=>'Marinheiro auxiliar de convés (marítimo e aquaviario)','filter'=>'marinheiro auxiliar de convés (marítimo e aquaviario)',]);

        CompanyOccupation::create(['code'=>'782735','title'=>'Marinheiro auxiliar de máquinas (marítimo e aquaviário)','filter'=>'marinheiro auxiliar de máquinas (marítimo e aquaviário)',]);

        CompanyOccupation::create(['code'=>'782805','title'=>'Condutor de veículos de tração animal (ruas e estradas)','filter'=>'condutor de veículos de tração animal (ruas e estradas)',]);

        CompanyOccupation::create(['code'=>'782810','title'=>'Tropeiro','filter'=>'tropeiro',]);

        CompanyOccupation::create(['code'=>'782815','title'=>'Boiadeiro','filter'=>'boiadeiro',]);

        CompanyOccupation::create(['code'=>'782820','title'=>'Condutor de veículos a pedais','filter'=>'condutor de veículos a pedais',]);

        CompanyOccupation::create(['code'=>'783105','title'=>'Agente de pátio','filter'=>'agente de pátio',]);

        CompanyOccupation::create(['code'=>'783110','title'=>'Manobrador','filter'=>'manobrador',]);

        CompanyOccupation::create(['code'=>'783205','title'=>'Carregador (aeronaves)','filter'=>'carregador (aeronaves)',]);

        CompanyOccupation::create(['code'=>'783210','title'=>'Carregador (armazém)','filter'=>'carregador (armazém)',]);

        CompanyOccupation::create(['code'=>'783215','title'=>'Carregador (veículos de transportes terrestres)','filter'=>'carregador (veículos de transportes terrestres)',]);

        CompanyOccupation::create(['code'=>'783220','title'=>'Estivador','filter'=>'estivador',]);

        CompanyOccupation::create(['code'=>'783225','title'=>'Ajudante de motorista','filter'=>'ajudante de motorista',]);

        CompanyOccupation::create(['code'=>'783230','title'=>'Bloqueiro (trabalhador portuário)','filter'=>'bloqueiro (trabalhador portuário)',]);

        CompanyOccupation::create(['code'=>'783235','title'=>'Trabalhador portuário de capatazia','filter'=>'trabalhador portuário de capatazia',]);

        CompanyOccupation::create(['code'=>'783240','title'=>'Amarrador e desamarrado de embarcações','filter'=>'amarrador e desamarrado de embarcações',]);

        CompanyOccupation::create(['code'=>'784105','title'=>'Embalador, a mão','filter'=>'embalador, a mão',]);

        CompanyOccupation::create(['code'=>'784110','title'=>'Embalador, a máquina','filter'=>'embalador, a máquina',]);

        CompanyOccupation::create(['code'=>'784115','title'=>'Operador de máquina de etiquetar','filter'=>'operador de máquina de etiquetar',]);

        CompanyOccupation::create(['code'=>'784120','title'=>'Operador de máquina de envasar líquidos','filter'=>'operador de máquina de envasar líquidos',]);

        CompanyOccupation::create(['code'=>'784125','title'=>'Operador de prensa de enfardamento','filter'=>'operador de prensa de enfardamento',]);

        CompanyOccupation::create(['code'=>'784205','title'=>'Alimentador de linha de produção','filter'=>'alimentador de linha de produção',]);

        CompanyOccupation::create(['code'=>'791105','title'=>'Artesão bordador','filter'=>'artesão bordador',]);

        CompanyOccupation::create(['code'=>'791110','title'=>'Artesão ceramista','filter'=>'artesão ceramista',]);

        CompanyOccupation::create(['code'=>'791115','title'=>'Artesão com material reciclável','filter'=>'artesão com material reciclável',]);

        CompanyOccupation::create(['code'=>'791120','title'=>'Artesão confeccionador de biojóias e ecojóias','filter'=>'artesão confeccionador de biojóias e ecojóias',]);

        CompanyOccupation::create(['code'=>'791125','title'=>'Artesão do couro','filter'=>'artesão do couro',]);

        CompanyOccupation::create(['code'=>'791130','title'=>'Artesão escultor','filter'=>'artesão escultor',]);

        CompanyOccupation::create(['code'=>'791135','title'=>'Artesão moveleiro (exceto reciclado)','filter'=>'artesão moveleiro (exceto reciclado)',]);

        CompanyOccupation::create(['code'=>'791140','title'=>'Artesão tecelão','filter'=>'artesão tecelão',]);

        CompanyOccupation::create(['code'=>'791145','title'=>'Artesão trançador','filter'=>'artesão trançador',]);

        CompanyOccupation::create(['code'=>'791150','title'=>'Artesão crocheteiro','filter'=>'artesão crocheteiro',]);

        CompanyOccupation::create(['code'=>'791155','title'=>'Artesão tricoteiro','filter'=>'artesão tricoteiro',]);

        CompanyOccupation::create(['code'=>'791160','title'=>'Artesão rendeiro','filter'=>'artesão rendeiro',]);

        CompanyOccupation::create(['code'=>'810105','title'=>'Mestre (indústria petroquímica e carboquímica)','filter'=>'mestre (indústria petroquímica e carboquímica)',]);

        CompanyOccupation::create(['code'=>'810110','title'=>'Mestre de produção química','filter'=>'mestre de produção química',]);

        CompanyOccupation::create(['code'=>'810205','title'=>'Mestre (indústria de borracha e plástico)','filter'=>'mestre (indústria de borracha e plástico)',]);

        CompanyOccupation::create(['code'=>'810305','title'=>'Mestre de produção farmacêutica','filter'=>'mestre de produção farmacêutica',]);

        CompanyOccupation::create(['code'=>'811005','title'=>'Operador de processos químicos e petroquímicos','filter'=>'operador de processos químicos e petroquímicos',]);

        CompanyOccupation::create(['code'=>'811010','title'=>'Operador de sala de controle de instalações químicas, petroquímicas e afins','filter'=>'operador de sala de controle de instalações químicas, petroquímicas e afins',]);

        CompanyOccupation::create(['code'=>'811105','title'=>'Moleiro (tratamentos químicos e afins)','filter'=>'moleiro (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811110','title'=>'Operador de máquina misturadeira (tratamentos químicos e afins)','filter'=>'operador de máquina misturadeira (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811115','title'=>'Operador de britadeira (tratamentos químicos e afins)','filter'=>'operador de britadeira (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811120','title'=>'Operador de concentração','filter'=>'operador de concentração',]);

        CompanyOccupation::create(['code'=>'811125','title'=>'Trabalhador da fabricação de resinas e vernizes','filter'=>'trabalhador da fabricação de resinas e vernizes',]);

        CompanyOccupation::create(['code'=>'811130','title'=>'Trabalhador de fabricação de tintas','filter'=>'trabalhador de fabricação de tintas',]);

        CompanyOccupation::create(['code'=>'811205','title'=>'Operador de calcinação (tratamento químico e afins)','filter'=>'operador de calcinação (tratamento químico e afins)',]);

        CompanyOccupation::create(['code'=>'811215','title'=>'Operador de tratamento químico de materiais radioativos','filter'=>'operador de tratamento químico de materiais radioativos',]);

        CompanyOccupation::create(['code'=>'811305','title'=>'Operador de centrifugadora (tratamentos químicos e afins)','filter'=>'operador de centrifugadora (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811310','title'=>'Operador de exploração de petróleo','filter'=>'operador de exploração de petróleo',]);

        CompanyOccupation::create(['code'=>'811315','title'=>'Operador de filtro de secagem (mineração)','filter'=>'operador de filtro de secagem (mineração)',]);

        CompanyOccupation::create(['code'=>'811320','title'=>'Operador de filtro de tambor rotativo (tratamentos químicos e afins)','filter'=>'operador de filtro de tambor rotativo (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811325','title'=>'Operador de filtro-esteira (mineração)','filter'=>'operador de filtro-esteira (mineração)',]);

        CompanyOccupation::create(['code'=>'811330','title'=>'Operador de filtro-prensa (tratamentos químicos e afins)','filter'=>'operador de filtro-prensa (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811335','title'=>'Operador de filtros de parafina (tratamentos químicos e afins)','filter'=>'operador de filtros de parafina (tratamentos químicos e afins)',]);

        CompanyOccupation::create(['code'=>'811405','title'=>'Destilador de madeira','filter'=>'destilador de madeira',]);

        CompanyOccupation::create(['code'=>'811410','title'=>'Destilador de produtos químicos (exceto petróleo)','filter'=>'destilador de produtos químicos (exceto petróleo)',]);

        CompanyOccupation::create(['code'=>'811415','title'=>'Operador de alambique de funcionamento contínuo (produtos químicos, exceto petróleo)','filter'=>'operador de alambique de funcionamento contínuo (produtos químicos, exceto petróleo)',]);

        CompanyOccupation::create(['code'=>'811420','title'=>'Operador de aparelho de reação e conversão (produtos químicos, exceto petróleo)','filter'=>'operador de aparelho de reação e conversão (produtos químicos, exceto petróleo)',]);

        CompanyOccupation::create(['code'=>'811425','title'=>'Operador de equipamento de destilação de álcool','filter'=>'operador de equipamento de destilação de álcool',]);

        CompanyOccupation::create(['code'=>'811430','title'=>'Operador de evaporador na destilação','filter'=>'operador de evaporador na destilação',]);

        CompanyOccupation::create(['code'=>'811505','title'=>'Operador de painel de controle (refinação de petróleo)','filter'=>'operador de painel de controle (refinação de petróleo)',]);

        CompanyOccupation::create(['code'=>'811510','title'=>'Operador de transferência e estocagem - na refinação do petróleo','filter'=>'operador de transferência e estocagem - na refinação do petróleo',]);

        CompanyOccupation::create(['code'=>'811605','title'=>'Operador de britador de coque','filter'=>'operador de britador de coque',]);

        CompanyOccupation::create(['code'=>'811610','title'=>'Operador de carro de apagamento e coque','filter'=>'operador de carro de apagamento e coque',]);

        CompanyOccupation::create(['code'=>'811615','title'=>'Operador de destilação e subprodutos de coque','filter'=>'operador de destilação e subprodutos de coque',]);

        CompanyOccupation::create(['code'=>'811620','title'=>'Operador de enfornamento e desenfornamento de coque','filter'=>'operador de enfornamento e desenfornamento de coque',]);

        CompanyOccupation::create(['code'=>'811625','title'=>'Operador de exaustor (coqueria)','filter'=>'operador de exaustor (coqueria)',]);

        CompanyOccupation::create(['code'=>'811630','title'=>'Operador de painel de controle','filter'=>'operador de painel de controle',]);

        CompanyOccupation::create(['code'=>'811635','title'=>'Operador de preservação e controle térmico','filter'=>'operador de preservação e controle térmico',]);

        CompanyOccupation::create(['code'=>'811640','title'=>'Operador de reator de coque de petróleo','filter'=>'operador de reator de coque de petróleo',]);

        CompanyOccupation::create(['code'=>'811645','title'=>'Operador de refrigeração (coqueria)','filter'=>'operador de refrigeração (coqueria)',]);

        CompanyOccupation::create(['code'=>'811650','title'=>'Operador de sistema de reversão (coqueria)','filter'=>'operador de sistema de reversão (coqueria)',]);

        CompanyOccupation::create(['code'=>'811705','title'=>'Bamburista','filter'=>'bamburista',]);

        CompanyOccupation::create(['code'=>'811710','title'=>'Calandrista de borracha','filter'=>'calandrista de borracha',]);

        CompanyOccupation::create(['code'=>'811715','title'=>'Confeccionador de pneumáticos','filter'=>'confeccionador de pneumáticos',]);

        CompanyOccupation::create(['code'=>'811725','title'=>'Confeccionador de velas por imersão','filter'=>'confeccionador de velas por imersão',]);

        CompanyOccupation::create(['code'=>'811735','title'=>'Confeccionador de velas por moldagem','filter'=>'confeccionador de velas por moldagem',]);

        CompanyOccupation::create(['code'=>'811745','title'=>'Laminador de plástico','filter'=>'laminador de plástico',]);

        CompanyOccupation::create(['code'=>'811750','title'=>'Moldador de borracha por compressão','filter'=>'moldador de borracha por compressão',]);

        CompanyOccupation::create(['code'=>'811760','title'=>'Moldador de plástico por compressão','filter'=>'moldador de plástico por compressão',]);

        CompanyOccupation::create(['code'=>'811770','title'=>'Moldador de plástico por injeção','filter'=>'moldador de plástico por injeção',]);

        CompanyOccupation::create(['code'=>'811775','title'=>'Trefilador de borracha','filter'=>'trefilador de borracha',]);

        CompanyOccupation::create(['code'=>'811805','title'=>'Operador de máquina de produtos farmacêuticos','filter'=>'operador de máquina de produtos farmacêuticos',]);

        CompanyOccupation::create(['code'=>'811810','title'=>'Drageador (medicamentos)','filter'=>'drageador (medicamentos)',]);

        CompanyOccupation::create(['code'=>'811815','title'=>'Operador de máquina de fabricação de cosméticos','filter'=>'operador de máquina de fabricação de cosméticos',]);

        CompanyOccupation::create(['code'=>'811820','title'=>'Operador de máquina de fabricação de produtos de higiene e limpeza (sabão, sabonete, detergente, absorvente, fraldas cotonetes e outros)','filter'=>'operador de máquina de fabricação de produtos de higiene e limpeza (sabão, sabonete, detergente, absorvente, fraldas cotonetes e outros)',]);

        CompanyOccupation::create(['code'=>'812105','title'=>'Pirotécnico','filter'=>'pirotécnico',]);

        CompanyOccupation::create(['code'=>'812110','title'=>'Trabalhador da fabricação de munição e explosivos','filter'=>'trabalhador da fabricação de munição e explosivos',]);

        CompanyOccupation::create(['code'=>'813105','title'=>'Cilindrista (petroquímica e afins)','filter'=>'cilindrista (petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'813110','title'=>'Operador de calandra (química, petroquímica e afins)','filter'=>'operador de calandra (química, petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'813115','title'=>'Operador de extrusora (química, petroquímica e afins)','filter'=>'operador de extrusora (química, petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'813120','title'=>'Operador de processo (química, petroquímica e afins)','filter'=>'operador de processo (química, petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'813125','title'=>'Operador de produção (química, petroquímica e afins)','filter'=>'operador de produção (química, petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'813130','title'=>'Técnico de operação (química, petroquímica e afins)','filter'=>'técnico de operação (química, petroquímica e afins)',]);

        CompanyOccupation::create(['code'=>'818105','title'=>'Assistente de laboratório industrial','filter'=>'assistente de laboratório industrial',]);

        CompanyOccupation::create(['code'=>'818110','title'=>'Auxiliar de laboratório de análises físico-químicas','filter'=>'auxiliar de laboratório de análises físico-químicas',]);

        CompanyOccupation::create(['code'=>'820105','title'=>'Mestre de siderurgia','filter'=>'mestre de siderurgia',]);

        CompanyOccupation::create(['code'=>'820110','title'=>'Mestre de aciaria','filter'=>'mestre de aciaria',]);

        CompanyOccupation::create(['code'=>'820115','title'=>'Mestre de alto-forno','filter'=>'mestre de alto-forno',]);

        CompanyOccupation::create(['code'=>'820120','title'=>'Mestre de forno elétrico','filter'=>'mestre de forno elétrico',]);

        CompanyOccupation::create(['code'=>'820125','title'=>'Mestre de laminação','filter'=>'mestre de laminação',]);

        CompanyOccupation::create(['code'=>'820205','title'=>'Supervisor de fabricação de produtos cerâmicos, porcelanatos e afins','filter'=>'supervisor de fabricação de produtos cerâmicos, porcelanatos e afins',]);

        CompanyOccupation::create(['code'=>'820210','title'=>'Supervisor de fabricação de produtos de vidro','filter'=>'supervisor de fabricação de produtos de vidro',]);

        CompanyOccupation::create(['code'=>'821105','title'=>'Operador de centro de controle ( sinterização)','filter'=>'operador de centro de controle ( sinterização)',]);

        CompanyOccupation::create(['code'=>'821110','title'=>'Operador de máquina de sinterizar','filter'=>'operador de máquina de sinterizar',]);

        CompanyOccupation::create(['code'=>'821205','title'=>'Forneiro e operador (alto-forno)','filter'=>'forneiro e operador (alto-forno)',]);

        CompanyOccupation::create(['code'=>'821210','title'=>'Forneiro e operador (conversor a oxigênio)','filter'=>'forneiro e operador (conversor a oxigênio)',]);

        CompanyOccupation::create(['code'=>'821215','title'=>'Forneiro e operador (forno elétrico)','filter'=>'forneiro e operador (forno elétrico)',]);

        CompanyOccupation::create(['code'=>'821220','title'=>'Forneiro e operador (refino de metais não-ferrosos)','filter'=>'forneiro e operador (refino de metais não-ferrosos)',]);

        CompanyOccupation::create(['code'=>'821225','title'=>'Forneiro e operador de forno de redução direta','filter'=>'forneiro e operador de forno de redução direta',]);

        CompanyOccupation::create(['code'=>'821230','title'=>'Operador de aciaria (basculamento de convertedor)','filter'=>'operador de aciaria (basculamento de convertedor)',]);

        CompanyOccupation::create(['code'=>'821235','title'=>'Operador de aciaria (dessulfuração de gusa)','filter'=>'operador de aciaria (dessulfuração de gusa)',]);

        CompanyOccupation::create(['code'=>'821240','title'=>'Operador de aciaria (recebimento de gusa)','filter'=>'operador de aciaria (recebimento de gusa)',]);

        CompanyOccupation::create(['code'=>'821245','title'=>'Operador de área de corrida','filter'=>'operador de área de corrida',]);

        CompanyOccupation::create(['code'=>'821250','title'=>'Operador de desgaseificação','filter'=>'operador de desgaseificação',]);

        CompanyOccupation::create(['code'=>'821255','title'=>'Soprador de convertedor','filter'=>'soprador de convertedor',]);

        CompanyOccupation::create(['code'=>'821305','title'=>'Operador de laminador','filter'=>'operador de laminador',]);

        CompanyOccupation::create(['code'=>'821310','title'=>'Operador de laminador de barras a frio','filter'=>'operador de laminador de barras a frio',]);

        CompanyOccupation::create(['code'=>'821315','title'=>'Operador de laminador de barras a quente','filter'=>'operador de laminador de barras a quente',]);

        CompanyOccupation::create(['code'=>'821320','title'=>'Operador de laminador de metais não-ferrosos','filter'=>'operador de laminador de metais não-ferrosos',]);

        CompanyOccupation::create(['code'=>'821325','title'=>'Operador de laminador de tubos','filter'=>'operador de laminador de tubos',]);

        CompanyOccupation::create(['code'=>'821330','title'=>'Operador de montagem de cilindros e mancais','filter'=>'operador de montagem de cilindros e mancais',]);

        CompanyOccupation::create(['code'=>'821335','title'=>'Recuperador de guias e cilindros','filter'=>'recuperador de guias e cilindros',]);

        CompanyOccupation::create(['code'=>'821405','title'=>'Encarregado de acabamento de chapas e metais (têmpera)','filter'=>'encarregado de acabamento de chapas e metais (têmpera)',]);

        CompanyOccupation::create(['code'=>'821410','title'=>'Escarfador','filter'=>'escarfador',]);

        CompanyOccupation::create(['code'=>'821415','title'=>'Marcador de produtos (siderúrgico e metalúrgico)','filter'=>'marcador de produtos (siderúrgico e metalúrgico)',]);

        CompanyOccupation::create(['code'=>'821420','title'=>'Operador de bobinadeira de tiras a quente, no acabamento de chapas e metais','filter'=>'operador de bobinadeira de tiras a quente, no acabamento de chapas e metais',]);

        CompanyOccupation::create(['code'=>'821425','title'=>'Operador de cabine de laminação (fio-máquina)','filter'=>'operador de cabine de laminação (fio-máquina)',]);

        CompanyOccupation::create(['code'=>'821430','title'=>'Operador de escória e sucata','filter'=>'operador de escória e sucata',]);

        CompanyOccupation::create(['code'=>'821435','title'=>'Operador de jato abrasivo','filter'=>'operador de jato abrasivo',]);

        CompanyOccupation::create(['code'=>'821440','title'=>'Operador de tesoura mecânica e máquina de corte, no acabamento de chapas e metais','filter'=>'operador de tesoura mecânica e máquina de corte, no acabamento de chapas e metais',]);

        CompanyOccupation::create(['code'=>'821445','title'=>'Preparador de sucata e aparas','filter'=>'preparador de sucata e aparas',]);

        CompanyOccupation::create(['code'=>'821450','title'=>'Rebarbador de metal','filter'=>'rebarbador de metal',]);

        CompanyOccupation::create(['code'=>'822105','title'=>'Forneiro de cubilô','filter'=>'forneiro de cubilô',]);

        CompanyOccupation::create(['code'=>'822110','title'=>'Forneiro de forno-poço','filter'=>'forneiro de forno-poço',]);

        CompanyOccupation::create(['code'=>'822115','title'=>'Forneiro de fundição (forno de redução)','filter'=>'forneiro de fundição (forno de redução)',]);

        CompanyOccupation::create(['code'=>'822120','title'=>'Forneiro de reaquecimento e tratamento térmico na metalurgia','filter'=>'forneiro de reaquecimento e tratamento térmico na metalurgia',]);

        CompanyOccupation::create(['code'=>'822125','title'=>'Forneiro de revérbero','filter'=>'forneiro de revérbero',]);

        CompanyOccupation::create(['code'=>'823105','title'=>'Preparador de massa (fabricação de abrasivos)','filter'=>'preparador de massa (fabricação de abrasivos)',]);

        CompanyOccupation::create(['code'=>'823110','title'=>'Preparador de massa (fabricação de vidro)','filter'=>'preparador de massa (fabricação de vidro)',]);

        CompanyOccupation::create(['code'=>'823115','title'=>'Preparador de massa de argila','filter'=>'preparador de massa de argila',]);

        CompanyOccupation::create(['code'=>'823120','title'=>'Preparador de barbotina','filter'=>'preparador de barbotina',]);

        CompanyOccupation::create(['code'=>'823125','title'=>'Preparador de esmaltes (cerâmica)','filter'=>'preparador de esmaltes (cerâmica)',]);

        CompanyOccupation::create(['code'=>'823130','title'=>'Preparador de aditivos','filter'=>'preparador de aditivos',]);

        CompanyOccupation::create(['code'=>'823135','title'=>'Operador de atomizador','filter'=>'operador de atomizador',]);

        CompanyOccupation::create(['code'=>'823210','title'=>'Extrusor de fios ou fibras de vidro','filter'=>'extrusor de fios ou fibras de vidro',]);

        CompanyOccupation::create(['code'=>'823215','title'=>'Forneiro na fundição de vidro','filter'=>'forneiro na fundição de vidro',]);

        CompanyOccupation::create(['code'=>'823220','title'=>'Forneiro no recozimento de vidro','filter'=>'forneiro no recozimento de vidro',]);

        CompanyOccupation::create(['code'=>'823230','title'=>'Moldador de abrasivos na fabricação de cerâmica, vidro e porcelana','filter'=>'moldador de abrasivos na fabricação de cerâmica, vidro e porcelana',]);

        CompanyOccupation::create(['code'=>'823235','title'=>'Operador de banho metálico de vidro por flutuação','filter'=>'operador de banho metálico de vidro por flutuação',]);

        CompanyOccupation::create(['code'=>'823240','title'=>'Operador de máquina de soprar vidro','filter'=>'operador de máquina de soprar vidro',]);

        CompanyOccupation::create(['code'=>'823245','title'=>'Operador de máquina extrusora de varetas e tubos de vidro','filter'=>'operador de máquina extrusora de varetas e tubos de vidro',]);

        CompanyOccupation::create(['code'=>'823250','title'=>'Operador de prensa de moldar vidro','filter'=>'operador de prensa de moldar vidro',]);

        CompanyOccupation::create(['code'=>'823255','title'=>'Temperador de vidro','filter'=>'temperador de vidro',]);

        CompanyOccupation::create(['code'=>'823265','title'=>'Trabalhador na fabricação de produtos abrasivos','filter'=>'trabalhador na fabricação de produtos abrasivos',]);

        CompanyOccupation::create(['code'=>'823305','title'=>'Classificador e empilhador de tijolos refratários','filter'=>'classificador e empilhador de tijolos refratários',]);

        CompanyOccupation::create(['code'=>'823315','title'=>'Forneiro (materiais de construção)','filter'=>'forneiro (materiais de construção)',]);

        CompanyOccupation::create(['code'=>'823320','title'=>'Trabalhador da elaboração de pré-fabricados (cimento amianto)','filter'=>'trabalhador da elaboração de pré-fabricados (cimento amianto)',]);

        CompanyOccupation::create(['code'=>'823325','title'=>'Trabalhador da elaboração de pré-fabricados (concreto armado)','filter'=>'trabalhador da elaboração de pré-fabricados (concreto armado)',]);

        CompanyOccupation::create(['code'=>'823330','title'=>'Trabalhador da fabricação de pedras artificiais','filter'=>'trabalhador da fabricação de pedras artificiais',]);

        CompanyOccupation::create(['code'=>'828105','title'=>'Oleiro (fabricação de telhas)','filter'=>'oleiro (fabricação de telhas)',]);

        CompanyOccupation::create(['code'=>'828110','title'=>'Oleiro (fabricação de tijolos)','filter'=>'oleiro (fabricação de tijolos)',]);

        CompanyOccupation::create(['code'=>'830105','title'=>'Mestre (indústria de celulose, papel e papelão)','filter'=>'mestre (indústria de celulose, papel e papelão)',]);

        CompanyOccupation::create(['code'=>'831105','title'=>'Cilindreiro na preparação de pasta para fabricação de papel','filter'=>'cilindreiro na preparação de pasta para fabricação de papel',]);

        CompanyOccupation::create(['code'=>'831110','title'=>'Operador de branqueador de pasta para fabricação de papel','filter'=>'operador de branqueador de pasta para fabricação de papel',]);

        CompanyOccupation::create(['code'=>'831115','title'=>'Operador de digestor de pasta para fabricação de papel','filter'=>'operador de digestor de pasta para fabricação de papel',]);

        CompanyOccupation::create(['code'=>'831120','title'=>'Operador de lavagem e depuração de pasta para fabricação de papel','filter'=>'operador de lavagem e depuração de pasta para fabricação de papel',]);

        CompanyOccupation::create(['code'=>'831125','title'=>'Operador de máquina de secar celulose','filter'=>'operador de máquina de secar celulose',]);

        CompanyOccupation::create(['code'=>'832105','title'=>'Calandrista de papel','filter'=>'calandrista de papel',]);

        CompanyOccupation::create(['code'=>'832110','title'=>'Operador de cortadeira de papel','filter'=>'operador de cortadeira de papel',]);

        CompanyOccupation::create(['code'=>'832115','title'=>'Operador de máquina de fabricar papel (fase úmida)','filter'=>'operador de máquina de fabricar papel (fase úmida)',]);

        CompanyOccupation::create(['code'=>'832120','title'=>'Operador de máquina de fabricar papel (fase seca)','filter'=>'operador de máquina de fabricar papel (fase seca)',]);

        CompanyOccupation::create(['code'=>'832125','title'=>'Operador de máquina de fabricar papel e papelão','filter'=>'operador de máquina de fabricar papel e papelão',]);

        CompanyOccupation::create(['code'=>'832135','title'=>'Operador de rebobinadeira na fabricação de papel e papelão','filter'=>'operador de rebobinadeira na fabricação de papel e papelão',]);

        CompanyOccupation::create(['code'=>'833105','title'=>'Cartonageiro, a máquina','filter'=>'cartonageiro, a máquina',]);

        CompanyOccupation::create(['code'=>'833110','title'=>'Confeccionador de bolsas, sacos e sacolas e papel, a máquina','filter'=>'confeccionador de bolsas, sacos e sacolas e papel, a máquina',]);

        CompanyOccupation::create(['code'=>'833115','title'=>'Confeccionador de sacos de celofane, a máquina','filter'=>'confeccionador de sacos de celofane, a máquina',]);

        CompanyOccupation::create(['code'=>'833120','title'=>'Operador de máquina de cortar e dobrar papelão','filter'=>'operador de máquina de cortar e dobrar papelão',]);

        CompanyOccupation::create(['code'=>'833125','title'=>'Operador de prensa de embutir papelão','filter'=>'operador de prensa de embutir papelão',]);

        CompanyOccupation::create(['code'=>'833205','title'=>'Cartonageiro, a mão (caixas de papelão)','filter'=>'cartonageiro, a mão (caixas de papelão)',]);

        CompanyOccupation::create(['code'=>'840105','title'=>'Supervisor de produção da indústria alimentícia','filter'=>'supervisor de produção da indústria alimentícia',]);

        CompanyOccupation::create(['code'=>'840110','title'=>'Supervisor da indústria de bebidas','filter'=>'supervisor da indústria de bebidas',]);

        CompanyOccupation::create(['code'=>'840115','title'=>'Supervisor da indústria de fumo','filter'=>'supervisor da indústria de fumo',]);

        CompanyOccupation::create(['code'=>'840120','title'=>'Chefe de confeitaria','filter'=>'chefe de confeitaria',]);

        CompanyOccupation::create(['code'=>'841105','title'=>'Moleiro de cereais (exceto arroz)','filter'=>'moleiro de cereais (exceto arroz)',]);

        CompanyOccupation::create(['code'=>'841110','title'=>'Moleiro de especiarias','filter'=>'moleiro de especiarias',]);

        CompanyOccupation::create(['code'=>'841115','title'=>'Operador de processo de moagem','filter'=>'operador de processo de moagem',]);

        CompanyOccupation::create(['code'=>'841205','title'=>'Moedor de sal','filter'=>'moedor de sal',]);

        CompanyOccupation::create(['code'=>'841210','title'=>'Refinador de sal','filter'=>'refinador de sal',]);

        CompanyOccupation::create(['code'=>'841305','title'=>'Operador de cristalização na refinação de açucar','filter'=>'operador de cristalização na refinação de açucar',]);

        CompanyOccupation::create(['code'=>'841310','title'=>'Operador de equipamentos de refinação de açúcar (processo contínuo)','filter'=>'operador de equipamentos de refinação de açúcar (processo contínuo)',]);

        CompanyOccupation::create(['code'=>'841315','title'=>'Operador de moenda na fabricação de açúcar','filter'=>'operador de moenda na fabricação de açúcar',]);

        CompanyOccupation::create(['code'=>'841320','title'=>'Operador de tratamento de calda na refinação de açúcar','filter'=>'operador de tratamento de calda na refinação de açúcar',]);

        CompanyOccupation::create(['code'=>'841408','title'=>'Cozinhador (conservação de alimentos)','filter'=>'cozinhador (conservação de alimentos)',]);

        CompanyOccupation::create(['code'=>'841416','title'=>'Cozinhador de carnes','filter'=>'cozinhador de carnes',]);

        CompanyOccupation::create(['code'=>'841420','title'=>'Cozinhador de frutas e legumes','filter'=>'cozinhador de frutas e legumes',]);

        CompanyOccupation::create(['code'=>'841428','title'=>'Cozinhador de pescado','filter'=>'cozinhador de pescado',]);

        CompanyOccupation::create(['code'=>'841432','title'=>'Desidratador de alimentos','filter'=>'desidratador de alimentos',]);

        CompanyOccupation::create(['code'=>'841440','title'=>'Esterilizador de alimentos','filter'=>'esterilizador de alimentos',]);

        CompanyOccupation::create(['code'=>'841444','title'=>'Hidrogenador de óleos e gorduras','filter'=>'hidrogenador de óleos e gorduras',]);

        CompanyOccupation::create(['code'=>'841448','title'=>'Lagareiro','filter'=>'lagareiro',]);

        CompanyOccupation::create(['code'=>'841456','title'=>'Operador de câmaras frias','filter'=>'operador de câmaras frias',]);

        CompanyOccupation::create(['code'=>'841460','title'=>'Operador de preparação de grãos vegetais (óleos e gorduras)','filter'=>'operador de preparação de grãos vegetais (óleos e gorduras)',]);

        CompanyOccupation::create(['code'=>'841464','title'=>'Prensador de frutas (exceto oleaginosas)','filter'=>'prensador de frutas (exceto oleaginosas)',]);

        CompanyOccupation::create(['code'=>'841468','title'=>'Preparador de rações','filter'=>'preparador de rações',]);

        CompanyOccupation::create(['code'=>'841472','title'=>'Refinador de óleo e gordura','filter'=>'refinador de óleo e gordura',]);

        CompanyOccupation::create(['code'=>'841476','title'=>'Trabalhador de fabricação de margarina','filter'=>'trabalhador de fabricação de margarina',]);

        CompanyOccupation::create(['code'=>'841484','title'=>'Trabalhador de preparação de pescados (limpeza)','filter'=>'trabalhador de preparação de pescados (limpeza)',]);

        CompanyOccupation::create(['code'=>'841505','title'=>'Trabalhador de tratamento do leite e fabricação de laticínios e afins','filter'=>'trabalhador de tratamento do leite e fabricação de laticínios e afins',]);

        CompanyOccupation::create(['code'=>'841605','title'=>'Misturador de café','filter'=>'misturador de café',]);

        CompanyOccupation::create(['code'=>'841610','title'=>'Torrador de café','filter'=>'torrador de café',]);

        CompanyOccupation::create(['code'=>'841615','title'=>'Moedor de café','filter'=>'moedor de café',]);

        CompanyOccupation::create(['code'=>'841620','title'=>'Operador de extração de café solúvel','filter'=>'operador de extração de café solúvel',]);

        CompanyOccupation::create(['code'=>'841625','title'=>'Torrador de cacau','filter'=>'torrador de cacau',]);

        CompanyOccupation::create(['code'=>'841630','title'=>'Misturador de chá ou mate','filter'=>'misturador de chá ou mate',]);

        CompanyOccupation::create(['code'=>'841705','title'=>'Alambiqueiro','filter'=>'alambiqueiro',]);

        CompanyOccupation::create(['code'=>'841710','title'=>'Filtrador de cerveja','filter'=>'filtrador de cerveja',]);

        CompanyOccupation::create(['code'=>'841715','title'=>'Fermentador','filter'=>'fermentador',]);

        CompanyOccupation::create(['code'=>'841720','title'=>'Trabalhador de fabricação de vinhos','filter'=>'trabalhador de fabricação de vinhos',]);

        CompanyOccupation::create(['code'=>'841725','title'=>'Malteiro (germinação)','filter'=>'malteiro (germinação)',]);

        CompanyOccupation::create(['code'=>'841730','title'=>'Cozinhador de malte','filter'=>'cozinhador de malte',]);

        CompanyOccupation::create(['code'=>'841735','title'=>'Dessecador de malte','filter'=>'dessecador de malte',]);

        CompanyOccupation::create(['code'=>'841740','title'=>'Vinagreiro','filter'=>'vinagreiro',]);

        CompanyOccupation::create(['code'=>'841745','title'=>'Xaropeiro','filter'=>'xaropeiro',]);

        CompanyOccupation::create(['code'=>'841805','title'=>'Operador de forno (fabricação de pães, biscoitos e similares)','filter'=>'operador de forno (fabricação de pães, biscoitos e similares)',]);

        CompanyOccupation::create(['code'=>'841810','title'=>'Operador de máquinas de fabricação de doces, salgados e massas alimentícias','filter'=>'operador de máquinas de fabricação de doces, salgados e massas alimentícias',]);

        CompanyOccupation::create(['code'=>'841815','title'=>'Operador de máquinas de fabricação de chocolates e achocolatados','filter'=>'operador de máquinas de fabricação de chocolates e achocolatados',]);

        CompanyOccupation::create(['code'=>'842105','title'=>'Preparador de melado e essência de fumo','filter'=>'preparador de melado e essência de fumo',]);

        CompanyOccupation::create(['code'=>'842110','title'=>'Processador de fumo','filter'=>'processador de fumo',]);

        CompanyOccupation::create(['code'=>'842115','title'=>'Classificador de fumo','filter'=>'classificador de fumo',]);

        CompanyOccupation::create(['code'=>'842120','title'=>'Auxiliar de processamento de fumo','filter'=>'auxiliar de processamento de fumo',]);

        CompanyOccupation::create(['code'=>'842125','title'=>'Operador de máquina (fabricação de cigarros)','filter'=>'operador de máquina (fabricação de cigarros)',]);

        CompanyOccupation::create(['code'=>'842135','title'=>'Operador de máquina de preparação de matéria prima para produção de cigarros','filter'=>'operador de máquina de preparação de matéria prima para produção de cigarros',]);

        CompanyOccupation::create(['code'=>'842205','title'=>'Preparador de fumo na fabricação de charutos','filter'=>'preparador de fumo na fabricação de charutos',]);

        CompanyOccupation::create(['code'=>'842210','title'=>'Operador de máquina de fabricar charutos e cigarrilhas','filter'=>'operador de máquina de fabricar charutos e cigarrilhas',]);

        CompanyOccupation::create(['code'=>'842215','title'=>'Classificador de charutos','filter'=>'classificador de charutos',]);

        CompanyOccupation::create(['code'=>'842220','title'=>'Cortador de charutos','filter'=>'cortador de charutos',]);

        CompanyOccupation::create(['code'=>'842225','title'=>'Celofanista na fabricação de charutos','filter'=>'celofanista na fabricação de charutos',]);

        CompanyOccupation::create(['code'=>'842230','title'=>'Charuteiro a mão','filter'=>'charuteiro a mão',]);

        CompanyOccupation::create(['code'=>'842235','title'=>'Degustador de charutos','filter'=>'degustador de charutos',]);

        CompanyOccupation::create(['code'=>'848105','title'=>'Defumador de carnes e pescados','filter'=>'defumador de carnes e pescados',]);

        CompanyOccupation::create(['code'=>'848110','title'=>'Salgador de alimentos','filter'=>'salgador de alimentos',]);

        CompanyOccupation::create(['code'=>'848115','title'=>'Salsicheiro (fabricação de lingüiça, salsicha e produtos similares)','filter'=>'salsicheiro (fabricação de lingüiça, salsicha e produtos similares)',]);

        CompanyOccupation::create(['code'=>'848205','title'=>'Pasteurizador','filter'=>'pasteurizador',]);

        CompanyOccupation::create(['code'=>'848210','title'=>'Queijeiro na fabricação de laticínio','filter'=>'queijeiro na fabricação de laticínio',]);

        CompanyOccupation::create(['code'=>'848215','title'=>'Manteigueiro na fabricação de laticínio','filter'=>'manteigueiro na fabricação de laticínio',]);

        CompanyOccupation::create(['code'=>'848305','title'=>'Padeiro','filter'=>'padeiro',]);

        CompanyOccupation::create(['code'=>'848310','title'=>'Confeiteiro','filter'=>'confeiteiro',]);

        CompanyOccupation::create(['code'=>'848315','title'=>'Masseiro (massas alimentícias)','filter'=>'masseiro (massas alimentícias)',]);

        CompanyOccupation::create(['code'=>'848325','title'=>'Trabalhador de fabricação de sorvete','filter'=>'trabalhador de fabricação de sorvete',]);

        CompanyOccupation::create(['code'=>'848405','title'=>'Degustador de café','filter'=>'degustador de café',]);

        CompanyOccupation::create(['code'=>'848410','title'=>'Degustador de chá','filter'=>'degustador de chá',]);

        CompanyOccupation::create(['code'=>'848415','title'=>'Degustador de derivados de cacau','filter'=>'degustador de derivados de cacau',]);

        CompanyOccupation::create(['code'=>'848420','title'=>'Degustador de vinhos ou licores','filter'=>'degustador de vinhos ou licores',]);

        CompanyOccupation::create(['code'=>'848425','title'=>'Classificador de grãos','filter'=>'classificador de grãos',]);

        CompanyOccupation::create(['code'=>'848505','title'=>'Abatedor','filter'=>'abatedor',]);

        CompanyOccupation::create(['code'=>'848510','title'=>'Açougueiro','filter'=>'açougueiro',]);

        CompanyOccupation::create(['code'=>'848515','title'=>'Desossador','filter'=>'desossador',]);

        CompanyOccupation::create(['code'=>'848520','title'=>'Magarefe','filter'=>'magarefe',]);

        CompanyOccupation::create(['code'=>'848525','title'=>'Retalhador de carne','filter'=>'retalhador de carne',]);

        CompanyOccupation::create(['code'=>'848605','title'=>'Trabalhador do beneficiamento de fumo','filter'=>'trabalhador do beneficiamento de fumo',]);

        CompanyOccupation::create(['code'=>'860105','title'=>'Supervisor de manutenção eletromecânica (utilidades)','filter'=>'supervisor de manutenção eletromecânica (utilidades)',]);

        CompanyOccupation::create(['code'=>'860110','title'=>'Supervisor de operação de fluidos (distribuição, captação, tratamento de água, gases, vapor)','filter'=>'supervisor de operação de fluidos (distribuição, captação, tratamento de água, gases, vapor)',]);

        CompanyOccupation::create(['code'=>'860115','title'=>'Supervisor de operação elétrica (geração, transmissão e distribuição de energia elétrica)','filter'=>'supervisor de operação elétrica (geração, transmissão e distribuição de energia elétrica)',]);

        CompanyOccupation::create(['code'=>'861105','title'=>'Operador de central hidrelétrica','filter'=>'operador de central hidrelétrica',]);

        CompanyOccupation::create(['code'=>'861110','title'=>'Operador de quadro de distribuição de energia elétrica','filter'=>'operador de quadro de distribuição de energia elétrica',]);

        CompanyOccupation::create(['code'=>'861115','title'=>'Operador de central termoelétrica','filter'=>'operador de central termoelétrica',]);

        CompanyOccupation::create(['code'=>'861120','title'=>'Operador de reator nuclear','filter'=>'operador de reator nuclear',]);

        CompanyOccupation::create(['code'=>'861205','title'=>'Operador de subestação','filter'=>'operador de subestação',]);

        CompanyOccupation::create(['code'=>'862105','title'=>'Foguista (locomotivas a vapor)','filter'=>'foguista (locomotivas a vapor)',]);

        CompanyOccupation::create(['code'=>'862110','title'=>'Maquinista de embarcações','filter'=>'maquinista de embarcações',]);

        CompanyOccupation::create(['code'=>'862115','title'=>'Operador de bateria de gás de hulha','filter'=>'operador de bateria de gás de hulha',]);

        CompanyOccupation::create(['code'=>'862120','title'=>'Operador de caldeira','filter'=>'operador de caldeira',]);

        CompanyOccupation::create(['code'=>'862130','title'=>'Operador de compressor de ar','filter'=>'operador de compressor de ar',]);

        CompanyOccupation::create(['code'=>'862140','title'=>'Operador de estação de bombeamento','filter'=>'operador de estação de bombeamento',]);

        CompanyOccupation::create(['code'=>'862150','title'=>'Operador de máquinas fixas, em geral','filter'=>'operador de máquinas fixas, em geral',]);

        CompanyOccupation::create(['code'=>'862155','title'=>'Operador de utilidade (produção e distribuição de vapor, gás, óleo, combustível, energia, oxigênio)','filter'=>'operador de utilidade (produção e distribuição de vapor, gás, óleo, combustível, energia, oxigênio)',]);

        CompanyOccupation::create(['code'=>'862160','title'=>'Operador de abastecimento de combustível de aeronave','filter'=>'operador de abastecimento de combustível de aeronave',]);

        CompanyOccupation::create(['code'=>'862205','title'=>'Operador de estação de captação, tratamento e distribuição de água','filter'=>'operador de estação de captação, tratamento e distribuição de água',]);

        CompanyOccupation::create(['code'=>'862305','title'=>'Operador de estação de tratamento de água e efluentes','filter'=>'operador de estação de tratamento de água e efluentes',]);

        CompanyOccupation::create(['code'=>'862310','title'=>'Operador de forno de incineração no tratamento de água, efluentes e resíduos industriais','filter'=>'operador de forno de incineração no tratamento de água, efluentes e resíduos industriais',]);

        CompanyOccupation::create(['code'=>'862405','title'=>'Operador de instalação de extração, processamento, envasamento e distribuição de gases','filter'=>'operador de instalação de extração, processamento, envasamento e distribuição de gases',]);

        CompanyOccupation::create(['code'=>'862505','title'=>'Operador de instalação de refrigeração','filter'=>'operador de instalação de refrigeração',]);

        CompanyOccupation::create(['code'=>'862510','title'=>'Operador de refrigeração com amônia','filter'=>'operador de refrigeração com amônia',]);

        CompanyOccupation::create(['code'=>'862515','title'=>'Operador de instalação de ar-condicionado','filter'=>'operador de instalação de ar-condicionado',]);

        CompanyOccupation::create(['code'=>'910105','title'=>'Encarregado de manutenção mecânica de sistemas operacionais','filter'=>'encarregado de manutenção mecânica de sistemas operacionais',]);

        CompanyOccupation::create(['code'=>'910110','title'=>'Supervisor de manutenção de aparelhos térmicos, de climatização e de refrigeração','filter'=>'supervisor de manutenção de aparelhos térmicos, de climatização e de refrigeração',]);

        CompanyOccupation::create(['code'=>'910115','title'=>'Supervisor de manutenção de bombas, motores, compressores e equipamentos de transmissão','filter'=>'supervisor de manutenção de bombas, motores, compressores e equipamentos de transmissão',]);

        CompanyOccupation::create(['code'=>'910120','title'=>'Supervisor de manutenção de máquinas gráficas','filter'=>'supervisor de manutenção de máquinas gráficas',]);

        CompanyOccupation::create(['code'=>'910125','title'=>'Supervisor de manutenção de máquinas industriais têxteis','filter'=>'supervisor de manutenção de máquinas industriais têxteis',]);

        CompanyOccupation::create(['code'=>'910130','title'=>'Supervisor de manutenção de máquinas operatrizes e de usinagem','filter'=>'supervisor de manutenção de máquinas operatrizes e de usinagem',]);

        CompanyOccupation::create(['code'=>'910205','title'=>'Supervisor da manutenção e reparação de veículos leves','filter'=>'supervisor da manutenção e reparação de veículos leves',]);

        CompanyOccupation::create(['code'=>'910210','title'=>'Supervisor da manutenção e reparação de veículos pesados','filter'=>'supervisor da manutenção e reparação de veículos pesados',]);

        CompanyOccupation::create(['code'=>'910905','title'=>'Supervisor de reparos linhas férreas','filter'=>'supervisor de reparos linhas férreas',]);

        CompanyOccupation::create(['code'=>'910910','title'=>'Supervisor de manutenção de vias férreas','filter'=>'supervisor de manutenção de vias férreas',]);

        CompanyOccupation::create(['code'=>'911105','title'=>'Mecânico de manutenção de bomba injetora (exceto de veículos automotores)','filter'=>'mecânico de manutenção de bomba injetora (exceto de veículos automotores)',]);

        CompanyOccupation::create(['code'=>'911110','title'=>'Mecânico de manutenção de bombas','filter'=>'mecânico de manutenção de bombas',]);

        CompanyOccupation::create(['code'=>'911115','title'=>'Mecânico de manutenção de compressores de ar','filter'=>'mecânico de manutenção de compressores de ar',]);

        CompanyOccupation::create(['code'=>'911120','title'=>'Mecânico de manutenção de motores diesel (exceto de veículos automotores)','filter'=>'mecânico de manutenção de motores diesel (exceto de veículos automotores)',]);

        CompanyOccupation::create(['code'=>'911125','title'=>'Mecânico de manutenção de redutores','filter'=>'mecânico de manutenção de redutores',]);

        CompanyOccupation::create(['code'=>'911130','title'=>'Mecânico de manutenção de turbinas (exceto de aeronaves)','filter'=>'mecânico de manutenção de turbinas (exceto de aeronaves)',]);

        CompanyOccupation::create(['code'=>'911135','title'=>'Mecânico de manutenção de turbocompressores','filter'=>'mecânico de manutenção de turbocompressores',]);

        CompanyOccupation::create(['code'=>'911205','title'=>'Mecânico de manutenção e instalação de aparelhos de climatização e refrigeração','filter'=>'mecânico de manutenção e instalação de aparelhos de climatização e refrigeração',]);

        CompanyOccupation::create(['code'=>'911305','title'=>'Mecânico de manutenção de máquinas, em geral','filter'=>'mecânico de manutenção de máquinas, em geral',]);

        CompanyOccupation::create(['code'=>'911310','title'=>'Mecânico de manutenção de máquinas gráficas','filter'=>'mecânico de manutenção de máquinas gráficas',]);

        CompanyOccupation::create(['code'=>'911315','title'=>'Mecânico de manutenção de máquinas operatrizes (lavra de madeira)','filter'=>'mecânico de manutenção de máquinas operatrizes (lavra de madeira)',]);

        CompanyOccupation::create(['code'=>'911320','title'=>'Mecânico de manutenção de máquinas têxteis','filter'=>'mecânico de manutenção de máquinas têxteis',]);

        CompanyOccupation::create(['code'=>'911325','title'=>'Mecânico de manutenção de máquinas-ferramentas (usinagem de metais)','filter'=>'mecânico de manutenção de máquinas-ferramentas (usinagem de metais)',]);

        CompanyOccupation::create(['code'=>'913105','title'=>'Mecânico de manutenção de aparelhos de levantamento','filter'=>'mecânico de manutenção de aparelhos de levantamento',]);

        CompanyOccupation::create(['code'=>'913110','title'=>'Mecânico de manutenção de equipamento de mineração','filter'=>'mecânico de manutenção de equipamento de mineração',]);

        CompanyOccupation::create(['code'=>'913115','title'=>'Mecânico de manutenção de máquinas agrícolas','filter'=>'mecânico de manutenção de máquinas agrícolas',]);

        CompanyOccupation::create(['code'=>'913120','title'=>'Mecânico de manutenção de máquinas de construção e terraplenagem','filter'=>'mecânico de manutenção de máquinas de construção e terraplenagem',]);

        CompanyOccupation::create(['code'=>'913125','title'=>'Vulcanizador de correias transportadoras','filter'=>'vulcanizador de correias transportadoras',]);

        CompanyOccupation::create(['code'=>'914105','title'=>'Mecânico de manutenção de aeronaves, em geral','filter'=>'mecânico de manutenção de aeronaves, em geral',]);

        CompanyOccupation::create(['code'=>'914110','title'=>'Mecânico de manutenção de sistema hidráulico de aeronaves (serviços de pista e hangar)','filter'=>'mecânico de manutenção de sistema hidráulico de aeronaves (serviços de pista e hangar)',]);

        CompanyOccupation::create(['code'=>'914205','title'=>'Mecânico de manutenção de motores e equipamentos navais','filter'=>'mecânico de manutenção de motores e equipamentos navais',]);

        CompanyOccupation::create(['code'=>'914305','title'=>'Mecânico de manutenção de veículos ferroviários','filter'=>'mecânico de manutenção de veículos ferroviários',]);

        CompanyOccupation::create(['code'=>'914405','title'=>'Mecânico de manutenção de automóveis, motocicletas e veículos similares','filter'=>'mecânico de manutenção de automóveis, motocicletas e veículos similares',]);

        CompanyOccupation::create(['code'=>'914410','title'=>'Mecânico de manutenção de empilhadeiras e outros veículos de cargas leves','filter'=>'mecânico de manutenção de empilhadeiras e outros veículos de cargas leves',]);

        CompanyOccupation::create(['code'=>'914415','title'=>'Mecânico de manutenção de motocicletas','filter'=>'mecânico de manutenção de motocicletas',]);

        CompanyOccupation::create(['code'=>'914420','title'=>'Mecânico de manutenção de tratores','filter'=>'mecânico de manutenção de tratores',]);

        CompanyOccupation::create(['code'=>'914425','title'=>'Mecânico de veículos automotores a diesel (exceto tratores)','filter'=>'mecânico de veículos automotores a diesel (exceto tratores)',]);

        CompanyOccupation::create(['code'=>'915105','title'=>'Técnico em manutenção de instrumentos de medição e precisão','filter'=>'técnico em manutenção de instrumentos de medição e precisão',]);

        CompanyOccupation::create(['code'=>'915110','title'=>'Técnico em manutenção de hidrômetros','filter'=>'técnico em manutenção de hidrômetros',]);

        CompanyOccupation::create(['code'=>'915115','title'=>'Técnico em manutenção de balanças','filter'=>'técnico em manutenção de balanças',]);

        CompanyOccupation::create(['code'=>'915205','title'=>'Restaurador de instrumentos musicais (exceto cordas arcadas)','filter'=>'restaurador de instrumentos musicais (exceto cordas arcadas)',]);

        CompanyOccupation::create(['code'=>'915210','title'=>'Reparador de instrumentos musicais','filter'=>'reparador de instrumentos musicais',]);

        CompanyOccupation::create(['code'=>'915215','title'=>'Luthier (restauração de cordas arcadas)','filter'=>'luthier (restauração de cordas arcadas)',]);

        CompanyOccupation::create(['code'=>'915305','title'=>'Técnico em manutenção de equipamentos e instrumentos médico-hospitalares','filter'=>'técnico em manutenção de equipamentos e instrumentos médico-hospitalares',]);

        CompanyOccupation::create(['code'=>'915405','title'=>'Reparador de equipamentos fotográficos','filter'=>'reparador de equipamentos fotográficos',]);

        CompanyOccupation::create(['code'=>'919105','title'=>'Lubrificador industrial','filter'=>'lubrificador industrial',]);

        CompanyOccupation::create(['code'=>'919110','title'=>'Lubrificador de veículos automotores (exceto embarcações)','filter'=>'lubrificador de veículos automotores (exceto embarcações)',]);

        CompanyOccupation::create(['code'=>'919115','title'=>'Lubrificador de embarcações','filter'=>'lubrificador de embarcações',]);

        CompanyOccupation::create(['code'=>'919205','title'=>'Mecânico de manutenção de máquinas cortadoras de grama, roçadeiras, motosserras e similares','filter'=>'mecânico de manutenção de máquinas cortadoras de grama, roçadeiras, motosserras e similares',]);

        CompanyOccupation::create(['code'=>'919305','title'=>'Mecânico de manutenção de aparelhos esportivos e de ginástica','filter'=>'mecânico de manutenção de aparelhos esportivos e de ginástica',]);

        CompanyOccupation::create(['code'=>'919310','title'=>'Mecânico de manutenção de bicicletas e veículos similares','filter'=>'mecânico de manutenção de bicicletas e veículos similares',]);

        CompanyOccupation::create(['code'=>'919315','title'=>'Montador de bicicletas','filter'=>'montador de bicicletas',]);

        CompanyOccupation::create(['code'=>'950105','title'=>'Supervisor de manutenção elétrica de alta tensão industrial','filter'=>'supervisor de manutenção elétrica de alta tensão industrial',]);

        CompanyOccupation::create(['code'=>'950110','title'=>'Supervisor de manutenção eletromecânica industrial, comercial e predial','filter'=>'supervisor de manutenção eletromecânica industrial, comercial e predial',]);

        CompanyOccupation::create(['code'=>'950205','title'=>'Encarregado de manutenção elétrica de veículos','filter'=>'encarregado de manutenção elétrica de veículos',]);

        CompanyOccupation::create(['code'=>'950305','title'=>'Supervisor de manutenção eletromecânica','filter'=>'supervisor de manutenção eletromecânica',]);

        CompanyOccupation::create(['code'=>'951105','title'=>'Eletricista de manutenção eletroeletrônica','filter'=>'eletricista de manutenção eletroeletrônica',]);

        CompanyOccupation::create(['code'=>'951305','title'=>'Instalador de sistemas eletroeletrônicos de segurança','filter'=>'instalador de sistemas eletroeletrônicos de segurança',]);

        CompanyOccupation::create(['code'=>'951310','title'=>'Mantenedor de sistemas eletroeletrônicos de segurança','filter'=>'mantenedor de sistemas eletroeletrônicos de segurança',]);

        CompanyOccupation::create(['code'=>'951315','title'=>'Monitor de sistemas eletrônicos de segurança interno','filter'=>'monitor de sistemas eletrônicos de segurança interno',]);

        CompanyOccupation::create(['code'=>'951320','title'=>'Monitor de sistemas eletrônicos de segurança externo','filter'=>'monitor de sistemas eletrônicos de segurança externo',]);

        CompanyOccupation::create(['code'=>'953105','title'=>'Eletricista de instalações (aeronaves)','filter'=>'eletricista de instalações (aeronaves)',]);

        CompanyOccupation::create(['code'=>'953110','title'=>'Eletricista de instalações (embarcações)','filter'=>'eletricista de instalações (embarcações)',]);

        CompanyOccupation::create(['code'=>'953115','title'=>'Eletricista de instalações (veículos automotores e máquinas operatrizes, exceto aeronaves e embarcações)','filter'=>'eletricista de instalações (veículos automotores e máquinas operatrizes, exceto aeronaves e embarcações)',]);

        CompanyOccupation::create(['code'=>'954105','title'=>'Eletromecânico de manutenção de elevadores','filter'=>'eletromecânico de manutenção de elevadores',]);

        CompanyOccupation::create(['code'=>'954110','title'=>'Eletromecânico de manutenção de escadas rolantes','filter'=>'eletromecânico de manutenção de escadas rolantes',]);

        CompanyOccupation::create(['code'=>'954115','title'=>'Eletromecânico de manutenção de portas automáticas','filter'=>'eletromecânico de manutenção de portas automáticas',]);

        CompanyOccupation::create(['code'=>'954120','title'=>'Mecânico de manutenção de instalações mecânicas de edifícios','filter'=>'mecânico de manutenção de instalações mecânicas de edifícios',]);

        CompanyOccupation::create(['code'=>'954125','title'=>'Operador eletromecânico','filter'=>'operador eletromecânico',]);

        CompanyOccupation::create(['code'=>'954205','title'=>'Reparador de aparelhos eletrodomésticos (exceto imagem e som)','filter'=>'reparador de aparelhos eletrodomésticos (exceto imagem e som)',]);

        CompanyOccupation::create(['code'=>'954210','title'=>'Reparador de rádio, tv e som','filter'=>'reparador de rádio, tv e som',]);

        CompanyOccupation::create(['code'=>'954305','title'=>'Reparador de equipamentos de escritório','filter'=>'reparador de equipamentos de escritório',]);

        CompanyOccupation::create(['code'=>'991105','title'=>'Conservador de via permanente (trilhos)','filter'=>'conservador de via permanente (trilhos)',]);

        CompanyOccupation::create(['code'=>'991110','title'=>'Inspetor de via permanente (trilhos)','filter'=>'inspetor de via permanente (trilhos)',]);

        CompanyOccupation::create(['code'=>'991115','title'=>'Operador de máquinas especiais em conservação de via permanente (trilhos)','filter'=>'operador de máquinas especiais em conservação de via permanente (trilhos)',]);

        CompanyOccupation::create(['code'=>'991120','title'=>'Soldador aluminotérmico em conservação de trilhos','filter'=>'soldador aluminotérmico em conservação de trilhos',]);

        CompanyOccupation::create(['code'=>'991205','title'=>'Mantenedor de equipamentos de parques de diversões e similares','filter'=>'mantenedor de equipamentos de parques de diversões e similares',]);

        CompanyOccupation::create(['code'=>'991305','title'=>'Funileiro de veículos (reparação)','filter'=>'funileiro de veículos (reparação)',]);

        CompanyOccupation::create(['code'=>'991310','title'=>'Montador de veículos (reparação)','filter'=>'montador de veículos (reparação)',]);

        CompanyOccupation::create(['code'=>'991315','title'=>'Pintor de veículos (reparação)','filter'=>'pintor de veículos (reparação)',]);

        CompanyOccupation::create(['code'=>'992105','title'=>'Alinhador de pneus','filter'=>'alinhador de pneus',]);

        CompanyOccupation::create(['code'=>'992110','title'=>'Balanceador','filter'=>'balanceador',]);

        CompanyOccupation::create(['code'=>'992115','title'=>'Borracheiro','filter'=>'borracheiro',]);

        CompanyOccupation::create(['code'=>'992120','title'=>'Lavador de peças','filter'=>'lavador de peças',]);

        CompanyOccupation::create(['code'=>'992205','title'=>'Encarregado geral de operações de conservação de vias permanentes (exceto trilhos)','filter'=>'encarregado geral de operações de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupation::create(['code'=>'992210','title'=>'Encarregado de equipe de conservação de vias permanentes (exceto trilhos)','filter'=>'encarregado de equipe de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupation::create(['code'=>'992215','title'=>'Operador de ceifadeira na conservação de vias permanentes','filter'=>'operador de ceifadeira na conservação de vias permanentes',]);

        CompanyOccupation::create(['code'=>'992220','title'=>'Pedreiro de conservação de vias permanentes (exceto trilhos)','filter'=>'pedreiro de conservação de vias permanentes (exceto trilhos)',]);

        CompanyOccupation::create(['code'=>'992225','title'=>'Auxiliar geral de conservação de vias permanentes (exceto trilhos)','filter'=>'auxiliar geral de conservação de vias permanentes (exceto trilhos)',]);
    }
}
