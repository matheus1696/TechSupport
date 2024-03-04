<!-- Search -->
<div class="px-2 pb-3">
    <form method="get" class="flex flex-col items-center gap-3 lg:flex-row">
        <div class="flex items-end flex-1 gap-3">
            <label for="searchName" class="text-sm font-semibold">Estados:</label>
            <input type="text" id="searchName" name="searchName" value="{{$search['searchName'] ?? ''}}" class="flex-1 px-3 text-sm border border-gray-300 rounded-full shadow-sm bg-gray-100/50 focus:bg-white">
        </div>
        
        <button type="submit" class="px-3 py-2 text-sm font-semibold text-white bg-green-700 rounded-full shadow-sm hover:bg-green-600">Pesquisar</button>
    </form>
</div>