@if ($condition)
    <form action="{{$route}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="{{$name ?? 'status'}}" value="0" hidden>
        <button type="submit" class="px-2 py-1 text-xs font-semibold text-white bg-green-700 rounded-lg shadow-md hover:bg-green-900">Ativado</button>
    </form>
@else
    <form action="{{$route}}" method="post">
        @csrf @method('PUT')
        <input type="text" name="{{$name ?? 'status'}}" value="1" hidden>
        <button type="submit" class="px-2 py-1 text-xs font-semibold text-white bg-red-700 rounded-lg shadow-md hover:bg-red-900">Desativado</button>
    </form>
@endif
