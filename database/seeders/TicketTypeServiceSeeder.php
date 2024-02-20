<?php

namespace Database\Seeders;

use App\Models\Ticket\TicketTypeService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketTypeService::create([
            'title'=>'Computador/Desktop/Notebook'
        ]);
        TicketTypeService::create([
            'title'=>'Impressora'
        ]);
        TicketTypeService::create([
            'title'=>'Telefone'
        ]);
    }
}
