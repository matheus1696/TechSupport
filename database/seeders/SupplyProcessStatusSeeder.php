<?php

namespace Database\Seeders;

use App\Models\SupplyProcess\SupplyProcessStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplyProcessStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        SupplyProcessStatus::create([
            'title'=>'Solicitado',
            'color'=>'bg-green-600',
            'default'=>1
        ]);
        SupplyProcessStatus::create([
            'title'=>'Cotação de Preço',
            'color'=>'bg-green-600',
        ]);
        SupplyProcessStatus::create([
            'title'=>'Cancelado',
            'color'=>'bg-red-600',
        ]);
        SupplyProcessStatus::create([
            'title'=>'Vencido',
            'color'=>'bg-red-600',
        ]);
        SupplyProcessStatus::create([
            'title'=>'Pregão',
            'color'=>'bg-green-600',
        ]);
        SupplyProcessStatus::create([
            'title'=>'Renovação',
            'color'=>'bg-yellow-600',
        ]);
    }
}
