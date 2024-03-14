<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <textarea
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-xs rounded-md border @error($id) outline-red-500 bg-red-200 @enderror summernote"
        rows="2"
    >@if(empty($value)){{old($id)}}@else{!!$value!!}@endif</textarea>

    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</x-form.formGroup>
