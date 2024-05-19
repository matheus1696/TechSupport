<div class="col-span-{{$col ?? '6'}}">
    @include('components.form.label')
    <textarea
        name="{{$name}}"
        id="{{$id ?? $name}}"
        class="px-2 py-2 text-xs rounded-md border @error($name) outline-red-500 bg-red-200 @enderror summernote w-full"
    >@if(empty($value)){{old($name)}}@else{!!$value!!}@endif</textarea>

    @error($name)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>
