<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<data>
@foreach($registros as $item)
<item>
    <nome>{{ $item->nome }}</nome>
    <data>{{ $item->data }}</data>
    <e_pirata>{{ $item->e_pirata == 0 ? "false" : "true" }}</e_pirata>
    <valor_recompensa>{{ $item->Valor_Recompensa }}</valor_recompensa>
    <idade>{{ $item->Idade }}</idade>
</item>
@endforeach
</data>
