<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Apresentação do Produto" routeBack="{{route('product_units.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="edit" route="{{route('product_units.update',['product_unit'=>$db->id])}}">
                @include('admin.product.product_unit.partials.product_unit_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>