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
        $db = ProductModel::paginate(20);

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchProductCod']) || isset($search['searchProdutcName'])) {
            $db = ProductModel::where('code','LIKE','%'.strtolower($search['searchProductCod']).'%')
                ->where('filter','LIKE','%'.strtolower($search['searchProdutcName']).'%')
                ->orderBy('product')
                ->paginate(20);
        }

        //Logs
        Logger::access();

        return view('admin.product.product.product_index',[
            'search'=>$search,
            'db'=>$db,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Logs
        Logger::create();

        return view('admin.product.product.product_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProdutsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['product']);

        //Salvando Dados
        ProductModel::create($data);

        //Logs
        Logger::store($data['product']);

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
        //Listagem de Dados
        $db = ProductModel::find($id);

        //Logs
        Logger::edit();

        return view('admin.product.product.product_edit',[
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
        $data['ft_produto'] = StrtoLower($data['product']);

        //Salvando Dados
        $db = ProductModel::find($id);
        $db->update($data);

        //Logs
        Logger::update();

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
        $data = $request->only('status');

        //Salvando Dados
        $db = ProductModel::find($id);
        $db->update($data);

        //Logs
        Logger::status();

        return redirect(route('products.index'))->with('success','Status alterado com sucesso.');
    }
}
