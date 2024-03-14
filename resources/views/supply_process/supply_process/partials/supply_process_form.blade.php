<x-form.select col="6" label="Usuário Demantante" id="demantant_user_id">
    @foreach ($dbUsers as $dbUser)
        <option value="{{$dbUser->id}}" @isset($db) @if ($db->demantant_user_id == $dbUser->id) selected @endif @endisset>
            {{$dbUser->name}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Usuário Solicitante" id="requesting_user_id">
    @foreach ($dbUsers as $dbUser)        
        <option value="{{$dbUser->id}}" @isset($db) @if ($db->requesting_user_id == $dbUser->id) selected @endif @endisset>
            {{$dbUser->name}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="8" label="Título" id="title" required="required" value="{{$db->title ?? ''}}" />

<x-form.select col="4" label="Modalidade" id="modality">
    <option value="direct_purchase" @isset($db) @if ($db->modality == 'direct_purchase') selected @endif @endisset>Compra direta</option>
    <option value="bidding_process" @isset($db) @if ($db->modality == 'bidding_process') selected @endif @endisset>Processo Licitatório</option>
</x-form.select>

<x-form.textarea col="12" label="Motivação e Justificativa" id="description" required="required" value="{{$db->description ?? ''}}" />
<x-form.textarea col="12" label="Resultados Pretendidos" id="intended_results" required="required" value="{{$db->intended_results ?? ''}}" />
<x-form.textarea col="12" label="Requisitos Necessários para Contratação" id="requirements" required="required" value="{{$db->requirements ?? ''}}" />
<x-form.textarea col="12" label="Providência a serem adotadas pela administração previamente à contratação" id="measures_adopted" required="required" value="{{$db->measures_adopted ?? ''}}" />

<x-form.select col="6" label="Fiscal Titular" id="inspector_head_user_id">
    @foreach ($dbUsers as $dbUser)        
        <option value="{{$dbUser->id}}" @isset($db) @if ($db->inspector_head_user_id == $dbUser->id) selected @endif @endisset>
            {{$dbUser->name}}
        </option>
    @endforeach
</x-form.select>

<x-form.select col="6" label="Fiscal Suplente" id="inspector_deputy_user_id">
    @foreach ($dbUsers as $dbUser)        
        <option value="{{$dbUser->id}}" @isset($db) @if ($db->inspector_deputy_user_id == $dbUser->id) selected @endif @endisset>
            {{$dbUser->name}}
        </option>
    @endforeach
</x-form.select>