<?php

namespace Database\Seeders;

use App\Models\Product\ProductUnit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductUnit::create(['code'=>'UND', 'title'=>'Unidade', 'filter'=>'unidade' ]);
        ProductUnit::create(['code'=>'BNG', 'title'=>'Bisnaga', 'filter'=>'bisnaga' ]);
        ProductUnit::create(['code'=>'FRAS', 'title'=>'Frasco', 'filter'=>'frasco' ]);
        ProductUnit::create(['code'=>'LIQ', 'title'=>'Liquido', 'filter'=>'liguido' ]);
        ProductUnit::create(['code'=>'SCH', 'title'=>'Sachê', 'filter'=>'sachê' ]);
        ProductUnit::create(['code'=>'CX', 'title'=>'Caixa', 'filter'=>'caixa' ]);
    }
}
