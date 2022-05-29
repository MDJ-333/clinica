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
<title>Nuevo Paciente</title>
<div class="container">
    <div>
    <h1>Nuevo Paciente</h1>
        </div>
    <form action="/pacientes/guardar" method="post" enctype="multipart/form-data" class="row justify-content-center">
        @csrf
        <div class="form-group col-md-3">
            <input type="text" name="nombres" id="" placeholder="Nombres" class="form-control" style="border-radius:20px;">
        </div>
        <div class="form-group col-md-4">
            <input type="text" name="apellidos" id="" placeholder="Apellidos" class="form-control" style="border-radius:20px;">
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="number" name="telefono" id="" maxlength="12" placeholder="Telefono" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="edad" id="" placeholder="Edad" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-2">
                    <input type="number" name="peso" id="" placeholder="Peso" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="text" name="sangre" id="" placeholder="Tipo de Sangre" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-4">
                    <input type="text" name="correo" id=""placeholder="Correo" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        
        
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-7">
                    <textarea name="direccion" id="" rows="4" placeholder="Dirección" class="form-control" style="border-radius:20px;"></textarea>
                </div>
            </div>
        </div>
        
        <div  class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="submit" value="Guardar" id="boton" class="form-control rounded-pill pr-5">
                </div>
            </div>
        </div>
        
        
    </form>
    </div>
@endsection