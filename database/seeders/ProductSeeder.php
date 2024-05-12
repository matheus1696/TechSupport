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
        Product::create(['title'=>'Papel A4', 'filter'=>'papel a4', 'description'=>'', 'product_unit_id'=>'7', 'product_type_id'=>'1', 'product_classification_id'=>'2']);
        Product::create(['title'=>'Papel Higiênico', 'filter'=>'papel higiênico', 'description'=>'', 'product_unit_id'=>'2', 'product_type_id'=>'1', 'product_classification_id'=>'2']);
        Product::create(['title'=>'Detergente', 'filter'=>'detergente', 'description'=>'', 'product_unit_id'=>'1', 'product_type_id'=>'2', 'product_classification_id'=>'2']);
    }
}
