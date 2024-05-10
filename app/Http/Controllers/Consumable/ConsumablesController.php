<?php

namespace App\Http\Controllers\Consumable;

use App\Http\Controllers\Controller;
use App\Models\Product\Consumables;
use App\Http\Requests\StoreConsumablesRequest;
use App\Http\Requests\UpdateConsumablesRequest;
use App\Services\Logger;

class ConsumablesController extends Controller
{    
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Listagem de Dados
        $db = Consumables::select()->orderBy('status','DESC')->orderBy('consumable')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.consumable.consumables.consumables_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Log do Sistema
        Logger::create();

        return view('admin.consumable.consumables.consumables_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumablesRequest $request)
    {
        $data = $request->all();

        Consumables::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('consumables.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Consumables $consumables)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = Consumables::find($id);

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.consumable.consumables.consumables_edit',compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsumablesRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();

        //Listagem de Dados
        $db = Consumables::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('consumables.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consumables $consumables)
    {
        return redirect(route('consumables.index'));
    }
}
