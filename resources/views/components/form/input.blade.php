<x-form.formGroup col="{{$col ?? '6'}}">
    @include('components.form.label')
    <input
        type="{{$type ?? "text"}}"
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-500 bg-red-200 @enderror"
        @if (empty($min))  @else min="{{$min}}" @endif
        @if (empty($max))  @else max="{{$max}}" @endif
        @if (empty($minlength))  @else minlength="{{$minlength}}" @endif
        @if (empty($maxlength))  @else maxlength="{{$maxlength}}" @endif
        @error($id) value="{{old($id)}}" @enderror
        @if (empty($value)) value="{{old($id)}}" @else value="{{$value}}" @endif
        @if (empty($placeholder)) placeholder="{{$label}}" @else placeholder="{{$placeholder}}" @endif
        {{$disabled ?? ""}}
        {{$required ?? ""}}
        {{$autofocus ?? ""}}
        @isset($type)
            @if ($type == 'tel') onkeyup="handlePhone(event)" @endif
            @if ($type == 'number') min='0' @endif
        @endisset
    >
    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</x-form.formGroup>