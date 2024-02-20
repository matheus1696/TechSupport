@if ($item->default)
    <form action="{{route('ticket_statuses.default',['ticket_status'=>$item->id])}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="default" value="0" hidden>
        <button type="submit" class="btn badge badge-success elevation-2">Padrão</button>
    </form>
    @else
    <form action="{{route('ticket_statuses.default',['ticket_status'=>$item->id])}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="default" value="1" hidden>
        <button type="submit" class="btn badge badge-danger elevation-2">Desativado</button>
    </form>
@endif