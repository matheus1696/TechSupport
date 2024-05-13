<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Histório de Estoque Medicamentos: {{$dbEstablishmentDepartment->CompanyEstablishment->title ?? ''}}" route="{{route('inventory_medications.show',['inventory_medication'=>$dbEstablishmentDepartment->id])}}" btnTitle="Retornar"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_medication_history.partials.inventory_medication_history_search')
        @include('inventory.inventory_medication_history.partials.inventory_medication_history_table')
        <div>
            <p class="text-end">Verificar Histórico</p>
        </div>
    @endslot
    
</x-pages.index>