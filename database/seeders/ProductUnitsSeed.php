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
            'no_unidade_medida' => 'Unidade',
            'ft_unidade_medida' => 'unidade',
        ]);
        ProductUnitModel::create([
            'no_unidade_medida' => 'Cartelas com 10 unidades',
            'ft_unidade_medida' => 'Cartelas com 10 unidades',
        ]);
        ProductUnitModel::create([
            'no_unidade_medida' => 'Pacote com 100 unidades',
            'ft_unidade_medida' => 'pacote com 100 unidades',
        ]);
        ProductUnitModel::create([
            'no_unidade_medida' => 'Pacote com 500 unidades',
            'ft_unidade_medida' => 'pacote com 500 unidades',
        ]);
        ProductUnitModel::create([
            'no_unidade_medida' => 'Caixa com 100 unidades',
            'ft_unidade_medida' => 'caixa com 100 unidades',
        ]);
        ProductUnitModel::create([
            'no_unidade_medida' => 'Caixa com 500 unidades',
            'ft_unidade_medida' => 'caixa com 500 unidades',
        ]);
    }
}
