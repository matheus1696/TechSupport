<x-pages.index>
    @slot('body')        
        <x-conteiner>

            <div class="pb-3">
                <form method="get" class="row">
                    <x-form.input col="11" label="Unidade" id="searchName" placeholder="Pesquisa por Unidade"
                        value="{{$search['searchName'] ?? ''}}" />
                    <x-button.buttonSearch />
                </form>
            </div>

            <div class="row">
                @foreach ($db as $item)
                    <div class="px-2 col-xl-2 col-md-4 col-6">
                        <div class="small-box bg-success">
                            <div class="px-2 inner">
                                <p style="height: 50px" class="text-sm text-center">{{$item->title}}</p>
                                <h5 class="text-center">
                                    @foreach ($dbContact as $contact)
                                        @if ($contact->establishment_id === $item->id)
                                            @if ($contact->type_contact === "Main")
                                                {{$contact->contact}}
                                            @endif
                                        @endif
                                    @endforeach
                                </h5>
                            </div>                
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>                
                            <a href=" {{ route('contacts.show',['contact'=>$item->id]) }} " class="text-sm small-box-footer">
                                <span class="pr-2">Ramais da Unidade</span>
                                <i class="fas fa-arrow-circle-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                <p class="text-xs text-center text-secondary">Total de {{ $db->count() }} unidades.</p>
            </div>

        </x-conteiner>
    @endslot
</x-pages.index>