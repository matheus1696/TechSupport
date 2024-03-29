<?php

namespace App\Http\Controllers\Admin\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutUnitsStoreRequest;
use App\Http\Requests\ProdutUnitsUpdateRequest;
use App\Models\Product\ProductUnit;
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
        $db = ProductUnit::select()
            ->orderBy('status','desc')
            ->orderBy('title')
            ->paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = ProductUnit::where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('title')
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
        $data['filter'] = StrtoLower($data['title']);

        //Salvando Dados
        ProductUnit::create($data);

        Logger::store($data['title']);

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
        $db = ProductUnit::find($id);

        Logger::edit($db->title);

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
        $db = ProductUnit::find($id);
        $db->update($data);

        Logger::update($db->title);

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
        $db = ProductUnit::find($id);
        $db->update($data);

        Logger::status($db->id, $db->status);

        return redirect(route('units.index'))->with('success','Status alterado com sucesso.');
    }
}
