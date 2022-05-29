@extends('plantilla.cabecera');
@section('content') 
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
<br>
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinica Inicio</title>
</head>
<body>
    <h2>Bienvenido a la Clínica : {{Auth::user()->nombres}}</h2>
    <img src="imagen/clinica.PNG"><br>
    <a class="btn" id="botonDashboard-style3" href="/comprobar" style="margin:0px 70px"><h4>Iniciar</h4></a> 
    <a class="btn" id="botonDashboard-style3" href="/salir" style="margin:0px 70px"><h4>Salir</h4></a> 
</body>
</html>
@endsection