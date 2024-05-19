<div class="flex flex-col justify-between overflow-hidden text-white bg-green-700 rounded-lg shadow-md">    
    <a href=" {{ route('contacts.show',['contact'=>$item->id]) }} ">
        <div class="px-1 py-2">
            <p class="px-3 text-sm text-center text-white min-h-14">{{$item->title}}</p>
            <h5 class="text-lg text-center text-white">
                @foreach ($dbContact as $contact)
                    @if ($contact->establishment_id === $item->id)
                        @if ($contact->type_contact === "Main")
                            {{$contact->contact}}
                        @endif
                    @endif
                @endforeach
            </h5>
        </div>               
        <div class="py-2 text-xs font-semibold text-center text-white bg-green-900 shadow-lg hover:bg-green-800">
            <span class="pr-2">Acessar Ramais Internos</span>
            <i class="fas fa-arrow-circle-right"></i>                            
        </div>
    </a>
</div>