<x-form.select col="6" label="Setor Demantante" id="department_demantant_id" onchange="userDemantant()">
    @foreach ($dbOrganizational as $organizational)
        <option value="{{$organizational->id}}" @isset($db) @if ($db->user_demantant_id == $organizational->id) selected @endif @endisset>
            {{$organizational->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Usuário Demantante" id="user_demantant_id">
    @foreach ($dbUsers as $dbUser)
        <option 
            class="hidden userDemantant{{$dbUser->organization_id}}"
            value="{{$dbUser->id}}" 
            @isset($db) 
                @if ($db->user_demantant_id == $dbUser->id)
                    selected 
                @endif 
            @endisset
        >
            {{$dbUser->name}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Setor Solicitante" id="departament_requesting_id" onchange="userRequestiong()">
    @foreach ($dbOrganizational as $organizational)
        <option value="{{$organizational->id}}" @isset($db) @if ($db->user_requesting_id == $organizational->id) selected @endif @endisset>
            {{$organizational->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Usuário Solicitante" id="user_requesting_id">
    @foreach ($dbUsers as $dbUser)
        <option 
            class="userRequesting{{$dbUser->organization_id}}"
            value="{{$dbUser->id}}" 
            @isset($db) 
                @if ($db->user_requesting_id == $dbUser->id) 
                    selected 
                @endif 
            @endisset
        >
    @endforeach
</x-form.select>

<x-form.input col="8" label="Título" id="title" required="required" value="{{$db->title ?? ''}}" />

<x-form.select col="4" label="Modalidade" id="modality">
    <option value="direct_purchase">Compra direta</option>
    <option value="bidding_process">Processo Licitatório</option>
</x-form.select>

<x-form.textarea col="12" label="Motivação e Justificativa" id="description" required="required" value="{{$db->description ?? ''}}" />
<x-form.textarea col="12" label="Resultados Pretendidos" id="intended_results" required="required" value="{{$db->intended_results ?? ''}}" />
<x-form.textarea col="12" label="Requisitos Necessários para Contratação" id="requirements" required="required" value="{{$db->requirements ?? ''}}" />
<x-form.textarea col="12" label="Providência a serem adotadas pela administração previamente à contratação" id="measures_adopted" required="required" value="{{$db->measures_adopted ?? ''}}" />

<x-form.input col="6" label="Fiscal Titular" id="head_inspector_id" required="required" value="{{$db->head_inspector_id ?? ''}}"/>
<x-form.input col="6" label="Fiscal Suplente" id="deputy_inspector_id" required="required" value="{{$db->deputy_inspector_id ?? ''}}"/>

@include('supply_process.supply_process.partials.js.supply_process_script')