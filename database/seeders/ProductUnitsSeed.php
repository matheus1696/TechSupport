<?php

namespace Database\Seeders;

use App\Models\Product\ProductUnit;
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
        ProductUnit::create([
            'acronym'=> 'UND',
            'title'=> 'Unidade',
            'filter' => 'unidade',
        ]);
        ProductUnit::create([
            'acronym'=> 'CT/10',
            'title'=> 'Cartelas com 10 unidades',
            'filter' => 'cartelas com 10 unidades',
        ]);
        ProductUnit::create([
            'acronym'=> 'PCT/100',
            'title'=> 'Pacote com 100 unidades',
            'filter' => 'pacote com 100 unidades',
        ]);
        ProductUnit::create([
            'acronym'=> 'PCT/500',
            'title'=> 'Pacote com 500 unidades',
            'filter' => 'pacote com 500 unidades',
        ]);
        ProductUnit::create([
            'acronym'=> 'CX/100',
            'title'=> 'Caixa com 100 unidades',
            'filter' => 'caixa com 100 unidades',
        ]);
        ProductUnit::create([
            'acronym'=> 'CX/500',
            'title'=> 'Caixa com 500 unidades',
            'filter' => 'caixa com 500 unidades',
        ]);
    }
}
