<x-form.select col="4" label="Hierarquia" name="hierarchy">
    <option value="0" @isset($db) @if ($db->hierarchy == 0) selected @endif @endisset>Setor Principal</option>
    @foreach ($dbSector as $item)
        <option value="{{$item->id}}" @isset($db) @if ($db->hierarchy == $item->id) selected @endif @endisset>
            <span>@for ($i = 0; $i < $item->number_hierarchy; $i++) - @endfor</span>
            {{$item->acronym}} | {{$item->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="2" label="Siglas" name="acronym" value="{{$db->acronym ?? ''}}"/>
<x-form.input col="6" label="Setor" name="title" value="{{$db->title ?? ''}}"/>
<x-form.textarea col="12" label="Descrição do Setor" name="description" value="{{$db->description ?? ''}}"/>