@include('inc.header')
 <div class="container">
 	<div class="row">
 		<legend>Lista Recluso</legend>
    @if(session('info'))
          {{ session('info')}}
    @endif

 		<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Apelido</th>
      <th>Nome</th>
      <th>Tipo de Crime</th>
      <th>Data de Nascimento</th>
      <th>Numero de identificacao</th>
      <th>Cadeia</th>
      <th>Accao</th>
      
    </tr>
  </thead>
  <tbody>
    @if(count($articles)> 0)
    @foreach($articles->all() as $article)

      
    <tr>
      <td>{{ $article-> id}}</td>
      <td>{{ $article-> apelido}}</td>
      <td>{{ $article-> nome}}</td>
      <td>{{ $article-> tipoCrime}}</td>
      <td>{{ $article-> data}}</td>
      <td>{{ $article-> numero}}</td>
      <td>{{ $article-> cadeia}}</td>
      <td>
      	<a href="{{ url('')}}" class= "label label-primary">Visualizar</a> |
      	<a href="{{ url('')}}" class= "label label-success">Actualizar</a> 
      	
      </td>
    </tr>
     @endforeach
    @endif

  </tbody>
</table>
 		
 	</div>	
 </div>


<hr>

 <div class="container">
  <div class="row">
    <legend>Lista Guarda</legend>
    @if(session('info'))
          {{ session('info')}}
    @endif

    <table class="table table-striped table-hover ">
  <thead>
    <tr>
      <th>ID</th>
      <th>Apelido</th>
      <th>Nome</th>
      <th>Data de Nascimento</th>
      <th>Numero de identificacao</th>
      <th>Cadeia</th>
      
      
    </tr>
  </thead>
  <tbody>
  
     @if(count($guarda_models)> 0)
        @foreach($guarda_models->all() as $guarda_model)
   
    <tr>
      <td>{{ $guarda_model-> id}}</td>
      <td>{{ $guarda_model-> apelido}}</td>
      <td>{{ $guarda_model-> nome}}</td>
      <td>{{ $guarda_model-> data}}</td>
      <td>{{ $guarda_model-> numero}}</td>
      <td>{{ $guarda_model-> cadeia}}</td>
      <td>
        <a href="{{ url('')}}" class= "label label-primary">Visualizar</a> |
        <a href="{{ url('')}}" class= "label label-success">Actualizar</a> 
        
      </td>
    </tr>
     @endforeach
    @endif
    
  </tbody>
</table>
    
  </div>  
 </div>

@include('inc.footer')