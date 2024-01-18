<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutUnitsStoreRequest;
use App\Http\Requests\ProdutUnitsUpdateRequest;
use App\Models\Product\ProductUnitModel;
use App\Services\Logger;

class ProductUnitController extends Controller
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
        //Listando Dados
        $db = ProductUnitModel::select()
            ->orderBy('status','desc')
            ->orderBy('unit')
            ->paginate();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = ProductUnitModel::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('unit')
                ->paginate(20);
        }

        Logger::access();

        return view('admin.product.unit.unit_index',[
            'search'=>$search,
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        Logger::create();

        return view('admin.product.unit.unit_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutUnitsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['unit']);

        //Salvando Dados
        ProductUnitModel::create();

        Logger::store();

        return redirect(route('units.index'))
            ->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = ProductUnitModel::find($id);

        Logger::edit();

        return view('admin.product.unit.unit_edit',[
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutUnitsUpdateRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();

        //Salvando Dados
        $db = ProductUnitModel::find($id);
        $db->update($data);

        Logger::update();

        return redirect(route('units.index'))
            ->with('success','Atualização realizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $db = ProductUnitModel::find($id);
        $db->update($data);

        Logger::status();

        return redirect(route('units.index'))->with('success','Status alterado com sucesso.');
    }
}
