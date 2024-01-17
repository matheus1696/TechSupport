@if ($condition)
    <form action="{{$route}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="{{$name}}" value="0" hidden>
        <button type="submit" class="btn badge badge-primary elevation-2">Ativado</button>
    </form>
@else
    <form action="{{$route}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="{{$name}}" value="1" hidden>
        <button type="submit" class="btn badge badge-danger elevation-2">Desativado</button>
    </form>
@endif
