
    <x-pages.index>

        <!-- Slot Header -->
        @slot('header')
            <x-header title="Organograma"/>
        @endslot
        
        @slot('body')
            <x-conteiner>

                <x-table.table>
                    @slot('thead')
                        <tr>
                            <th>Organograma</th>
                            <th class="text-center col-1">Status</th>
                            <th class="text-center col-2"></th>
                        </tr>
                    @endslot

                    @slot('tbody')
                        @foreach ($db as $item)
                            <tr>
                                <td>
                                    <div style="padding-left:{{preg_match_all('!\d+!',$item->order)}}em;">
                                        {{$item->acronym}} - {{$item->title}}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <x-button.buttonStatus condition="{{$item->status}}" route="{{route('organizational.status',['organizational'=>$item->id])}}" name="status"/>
                                </td>
                                <td class="text-center">
                                    <x-button.minButtonEdit route="{{route('organizational.edit',['organizational'=>$item->id])}}"/>
                                    <x-button.minButtonDelete route="{{route('organizational.destroy',['organizational'=>$item->id])}}"/>
                                </td>
                            </tr>
                        @endforeach
                    @endslot
                </x-table.table>

            </x-conteiner>
        @endslot
    </x-pages.index>
