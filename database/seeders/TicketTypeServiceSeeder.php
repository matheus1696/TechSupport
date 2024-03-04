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
            'title'=>'Computador',
            'ticket_type_category_id'=>1,
        ]);

        TicketTypeService::create([
            'title'=>'Notebook',
            'ticket_type_category_id'=>1,
        ]);

        TicketTypeService::create([
            'title'=>'Smartphone / Celular',
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
            'title'=>'Recolhimento de Inservíveis',
            'ticket_type_category_id'=>2,
        ]);

        TicketTypeService::create([
            'title'=>'Ar-condicionado',
            'ticket_type_category_id'=>3,
        ]);
        
        TicketTypeService::create([
            'title'=>'Manutenção Prédial',
            'ticket_type_category_id'=>3,
        ]);
    }
}
