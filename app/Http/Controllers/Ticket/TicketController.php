<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        
        $db = Ticket::where('user_id',Auth::user()->id)
            ->whereNot('status_id', 3)
            ->with('TicketTypeCategory')
            ->with('TicketTypeService')
            ->with('TicketTypeSubService')
            ->with('TicketStatus')
            ->paginate(10);

        if ($request['ticket']) {
            if ($request['ticket'] == 'close') {
                $db = Ticket::where('user_id',Auth::user()->id)
                ->where('status_id', 3)
                ->with('TicketTypeCategory')
                ->with('TicketTypeService')
                ->with('TicketTypeSubService')
                ->with('TicketStatus')
                ->paginate(10);
            }            
        }       

        return view('ticket.ticket_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ticket $ticket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketRequest $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }
}
