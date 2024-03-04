<div class="flex flex-col justify-between overflow-hidden text-white bg-green-700 rounded-lg shadow-md">
    <div class="px-1 py-2">
        <p class="text-sm text-center min-h-14">{{$item->title}}</p>
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
    <a href=" {{ route('contacts.show',['contact'=>$item->id]) }} ">
        <div class="py-2 text-xs font-semibold text-center text-white bg-green-900 shadow-lg hover:bg-green-800">
            <span class="pr-2">Ramais da Unidade</span>
            <i class="fas fa-arrow-circle-right"></i>                            
        </div>
    </a>
</div>