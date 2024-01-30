<!-- Inicio de Componentização Page Create -->
<x-pages.forms method="create" route="{{route('products.store')}}" btnBack="{{route('products.index')}}">
    @slot('body')
        @include('admin.product.product.partials.product_form')
    @endslot
</x-pages.forms>