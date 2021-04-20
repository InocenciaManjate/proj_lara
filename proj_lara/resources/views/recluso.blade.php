@include('inc.header')

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<form class="form-horizontal" method="POST" action="{{url('/insert')}}">
        {{csrf_field()}}
  <fieldset>
    <legend>Recluso</legend>

    @if(count($errors) > 0)
     @foreach($errors->all() as $error)

      <div class="alert alert-danger">
        {{$error}}
      </div>

     @endforeach
     @endif

    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Apelido</label>
      <div class="col-lg-10">
        <input type="text"  name="apelido" class="form-control" id="inputApelido" placeholder="Apelido">
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
        <button type="submit" class="btn btn-primary">Salvar</button>
      </div>
       
    <!-- <a href="{{url('/')}}" class="btn btn-primary">Voltar</a> -->
    </div>
  </fieldset>
</form>
			
		</div>	
	</div>
</div>

@include('inc.footer')