<x-form.input col="6" label="Usuário" id="disabled" disabled="disabled" value="{{Auth::user()->name}}" />

<x-form.select col="6" label="Estabelecimento" id="establishment_id">
    @foreach ($dbEstablishments as $Establishment)
        <option value="{{$Establishment->id}}" @if (Auth::user()->establishment_id ==
            $Establishment->id) selected @endif>{{$Establishment->title}}
        </option>
    @endforeach
</x-form.select>

<div class="col-span-12">
    <livewire:ticket.ticket-form />
</div>

<x-form.input col="12" label="Título" id="title"/>

<x-form.textarea col="12" label="Descrição" id="description" />

