<div class="grid grid-cols-1 gap-3 mb-3 text-sm">
    <p><strong>Estabelecimento: </strong>{{$db->title}}</p>    
    <p><strong>Nome Fantasia: </strong>{{$db->title}}</p>
    <p><strong>Endereço: </strong>{{$db->address}}, {{$db->number}}, {{$db->district}}, {{$db->RegionCity->city}} - {{$db->RegionCity->RegionState->acronym}}</p>
</div>