<?php

namespace Database\Seeders;

use App\Models\Product\ConsumableUnits;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumableUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ConsumableUnits::create(['code'=>'UND', 'title'=>'Unidade']);
        ConsumableUnits::create(['code'=>'BNG', 'title'=>'Bisnaga']);
        ConsumableUnits::create(['code'=>'COMP', 'title'=>'Comprimido']);
        ConsumableUnits::create(['code'=>'FRAS', 'title'=>'Frasco']);
        ConsumableUnits::create(['code'=>'AMP', 'title'=>'Ampola']);
        ConsumableUnits::create(['code'=>'LIQ', 'title'=>'Liquido']);
        ConsumableUnits::create(['code'=>'SCH', 'title'=>'Sachê']);
        ConsumableUnits::create(['code'=>'CX', 'title'=>'Caixa']);
    }
}
