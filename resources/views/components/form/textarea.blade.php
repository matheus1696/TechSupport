<div class="form-group col-12" style="font-size: 0.9em">
    <label for="{{$id}}" class="col-form-label">{{$label ?? "Label"}}</label>
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="form-control @error($id) is-invalid border border-danger @enderror summernote"
        rows="{{$rows ?? 4}}"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>
