<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventorySupplyHistory;
use App\Http\Requests\Inventory\StoreInventorySupplyHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventorySupplyHistoryRequest;
use App\Models\Inventory\InventorySupply;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventorySupplyHistoryController extends Controller
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
    public function store(StoreInventorySupplyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['user_id'] = Auth::user()->id;

        InventorySupplyHistory::create($data);

        $db = InventorySupply::where('product_id',$data['product_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventorySupply::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'product_id'=>$data['product_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        if (isset($data['inventary_history'])) {
            $dbHistory = InventoryWarehouseHistory::find($data['inventary_history']);
            $dbHistory->pending = TRUE;
            $dbHistory->save();
        }

        return redirect()->back()
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventorySupplyHistory::where('establishment_department_id',$id)
        ->first();
        $db = InventorySupplyHistory::where('establishment_department_id',$id)
        ->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventorySupplyHistory::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
                //->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('date')
                ->paginate(40);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_product_history.inventory_product_history_index',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventorySupplyHistory $inventorySupplyHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventorySupplyHistoryRequest $request, InventorySupplyHistory $inventorySupplyHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventorySupplyHistory $inventorySupplyHistory)
    {
        //
        return redirect()->route('login');
    }
}
