<div class="col-md-{{$col ?? "12"}}">
    <form action="{{$route}}" method="post">
        @csrf @method('DELETE')
        <button 
            type="submit" 
            onclick="return confirm('Realmente deseja realizar a exclusão?')" 
            class="my-2 btn btn-block btn-danger elevation-2">
                {{$title ?? "Excluir"}}
        </button>
    </form>
</div>
