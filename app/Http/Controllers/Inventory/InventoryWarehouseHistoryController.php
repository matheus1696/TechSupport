<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Http\Requests\Inventory\StoreInventoryWarehouseHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseHistoryRequest;
use App\Models\Inventory\InventoryWarehouse;
use App\Models\Inventory\InventoryWarehouseEntry;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryWarehouseHistoryController extends Controller
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
    public function store(StoreInventoryWarehouseHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventoryWarehouseHistory::where('establishment_department_id',$id)
        ->first();
        
        $db = InventoryWarehouseHistory::where('establishment_department_id',$id)
        ->orderBy('date','DESC')
        ->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventoryWarehouseHistory::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
                //->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('date')
                ->paginate(40);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse_history.inventory_warehouse_history_show',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouseHistory $inventoryWarehouseHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseHistoryRequest $request, InventoryWarehouseHistory $inventoryWarehouseHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseHistory $inventoryWarehouseHistory)
    {
        //
    }
}
