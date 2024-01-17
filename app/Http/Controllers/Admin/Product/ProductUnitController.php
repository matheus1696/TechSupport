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
        //Header
        $header = [
            'title'=>'Unidade de Medida',
            'route'=> route('units.create'),
        ];

        //Listando Dados
        $db = ProductUnitModel::select()
            ->orderBy('st_unidade_medida','desc')
            ->orderBy('no_unidade_medida')
            ->paginate();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = ProductUnitModel::where('ft_unidade_medida','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('no_unidade_medida')
                ->paginate(20);
        }

        Logger::access($header['title']);

        return view('admin.product.unit.unit_index',[
            'header'=>$header,
            'search'=>$search,
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Header
        $header = [
            'title'=>'Cadastrar de Unidade de Medida',
        ];

        return view('admin.product.unit.unit_create',[
            'header'=>$header,
        ]);

        Logger::create($header['title']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutUnitsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['ft_unidade_medida'] = StrtoLower($data['no_unidade_medida']);

        //Salvando Dados
        ProductUnitModel::create($data);

        Logger::store($data['id']);

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
        //Header
        $header = [
            'title'=>'Alterar Unidade de Medida',
        ];

        //Listagem de Dados
        $db = ProductUnitModel::find($id);

        Logger::edit($id);

        return view('admin.product.unit.unit_edit',[
            'header'=>$header,
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
        $db->save();

        Logger::update($id);

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
        $data = $request->only('st_unidate_medida');

        //Salvando Dados
        $db = ProductUnitModel::find($id);
        $db->update($data);
        $db->save();

        Logger::status($id,$data['st_unidate_medida']);

        return redirect(route('units.index'))->with('success','Status alterado com sucesso.');
    }
}
