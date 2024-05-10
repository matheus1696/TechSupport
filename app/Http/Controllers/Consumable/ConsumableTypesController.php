<?php

namespace App\Http\Controllers\Consumable;

use App\Http\Controllers\Controller;
use App\Models\Product\ConsumableTypes;
use App\Http\Requests\StoreConsumableTypesRequest;
use App\Http\Requests\UpdateConsumableTypesRequest;
use App\Services\Logger;

class ConsumableTypesController extends Controller
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
        $db = ConsumableTypes::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.consumable.consumable_types.consumable_types_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Log do Sistema
        Logger::create();

        return view('admin.consumable.consumable_types.consumable_types_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConsumableTypesRequest $request)
    {
        $data = $request->all();

        ConsumableTypes::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('consumable_types.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ConsumableTypes $consumableTypes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = ConsumableTypes::find($id);

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.consumable.consumable_types.consumable_types_edit',compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConsumableTypesRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();

        //Listagem de Dados
        $db = ConsumableTypes::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('consumable_types.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConsumableTypes $consumableTypes)
    {
        return redirect(route('consumable_types.index'));
    }
}
