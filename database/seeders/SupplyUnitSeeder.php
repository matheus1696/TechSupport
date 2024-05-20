<?php

namespace Database\Seeders;

use App\Models\Supply\SupplyUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SupplyUnit::create(['code'=>'UND', 'title'=>'Unidade', 'filter'=>'unidade' ]);
        SupplyUnit::create(['code'=>'BNG', 'title'=>'Bisnaga', 'filter'=>'bisnaga' ]);
        SupplyUnit::create(['code'=>'FRAS', 'title'=>'Frasco', 'filter'=>'frasco' ]);
        SupplyUnit::create(['code'=>'LIQ', 'title'=>'Liquido', 'filter'=>'liguido' ]);
        SupplyUnit::create(['code'=>'SCH', 'title'=>'Sachê', 'filter'=>'sachê' ]);
        SupplyUnit::create(['code'=>'CX', 'title'=>'Caixa', 'filter'=>'caixa' ]);
        SupplyUnit::create(['code'=>'RSM', 'title'=>'Resma', 'filter'=>'resma' ]);
    }
}
