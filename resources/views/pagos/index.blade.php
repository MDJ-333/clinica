@extends('plantilla.cabecera')
@section('content')
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif 
<title>Lista de Pagos</title>
<div class="row justify-content-center">
	<div class="form-group col-md-3">
	<h2>Lista de Recibos</h2>
	</div>
	<div class="form-group col-md-2">
		<a width="330px" id="boton" class="form-control rounded-pill pr-5" href="/pagos/crear">Crear Recibo</a>
	</div>
	<div class="form-group col-md-5">
	</div>
</div>
<body>

<table class="table-fill">
    <thead>
        <tr>
			<th>#</th>
			<th>Fecha</th>
			<th>Costo</th>
			<th>Id_Paciente</th>
			<th>Opciones</th>
        </tr>
        <tbody>
			@foreach ($pago as $pagos)
			<tr>
				<ul>
					<td>{{$pagos['id']}}</td>
					<td>{{$pagos['fecha']}}</td>
					<td>{{$pagos['costo']}}</td>
					<td>{{$pagos['paciente_id']}}</td>
					<td>
					<form action ="pagos/borrar/{{$pagos->id}}" method="post" style="display: inline">
							@csrf
							@method('DELETE')
							<input class="btn btn-danger" type="submit" value="Eliminar">
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