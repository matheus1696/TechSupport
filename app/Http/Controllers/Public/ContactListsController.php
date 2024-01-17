<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\CompanyEstablishmentsModel;
use App\Models\CompanyEstablishmentContactsModel;

class ContactListsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Header
        $header =[
            'title' => 'Lista Telefônica',
        ];

        $dbEstablishments = CompanyEstablishmentsModel::where('st_unidade',true)
            ->orderBy('no_unidade')->paginate(20);
        $dbLists = CompanyEstablishmentContactsModel::all();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $dbEstablishments = CompanyEstablishmentsModel::where('st_unidade',true)
                ->where('ft_unidade','LIKE','%'.strtolower($search['searchName']).'%')
                ->orderBy('no_unidade')
                ->paginate(20);
        }

        return view('public.contact',[
            'header'=>$header,
            'search'=>$search,
            'dbEstablishments'=>$dbEstablishments,
            'dbLists'=>$dbLists
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * API Display a listing of the resource.
     */
    public function getAllContact() {
        $contact = CompanyEstablishmentContactsModel::select()
        ->join('company_establishments', 'company_establishments.id', '=', 'company_establishments_contact.estabelecimento_id')
        ->get()->toJson(JSON_PRETTY_PRINT);
        return response($contact, 200);
    }
}
