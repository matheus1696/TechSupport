<x-pages.index>    

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Níveis de Atenção" route="{{ route('attentions.create') }}"/>
    @endslot
    
    @slot('body')
    <x-conteiner>
        
        @include('admin.company.attentions.partials.attentions_table')

    </x-conteiner>
    @endslot
</x-pages.index>
