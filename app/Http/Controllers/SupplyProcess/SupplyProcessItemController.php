<?php

namespace App\Http\Controllers\SupplyProcess;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcess\SupplyProcessItemStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessItemUpdateRequest;
use App\Models\SupplyProcess\SupplyProcess;
use App\Models\SupplyProcess\SupplyProcessItem;
use App\Models\Product\Product;
use App\Models\Product\ProductUnit;
use App\Services\Logger;

class SupplyProcessItemController extends Controller
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
        $dbSupplyProcesses = SupplyProcess::find($id);
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
    public function store(SupplyProcessItemStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        SupplyProcessItem::create($data);

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
        $db = SupplyProcessItem::find($id);
        $dbSupplyProcesses = SupplyProcess::find($db['process_id']);
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
    public function update(string $id, SupplyProcessItemUpdateRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $db = SupplyProcessItem::find($id);
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
        $db = SupplyProcessItem::find($id);

        //Exclusão de Item
            $db->delete();

            //Log do Sistema
            Logger::destroy($db->title);

            return redirect(route('supply_processes.show',['supply_process'=>$db['processo_id']]))
                ->with('success','Item excluido com sucesso');
    }
}
