<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryProduct;
use App\Http\Requests\Inventory\StoreInventoryProductRequest;
use App\Http\Requests\Inventory\UpdateInventoryProductRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Product\Product;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryProductController extends Controller
{
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
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreInventoryProductRequest $request)
    {
        //
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

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_product.inventory_product_show',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbInventories'=>$dbInventories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryProduct $inventoryProduct)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryProductRequest $request, InventoryProduct $inventoryProduct)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryProduct $inventoryProduct)
    {
        //
    }
}
