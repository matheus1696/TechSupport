<!-- Inicio de Componentização Page Forms -->
<x-pages.forms method="create" route="{{route('supply_process_items.store')}}" btnBack="{{route('supply_processes.show',['supply_process'=>$dbSupplyProcesses->id])}}">

    @slot('body')
        @include('supply_process.supply_process_item.partials.supply_process_item_form')
    @endslot

</x-pages.create>
