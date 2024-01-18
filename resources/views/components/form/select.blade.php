<div class="form-group col-lg-{{$col ?? "6"}} text-sm">
    <label for="{{$id}}" class="ml-1 col-form-label">{{$label ?? "Label"}}:</label>
    <select
        name="{{$id}}"
        id="{{$id}}"
        class="form-control @error($id) is-invalid border border-danger @enderror js-select"
    >
        <option selected disabled>Selecione</option>
        {{$slot}}
    </select>
    @error($id)
        <span class="ml-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>
