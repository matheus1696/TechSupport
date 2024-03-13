<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserPermissionsSeeder::class,
            UserSexSeeder::class,
            UserSeeder::class,
            RegionCountriesSeeder::class,
            RegionStatesSeeder::class,
            RegionCitiesSeeder::class,
            CompanyOrganizationsSeeder::class,
            CompanyOccupationsSeeder::class,
            CompanyTypeEstablishmentsSeeder::class,
            CompanyFinancialBlocksSeeder::class,
            CompanyEstablishmentsSeeder::class,
            CompanyEstablishmentDepartmentsSeeder::class,
            ProductUnitsSeeder::class,
            DashboardSeeder::class,
            TicketStatusSeeder::class,
            TicketTypeCategorySeeder::class,
            TicketTypeServiceSeeder::class,
            TicketTypeSubServiceSeeder::class,
            SupplyProcessStatusSeeder::class,
        ]);
    }
}
