<x-form.input col="3" label="Sigla" id="code" value="{{$db->code ?? ''}}" />
<x-form.input col="9" label="Tipo de Apresentação" id="title" value="{{$db->title ?? ''}}" />
<x-form.textarea col="12" label="Descrição do Produto" id="description" value="{{$db->description ?? ''}}"/>