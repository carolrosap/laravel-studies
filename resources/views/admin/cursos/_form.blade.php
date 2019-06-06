<div class="input-field">
    <input type="text" name="titulo" id="" value="{{ isset($registro->titulo) ? $registro->titulo : '' }}">
    <label>Titulo</label>
</div>
<div class="input-field">
    <input type="text" name="descricao" id="" value="{{ isset($registro->descricao) ? $registro->descricao : '' }}">
    <label>Descrição</label>
</div>
<div class="input-field">
    <input type="text" name="valor" id="" value="{{ isset($registro->valor) ? $registro->valor : '' }}">
    <label>Valor</label>
</div>
<div class="file-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="imagem" id="">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($registro->imagem))
    <div class="input-field">
        <img src="{{ asset($registro->imagem) }}" width="150" alt="">
    </div>
@endif
<div>
    <p>
        <input type="checkbox" id="publicado" {{ isset($registro->publicado) && $registro->publicado == "sim" ? "checked" : '' }} value="true" name="publicado" class="filled-in"/>
        <label for="publicado">Publicar?</label>
    </p>
    <br><br>
</div>

