@if ($action == "create")
    <div class="w-full">
        <button type="submit" class="w-full my-2 text-white bg-green-700 rounded-lg shadow-md h-9 hover:bg-green-900">{{$title ?? "Cadastrar"}}</button>
    </div>
@else
    <div class="w-full">
        <button type="submit" class="w-full my-2 text-white bg-green-700 rounded-lg shadow-md h-9 hover:bg-green-900">{{$title ?? "Salvar Alteração"}}</button>
    </div>
@endif
