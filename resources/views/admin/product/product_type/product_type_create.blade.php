<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Tipos de Produto" routeBack="{{route('product_types.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="create" route="{{route('product_types.store')}}">
                @include('admin.product.product_type.partials.product_type_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>
