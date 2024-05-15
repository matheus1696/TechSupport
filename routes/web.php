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
use App\Http\Controllers\Admin\Product\ProductClassificationController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\Admin\Product\ProductTypeController;
use App\Http\Controllers\Admin\Product\ProductUnitController;
use App\Http\Controllers\Admin\Region\RegionCityController;
use App\Http\Controllers\Admin\Region\RegionCountryController;
use App\Http\Controllers\Admin\Region\RegionStateController;
use App\Http\Controllers\Inventory\InventoryMedicationController;
use App\Http\Controllers\Inventory\InventoryProductController;
use App\Http\Controllers\Inventory\InventoryMedicationHistoryController;
use App\Http\Controllers\Inventory\InventoryProductHistoryController;
use App\Http\Controllers\Inventory\InventoryWarehouseController;
use App\Http\Controllers\Inventory\InventoryWarehouseEntriesController;
use App\Http\Controllers\Inventory\InventoryWarehouseHistoryController;
use App\Http\Controllers\Public\ContactListsController;
use App\Http\Controllers\Users\Admin\UsersController;
use App\Http\Controllers\Users\ProfileController;

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
            Route::prefix('products')->group(function (){

                //Rota - Apresentação de Medicamentos
                    Route::put('product_classifications/status/{product_classification}',[ProductClassificationController::class,'status'])->name('product_classifications.status');
                    Route::resource('product_classifications',ProductClassificationController::class);
                //Rota - Apresentação de Medicamentos                
                    Route::put('product_units/status/{product_unit}',[ProductUnitController::class,'status'])->name('product_units.status');
                    Route::resource('product_units',ProductUnitController::class);    
                //Rota - Tipos de Medicamentos                    
                    Route::put('product_types/status/{product_type}',[ProductTypeController::class,'status'])->name('product_types.status');
                    Route::resource('product_types',ProductTypeController::class);
                //Rota - Medicamentos
                    Route::put('products/status/{product}',[ProductController::class,'status'])->name('products.status');
                    Route::resource('products',ProductController::class);
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
            Route::resource('inventory_products', InventoryProductController::class);
            Route::resource('inventory_product_histories', InventoryProductHistoryController::class);
            
            //Rotas de Inventário/Estoque de Medicamentos
            Route::resource('inventory_medications', InventoryMedicationController::class);
            Route::resource('inventory_medication_histories', InventoryMedicationHistoryController::class);
            
            //Rotas de Inventário/Estoque de Centro de Distribuições
            Route::resource('inventory_warehouses', InventoryWarehouseController::class);
            Route::resource('inventory_warehouse_histories', InventoryWarehouseHistoryController::class);
            Route::resource('inventory_warehouse_entries', InventoryWarehouseEntriesController::class);
        });    

    });

    //Rotas de Perfil do Usuário
    Route::resource('profile', ProfileController::class);
});

Route::get('/',function(){return view('index');});

//Lista Telefônica
Route::resource('contacts', ContactListsController::class);

//Rotas de Autenticação
Auth::routes(['verify' => true]);


