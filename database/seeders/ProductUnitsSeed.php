<?php

namespace Database\Seeders;

use App\Models\Product\ProductUnitModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductUnitsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductUnitModel::create([
            'title'=> 'Unidade',
            'filter' => 'unidade',
        ]);
        ProductUnitModel::create([
            'title'=> 'Cartelas com 10 unidades',
            'filter' => 'Cartelas com 10 unidades',
        ]);
        ProductUnitModel::create([
            'title'=> 'Pacote com 100 unidades',
            'filter' => 'pacote com 100 unidades',
        ]);
        ProductUnitModel::create([
            'title'=> 'Pacote com 500 unidades',
            'filter' => 'pacote com 500 unidades',
        ]);
        ProductUnitModel::create([
            'title'=> 'Caixa com 100 unidades',
            'filter' => 'caixa com 100 unidades',
        ]);
        ProductUnitModel::create([
            'title'=> 'Caixa com 500 unidades',
            'filter' => 'caixa com 500 unidades',
        ]);
    }
}
