<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryWarehouse;
use App\Http\Requests\Inventory\StoreInventoryWarehouseRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Inventory\InventoryWarehouseEntry;
use App\Models\Product\Product;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryWarehouseController extends Controller
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
    public function index(Request $request)
    {
        //Listagem de Dados
        $db = CompanyEstablishmentDepartment::where('has_inventory_warehouse',TRUE)
        ->orderBy('department')
        ->paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = CompanyEstablishmentDepartment::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('department')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse.inventory_warehouse_index',[
            'search'=>$search,
            'db'=>$db,
        ]);
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
    public function store(StoreInventoryWarehouseRequest $request)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbProducts = Product::all();
        $dbFinancialBlocks = CompanyFinancialBlock::all();
        $dbInventoryEntries = InventoryWarehouseEntry::where('establishment_department_id', $id)
        ->orderBy('product_id')
        ->orderBy('financial_block_id')
        ->with('Product')
        ->with('CompanyEstablishment')
        ->with('CompanyEstablishmentDepartment')
        ->with('CompanyFinancialBlock')
        ->get();

        $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)
        ->orderBy('product_id')
        ->orderBy('financial_block_id')
        ->with('Product')
        ->with('CompanyEstablishment')
        ->with('CompanyEstablishmentDepartment')
        ->with('CompanyFinancialBlock')
        ->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_warehouse.inventory_warehouse_show',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbFinancialBlocks'=>$dbFinancialBlocks,
            'dbInventories'=>$dbInventories,
            'dbInventoryEntries'=>$dbInventoryEntries,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryWarehouse $inventoryWarehouse)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryWarehouseRequest $request, InventoryWarehouse $inventoryWarehouse)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryWarehouse $inventoryWarehouse)
    {
        //
        return redirect()->route('login');
    }
}
