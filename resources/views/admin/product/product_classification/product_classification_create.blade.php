<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação dos Produtos" routeBack="{{route('product_classifications.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="create" route="{{route('product_classifications.store')}}">
                @include('admin.product.product_classification.partials.product_classification_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>