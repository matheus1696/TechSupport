<x-pages.index>
    @slot('body')
        <x-conteiner>

            @include('supply_process.supply_process.partials.show.supply_process_show_description')

            <hr>

            @include('supply_process.supply_process.partials.show.supply_process_show_buttons')

            @include('supply_process.supply_process.partials.show.supply_process_show_alert')

        </x-conteiner>

        @include('supply_process.supply_process.partials.show.supply_process_show_products_table')

    @endslot
</x-pages.index>


