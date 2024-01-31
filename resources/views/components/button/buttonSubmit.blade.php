@if ($action == "create")
    <div class="col-md">
        <button type="submit" class="my-2 btn btn-block btn-success elevation-2">{{$title ?? "Cadastrar"}}</button>
    </div>
@else
    <div class="col-md">
        <button type="submit" class="my-2 btn btn-block btn-info elevation-2">{{$title ?? "Salvar Alteração"}}</button>
    </div>
@endif
