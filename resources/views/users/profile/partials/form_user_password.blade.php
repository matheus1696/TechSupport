<!-- Inicio de Componentização do Conteiner -->
<x-conteiner>
    <h3 class="mb-3 text-lg font-semibold text-center">Alteração de Senha</h3>

    <x-form.form method="edit" route="{{route('profile.update',['profile'=>$db->id])}}">
        @csrf @method('PUT')

            <!-- Inicio de Componentização de Input e Select -->
            <x-form.input col="12" label="Email" name="email" id="email" value="{{$db->email}}" disabled="disabled" />
            <x-form.input col="6" label="Senha" type="password" name="password" id="password" placeholder="********"/>
            <x-form.input col="6" label="Confirmar Senha" type="password" name="password_confirmation" id="password_confirmation" placeholder="********" />
            
    </x-form.form>
</x-conteiner>