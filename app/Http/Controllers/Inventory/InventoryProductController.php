<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryProduct;
use App\Http\Requests\Inventory\StoreInventoryProductRequest;
use App\Http\Requests\Inventory\UpdateInventoryProductRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryWarehouseOrder;
use App\Models\Product\Product;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryProductController extends Controller
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
        $db = CompanyEstablishmentDepartment::where('has_inventory_product',TRUE)
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

        return view('inventory.inventory_product.inventory_product_index',[
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
    public function store(StoreInventoryProductRequest $request)
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
        $dbInventories = InventoryProduct::where('establishment_department_id', $id)->get();
        $dbOrders = InventoryWarehouseOrder::where('establishment_department_id', $id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_product.inventory_product_show',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbInventories'=>$dbInventories,
            'dbOrders'=>$dbOrders,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryProduct $inventoryProduct)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryProductRequest $request, InventoryProduct $inventoryProduct)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryProduct $inventoryProduct)
    {
        //
        return redirect()->route('login');
    }
}
