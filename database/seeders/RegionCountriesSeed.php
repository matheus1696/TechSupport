<?php

namespace Database\Seeders;

use App\Models\Region\RegionCountriesModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegionCountriesSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        RegionCountriesModel::create([ 'id'=>4, 'sg_pais_2'=>"AF", 'sg_pais_3'=>"AFG", 'no_pais'=>"Afeganistão", 'ft_pais'=>"afeganistão", 'no_pais_ingles'=>"Afghanistan", 'ft_pais_ingles'=>"afghanistan", 'cod_pais_iso'=>4, ]);

        RegionCountriesModel::create([ 'id'=>248, 'sg_pais_2'=>"ZA", 'sg_pais_3'=>"ZAF", 'no_pais'=>"África do Sul", 'ft_pais'=>"áfrica do sul", 'no_pais_ingles'=>"South Africa", 'ft_pais_ingles'=>"south africa", 'cod_pais_iso'=>248, ]);

        RegionCountriesModel::create([ 'id'=>8, 'sg_pais_2'=>"AL", 'sg_pais_3'=>"ALB", 'no_pais'=>"Albânia", 'ft_pais'=>"albânia", 'no_pais_ingles'=>"Albania", 'ft_pais_ingles'=>"albania", 'cod_pais_iso'=>8, ]);

        RegionCountriesModel::create([ 'id'=>12, 'sg_pais_2'=>"DE", 'sg_pais_3'=>"DEU", 'no_pais'=>"Alemanha", 'ft_pais'=>"alemanha", 'no_pais_ingles'=>"Germany", 'ft_pais_ingles'=>"germany", 'cod_pais_iso'=>12, ]);

        RegionCountriesModel::create([ 'id'=>16, 'sg_pais_2'=>"AD", 'sg_pais_3'=>"AND", 'no_pais'=>"Andorra", 'ft_pais'=>"andorra", 'no_pais_ingles'=>"Andorra", 'ft_pais_ingles'=>"andorra", 'cod_pais_iso'=>16, ]);

        RegionCountriesModel::create([ 'id'=>20, 'sg_pais_2'=>"AO", 'sg_pais_3'=>"AGO", 'no_pais'=>"Angola", 'ft_pais'=>"angola", 'no_pais_ingles'=>"Angola", 'ft_pais_ingles'=>"angola", 'cod_pais_iso'=>20, ]);

        RegionCountriesModel::create([ 'id'=>24, 'sg_pais_2'=>"AI", 'sg_pais_3'=>"AIA", 'no_pais'=>"Anguila", 'ft_pais'=>"anguila", 'no_pais_ingles'=>"Anguilla", 'ft_pais_ingles'=>"anguilla", 'cod_pais_iso'=>24, ]);

        RegionCountriesModel::create([ 'id'=>660, 'sg_pais_2'=>"AQ", 'sg_pais_3'=>"ATA", 'no_pais'=>"Antártica", 'ft_pais'=>"antártica", 'no_pais_ingles'=>"Antarctica", 'ft_pais_ingles'=>"antarctica", 'cod_pais_iso'=>660, ]);

        RegionCountriesModel::create([ 'id'=>10, 'sg_pais_2'=>"AG", 'sg_pais_3'=>"ATG", 'no_pais'=>"Antígua e Barbuda", 'ft_pais'=>"antígua e barbuda", 'no_pais_ingles'=>"antigua and barbuda", 'ft_pais_ingles'=>"antigua and barbuda", 'cod_pais_iso'=>10, ]);

        RegionCountriesModel::create([ 'id'=>28, 'sg_pais_2'=>"SA", 'sg_pais_3'=>"SAU", 'no_pais'=>"Arábia Saudita", 'ft_pais'=>"arábia saudita", 'no_pais_ingles'=>"Saudi Arabia", 'ft_pais_ingles'=>"saudi arabia", 'cod_pais_iso'=>28, ]);

        RegionCountriesModel::create([ 'id'=>32, 'sg_pais_2'=>"DZ", 'sg_pais_3'=>"DZA", 'no_pais'=>"Argélia", 'ft_pais'=>"argélia", 'no_pais_ingles'=>"Algeria", 'ft_pais_ingles'=>"algeria", 'cod_pais_iso'=>32, ]);

        RegionCountriesModel::create([ 'id'=>51, 'sg_pais_2'=>"AR", 'sg_pais_3'=>"ARG", 'no_pais'=>"Argentina", 'ft_pais'=>"argentina", 'no_pais_ingles'=>"Argentina", 'ft_pais_ingles'=>"argentina", 'cod_pais_iso'=>51, ]);

        RegionCountriesModel::create([ 'id'=>533, 'sg_pais_2'=>"AM", 'sg_pais_3'=>"ARM", 'no_pais'=>"Armênia", 'ft_pais'=>"armênia", 'no_pais_ingles'=>"Armenia", 'ft_pais_ingles'=>"armenia", 'cod_pais_iso'=>533, ]);

        RegionCountriesModel::create([ 'id'=>36, 'sg_pais_2'=>"AW", 'sg_pais_3'=>"ABW", 'no_pais'=>"Aruba", 'ft_pais'=>"aruba", 'no_pais_ingles'=>"aruba", 'ft_pais_ingles'=>"aruba", 'cod_pais_iso'=>36, ]);

        RegionCountriesModel::create([ 'id'=>40, 'sg_pais_2'=>"AU", 'sg_pais_3'=>"AUS", 'no_pais'=>"Austrália", 'ft_pais'=>"austrália", 'no_pais_ingles'=>"Australia", 'ft_pais_ingles'=>"australia", 'cod_pais_iso'=>40, ]);

        RegionCountriesModel::create([ 'id'=>31, 'sg_pais_2'=>"AT", 'sg_pais_3'=>"AUT", 'no_pais'=>"Áustria", 'ft_pais'=>"áustria", 'no_pais_ingles'=>"Austria", 'ft_pais_ingles'=>"austria", 'cod_pais_iso'=>31, ]);

        RegionCountriesModel::create([ 'id'=>44, 'sg_pais_2'=>"AZ", 'sg_pais_3'=>"AZE", 'no_pais'=>"Azerbaijão", 'ft_pais'=>"azerbaijão", 'no_pais_ingles'=>"Azerbaijan", 'ft_pais_ingles'=>"azerbaijan", 'cod_pais_iso'=>44, ]);

        RegionCountriesModel::create([ 'id'=>48, 'sg_pais_2'=>"BS", 'sg_pais_3'=>"BHS", 'no_pais'=>"Bahamas", 'ft_pais'=>"bahamas", 'no_pais_ingles'=>"Bahamas", 'ft_pais_ingles'=>"bahamas", 'cod_pais_iso'=>48, ]);

        RegionCountriesModel::create([ 'id'=>50, 'sg_pais_2'=>"BH", 'sg_pais_3'=>"BHR", 'no_pais'=>"Bahrein", 'ft_pais'=>"bahrein", 'no_pais_ingles'=>"bahrain", 'ft_pais_ingles'=>"bahrain", 'cod_pais_iso'=>50, ]);

        RegionCountriesModel::create([ 'id'=>52, 'sg_pais_2'=>"BD", 'sg_pais_3'=>"BGD", 'no_pais'=>"Bangladesh", 'ft_pais'=>"bangladesh", 'no_pais_ingles'=>"Bangladesh", 'ft_pais_ingles'=>"bangladesh", 'cod_pais_iso'=>52, ]);

        RegionCountriesModel::create([ 'id'=>112, 'sg_pais_2'=>"BB", 'sg_pais_3'=>"BRB", 'no_pais'=>"Barbados", 'ft_pais'=>"barbados", 'no_pais_ingles'=>"barbados", 'ft_pais_ingles'=>"barbados", 'cod_pais_iso'=>112, ]);

        RegionCountriesModel::create([ 'id'=>56, 'sg_pais_2'=>"BY", 'sg_pais_3'=>"BLR", 'no_pais'=>"Belarus", 'ft_pais'=>"belarus", 'no_pais_ingles'=>"Belarus", 'ft_pais_ingles'=>"belarus", 'cod_pais_iso'=>56, ]);

        RegionCountriesModel::create([ 'id'=>84, 'sg_pais_2'=>"BE", 'sg_pais_3'=>"BEL", 'no_pais'=>"Bélgica", 'ft_pais'=>"bélgica", 'no_pais_ingles'=>"Belgium", 'ft_pais_ingles'=>"belgium", 'cod_pais_iso'=>84, ]);

        RegionCountriesModel::create([ 'id'=>204, 'sg_pais_2'=>"BZ", 'sg_pais_3'=>"BLZ", 'no_pais'=>"Belize", 'ft_pais'=>"belize", 'no_pais_ingles'=>"Belize", 'ft_pais_ingles'=>"belize", 'cod_pais_iso'=>204, ]);

        RegionCountriesModel::create([ 'id'=>60, 'sg_pais_2'=>"BJ", 'sg_pais_3'=>"BEN", 'no_pais'=>"Benin", 'ft_pais'=>"benin", 'no_pais_ingles'=>"Benin", 'ft_pais_ingles'=>"benin", 'cod_pais_iso'=>60, ]);

        RegionCountriesModel::create([ 'id'=>64, 'sg_pais_2'=>"BM", 'sg_pais_3'=>"BMU", 'no_pais'=>"Bermudas", 'ft_pais'=>"bermudas", 'no_pais_ingles'=>"Bermuda", 'ft_pais_ingles'=>"bermuda", 'cod_pais_iso'=>64, ]);

        RegionCountriesModel::create([ 'id'=>68, 'sg_pais_2'=>"BO", 'sg_pais_3'=>"BOL", 'no_pais'=>"Bolívia", 'ft_pais'=>"bolívia", 'no_pais_ingles'=>"Bolivia", 'ft_pais_ingles'=>"bolivia", 'cod_pais_iso'=>68, ]);

        RegionCountriesModel::create([ 'id'=>70, 'sg_pais_2'=>"BA", 'sg_pais_3'=>"BIH", 'no_pais'=>"Bósnia e Herzegovina", 'ft_pais'=>"bósnia e herzegovina", 'no_pais_ingles'=>"Bosnia and Herzegovina", 'ft_pais_ingles'=>"bosnia and herzegovina", 'cod_pais_iso'=>70, ]);

        RegionCountriesModel::create([ 'id'=>72, 'sg_pais_2'=>"BW", 'sg_pais_3'=>"BWA", 'no_pais'=>"Botsuana", 'ft_pais'=>"botsuana", 'no_pais_ingles'=>"Botswana", 'ft_pais_ingles'=>"botswana", 'cod_pais_iso'=>72, ]);

        RegionCountriesModel::create([ 'id'=>74, 'sg_pais_2'=>"BR", 'sg_pais_3'=>"BRA", 'no_pais'=>"Brasil", 'ft_pais'=>"brasil", 'no_pais_ingles'=>"Brazil", 'ft_pais_ingles'=>"brazil", 'cod_pais_iso'=>74, 'st_pais'=>true, ]);

        RegionCountriesModel::create([ 'id'=>76, 'sg_pais_2'=>"BN", 'sg_pais_3'=>"BRN", 'no_pais'=>"Brunei", 'ft_pais'=>"brunei", 'no_pais_ingles'=>"Brunei", 'ft_pais_ingles'=>"brunei", 'cod_pais_iso'=>76, ]);

        RegionCountriesModel::create([ 'id'=>86, 'sg_pais_2'=>"BG", 'sg_pais_3'=>"BGR", 'no_pais'=>"Bulgária", 'ft_pais'=>"bulgária", 'no_pais_ingles'=>"Bulgaria", 'ft_pais_ingles'=>"bulgaria", 'cod_pais_iso'=>86, ]);

        RegionCountriesModel::create([ 'id'=>92, 'sg_pais_2'=>"BF", 'sg_pais_3'=>"BFA", 'no_pais'=>"Burkina Faso", 'ft_pais'=>"burkina faso", 'no_pais_ingles'=>"burkina faso", 'ft_pais_ingles'=>"burkina faso", 'cod_pais_iso'=>92, ]);

        RegionCountriesModel::create([ 'id'=>96, 'sg_pais_2'=>"BI", 'sg_pais_3'=>"BDI", 'no_pais'=>"Burundi", 'ft_pais'=>"burundi", 'no_pais_ingles'=>"Burundi", 'ft_pais_ingles'=>"burundi", 'cod_pais_iso'=>96, ]);

        RegionCountriesModel::create([ 'id'=>100, 'sg_pais_2'=>"BT", 'sg_pais_3'=>"BTN", 'no_pais'=>"Butão", 'ft_pais'=>"butão", 'no_pais_ingles'=>"Bhutan", 'ft_pais_ingles'=>"bhutan", 'cod_pais_iso'=>100, ]);

        RegionCountriesModel::create([ 'id'=>854, 'sg_pais_2'=>"CV", 'sg_pais_3'=>"CPV", 'no_pais'=>"Cabo Verde", 'ft_pais'=>"cabo verde", 'no_pais_ingles'=>"Cape Green", 'ft_pais_ingles'=>"cape green", 'cod_pais_iso'=>854, ]);

        RegionCountriesModel::create([ 'id'=>108, 'sg_pais_2'=>"CM", 'sg_pais_3'=>"CMR", 'no_pais'=>"Camarões", 'ft_pais'=>"camarões", 'no_pais_ingles'=>"Cameroon", 'ft_pais_ingles'=>"cameroon", 'cod_pais_iso'=>108, ]);

        RegionCountriesModel::create([ 'id'=>116, 'sg_pais_2'=>"KH", 'sg_pais_3'=>"KHM", 'no_pais'=>"Camboja", 'ft_pais'=>"camboja", 'no_pais_ingles'=>"Cambodia", 'ft_pais_ingles'=>"cambodia", 'cod_pais_iso'=>116, ]);

        RegionCountriesModel::create([ 'id'=>120, 'sg_pais_2'=>"CA", 'sg_pais_3'=>"CAN", 'no_pais'=>"Canadá", 'ft_pais'=>"canadá", 'no_pais_ingles'=>"Canada", 'ft_pais_ingles'=>"canada", 'cod_pais_iso'=>120, ]);

        RegionCountriesModel::create([ 'id'=>124, 'sg_pais_2'=>"KZ", 'sg_pais_3'=>"KAZ", 'no_pais'=>"Cazaquistão", 'ft_pais'=>"cazaquistão", 'no_pais_ingles'=>"Kazakhstan", 'ft_pais_ingles'=>"kazakhstan", 'cod_pais_iso'=>124, ]);

        RegionCountriesModel::create([ 'id'=>132, 'sg_pais_2'=>"TD", 'sg_pais_3'=>"TCD", 'no_pais'=>"Chade", 'ft_pais'=>"chade", 'no_pais_ingles'=>"Chad", 'ft_pais_ingles'=>"chad", 'cod_pais_iso'=>132, ]);

        RegionCountriesModel::create([ 'id'=>535, 'sg_pais_2'=>"CL", 'sg_pais_3'=>"CHL", 'no_pais'=>"Chile", 'ft_pais'=>"chile", 'no_pais_ingles'=>"Chile", 'ft_pais_ingles'=>"chile", 'cod_pais_iso'=>535, ]);

        RegionCountriesModel::create([ 'id'=>136, 'sg_pais_2'=>"CN", 'sg_pais_3'=>"CHN", 'no_pais'=>"China", 'ft_pais'=>"china", 'no_pais_ingles'=>"China", 'ft_pais_ingles'=>"china", 'cod_pais_iso'=>136, ]);

        RegionCountriesModel::create([ 'id'=>140, 'sg_pais_2'=>"CY", 'sg_pais_3'=>"CYP", 'no_pais'=>"Chipre", 'ft_pais'=>"chipre", 'no_pais_ingles'=>"Cyprus", 'ft_pais_ingles'=>"cyprus", 'cod_pais_iso'=>140, ]);

        RegionCountriesModel::create([ 'id'=>148, 'sg_pais_2'=>"VA", 'sg_pais_3'=>"VAT", 'no_pais'=>"Cidade do Vaticano", 'ft_pais'=>"cidade do vaticano", 'no_pais_ingles'=>"Vatican CITY", 'ft_pais_ingles'=>"vatican city", 'cod_pais_iso'=>148, ]);

        RegionCountriesModel::create([ 'id'=>152, 'sg_pais_2'=>"SG", 'sg_pais_3'=>"SGP", 'no_pais'=>"Cingapura", 'ft_pais'=>"cingapura", 'no_pais_ingles'=>"Singapore", 'ft_pais_ingles'=>"singapore", 'cod_pais_iso'=>152, ]);

        RegionCountriesModel::create([ 'id'=>156, 'sg_pais_2'=>"CO", 'sg_pais_3'=>"COL", 'no_pais'=>"Colômbia", 'ft_pais'=>"colômbia", 'no_pais_ingles'=>"Colombia", 'ft_pais_ingles'=>"colombia", 'cod_pais_iso'=>156, ]);

        RegionCountriesModel::create([ 'id'=>162, 'sg_pais_2'=>"KM", 'sg_pais_3'=>"COM", 'no_pais'=>"Comores", 'ft_pais'=>"comores", 'no_pais_ingles'=>"Comoros", 'ft_pais_ingles'=>"comoros", 'cod_pais_iso'=>162, ]);

        RegionCountriesModel::create([ 'id'=>166, 'sg_pais_2'=>"KP", 'sg_pais_3'=>"PRK", 'no_pais'=>"Coréia do Norte", 'ft_pais'=>"coréia do norte", 'no_pais_ingles'=>"North Korea", 'ft_pais_ingles'=>"north korea", 'cod_pais_iso'=>166, ]);

        RegionCountriesModel::create([ 'id'=>170, 'sg_pais_2'=>"KR", 'sg_pais_3'=>"KOR", 'no_pais'=>"Coréia do Sul", 'ft_pais'=>"coréia do sul", 'no_pais_ingles'=>"South Korea", 'ft_pais_ingles'=>"south korea", 'cod_pais_iso'=>170, ]);

        RegionCountriesModel::create([ 'id'=>174, 'sg_pais_2'=>"CI", 'sg_pais_3'=>"CIV", 'no_pais'=>"Costa do Marfim", 'ft_pais'=>"costa do marfim", 'no_pais_ingles'=>"Costa do Marfim", 'ft_pais_ingles'=>"costa do marfim", 'cod_pais_iso'=>174, ]);

        RegionCountriesModel::create([ 'id'=>184, 'sg_pais_2'=>"CR", 'sg_pais_3'=>"CRI", 'no_pais'=>"Costa Rica", 'ft_pais'=>"costa rica", 'no_pais_ingles'=>"Costa Rica", 'ft_pais_ingles'=>"costa rica", 'cod_pais_iso'=>184, ]);

        RegionCountriesModel::create([ 'id'=>188, 'sg_pais_2'=>"HR", 'sg_pais_3'=>"HRV", 'no_pais'=>"Croácia", 'ft_pais'=>"croácia", 'no_pais_ingles'=>"Croatia", 'ft_pais_ingles'=>"croatia", 'cod_pais_iso'=>188, ]);

        RegionCountriesModel::create([ 'id'=>191, 'sg_pais_2'=>"CU", 'sg_pais_3'=>"CUB", 'no_pais'=>"Cuba", 'ft_pais'=>"cuba", 'no_pais_ingles'=>"Cuba", 'ft_pais_ingles'=>"cuba", 'cod_pais_iso'=>191, ]);

        RegionCountriesModel::create([ 'id'=>192, 'sg_pais_2'=>"CW", 'sg_pais_3'=>"CUW", 'no_pais'=>"Curaçao", 'ft_pais'=>"curaçao", 'no_pais_ingles'=>"curacao", 'ft_pais_ingles'=>"curacao", 'cod_pais_iso'=>192, ]);

        RegionCountriesModel::create([ 'id'=>531, 'sg_pais_2'=>"DK", 'sg_pais_3'=>"DNK", 'no_pais'=>"Dinamarca", 'ft_pais'=>"dinamarca", 'no_pais_ingles'=>"Denmark", 'ft_pais_ingles'=>"denmark", 'cod_pais_iso'=>531, ]);

        RegionCountriesModel::create([ 'id'=>196, 'sg_pais_2'=>"DJ", 'sg_pais_3'=>"DJI", 'no_pais'=>"Djibouti", 'ft_pais'=>"djibouti", 'no_pais_ingles'=>"Djibouti", 'ft_pais_ingles'=>"djibouti", 'cod_pais_iso'=>196, ]);

        RegionCountriesModel::create([ 'id'=>203, 'sg_pais_2'=>"DM", 'sg_pais_3'=>"DMA", 'no_pais'=>"Dominica", 'ft_pais'=>"dominica", 'no_pais_ingles'=>"dominica", 'ft_pais_ingles'=>"dominica", 'cod_pais_iso'=>203, ]);

        RegionCountriesModel::create([ 'id'=>180, 'sg_pais_2'=>"EG", 'sg_pais_3'=>"EGY", 'no_pais'=>"Egito", 'ft_pais'=>"egito", 'no_pais_ingles'=>"Egypt", 'ft_pais_ingles'=>"egypt", 'cod_pais_iso'=>180, ]);

        RegionCountriesModel::create([ 'id'=>208, 'sg_pais_2'=>"SV", 'sg_pais_3'=>"SLV", 'no_pais'=>"El Salvador", 'ft_pais'=>"el salvador", 'no_pais_ingles'=>"El Salvador", 'ft_pais_ingles'=>"el salvador", 'cod_pais_iso'=>208, ]);

        RegionCountriesModel::create([ 'id'=>262, 'sg_pais_2'=>"AE", 'sg_pais_3'=>"ARE", 'no_pais'=>"Emirados Árabes Unidos", 'ft_pais'=>"emirados árabes unidos", 'no_pais_ingles'=>"United Arab Emirates", 'ft_pais_ingles'=>"united arab emirates", 'cod_pais_iso'=>262, ]);

        RegionCountriesModel::create([ 'id'=>212, 'sg_pais_2'=>"EC", 'sg_pais_3'=>"ECU", 'no_pais'=>"Equador", 'ft_pais'=>"equador", 'no_pais_ingles'=>"Ecuador", 'ft_pais_ingles'=>"ecuador", 'cod_pais_iso'=>212, ]);

        RegionCountriesModel::create([ 'id'=>214, 'sg_pais_2'=>"ER", 'sg_pais_3'=>"ERI", 'no_pais'=>"Eritreia", 'ft_pais'=>"eritreia", 'no_pais_ingles'=>"eritrea", 'ft_pais_ingles'=>"eritrea", 'cod_pais_iso'=>214, ]);

        RegionCountriesModel::create([ 'id'=>626, 'sg_pais_2'=>"SK", 'sg_pais_3'=>"SVK", 'no_pais'=>"Eslováquia", 'ft_pais'=>"eslováquia", 'no_pais_ingles'=>"Slovakia", 'ft_pais_ingles'=>"slovakia", 'cod_pais_iso'=>626, ]);

        RegionCountriesModel::create([ 'id'=>218, 'sg_pais_2'=>"SI", 'sg_pais_3'=>"SVN", 'no_pais'=>"Eslovênia", 'ft_pais'=>"eslovênia", 'no_pais_ingles'=>"Slovenia", 'ft_pais_ingles'=>"slovenia", 'cod_pais_iso'=>218, ]);

        RegionCountriesModel::create([ 'id'=>818, 'sg_pais_2'=>"ES", 'sg_pais_3'=>"ESP", 'no_pais'=>"Espanha", 'ft_pais'=>"espanha", 'no_pais_ingles'=>"Spain", 'ft_pais_ingles'=>"spain", 'cod_pais_iso'=>818, ]);

        RegionCountriesModel::create([ 'id'=>222, 'sg_pais_2'=>"FM", 'sg_pais_3'=>"FSM", 'no_pais'=>"Estados Federados da Micronésia", 'ft_pais'=>"estados federados da micronésia", 'no_pais_ingles'=>"Federated States of Micronesia", 'ft_pais_ingles'=>"federated states of micronesia", 'cod_pais_iso'=>222, ]);

        RegionCountriesModel::create([ 'id'=>226, 'sg_pais_2'=>"US", 'sg_pais_3'=>"USA", 'no_pais'=>"Estados Unidos da América", 'ft_pais'=>"estados unidos da américa", 'no_pais_ingles'=>"USA", 'ft_pais_ingles'=>"usa", 'cod_pais_iso'=>226, ]);

        RegionCountriesModel::create([ 'id'=>232, 'sg_pais_2'=>"EE", 'sg_pais_3'=>"EST", 'no_pais'=>"Estônia", 'ft_pais'=>"estônia", 'no_pais_ingles'=>"Estonia", 'ft_pais_ingles'=>"estonia", 'cod_pais_iso'=>232, ]);

        RegionCountriesModel::create([ 'id'=>233, 'sg_pais_2'=>"SZ", 'sg_pais_3'=>"SWZ", 'no_pais'=>"Eswatini", 'ft_pais'=>"eswatini", 'no_pais_ingles'=>"eswatini", 'ft_pais_ingles'=>"eswatini", 'cod_pais_iso'=>233, ]);

        RegionCountriesModel::create([ 'id'=>748, 'sg_pais_2'=>"ET", 'sg_pais_3'=>"ETH", 'no_pais'=>"Etiópia", 'ft_pais'=>"etiópia", 'no_pais_ingles'=>"Ethiopia", 'ft_pais_ingles'=>"ethiopia", 'cod_pais_iso'=>748, ]);

        RegionCountriesModel::create([ 'id'=>231, 'sg_pais_2'=>"FJ", 'sg_pais_3'=>"FJI", 'no_pais'=>"Fiji", 'ft_pais'=>"fiji", 'no_pais_ingles'=>"fiji", 'ft_pais_ingles'=>"fiji", 'cod_pais_iso'=>231, ]);

        RegionCountriesModel::create([ 'id'=>238, 'sg_pais_2'=>"PH", 'sg_pais_3'=>"PHL", 'no_pais'=>"Filipinas", 'ft_pais'=>"filipinas", 'no_pais_ingles'=>"Philippines", 'ft_pais_ingles'=>"philippines", 'cod_pais_iso'=>238, ]);

        RegionCountriesModel::create([ 'id'=>234, 'sg_pais_2'=>"FI", 'sg_pais_3'=>"FIN", 'no_pais'=>"Finlândia", 'ft_pais'=>"finlândia", 'no_pais_ingles'=>"Finland", 'ft_pais_ingles'=>"finland", 'cod_pais_iso'=>234, ]);

        RegionCountriesModel::create([ 'id'=>583, 'sg_pais_2'=>"FR", 'sg_pais_3'=>"FRA", 'no_pais'=>"França", 'ft_pais'=>"frança", 'no_pais_ingles'=>"France", 'ft_pais_ingles'=>"france", 'cod_pais_iso'=>583, ]);

        RegionCountriesModel::create([ 'id'=>242, 'sg_pais_2'=>"GA", 'sg_pais_3'=>"GAB", 'no_pais'=>"Gabão", 'ft_pais'=>"gabão", 'no_pais_ingles'=>"Gabon", 'ft_pais_ingles'=>"gabon", 'cod_pais_iso'=>242, ]);

        RegionCountriesModel::create([ 'id'=>246, 'sg_pais_2'=>"GM", 'sg_pais_3'=>"GMB", 'no_pais'=>"Gâmbia", 'ft_pais'=>"gâmbia", 'no_pais_ingles'=>"Gambia", 'ft_pais_ingles'=>"gambia", 'cod_pais_iso'=>246, ]);

        RegionCountriesModel::create([ 'id'=>250, 'sg_pais_2'=>"GH", 'sg_pais_3'=>"GHA", 'no_pais'=>"Gana", 'ft_pais'=>"gana", 'no_pais_ingles'=>"Ghana", 'ft_pais_ingles'=>"ghana", 'cod_pais_iso'=>250, ]);

        RegionCountriesModel::create([ 'id'=>254, 'sg_pais_2'=>"GE", 'sg_pais_3'=>"GEO", 'no_pais'=>"Geórgia", 'ft_pais'=>"geórgia", 'no_pais_ingles'=>"Georgia", 'ft_pais_ingles'=>"georgia", 'cod_pais_iso'=>254, ]);

        RegionCountriesModel::create([ 'id'=>258, 'sg_pais_2'=>"GS", 'sg_pais_3'=>"SGS", 'no_pais'=>"Geórgia do Sul e as Ilhas Sandwich do Sul", 'ft_pais'=>"geórgia do sul e as ilhas sandwich do sul", 'no_pais_ingles'=>"South Georgia and the South Sandwich Islands", 'ft_pais_ingles'=>"south georgia and the south sandwich islands", 'cod_pais_iso'=>258, ]);

        RegionCountriesModel::create([ 'id'=>260, 'sg_pais_2'=>"GI", 'sg_pais_3'=>"GIB", 'no_pais'=>"Gibraltar", 'ft_pais'=>"gibraltar", 'no_pais_ingles'=>"Gibraltar", 'ft_pais_ingles'=>"gibraltar", 'cod_pais_iso'=>260, ]);

        RegionCountriesModel::create([ 'id'=>266, 'sg_pais_2'=>"GR", 'sg_pais_3'=>"GRC", 'no_pais'=>"Grécia", 'ft_pais'=>"grécia", 'no_pais_ingles'=>"Greece", 'ft_pais_ingles'=>"greece", 'cod_pais_iso'=>266, ]);

        RegionCountriesModel::create([ 'id'=>270, 'sg_pais_2'=>"GD", 'sg_pais_3'=>"GRD", 'no_pais'=>"Grenada", 'ft_pais'=>"grenada", 'no_pais_ingles'=>"grenade", 'ft_pais_ingles'=>"grenade", 'cod_pais_iso'=>270, ]);

        RegionCountriesModel::create([ 'id'=>268, 'sg_pais_2'=>"GL", 'sg_pais_3'=>"GRL", 'no_pais'=>"Gronelândia", 'ft_pais'=>"gronelândia", 'no_pais_ingles'=>"Greenland", 'ft_pais_ingles'=>"greenland", 'cod_pais_iso'=>268, ]);

        RegionCountriesModel::create([ 'id'=>276, 'sg_pais_2'=>"GP", 'sg_pais_3'=>"GLP", 'no_pais'=>"Guadalupe", 'ft_pais'=>"guadalupe", 'no_pais_ingles'=>"Guadeloupe", 'ft_pais_ingles'=>"guadeloupe", 'cod_pais_iso'=>276, ]);

        RegionCountriesModel::create([ 'id'=>288, 'sg_pais_2'=>"GU", 'sg_pais_3'=>"GUM", 'no_pais'=>"Guam", 'ft_pais'=>"guam", 'no_pais_ingles'=>"Guam", 'ft_pais_ingles'=>"guam", 'cod_pais_iso'=>288, ]);

        RegionCountriesModel::create([ 'id'=>292, 'sg_pais_2'=>"GT", 'sg_pais_3'=>"GTM", 'no_pais'=>"Guatemala", 'ft_pais'=>"guatemala", 'no_pais_ingles'=>"Guatemala", 'ft_pais_ingles'=>"guatemala", 'cod_pais_iso'=>292, ]);

        RegionCountriesModel::create([ 'id'=>300, 'sg_pais_2'=>"GG", 'sg_pais_3'=>"GGY", 'no_pais'=>"Guernsey", 'ft_pais'=>"guernsey", 'no_pais_ingles'=>"Guernsey", 'ft_pais_ingles'=>"guernsey", 'cod_pais_iso'=>300, ]);

        RegionCountriesModel::create([ 'id'=>304, 'sg_pais_2'=>"GY", 'sg_pais_3'=>"GUY", 'no_pais'=>"Guiana", 'ft_pais'=>"guiana", 'no_pais_ingles'=>"Guyana", 'ft_pais_ingles'=>"guyana", 'cod_pais_iso'=>304, ]);

        RegionCountriesModel::create([ 'id'=>308, 'sg_pais_2'=>"GF", 'sg_pais_3'=>"GUF", 'no_pais'=>"Guiana Francesa", 'ft_pais'=>"guiana francesa", 'no_pais_ingles'=>"French Guiana", 'ft_pais_ingles'=>"french guiana", 'cod_pais_iso'=>308, ]);

        RegionCountriesModel::create([ 'id'=>312, 'sg_pais_2'=>"GN", 'sg_pais_3'=>"GIN", 'no_pais'=>"Guiné", 'ft_pais'=>"guiné", 'no_pais_ingles'=>"Guinea", 'ft_pais_ingles'=>"guinea", 'cod_pais_iso'=>312, ]);

        RegionCountriesModel::create([ 'id'=>320, 'sg_pais_2'=>"GW", 'sg_pais_3'=>"GNB", 'no_pais'=>"Guiné-Bissau", 'ft_pais'=>"guiné-bissau", 'no_pais_ingles'=>"Guinea Bissau", 'ft_pais_ingles'=>"guinea bissau", 'cod_pais_iso'=>320, ]);

        RegionCountriesModel::create([ 'id'=>316, 'sg_pais_2'=>"GQ", 'sg_pais_3'=>"GNQ", 'no_pais'=>"Guiné Equatorial", 'ft_pais'=>"guiné equatorial", 'no_pais_ingles'=>"Equatorial Guinea", 'ft_pais_ingles'=>"equatorial guinea", 'cod_pais_iso'=>316, ]);

        RegionCountriesModel::create([ 'id'=>831, 'sg_pais_2'=>"HT", 'sg_pais_3'=>"HTI", 'no_pais'=>"Haiti", 'ft_pais'=>"haiti", 'no_pais_ingles'=>"Haiti", 'ft_pais_ingles'=>"haiti", 'cod_pais_iso'=>831, ]);

        RegionCountriesModel::create([ 'id'=>324, 'sg_pais_2'=>"HN", 'sg_pais_3'=>"HND", 'no_pais'=>"Honduras", 'ft_pais'=>"honduras", 'no_pais_ingles'=>"Honduras", 'ft_pais_ingles'=>"honduras", 'cod_pais_iso'=>324, ]);

        RegionCountriesModel::create([ 'id'=>624, 'sg_pais_2'=>"HK", 'sg_pais_3'=>"HKG", 'no_pais'=>"Hong Kong", 'ft_pais'=>"hong kong", 'no_pais_ingles'=>"Hong Kong", 'ft_pais_ingles'=>"hong kong", 'cod_pais_iso'=>624, ]);

        RegionCountriesModel::create([ 'id'=>328, 'sg_pais_2'=>"HU", 'sg_pais_3'=>"HUN", 'no_pais'=>"Hungria", 'ft_pais'=>"hungria", 'no_pais_ingles'=>"Hungary", 'ft_pais_ingles'=>"hungary", 'cod_pais_iso'=>328, ]);

        RegionCountriesModel::create([ 'id'=>332, 'sg_pais_2'=>"YE", 'sg_pais_3'=>"YEM", 'no_pais'=>"Iêmen", 'ft_pais'=>"iêmen", 'no_pais_ingles'=>"Yemen", 'ft_pais_ingles'=>"yemen", 'cod_pais_iso'=>332, ]);

        RegionCountriesModel::create([ 'id'=>334, 'sg_pais_2'=>"BV", 'sg_pais_3'=>"BVT", 'no_pais'=>"Ilha Bouvet", 'ft_pais'=>"ilha bouvet", 'no_pais_ingles'=>"Bouvet Island", 'ft_pais_ingles'=>"bouvet island", 'cod_pais_iso'=>334, ]);

        RegionCountriesModel::create([ 'id'=>340, 'sg_pais_2'=>"RE", 'sg_pais_3'=>"REU", 'no_pais'=>"Ilha da Reunião", 'ft_pais'=>"ilha da reunião", 'no_pais_ingles'=>"Reunion Island", 'ft_pais_ingles'=>"reunion island", 'cod_pais_iso'=>340, ]);

        RegionCountriesModel::create([ 'id'=>344, 'sg_pais_2'=>"IM", 'sg_pais_3'=>"IMN", 'no_pais'=>"Ilha de Man", 'ft_pais'=>"ilha de man", 'no_pais_ingles'=>"Isle of Man", 'ft_pais_ingles'=>"isle of man", 'cod_pais_iso'=>344, ]);

        RegionCountriesModel::create([ 'id'=>348, 'sg_pais_2'=>"CX", 'sg_pais_3'=>"CXR", 'no_pais'=>"Ilha de Natal", 'ft_pais'=>"ilha de natal", 'no_pais_ingles'=>"christmas island", 'ft_pais_ingles'=>"christmas island", 'cod_pais_iso'=>348, ]);

        RegionCountriesModel::create([ 'id'=>352, 'sg_pais_2'=>"NF", 'sg_pais_3'=>"NFK", 'no_pais'=>"Ilha Norfolk", 'ft_pais'=>"ilha norfolk", 'no_pais_ingles'=>"norfolk island", 'ft_pais_ingles'=>"norfolk island", 'cod_pais_iso'=>352, ]);

        RegionCountriesModel::create([ 'id'=>356, 'sg_pais_2'=>"AX", 'sg_pais_3'=>"ALA", 'no_pais'=>"Ilhas Åland", 'ft_pais'=>"ilhas åland", 'no_pais_ingles'=>"脜land Islands", 'ft_pais_ingles'=>"脜land islands", 'cod_pais_iso'=>356, ]);

        RegionCountriesModel::create([ 'id'=>360, 'sg_pais_2'=>"KY", 'sg_pais_3'=>"CYM", 'no_pais'=>"Ilhas Cayman", 'ft_pais'=>"ilhas cayman", 'no_pais_ingles'=>"Cayman Islands", 'ft_pais_ingles'=>"cayman islands", 'cod_pais_iso'=>360, ]);

        RegionCountriesModel::create([ 'id'=>364, 'sg_pais_2'=>"CC", 'sg_pais_3'=>"CCK", 'no_pais'=>"Ilhas Cocos", 'ft_pais'=>"ilhas cocos", 'no_pais_ingles'=>"Cocos Islands", 'ft_pais_ingles'=>"cocos islands", 'cod_pais_iso'=>364, ]);

        RegionCountriesModel::create([ 'id'=>368, 'sg_pais_2'=>"CK", 'sg_pais_3'=>"COK", 'no_pais'=>"Ilhas Cook", 'ft_pais'=>"ilhas cook", 'no_pais_ingles'=>"cook islands", 'ft_pais_ingles'=>"cook islands", 'cod_pais_iso'=>368, ]);

        RegionCountriesModel::create([ 'id'=>372, 'sg_pais_2'=>"FO", 'sg_pais_3'=>"FRO", 'no_pais'=>"Ilhas Faroe", 'ft_pais'=>"ilhas faroe", 'no_pais_ingles'=>"Faroe Islands", 'ft_pais_ingles'=>"faroe islands", 'cod_pais_iso'=>372, ]);

        RegionCountriesModel::create([ 'id'=>833, 'sg_pais_2'=>"FK", 'sg_pais_3'=>"FLK", 'no_pais'=>"Ilhas Malvinas", 'ft_pais'=>"ilhas malvinas", 'no_pais_ingles'=>"Falkland Islands", 'ft_pais_ingles'=>"falkland islands", 'cod_pais_iso'=>833, ]);

        RegionCountriesModel::create([ 'id'=>376, 'sg_pais_2'=>"MP", 'sg_pais_3'=>"MNP", 'no_pais'=>"Ilhas Marianas do Norte", 'ft_pais'=>"ilhas marianas do norte", 'no_pais_ingles'=>"Northern Mariana Islands", 'ft_pais_ingles'=>"northern mariana islands", 'cod_pais_iso'=>376, ]);

        RegionCountriesModel::create([ 'id'=>380, 'sg_pais_2'=>"MH", 'sg_pais_3'=>"MHL", 'no_pais'=>"Ilhas Marshall", 'ft_pais'=>"ilhas marshall", 'no_pais_ingles'=>"Marshall Islands", 'ft_pais_ingles'=>"marshall islands", 'cod_pais_iso'=>380, ]);

        RegionCountriesModel::create([ 'id'=>384, 'sg_pais_2'=>"UM", 'sg_pais_3'=>"UMI", 'no_pais'=>"Ilhas Menores Distantes dos Estados Unidos", 'ft_pais'=>"ilhas menores distantes dos estados unidos", 'no_pais_ingles'=>"Minor Outlying Islands of the United States", 'ft_pais_ingles'=>"minor outlying islands of the united states", 'cod_pais_iso'=>384, ]);

        RegionCountriesModel::create([ 'id'=>388, 'sg_pais_2'=>"PN", 'sg_pais_3'=>"PCN", 'no_pais'=>"Ilhas Pitcairn", 'ft_pais'=>"ilhas pitcairn", 'no_pais_ingles'=>"Pitcairn Islands", 'ft_pais_ingles'=>"pitcairn islands", 'cod_pais_iso'=>388, ]);

        RegionCountriesModel::create([ 'id'=>392, 'sg_pais_2'=>"SB", 'sg_pais_3'=>"SLB", 'no_pais'=>"Ilhas Salomão", 'ft_pais'=>"ilhas salomão", 'no_pais_ingles'=>"Solomon Islands", 'ft_pais_ingles'=>"solomon islands", 'cod_pais_iso'=>392, ]);

        RegionCountriesModel::create([ 'id'=>832, 'sg_pais_2'=>"TC", 'sg_pais_3'=>"TCA", 'no_pais'=>"Ilhas Turcas e Caicos", 'ft_pais'=>"ilhas turcas e caicos", 'no_pais_ingles'=>"Turks and Caicos Islands", 'ft_pais_ingles'=>"turks and caicos islands", 'cod_pais_iso'=>832, ]);

        RegionCountriesModel::create([ 'id'=>400, 'sg_pais_2'=>"VG", 'sg_pais_3'=>"VGB", 'no_pais'=>"Ilhas Virgens (Reino Unido)", 'ft_pais'=>"ilhas virgens (reino unido)", 'no_pais_ingles'=>"Virgin Islands (UK)", 'ft_pais_ingles'=>"virgin islands (uk)", 'cod_pais_iso'=>400, ]);

        RegionCountriesModel::create([ 'id'=>398, 'sg_pais_2'=>"VI", 'sg_pais_3'=>"VIR", 'no_pais'=>"Ilhas Virgens dos Estados Unidos", 'ft_pais'=>"ilhas virgens dos estados unidos", 'no_pais_ingles'=>"United States Virgin Islands", 'ft_pais_ingles'=>"united states virgin islands", 'cod_pais_iso'=>398, ]);

        RegionCountriesModel::create([ 'id'=>404, 'sg_pais_2'=>"IN", 'sg_pais_3'=>"IND", 'no_pais'=>"Índia", 'ft_pais'=>"índia", 'no_pais_ingles'=>"India", 'ft_pais_ingles'=>"india", 'cod_pais_iso'=>404, ]);

        RegionCountriesModel::create([ 'id'=>296, 'sg_pais_2'=>"ID", 'sg_pais_3'=>"IDN", 'no_pais'=>"Indonésia", 'ft_pais'=>"indonésia", 'no_pais_ingles'=>"Indonesia", 'ft_pais_ingles'=>"indonesia", 'cod_pais_iso'=>296, ]);

        RegionCountriesModel::create([ 'id'=>412, 'sg_pais_2'=>"IR", 'sg_pais_3'=>"IRN", 'no_pais'=>"Irã", 'ft_pais'=>"irã", 'no_pais_ingles'=>"Will", 'ft_pais_ingles'=>"will", 'cod_pais_iso'=>412, ]);

        RegionCountriesModel::create([ 'id'=>414, 'sg_pais_2'=>"IQ", 'sg_pais_3'=>"IRQ", 'no_pais'=>"Iraque", 'ft_pais'=>"iraque", 'no_pais_ingles'=>"Iraq", 'ft_pais_ingles'=>"iraq", 'cod_pais_iso'=>414, ]);

        RegionCountriesModel::create([ 'id'=>417, 'sg_pais_2'=>"IE", 'sg_pais_3'=>"IRL", 'no_pais'=>"Irlanda", 'ft_pais'=>"irlanda", 'no_pais_ingles'=>"Ireland", 'ft_pais_ingles'=>"ireland", 'cod_pais_iso'=>417, ]);

        RegionCountriesModel::create([ 'id'=>418, 'sg_pais_2'=>"IS", 'sg_pais_3'=>"ISL", 'no_pais'=>"Islândia", 'ft_pais'=>"islândia", 'no_pais_ingles'=>"Iceland", 'ft_pais_ingles'=>"iceland", 'cod_pais_iso'=>418, ]);

        RegionCountriesModel::create([ 'id'=>428, 'sg_pais_2'=>"IL", 'sg_pais_3'=>"ISR", 'no_pais'=>"Israel", 'ft_pais'=>"israel", 'no_pais_ingles'=>"Israel", 'ft_pais_ingles'=>"israel", 'cod_pais_iso'=>428, ]);

        RegionCountriesModel::create([ 'id'=>422, 'sg_pais_2'=>"IT", 'sg_pais_3'=>"ITA", 'no_pais'=>"Itália", 'ft_pais'=>"itália", 'no_pais_ingles'=>"Italy", 'ft_pais_ingles'=>"italy", 'cod_pais_iso'=>422, ]);

        RegionCountriesModel::create([ 'id'=>426, 'sg_pais_2'=>"JM", 'sg_pais_3'=>"JAM", 'no_pais'=>"Jamaica", 'ft_pais'=>"jamaica", 'no_pais_ingles'=>"Jamaica", 'ft_pais_ingles'=>"jamaica", 'cod_pais_iso'=>426, ]);

        RegionCountriesModel::create([ 'id'=>430, 'sg_pais_2'=>"JP", 'sg_pais_3'=>"JPN", 'no_pais'=>"Japão", 'ft_pais'=>"japão", 'no_pais_ingles'=>"Japan", 'ft_pais_ingles'=>"japan", 'cod_pais_iso'=>430, ]);

        RegionCountriesModel::create([ 'id'=>434, 'sg_pais_2'=>"JE", 'sg_pais_3'=>"JEY", 'no_pais'=>"Jersey", 'ft_pais'=>"jersey", 'no_pais_ingles'=>"Jersey", 'ft_pais_ingles'=>"jersey", 'cod_pais_iso'=>434, ]);

        RegionCountriesModel::create([ 'id'=>438, 'sg_pais_2'=>"JO", 'sg_pais_3'=>"JOR", 'no_pais'=>"Jordânia", 'ft_pais'=>"jordânia", 'no_pais_ingles'=>"Jordan", 'ft_pais_ingles'=>"jordan", 'cod_pais_iso'=>438, ]);

        RegionCountriesModel::create([ 'id'=>440, 'sg_pais_2'=>"KI", 'sg_pais_3'=>"KIR", 'no_pais'=>"Kiribati", 'ft_pais'=>"kiribati", 'no_pais_ingles'=>"Kiribati", 'ft_pais_ingles'=>"kiribati", 'cod_pais_iso'=>440, ]);

        RegionCountriesModel::create([ 'id'=>442, 'sg_pais_2'=>"XK", 'sg_pais_3'=>"XKX", 'no_pais'=>"Kosovo", 'ft_pais'=>"kosovo", 'no_pais_ingles'=>"kosovo", 'ft_pais_ingles'=>"kosovo", 'cod_pais_iso'=>442, ]);

        RegionCountriesModel::create([ 'id'=>446, 'sg_pais_2'=>"KW", 'sg_pais_3'=>"KWT", 'no_pais'=>"Kuwait", 'ft_pais'=>"kuwait", 'no_pais_ingles'=>"kuwait", 'ft_pais_ingles'=>"kuwait", 'cod_pais_iso'=>446, ]);

        RegionCountriesModel::create([ 'id'=>450, 'sg_pais_2'=>"LA", 'sg_pais_3'=>"LAO", 'no_pais'=>"Laos", 'ft_pais'=>"laos", 'no_pais_ingles'=>"Laos", 'ft_pais_ingles'=>"laos", 'cod_pais_iso'=>450, ]);

        RegionCountriesModel::create([ 'id'=>454, 'sg_pais_2'=>"LS", 'sg_pais_3'=>"LSO", 'no_pais'=>"Lesotho", 'ft_pais'=>"lesotho", 'no_pais_ingles'=>"Lesotho", 'ft_pais_ingles'=>"lesotho", 'cod_pais_iso'=>454, ]);

        RegionCountriesModel::create([ 'id'=>458, 'sg_pais_2'=>"LV", 'sg_pais_3'=>"LVA", 'no_pais'=>"Letônia", 'ft_pais'=>"letônia", 'no_pais_ingles'=>"Latvia", 'ft_pais_ingles'=>"latvia", 'cod_pais_iso'=>458, ]);

        RegionCountriesModel::create([ 'id'=>462, 'sg_pais_2'=>"LB", 'sg_pais_3'=>"LBN", 'no_pais'=>"Líbano", 'ft_pais'=>"líbano", 'no_pais_ingles'=>"Lebanon", 'ft_pais_ingles'=>"lebanon", 'cod_pais_iso'=>462, ]);

        RegionCountriesModel::create([ 'id'=>466, 'sg_pais_2'=>"LR", 'sg_pais_3'=>"LBR", 'no_pais'=>"Libéria", 'ft_pais'=>"libéria", 'no_pais_ingles'=>"Liberia", 'ft_pais_ingles'=>"liberia", 'cod_pais_iso'=>466, ]);

        RegionCountriesModel::create([ 'id'=>470, 'sg_pais_2'=>"LY", 'sg_pais_3'=>"LBY", 'no_pais'=>"Líbia", 'ft_pais'=>"líbia", 'no_pais_ingles'=>"Libya", 'ft_pais_ingles'=>"libya", 'cod_pais_iso'=>470, ]);

        RegionCountriesModel::create([ 'id'=>584, 'sg_pais_2'=>"LI", 'sg_pais_3'=>"LIE", 'no_pais'=>"Liechtenstein", 'ft_pais'=>"liechtenstein", 'no_pais_ingles'=>"Liechtenstein", 'ft_pais_ingles'=>"liechtenstein", 'cod_pais_iso'=>584, ]);

        RegionCountriesModel::create([ 'id'=>474, 'sg_pais_2'=>"LT", 'sg_pais_3'=>"LTU", 'no_pais'=>"Lituânia", 'ft_pais'=>"lituânia", 'no_pais_ingles'=>"Lithuania", 'ft_pais_ingles'=>"lithuania", 'cod_pais_iso'=>474, ]);

        RegionCountriesModel::create([ 'id'=>478, 'sg_pais_2'=>"LU", 'sg_pais_3'=>"LUX", 'no_pais'=>"Luxemburgo", 'ft_pais'=>"luxemburgo", 'no_pais_ingles'=>"Luxembourg", 'ft_pais_ingles'=>"luxembourg", 'cod_pais_iso'=>478, ]);

        RegionCountriesModel::create([ 'id'=>480, 'sg_pais_2'=>"MO", 'sg_pais_3'=>"MAC", 'no_pais'=>"Macau", 'ft_pais'=>"macau", 'no_pais_ingles'=>"Macao", 'ft_pais_ingles'=>"macao", 'cod_pais_iso'=>480, ]);

        RegionCountriesModel::create([ 'id'=>175, 'sg_pais_2'=>"MG", 'sg_pais_3'=>"MDG", 'no_pais'=>"Madagascar", 'ft_pais'=>"madagascar", 'no_pais_ingles'=>"Madagascar", 'ft_pais_ingles'=>"madagascar", 'cod_pais_iso'=>175, ]);

        RegionCountriesModel::create([ 'id'=>484, 'sg_pais_2'=>"MY", 'sg_pais_3'=>"MYS", 'no_pais'=>"Malásia", 'ft_pais'=>"malásia", 'no_pais_ingles'=>"Malaysia", 'ft_pais_ingles'=>"malaysia", 'cod_pais_iso'=>484, ]);

        RegionCountriesModel::create([ 'id'=>498, 'sg_pais_2'=>"MW", 'sg_pais_3'=>"MWI", 'no_pais'=>"Malauí", 'ft_pais'=>"malauí", 'no_pais_ingles'=>"malawi", 'ft_pais_ingles'=>"malawi", 'cod_pais_iso'=>498, ]);

        RegionCountriesModel::create([ 'id'=>496, 'sg_pais_2'=>"MV", 'sg_pais_3'=>"MDV", 'no_pais'=>"Maldivas", 'ft_pais'=>"maldivas", 'no_pais_ingles'=>"Maldives", 'ft_pais_ingles'=>"maldives", 'cod_pais_iso'=>496, ]);

        RegionCountriesModel::create([ 'id'=>499, 'sg_pais_2'=>"ML", 'sg_pais_3'=>"MLI", 'no_pais'=>"Mali", 'ft_pais'=>"mali", 'no_pais_ingles'=>"Mali", 'ft_pais_ingles'=>"mali", 'cod_pais_iso'=>499, ]);

        RegionCountriesModel::create([ 'id'=>500, 'sg_pais_2'=>"MT", 'sg_pais_3'=>"MLT", 'no_pais'=>"Malta", 'ft_pais'=>"malta", 'no_pais_ingles'=>"Malta", 'ft_pais_ingles'=>"malta", 'cod_pais_iso'=>500, ]);

        RegionCountriesModel::create([ 'id'=>504, 'sg_pais_2'=>"MA", 'sg_pais_3'=>"MAR", 'no_pais'=>"Marrocos", 'ft_pais'=>"marrocos", 'no_pais_ingles'=>"Morocco", 'ft_pais_ingles'=>"morocco", 'cod_pais_iso'=>504, ]);

        RegionCountriesModel::create([ 'id'=>508, 'sg_pais_2'=>"MQ", 'sg_pais_3'=>"MTQ", 'no_pais'=>"Martinica", 'ft_pais'=>"martinica", 'no_pais_ingles'=>"Martinique", 'ft_pais_ingles'=>"martinique", 'cod_pais_iso'=>508, ]);

        RegionCountriesModel::create([ 'id'=>104, 'sg_pais_2'=>"MU", 'sg_pais_3'=>"MUS", 'no_pais'=>"Maurício", 'ft_pais'=>"maurício", 'no_pais_ingles'=>"Mauritius", 'ft_pais_ingles'=>"mauritius", 'cod_pais_iso'=>104, ]);

        RegionCountriesModel::create([ 'id'=>516, 'sg_pais_2'=>"MR", 'sg_pais_3'=>"MRT", 'no_pais'=>"Mauritânia", 'ft_pais'=>"mauritânia", 'no_pais_ingles'=>"Mauritania", 'ft_pais_ingles'=>"mauritania", 'cod_pais_iso'=>516, ]);

        RegionCountriesModel::create([ 'id'=>520, 'sg_pais_2'=>"YT", 'sg_pais_3'=>"MYT", 'no_pais'=>"Mayotte", 'ft_pais'=>"mayotte", 'no_pais_ingles'=>"Mayotte", 'ft_pais_ingles'=>"mayotte", 'cod_pais_iso'=>520, ]);

        RegionCountriesModel::create([ 'id'=>524, 'sg_pais_2'=>"MX", 'sg_pais_3'=>"MEX", 'no_pais'=>"México", 'ft_pais'=>"méxico", 'no_pais_ingles'=>"Mexico", 'ft_pais_ingles'=>"mexico", 'cod_pais_iso'=>524, ]);

        RegionCountriesModel::create([ 'id'=>528, 'sg_pais_2'=>"MM", 'sg_pais_3'=>"MMR", 'no_pais'=>"Mianmar", 'ft_pais'=>"mianmar", 'no_pais_ingles'=>"myanmar", 'ft_pais_ingles'=>"myanmar", 'cod_pais_iso'=>528, ]);

        RegionCountriesModel::create([ 'id'=>540, 'sg_pais_2'=>"MZ", 'sg_pais_3'=>"MOZ", 'no_pais'=>"Moçambique", 'ft_pais'=>"moçambique", 'no_pais_ingles'=>"Mozambique", 'ft_pais_ingles'=>"mozambique", 'cod_pais_iso'=>540, ]);

        RegionCountriesModel::create([ 'id'=>554, 'sg_pais_2'=>"MD", 'sg_pais_3'=>"MDA", 'no_pais'=>"Moldávia", 'ft_pais'=>"moldávia", 'no_pais_ingles'=>"Moldavia", 'ft_pais_ingles'=>"moldavia", 'cod_pais_iso'=>554, ]);

        RegionCountriesModel::create([ 'id'=>558, 'sg_pais_2'=>"MN", 'sg_pais_3'=>"MNG", 'no_pais'=>"Mongólia", 'ft_pais'=>"mongólia", 'no_pais_ingles'=>"Mongolia", 'ft_pais_ingles'=>"mongolia", 'cod_pais_iso'=>558, ]);

        RegionCountriesModel::create([ 'id'=>562, 'sg_pais_2'=>"ME", 'sg_pais_3'=>"MNE", 'no_pais'=>"Montenegro", 'ft_pais'=>"montenegro", 'no_pais_ingles'=>"Montenegro", 'ft_pais_ingles'=>"montenegro", 'cod_pais_iso'=>562, ]);

        RegionCountriesModel::create([ 'id'=>566, 'sg_pais_2'=>"MS", 'sg_pais_3'=>"MSR", 'no_pais'=>"Montserrat", 'ft_pais'=>"montserrat", 'no_pais_ingles'=>"Montserrat", 'ft_pais_ingles'=>"montserrat", 'cod_pais_iso'=>566, ]);

        RegionCountriesModel::create([ 'id'=>570, 'sg_pais_2'=>"NA", 'sg_pais_3'=>"NAM", 'no_pais'=>"Namíbia", 'ft_pais'=>"namíbia", 'no_pais_ingles'=>"namibia", 'ft_pais_ingles'=>"namibia", 'cod_pais_iso'=>570, ]);

        RegionCountriesModel::create([ 'id'=>574, 'sg_pais_2'=>"NR", 'sg_pais_3'=>"NRU", 'no_pais'=>"Nauru", 'ft_pais'=>"nauru", 'no_pais_ingles'=>"nauru", 'ft_pais_ingles'=>"nauru", 'cod_pais_iso'=>574, ]);

        RegionCountriesModel::create([ 'id'=>408, 'sg_pais_2'=>"NP", 'sg_pais_3'=>"NPL", 'no_pais'=>"Nepal", 'ft_pais'=>"nepal", 'no_pais_ingles'=>"Nepal", 'ft_pais_ingles'=>"nepal", 'cod_pais_iso'=>408, ]);

        RegionCountriesModel::create([ 'id'=>807, 'sg_pais_2'=>"NI", 'sg_pais_3'=>"NIC", 'no_pais'=>"Nicarágua", 'ft_pais'=>"nicarágua", 'no_pais_ingles'=>"Nicaragua", 'ft_pais_ingles'=>"nicaragua", 'cod_pais_iso'=>807, ]);

        RegionCountriesModel::create([ 'id'=>580, 'sg_pais_2'=>"NE", 'sg_pais_3'=>"NER", 'no_pais'=>"Níger", 'ft_pais'=>"níger", 'no_pais_ingles'=>"Niger", 'ft_pais_ingles'=>"niger", 'cod_pais_iso'=>580, ]);

        RegionCountriesModel::create([ 'id'=>578, 'sg_pais_2'=>"NG", 'sg_pais_3'=>"NGA", 'no_pais'=>"Nigéria", 'ft_pais'=>"nigéria", 'no_pais_ingles'=>"Nigeria", 'ft_pais_ingles'=>"nigeria", 'cod_pais_iso'=>578, ]);

        RegionCountriesModel::create([ 'id'=>512, 'sg_pais_2'=>"NU", 'sg_pais_3'=>"NIU", 'no_pais'=>"Niue", 'ft_pais'=>"niue", 'no_pais_ingles'=>"niue", 'ft_pais_ingles'=>"niue", 'cod_pais_iso'=>512, ]);

        RegionCountriesModel::create([ 'id'=>586, 'sg_pais_2'=>"MK", 'sg_pais_3'=>"MKD", 'no_pais'=>"Norte da Macedônia", 'ft_pais'=>"norte da macedônia", 'no_pais_ingles'=>"North Macedonia", 'ft_pais_ingles'=>"north macedonia", 'cod_pais_iso'=>586, ]);

        RegionCountriesModel::create([ 'id'=>585, 'sg_pais_2'=>"NO", 'sg_pais_3'=>"NOR", 'no_pais'=>"Noruega", 'ft_pais'=>"noruega", 'no_pais_ingles'=>"Norway", 'ft_pais_ingles'=>"norway", 'cod_pais_iso'=>585, ]);

        RegionCountriesModel::create([ 'id'=>275, 'sg_pais_2'=>"NC", 'sg_pais_3'=>"NCL", 'no_pais'=>"Nova Caledônia", 'ft_pais'=>"nova caledônia", 'no_pais_ingles'=>"New Caledonia", 'ft_pais_ingles'=>"new caledonia", 'cod_pais_iso'=>275, ]);

        RegionCountriesModel::create([ 'id'=>591, 'sg_pais_2'=>"NZ", 'sg_pais_3'=>"NZL", 'no_pais'=>"Nova Zelândia", 'ft_pais'=>"nova zelândia", 'no_pais_ingles'=>"New Zealand", 'ft_pais_ingles'=>"new zealand", 'cod_pais_iso'=>591, ]);

        RegionCountriesModel::create([ 'id'=>598, 'sg_pais_2'=>"OM", 'sg_pais_3'=>"OMN", 'no_pais'=>"Omã", 'ft_pais'=>"omã", 'no_pais_ingles'=>"Oman", 'ft_pais_ingles'=>"oman", 'cod_pais_iso'=>598, ]);

        RegionCountriesModel::create([ 'id'=>600, 'sg_pais_2'=>"HM", 'sg_pais_3'=>"HMD", 'no_pais'=>"Ouvido e Ilhas McDonald", 'ft_pais'=>"ouvido e ilhas mcdonald", 'no_pais_ingles'=>"Ear and McDonald Islands", 'ft_pais_ingles'=>"ear and mcdonald islands", 'cod_pais_iso'=>600, ]);

        RegionCountriesModel::create([ 'id'=>604, 'sg_pais_2'=>"NL", 'sg_pais_3'=>"NLD", 'no_pais'=>"Países Baixos", 'ft_pais'=>"países baixos", 'no_pais_ingles'=>"Netherlands", 'ft_pais_ingles'=>"netherlands", 'cod_pais_iso'=>604, ]);

        RegionCountriesModel::create([ 'id'=>608, 'sg_pais_2'=>"BQ", 'sg_pais_3'=>"BES", 'no_pais'=>"Países Baixos Caribenhos", 'ft_pais'=>"países baixos caribenhos", 'no_pais_ingles'=>"Caribbean Netherlands", 'ft_pais_ingles'=>"caribbean netherlands", 'cod_pais_iso'=>608, ]);

        RegionCountriesModel::create([ 'id'=>612, 'sg_pais_2'=>"PW", 'sg_pais_3'=>"PLW", 'no_pais'=>"Palau", 'ft_pais'=>"palau", 'no_pais_ingles'=>"Palau", 'ft_pais_ingles'=>"palau", 'cod_pais_iso'=>612, ]);

        RegionCountriesModel::create([ 'id'=>616, 'sg_pais_2'=>"PS", 'sg_pais_3'=>"PSE", 'no_pais'=>"Palestina", 'ft_pais'=>"palestina", 'no_pais_ingles'=>"Palestine", 'ft_pais_ingles'=>"palestine", 'cod_pais_iso'=>616, ]);

        RegionCountriesModel::create([ 'id'=>620, 'sg_pais_2'=>"PA", 'sg_pais_3'=>"PAN", 'no_pais'=>"Panamá", 'ft_pais'=>"panamá", 'no_pais_ingles'=>"Panama", 'ft_pais_ingles'=>"panama", 'cod_pais_iso'=>620, ]);

        RegionCountriesModel::create([ 'id'=>492, 'sg_pais_2'=>"PG", 'sg_pais_3'=>"PNG", 'no_pais'=>"Papua Nova Guiné", 'ft_pais'=>"papua nova guiné", 'no_pais_ingles'=>"Papua New Guinea", 'ft_pais_ingles'=>"papua new guinea", 'cod_pais_iso'=>492, ]);

        RegionCountriesModel::create([ 'id'=>630, 'sg_pais_2'=>"PK", 'sg_pais_3'=>"PAK", 'no_pais'=>"Paquistão", 'ft_pais'=>"paquistão", 'no_pais_ingles'=>"Pakistan", 'ft_pais_ingles'=>"pakistan", 'cod_pais_iso'=>630, ]);

        RegionCountriesModel::create([ 'id'=>634, 'sg_pais_2'=>"PY", 'sg_pais_3'=>"PRY", 'no_pais'=>"Paraguai", 'ft_pais'=>"paraguai", 'no_pais_ingles'=>"Paraguay", 'ft_pais_ingles'=>"paraguay", 'cod_pais_iso'=>634, ]);

        RegionCountriesModel::create([ 'id'=>178, 'sg_pais_2'=>"PE", 'sg_pais_3'=>"PER", 'no_pais'=>"Peru", 'ft_pais'=>"peru", 'no_pais_ingles'=>"Peru", 'ft_pais_ingles'=>"peru", 'cod_pais_iso'=>178, ]);

        RegionCountriesModel::create([ 'id'=>638, 'sg_pais_2'=>"PF", 'sg_pais_3'=>"PYF", 'no_pais'=>"Polinésia Francesa", 'ft_pais'=>"polinésia francesa", 'no_pais_ingles'=>"French Polynesian", 'ft_pais_ingles'=>"french polynesian", 'cod_pais_iso'=>638, ]);

        RegionCountriesModel::create([ 'id'=>642, 'sg_pais_2'=>"PL", 'sg_pais_3'=>"POL", 'no_pais'=>"Polônia", 'ft_pais'=>"polônia", 'no_pais_ingles'=>"Poland", 'ft_pais_ingles'=>"poland", 'cod_pais_iso'=>642, ]);

        RegionCountriesModel::create([ 'id'=>643, 'sg_pais_2'=>"PR", 'sg_pais_3'=>"PRI", 'no_pais'=>"Porto Rico", 'ft_pais'=>"porto rico", 'no_pais_ingles'=>"Puerto Rico", 'ft_pais_ingles'=>"puerto rico", 'cod_pais_iso'=>643, ]);

        RegionCountriesModel::create([ 'id'=>646, 'sg_pais_2'=>"PT", 'sg_pais_3'=>"PRT", 'no_pais'=>"Portugal", 'ft_pais'=>"portugal", 'no_pais_ingles'=>"Portugal", 'ft_pais_ingles'=>"portugal", 'cod_pais_iso'=>646, ]);

        RegionCountriesModel::create([ 'id'=>652, 'sg_pais_2'=>"MC", 'sg_pais_3'=>"MCO", 'no_pais'=>"Principado de Mônaco", 'ft_pais'=>"principado de mônaco", 'no_pais_ingles'=>"principality of monaco", 'ft_pais_ingles'=>"principality of monaco", 'cod_pais_iso'=>652, ]);

        RegionCountriesModel::create([ 'id'=>654, 'sg_pais_2'=>"QA", 'sg_pais_3'=>"QAT", 'no_pais'=>"Qatar", 'ft_pais'=>"qatar", 'no_pais_ingles'=>"qatar", 'ft_pais_ingles'=>"qatar", 'cod_pais_iso'=>654, ]);

        RegionCountriesModel::create([ 'id'=>659, 'sg_pais_2'=>"KE", 'sg_pais_3'=>"KEN", 'no_pais'=>"Quênia", 'ft_pais'=>"quênia", 'no_pais_ingles'=>"Kenya", 'ft_pais_ingles'=>"kenya", 'cod_pais_iso'=>659, ]);

        RegionCountriesModel::create([ 'id'=>662, 'sg_pais_2'=>"KG", 'sg_pais_3'=>"KGZ", 'no_pais'=>"Quirguizistão", 'ft_pais'=>"quirguizistão", 'no_pais_ingles'=>"Kyrgyzstan", 'ft_pais_ingles'=>"kyrgyzstan", 'cod_pais_iso'=>662, ]);

        RegionCountriesModel::create([ 'id'=>663, 'sg_pais_2'=>"GB", 'sg_pais_3'=>"GBR", 'no_pais'=>"Reino Unido", 'ft_pais'=>"reino unido", 'no_pais_ingles'=>"UK", 'ft_pais_ingles'=>"uk", 'cod_pais_iso'=>663, ]);

        RegionCountriesModel::create([ 'id'=>666, 'sg_pais_2'=>"CF", 'sg_pais_3'=>"CAF", 'no_pais'=>"República Centro-Africana", 'ft_pais'=>"república centro-africana", 'no_pais_ingles'=>"Central African Republic", 'ft_pais_ingles'=>"central african republic", 'cod_pais_iso'=>666, ]);

        RegionCountriesModel::create([ 'id'=>670, 'sg_pais_2'=>"CD", 'sg_pais_3'=>"COD", 'no_pais'=>"República Democrática do Congo", 'ft_pais'=>"república democrática do congo", 'no_pais_ingles'=>"Democratic Republic of Congo", 'ft_pais_ingles'=>"democratic republic of congo", 'cod_pais_iso'=>670, ]);

        RegionCountriesModel::create([ 'id'=>882, 'sg_pais_2'=>"CG", 'sg_pais_3'=>"COG", 'no_pais'=>"República do Congo", 'ft_pais'=>"república do congo", 'no_pais_ingles'=>"Congo Republic", 'ft_pais_ingles'=>"congo republic", 'cod_pais_iso'=>882, ]);

        RegionCountriesModel::create([ 'id'=>674, 'sg_pais_2'=>"DO", 'sg_pais_3'=>"DOM", 'no_pais'=>"República Dominicana", 'ft_pais'=>"república dominicana", 'no_pais_ingles'=>"Dominican Republic", 'ft_pais_ingles'=>"dominican republic", 'cod_pais_iso'=>674, ]);

        RegionCountriesModel::create([ 'id'=>678, 'sg_pais_2'=>"RO", 'sg_pais_3'=>"ROU", 'no_pais'=>"Romênia", 'ft_pais'=>"romênia", 'no_pais_ingles'=>"Romania", 'ft_pais_ingles'=>"romania", 'cod_pais_iso'=>678, ]);

        RegionCountriesModel::create([ 'id'=>682, 'sg_pais_2'=>"RW", 'sg_pais_3'=>"RWA", 'no_pais'=>"Ruanda", 'ft_pais'=>"ruanda", 'no_pais_ingles'=>"Rwanda", 'ft_pais_ingles'=>"rwanda", 'cod_pais_iso'=>682, ]);

        RegionCountriesModel::create([ 'id'=>686, 'sg_pais_2'=>"RU", 'sg_pais_3'=>"RUS", 'no_pais'=>"Rússia", 'ft_pais'=>"rússia", 'no_pais_ingles'=>"Russia", 'ft_pais_ingles'=>"russia", 'cod_pais_iso'=>686, ]);

        RegionCountriesModel::create([ 'id'=>688, 'sg_pais_2'=>"EH", 'sg_pais_3'=>"ESH", 'no_pais'=>"Saara Ocidental", 'ft_pais'=>"saara ocidental", 'no_pais_ingles'=>"Western Sahara", 'ft_pais_ingles'=>"western sahara", 'cod_pais_iso'=>688, ]);

        RegionCountriesModel::create([ 'id'=>690, 'sg_pais_2'=>"WS", 'sg_pais_3'=>"WSM", 'no_pais'=>"Samoa", 'ft_pais'=>"samoa", 'no_pais_ingles'=>"samoa", 'ft_pais_ingles'=>"samoa", 'cod_pais_iso'=>690, ]);

        RegionCountriesModel::create([ 'id'=>694, 'sg_pais_2'=>"AS", 'sg_pais_3'=>"ASM", 'no_pais'=>"Samoa Americana", 'ft_pais'=>"samoa americana", 'no_pais_ingles'=>"american samoa", 'ft_pais_ingles'=>"american samoa", 'cod_pais_iso'=>694, ]);

        RegionCountriesModel::create([ 'id'=>702, 'sg_pais_2'=>"SH", 'sg_pais_3'=>"SHN", 'no_pais'=>"Santa Helena, Ascensão e Tristão da Cunha", 'ft_pais'=>"santa helena, ascensão e tristão da cunha", 'no_pais_ingles'=>"Saint Helena, Ascension and Tristan da Cunha", 'ft_pais_ingles'=>"saint helena, ascension and tristan da cunha", 'cod_pais_iso'=>702, ]);

        RegionCountriesModel::create([ 'id'=>534, 'sg_pais_2'=>"LC", 'sg_pais_3'=>"LCA", 'no_pais'=>"Santa Lúcia", 'ft_pais'=>"santa lúcia", 'no_pais_ingles'=>"saint lucia", 'ft_pais_ingles'=>"saint lucia", 'cod_pais_iso'=>534, ]);

        RegionCountriesModel::create([ 'id'=>703, 'sg_pais_2'=>"BL", 'sg_pais_3'=>"BLM", 'no_pais'=>"Santo Bartolomeu", 'ft_pais'=>"santo bartolomeu", 'no_pais_ingles'=>"Saint Bartholomew", 'ft_pais_ingles'=>"saint bartholomew", 'cod_pais_iso'=>703, ]);

        RegionCountriesModel::create([ 'id'=>705, 'sg_pais_2'=>"SM", 'sg_pais_3'=>"SMR", 'no_pais'=>"São Marino", 'ft_pais'=>"são marino", 'no_pais_ingles'=>"san marino", 'ft_pais_ingles'=>"san marino", 'cod_pais_iso'=>705, ]);

        RegionCountriesModel::create([ 'id'=>90, 'sg_pais_2'=>"MF", 'sg_pais_3'=>"MAF", 'no_pais'=>"São Martinho", 'ft_pais'=>"são martinho", 'no_pais_ingles'=>"Saint Martin", 'ft_pais_ingles'=>"saint martin", 'cod_pais_iso'=>90, ]);

        RegionCountriesModel::create([ 'id'=>706, 'sg_pais_2'=>"PM", 'sg_pais_3'=>"SPM", 'no_pais'=>"São Pedro e Miquelon", 'ft_pais'=>"são pedro e miquelon", 'no_pais_ingles'=>"Saint Pierre and Miquelon", 'ft_pais_ingles'=>"saint pierre and miquelon", 'cod_pais_iso'=>706, ]);

        RegionCountriesModel::create([ 'id'=>710, 'sg_pais_2'=>"ST", 'sg_pais_3'=>"STP", 'no_pais'=>"São Tomé e Príncipe", 'ft_pais'=>"são tomé e príncipe", 'no_pais_ingles'=>"Sao Tome and Principe", 'ft_pais_ingles'=>"sao tome and principe", 'cod_pais_iso'=>710, ]);

        RegionCountriesModel::create([ 'id'=>239, 'sg_pais_2'=>"VC", 'sg_pais_3'=>"VCT", 'no_pais'=>"São Vicente e as Granadinas", 'ft_pais'=>"são vicente e as granadinas", 'no_pais_ingles'=>"Saint Vincent and the Grenadines", 'ft_pais_ingles'=>"saint vincent and the grenadines", 'cod_pais_iso'=>239, ]);

        RegionCountriesModel::create([ 'id'=>410, 'sg_pais_2'=>"SN", 'sg_pais_3'=>"SEN", 'no_pais'=>"Senegal", 'ft_pais'=>"senegal", 'no_pais_ingles'=>"Senegal", 'ft_pais_ingles'=>"senegal", 'cod_pais_iso'=>410, ]);

        RegionCountriesModel::create([ 'id'=>728, 'sg_pais_2'=>"SL", 'sg_pais_3'=>"SLE", 'no_pais'=>"Serra Leoa", 'ft_pais'=>"serra leoa", 'no_pais_ingles'=>"Sierra Leone", 'ft_pais_ingles'=>"sierra leone", 'cod_pais_iso'=>728, ]);

        RegionCountriesModel::create([ 'id'=>724, 'sg_pais_2'=>"RS", 'sg_pais_3'=>"SRB", 'no_pais'=>"Sérvia", 'ft_pais'=>"sérvia", 'no_pais_ingles'=>"Serbia", 'ft_pais_ingles'=>"serbia", 'cod_pais_iso'=>724, ]);

        RegionCountriesModel::create([ 'id'=>144, 'sg_pais_2'=>"SC", 'sg_pais_3'=>"SYC", 'no_pais'=>"Seychelles", 'ft_pais'=>"seychelles", 'no_pais_ingles'=>"Seychelles", 'ft_pais_ingles'=>"seychelles", 'cod_pais_iso'=>144, ]);

        RegionCountriesModel::create([ 'id'=>729, 'sg_pais_2'=>"SX", 'sg_pais_3'=>"SXM", 'no_pais'=>"Sint Maarten", 'ft_pais'=>"sint maarten", 'no_pais_ingles'=>"Sint Maarten", 'ft_pais_ingles'=>"sint maarten", 'cod_pais_iso'=>729, ]);

        RegionCountriesModel::create([ 'id'=>740, 'sg_pais_2'=>"SY", 'sg_pais_3'=>"SYR", 'no_pais'=>"Síria", 'ft_pais'=>"síria", 'no_pais_ingles'=>"Syria", 'ft_pais_ingles'=>"syria", 'cod_pais_iso'=>740, ]);

        RegionCountriesModel::create([ 'id'=>744, 'sg_pais_2'=>"SO", 'sg_pais_3'=>"SOM", 'no_pais'=>"Somália", 'ft_pais'=>"somália", 'no_pais_ingles'=>"Somalia", 'ft_pais_ingles'=>"somalia", 'cod_pais_iso'=>744, ]);

        RegionCountriesModel::create([ 'id'=>752, 'sg_pais_2'=>"LK", 'sg_pais_3'=>"LKA", 'no_pais'=>"Sri Lanka", 'ft_pais'=>"sri lanka", 'no_pais_ingles'=>"Sri Lanka", 'ft_pais_ingles'=>"sri lanka", 'cod_pais_iso'=>752, ]);

        RegionCountriesModel::create([ 'id'=>756, 'sg_pais_2'=>"KN", 'sg_pais_3'=>"KNA", 'no_pais'=>"St. Kitts e Nevis", 'ft_pais'=>"st. kitts e nevis", 'no_pais_ingles'=>"St.聽kitts and nevis", 'ft_pais_ingles'=>"st.聽kitts and nevis", 'cod_pais_iso'=>756, ]);

        RegionCountriesModel::create([ 'id'=>760, 'sg_pais_2'=>"SD", 'sg_pais_3'=>"SDN", 'no_pais'=>"Sudão", 'ft_pais'=>"sudão", 'no_pais_ingles'=>"Sudan", 'ft_pais_ingles'=>"sudan", 'cod_pais_iso'=>760, ]);

        RegionCountriesModel::create([ 'id'=>158, 'sg_pais_2'=>"SS", 'sg_pais_3'=>"SSD", 'no_pais'=>"Sudão do Sul", 'ft_pais'=>"sudão do sul", 'no_pais_ingles'=>"Southern Sudan", 'ft_pais_ingles'=>"southern sudan", 'cod_pais_iso'=>158, ]);

        RegionCountriesModel::create([ 'id'=>762, 'sg_pais_2'=>"SE", 'sg_pais_3'=>"SWE", 'no_pais'=>"Suécia", 'ft_pais'=>"suécia", 'no_pais_ingles'=>"Sweden", 'ft_pais_ingles'=>"sweden", 'cod_pais_iso'=>762, ]);

        RegionCountriesModel::create([ 'id'=>834, 'sg_pais_2'=>"CH", 'sg_pais_3'=>"CHE", 'no_pais'=>"Suíça", 'ft_pais'=>"suíça", 'no_pais_ingles'=>"Switzerland", 'ft_pais_ingles'=>"switzerland", 'cod_pais_iso'=>834, ]);

        RegionCountriesModel::create([ 'id'=>764, 'sg_pais_2'=>"SR", 'sg_pais_3'=>"SUR", 'no_pais'=>"Suriname", 'ft_pais'=>"suriname", 'no_pais_ingles'=>"Suriname", 'ft_pais_ingles'=>"suriname", 'cod_pais_iso'=>764, ]);

        RegionCountriesModel::create([ 'id'=>768, 'sg_pais_2'=>"SJ", 'sg_pais_3'=>"SJM", 'no_pais'=>"Svalbard e Jan Mayen", 'ft_pais'=>"svalbard e jan mayen", 'no_pais_ingles'=>"Svalbard and Jan Mayen", 'ft_pais_ingles'=>"svalbard and jan mayen", 'cod_pais_iso'=>768, ]);

        RegionCountriesModel::create([ 'id'=>772, 'sg_pais_2'=>"TH", 'sg_pais_3'=>"THA", 'no_pais'=>"Tailândia", 'ft_pais'=>"tailândia", 'no_pais_ingles'=>"thailand", 'ft_pais_ingles'=>"thailand", 'cod_pais_iso'=>772, ]);

        RegionCountriesModel::create([ 'id'=>776, 'sg_pais_2'=>"TW", 'sg_pais_3'=>"TWN", 'no_pais'=>"Taiwan", 'ft_pais'=>"taiwan", 'no_pais_ingles'=>"Taiwan", 'ft_pais_ingles'=>"taiwan", 'cod_pais_iso'=>776, ]);

        RegionCountriesModel::create([ 'id'=>780, 'sg_pais_2'=>"TJ", 'sg_pais_3'=>"TJK", 'no_pais'=>"Tajiquistão", 'ft_pais'=>"tajiquistão", 'no_pais_ingles'=>"Tajikistan", 'ft_pais_ingles'=>"tajikistan", 'cod_pais_iso'=>780, ]);

        RegionCountriesModel::create([ 'id'=>788, 'sg_pais_2'=>"TZ", 'sg_pais_3'=>"TZA", 'no_pais'=>"Tanzânia", 'ft_pais'=>"tanzânia", 'no_pais_ingles'=>"Tanzania", 'ft_pais_ingles'=>"tanzania", 'cod_pais_iso'=>788, ]);

        RegionCountriesModel::create([ 'id'=>792, 'sg_pais_2'=>"CZ", 'sg_pais_3'=>"CZE", 'no_pais'=>"Tcheca", 'ft_pais'=>"tcheca", 'no_pais_ingles'=>"Czech", 'ft_pais_ingles'=>"czech", 'cod_pais_iso'=>792, ]);

        RegionCountriesModel::create([ 'id'=>795, 'sg_pais_2'=>"IO", 'sg_pais_3'=>"IOT", 'no_pais'=>"Território Britânico do Oceano Índico", 'ft_pais'=>"território britânico do oceano índico", 'no_pais_ingles'=>"British Indian Ocean Territory", 'ft_pais_ingles'=>"british indian ocean territory", 'cod_pais_iso'=>795, ]);

        RegionCountriesModel::create([ 'id'=>796, 'sg_pais_2'=>"TF", 'sg_pais_3'=>"ATF", 'no_pais'=>"Territórios Franceses do Sul e Antártico", 'ft_pais'=>"territórios franceses do sul e antártico", 'no_pais_ingles'=>"French Southern and Antarctic Territories", 'ft_pais_ingles'=>"french southern and antarctic territories", 'cod_pais_iso'=>796, ]);

        RegionCountriesModel::create([ 'id'=>798, 'sg_pais_2'=>"TL", 'sg_pais_3'=>"TLS", 'no_pais'=>"Timor Leste", 'ft_pais'=>"timor leste", 'no_pais_ingles'=>"East Timor", 'ft_pais_ingles'=>"east timor", 'cod_pais_iso'=>798, ]);

        RegionCountriesModel::create([ 'id'=>800, 'sg_pais_2'=>"TG", 'sg_pais_3'=>"TGO", 'no_pais'=>"Togo", 'ft_pais'=>"togo", 'no_pais_ingles'=>"Togo", 'ft_pais_ingles'=>"togo", 'cod_pais_iso'=>800, ]);

        RegionCountriesModel::create([ 'id'=>804, 'sg_pais_2'=>"TK", 'sg_pais_3'=>"TKL", 'no_pais'=>"Tokelau", 'ft_pais'=>"tokelau", 'no_pais_ingles'=>"Tokelau", 'ft_pais_ingles'=>"tokelau", 'cod_pais_iso'=>804, ]);

        RegionCountriesModel::create([ 'id'=>784, 'sg_pais_2'=>"TO", 'sg_pais_3'=>"TON", 'no_pais'=>"Tonga", 'ft_pais'=>"tonga", 'no_pais_ingles'=>"Tonga", 'ft_pais_ingles'=>"tonga", 'cod_pais_iso'=>784, ]);

        RegionCountriesModel::create([ 'id'=>826, 'sg_pais_2'=>"TT", 'sg_pais_3'=>"TTO", 'no_pais'=>"Trinidad e Tobago", 'ft_pais'=>"trinidad e tobago", 'no_pais_ingles'=>"Trinidad and Tobago", 'ft_pais_ingles'=>"trinidad and tobago", 'cod_pais_iso'=>826, ]);

        RegionCountriesModel::create([ 'id'=>581, 'sg_pais_2'=>"TN", 'sg_pais_3'=>"TUN", 'no_pais'=>"Tunísia", 'ft_pais'=>"tunísia", 'no_pais_ingles'=>"Tunisia", 'ft_pais_ingles'=>"tunisia", 'cod_pais_iso'=>581, ]);

        RegionCountriesModel::create([ 'id'=>840, 'sg_pais_2'=>"TM", 'sg_pais_3'=>"TKM", 'no_pais'=>"Turcomenistão", 'ft_pais'=>"turcomenistão", 'no_pais_ingles'=>"Turkmenistan", 'ft_pais_ingles'=>"turkmenistan", 'cod_pais_iso'=>840, ]);

        RegionCountriesModel::create([ 'id'=>858, 'sg_pais_2'=>"TR", 'sg_pais_3'=>"TUR", 'no_pais'=>"Turquia", 'ft_pais'=>"turquia", 'no_pais_ingles'=>"T眉rkiye", 'ft_pais_ingles'=>"t眉rkiye", 'cod_pais_iso'=>858, ]);

        RegionCountriesModel::create([ 'id'=>860, 'sg_pais_2'=>"TV", 'sg_pais_3'=>"TUV", 'no_pais'=>"Tuvalu", 'ft_pais'=>"tuvalu", 'no_pais_ingles'=>"tuvalu", 'ft_pais_ingles'=>"tuvalu", 'cod_pais_iso'=>860, ]);

        RegionCountriesModel::create([ 'id'=>548, 'sg_pais_2'=>"UA", 'sg_pais_3'=>"UKR", 'no_pais'=>"Ucrânia", 'ft_pais'=>"ucrânia", 'no_pais_ingles'=>"Ukraine", 'ft_pais_ingles'=>"ukraine", 'cod_pais_iso'=>548, ]);

        RegionCountriesModel::create([ 'id'=>336, 'sg_pais_2'=>"UG", 'sg_pais_3'=>"UGA", 'no_pais'=>"Uganda", 'ft_pais'=>"uganda", 'no_pais_ingles'=>"Uganda", 'ft_pais_ingles'=>"uganda", 'cod_pais_iso'=>336, ]);

        RegionCountriesModel::create([ 'id'=>862, 'sg_pais_2'=>"UY", 'sg_pais_3'=>"URY", 'no_pais'=>"Uruguai", 'ft_pais'=>"uruguai", 'no_pais_ingles'=>"Uruguay", 'ft_pais_ingles'=>"uruguay", 'cod_pais_iso'=>862, ]);

        RegionCountriesModel::create([ 'id'=>704, 'sg_pais_2'=>"UZ", 'sg_pais_3'=>"UZB", 'no_pais'=>"Uzbequistão", 'ft_pais'=>"uzbequistão", 'no_pais_ingles'=>"uzbekistan", 'ft_pais_ingles'=>"uzbekistan", 'cod_pais_iso'=>704, ]);

        RegionCountriesModel::create([ 'id'=>850, 'sg_pais_2'=>"VU", 'sg_pais_3'=>"VUT", 'no_pais'=>"Vanuatu", 'ft_pais'=>"vanuatu", 'no_pais_ingles'=>"vanuatu", 'ft_pais_ingles'=>"vanuatu", 'cod_pais_iso'=>850, ]);

        RegionCountriesModel::create([ 'id'=>876, 'sg_pais_2'=>"VE", 'sg_pais_3'=>"VEN", 'no_pais'=>"Venezuela", 'ft_pais'=>"venezuela", 'no_pais_ingles'=>"Venezuela", 'ft_pais_ingles'=>"venezuela", 'cod_pais_iso'=>876, ]);

        RegionCountriesModel::create([ 'id'=>732, 'sg_pais_2'=>"VN", 'sg_pais_3'=>"VNM", 'no_pais'=>"Vietnã", 'ft_pais'=>"vietnã", 'no_pais_ingles'=>"Vietnam", 'ft_pais_ingles'=>"vietnam", 'cod_pais_iso'=>732, ]);

        RegionCountriesModel::create([ 'id'=>887, 'sg_pais_2'=>"WF", 'sg_pais_3'=>"WLF", 'no_pais'=>"Wallis e Futuna", 'ft_pais'=>"wallis e futuna", 'no_pais_ingles'=>"Wallis and Futuna", 'ft_pais_ingles'=>"wallis and futuna", 'cod_pais_iso'=>887, ]);

        RegionCountriesModel::create([ 'id'=>894, 'sg_pais_2'=>"ZM", 'sg_pais_3'=>"ZMB", 'no_pais'=>"Zâmbia", 'ft_pais'=>"zâmbia", 'no_pais_ingles'=>"Zambia", 'ft_pais_ingles'=>"zambia", 'cod_pais_iso'=>894, ]);

        RegionCountriesModel::create([ 'id'=>716, 'sg_pais_2'=>"ZW", 'sg_pais_3'=>"ZWE", 'no_pais'=>"Zimbábue", 'ft_pais'=>"zimbábue", 'no_pais_ingles'=>"Zimbabwe", 'ft_pais_ingles'=>"zimbabwe", 'cod_pais_iso'=>716, ]);
    }
}
