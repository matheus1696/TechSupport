<!-- Search -->
<div class="px-2 pb-3">
    <form method="get" class="flex flex-col items-center gap-3 lg:flex-row">
        {{$slot}}
        
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-green-700 rounded-full shadow-sm hover:bg-green-600">Pesquisar</button>
    </form>
</div>