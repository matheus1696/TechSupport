<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="text-center">Excluir Perfil</h3>
    <p class="text-justify">A exclusão do usuário acarretara na perca total dos históricos e permissões atribuidas, lembrando que infelizmente não temos como recuperar seu perfil caso queira continuar com está ação.</p>

    <!-- Inicio de Componentização dos Botões -->
    <x-button.buttonGroup>
        <x-button.buttonDelete col="12" route="{{route('profile.destroy',['profile'=>$dbUser->id])}}" />
    </x-button.buttonGroup>
</x-conteiner>