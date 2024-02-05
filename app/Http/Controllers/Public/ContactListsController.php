<?php

namespace App\Http\Controllers\Public;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Company\CompanyEstablishmentsModel;
use App\Models\Company\CompanyEstablishmentDepartmentsModel;

class ContactListsController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {            
        $db = CompanyEstablishmentsModel::where('status',true)
            ->orderBy('title')
            ->get();

        $dbContact = CompanyEstablishmentDepartmentsModel::where('contact','<>',NULL)->get();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = CompanyEstablishmentsModel::where('status',true)
                ->where('filter','LIKE','%'.strtolower($search['searchName']).'%')
                ->get();
        }

        return view('public.contacts.contacts_index',[
            'search'=>$search,
            'db'=>$db,            
            'dbContact'=>$dbContact,
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
    public function show(Request $request, string $id)
    {
        $db = CompanyEstablishmentDepartmentsModel::where('contact','<>',NULL)
        ->where('establishment_id', $id)
        ->with('CompanyEstablishments')
        ->orderBy('contact')
        ->get();

        //Pesquisar Dados
        $search = $request->all();
        if (isset($search['searchName'])) {
            $db = CompanyEstablishmentDepartmentsModel::where('contact','<>',NULL)
                ->where('establishment_id', $id)
                ->where('department','LIKE','%'.strtolower($search['searchName']).'%')
                ->with('CompanyEstablishments')
                ->orderBy('contact')
                ->get();
        }

        return view('public.contacts.contacts_show',[
            'search'=>$search,
            'db'=>$db,
        ]);
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
        $contact = CompanyEstablishmentDepartmentsModel::select()
        ->join('company_establishments', 'company_establishments.id', '=', 'company_establishments_contact.estabelecimento_id')
        ->get()->toJson(JSON_PRETTY_PRINT);
        return response($contact, 200);
    }
}
