<x-form.input col="2" label="Sigla" id="acronym" value="{{$db->acronym ?? ''}}"/>
<x-form.input col="10" label="Blocos Financeiros" id="title" value="{{$db->title ?? ''}}"/>
<label class="ml-1 text-sm col-12">Cores:</label>
<div class="px-3 row">    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-danger" type="radio" id="colorDanger" name="color" value="bg-danger" @if ($db->color === "bg-danger") checked @endif>
        <label for="colorDanger" class="text-sm text-danger custom-control-label">Vermelho</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-success" type="radio" id="colorSuccess" name="color" value="bg-success" @if ($db->color === "bg-success") checked @endif>>
        <label for="colorSuccess" class="text-sm text-success custom-control-label">Verde</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-warning" type="radio" id="colorWarning" name="color" value="bg-warning" @if ($db->color === "bg-warning") checked @endif>
        <label for="colorWarning" class="text-sm text-warning custom-control-label">Amarelo</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-indigo" type="radio" id="colorIndigo" name="color" value="bg-indigo" @if ($db->color === "bg-indigo") checked @endif>
        <label for="colorIndigo" class="text-sm text-indigo custom-control-label">Lilas</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-primary" type="radio" id="colorPrimary" name="color" value="bg-primary" @if ($db->color === "bg-primary") checked @endif>
        <label for="colorPrimary" class="text-sm text-primary custom-control-label">Azul</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-secondary" type="radio" id="colorSecondary" name="color" value="bg-secondary" @if ($db->color === "bg-secondary") checked @endif>
        <label for="colorSecondary" class="text-sm text-secondary custom-control-label">Cinza</label>
    </div>
    
    <div class="mx-2 custom-control custom-radio">
        <input class="custom-control-input custom-control-input-orange" type="radio" id="colorOrange" name="color" value="bg-orange" @if ($db->color === "bg-orange") checked @endif>
        <label for="colorOrange" class="text-sm text-orange custom-control-label">Laranja</label>
    </div>
</div>
