<x-form.input col="8" label="Titulo" id="title" value="{{$db->title ?? ''}}"/>

<x-form.select col="4" label="Bloco Financeiro" id="financial_block_id" required="required">
    @foreach ($dbFinancialBlock as $item)
        <option value="{{$item->id}}" @isset($db) @if ($db->financial_block_id == $item->id) selected @endif @endisset>
            {{$item->title}}
        </option>
    @endforeach
</x-form.select>

<x-form.input col="12" label="Link Mobile" id="link_mobile" value="{{$db->link_mobile ?? ''}}"/>
<x-form.input col="12" label="Link Desktop" id="link_desktop" value="{{$db->link_desktop ?? ''}}"/>

