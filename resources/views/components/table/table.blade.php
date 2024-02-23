<div class="overflow-hidden rounded-lg">
    <table class="table table-bordered table-striped table-hover table-responsive-md" style="font-size: 0.9em;">
        <thead class="text-sm text-center table-success">
            {{$thead ?? ""}}
        </thead>
    
        <tbody class="text-sm text-center">
            {{$tbody ?? ""}}
        </tbody>
    </table>
    
    @isset($db)
        <div class="mb-2 text-xs text-center text-secondary">
            Total de {{ $db->count() }} itens
        </div>
        <div class="px-3 row justify-content-center align-items-center">            
            <div class="text-sm">
                {{ $db->appends($_GET)->links() }}
            </div>
        </div>
    @endisset
</div>
