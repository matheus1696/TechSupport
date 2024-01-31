
    <x-pages.index>
        @slot('body')
            <x-conteiner>

                @include('bidding.bidding.partials.show.bidding_show_description')

                <hr>

                @include('bidding.bidding.partials.show.bidding_show_buttons')

                @include('bidding.bidding.partials.show.bidding_show_alert')

                
            </x-conteiner>

            @include('bidding.bidding.partials.show.bidding_show_products_table')


        @endslot
    </x-pages.index>


