<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketTypeService;
use App\Http\Requests\StoreTicketTypeServiceRequest;
use App\Http\Requests\UpdateTicketTypeServiceRequest;
use App\Models\Ticket\TicketTypeSubService;
use Illuminate\Http\Request;

class TicketTypeServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketTypeService $ticketTypeService)
    {
        //        
        $db = $ticketTypeService->orderBy('title')->paginate(20);

        return view('admin.ticket.type_service.type_service_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //        
        return view('admin.ticket.type_service.type_service_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketTypeServiceRequest $request)
    {
        //
        $data = $request->all();

        TicketTypeService::create($data);

        return redirect(route('ticket_type_services.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketTypeService $ticketTypeService)
    {
        //
        $db = $ticketTypeService;
        $dbSubServices = TicketTypeSubService::where('ticket_type_service_id',$db->id)
            ->orderBy('title')
            ->get();

        return view('admin.ticket.type_service.type_service_show', compact('db', 'dbSubServices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketTypeService $ticketTypeService)
    {
        //
        $db = $ticketTypeService;

        return view('admin.ticket.type_service.type_service_edit', compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketTypeServiceRequest $request, TicketTypeService $ticketTypeService)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $ticketTypeService->update($data);

        return redirect(route('ticket_type_services.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketTypeService $ticketTypeService)
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, TicketTypeService $ticketTypeService)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        dd($ticketTypeService->status);

        //Salvando Dados
        $ticketTypeService->update($data);

        return redirect(route('ticket_type_services.index'))
            ->with('success','Status alterado com sucesso.');
    }
}
