<?php

namespace App\Http\Controllers\Admin\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CompanyEstablishmentsStoreRequest;
use App\Http\Requests\CompanyEstablishmentsUpdateRequest;
use App\Models\Company\CompanyAttentionLevelsModel;
use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Company\CompanyEstablishmentContactsModel;
use App\Models\Company\CompanyTypeEstablishmentsModel;
use App\Models\Region\RegionCitiesModel;
use App\Services\Logger;

class CompanyEstablishmentsController extends Controller
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
        $db = CompanyEstablishmentsModel::select()
            ->orderBy('status','DESC')
            ->orderBy('establishment')
            ->with('AttentionLevels')
            ->with('TypeEstablishments')
            ->with('RegionCities')            
            ->with('RegionCities')
            ->paginate(20);

        $dbLists= CompanyEstablishmentContactsModel::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName']) || isset($search['searchCod'])) {
            $db = CompanyEstablishmentsModel::where('code','LIKE','%'.strtolower($search['searchCod']).'%')
                ->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('establishment')
                ->paginate(20);
        }

        //Log do Sistema
        Logger::access();

        return view('admin.company.establishments.establishments_index',[
            'search'=>$search,
            'db'=>$db,
            'dbLists'=>$dbLists,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Header
        $header = [
            'title'=>'Cadastrar de Estabelecimento',
        ];

        //Listagem de Dados
        $dbRegionCities = RegionCitiesModel::where('status',true)->orderBy('city')->get();
        $dbCompanyTypeEstablishments = CompanyTypeEstablishmentsModel::where('status',true)->orderBy('type_establishment')->get();
        $dbCompanyAttentionLevels = CompanyAttentionLevelsModel::where('status',true)->orderBy('attention_level')->get();


        //Log do Sistema
        Logger::create($header['title']);

        return view('admin.company.establishments.establishments_create',[
            'header'=>$header,
            'dbRegionCities'=>$dbRegionCities,
            'dbCompanyTypeEstablishments'=>$dbCompanyTypeEstablishments,
            'dbCompanyAttentionLevels'=>$dbCompanyAttentionLevels,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CompanyEstablishmentsStoreRequest $request)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        //Salvando Dados
        CompanyEstablishmentsModel::create($data);

        //Log do Sistema
        Logger::store($data['title']);

        return redirect(route('establishments.index'))->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
            'title'=>'Alterar Cadastro do Estabelecimento',
        ];

        //Listagem de Dados
        $db = CompanyEstablishmentsModel::find($id);
        $dbRegionCities = RegionCitiesModel::where('status',true)->orderBy('city')->get();
        $dbCompanyTypeEstablishments = CompanyTypeEstablishmentsModel::where('status',true)->orderBy('type_establishment')->get();
        $dbCompanyAttentionLevels = CompanyAttentionLevelsModel::where('status',true)->orderBy('attention_level')->get();

        //Log do Sistema
        Logger::edit($db->no_unidade);

        return view('admin.company.establishments.establishments_edit',[
            'header'=>$header,
            'db'=>$db,
            'dbRegionCities'=>$dbRegionCities,
            'dbCompanyTypeEstablishments'=>$dbCompanyTypeEstablishments,
            'dbCompanyAttentionLevels'=>$dbCompanyAttentionLevels,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyEstablishmentsUpdateRequest $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->all();
        $data['filter'] = StrtoLower($data['title']);

        //Salvando Dados
        $db = CompanyEstablishmentsModel::find($id);
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::update($db->no_unidade);

        return redirect(route('establishments.index'))->with('success','Cadastro salvo com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    /**
     * Update the status of the specified item in storage.
     */
    public function status(Request $request, string $id)
    {
        //Dados dos Formulários
        $data = $request->only('st_unidade');

        //Salvando Dados
        $db = CompanyEstablishmentsModel::find($id);
        $db->update($data);
        $db->save();

        //Log do Sistema
        Logger::status($db->no_unidade,$data['st_unidade']);

        return redirect(route('establishments.index'))->with('success','Status alterado com sucesso.');
    }
}
