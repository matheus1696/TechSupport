<?php

namespace Database\Seeders;

use App\Models\Product\ProductType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductType::create(['title'=>'Papelaria', 'filter'=>'papelaria' ]);
        ProductType::create(['title'=>'Limpeza', 'filter'=>'limpeza' ]);
    }
}
