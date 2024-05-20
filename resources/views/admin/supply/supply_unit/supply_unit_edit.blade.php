<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Apresentação dos Suprimentos" routeBack="{{route('supply_units.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="edit" route="{{route('supply_units.update',['supply_unit'=>$db->id])}}">
                @include('admin.supply.supply_unit.partials.supply_unit_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>