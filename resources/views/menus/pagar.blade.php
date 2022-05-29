@extends('plantilla.cabecera')
@section('content') 
<!doctype html>
<html lang="es">
  <head>
    <title>Clinica-inicio</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
    <meta name="theme-color" content="#7952b3">
    <meta charset="utf-8">
    
  </head>

<body >
    <h1>Pago</h1><br><br>
</body>
<body>
 <div >
        <form action="/validar/pago" method="post" enctype="multipart/form-data">
            @csrf
            <div >
                <input  class="botonespeque" type="number" name="nombre" placeholder=" ID"><br><br>  
            </div>
            <div >
                <input class="botonespeque" type="number" name="password"  placeholder=" Monto" ><br>   
            </div><br><br>

            <button id="boton" class="form-control rounded-pill pr-5" type="submit">Imprimir</button>
        </form>
           
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

<style type="text/css">	
    
    .botonespeque{
        width : 150px;
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        border-radius:10px;
        border: 3px solid #000000;
        
    }
		</style>
