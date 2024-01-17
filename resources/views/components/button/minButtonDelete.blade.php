<form action="{{$route}}" method="post" class="d-inline-block">
    @csrf @method('DELETE')
    <button
        type="submit"
        class="btn btn-sm btn-danger elevation-2 m-1"
        onclick="return confirm('Realmente deseja realizar a exclusão?')"
        style="font-size: 0.8em"
    >
        <i class="fas fa-trash"></i>
    </button>
</form>
