<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Histório de Estoque: {{$db->items()[0]->CompanyEstablishment->title ?? ''}}" route="{{route('inventories.show',['inventory'=>$db->items()[0]->establishment_id])}}" btnTitle="Retornar"/>
    @endslot
    
    <!-- Slot Body -->
    @slot('body')
        @include('inventory.inventory_history.partials.inventory_history_search')
        @include('inventory.inventory_history.partials.inventory_history_table')
    @endslot
    
</x-pages.index>