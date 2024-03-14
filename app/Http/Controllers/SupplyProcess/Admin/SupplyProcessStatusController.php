<?php

namespace App\Http\Controllers\SupplyProcess\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SupplyProcess\SupplyProcessStatusStoreRequest;
use App\Http\Requests\SupplyProcess\SupplyProcessStatusUpdateRequest;
use App\Models\SupplyProcess\SupplyProcessStatus;
use App\Services\Logger;
use Illuminate\Http\Request;

class SupplyProcessStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SupplyProcessStatus $supplyProcessStatus)
    {
        $db = $supplyProcessStatus->orderBy('default','DESC')->orderBy('title')->paginate(20);

        //Logs
        Logger::access();

        return view('admin.supply_process.supply_process_status.supply_process_status_index', compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Logs
        Logger::create();

        return view('admin.supply_process.supply_process_status.supply_process_status_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SupplyProcessStatusStoreRequest $request)
    {
        //
        $data = $request->all();

        SupplyProcessStatus::create($data);

        //Logs
        Logger::store($data['title']);

        return redirect(route('supply_process_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(SupplyProcessStatus $supplyProcessStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SupplyProcessStatus $supplyProcessStatus)
    {
        //
        $db = $supplyProcessStatus;

        //Logs
        Logger::store($supplyProcessStatus->title);

        return view('admin.supply_process.supply_process_status.supply_process_status_edit', compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SupplyProcessStatusUpdateRequest $request, SupplyProcessStatus $supplyProcessStatus)
    {
        //Dados dos Formulários
        $data = $request->all();

        //Salvando Dados
        $supplyProcessStatus->update($data);

        //Logs
        Logger::update($supplyProcessStatus->title);

        return redirect(route('supply_process_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SupplyProcessStatus $supplyProcessStatus)
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, SupplyProcessStatus $supplyProcessStatus)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $supplyProcessStatus->update($data);

        //Logs
        Logger::status($supplyProcessStatus->id, $supplyProcessStatus->status);

        return redirect(route('supply_process_statuses.index'))
            ->with('success','Status alterado com sucesso.');
    }

    /**
     * Setting the status of the specified item in storage to default.
     */
    public function default(Request $request, SupplyProcessStatus $supplyProcessStatus)
    {
        //Dados dos Formulários
        $data = $request->only('default');

        //Verificando se o dado estava como padrão
        if ($data['default'] == 0) {
            return redirect(route('supply_process_statuses.index'))
                ->with('success','Status estava definido como padrão');
        } else {
            //Limpando Padrão
            $db = SupplyProcessStatus::all();

            foreach ($db as $item) {
                $item->update(['default'=>0,]);
            }

            //Salvando Dados
            $supplyProcessStatus->update($data);

            return redirect(route('supply_process_statuses.index'))
                ->with('success','Status definido como padrão');
        }
        
    }
}
