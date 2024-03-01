<x-form.input col="6" label="Usuário" id="disabled" disabled="disabled" value="{{Auth::user()->name}}" />

<x-form.select col="6" label="Estabelecimento" id="establishment_id">
    @foreach ($dbEstablishments as $Establishment)
        <option value="{{$Establishment->id}}" @if (Auth::user()->establishment_id ==
            $Establishment->id) selected @endif>{{$Establishment->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Tipo de Solicitação" id="type_category_id" onchange="typeCategory()">
    @foreach ($dbTypeCategories as $dbTypeCategory)
        <option value="{{$dbTypeCategory->id}}">{{$dbTypeCategory->title}}</option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Tipo de Serviço" id="type_service_id"  onchange="typeServices()">
    @foreach ($dbTypeServices as $dbTypeService)
        <option 
            class="hidden typeCategory{{$dbTypeService->ticket_type_category_id}}"
            value="{{$dbTypeService->id}}"
        >
            {{$dbTypeService->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="4" label="Classificação do Serviço" id="type_sub_service_id">
    @foreach ($dbTypeSubServices as $dbTypeSubService)
        <option 
            class="hidden typeService{{$dbTypeSubService->ticket_type_service_id}}" 
            value="{{$dbTypeSubService->id}}"
        >
            {{$dbTypeSubService->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="12" label="Título" id="title"/>

<x-form.textarea col="12" label="Descrição" id="description" />

@include('ticket.partials.js.ticket_script')

