<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Http\Requests\Inventory\StoreInventoryWarehouseHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseHistoryRequest;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryWarehouseHistoryController extends Controller
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
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryWarehouseHistoryRequest $request)
    {
        //
        return redirect()->route('login');
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
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseHistoryRequest $request, InventoryWarehouseHistory $inventoryWarehouseHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouseHistory $inventoryWarehouseHistory)
    {
        //
        return redirect()->route('login');
    }
}
