<div class="grid grid-cols-1 gap-3 mb-3 text-sm">
    <p><strong>CNES: </strong>{{$db->code}}</p>
    <p><strong>Estabelecimento: </strong>{{$db->title}}</p>    
    <p><strong>Nome Fantasia: </strong>{{$db->title}}</p>
    <p><strong>Endereço: </strong>{{$db->address}}, {{$db->number}}, {{$db->district}}, {{$db->RegionCity->city}} - {{$db->RegionCity->RegionState->acronym}}</p>
    <p><strong>Tipo de Estabelecimento: </strong>{{$db->TypeEstablishment->title}}</p>
    <p><strong>Nivel de Atenção: </strong>{{$db->FinancialBlock->title}}</p>
    <p>
        @if ($db->has_inventory) 
            <span class="px-2 py-1 text-xs font-semibold text-white bg-green-700 rounded-lg shadow-md">
                <strong>Estoque Ativado: </strong>Ativado
            </span>
        @else
            <span class="px-2 py-1 text-xs font-semibold text-white bg-red-700 rounded-lg shadow-md">
                <strong>Estoque Ativado: </strong>Desativado
            </span>
        @endif
    </p>
</div>