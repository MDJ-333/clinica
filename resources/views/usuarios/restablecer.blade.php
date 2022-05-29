@extends('plantilla.cabecera')
@section('title')
	Editar 
@endsection 
@section('content')
@if (session('mensaje'))
<div>
    <div class="alert alert-primary" role="alert">
    {{ session('mensaje')}}
    </div>
</div>

@endif
    <title>Restablecer Contraseña</title>
    <div class="container">
    <div>
        <h2>Editar Contraseña de: {{$idUsu['nombres']}} </h2><br>
    </div>
    <form action="/usuarios/actualizar/contraseña/{{$idUsu['id']}}" method="post" class="row justify-content-center">
        @method('put')
        @csrf
        <div class="form-group col-md-3">
            <input type="password" name="contraseña" placeholder="Nueva Contraseña" id="" class="form-control" style="border-radius:20px;"><br>
        </div>
        <div class="form-group col-md-3">
            <input type="password" name="contraseña2"  placeholder="Confirmar Contraseña" id="" class="form-control" style="border-radius:20px;"><br>
        </div>
        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="submit" value="Guardar" id="boton" class="form-control rounded-pill pr-5"> 
                </div>
            </div>
        </div>
    </form>
    </div>
@endsection