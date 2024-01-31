<!-- Inicio de Componentização Page Forms -->
<x-pages.forms method="edit" route="{{route('biddingItens.update',['biddingItem'=>$db->id])}}"
    btnBack="{{route('biddings.show',['bidding'=>$dbBidding->id])}}">

    @slot('body')
        @include('bidding.bidding_itens.partials.bidding_itens_form')
    @endslot

</x-pages.edit>
