<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('product_classifications.update',['product_classification'=>$db->id])}}" btnBack="{{route('product_classifications.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Classificação do Produto: {{ $db->title }}"/>
    @endslot

    <!-- Slot Body -->
    @slot('body')        
        @include('admin.product.product_classification.partials.product_classification_form')
    @endslot
</x-pages.forms>
