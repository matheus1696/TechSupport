<div class="col-span-{{$col ?? '6'}}">
    @include('components.form.label')
    <input
        type="{{$type ?? "text"}}"
        name="{{$id}}"
        id="{{$id}}"
        class="px-2 py-2 text-sm rounded-md border @error($id) outline-red-700 border-red-300 @else outline-green-700 border-gray-300 @enderror disabled:bg-gray-200 w-full"
        @isset($min) min="{{$min}}" @endisset        
        @isset($max) max="{{$max}}" @endisset
        @isset($minlength) minlength="{{$minlength}}" @endisset
        @isset($maxlength) maxlength="{{$maxlength}}" @endisset
        @error($id) value="{{old($id)}}" @enderror
        @if (empty($value)) value="{{old($id)}}" @else value="{{$value}}" @endif
        @if (empty($placeholder)) placeholder="{{$label}}" @else placeholder="{{$placeholder}}" @endif
        {{$disabled ?? ""}}
        {{$required ?? ""}}
        {{$autofocus ?? ""}}
        
        @isset($onchange) onchange="{{$onchange}}" @endisset

        @isset($type)
            @if ($type == 'tel') onkeyup="handlePhone(event)" @endif
            @if ($type == 'number') min='0' @endif
        @endisset
        @if ($id == 'registration') onkeyup="handleRegistration(event)" @endif
        @if ($id == 'cpf') onkeyup="handleCPF(event)" @endif
    >
    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>