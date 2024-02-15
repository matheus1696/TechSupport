<div class="form-group col-lg-{{$col ?? "6"}} text-sm">
    <label for="{{$id}}" class="col-form-label">{{$label ?? "Label"}}</label>
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="form-control @error($id) is-invalid border border-danger @enderror summernote"
        rows="2"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>
