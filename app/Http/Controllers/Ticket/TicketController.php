<?php

namespace App\Http\Controllers\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\Ticket;
use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Ticket\TicketInteraction;
use App\Models\Ticket\TicketTypeCategory;
use App\Models\Ticket\TicketTypeService;
use App\Models\Ticket\TicketTypeSubService;
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

        $dbInteractions = TicketInteraction::all();

        return view('ticket.ticket_index', compact('db','dbInteractions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dbEstablishments = CompanyEstablishmentsModel::select()->orderBy('title')->get();
        $dbTypeCategories = TicketTypeCategory::all();
        $dbTypeServices = TicketTypeService::all();
        $dbTypeSubServices = TicketTypeSubService::all();

        return view('ticket.ticket_create', compact('dbEstablishments','dbTypeCategories','dbTypeServices','dbTypeSubServices'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketRequest $request)
    {
        //
        $db = Ticket::all();

        $data = $request->all();        
        $data['ticket_number'] = "#".date('ymd').$db->count();
        $data['data_last_interaction'] = now();
        $data['amount_interaction'] = 1;
        $data['user_id'] = Auth::user()->id;
        Ticket::create($data);

        $db = Ticket::where('ticket_number', $data['ticket_number'])->first();

        $sync['description']=$data['description'];
        $sync['ticket_id']=$db->id;
        $sync['user_id']=Auth::user()->id;

        TicketInteraction::create($sync);

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
