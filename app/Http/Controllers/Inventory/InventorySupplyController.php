<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreInventorySupplyHistoryRequest;
use App\Models\Inventory\InventorySupply;
use App\Http\Requests\Inventory\StoreInventorySupplyRequest;
use App\Http\Requests\Inventory\UpdateInventorySupplyRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventorySupplyHistory;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Models\Supply\Supply;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventorySupplyController extends Controller
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
        $db = CompanyEstablishmentDepartment::where('has_inventory_supply',TRUE)
        ->orderBy('department')
        ->paginate(20);        

        //Pesquisar Dados
        $search = $request->all();

        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            
            if (isset($search['searchEstablishment']) == NULL) {
                $search['searchEstablishment'] = 0;
            };

            $db = CompanyEstablishmentDepartment::where('filter','LIKE','%'.strtolower($search['searchSector']).'%')
                ->orWhere('establishment_id',$search['searchEstablishment'])
                ->where('has_inventory_supply',TRUE)
                ->orderBy('department')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_supply.inventory_supply_index',[
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
    public function store(StoreInventorySupplyRequest $request)
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
        $dbSupplies = Supply::all();
        $dbInventories = InventorySupply::where('establishment_department_id', $id)->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_supply.inventory_supply_show',[
            'db'=>$db,
            'dbSupplies'=>$dbSupplies,
            'dbInventories'=>$dbInventories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbSupplies = Supply::all();
        $dbInventories = InventorySupply::where('establishment_department_id', $id)->get();
        $dbInventoryHistories = InventoryWarehouseHistory::where('establishment_department_exit_id', $id)
            ->where('pending', FALSE)
            ->orderBy('date')
            ->paginate(20);

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_supply.inventory_supply_request',[
            'db'=>$db,
            'dbSupplies'=>$dbSupplies,
            'dbInventories'=>$dbInventories,
            'dbInventoryHistories'=>$dbInventoryHistories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInventorySupplyRequest $request, InventorySupply $inventorySupply)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InventorySupply $inventorySupply)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function request(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbSupplies = Supply::all();
        $dbInventories = InventorySupply::where('establishment_department_id', $id)->get();
        $dbInventoryHistories = InventoryWarehouseHistory::where('establishment_department_exit_id', $id)
            ->where('pending', FALSE)
            ->orderBy('date')
            ->paginate(20);

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_supply.inventory_supply_request',[
            'db'=>$db,
            'dbSupplies'=>$dbSupplies,
            'dbInventories'=>$dbInventories,
            'dbInventoryHistories'=>$dbInventoryHistories,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function entryCreate(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbSupplies = Supply::all();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_supply.inventory_supply_create',[
            'db'=>$db,
            'dbSupplies'=>$dbSupplies,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function entryStore(StoreInventorySupplyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Entrada';
        $data['user_id'] = Auth::user()->id;

        InventorySupplyHistory::create($data);

        $db = InventorySupply::where('supply_id',$data['supply_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventorySupply::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'supply_id'=>$data['supply_id'],
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
     * Store a newly created resource in storage.
     */
    public function exitStore(StoreInventorySupplyHistoryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Saída';
        $data['user_id'] = Auth::user()->id;

        InventorySupplyHistory::create($data);

        $db = InventorySupply::where('supply_id',$data['supply_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventorySupply::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'supply_id'=>$data['supply_id'],
            ]);
        }

        $db->quantity -= $data['quantity'];
        $db->save();

        return redirect()->back()
            ->with('success', 'Saída realizada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function history(Request $request,string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventorySupplyHistory::where('establishment_department_id',$id)
        ->first();
        $db = InventorySupplyHistory::where('establishment_department_id',$id)
        ->orderBy('created_at','DESC')
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

        return view('inventory.inventory_supply.inventory_supply_history',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }
}
