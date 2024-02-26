@if ($item->default)
    <form action="{{route('ticket_statuses.default',['ticket_status'=>$item->id])}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="default" value="0" hidden>
        <button type="submit" class="px-2 py-1 text-xs font-semibold text-white bg-green-700 rounded-lg shadow-md hover:bg-green-600">Padrão</button>
    </form>
    @else
    <form action="{{route('ticket_statuses.default',['ticket_status'=>$item->id])}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="default" value="1" hidden>
        <button type="submit" class="px-2 py-1 text-xs font-semibold text-white bg-red-700 rounded-lg shadow-md hover:bg-red-600">Desativado</button>
    </form>
@endif