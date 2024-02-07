<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('financial_blocks.update',['financial_block'=>$db->id])}}" btnBack="{{route('financial_blocks.index')}}">

    <!-- Slot Header -->
    @slot('header')
        <x-header title="Cadastrar Bloco Financeiro" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        @include('admin.company.financial_blocks.partials.financial_blocks_form')        
    @endslot

</x-pages.forms>
