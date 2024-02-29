<!-- Inicio do Formulário -->
<form method="POST" action="{{$route}}">
    @csrf @if($method == "edit") @method('PUT') @endif

    <div class="grid grid-cols-12 gap-6">
        {{$slot}}
    </div>

    <!-- Inicio de Componentização dos Botões -->
    <x-button.buttonGroup>
        <!-- Inicio de Componentização dos Botões de Ação -->
        <x-button.buttonSubmit action="{{$method}}"/>
        
    </x-button.buttonGroup>
</form>
