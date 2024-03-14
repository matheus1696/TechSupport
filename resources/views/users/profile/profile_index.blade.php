<!-- Inicio de Componentização da Página Index -->
<x-pages.index>
    @slot('body')
        <div class="w-full m-auto lg:w-2/3">
            @include('users.profile.partials.form_user_profile')
        </div>

        <div class="w-full m-auto lg:w-2/3">
            @include('users.profile.partials.form_user_password')
        </div>
    @endslot
</x-pages.index>