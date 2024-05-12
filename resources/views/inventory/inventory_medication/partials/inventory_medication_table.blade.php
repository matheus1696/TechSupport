<!-- Components Table -->
<x-table.table :db="$db">
    <!-- Components THead -->
    @slot('thead')
        <x-table.th>Departamento</x-table.th>
        <x-table.th>Estabelecimento</x-table.th>
        <x-table.th>Bairro</x-table.th>
        <x-table.th class="w-40"></x-table.th>
    @endslot

    <!-- Components TBody -->
    @slot('tbody')
        @foreach ($db as $item)
            <x-table.tr>
                <x-table.td>{{$item->department}}</x-table.td>
                <x-table.td>{{$item->CompanyEstablishment->title}}</x-table.td>
                <x-table.td>{{$item->CompanyEstablishment->district}}</x-table.td>
                <x-table.td>
                    <x-button.minButtonShow route="{{route('inventory_medications.show',['inventory_medication'=>$item->id])}}" />
                </x-table.td>
            </x-table.tr>
        @endforeach
    @endslot
</x-table.table>