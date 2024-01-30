<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="11" label="Cidades" id="searchName" placeholder="Pesquisa por Cidades"
            value="{{$search['searchName'] ?? ''}}" />
        <x-button.buttonSearch col="1" />
    </form>
</div>