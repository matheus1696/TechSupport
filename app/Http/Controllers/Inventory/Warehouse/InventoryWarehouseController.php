<?php

namespace App\Http\Controllers\Inventory\Warehouse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\Warehouse\StoreInventoryWarehouseHistoryRequest;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryWarehouse;
use App\Models\Inventory\InventoryWarehouseCenterHistory;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Models\Supply\Supply;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryWarehouseController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_supply']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $query = CompanyEstablishmentDepartment::query();
        $db = $query->where('has_inventory_supply',TRUE)->orderBy('department')->paginate(20);
        $dbEstablishments = CompanyEstablishment::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            if (!empty($search['searchSector'])) { $query->where('filter','LIKE','%'.strtolower($search['searchSector']).'%');}    
            if (!empty($search['searchEstablishment'])) { $query->where('establishment_id', $search['searchEstablishment']);}
            $query ->where('has_inventory_supply',TRUE);
            $db = $query->orderBy('department')->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_supply.inventory_supply_index',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishments'=>$dbEstablishments,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){ return redirect()->route('login');}

    /**
     * Store a newly created resource in storage.
     */
    public function store(){ return redirect()->route('login');}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $db = CompanyEstablishmentDepartment::find($id);

        if (!$db->has_inventory_supply) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_supplies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {

            $dbSupplies = Supply::all();
            $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_supply.inventory_supply_show',[
                'db'=>$db,
                'dbSupplies'=>$dbSupplies,
                'dbInventories'=>$dbInventories,
            ]);
        }        

        return redirect()->route('inventory_supplies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(){ return redirect()->route('login');}

    /**
     * Update the specified resource in storage.
     */
    public function update(){ return redirect()->route('login');}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(){ return redirect()->route('login');}

    /**
     * Show the form for editing the specified resource.
     */
    public function request(string $id)
    {
        $db = CompanyEstablishmentDepartment::find($id);       

        if (!$db->has_inventory_supply) {

            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_supplies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {
            
            $dbSupplies = Supply::all();
            $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)->get();
            $dbInventoryHistories = InventoryWarehouseCenterHistory::where('establishment_department_exit_id', $id)
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

        return redirect()->route('inventory_supplies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function entryCreate(string $id)
    {
        $db = CompanyEstablishmentDepartment::find($id);      

        if (!$db->has_inventory_supply) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_supplies.index')->with('error','Estoque não liberado para este departamento');
        }        

        if ($db->establishment_id) {

            $dbSupplies = Supply::all();
            $dbInventoryHistories = InventoryWarehouseHistory::where('loose',TRUE)->orderBy('created_at')->limit(20)->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_supply.inventory_supply_create',[
                'db'=>$db,
                'dbSupplies'=>$dbSupplies,
                'dbInventoryHistories'=>$dbInventoryHistories,
            ]);
        }        

        return redirect()->route('inventory_supplies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function entryStore(StoreInventoryWarehouseHistoryRequest $request)
    {
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Entrada';
        $data['user_id'] = Auth::user()->id;

        InventoryWarehouseHistory::create($data);

        $db = InventoryWarehouse::where('supply_id',$data['supply_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryWarehouse::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'supply_id'=>$data['supply_id'],
            ]);
        }
        
        // Atualizar a quantidade no inventário com base no movimento
            $db->quantity += $data['quantity'];
            $db->save();

        if (isset($data['inventary_history'])) {
            $dbHistory = InventoryWarehouseCenterHistory::find($data['inventary_history']);
            $dbHistory->pending = TRUE;
            $dbHistory->save();
        }

        return redirect()->back()
            ->with('success', 'Histórico de inventário criado com sucesso.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function exitStore(StoreInventoryWarehouseHistoryRequest $request)
    {
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['date'] = date('Y-m-d');
        $data['movement'] = 'Saída';
        $data['user_id'] = Auth::user()->id;
        
        /* //Verificando se existe estoque para realizar a saída
        $InventoryQuantitySupply = InventoryWarehouse::where('establishment_department_id',$data['establishment_department_id'])
            ->where('supply_id', $data['supply_id'])
            ->first();

        if ($InventoryQuantitySupply->quantity < $data['quantity']) {
            return redirect()->back()
                ->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }
        */

        InventoryWarehouseHistory::create($data);

        $db = InventoryWarehouse::where('supply_id',$data['supply_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryWarehouse::create([
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
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($id);

        if (!$dbEstablishmentDepartment->has_inventory_supply) {
            //Log do Sistema
            Logger::error($dbEstablishmentDepartment->title);

            return redirect()->route('inventory_supplies.index')->with('error','Estoque não liberado para este departamento');
        }       

        if ($dbEstablishmentDepartment->establishment_id) {

            $db = InventoryWarehouseHistory::where('establishment_department_id',$id)
            ->orderBy('created_at','DESC')
            ->paginate(40);
    
            $dbSupplies = Supply::select()->orderBy('title')->get();

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchSupply']) || isset($search['searchDate']) || isset($search['searchMovement'])) {                
                $query = InventoryWarehouseCenterHistory::query();                
                if (!empty($search['searchDate'])) { $query->where('date', $search['searchDate']);}    
                if (!empty($search['searchMovement'])) { $query->where('movement', $search['searchMovement']);}   
                if (!empty($search['searchSupply'])) { $query->where('supply_id', $search['searchSupply']);}
                $db = $query->orderBy('quantity')->paginate(40);
            }
    
            //Log do Sistema
            Logger::access();
    
            return view('inventory.inventory_supply.inventory_supply_history',[
                'search'=>$search,
                'db'=>$db,
                'dbSupplies'=>$dbSupplies,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
            
        }        

        return redirect()->route('inventory_supplies.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
