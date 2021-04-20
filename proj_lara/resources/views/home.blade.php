@include('inc.header')
 <div class="container">
 	<div class="row">
 		<legend>Lista</legend>
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

@include('inc.footer')