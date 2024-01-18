<x-pages.index>
    @slot('body')
    <x-conteiner>

        <x-table.table>
            @slot('thead')
            <tr>
                <th>Orientação Sexual</th>
                <th class="text-center col-2">Status</th>
                <th class="col-1"></th>
            </tr>
            @endslot

            @slot('tbody')
            @foreach ($db as $item)
            <tr>
                <td>{{$item->sexual_orientation}}</td>
                <td class="text-center">
                    <x-button.buttonStatus condition="{{$item->status}}"
                        route="{{route('sexualorientations.update',['sexualorientation'=>$item->id])}}"
                        name="status" />
                </td>
                <td>
                    <!-- Inicio de Componentização do ModalShow -->
                    <x-modal.modalEdit id="SexualOrientations{{$item->id}}" title="Orientação Sexual">
                        <form action="{{route('sexualorientations.update',['sexualorientation'=>$item->id])}}"
                            method="post">
                            @csrf @method('PUT')
                            <div class="row">
                                <x-form.input label="Orientação Sexual" col="12" id="sexual_orientation"
                                    value="{{$item->sexual_orientation}}" />
                            </div>

                            <!-- Inicio de Componentização dos Botões -->
                            <x-button.buttonGroup>
                                <x-button.buttonSubmit action="edit" col="6" />
                            </x-button.buttonGroup>
                        </form>
                    </x-modal.modalEdit>
                </td>
            </tr>
            @endforeach
            @endslot
        </x-table.table>

    </x-conteiner>
    @endslot
</x-pages.index>
