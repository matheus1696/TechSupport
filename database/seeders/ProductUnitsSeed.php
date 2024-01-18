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
            'unit' => 'Unidade',
            'filter' => 'unidade',
        ]);
        ProductUnitModel::create([
            'unit' => 'Cartelas com 10 unidades',
            'filter' => 'Cartelas com 10 unidades',
        ]);
        ProductUnitModel::create([
            'unit' => 'Pacote com 100 unidades',
            'filter' => 'pacote com 100 unidades',
        ]);
        ProductUnitModel::create([
            'unit' => 'Pacote com 500 unidades',
            'filter' => 'pacote com 500 unidades',
        ]);
        ProductUnitModel::create([
            'unit' => 'Caixa com 100 unidades',
            'filter' => 'caixa com 100 unidades',
        ]);
        ProductUnitModel::create([
            'unit' => 'Caixa com 500 unidades',
            'filter' => 'caixa com 500 unidades',
        ]);
    }
}
