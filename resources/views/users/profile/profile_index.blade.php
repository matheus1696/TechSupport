<!-- Inicio de Componentização da Página Index -->
<x-pages.index>
    @slot('body')
        <div class="w-full lg:w-2/3 m-auto">
            @include('users.profile.partials.form_user_profile')
        </div>

        <div class="w-full lg:w-2/3 m-auto">
            @include('users.profile.partials.form_user_password')
        </div>

        <div class="w-full lg:w-2/3 m-auto">
            @include('users.profile.partials.form_user_destroy')
        </div>
    @endslot
</x-pages.index>