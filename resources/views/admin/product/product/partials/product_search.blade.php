<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="3" label="Código" id="searchProductCod" placeholder="Pesquisa por Código"
            value="{{$search['searchProductCod'] ?? ''}}" />
        <x-form.input col="8" label="Produto" id="searchProdutcName" placeholder="Pesquisa por Nome"
            value="{{$search['searchProdutcName'] ?? ''}}" />
        <x-button.buttonSearch col="1" />
    </form>
</div>