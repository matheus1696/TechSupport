<?php

namespace Database\Seeders;

use App\Models\Supply\Supply;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Supply::create(['title'=>'Papel A4', 'filter'=>'papel a4', 'description'=>'', 'supply_unit_id'=>'7', 'supply_type_id'=>'1', 'supply_classification_id'=>'2']);
        Supply::create(['title'=>'Papel Higiênico', 'filter'=>'papel higiênico', 'description'=>'', 'supply_unit_id'=>'2', 'supply_type_id'=>'1', 'supply_classification_id'=>'2']);
        Supply::create(['title'=>'Detergente', 'filter'=>'detergente', 'description'=>'', 'supply_unit_id'=>'1', 'supply_type_id'=>'2', 'supply_classification_id'=>'2']);
    }
}
