<form action="{{$route}}" method="post" class="d-inline-block">
    @csrf @method('DELETE')
    <button
        type="submit"
        class="m-1 btn btn-xs btn-danger elevation-2"
        onclick="return confirm('Realmente deseja realizar a exclusão?')"
    >
        <i class="p-1 text-xs fas fa-trash"></i>
    </button>
</form>
