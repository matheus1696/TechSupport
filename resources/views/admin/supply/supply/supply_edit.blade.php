<x-pages.index>

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Produtos" routeBack="{{route('products.index')}}"/>
    @endslot        

    <!-- Slot Body -->
    @slot('body')
        <x-conteiner>
            <x-form.form method="edit" route="{{route('products.update',['product'=>$db->id])}}">
                @include('admin.product.product.partials.product_form')
            </x-form.form>
        </x-conteiner>
    @endslot
    
</x-pages.index>
