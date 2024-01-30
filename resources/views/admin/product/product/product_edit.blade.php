<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('products.update',['product'=>$db->id])}}" btnBack="{{route('products.index')}}">
    @slot('body')
        @include('admin.product.product.partials.product_form')
    @endslot
</x-pages.edit>