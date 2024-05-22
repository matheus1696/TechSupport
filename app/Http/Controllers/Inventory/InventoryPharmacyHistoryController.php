<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Models\Inventory\InventoryPharmacyHistory;
use App\Http\Requests\Inventory\StoreInventoryPharmacyHistoryRequest;
use App\Http\Requests\Inventory\UpdateInventoryPharmacyHistoryRequest;
use App\Models\Inventory\InventoryPharmacy;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryPharmacyHistoryController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_pharmacy']);
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
    public function store(StoreInventoryPharmacyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['user_id'] = Auth::user()->id;

        InventoryPharmacyHistory::create($data);

        $db = InventoryPharmacy::where('medication_id',$data['medication_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryPharmacy::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'medication_id'=>$data['medication_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
        if ($data['movement'] === "Entrada") {
            $db->quantity += $data['quantity'];
        } elseif ($data['movement'] === "Saída") {
            $db->quantity -= $data['quantity'];
        }

        $db->save();

        return redirect()->route('inventory_pharmacies.show',['inventory_pharmacy' => $data['establishment_department_id']])
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {        
        //Listagem de Dados
        $dbEstablishmentDepartment = InventoryPharmacyHistory::where('establishment_department_id',$id)
        ->first();
        $db = InventoryPharmacyHistory::where('establishment_department_id',$id)
            ->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventoryPharmacyHistory::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
                //->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('date')
                ->paginate(40);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_medication_history.inventory_medication_history_index',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(InventoryPharmacyHistory $InventoryPharmacyHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventoryPharmacyHistoryRequest $request, InventoryPharmacyHistory $InventoryPharmacyHistory)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventoryPharmacyHistory $InventoryPharmacyHistory)
    {
        //
        return redirect()->route('login');
    }
}
