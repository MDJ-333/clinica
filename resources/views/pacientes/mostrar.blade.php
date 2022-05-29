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
<title>Mostrar Paciente</title>
<div class="container">
    <div>
    <h1>Paciente # {{$idUsu['id']}} </h1>
        </div>
    <form action="/pacientes/actualizar/{{$idUsu['id']}}" method="post" enctype="multipart/form-data" class="row justify-content-center">
         @method('put')
        @csrf
        <div class="form-group col-md-3">
            <input type="text" name="nombres" id=""  value="{{$idUsu['nombres']}}"placeholder="Nombres" class="form-control" style="border-radius:20px;" disabled>
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="apellidos" id=""  value="{{$idUsu['apellidos']}}" placeholder="Apellidos" class="form-control" style="border-radius:20px;" disabled>
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="number" name="telefono" id="" value="{{$idUsu['telefono']}}" maxlength="12" placeholder="Telefono" class="form-control" style="border-radius:20px;" disabled>
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="edad" id="" value="{{$idUsu['edad']}}" placeholder="Edad" class="form-control" style="border-radius:20px;" disabled>
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="peso" id="" value="{{$idUsu['peso']}}" placeholder="Peso" class="form-control" style="border-radius:20px;" disabled>
                </div>
            </div>
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="text" name="sangre" id="" value="{{$idUsu['sangre']}}" placeholder="Tipo de Sangre" class="form-control" style="border-radius:20px;" disabled>
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="correo" value="{{$idUsu['correo']}}" id=""placeholder="Correo" class="form-control" style="border-radius:20px;" disabled>
                </div>
            </div>
        </div>
        
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-7">
                    <input name="direccion" id="" rows="4" value="{{$idUsu['direccion']}}" placeholder="Dirección" class="form-control" style="border-radius:20px;" disabled>
                    
                </div>
            </div>
        </div>

        <div class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
               
                <div class="form-group col-md-3">
                    Ver Registro del Paciente:
                    <a class="" href="/pacientes/registro/{{$idUsu['id']}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="Black" class="bi bi-card-list" viewBox="0 0 16 16">
                            <path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                            <path d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-1-5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM4 8a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm0 2.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </form>
    </div>

@endsection