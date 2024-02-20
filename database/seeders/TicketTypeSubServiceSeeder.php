<?php

namespace Database\Seeders;

use App\Models\Ticket\TicketTypeSubService;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketTypeSubServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketTypeSubService::create([
            'title'=>'Mouse com defeito / Mouse sem funcionar',
            'ticket_type_service_id'=>'1'
        ]);
        TicketTypeSubService::create([
            'title'=>'Teclado com defeito / Teclado sem funcionar',
            'ticket_type_service_id'=>'1'
        ]);
        TicketTypeSubService::create([
            'title'=>'Computador sem ligar',
            'ticket_type_service_id'=>'1'
        ]);
        TicketTypeSubService::create([
            'title'=>'Computador travando ou desligando',
            'ticket_type_service_id'=>'1'
        ]);
        TicketTypeSubService::create([
            'title'=>'Impressora atolando',
            'ticket_type_service_id'=>'2'
        ]);
        TicketTypeSubService::create([
            'title'=>'Impressora não liga',
            'ticket_type_service_id'=>'2'
        ]);
        TicketTypeSubService::create([
            'title'=>'Solicitação de toner',
            'ticket_type_service_id'=>'2'
        ]);
        TicketTypeSubService::create([
            'title'=>'Telefone desligado',
            'ticket_type_service_id'=>'3'
        ]);
        TicketTypeSubService::create([
            'title'=>'Telefone não faz ligações',
            'ticket_type_service_id'=>'3'
        ]);
        TicketTypeSubService::create([
            'title'=>'Telefone mudo',
            'ticket_type_service_id'=>'3'
        ]);
    }
}
