<?php

namespace App\Http\Controllers\Ticket\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Ticket\TicketStatusStoreRequest;
use App\Http\Requests\Ticket\TicketStatusUpdateRequest;
use App\Models\Ticket\TicketStatus;
use App\Services\Logger;
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

        //Logs
        Logger::access();

        return view('admin.ticket.ticket_status.ticket_status_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Logs
        Logger::create();

        return view('admin.ticket.ticket_status.ticket_status_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TicketStatusStoreRequest $request)
    {
        //
        $data = $request->all();

        TicketStatus::create($data);

        //Logs
        Logger::store($data['title']);

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

        //Logs
        Logger::store($ticketStatus->title);

        return view('admin.ticket.ticket_status.ticket_status_edit', compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TicketStatusUpdateRequest $request, TicketStatus $ticketStatus)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $ticketStatus->update($data);

        //Logs
        Logger::update($ticketStatus->title);

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

        //Logs
        Logger::status($ticketStatus->id, $ticketStatus->status);

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
