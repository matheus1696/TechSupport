<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="11" label="Unidade de Medida" id="searchName" placeholder="Pesquisa por Nome"
            value="{{$search['searchName'] ?? ''}}" />
        <x-button.buttonSearch />
    </form>
</div>
