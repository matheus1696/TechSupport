<div class="flex items-center gap-2 {{$class ?? ''}} w-full lg:w-auto">
    <div>        
        <label for="{{$id}}" class="pt-2 text-sm font-semibold">{{$label ?? ""}}:</label>
    </div>
    <input 
        type="text" 
        id="{{$id}}" 
        name="{{$id}}" 
        value="{{$value ?? ''}}"
        class="flex-1 px-3 py-2 text-sm border border-gray-300 rounded-full shadow-sm bg-gray-100/50 focus:bg-white focus:outline-none"
    >
</div>