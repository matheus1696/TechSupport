<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Suprimentos" route="{{ route('consumables.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.consumable.consumables.partials.consumables_table')
    @endslot
</x-pages.index>
