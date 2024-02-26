<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="mb-3 text-center">Alteração de Senha</h3>

    <form method="POST" action="{{route('profile.update',['profile'=>$db->id])}}">
        @csrf @method('PUT')

        <div class="grid grid-cols-12 justify-center items-center gap-3">

            <!-- Inicio de Componentização de Input e Select -->
            <x-form.input col="12" label="Email" id="email" value="{{$db->email}}" disabled="disabled" />
            <x-form.input col="6" label="Senha" type="password" id="password" placeholder="********"/>
            <x-form.input col="6" label="Confirmar Senha" type="password" id="password_confirmation" placeholder="********" />
        </div>
        
        <!-- Inicio de Componentização dos Botões -->
        <x-button.buttonGroup>
            <x-button.buttonSubmit action="edit" col="12" />
        </x-button.buttonGroup>
    </form>
</x-conteiner>