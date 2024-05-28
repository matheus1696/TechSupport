<?php

namespace App\Http\Controllers\Inventory\Warehouse;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\Warehouse\StoreInventoryWarehouseHistoryRequest;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Inventory\InventoryWarehouse;
use App\Models\Inventory\InventoryWarehouseCenterHistory;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Models\Consumable\Consumable;
use App\Models\Inventory\InventoryWarehousePermission;
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
        $this->middleware(['permission:sysadmin|admin|inventory_warehouse']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $query = CompanyEstablishmentDepartment::query();
        $db = $query->where('has_inventory_warehouse',TRUE)->orderBy('department')->paginate(20);
        $dbEstablishments = CompanyEstablishment::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            if (!empty($search['searchSector'])) { $query->where('filter','LIKE','%'.strtolower($search['searchSector']).'%');}    
            if (!empty($search['searchEstablishment'])) { $query->where('establishment_id', $search['searchEstablishment']);}
            $query ->where('has_inventory_warehouse',TRUE);
            $db = $query->orderBy('department')->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse.inventory_warehouse_index',[
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

        if (!$db->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Estoque não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryWarehousePermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$db->id)
            ->first();

        if ($validadeInventoryPermission) {

            $dbConsumables = Consumable::all();
            $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_warehouse.inventory_warehouse_show',[
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbInventories'=>$dbInventories,
            ]);
        }        

        return redirect()->route('inventory_warehouses.index')->with('error','Usuário sem permissão de acessar esse estoque');
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

        if (!$db->has_inventory_warehouse) {

            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Estoque não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryWarehousePermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$db->id)
            ->first();

        if ($validadeInventoryPermission) {
            
            $dbConsumables = Consumable::all();
            $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)->get();
            $dbInventoryHistories = InventoryWarehouseCenterHistory::where('department_exit_id', $id)
                ->where('pending', FALSE)
                ->orderBy('date')
                ->paginate(20);
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_warehouse.inventory_warehouse_request',[
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbInventories'=>$dbInventories,
                'dbInventoryHistories'=>$dbInventoryHistories,
            ]);

        }        

        return redirect()->route('inventory_warehouses.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function entryCreate(string $id)
    {
        $db = CompanyEstablishmentDepartment::find($id);      

        if (!$db->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Estoque não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryWarehousePermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$db->id)
            ->first();

        if ($validadeInventoryPermission) {

            $dbConsumables = Consumable::all();
            $dbInventoryHistories = InventoryWarehouseHistory::where('loose',TRUE)
                ->where('establishment_department_id',$id)->orderBy('created_at')
                ->limit(20)
                ->get();

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_warehouse.inventory_warehouse_create',[
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbInventoryHistories'=>$dbInventoryHistories,
            ]);
        }        

        return redirect()->route('inventory_warehouses.index')->with('error','Usuário sem permissão de acessar esse estoque');
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

        $db = InventoryWarehouse::where('consumable_id',$data['consumable_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryWarehouse::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'consumable_id'=>$data['consumable_id'],
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
        $InventoryQuantityConsumable = InventoryWarehouse::where('establishment_department_id',$data['establishment_department_id'])
            ->where('consumable_id', $data['consumable_id'])
            ->first();

        if ($InventoryQuantityConsumable->quantity < $data['quantity']) {
            return redirect()->back()
                ->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }
        */

        InventoryWarehouseHistory::create($data);

        $db = InventoryWarehouse::where('consumable_id',$data['consumable_id'])
            ->where('establishment_department_id',$data['establishment_department_id'])
            ->first();

        if ($db == NULL) {
            $db = InventoryWarehouse::create([
                'quantity'=>0,
                'establishment_id'=>$data['establishment_id'],
                'establishment_department_id'=>$data['establishment_department_id'],
                'consumable_id'=>$data['consumable_id'],
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

        if (!$dbEstablishmentDepartment->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($dbEstablishmentDepartment->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Estoque não liberado para este departamento');
        }

        //Verificação de Permissão para o estoque
        $validadeInventoryPermission = InventoryWarehousePermission::where('user_id',Auth::user()->id)
            ->where('establishment_department_id',$dbEstablishmentDepartment->id)
            ->first();

        if ($validadeInventoryPermission) {           
    
            $dbConsumables = Consumable::select()->orderBy('title')->get();

            $query = InventoryWarehouseHistory::query(); 
            $query->where('establishment_department_id',$id);

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchConsumable']) || isset($search['searchDate']) || isset($search['searchMovement'])) { 
                if (!empty($search['searchDate'])) { $query->where('date', $search['searchDate']);}    
                if (!empty($search['searchMovement'])) { $query->where('movement', $search['searchMovement']);}   
                if (!empty($search['searchConsumable'])) { $query->where('consumable_id', $search['searchConsumable']);}                
            }

            $db = $query->orderBy('created_at','DESC')->paginate(40);
    
            //Log do Sistema
            Logger::access();
    
            return view('inventory.inventory_warehouse.inventory_warehouse_history',[
                'search'=>$search,
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
            
        }        

        return redirect()->route('inventory_warehouses.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
