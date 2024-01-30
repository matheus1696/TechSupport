<x-pages.index>
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipo de Estabelecimento" route="{{ 'type_establishments.create' }}"/>
    @endslot
    
    
    <!-- Slot Body -->
    @slot('body')
    <x-conteiner>
         @include('admin.company.type_establishments.partials.type_establishments_table')
    </x-conteiner>
    @endslot
</x-pages.index>
