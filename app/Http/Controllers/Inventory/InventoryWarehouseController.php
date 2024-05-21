<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreInventoryWarehouseEntryRequest;
use App\Http\Requests\Inventory\StoreInventoryWarehouseExitRequest;
use App\Models\Inventory\InventoryWarehouse;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Inventory\InventoryWarehouseEntry;
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
        $this->middleware(['permission:sysadmin|admin|inventory_warehouse']);
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

        $dbEstablishments = CompanyEstablishment::all();

        //Pesquisar Dados
        $search = $request->all();

        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            
            if (isset($search['searchEstablishment']) == NULL) {
                $search['searchEstablishment'] = 0;
            };

            $db = CompanyEstablishmentDepartment::where('has_inventory_warehouse',TRUE)
                ->where('filter','LIKE','%'.strtolower($search['searchSector']).'%')
                ->Where('establishment_id',$search['searchEstablishment'])
                ->where('has_inventory_warehouse',TRUE)
                ->orderBy('department')
                ->paginate(20);
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
    public function create()
    {
        //
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
        return redirect()->route('login');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, string $id)
    {
        // Recupera o departamento específico
        $db = CompanyEstablishmentDepartment::find($id);

        if (!$db->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        if ($db->establishment_id == Auth::user()->establishment_id) {           

            // Recupera todos os produtos e bloco de financiamentos
            $dbSupplies = Supply::select()->orderBy('title')->get();
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();

            // Recupera todos os departamentos com inventário de produtos
            $dbEstablishmentDepartments = CompanyEstablishmentDepartment::where('has_inventory_supply', true)
            ->join('company_establishments', 'company_establishment_departments.establishment_id', '=', 'company_establishments.id')
            ->select('company_establishment_departments.*', 'company_establishments.title as establishment_title')
            ->orderBy('company_establishments.title')
            ->orderBy('department')
            ->with('CompanyEstablishment')
            ->get();

            // Consulta de entradas de inventário com quantidade maior que zero
            $dbInventoryEntries = InventoryWarehouseEntry::where('establishment_department_id', $id)
            ->where('quantity', '>', 0)
            ->join('supplies', 'inventory_warehouse_entries.supply_id', '=', 'supplies.id')
            ->join('company_financial_blocks', 'inventory_warehouse_entries.financial_block_id', '=', 'company_financial_blocks.id')
            ->select('inventory_warehouse_entries.*', 'supplies.title as supply_title', 'company_financial_blocks.acronym as financial_block_acronym')
            ->orderBy('supplies.title')
            ->orderBy('quantity')
            ->orderBy('company_financial_blocks.acronym')
            ->with(['Supply','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
            ->get();

            // Consulta de inventário geral
            $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)
            ->join('supplies', 'inventory_warehouses.supply_id', '=', 'supplies.id')
            ->join('company_financial_blocks', 'inventory_warehouses.financial_block_id', '=', 'company_financial_blocks.id')
            ->select('inventory_warehouses.*', 'supplies.title as supply_title', 'company_financial_blocks.acronym as financial_block_acronym')
            ->orderBy('supplies.title')
            ->orderBy('company_financial_blocks.acronym')
            ->with(['Supply','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
            ->get();       

            //Pesquisar Dados
            $search = $request->all();
            
            if (isset($search['searchSupply']) || isset($search['searchFinancialBlock'])) {

                $query = InventoryWarehouse::query();
            
                if (!empty($search['searchSupply'])) {
                    $query->where('supply_id', $search['searchSupply']);
                }
            
                if (!empty($search['searchFinancialBlock'])) {
                    $query->where('financial_block_id', $search['searchFinancialBlock']);
                }
            
                $dbInventories = $query->orderBy('quantity')->paginate(20);
            }

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_warehouse.inventory_warehouse_show',[
                'db'=>$db,
                'search'=>$search,
                'dbSupplies'=>$dbSupplies,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbEstablishmentDepartments'=>$dbEstablishmentDepartments,
                'dbInventories'=>$dbInventories,
                'dbInventoryEntries'=>$dbInventoryEntries,
            ]);
        }        

        return redirect()->back()->with('error','Usuário sem permissão de acessar esse estoque');
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
    public function update()
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

    /**
     * Store Inventory Warehouse a newly created resource in storage.
     */
    public function entryStore(StoreInventoryWarehouseEntryRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Entrada";
        $data['pending'] = FALSE;
        $data['user_id'] = Auth::user()->id;

        InventoryWarehouseHistory::create($data);

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouse::where('supply_id',$data['supply_id'])
                    ->where('establishment_department_id',$data['establishment_department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryWarehouse::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['establishment_department_entry_id'],
                        'supply_id'=>$data['supply_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity += $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseEntry::where('supply_id',$data['supply_id'])
                    ->where('establishment_department_id',$data['establishment_department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryWarehouseEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'supply_id'=>$data['supply_id'],
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['establishment_department_entry_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity += $data['quantity'];
                $dbEntry->save();

        return redirect()->back()->with('success','Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource Entry Warehouse.
     */
    public function entryCreate(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);        

        if (!$db->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        if ($db->establishment_id == Auth::user()->establishment_id) {

            $dbSupplies = Supply::select()->orderBy('title')->get();;
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();;
            $dbInventories = InventoryWarehouseHistory::where('inventory_warehouse_histories.establishment_department_entry_id', $id)
                ->where('inventory_warehouse_histories.created_at', '>=', now()->subDays(7))
                ->where('inventory_warehouse_histories.movement', 'Entrada')
                ->join('supplies', 'inventory_warehouse_histories.supply_id', '=', 'supplies.id')
                ->join('company_financial_blocks', 'inventory_warehouse_histories.financial_block_id', '=', 'company_financial_blocks.id')
                ->select('inventory_warehouse_histories.*','supplies.title as supply_title','company_financial_blocks.acronym as financial_block_acronym')
                ->orderBy('inventory_warehouse_histories.date', 'DESC')
                ->orderBy('supplies.title')
                ->orderBy('company_financial_blocks.acronym')
                ->with(['Supply', 'CompanyFinancialBlock', 'CompanyEstablishmentEntry', 'CompanyEstablishmentDepartmentEntry', 'CompanyEstablishmentExit', 'CompanyEstablishmentDepartmentExit'])
                ->select('inventory_warehouse_histories.*')
                ->limit(20)
                ->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_warehouse.inventory_warehouse_entry',[
                'db'=>$db,
                'dbSupplies'=>$dbSupplies,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbInventories'=>$dbInventories,
            ]);
            
        }        

        return redirect()->back()->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Store Inventory Warehouse a newly created resource in storage.
     */
    public function exitStore(StoreInventoryWarehouseExitRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Saída";
        $data['user_id'] = Auth::user()->id;

        //Verificando se existe estoque para realizar a saída
        $InventoryQuantitySupply = InventoryWarehouse::where('establishment_department_id',$data['establishment_department_entry_id'])
            ->where('supply_id', $data['supply_id'])
            ->where('financial_block_id', $data['financial_block_id'])
            ->first();

        if ($InventoryQuantitySupply->quantity < $data['quantity']) {
            return redirect()->back()->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }

        $dbHistory = InventoryWarehouseHistory::create($data);

        //Vinculando Almoxarifado que Recebe o Produto
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($data['establishment_department_exit_id']);
        $dbHistory->establishment_department_exit_id = $dbEstablishmentDepartment->id;
        $dbHistory->establishment_exit_id = $dbEstablishmentDepartment->establishment_id;
        $dbHistory->save();

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouse::where('supply_id',$data['supply_id'])
                    ->where('establishment_department_id',$data['establishment_department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryWarehouse::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['establishment_department_entry_id'],
                        'supply_id'=>$data['supply_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity -= $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseEntry::where('supply_id',$data['supply_id'])
                    ->where('establishment_department_id',$data['establishment_department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryWarehouseEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'supply_id'=>$data['supply_id'],
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['establishment_department_entry_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity -= $data['quantity'];
                $dbEntry->save();

        return redirect()->back()->with('success','Produto cadastrado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function history(Request $request, string $id)
    {
        //Listagem de Dados
        $dbEstablishmentDepartment = InventoryWarehouseHistory::where('establishment_department_entry_id',$id)
        ->first();
        
        $db = InventoryWarehouseHistory::where('establishment_department_entry_id',$id)
        ->orderBy('created_at','DESC')
        ->paginate(40);        

        if (!$dbEstablishmentDepartment->has_inventory_warehouse) {
            //Log do Sistema
            Logger::error($db->title);

            return redirect()->route('inventory_warehouses.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        if ($db->establishment_id == Auth::user()->establishment_id) {
            
            $dbSupplies = Supply::select()->orderBy('title')->get();

            //Pesquisar Dados
            $search = $request->all();
            
            if (isset($search['searchSupply']) || isset($search['searchDate'])) {
    
                $query = InventoryWarehouseHistory::query();   
    
                if (!empty($search['searchSupply'])) {
                    $query->where('supply_id', $search['searchSupply']);
                }        
    
                if (!empty($search['searchDate'])) {
                    $query->where('date', $search['searchDate']);
                }        
    
                $db = $query->orderBy('quantity')->paginate(40);
            }
    
            //Log do Sistema
            Logger::access();
    
            return view('inventory.inventory_warehouse.inventory_warehouse_history',[
                'search'=>$search,
                'db'=>$db,
                'dbSupplies'=>$dbSupplies,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
        }        

        return redirect()->back()->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
