<div class="overflow-hidden rounded-lg shadow-md">
    <table class="w-full bg-white">
        <thead class="text-sm text-center bg-green-200 border-b-2 border-green-700">
            <tr>
                {{$thead ?? ""}}
            </tr>
        </thead>

        <tbody class="text-sm text-center">
            {{$tbody ?? ""}}
        </tbody>
    </table>
</div>

@isset($db)
    <div class="m-3 text-xs text-center text-slate-400">
        Total de {{ $db->count() }} itens
    </div>
    <div class="flex items-center justify-center px-3">
        <div class="text-sm">
            {{ $db->appends($_GET)->links() }}
        </div>
    </div>
@endisset