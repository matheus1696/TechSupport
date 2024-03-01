<script>
    function typeCategory() {       

        // Oculta todos os elementos relevantes
        let allElements = document.querySelectorAll('[class^="typeCategory"]');
        allElements.forEach(function(element) {
            element.classList.add('hidden');
        });

        // Mostra o elemento selecionado
        let selectElement = document.getElementById('type_category_id');
        let selectedOption = selectElement.options[selectElement.selectedIndex];
        let type_category = "typeCategory" + selectedOption.value;

        let elementsToShow = document.getElementsByClassName(type_category);
        for (let i = 0; i < elementsToShow.length; i++) {
            elementsToShow[i].classList.remove('hidden');
        }

        // Retorna para a opção padrão
        let typeService = document.getElementById('type_service_id');
        typeService.selectedIndex = 0;

        // Retorna para a opção padrão
        let typeSubService = document.getElementById('type_sub_service_id');
        typeSubService.selectedIndex = 0;
    }

    function typeServices() {
        // Oculta todos os elementos relevantes
        let allElements = document.querySelectorAll('[class^="typeService"]');
        allElements.forEach(function(element) {
            element.classList.add('hidden');
        });

        // Mostra o elemento selecionado
        let selectElement = document.getElementById('type_service_id');
        let selectedOption = selectElement.options[selectElement.selectedIndex];
        let type_service = "typeService" + selectedOption.value;

        let elementsToShow = document.getElementsByClassName(type_service);
        for (let i = 0; i < elementsToShow.length; i++) {
            elementsToShow[i].classList.remove('hidden');
        }

        // Retorna para a opção padrão
        let typeSubService = document.getElementById('type_sub_service_id');
        typeSubService.selectedIndex = 0;
    }
</script>
