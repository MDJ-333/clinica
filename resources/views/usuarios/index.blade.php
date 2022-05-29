@extends('plantilla.cabecera')
@section('content')
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif 
<title>Lista de Recetas</title>
<div class="row justify-content-center">
	<div class="form-group col-md-3">
		<h2>Lista de Usuarios</h2>
	</div>
	<div class="form-group col-md-3">
		<a width="330px" id="boton" class="form-control rounded-pill pr-5" href="/usuarios/crear">Crear Usuario</a>
	</div>
	<div class="form-group col-md-4">
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
			<th>Rol</th>
			<th>Opciones</th>  
        </tr>
        <tbody>
			@foreach ($usuario as $usuarios)
			<tr>
			<ul>
				<td>{{$usuarios['id']}}</td>
				<td>{{$usuarios['nombres']}}</td>
				<td>{{$usuarios['apellidos']}}</td>
				<td>{{$usuarios['telefono']}}</td>
				<td>{{$usuarios['correo']}}</td>
				<td>{{$usuarios['rol']}}</td>
				<td>
					<a class="" href="usuarios/editar/{{$usuarios->id}}">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg>
					</a>
					<a class="" href="usuarios/restablecer/{{$usuarios->id}}">
						<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-key-fill" viewBox="0 0 16 16">
						<path d="M3.5 11.5a3.5 3.5 0 1 1 3.163-5H14L15.5 8 14 9.5l-1-1-1 1-1-1-1 1-1-1-1 1H6.663a3.5 3.5 0 0 1-3.163 2zM2.5 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
						</svg>
					</a>
														
					<form action ="usuarios/borrar/{{$usuarios->id}}" method="post" style="display: inline">
						@csrf
						@method('DELETE')
							
							<input  type="submit" value="Eliminar" class="btn btn-danger">
						
				</td>
			</ul>
			</tr>
			@endforeach
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
    max-width: 90%;
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

