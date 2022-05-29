@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')

@if (session('mensaje'))
<div>
    <div class="alert alert-primary" role="alert">
    {{ session('mensaje')}}
    </div>
</div>
<br>
@endif
<title>Editar Paciente</title>
<div class="container">
    <div>
    <h1>Editar Paciente # {{$idUsu['id']}} </h1>
        </div>
    <form action="/pacientes/actualizar/{{$idUsu['id']}}" method="post" enctype="multipart/form-data" class="row justify-content-center">
         @method('put')
        @csrf
        <div class="form-group col-md-3">
            <input type="text" name="nombres" id=""  value="{{$idUsu['nombres']}}"placeholder="Nombres" class="form-control" style="border-radius:20px;">
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="apellidos" id=""  value="{{$idUsu['apellidos']}}" placeholder="Apellidos" class="form-control" style="border-radius:20px;">
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="number" name="telefono" id="" value="{{$idUsu['telefono']}}" maxlength="12" placeholder="Telefono" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="edad" id="" value="{{$idUsu['edad']}}" placeholder="Edad" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="peso" id="" value="{{$idUsu['peso']}}" placeholder="Peso" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="text" name="sangre" id="" value="{{$idUsu['sangre']}}" placeholder="Tipo de Sangre" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="correo" value="{{$idUsu['correo']}}" id=""placeholder="Correo" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        
        
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-7">
                    <input name="direccion" id="" rows="4" value="{{$idUsu['direccion']}}" placeholder="Dirección" class="form-control" style="border-radius:20px;">
                    
                </div>
            </div>
        </div>
        
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="submit" value="Actualizar" id="boton" class="form-control rounded-pill pr-5">
                </div>
            </div>
        </div>
        
        
    </form>
    </div>

@endsection