<div class="input-field">
  <input type="text" name="nome" value="{{isset($registro->nome) ? $registro->nome : ''}}">
  <label>nome</label>
</div>

<div class="input-field">
  <input type="date" name="data" value="{{isset($registro->data) ? $registro->data : ''}}">
  <label>data de nascimento</label>
</div>

<div class="input-field">
  <input type="text" name="salario" value="{{isset($registro->salario) ? $registro->salario : ''}}">
  <label>salario</label>
</div>

<div class="file-field  input-field">

  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">
  </div>
</div>
@if(isset($registro->imagem))
<div class="input-field">
  <img width="200" src="{{asset($registro->imagem)}}" />
</div>
@endif

<div class="input-field">
  <p>
    <label>
        <input type="checkbox" {{isset($registro->ativo) && $registro->ativo == 'sim' ? 'checked' : '' }} value="true" />
        <span>ativo?</span>
    </label>
  </p>
    <br><br>
</div>

