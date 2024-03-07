<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="text-lg font-semibold text-center">Excluir Perfil</h3>
    <p class="my-3 text-justify text-md">A exclusão do usuário acarretara na perca total dos históricos e permissões atribuidas, lembrando que infelizmente não temos como recuperar seu perfil caso queira continuar com está ação.</p>

    <!-- Inicio de Componentização dos Botões -->
    <x-button.buttonGroup>
        <x-button.buttonDelete route="{{route('profile.destroy',['profile'=>$db->id])}}" />
    </x-button.buttonGroup>
</x-conteiner>