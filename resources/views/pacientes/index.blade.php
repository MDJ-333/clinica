@extends('plantilla.cabecera')
@section('content')
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif 
<title>Lista Pacientes</title>
<div class="row justify-content-center">
	<div class="form-group col-md-3">
	<h2>Lista de Pacientes</h2>
	</div>
	<div class="form-group col-md-2">
		@if (Auth::user()->rol == 'Recepcion')
			<a width="330px" id="boton" class="form-control rounded-pill pr-5" href="/pacientes/crear">Crear Paciente</a>
			@else
			@endif
		
	</div>
	<div class="form-group col-md-5">
	</div>
</div>
<body>

<table class="table-fill">
    <thead>
        <tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellidos</th>
			<th>Telefono</th>
			<th>Correo</th>
			@if (Auth::user()->rol == 'Recepcion')
			<th>Opciones</th>
			@else
			@endif
			
        </tr>
        <tbody>
			@foreach ($paciente as $pacientes)
			<tr>
			<ul>
			<td>{{$pacientes['id']}}</td>
			<td>{{$pacientes['nombres']}}</td>
			<td>{{$pacientes['apellidos']}}</td>
			<td>{{$pacientes['telefono']}}</td>
			<td>{{$pacientes['correo']}}</td>
			<td>
			@if (Auth::user()->rol == 'Recepcion')
			<a class="" href="pacientes/editar/{{$pacientes->id}}">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="Black" class="bi bi-pencil-square" viewBox="0 0 16 16">
  					<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg>
				</a>
				<a  href="pacientes/mostrar/{{$pacientes->id}}">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-eye-fill" viewBox="0 0 16 16">
					<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					<path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
					</svg>
				</a>
				<a  href="pacientes/registro/{{$pacientes->id}}">
					<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="Black" class="bi bi-card-list" viewBox="0 0 16 16">
						<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
						<path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
					</svg>
				</a>
			@else
			@endif
			</td>
		</ul>
		@endforeach
            </tr>
        </tbody>

    </thead>

</table>

</body>
</html>
@endsection

<style type="text/css">	
    
    .table-fill{
    background: white ;
    border-radius: 30xp;
    border-collapse: collapse;
    height: auto;
    margin: auto;
    max-width: 80%;
    padding: 5px;
    width: 100%;
    box-shadow: 0 5px 10px rgba(0,0,0,0.1);
    animation: float 5s infinite;
}

th{
    color: white;
    background-color:#FE9C92;
    border-bottom: solid 5px #000000;
    border-right: 1px solid #000000;
    padding: 10px;
    text-align: center;
    text-shadow: 0 1px 1px rgba(0,0,0,0.1);
    vertical-align: middle;
        
    }
tr{
    
    border-top: 1px solid #C1c3d1;
    border-bottom: 1px;
    color: #000000;
    font-size: 20px;
    font-weight: normal;
    
}

tr:hover td{
    
    background-color: #85C1E9;
    color: white;
    border-top: 1px solid #22262e;
}
		</style>