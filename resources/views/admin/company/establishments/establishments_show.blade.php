<x-pages.index>
    @slot('body')
        <x-conteiner>
            @include('admin.company.establishments.partials.show.establishment_show_description')
        </x-conteiner>
        
        <x-conteiner>
            <div>
                @include('admin.company.establishments.partials.show.establishment_show_department_form')
            </div>
            <hr>
            <div>
                @include('admin.company.establishments.partials.show.establishment_show_department_table')
            </div>
        </x-conteiner>

    @endslot
</x-pages.index>