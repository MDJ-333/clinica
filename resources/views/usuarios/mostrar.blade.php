@extends('plantilla.cabecera')
@section('title')
	Editar 
@endsection 
@if (session('mensaje'))
<div>
    <div class="alert alert-primary" role="alert">
    {{ session('mensaje')}}
    </div>
</div>
<br>
@endif
@section('content')
    <title>Mostrar Usuario</title>
    <div class="container" >
    <div>
        <h1 class="py-4">Doctor #{{$idUsu['id']}}</h1>
        </div>
        <form action="" method="" class="row justify-content-center">
            @method('put')
            @csrf
            <div class="form-group col-md-3">
                <input type="text" name="nombres" id=""value="{{$idUsu['nombres']}}" class="form-control" style="border-radius:20px;" disabled>
            </div>
            <div class="form-group col-md-3">
                <input type="text" name="apellidos" id=""value="{{$idUsu['apellidos']}}" class="form-control" style="border-radius:20px;" disabled>
            </div>
            <div class="form-group col-md-12" style="padding-top:20px;">
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                        <input type="email" name="correo" id=""value="{{$idUsu['correo']}}" class="form-control" style="border-radius:20px;" disabled>
                    </div>
                    <div class="form-group col-md-3">
                        <input type="number" name="telefono" id=""value="{{$idUsu['telefono']}}" class="form-control" style="border-radius:20px;" disabled>
                    </div>
                </div>
            </div>
            
        </form>
    </div>
@endsection