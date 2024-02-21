<?php

namespace App\Http\Controllers\Admin\Ticket;

use App\Http\Controllers\Controller;
use App\Models\Ticket\TicketTypeCategory;
use App\Http\Requests\StoreTicketTypeCategoryRequest;
use App\Http\Requests\UpdateTicketTypeCategoryRequest;
use App\Models\Ticket\TicketTypeService;
use Illuminate\Http\Request;

class TicketTypeCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(TicketTypeCategory $TicketTypeCategory)
    {
        //        
        $db = $TicketTypeCategory->orderBy('title')->paginate(20);

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
    public function store(StoreTicketTypeCategoryRequest $request)
    {
        //
        $data = $request->all();

        TicketTypeCategory::create($data);

        return redirect(route('ticket_type_categories.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(TicketTypeCategory $TicketTypeCategory)
    {
        //
        $db = $TicketTypeCategory;
        $dbServices = TicketTypeService::where('ticket_type_category_id',$db->id)
            ->orderBy('title')
            ->get();

        //
        $db->update(['amount_services'=>$dbServices->count()]);

        return view('admin.ticket.type_category.type_category_show', compact('db', 'dbServices'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TicketTypeCategory $TicketTypeCategory)
    {
        //
        $db = $TicketTypeCategory;

        return view('admin.ticket.type_category.type_category_edit', compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTicketTypeCategoryRequest $request, TicketTypeCategory $TicketTypeCategory)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $TicketTypeCategory->update($data);

        return redirect(route('ticket_type_categories.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TicketTypeCategory $TicketTypeCategory)
    {
        //
        if ($TicketTypeCategory->amount_services == 0) {
            
            $TicketTypeCategory->delete();

            return redirect()->back()->with('success','Categoria excluída');
        }
        
        return redirect()->back()->with('errors','Categoria contém serviços cadastrados.');
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, TicketTypeCategory $TicketTypeCategory)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $TicketTypeCategory->update($data);

        return redirect()->back()
            ->with('success','Status alterado com sucesso.');
    }
}
