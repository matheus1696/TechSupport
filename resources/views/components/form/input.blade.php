<div class="form-group col-lg-{{$col ?? "6"}} text-sm">
    <label for="{{$id}}" class="ml-1 col-form-label">{{$label ?? "Label"}}:</label>
    <input
        type="{{$type ?? "text"}}"
        name="{{$id}}"
        id="{{$id}}"
        class="form-control @error($id) is-invalid border border-danger @enderror"
        @if (empty($min))  @else min="{{$min}}" @endif
        @if (empty($max))  @else max="{{$max}}" @endif
        @if (empty($minlength))  @else minlength="{{$minlength}}" @endif
        @if (empty($maxlength))  @else maxlength="{{$maxlength}}" @endif
        @error($id) value="{{old($id)}}" @enderror
        @if (empty($value)) value="{{old($id)}}" @else value="{{$value}}" @endif
        @if (empty($placeholder))  @else placeholder="{{$placeholder}}" @endif
        {{$disabled ?? ""}}
        {{$required ?? ""}}
        {{$autofocus ?? ""}}
        @if (isset($type)) @if ($type == 'tel') onkeyup="handlePhone(event)" @endif @endif
    >
    @error($id)
        <x-form.errors-message>
            {{$message}}
        </x-form.errors-message>
    @enderror
</div>


<!-- Máscara Telefone -->
    @if (isset($type))
        @if ($type == 'tel')
            <script src="{{asset('assets/js/maskphone.js')}}"></script>
        @endif
    @endif
