<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutsStoreRequest;
use App\Http\Requests\ProdutsUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Product\ProductModel;
use App\Services\Logger;

class ProductController extends Controller
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
            'title'=>'Produtos Cadastrados',
            'route'=>route('products.create'),
        ];

        $db = ProductModel::paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchProductCod']) || isset($search['searchProdutcName'])) {
            $db = ProductModel::where('cod_produto','LIKE','%'.strtolower($search['searchProductCod']).'%')
                ->where('ft_produto','LIKE','%'.strtolower($search['searchProdutcName']).'%')
                ->orderBy('no_produto')
                ->paginate(20);
        }

        //Logs
        Logger::access($header['title']);

        return view('admin.product.product.product_index',[
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
            'title'=>'Cadastrar de Produto',
        ];

        //Logs
        Logger::create($header['title']);

        return view('admin.product.product.product_create',[
            'header'=>$header,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['ft_produto'] = StrtoLower($data['no_produto']);

        //Salvando Dados
        ProductModel::create($data);

        //Logs
        Logger::store($data['no_produto']);

        return redirect(route('products.index'))->with('success','Cadastro salvo com sucesso');
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
            'title'=>'Alterar Cadastro do Produto',
        ];

        //Listagem de Dados
        $db = ProductModel::find($id);

        //Logs
        Logger::edit($id);

        return view('admin.product.product.product_edit',[
            'header'=>$header,
            'db'=>$db,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProdutsUpdateRequest $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['ft_produto'] = StrtoLower($data['no_produto']);

        //Salvando Dados
        $db = ProductModel::find($id);
        $db->update($data);
        $db->save();

        //Logs
        Logger::update($id);

        return redirect(route('products.index'))->with('success','Cadastro salvo com sucesso');
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
        $data = $request->only('st_produto');

        //Salvando Dados
        $db = ProductModel::find($id);
        $db->update($data);
        $db->save();

        //Logs
        Logger::status($id,$data['st_produto']);

        return redirect(route('products.index'))->with('success','Status alterado com sucesso.');
    }
}
