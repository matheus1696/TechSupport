<!-- Search -->
<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="2" label="Código" id="searchCod" placeholder="Pesquisa por Código"
            value="{{$search['searchCod'] ?? ''}}" />
        <x-form.input col="9" label="Unidade" id="searchName" placeholder="Pesquisa por Unidade"
            value="{{$search['searchName'] ?? ''}}" />
        <x-button.buttonSearch />
    </form>
</div>