<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseEntry;
use App\Http\Requests\Inventory\StoreInventoryWarehouseEntryRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseEntryRequest;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryWarehouseEntryController extends Controller
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
    public function store(StoreInventoryWarehouseEntryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        //Listagem de Dados
        $dbInventoryWarehouseEntry = InventoryWarehouseEntry::find($id);
        $dbEstablishmentDepartment = InventoryWarehouseEntry::where('establishment_department_id',$dbInventoryWarehouseEntry->establishment_department_id)->first();
        $db = InventoryWarehouseEntry::where('establishment_department_id',$dbInventoryWarehouseEntry->establishment_department_id)->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventoryWarehouseEntry::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
                //->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('date')
                ->paginate(40);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse_entry.inventory_warehouse_entry_show',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseEntryRequest $request, InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseEntry $InventoryWarehouseEntry)
    {
        //
    }
}
