<div class="flex flex-wrap gap-3 my-3 justify-center items-center">
    <a href="{{route('supply_process_items.create',['supply_process'=>$db->id])}}" class="flex flex-col justify-center items-center bg-green-800 hover:bg-green-700 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm fas fa-plus"></i></p>
        <p class="w-14">Cad. Item</p>
    </a>
    
    <a href="{{route('supply_processes.edit',['supply_process'=>$db->id])}}" class="flex flex-col justify-center items-center bg-yellow-500 hover:bg-yellow-400 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm fas fa-pen text-gray-700"></i></p>
        <p class="w-14 text-gray-700">Editar</p>
    </a>

    <a href="{{route('supply_processes.index')}}" class="flex flex-col justify-center items-center bg-gray-600 hover:bg-gray-500 rounded shadow text-white text-center text-xs py-2.5 px-2">
        <p><i class="mb-1 text-sm fas fa-reply"></i></p>
        <p class="w-14">Voltar</p>
    </a>
</div>