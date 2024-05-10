<x-pages.index>
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Estoque: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>            
            @include('inventory.inventory.partials.show.inventory_show_buttons')
        </x-conteiner>

        <x-conteiner>
            <div>
                @include('inventory.inventory.partials.show.inventory_show_department_form')
            </div>
        </x-conteiner>
        <hr>
        <div>
            @include('inventory.inventory.partials.show.inventory_show_department_table')
        </div>

    @endslot
</x-pages.index>