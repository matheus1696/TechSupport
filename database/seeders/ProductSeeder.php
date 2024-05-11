<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create(['title'=>'Aciclovir sódico 200mg', 'filter'=>'aciclovir sódico 200mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Aciclovir', 'filter'=>'aciclovir', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ácido acetilsalicílico 100mg', 'filter'=>'ácido acetilsalicílico 100mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ácido fólico 5mg', 'filter'=>'ácido fólico 5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ácido fólico 0,2mg/ml', 'filter'=>'ácido fólico 0,2mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Albendazol 40mg/ml', 'filter'=>'albendazol 40mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Albedazol 400mg', 'filter'=>'albedazol 400mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Alendronato sódico 70mg', 'filter'=>'alendronato sódico 70mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Alopurinol 100mg', 'filter'=>'alopurinol 100mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ambroxol 15mg/5ml (infant.)', 'filter'=>'ambroxol 15mg/5ml (infant.)', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ambroxol 30mg/5ml (adulto)', 'filter'=>'ambroxol 30mg/5ml (adulto)', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Amiodarona 200mg', 'filter'=>'amiodarona 200mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Amoxicilina 250mg/5ml', 'filter'=>'amoxicilina 250mg/5ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Amoxicilina 500mg', 'filter'=>'amoxicilina 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ampicilina 500mg', 'filter'=>'ampicilina 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ampicilina líq', 'filter'=>'ampicilina líq', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Anlodipino 5mg', 'filter'=>'anlodipino 5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Anlodipino 10mg', 'filter'=>'anlodipino 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Atenolol 25mg', 'filter'=>'atenolol 25mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Atenolol 50mg', 'filter'=>'atenolol 50mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Atenolol 100mg', 'filter'=>'atenolol 100mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Azitromicina 40mg/ml', 'filter'=>'azitromicina 40mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Azitromicina 500mg', 'filter'=>'azitromicina 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Bromoprida gts', 'filter'=>'bromoprida gts', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Escopolamina + dipirona gotas 20ml', 'filter'=>'escopolamina + dipirona gotas 20ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Escopolamina + dipirona', 'filter'=>'escopolamina + dipirona', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Captopril 25 mg', 'filter'=>'captopril 25 mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Cefalexina sódica 250mg/5ml', 'filter'=>'cefalexina sódica 250mg/5ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Cefalexina 500mg', 'filter'=>'cefalexina 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Cetoconazol 200mg', 'filter'=>'cetoconazol 200mg', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Cetoconazol 20mg/g creme', 'filter'=>'cetoconazol 20mg/g creme', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ciprofloxacino 500mg', 'filter'=>'ciprofloxacino 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ciclo 21', 'filter'=>'ciclo 21', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Cimetidina 200mg', 'filter'=>'cimetidina 200mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dexamentasona 4mg', 'filter'=>'dexamentasona 4mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dexametasona 0,1mg/ml', 'filter'=>'dexametasona 0,1mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dexametasona creme', 'filter'=>'dexametasona creme', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dexclorferinamina 0,2mg/ml 120ml', 'filter'=>'dexclorferinamina 0,2mg/ml 120ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dexclorferinamina 2mg', 'filter'=>'dexclorferinamina 2mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dipirona sódica 500mg/ml', 'filter'=>'dipirona sódica 500mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Dipirona sódica 500mg', 'filter'=>'dipirona sódica 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Digoxina 0,25mg', 'filter'=>'digoxina 0,25mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Enalapril 5mg', 'filter'=>'enalapril 5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Enalapril 10mg', 'filter'=>'enalapril 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Enalapril 20mg', 'filter'=>'enalapril 20mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Eritromicina 50mg/ml', 'filter'=>'eritromicina 50mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Espiranolactona 25mg', 'filter'=>'espiranolactona 25mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Espiranolactona 50mg', 'filter'=>'espiranolactona 50mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Espiranolactona 100mg', 'filter'=>'espiranolactona 100mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Fenoterol (berotec)', 'filter'=>'fenoterol (berotec)', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Fluconazol 150mg', 'filter'=>'fluconazol 150mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Furosemida 40mg', 'filter'=>'furosemida 40mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Glibenclamida 5mg', 'filter'=>'glibenclamida 5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Hidróxido de alumínio', 'filter'=>'hidróxido de alumínio', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Hidróxido de magnésio e alumínio', 'filter'=>'hidróxido de magnésio e alumínio', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Hidroclorotiazida 25mg', 'filter'=>'hidroclorotiazida 25mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ibuprofeno 200mg/5ml', 'filter'=>'ibuprofeno 200mg/5ml', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ibuprofeno 300mg', 'filter'=>'ibuprofeno 300mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ibuprofeno 600mg', 'filter'=>'ibuprofeno 600mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Ipratrópio 0,25mg (atrovent)', 'filter'=>'ipratrópio 0,25mg (atrovent)', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Levonogestrel 1,5mg', 'filter'=>'levonogestrel 1,5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Loratadina 1mg/ml', 'filter'=>'loratadina 1mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Loratadina 10mg', 'filter'=>'loratadina 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Losartana 50mg', 'filter'=>'losartana 50mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Lubrificante', 'filter'=>'lubrificante', 'description'=>'', 'product_unit_id'=>'7', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Menbendazol', 'filter'=>'menbendazol', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Menbendazol', 'filter'=>'menbendazol', 'description'=>'', 'product_unit_id'=>'6', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Medroxiprogesterona 150mg/ml', 'filter'=>'medroxiprogesterona 150mg/ml', 'description'=>'', 'product_unit_id'=>'5', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metildopa 250mg', 'filter'=>'metildopa 250mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metildopa 500mg', 'filter'=>'metildopa 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metformina 500mg', 'filter'=>'metformina 500mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metformina 850mg', 'filter'=>'metformina 850mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metoclopramida 4mg/ml', 'filter'=>'metoclopramida 4mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metoclopramida 10mg', 'filter'=>'metoclopramida 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metronidazol 40mg/ml (benzolmetronidazol)', 'filter'=>'metronidazol 40mg/ml (benzolmetronidazol)', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metronidazol 10% (100mg/g) gel vaginal', 'filter'=>'metronidazol 10% (100mg/g) gel vaginal', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metronidazol 250mg', 'filter'=>'metronidazol 250mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Metronidazol 400mg', 'filter'=>'metronidazol 400mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Neomicina + bacitracina', 'filter'=>'neomicina + bacitracina', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nitrato de miconazol 2%', 'filter'=>'nitrato de miconazol 2%', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nitrato de miconazol creme vaginal', 'filter'=>'nitrato de miconazol creme vaginal', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nistatina 100.000UI/ml', 'filter'=>'nistatina 100.000ui/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nistatina vaginal', 'filter'=>'nistatina vaginal', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nifedipino 10mg', 'filter'=>'nifedipino 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nifedipino 20mg', 'filter'=>'nifedipino 20mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Nistatina vaginal', 'filter'=>'nistatina vaginal', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Norestisterona', 'filter'=>'norestisterona', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Noregina inj', 'filter'=>'noregina inj', 'description'=>'', 'product_unit_id'=>'5', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Óleo mineral', 'filter'=>'óleo mineral', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Omeprazol 200mg', 'filter'=>'omeprazol 200mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Páracetamol 200mg/ml', 'filter'=>'páracetamol 200mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Paracetamol 750mg', 'filter'=>'paracetamol 750mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Paracetamol 750 mg', 'filter'=>'paracetamol 750 mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Pasta d’água', 'filter'=>'pasta d’água', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Permetrina 1%', 'filter'=>'permetrina 1%', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Permetrina 5%', 'filter'=>'permetrina 5%', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Prednisona 5mg', 'filter'=>'prednisona 5mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Prednisona 20mg', 'filter'=>'prednisona 20mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Prednisolona 4,02mg/ml', 'filter'=>'prednisolona 4,02mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Propranolol 40mg', 'filter'=>'propranolol 40mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Preservativo masculino', 'filter'=>'preservativo masculino', 'description'=>'', 'product_unit_id'=>'1', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Preservativo feminino', 'filter'=>'preservativo feminino', 'description'=>'', 'product_unit_id'=>'1', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sais para reidratação (oral)', 'filter'=>'sais para reidratação (oral)', 'description'=>'', 'product_unit_id'=>'1', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Secnidazol 1g', 'filter'=>'secnidazol 1g', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sulfato de salbutamol 100mcg/ml', 'filter'=>'sulfato de salbutamol 100mcg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sinvastatina 10mg', 'filter'=>'sinvastatina 10mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sinvastatina 20mg', 'filter'=>'sinvastatina 20mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sinvastatina 40mg', 'filter'=>'sinvastatina 40mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Simeticona 40mg', 'filter'=>'simeticona 40mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Simeticona gts', 'filter'=>'simeticona gts', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sulfametoxazol + trimetoprina 40mg+8mg/ml', 'filter'=>'sulfametoxazol + trimetoprina 40mg+8mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sulfametoxazol + trimetoprina 40mg+8mg', 'filter'=>'sulfametoxazol + trimetoprina 40mg+8mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sulfato ferroso 25mg/ml', 'filter'=>'sulfato ferroso 25mg/ml', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Sulfato ferroso 40mg', 'filter'=>'sulfato ferroso 40mg', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Vitamina c comprimido', 'filter'=>'vitamina c comprimido', 'description'=>'', 'product_unit_id'=>'3', 'product_type_id'=>'1', ]);
        Product::create(['title'=>'Vitamina c gts', 'filter'=>'vitamina c gts', 'description'=>'', 'product_unit_id'=>'4', 'product_type_id'=>'1', ]);
    }
}
