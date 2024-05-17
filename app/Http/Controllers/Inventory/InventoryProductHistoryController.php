<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryProductHistory;
use App\Http\Requests\Inventory\StoreInventoryProductHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryProductHistoryRequest;
use App\Models\Inventory\Inventory;
use App\Models\Inventory\InventoryProduct;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryProductHistoryController extends Controller
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
    public function store(StoreInventoryProductHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['user_id'] = Auth::user()->id;

        InventoryProductHistory::create($data);

        $db = InventoryProduct::where('product_id',$data['product_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryProduct::create([
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
        $dbEstablishmentDepartment = InventoryProductHistory::where('establishment_department_id',$id)
        ->first();
        $db = InventoryProductHistory::where('establishment_department_id',$id)
        ->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventoryProductHistory::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
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
    public function edit(InventoryProductHistory $inventoryProductHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryProductHistoryRequest $request, InventoryProductHistory $inventoryProductHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryProductHistory $inventoryProductHistory)
    {
        //
        return redirect()->route('login');
    }
}
