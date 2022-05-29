@extends('plantilla.cabecera')
@section('content')
@if (session('error'))
<div>
    <div class="alert alert-danger" role="alert">
    {{ session('error')}}
    </div>
</div>
@endif 
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
   <main class="form-signin">

        <form action="/validar" method="post" >
            @csrf
            <h1>Iniciar Sesión</h1><br>
            <div >
                <input id="formulario" type="email" name="correo" class="form-control rounded-pill pr-5" id="floatingInput" placeholder="correo"><br><br>  
            </div>
            <div >
                <input id="formulario" type="password" name="contraseña" class="form-control rounded-pill pr-5" id="floatingPassword" placeholder="contraseña" ><br>   
            </div>

            <button id="boton" class="form-control rounded-pill pr-5" type="submit">Enviar</button>
        </form>
    </main>
</body>
</html>
@endsection

