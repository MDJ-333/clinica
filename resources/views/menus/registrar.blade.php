@extends('plantilla.cabecera')
@section('content') 
<!doctype html>
<html lang="es">
  <head>
    <title>Clinica-inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <meta name="theme-color" content="#7952b3">
    <meta charset="utf-8">
    
  </head>

<body class="text-center">
    <h1>Registrar Nuevo Usuario</h1><br><br><br><br>

</body>
</html>

<body>
 <div class="container">

        <a class="btn" id="botonDashboard-style3" href="/registrar/doctor" style="margin:0px 70px"><h4>Doctor</h4></a> 
        <a class="btn" id="botonDashboard-style2" href="/registrar/recepcion"><h4>Recepción</h4></a> 
           
 </div>
</body>
@endsection
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif
