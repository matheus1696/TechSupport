<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Company\CompanyFinancialBlockController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentController;
use App\Http\Controllers\Admin\Company\CompanyEstablishmentDepartmentController;
use App\Http\Controllers\Admin\Company\CompanyOccupationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationController;
use App\Http\Controllers\Admin\Company\CompanyOrganizationLinkedUserController;
use App\Http\Controllers\Admin\Company\CompanyTypeEstablishmentController;
use App\Http\Controllers\Admin\Medication\MedicationClassificationController;
use App\Http\Controllers\Admin\Medication\MedicationController;
use App\Http\Controllers\Admin\Medication\MedicationTypeController;
use App\Http\Controllers\Admin\Medication\MedicationUnitController;
use App\Http\Controllers\Admin\Consumable\ConsumableClassificationController;
use App\Http\Controllers\Admin\Consumable\ConsumableController;
use App\Http\Controllers\Admin\Consumable\ConsumableTypeController;
use App\Http\Controllers\Admin\Consumable\ConsumableUnitController;
use App\Http\Controllers\Admin\Region\RegionCityController;
use App\Http\Controllers\Admin\Region\RegionCountryController;
use App\Http\Controllers\Admin\Region\RegionStateController;
use App\Http\Controllers\Admin\User\UsersController;
use App\Http\Controllers\Inventory\Warehouse\InventoryWarehouseController;
use App\Http\Controllers\Inventory\Warehouse\InventoryWarehousePermissionController;
use App\Http\Controllers\Inventory\WarehouseCenter\InventoryWarehouseCenterController;
use App\Http\Controllers\Inventory\WarehouseCenter\InventoryWarehouseCenterPermissionController;
use App\Http\Controllers\Inventory\Pharmacy\InventoryPharmacyController;
use App\Http\Controllers\Inventory\Pharmacy\InventoryPharmacyPermissionController;
use App\Http\Controllers\Inventory\PharmacyCenter\InventoryPharmacyCenterController;
use App\Http\Controllers\Inventory\PharmacyCenter\InventoryPharmacyCenterPermissionController;
use App\Http\Controllers\Profile\ProfileController;
use App\Http\Controllers\Public\ContactListsController;

//Camada de Seguraça para Usuários Logados
Route::middleware('auth')->group(function () {

    //Camada de Seguraça para Contas Verificadas
    Route::middleware(['verified'])->group(function () {        

        //Rota - Primeira Página
        Route::get('home', [HomeController::class, 'index'])->name('home');

        //Grupo de Rodas - Configurações do Sistema
        Route::prefix('admin')->group(function (){

            //Grupo de Rotas - Configuração dos Perfis dos Usuários
            Route::prefix('user')->group(function (){
                //Rota - Dados dos Usuários Cadastrados
                    Route::put('users/permission/{user}',[UsersController::class,'permission'])->name('users.permission');
                    Route::get('users/verify/{user}',[UsersController::class,'verify'])->name('users.verify');
                    Route::resource('users',UsersController::class);

            });

            //Grupo de Rotas - Configurações da Organização
            Route::prefix('company')->group(function (){

                //Rota - Dados do Organograma
                    Route::get('organizations/organize',[CompanyOrganizationController::class,'organize'])->name('organizations.organize');
                    Route::put('organizations/status/{organization}',[CompanyOrganizationController::class,'status'])->name('organizations.status');
                    Route::resource('organizations',CompanyOrganizationController::class);
                    
                    //Rota de Vinculação de Usuário com Organização
                    Route::resource('organization_linked_users',CompanyOrganizationLinkedUserController::class);
                    
                //Rota - Dados Ocupação (CBO)
                    Route::resource('occupations',CompanyOccupationController::class);
                //Rota - Dados Tipo de Estabelecimento
                    Route::resource('type_establishments',CompanyTypeEstablishmentController::class);
                //Rota - Dados Estabelecimento de Saúde 
                    Route::put('establishments/status/{establishment}',[CompanyEstablishmentController::class,'status'])->name('establishments.status');
                    Route::resource('establishments',CompanyEstablishmentController::class);
                //Rota - Dados dos Departamentos do Estabelecimento de Saúde
                    Route::put('establishment_departments/inventory/{establishment_department}',[CompanyEstablishmentDepartmentController::class,'hasInventory'])->name('establishment_departments.hasInventory');
                    Route::resource('establishment_departments',CompanyEstablishmentDepartmentController::class);
                //Rota - Nível de Atenção
                    Route::resource('financial_blocks',CompanyFinancialBlockController::class);

            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('region')->group(function (){

                //Rota - Dados Paises
                    Route::put('countries/status/{country}',[RegionCountryController::class,'status'])->name('countries.status');
                    Route::resource('countries',RegionCountryController::class);
                //Rota - Dados Estados
                    Route::put('states/status/{state}',[RegionStateController::class,'status'])->name('states.status');
                    Route::resource('states',RegionStateController::class);
                //Rota - Dados Cidades
                    Route::put('cities/status/{city}',[RegionCityController::class,'status'])->name('cities.status');
                    Route::resource('cities',RegionCityController::class);

            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('consumable')->group(function (){

                //Rota - Apresentação de Medicamentos
                    Route::put('consumable_classifications/status/{consumable_classification}',[ConsumableClassificationController::class,'status'])->name('consumable_classifications.status');
                    Route::resource('consumable_classifications',ConsumableClassificationController::class);
                //Rota - Apresentação de Medicamentos                
                    Route::put('consumable_units/status/{consumable_unit}',[ConsumableUnitController::class,'status'])->name('consumable_units.status');
                    Route::resource('consumable_units',ConsumableUnitController::class);    
                //Rota - Tipos de Medicamentos                    
                    Route::put('consumable_types/status/{consumable_type}',[ConsumableTypeController::class,'status'])->name('consumable_types.status');
                    Route::resource('consumable_types',ConsumableTypeController::class);
                //Rota - Medicamentos
                    Route::put('consumables/status/{consumable}',[ConsumableController::class,'status'])->name('consumables.status');
                    Route::resource('consumables',ConsumableController::class);
            });

            //Grupo de Rotas - Configuração de Localização
            Route::prefix('medication')->group(function (){

                //Rota - Apresentação de Produtos
                    Route::put('medication_classifications/status/{medication_classification}',[MedicationClassificationController::class,'status'])->name('medication_classifications.status');
                    Route::resource('medication_classifications',MedicationClassificationController::class);                    
                //Rota - Apresentação de Produtos
                    Route::put('medication_units/status/{medication_unit}',[MedicationUnitController::class,'status'])->name('medication_units.status');
                    Route::resource('medication_units',MedicationUnitController::class);
                //Rota - Tipos de Produtos
                    Route::put('medication_types/status/{medication_type}',[MedicationTypeController::class,'status'])->name('medication_types.status');
                    Route::resource('medication_types',MedicationTypeController::class);
                //Rota - Produtos
                    Route::put('medications/status/{medication}',[MedicationController::class,'status'])->name('medications.status');
                    Route::resource('medications',MedicationController::class);
            });
        });

        //Grupo de Rodas - Configurações do Sistema
        Route::prefix('inventory')->group(function (){

            //Rotas de Inventário/Estoque de Produtos        
            Route::post('inventory_pharmacies/exit',[InventoryPharmacyController::class,'exitStore'])->name('inventory_pharmacies.exitStore');           
            Route::post('inventory_pharmacies/entry',[InventoryPharmacyController::class,'entryStore'])->name('inventory_pharmacies.entryStore');
            Route::get('inventory_pharmacies/entry/{inventory_pharmacy}',[InventoryPharmacyController::class,'entryCreate'])->name('inventory_pharmacies.entryCreate');
            Route::get('inventory_pharmacies/history/{inventory_pharmacy}',[InventoryPharmacyController::class,'history'])->name('inventory_pharmacies.history');
            Route::get('inventory_pharmacies/request/{inventory_pharmacy}',[InventoryPharmacyController::class,'request'])->name('inventory_pharmacies.request');
            Route::resource('inventory_pharmacies', InventoryPharmacyController::class);
            Route::resource('pharmacy_permissions', InventoryPharmacyPermissionController::class);
            
            //Rotas de Inventário/Estoque de Centro de Distribuições            
            Route::get('inventory_pharmacy_centers/entry/{inventory_pharmacy_center}',[InventoryPharmacyCenterController::class,'entryShow'])->name('inventory_pharmacy_centers.entryShow');
            Route::post('inventory_pharmacy_centers/entry',[InventoryPharmacyCenterController::class,'entryStore'])->name('inventory_pharmacy_centers.entryStore');
            Route::get('inventory_pharmacy_centers/entry/{inventory_pharmacy_center}',[InventoryPharmacyCenterController::class,'entryCreate'])->name('inventory_pharmacy_centers.entryCreate');
            Route::post('inventory_pharmacy_centers/exit',[InventoryPharmacyCenterController::class,'exitStore'])->name('inventory_pharmacy_centers.exitStore');
            Route::get('inventory_pharmacy_centers/history/{inventory_pharmacy_center}',[InventoryPharmacyCenterController::class,'history'])->name('inventory_pharmacy_centers.history');
            Route::resource('inventory_pharmacy_centers', InventoryPharmacyCenterController::class);
            Route::resource('pharmacy_center_permissions', InventoryPharmacyCenterPermissionController::class);
    
            //Rotas de Inventário/Estoque de Produtos        
            Route::post('inventory_warehouses/exit',[InventoryWarehouseController::class,'exitStore'])->name('inventory_warehouses.exitStore');           
            Route::post('inventory_warehouses/entry',[InventoryWarehouseController::class,'entryStore'])->name('inventory_warehouses.entryStore');
            Route::get('inventory_warehouses/entry/{inventory_warehouse}',[InventoryWarehouseController::class,'entryCreate'])->name('inventory_warehouses.entryCreate');
            Route::get('inventory_warehouses/history/{inventory_warehouse}',[InventoryWarehouseController::class,'history'])->name('inventory_warehouses.history');
            Route::get('inventory_warehouses/request/{inventory_warehouse}',[InventoryWarehouseController::class,'request'])->name('inventory_warehouses.request');
            Route::resource('inventory_warehouses', InventoryWarehouseController::class);
            Route::resource('warehouse_permissions', InventoryWarehousePermissionController::class);
            
            //Rotas de Inventário/Estoque de Centro de Distribuições            
            Route::get('inventory_warehouse_centers/entry/{inventory_warehouse_center}',[InventoryWarehouseCenterController::class,'entryShow'])->name('inventory_warehouse_centers.entryShow');
            Route::post('inventory_warehouse_centers/entry',[InventoryWarehouseCenterController::class,'entryStore'])->name('inventory_warehouse_centers.entryStore');
            Route::get('inventory_warehouse_centers/entry/{inventory_warehouse_center}',[InventoryWarehouseCenterController::class,'entryCreate'])->name('inventory_warehouse_centers.entryCreate');
            Route::post('inventory_warehouse_centers/exit',[InventoryWarehouseCenterController::class,'exitStore'])->name('inventory_warehouse_centers.exitStore');
            Route::get('inventory_warehouse_centers/history/{inventory_warehouse_center}',[InventoryWarehouseCenterController::class,'history'])->name('inventory_warehouse_centers.history');
            Route::resource('inventory_warehouse_centers', InventoryWarehouseCenterController::class);
            Route::resource('warehouse_center_permissions', InventoryWarehouseCenterPermissionController::class);
        }); 

    });

    //Rotas de Perfil do Usuário
    Route::put('profiles/password/{profile}',[ProfileController::class,'updatePassword'])->name('profiles.updatePassword');
    Route::resource('profiles', ProfileController::class);
});

Route::get('/',function(){return view('index');});

//Lista Telefônica
Route::resource('contacts', ContactListsController::class);

//Rotas de Autenticação
Auth::routes(['verify' => true]);


