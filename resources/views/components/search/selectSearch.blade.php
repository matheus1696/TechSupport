<div class="flex items-center gap-2 {{$class ?? ''}} w-full lg:w-auto">
    
    <div>        
        <label for="{{$id}}" class="pt-2 text-sm font-semibold">{{$label ?? ""}}:</label>
    </div>
    <select
        id="{{$id}}" 
        name="{{$id}}" 
        value="{{$value ?? ''}}"
        class="flex-1 px-3 py-2 text-sm border border-gray-300 rounded-full shadow-sm select2 bg-gray-100/50 focus:bg-white focus:outline-none"
    >
        <option selected disabled class="py-3 disabled:bg-gray-200">{{$placeholder ?? "Selecione"}}</option>        
        <option value="">Todos</option>
        {{$slot}}
    </select>
</div>