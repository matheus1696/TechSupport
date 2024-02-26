@if ($action == "create")
    <div class="w-full">
        <button type="submit" class="w-full my-2 text-sm text-white transition duration-300 bg-green-800 rounded-lg shadow-md h-9 hover:bg-green-700">{{$title ?? "Cadastrar"}}</button>
    </div>
@else
    <div class="w-full">
        <button type="submit" class="w-full my-2 text-sm text-white transition duration-300 rounded-lg shadow-md bg-sky-600 h-9 hover:bg-sky-700">{{$title ?? "Salvar Alteração"}}</button>
    </div>
@endif
