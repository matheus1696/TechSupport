@if ($db->due_date < Today() && $db->due_date != NULL)
    <div class="w-full bg-yellow-400/50 rounded-lg mb-3 py-2">
        <p class="text-center text-sm font-semibold">Processo Licitatório Vencido</p>
    </div>
@elseif ($db->due_date < date('Y-m-d', strtotime("+90 days")) && $db->due_date != NULL)
    <div class="w-full bg-yellow-400/50 rounded-lg mb-3 py-2">
        <p class="text-center text-sm font-semibold">Processo Licitatório Próximo do Fim da Vigência</p>
    </div>
@endif