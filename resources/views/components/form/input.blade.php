<div class="form-group col-lg-{{$col ?? "6"}} mb-md-0" style="font-size: 0.8em">
    <label for="{{$id}}" class="col-form-label">{{$label ?? "Label"}}</label>
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
        <span class="px-1 font-weight-bold invalid-feedback">{{ $message }}</span>
    @enderror
</div>


<!-- Máscara Telefone -->
    @if (isset($type))
        @if ($type == 'tel')
            <script src="{{asset('assets/js/maskphone.js')}}"></script>
        @endif
    @endif
