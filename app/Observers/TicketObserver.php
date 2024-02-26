<?php

namespace App\Observers;

use App\Models\Ticket\Ticket;

class TicketObserver
{
    /**
     * Handle the ticket "created" event.
     */
    public function created(ticket $ticket): void
    {
        //
        $data = date("Ymd");
    }

    /**
     * Handle the ticket "updated" event.
     */
    public function updated(ticket $ticket): void
    {
        //
    }

    /**
     * Handle the ticket "deleted" event.
     */
    public function deleted(ticket $ticket): void
    {
        //
    }

    /**
     * Handle the ticket "restored" event.
     */
    public function restored(ticket $ticket): void
    {
        //
    }

    /**
     * Handle the ticket "force deleted" event.
     */
    public function forceDeleted(ticket $ticket): void
    {
        //
    }
}
