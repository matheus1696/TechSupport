<?php

namespace Database\Seeders;

use App\Models\Product\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'code'=>'DESK-TP1',
            'title'=>'DESKTOP TIPO 1',
            'filter'=>'desktop tipo 1',
            'description'=>'Computador Desktop Tipo 1',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'DESK-TP2',
            'title'=>'DESKTOP TIPO 2',
            'filter'=>'desktop tipo 2',
            'description'=>'Computador Desktop Tipo 2',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'MONITOR-TP1',
            'title'=>'MONITOR TIPO 1',
            'filter'=>'monitor tipo 1',
            'description'=>'MONITOR Tipo 1',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'MONITOR-TP2',
            'title'=>'MONITOR TIPO 2',
            'filter'=>'monitor tipo 2',
            'description'=>'MONITOR Tipo 2',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'MEM-16GB-DDR5',
            'title'=>'Memória RAM 16GB DDR5',
            'filter'=>'Memória RAM 16GB DDR5',
            'description'=>'Memória RAM 16GB DDR5',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'MEM-8GB-DDR5',
            'title'=>'Memória RAM 8GB DDR5',
            'filter'=>'Memória RAM 8GB DDR5',
            'description'=>'Memória RAM 8GB DDR5',
            'type'=>'Permanent'
        ]);
        Product::create([
            'code'=>'CNT-RJ45',
            'title'=>'Conector RJ45',
            'filter'=>'Conector RJ45',
            'description'=>'Conector RJ45',
            'type'=>'Consumption'
        ]);
    }
}
