<!-- Inicio de Componentização Page Edit -->
<x-pages.forms method="edit" route="{{route('organizational.update',['organizational'=>$db->id])}}" btnBack="{{route('organizational.index')}}">
    
    <!-- Slot Header -->
    @slot('header')
        <x-header title="Organograma" route="{{ route('organizational.create') }}" />
    @endslot

    <!-- Slot Body -->
    @slot('body')
        <x-form.select col="4" label="Hierarquia" id="hierarchy">
            <option value="0" @if ($db->hierarchy == 0) selected @endif>Setor Principal</option>
            @foreach ($dbSector as $item)
                @if ($db->id != $item->id)
                    <option value="{{$item->id}}" @if ($db->hierarchy == $item->id) selected @endif>
                        @for ($i = 0; $i < preg_match_all('!\d+!',$item->ord_setor); $i++) <span>-</span> @endfor
                        {{$item->title}}
                    </option>
                @endif
            @endforeach
        </x-form.select>
        
        <x-form.input col="2" label="Siglas" id="acronym" value="{{$db->acronym}}"/>
        <x-form.input col="6" label="Setor" id="title" value="{{$db->title}}"/>
        <x-form.textarea label="Descrição do Setor" id="description" value="{{$db->description}}"/>
    @endslot
    
</x-pages.forms>
