<div class="overflow-x-auto shadow-md rounded-xl lg:overflow-hidden">
    <table class="w-full bg-white border">
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
    <div class="flex items-center justify-center px-3 py-2">
        <div class="text-sm">
            {{ $db->appends($_GET)->links() }}
        </div>
    </div>
@endisset