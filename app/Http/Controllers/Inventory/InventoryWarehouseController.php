<?php

namespace App\Http\Controllers\Inventory;

use App\Http\Controllers\Controller;
use App\Http\Requests\Inventory\StoreInventoryWarehouseEntryRequest;
use App\Http\Requests\Inventory\StoreInventoryWarehouseExitRequest;
use App\Models\Inventory\InventoryWarehouse;
use App\Http\Requests\Inventory\StoreInventoryWarehouseRequest;
use App\Http\Requests\Inventory\UpdateInventoryWarehouseRequest;
use App\Models\Company\CompanyEstablishmentDepartment;
use App\Models\Company\CompanyFinancialBlock;
use App\Models\Inventory\Inventory;
use App\Models\Inventory\InventoryWarehouseEntry;
use App\Models\Inventory\InventoryWarehouseHistory;
use App\Models\Inventory\InventoryWarehouseOrder;
use App\Models\Product\Product;
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
        $this->middleware(['permission:sysadmin|admin']);
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

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = CompanyEstablishmentDepartment::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('department')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse.inventory_warehouse_index',[
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
    public function store(StoreInventoryWarehouseRequest $request)
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
        $dbProducts = Product::all();
        $dbEstablishmentDepartments = CompanyEstablishmentDepartment::where('has_inventory_product',TRUE)
            ->with('CompanyEstablishment')
            ->get();

        $dbInventoryEntries = InventoryWarehouseEntry::where('establishment_department_id', $id)
            ->where('quantity', '>', 0)
            ->orderBy('product_id')
            ->orderBy('financial_block_id')
            ->with('Product')
            ->with('CompanyEstablishment')
            ->with('CompanyEstablishmentDepartment')
            ->with('CompanyFinancialBlock')
            ->get();

        $dbInventories = InventoryWarehouse::where('establishment_department_id', $id)
            ->orderBy('product_id')
            ->orderBy('financial_block_id')
            ->with('Product')
            ->with('CompanyEstablishment')
            ->with('CompanyEstablishmentDepartment')
            ->with('CompanyFinancialBlock')
            ->get();

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_warehouse.inventory_warehouse_show',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbEstablishmentDepartments'=>$dbEstablishmentDepartments,
            'dbInventories'=>$dbInventories,
            'dbInventoryEntries'=>$dbInventoryEntries,
        ]);
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
    public function update(UpdateInventoryWarehouseRequest $request, InventoryWarehouse $inventoryWarehouse)
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
        $data['user_id'] = Auth::user()->id;

        InventoryWarehouseHistory::create($data);

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouse::where('product_id',$data['product_id'])
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
                        'product_id'=>$data['product_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity += $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseEntry::where('product_id',$data['product_id'])
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
                        'product_id'=>$data['product_id'],
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
    public function entryShow(string $id)
    {
        //
        $db = CompanyEstablishmentDepartment::find($id);
        $dbProducts = Product::all();
        $dbFinancialBlocks = CompanyFinancialBlock::all();
        $dbInventories = InventoryWarehouseHistory::where('establishment_department_entry_id', $id)
        ->where('created_at','>=',today()->subDay(7))
        ->where('movement','Entrada')
        ->orderBy('date', 'DESC')
        ->orderBy('product_id')
        ->orderBy('financial_block_id')
        ->with('Product')
        ->with('CompanyEstablishmentEntry')
        ->with('CompanyEstablishmentDepartmentEntry')
        ->with('CompanyEstablishmentExit')
        ->with('CompanyEstablishmentDepartmentExit')
        ->with('CompanyFinancialBlock')
        ->limit(30)->paginate(30);

        //Log do Sistema
        Logger::show($db->title);

        return view('inventory.inventory_warehouse.inventory_warehouse_entry',[
            'db'=>$db,
            'dbProducts'=>$dbProducts,
            'dbFinancialBlocks'=>$dbFinancialBlocks,
            'dbInventories'=>$dbInventories,
        ]);
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

        $dbHistory = InventoryWarehouseHistory::create($data);

        //Vinculando Almoxarifado que Recebe o Produto
        $dbEstablishmentDepartment = CompanyEstablishmentDepartment::find($data['establishment_department_exit_id']);
        $dbHistory->establishment_department_exit_id = $dbEstablishmentDepartment->id;
        $dbHistory->establishment_exit_id = $dbEstablishmentDepartment->establishment_id;
        $dbHistory->save();

        //Quantidade do Estoque Geral
            //Buscando Cadastro
                $db = InventoryWarehouse::where('product_id',$data['product_id'])
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
                        'product_id'=>$data['product_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade no inventário com base no movimento
                $db->quantity -= $data['quantity'];
                $db->save();

        //Quantidade por Ordem de Fornecimento e Nota Fiscal
            //Buscando Cadastro
                $dbEntry = InventoryWarehouseEntry::where('product_id',$data['product_id'])
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
                        'product_id'=>$data['product_id'],
                        'establishment_id'=>$data['establishment_id'],
                        'establishment_department_id'=>$data['establishment_department_entry_id'],
                        'financial_block_id'=>$data['financial_block_id'],
                    ]);
                }
        
            // Atualizar a quantidade por Ordem de Fornecimento e Nota Fiscal
                $dbEntry->quantity -= $data['quantity'];
                $dbEntry->save();


            //Entrada no Estoque Recebedor
                InventoryWarehouseOrder::create([
                    'code'=>"SMS".time(),
                    'inventory_warehouse_order_status_id'=>'3',
                    'inventory_warehouse_history_id'=>$dbHistory->id,
                ]);

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
        ->orderBy('date','DESC')
        ->paginate(40);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchDate'])) {
            $db = InventoryWarehouseHistory::where('date','LIKE','%'.strtolower($search['searchDate']).'%')
                //->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('date')
                ->paginate(40);
        }

        //Log do Sistema
        Logger::access();

        return view('inventory.inventory_warehouse.inventory_warehouse_history',[
            'search'=>$search,
            'db'=>$db,
            'dbEstablishmentDepartment'=>$dbEstablishmentDepartment,
        ]);
    }
}
