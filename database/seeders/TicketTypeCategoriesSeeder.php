<?php

namespace Database\Seeders;

use App\Models\Ticket\TicketTypeCategories;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketTypeCategories::create([
            'title'=>'Informática',
        ]);

        TicketTypeCategories::create([
            'title'=>'Almoxarifado',
        ]);

        TicketTypeCategories::create([
            'title'=>'Manutenção',
        ]);
    }
}
