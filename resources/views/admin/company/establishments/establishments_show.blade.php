<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Lista de Estabelecimento: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            @include('admin.company.establishments.partials.show.establishment_show_description')
            <hr>            
            @include('admin.company.establishments.partials.show.establishment_show_buttons')
        </x-conteiner>

        <x-conteiner>
            <div>
                @include('admin.company.establishments.partials.show.establishment_show_department_form')
            </div>
        </x-conteiner>
        <hr>
        <div>
            @include('admin.company.establishments.partials.show.establishment_show_department_table')
        </div>

    @endslot
</x-pages.index>