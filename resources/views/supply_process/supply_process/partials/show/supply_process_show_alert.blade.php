@if ($db->due_date < Today() && $db->due_date != NULL)
    <div class="alert alert-danger" role="alert">
        Processo Licitatório Vencido
    </div>
@elseif ($db->due_date < date('Y-m-d', strtotime("+90 days")) && $db->due_date != NULL)
    <div class="alert alert-warning" role="alert">
        Processo Licitatório Próximo do Fim da Vigência
    </div>
@endif