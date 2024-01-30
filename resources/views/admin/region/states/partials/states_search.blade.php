<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="11" label="Estados" id="searchName" placeholder="Pesquisa por Estados"
            value="{{$search['searchName'] ?? ''}}" />
        <x-button.buttonSearch />
    </form>
</div>