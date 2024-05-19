<div class="flex items-center gap-2 {{$class ?? ''}} w-full lg:w-auto">
    <div>        
        <label for="{{$id}}" class="pt-2 text-sm font-semibold">{{$label ?? ""}}:</label>
    </div>
    <input 
        type="{{$type ?? 'text'}}" 
        id="{{$id}}" 
        name="{{$id}}" 
        value="{{$value ?? ''}}"
        class="flex-1 px-3 py-2 text-sm border border-gray-300 rounded-md focus:bg-white focus:outline-none"
        @if (empty($placeholder)) placeholder="{{$label ?? ""}}" @else placeholder="{{$placeholder}}" @endif
    >
</div>