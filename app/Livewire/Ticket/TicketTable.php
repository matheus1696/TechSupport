<?php

namespace App\Livewire\Ticket;

use App\Models\Ticket\Ticket;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class TicketTable extends Component
{
    use WithPagination;

    public function render()
    {
        $db = Ticket::where('user_id',Auth::user()->id)
            ->with('Establishment')
            ->with('TicketTypeCategory')
            ->with('TicketTypeService')
            ->with('TicketTypeSubService')
            ->with('TicketStatus')
            ->paginate(20);

        return view('livewire.ticket.ticket-table', compact('db'));
    }
}
