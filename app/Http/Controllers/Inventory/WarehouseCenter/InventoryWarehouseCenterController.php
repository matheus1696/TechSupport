<?php

namespace App\Http\Controllers\Inventory\WarehouseCenter;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\WarehouseCenter\StoreInventoryWarehouseCenterEntryRequest;
use App\Http\Requests\Inventory\WarehouseCenter\StoreInventoryWarehouseCenterExitRequest;
use App\Models\Company\CompanyEstablishment;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Consumable\Consumable;
use App\Models\Inventory\InventoryWarehouseCenter;
use App\Models\Inventory\InventoryWarehouseCenterEntry;
use App\Models\Inventory\InventoryWarehouseCenterHistory;
use App\Services\Logger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryWarehouseCenterController extends Controller
{
    /*
     * Controller access permission resource.
     */
    public function __construct()
    {
        $this->middleware(['permission:sysadmin|admin|inventory_warehouse_center']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Listagem de Dados
        $query = CompanyEstablishmentDepartment::query();
        $db = $query->where('has_inventory_warehouse_center',TRUE)->orderBy('department')->paginate(20);
        $dbEstablishments = CompanyEstablishment::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchSector']) || isset($search['searchEstablishment'])) {
            if (!empty($search['searchSector'])) { $query->where('filter','LIKE','%'.strtolower($search['searchSector']).'%');}    
            if (!empty($search['searchEstablishment'])) { $query->where('establishment_id', $search['searchEstablishment']);}
            $query ->where('has_inventory_warehouse_center',TRUE);
            $db = $query->orderBy('department')->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse_center.inventory_warehouse_center_index',[
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
    public function show(Request $request, string $id)
    {
        // Recupera o departamento específico
        $db = CompanyEstablishmentDepartment::find($id);

        //Proteção de Acesso somente para setores com liberação de almoxarifado central
        if (!$db->has_inventory_warehouse_center) {
            //Log do Sistema
            Logger::error('Centro de Distribuição não liberado para este departamento');

            return redirect()->route('inventory_warehouse_centers.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        if ($db->establishment_id) {           

            // Recupera todos os dados dos produtos e do bloco de financiamento
            $dbConsumables = Consumable::select()->orderBy('title')->get();
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();

            // Recupera todos os departamentos com inventário de produtos
            $dbEstablishmentDepartments = CompanyEstablishmentDepartment::where('has_inventory_warehouse', true)
            ->join('company_establishments', 'company_establishment_departments.establishment_id', '=', 'company_establishments.id')
            ->select('company_establishment_departments.*', 'company_establishments.title as establishment_title')
            ->orderBy('company_establishments.title')
            ->orderBy('department')
            ->with('CompanyEstablishment')
            ->get();

            // Consulta de entradas de inventário com quantidade maior que zero
            $dbInventoryEntries = InventoryWarehouseCenterEntry::where('establishment_department_id', $id)
            ->where('quantity', '>', 0)
            ->join('consumables', 'inventory_warehouse_center_entries.consumable_id', '=', 'consumables.id')
            ->join('company_financial_blocks', 'inventory_warehouse_center_entries.financial_block_id', '=', 'company_financial_blocks.id')
            ->select('inventory_warehouse_center_entries.*', 'consumables.title as consumable_title', 'company_financial_blocks.acronym as financial_block_acronym')
            ->orderBy('consumables.title')
            ->orderBy('quantity')
            ->orderBy('company_financial_blocks.acronym')
            ->with(['Consumable','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
            ->get();

            // Consulta de inventário geral            
            $query = InventoryWarehouseCenter::query();
            $dbInventories = $query->where('establishment_department_id', $id)
                ->join('consumables', 'inventory_warehouse_centers.consumable_id', '=', 'consumables.id')
                ->join('company_financial_blocks', 'inventory_warehouse_centers.financial_block_id', '=', 'company_financial_blocks.id')
                ->select('inventory_warehouse_centers.*', 'consumables.title as consumable_title', 'company_financial_blocks.acronym as financial_block_acronym')
                ->orderBy('consumables.title')
                ->orderBy('company_financial_blocks.acronym')
                ->with(['Consumable','CompanyEstablishment','CompanyEstablishmentDepartment','CompanyFinancialBlock'])
                ->paginate(30);      

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchConsumable']) || isset($search['searchFinancialBlock'])) {            
                if (!empty($search['searchConsumable'])) { $query->where('consumable_id', $search['searchConsumable']);}
                if (!empty($search['searchFinancialBlock'])) { $query->where('financial_block_id', $search['searchFinancialBlock']);}            
                $dbInventories = $query->orderBy('quantity','DESC')->paginate(30);
            }

            //Log do Sistema
            Logger::show($db->title);

            return view('inventory.inventory_warehouse_center.inventory_warehouse_center_show',[
                'db'=>$db,
                'search'=>$search,
                'dbConsumables'=>$dbConsumables,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbEstablishmentDepartments'=>$dbEstablishmentDepartments,
                'dbInventories'=>$dbInventories,
                'dbInventoryEntries'=>$dbInventoryEntries,
            ]);
        }        

        return redirect()->route('inventory_warehouse_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
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
     * Store Inventory Warehouse a newly created resource in storage.
     */
    public function entryStore(StoreInventoryWarehouseCenterEntryRequest $request)
    {
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Entrada";
        $data['pending'] = FALSE;
        $data['user_id'] = Auth::user()->id;

        InventoryWarehouseCenterHistory::create($data);

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouseCenter::where('consumable_id',$data['consumable_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryWarehouseCenter::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'consumable_id'=>$data['consumable_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity += $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseCenterEntry::where('consumable_id',$data['consumable_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryWarehouseCenterEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'consumable_id'=>$data['consumable_id'],
                        'establishment_id'=>$data['establishment_entry_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
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
        $db = CompanyEstablishmentDepartment::find($id);     

        //Proteção de Acesso somente para setores com liberação de almoxarifado central
        if (!$db->has_inventory_warehouse_center) {
            //Log do Sistema
            Logger::error('Centro de Distribuição não liberado para este departamento');

            return redirect()->route('inventory_warehouse_centers.index')->with('error','Centro de Distribuição não liberado para este departamento');
        }

        if ($db->establishment_id) {
            $dbConsumables = Consumable::select()->orderBy('title')->get();;
            $dbFinancialBlocks = CompanyFinancialBlock::select()->orderBy('title')->get();;
            $dbInventories = InventoryWarehouseCenterHistory::where('inventory_warehouse_center_histories.department_entry_id', $id)
                ->where('inventory_warehouse_center_histories.created_at', '>=', now()->subDays(7))
                ->where('inventory_warehouse_center_histories.movement', 'Entrada')
                ->join('consumables', 'inventory_warehouse_center_histories.consumable_id', '=', 'consumables.id')
                ->join('company_financial_blocks', 'inventory_warehouse_center_histories.financial_block_id', '=', 'company_financial_blocks.id')
                ->select('inventory_warehouse_center_histories.*','consumables.title as consumable_title','company_financial_blocks.acronym as financial_block_acronym')
                ->orderBy('inventory_warehouse_center_histories.date', 'DESC')
                ->orderBy('consumables.title')
                ->orderBy('company_financial_blocks.acronym')
                ->with(['Consumable', 'CompanyFinancialBlock', 'CompanyEstablishmentEntry', 'CompanyEstablishmentDepartmentEntry', 'CompanyEstablishmentExit', 'CompanyEstablishmentDepartmentExit'])
                ->select('inventory_warehouse_center_histories.*')
                ->limit(20)
                ->get();
    
            //Log do Sistema
            Logger::show($db->title);
    
            return view('inventory.inventory_warehouse_center.inventory_warehouse_center_entry',[
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbFinancialBlocks'=>$dbFinancialBlocks,
                'dbInventories'=>$dbInventories,
            ]);
            
        }        

        return redirect()->route('inventory_warehouse_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }

    /**
     * Store Inventory Warehouse a newly created resource in storage.
     */
    public function exitStore(StoreInventoryWarehouseCenterExitRequest $request)
    {
        //
        $data = $request->all();
        $data['code'] = "SMS".time();
        $data['movement'] = "Saída";
        $data['user_id'] = Auth::user()->id;

        //Verificando se existe estoque para realizar a saída
        $InventoryQuantityConsumable = InventoryWarehouseCenter::where('establishment_department_id',$data['department_entry_id'])
            ->where('consumable_id', $data['consumable_id'])
            ->where('financial_block_id', $data['financial_block_id'])
            ->first();

        if ($InventoryQuantityConsumable->quantity < $data['quantity']) {
            return redirect()->back()->with('error','Quantidade informada para saída não compatível com a quantidade no estoque atual');
        }

        $dbHistory = InventoryWarehouseCenterHistory::create($data);

        //Vinculando Almoxarifado que Recebe o Produto
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($data['department_exit_id']);
        $dbHistory->department_exit_id = $dbEstablishmentDepartment->id;
        $dbHistory->establishment_exit_id = $dbEstablishmentDepartment->establishment_id;
        $dbHistory->save();

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouseCenter::where('consumable_id',$data['consumable_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->first();

            //Verificando se existe o cadastro produto cadastrado
                if ($db == NULL) {
                    //Realizando a Criação
                    $db = InventoryWarehouseCenter::create([
                        'quantity'=>0,
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
                        'consumable_id'=>$data['consumable_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity -= $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseCenterEntry::where('consumable_id',$data['consumable_id'])
                    ->where('establishment_department_id',$data['department_entry_id'])
                    ->where('financial_block_id',$data['financial_block_id'])
                    ->where('supply_order',$data['supply_order'])
                    ->where('invoice',$data['invoice'])
                    ->first();

            //Verificando se existe o produto cadastrado
                if ($dbEntry == NULL) {                    
                    //Realizando a Criação
                    $dbEntry = InventoryWarehouseCenterEntry::create([
                        'invoice'=>$data['invoice'],
                        'supply_order'=>$data['supply_order'],
                        'supply_company'=>$data['supply_company'],
                        'quantity'=>0,
                        'consumable_id'=>$data['consumable_id'],
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['department_entry_id'],
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
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($id);

        //Proteção de Acesso somente para setores com liberação de almoxarifado central
        if (!$dbEstablishmentDepartment->has_inventory_warehouse_center) {
            //Log do Sistema
            Logger::error('Centro de Distribuição não liberado para este departamento');

            return redirect()->route('inventory_warehouse_centers.index')->with('error','Centro de Distribuição não liberado para este departamento');
        } 

        if ($dbEstablishmentDepartment->id) {
        
            $query = InventoryWarehouseCenterHistory::query();
            $db = $query->where('department_entry_id',$id)->orderBy('created_at','DESC')->paginate(40);
            $dbConsumables = Consumable::select()->orderBy('title')->get();

            //Pesquisar Dados
            $search = $request->all();
            if (isset($search['searchConsumable']) || isset($search['searchDate']) || isset($search['searchMovement'])) {                
                if (!empty($search['searchDate'])) { $query->where('date', $search['searchDate']);}    
                if (!empty($search['searchMovement'])) { $query->where('movement', $search['searchMovement']);}   
                if (!empty($search['searchConsumable'])) { $query->where('consumable_id', $search['searchConsumable']);}
                $db = $query->orderBy('quantity')->paginate(40);
            }
    
            //Log do Sistema
            Logger::access();
    
            return view('inventory.inventory_warehouse_center.inventory_warehouse_center_history',[
                'search'=>$search,
                'db'=>$db,
                'dbConsumables'=>$dbConsumables,
                'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
            ]);
        }        

        return redirect()->route('inventory_warehouse_centers.index')->with('error','Usuário sem permissão de acessar esse estoque');
    }
}
