<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\Product;
use App\Http\Requests\Product\StoreProductRequest;
use App\Http\Requests\Product\UpdateProductRequest;
use App\Models\Product\ProductClassification;
use App\Models\Product\ProductType;
use App\Models\Product\ProductUnit;
use App\Services\Logger;
use Illuminate\Http\Request;

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
    public function index()
    {
        //Listagem de Dados
        $db = Product::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.product.product.product_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $dbProductUnits = ProductUnit::all();
        $dbProductTypes = ProductType::all();
        $dbProductClassifications = ProductClassification::all();

        //Log do Sistema
        Logger::create();

        return view('admin.product.product.product_create', compact('dbProductUnits','dbProductTypes', 'dbProductClassifications'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        Product::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $Product)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Listagem de Dados
        $db = Product::find($id);        
        $dbProductUnits = ProductUnit::all();
        $dbProductTypes = ProductType::all();
        $dbProductClassifications = ProductClassification::all();

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.product.product.product_edit',compact('db','dbProductUnits','dbProductTypes','dbProductClassifications'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        //Listagem de Dados
        $db = Product::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('products.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $Product)
    {
        //
        return redirect()->route('login');
    }

    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('status');

        //Salvando Dados
        $db = Product::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('products.index'))->with('success','Status alterado com sucesso.');
    }
}
