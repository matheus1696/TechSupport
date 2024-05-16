<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product\ProductClassification;
use App\Http\Requests\Product\StoreProductClassificationRequest;
use App\Http\Requests\Product\UpdateProductClassificationRequest;
use App\Services\Logger;
use Illuminate\Http\Request;

class ProductClassificationController extends Controller
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
        $db = ProductClassification::select()->orderBy('status','DESC')->orderBy('title')->paginate(20);

        //Log do Sistema
        Logger::access();

        return view('admin.product.product_classification.product_classification_index',compact('db'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Log do Sistema
        Logger::create();

        return view('admin.product.product_classification.product_classification_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductClassificationRequest $request)
    {
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);        

        ProductClassification::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('product_classifications.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductClassification $ProductClassification)
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
        $db = ProductClassification::find($id);

        //Log do Sistema
        Logger::edit($db->title);

        return view('admin.product.product_classification.product_classification_edit',compact('db'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductClassificationRequest $request, string $id)
    {
        //Dados do Formulário
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        //Listagem de Dados
        $db = ProductClassification::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::update($db->title);

        return redirect(route('product_classifications.index'))
            ->with('success','Alteração realizada com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductClassification $ProductClassification)
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
        $db = ProductClassification::find($id);
        $db->update($data);

        //Log do Sistema
        Logger::status($db->id, $db->status);

        return redirect(route('product_classifications.index'))->with('success','Status alterado com sucesso.');
    }
}
