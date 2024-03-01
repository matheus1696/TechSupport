<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <select
        name="{{$id}}"
        id="{{$db->id ?? $id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 bg-red-200 @enderror"
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


