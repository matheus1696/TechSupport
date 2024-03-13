<?php

namespace App\Http\Controllers\Admin\Company;

use App\Http\Controllers\Controller;
use App\Models\Company\CompanyOrganizationLinkedUsers;
use App\Http\Requests\StoreCompanyOrganizationLinkedUsersRequest;
use App\Http\Requests\UpdateCompanyOrganizationLinkedUsersRequest;
use App\Models\Company\CompanyOrganizational;
use Illuminate\Http\Request;

class CompanyOrganizationLinkedUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreCompanyOrganizationLinkedUsersRequest $request)
    {
        $data = $request->all();
        $dbUserValided = CompanyOrganizationLinkedUsers::where('user_id',$data['user_id'])->first();

        if ($dbUserValided) {
            return redirect()->back()->with('error','Usuário '.$dbUserValided->Users->name. ' Cadastrado em '. $dbUserValided->CompanyOrganizational->title);

        } else {
            
            CompanyOrganizationLinkedUsers::create($data);

            $dbCountLinkedUsers = CompanyOrganizationLinkedUsers::where('organizational_id', $data['organizational_id'])->count();
    
            $db = CompanyOrganizational::find($data['organizational_id']);
            $db->linked_users = $dbCountLinkedUsers;
            $db->save();
    
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyOrganizationLinkedUsers $companyOrganizationLinkedUsers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyOrganizationLinkedUsers $companyOrganizationLinkedUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyOrganizationLinkedUsersRequest $request, CompanyOrganizationLinkedUsers $companyOrganizationLinkedUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $db = CompanyOrganizationLinkedUsers::find($id);
        $db->delete();

        $dbCountLinkedUsers = CompanyOrganizationLinkedUsers::where('organizational_id', $db->organizational_id)->count();

        $dbOrganizational = CompanyOrganizational::find($db->organizational_id);
        $dbOrganizational->linked_users = $dbCountLinkedUsers;
        $dbOrganizational->save();     

        return redirect()->back()->with('success','Usuário removido');
    }
}
