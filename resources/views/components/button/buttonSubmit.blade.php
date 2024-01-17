@if ($action == "create")
    <div class="col-md">
        <button type="submit" class="btn btn-block btn-primary my-2 elevation-2">{{$title ?? "Cadastrar"}}</button>
    </div>
@else
    <div class="col-md">
        <button type="submit" class="btn btn-block btn-info my-2 elevation-2">{{$title ?? "Salvar Alteração"}}</button>
    </div>
@endif
