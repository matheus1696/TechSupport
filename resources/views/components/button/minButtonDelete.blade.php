<form action="{{$route}}" method="post" class="d-inline-block">
    @csrf @method('DELETE')
    <button
        type="submit"
        class="px-2 py-2 m-1 text-xs text-white bg-red-700 rounded-lg shadow-md hover:bg-red-600"
        onclick="return confirm('Realmente deseja realizar a exclusão?')"
    >
        <i class="fas fa-trash"></i>
    </button>
</form>
