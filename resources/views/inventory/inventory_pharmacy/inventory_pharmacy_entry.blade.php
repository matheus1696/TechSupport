<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header 
            title="Estoque de Medicamentos: {{ $db->department }} - {{ $db->CompanyEstablishment->title }}"
            routeBack="{{route('inventory_pharmacies.show',['inventory_pharmacy'=>$db->id])}}"
        />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <div>
                @include('inventory.inventory_pharmacy.partials.entry.inventory_pharmacy_entry_form')
            </div>
        </x-conteiner>
    @endslot
</x-pages.index>