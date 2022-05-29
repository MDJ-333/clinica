@extends('plantilla.cabecera')
@section('content')
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif 
<title>Registro de Paciente</title>
<div class="row justify-content-center">
	<div class="form-group col-md-3">
		<h2>Registro de Paciente</h2>
	</div>
</div>
<body>
<table class="table-fill">
    <thead>
        <tr>
            <th>Citas</th>
            <th></th>
        </tr>
        <tbody>
            @foreach ($cita as $citas)
			<tr>
				<ul>
					<td>{{$citas['id']}}</td>
					<td>
                        <a class="" href="/mostrar/{{$citas->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
					    </a>
                    </td>
				</ul>
			</tr>
			@endforeach
        </tbody>
    </thead>
</table>
</body>



<body>
<table class="table-fill">
    <thead>
        <tr>
            <th>Recetas</th>
            <th></th>
        </tr>
        <tbody>
            @foreach ($registro as $registros)
			<tr>
				<ul>
					<td>{{$registros['id']}}</td>
					<td>
                        <a class="" href="/recetas/mostrar/{{$registros->id}}">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-eye-fill" viewBox="0 0 16 16">
                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                            <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                            </svg>
					    </a>
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
    max-width: 20%;
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