<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Ticket\TicketTypeCategory;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $db = Ticket::where('user_id',Auth::user()->id)
        ->with('Establishment')
        ->with('TicketTypeCategory')
        ->with('TicketTypeService')
        ->with('TicketTypeSubService')
        ->with('TicketStatus')
        ->paginate(20);

        return view('ticket.ticket_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dbEstablishments = CompanyEstablishmentsModel::select()->orderBy('title')->get();

        return view('ticket.ticket_create', compact('dbEstablishments'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
        $db = Ticket::all();
        $date = date('Ymd');

        $data = $request->all();        
        $data['ticket_number'] = $date.$db->count();
        $data['user_id'] = Auth::user()->id;
        Ticket::create($data);

        return redirect(route('tickets.index'));
        
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
        $db = $ticket;

        return view('ticket.ticket_index', compact('db'));
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
