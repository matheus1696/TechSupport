<div class="text-sm row px-lg-2 py-lg-2">
    <p class="col-lg-2"><strong>CNES: </strong>{{$db->code}}</p>
    <p class="col-lg-10"><strong>Estabelecimento: </strong>{{$db->title}}</p>
    <p class="col-lg-12"><strong>Endereço: </strong>{{$db->address}}, {{$db->number}}, {{$db->district}}, {{$db->RegionCities->city}} - {{$db->RegionCities->RegionStates->acronym}}</p>    
    <p class="col-lg-12"><strong>Tipo de Estabelecimento: </strong>{{$db->TypeEstablishments->title}}</p>
    <p class="col-lg-12"><strong>Nivel de Atenção: </strong>{{$db->AttentionLevels->title}}</p>
</div>