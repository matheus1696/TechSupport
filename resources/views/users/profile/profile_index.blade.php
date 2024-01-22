<!-- Inicio de Componentização da Página Index -->
<x-pages.index>
    @slot('title', 'Perfil Usuário')

    @slot('body')
        <div class="row justify-content-center">

            <div class="col-md-7">
                @include('users.profile.partials.form_user_profile')
            </div>

            <div class="col-md-7">
                @include('users.profile.partials.form_user_password')
            </div>

            <div class="row col-md-7">
                @include('users.profile.partials.form_user_destroy')
            </div>
            
        </div>
    @endslot
</x-pages.index>