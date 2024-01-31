<!-- Inicio de Componentização Page Forms -->
<x-pages.forms method="create" route="{{route('biddingItens.store')}}" btnBack="{{route('biddings.show',['bidding'=>$dbBidding->id])}}">

    @slot('body')
        @include('bidding.bidding_itens.partials.bidding_itens_form')
    @endslot

</x-pages.create>
