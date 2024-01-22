<x-pages.index>
    @slot('body')
    <h3>Permissões</h3>
    <p>
        @can('user')
        <p>Usuário</p>
        @endcan
        @can('bidding')
        <p>Processo Licitatório</p>
        @endcan
        @can('admin')
        <p>Adminstrador</p>
        @endcan
        @can('sysadmin')
        <p>Administrador do Sistema</p>
        @endcan
    </p>
    @endslot
</x-pages.index>
