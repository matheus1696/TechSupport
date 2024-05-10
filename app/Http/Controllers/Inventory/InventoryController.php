<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\Inventory;
use App\Http\Requests\StoreInventoryRequest;
use App\Http\Requests\UpdateInventoryRequest;
use App\Models\Company\CompanyEstablishment;
use App\Models\Inventory\InventoryHistory;
use App\Models\Product\Consumables;
use App\Services\Logger;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $db = CompanyEstablishment::where('has_inventory',TRUE)
            ->orderBy('status','DESC')
            ->orderBy('title')
            ->with('FinancialBlock')
            ->with('TypeEstablishment')
            ->with('RegionCity')
            ->paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchCod'])) {
            $db = CompanyEstablishment::where('code','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('title')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory.inventory_index',[
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
    public function store(StoreInventoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $db = CompanyEstablishment::find($id);
        $dbConsumables = Consumables::all();
        $dbInventories = Inventory::where('establishment_id', $id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory.inventory_show',[
            'db'=>$db,
            'dbConsumables'=>$dbConsumables,
            'dbInventories'=>$dbInventories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryRequest $request, Inventory $inventory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Inventory $inventory)
    {
        //
    }
}
