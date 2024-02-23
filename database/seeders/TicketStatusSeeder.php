<?php

namespace Database\Seeders;

use App\Models\Ticket\TicketStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketStatus::create([
            'title'=>'Aberto',
            'default'=>1
        ]);
        TicketStatus::create([
            'title'=>'Solicitação de Material'
        ]);
        TicketStatus::create([
            'title'=>'Concluído'
        ]);
        TicketStatus::create([
            'title'=>'Andamento'
        ]);
        TicketStatus::create([
            'title'=>'Solicitação enviada ao prestador'
        ]);
        TicketStatus::create([
            'title'=>'Reaberto'
        ]);
    }
}
