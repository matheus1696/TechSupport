<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <select
        name="{{$id}}"
        id="{{$db->id ?? $id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-700 border-red-300 @else outline-green-700 border-gray-300 @enderror disabled:bg-gray-200 select2"
        @isset($onchange) onchange="{{$onchange}}" @endisset
        style="width: 100%;"
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


