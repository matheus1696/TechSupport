<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
    <x-header 
        title="Centro de Distribuição: {{$dbEstablishmentDepartment->CompanyEstablishmentDepartment->department}} - {{$dbEstablishmentDepartment->CompanyEstablishment->title}}" 
        route="{{route('inventory_warehouses.show',['inventory_warehouse'=>$dbEstablishmentDepartment->establishment_department_id])}}" 
        btnTitle="Retornar"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_warehouse_entry.partials.inventory_warehouse_entry_form')
        @include('inventory.inventory_warehouse_entry.partials.inventory_warehouse_entry_search')
        @include('inventory.inventory_warehouse_entry.partials.inventory_warehouse_entry_table')
    @endslot
    
</x-pages.index>