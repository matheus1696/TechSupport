<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketStatus;
use App\Http\Requests\StoreTicketStatusRequest;
use App\Http\Requests\UpdateTicketStatusRequest;
use Illuminate\Http\Request;

class TicketStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketStatus $ticketStatus)
    {
        //
        $db = $ticketStatus->orderBy('title')->paginate(20);

        return view('admin.ticket.ticket_status.ticket_status_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.ticket.ticket_status.ticket_status_create')
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketStatusRequest $request)
    {
        //
        $data = $request->all();

        TicketStatus::create($data);

        return redirect(route('ticket_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketStatus $ticketStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketStatus $ticketStatus)
    {
        //
        $db = $ticketStatus;

        return view('admin.ticket.ticket_status.ticket_status_edit', compact('db'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketStatusRequest $request, TicketStatus $ticketStatus)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $ticketStatus->update($data);

        return redirect(route('ticket_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketStatus $ticketStatus)
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, TicketStatus $ticketStatus)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $ticketStatus->update($data);

        return redirect(route('ticket_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Setting the status of the specified item in storage to default.
     */
    public function default(Request $request, TicketStatus $ticketStatus)
    {
        //Dados dos Formulários
        $data = $request->only('default');

        //Verificando se o dado estava como padrão
        if ($data['default'] == 0) {
            return redirect(route('ticket_statuses.index'))
                ->with('success','Status estava definido como padrão');
        } else {
            //Limpando Padrão
            $db = TicketStatus::all();

            foreach ($db as $item) {
                $item->update(['default'=>0,]);
            }

            //Salvando Dados
            $ticketStatus->update($data);

            return redirect(route('ticket_statuses.index'))
                ->with('success','Status definido como padrão');
        }
        
    }
}
