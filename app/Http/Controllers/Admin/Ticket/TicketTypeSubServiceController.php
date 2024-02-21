<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketTypeSubService;
use App\Http\Requests\StoreTicketTypeSubServiceRequest;
use App\Http\Requests\UpdateTicketTypeSubServiceRequest;
use Illuminate\Http\Request;

class TicketTypeSubServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreTicketTypeSubServiceRequest $request)
    {
        //
        $data = $request->all();

        TicketTypeSubService::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketTypeSubService $ticketTypeSubService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketTypeSubService $ticketTypeSubService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketTypeSubServiceRequest $request, TicketTypeSubService $ticketTypeSubService)
    {
        //
        $data = $request->all();

        $ticketTypeSubService->update($data);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketTypeSubService $ticketTypeSubService)
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, TicketTypeSubService $ticketTypeSubService)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $ticketTypeSubService->update($data);

        return redirect()->back()->with('success','Status alterado com sucesso.');
    }
}