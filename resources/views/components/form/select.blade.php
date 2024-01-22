<div class="form-group col-lg-{{$col ?? "6"}} text-sm mb-0">
    
    <x-adminlte-select2 
        name="{{$id}}"
        id="{{$id}}"
        class="form-control"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </x-adminlte-select2>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>


