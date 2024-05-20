<?php

namespace Database\Seeders;

use App\Models\Supply\SupplyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SupplyType::create(['title'=>'Papelaria', 'filter'=>'papelaria' ]);
        SupplyType::create(['title'=>'Limpeza', 'filter'=>'limpeza' ]);
    }
}
