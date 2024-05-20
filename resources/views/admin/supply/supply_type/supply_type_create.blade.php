<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipo dos Suprimentos" routeBack="{{route('supply_types.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="create" route="{{route('supply_types.store')}}">
                @include('admin.supply.supply_type.partials.supply_type_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>
