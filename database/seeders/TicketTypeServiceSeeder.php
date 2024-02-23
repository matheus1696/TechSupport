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
            'title'=>'Computador/Desktop/Notebook',
            'ticket_type_category_id'=>1,
        ]);

        TicketTypeService::create([
            'title'=>'Acesso ao Sistema',
            'ticket_type_category_id'=>1,
        ]);

        TicketTypeService::create([
            'title'=>'Impressora',
            'ticket_type_category_id'=>1,
        ]);
        
        TicketTypeService::create([
            'title'=>'Telefone',
            'ticket_type_category_id'=>1,
        ]);
        
        TicketTypeService::create([
            'title'=>'Pedido de Suprimento',
            'ticket_type_category_id'=>2,
        ]);
        
        TicketTypeService::create([
            'title'=>'Conserto de Porta',
            'ticket_type_category_id'=>3,
        ]);
    }
}
