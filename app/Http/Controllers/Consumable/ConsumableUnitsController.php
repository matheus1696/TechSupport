<?php

namespace App\Http\Controllers\Consumable;

use App\Http\Controllers\Controller;
use App\Models\Product\ConsumableUnits;
use App\Http\Requests\StoreConsumableUnitsRequest;
use App\Http\Requests\UpdateConsumableUnitsRequest;
use App\Services\Logger;

class ConsumableUnitsController extends Controller
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
        $db = ConsumableUnits::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.consumable.consumable_units.consumable_units_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Log do Sistema
        Logger::create();

        return view('admin.consumable.consumable_units.consumable_units_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumableUnitsRequest $request)
    {
        $data = $request->all();

        ConsumableUnits::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('consumable_units.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsumableUnits $ConsumableUnits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = ConsumableUnits::find($id);

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.consumable.consumable_units.consumable_units_edit',compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsumableUnitsRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();

        //Listagem de Dados
        $db = ConsumableUnits::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('consumable_units.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsumableUnits $ConsumableUnits)
    {
        return redirect(route('consumable_units.index'));
    }
}