<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="2" label="Nº do Processo" id="searchCod" placeholder="Pesquisa por Código"
            value="{{$search['searchCod'] ?? ''}}" />
        <x-form.input col="9" label="Titulo do Processo" id="searchtName" placeholder="Pesquisa por Nome"
            value="{{$search['searchtName'] ?? ''}}" />
        <x-button.buttonSearch />
    </form>
</div>