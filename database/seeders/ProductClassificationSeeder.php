<?php

namespace Database\Seeders;

use App\Models\Product\ProductClassification;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductClassificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ProductClassification::create(['title'=>'Permanente', 'filter'=>'permanente']);
        ProductClassification::create(['title'=>'Consumo', 'filter'=>'consumo']);
    }
}
