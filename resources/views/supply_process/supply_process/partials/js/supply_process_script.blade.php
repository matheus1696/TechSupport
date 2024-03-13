<script>
    function userDemantant() {       
        // Oculta todos os elementos relevantes
        let allElements = document.querySelectorAll('[class^="userDemantant"]');
        allElements.forEach(function(element) {
            element.classList.add('hidden');
        });

        // Mostra os elementos de usuário demandante do setor selecionado
        let selectElement = document.getElementById('department_demantant_id');
        let selectedDepartment = selectElement.value;

        let userDemantantElements = document.querySelectorAll('.userDemantant' + selectedDepartment);
        userDemantantElements.forEach(function(element) {
            element.classList.remove('hidden');
        });

        // Retorna para a opção padrão no select de usuário demandante
        let userDemantantSelect = document.getElementById('user_demantant_id');
        userDemantantSelect.selectedIndex = 0;
    }

    function userRequesting() {       
        // Oculta todos os elementos relevantes
        let allElements = document.querySelectorAll('[class^="userRequesting"]');
        allElements.forEach(function(element) {
            element.classList.add('hidden');
        });

        // Mostra os elementos de usuário demandante do setor selecionado
        let selectElement = document.getElementById('department_requesting_id');
        let selectedDepartment = selectElement.value;

        let userRequestingElements = document.querySelectorAll('.userRequesting' + selectedDepartment);
        userRequestingElements.forEach(function(element) {
            element.classList.remove('hidden');
        });

        // Retorna para a opção padrão no select de usuário demandante
        let userRequestingSelect = document.getElementById('user_requesting_id');
        userRequestingSelect.selectedIndex = 0;
    }
</script>