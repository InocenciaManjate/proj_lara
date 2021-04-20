<!DOCTYPE html>
<html>
<head>
  <title>Teste </title>
  <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
    <script type="text/javascript" src ="{{ url('js/jquery-3.1.0.js') }}"></script>
    <script type="text/javascript" src ="{{ url('js//bootstrap.js') }}"></script>
</head>
<body>
  <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Cadeia </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{url('/')}}">Home<span class="sr-only">(current)</span></a></li>
        <li><a href="{{url('/recluso')}}">Recluso</a></li>
        <li><a href="{{url('/guarda')}}">Guarda</a></li>
       
      </ul>
      
     
    </div>
  </div>
</nav>

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

<footer id="footer" class="text text-center">
<p> Copyright &copy 2021  </p>
</footer>
</body>
</html>