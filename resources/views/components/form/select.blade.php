<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <select
        name="{{$id}}"
        id="{{$db->id ?? $id}}"
        class="select2"
        @isset($onchange) onchange="{{$onchange}}" @endisset
    >
        <option selected disabled class="disabled:bg-gray-200">Selecione</option>
        {{$slot}}
    </select>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</x-form.formGroup>


