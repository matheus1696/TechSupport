<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação dos Produtos" routeBack="{{route('product_classifications.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="edit" route="{{route('product_classifications.update',['product_classification'=>$db->id])}}">
                @include('admin.product.product_classification.partials.product_classification_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>
