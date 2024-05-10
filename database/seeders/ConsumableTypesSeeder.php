<?php

namespace Database\Seeders;

use App\Models\Product\ConsumableTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumableTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        ConsumableTypes::create(['title'=>'Medicamentos', ]);
        ConsumableTypes::create(['title'=>'Papelaria', ]);
    }
}
