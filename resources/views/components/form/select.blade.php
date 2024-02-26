<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <x-adminlte-select2 
        name="{{$id}}"
        id="{{$db->id ?? $id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 border-red-200 bg-red-200 @else outline-green-500 border-green-200 bg-green-200 @enderror"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </x-adminlte-select2>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</x-form.formGroup>


