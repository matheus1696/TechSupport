<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Suprimentos" routeBack="{{route('supplies.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="create" route="{{route('supplies.store')}}">
                @include('admin.supply.supply.partials.supply_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>
