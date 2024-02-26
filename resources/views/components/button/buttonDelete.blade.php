<div class="col-md-{{$col ?? "12"}}">
    <form action="{{$route}}" method="post">
        @csrf @method('DELETE')
        <button 
            type="submit" 
            onclick="return confirm('Realmente deseja realizar a exclusão?')" 
            class="w-full my-2 text-white bg-red-600 rounded-lg shadow-md h-9 hover:bg-red-800">
                {{$title ?? "Excluir"}}
        </button>
    </form>
</div>
