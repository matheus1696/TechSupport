<!-- Inicio do Formulário -->
<form method="POST" action="{{$route}}" class="preventForms">
    @csrf @if($method == "edit") @method('PUT') @endif

    <div class="grid md:grid-cols-12 grid-cols-1 gap-6">
        {{$slot}}
    </div>

    <div class="flex items-center justify-center gap-3 my-3">

        @if ($method == "create")
            <div class="w-full">
                <button type="submit" class="w-full my-2 text-sm text-white transition duration-300 bg-green-800 rounded-lg shadow-md h-9 hover:bg-green-700 preventSubmitBtn">{{$title ?? 'Cadastrar'}}</button>
            </div>
        @else
            <div class="w-full">
                <button type="submit" class="w-full my-2 text-sm text-white transition duration-300 rounded-lg shadow-md bg-sky-600 h-9 hover:bg-sky-700 preventSubmitBtn">{{$title ?? 'Salvar Alteração'}}</button>
            </div>
        @endif
    </div>
</form>

<script>
    document.querySelectorAll('.preventSubmitBtn').forEach(function(button) {
        button.addEventListener('click', function() {
            this.disabled = true; // Desativa o botão
            this.closest('form').submit(); // Envia o formulário mais próximo manualmente
        });
    });
</script>
