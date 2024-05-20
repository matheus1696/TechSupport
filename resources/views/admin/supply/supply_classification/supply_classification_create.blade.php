<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação de Suprimentos" routeBack="{{route('supply_classifications.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="create" route="{{route('supply_classifications.store')}}">
                @include('admin.supply.supply_classification.partials.supply_classification_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>