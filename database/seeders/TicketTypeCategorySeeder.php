<?php

namespace Database\Seeders;

use App\Models\Ticket\TicketTypeCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketTypeCategory::create([
            'title'=>'Informática',
        ]);

        TicketTypeCategory::create([
            'title'=>'Almoxarifado',
        ]);

        TicketTypeCategory::create([
            'title'=>'Manutenção',
        ]);
    }
}
