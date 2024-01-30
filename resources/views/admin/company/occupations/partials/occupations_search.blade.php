<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="2" label="Código CBO" id="searchCod" placeholder="Pesquisa por CBO"
            value="{{$search['searchCod'] ?? ''}}" />
        <x-form.input col="9" label="Ocupação" id="searchName" placeholder="Pesquisa por Ocupação"
            value="{{$search['searchName'] ?? ''}}" />
        <x-button.buttonSearch col="1" />
    </form>
</div>