
<section class="pb-5">
    <!-- Alerta de Atulizações -->
    <x-alert.alert/>

        <!-- Inicio de Componentização do Conteiner -->
        {{$body ?? ""}}

        <div class="row justify-content-center">
            {!!$paginate ?? ""!!}
        </div>
</section>
