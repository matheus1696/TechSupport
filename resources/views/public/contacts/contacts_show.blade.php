<x-pages.index>
    @slot('body')        
        <x-conteiner>

            <div class="pb-3">
                <form method="get" class="row">
                    <x-form.input col="11" label="Setor da Unidade" id="searchName" placeholder="Pesquisa por Setor da Unidade"
                        value="{{$search['searchName'] ?? ''}}" />
                    <x-button.buttonSearch />
                </form>
            </div>

            <x-table.table>
                @slot('thead')
                    <tr>
                        <th>Setor</th>
                        <th>Contato</th>
                        <th>Ramal</th>
                    </tr>
                @endslot

                @slot('tbody')
                    @foreach ($db as $item)
                        <tr>
                            <td>{{$item->department}}</td>                            
                            <td class="text-center">{{$item->contact}}</td>                            
                            <td class="text-center">{{$item->extension}}</td>
                        </tr>
                    @endforeach
                @endslot
            </x-table.table>

            <div>
                <p class="text-xs text-center text-secondary">Total de {{ $db->count() }} setores.</p>
            </div>

        </x-conteiner>
    @endslot
</x-pages.index>