<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketTypeCategories;
use App\Http\Requests\StoreTicketTypeCategoriesRequest;
use App\Http\Requests\UpdateTicketTypeCategoriesRequest;
use App\Models\Ticket\TicketTypeService;
use Illuminate\Http\Request;

class TicketTypeCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketTypeCategories $ticketTypeCategories)
    {
        //        
        $db = $ticketTypeCategories->orderBy('title')->paginate(20);

        return view('admin.ticket.type_category.type_category_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //        
        return view('admin.ticket.type_category.type_category_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTicketTypeCategoriesRequest $request)
    {
        //
        $data = $request->all();

        TicketTypeCategories::create($data);

        return redirect(route('ticket_type_categories.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketTypeCategories $ticketTypeCategories)
    {
        //
        $db = $ticketTypeCategories;
        $dbServices = TicketTypeService::where('ticket_type_category_id',$db->id)
            ->orderBy('title')
            ->get();

        return view('admin.ticket.type_category.type_category_show', compact('db', 'dbServices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketTypeCategories $ticketTypeCategories)
    {
        //
        $db = $ticketTypeCategories;

        return view('admin.ticket.type_category.type_category_edit', compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketTypeCategoriesRequest $request, TicketTypeCategories $ticketTypeCategories)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $ticketTypeCategories->update($data);

        return redirect(route('ticket_type_categories.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketTypeCategories $ticketTypeCategories)
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, TicketTypeCategories $ticketTypeCategories)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $ticketTypeCategories->update($data);

        return redirect()->back()
            ->with('success','Status alterado com sucesso.');
    }
}
