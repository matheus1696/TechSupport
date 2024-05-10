<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Suprimentos" route="{{ route('consumable_types.create') }}"/>
    @endslot
        
    <!-- Slot Body -->
    @slot('body')
        @include('admin.consumable.consumable_types.partials.consumable_types_table')
    @endslot
</x-pages.index>
