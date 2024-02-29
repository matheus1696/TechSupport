<div class="grid grid-cols-1 gap-2 lg:grid-cols-3">
    <div class="grid grid-cols-1">
        <label for="type_category_id" class="ml-1 text-sm">Tipo de Solicitação</label>
        <select
            id="type_category_id"
            name="type_category_id"
            class="px-2 py-2 text-sm border rounded-md @error('type_category_id') outline-red-500 bg-red-200 @enderror"
            wire:model='selectedTypeCategory'
            wire:change='formTypeCategory'
        >
            <option selected value="" class="bg-gray-200">Selecione um Tipo</option>
            @foreach ($typeCategories as $typeCategory)
                <option value="{{$typeCategory->id}}">{{$typeCategory->title}}</option>
            @endforeach
        </select>
        @error('type_category_id')
            <x-form.errors-message>
                {{$message}}
            </x-form.errors-message>
        @enderror
    </div>

    
    <div class="grid grid-cols-1">
        <label for="type_service_id" class="ml-1 text-sm">Tipo de Serviço</label>
        <select 
            id="type_service_id"
            name="type_service_id"
            class="px-2 py-2 text-sm border rounded-md @error('type_service_id') outline-red-500 bg-red-200 @enderror"
            wire:model='selectedTypeService' 
            wire:change='fromTypeService' 
            wire:show='selectedTypeService'
        >
            @foreach ($typeServices as $typeService)
                <option value="{{$typeService->id}}">{{$typeService->title}}</option>
            @endforeach
        </select>
    </div>
    
    

    <div class="grid grid-cols-1">
        <label for="type_sub_service_id" class="ml-1 text-sm">Tipo de Classificação</label>
        <select             
            id="type_sub_service_id"
            name="type_sub_service_id"
            class="px-2 py-2 text-sm border rounded-md @error('type_sub_service_id') outline-red-500 bg-red-200 @enderror"
            wire:show='selectedTypeSubService'
        >
            @if ($showTypeSubService)
                @foreach ($typeSubServices as $typeSubService)
                    <option value="{{$typeSubService->id}}">{{$typeSubService->title}}</option>
                @endforeach
            @endif
        </select>
        @error('type_sub_service_id')
            <x-form.errors-message>
                {{$message}}
            </x-form.errors-message>
        @enderror
    </div>
</div>
