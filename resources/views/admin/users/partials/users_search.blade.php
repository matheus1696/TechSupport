<!-- Search -->
<div class="pb-3">
    <form method="get" class="row">
        <x-form.input col="5" label="Nome do Usuário" id="searchName" placeholder="Pesquisa por nome do usuário"
            value="{{$search['searchName'] ?? ''}}" />
        <x-form.input col="6" label="Email do Usuário" id="searchEmail"
            placeholder="Pesquisa por email do usuário" value="{{$search['searchEmail'] ?? ''}}" />
        <x-button.buttonSearch />
    </form>
</div>