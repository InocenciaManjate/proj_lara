<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" method="POST" action="{{}}">
  <fieldset>
    <legend>Recluso</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Apelido</label>
      <div class="col-lg-10">
        <input type="text"  name="apelido "class="form-control" id="inputApelido" placeholder="Apelido">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Nome</label>
      <div class="col-lg-10">
        <input type="text" name="nome" class="form-control" id="inputNome" placeholder="Nome">
      </div>
    </div>

    <div class="form-group">
      <label for="select" class="col-lg-2 control-label">Tipo de Crime</label>
      <div class="col-lg-10">
        <select class="form-control" name="tipoCrime" id="tipoCrime">
          <option>Homicidio</option>
          <option>Violencia Domestica</option>
        </select>
      </div>
    </div>


    <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Data de Nascimento</label>
      <div class="col-lg-10">
       <input type="text" name="data" class="form-control" id="data" placeholder="Data de Nascimento">
      </div>
    </div>

     <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Numero de identificacao</label>
      <div class="col-lg-10">
       <input type="text" name="numero" class="form-control" id="numero" placeholder="Numero de identificacao">
      </div>
    </div>

     <div class="form-group">
      <label for="text" class="col-lg-2 control-label">Cadeia</label>
      <div class="col-lg-10">
       <input type="text" name="cadeia" class="form-control" id="cadeia" placeholder="Cadeia">
      </div>
    </div>
   
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>
			
		</div>	
	</div>
</div>