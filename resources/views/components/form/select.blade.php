<div class="col-span-12 md:col-span-{{$col ?? '12'}}">
    @include('components.form.label')
    <select
        name="{{$name}}"
        id="{{$id ?? $name}}"
        class="px-2 py-2 text-sm rounded-md border @error($name) outline-red-700 border-red-300 @else outline-green-700 border-gray-300 @enderror disabled:bg-gray-200 select2 w-full"
        @isset($onchange) onchange="{{$onchange}}" @endisset
        required
    >
        <option selected disabled class="disabled:bg-gray-200">Selecione</option>
        {{$slot}}
    </select>

    @error($name)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>


