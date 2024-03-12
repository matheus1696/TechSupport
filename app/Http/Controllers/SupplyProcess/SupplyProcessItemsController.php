<?php

namespace App\Http\Controllers\SupplyProcess;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcessItemsStoreRequest;
use App\Http\Requests\SupplyProcessItemsUpdateRequest;
use App\Models\SupplyProcess\SupplyProcesses;
use App\Models\SupplyProcess\SupplyProcessItems;
use App\Models\Product\Product;
use App\Models\Product\ProductUnit;
use App\Services\Logger;

class SupplyProcessItemsController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|supply']);
    }

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
    public function create(string $id)
    {
        //Listando Dados
        $dbSupplyProcesses = SupplyProcesses::find($id);
        $dbProducts = Product::where('status',true)->orderBy('title')->get();
        $dbUnits = ProductUnit::all();

        Logger::create();

        return view('supply_process.supply_process_item.supply_process_item_create',[
            'dbSupplyProcesses'=>$dbSupplyProcesses,
            'dbProducts'=>$dbProducts,
            'dbUnits'=>$dbUnits,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplyProcessItemsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        SupplyProcessItems::create($data);

        Logger::store($data['process_id']);

        return redirect(route('supply_processes.show',['supply_process'=>$data['process_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = SupplyProcessItems::find($id);
        $dbSupplyProcesses = SupplyProcesses::find($db['process_id']);
        $dbProducts = Product::all();
        $dbUnits = ProductUnit::all();

        Logger::edit($db->title);

        return view('supply_process.supply_process_item.supply_process_item_edit',[
            'db'=>$db,
            'dbSupplyProcesses'=>$dbSupplyProcesses,
            'dbProducts'=>$dbProducts,
            'dbUnits'=>$dbUnits,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id, SupplyProcessItemsUpdateRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $db = SupplyProcessItems::find($id);
        $db->update($data);

        Logger::update($db->title);

        return redirect(route('supply_processes.show',['supply_process'=>$data['process_id']]))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //Listando Dados
        $db = SupplyProcessItems::find($id);

        //Exclusão de Item
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->title);

            return redirect(route('supply_processes.show',['supply_process'=>$db['processo_id']]))
                ->with('success','Item excluido com sucesso');
    }
}
