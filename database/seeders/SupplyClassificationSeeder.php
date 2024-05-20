<?php

namespace Database\Seeders;

use App\Models\Supply\SupplyClassification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SupplyClassification::create(['title'=>'Permanente', 'filter'=>'permanente']);
        SupplyClassification::create(['title'=>'Consumo', 'filter'=>'consumo']);
    }
}
