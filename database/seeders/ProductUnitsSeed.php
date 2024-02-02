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
            'acronym'=> 'UND',
            'title'=> 'Unidade',
            'filter' => 'unidade',
        ]);
        ProductUnitModel::create([
            'acronym'=> 'CT/10',
            'title'=> 'Cartelas com 10 unidades',
            'filter' => 'cartelas com 10 unidades',
        ]);
        ProductUnitModel::create([
            'acronym'=> 'PCT/100',
            'title'=> 'Pacote com 100 unidades',
            'filter' => 'pacote com 100 unidades',
        ]);
        ProductUnitModel::create([
            'acronym'=> 'PCT/500',
            'title'=> 'Pacote com 500 unidades',
            'filter' => 'pacote com 500 unidades',
        ]);
        ProductUnitModel::create([
            'acronym'=> 'CX/100',
            'title'=> 'Caixa com 100 unidades',
            'filter' => 'caixa com 100 unidades',
        ]);
        ProductUnitModel::create([
            'acronym'=> 'CX/500',
            'title'=> 'Caixa com 500 unidades',
            'filter' => 'caixa com 500 unidades',
        ]);
    }
}
