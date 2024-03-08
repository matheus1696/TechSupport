@if ($db->due_date < Today() && $db->due_date != NULL)
    <div class="w-full py-2 mb-3 rounded-lg bg-red-400/50">
        <p class="text-sm font-semibold text-center">Processo Licitatório Vencido</p>
    </div>
@elseif ($db->due_date < date('Y-m-d', strtotime("+90 days")) && $db->due_date != NULL)
    <div class="w-full py-2 mb-3 rounded-lg bg-yellow-400/50">
        <p class="text-sm font-semibold text-center">Processo Licitatório Próximo do Fim da Vigência</p>
    </div>
@endif