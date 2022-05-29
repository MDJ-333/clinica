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
<title>Editar Cita</title>
    <div class="container">
        <div>
            <h1>Editar Cita # {{$idUsu['id']}} </h1>
        </div>
    
    <form action="/citas/actualizar/{{$idUsu['id']}}" method="post" class="row justify-content-center"  style="padding-top:30px;">
        @method('put')
        @csrf
        <div class="form-group col-md-2">
            <input type="time" name="hora" value="{{$idUsu['hora']}}" id="" placeholder="Hora" class="form-control" style="border-radius:20px;" >
        </div>
        <div class="form-group col-md-2">
            <input type="date" value="{{$idUsu['fecha']}}" min="2022-06-30" max="2022-11-30" name="fecha" placeholder="Fecha"id="" class="form-control" style="border-radius:20px;" >
        </div>

        </select>
        <div  class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <input type="submit" value="Guardar" id="boton" class="form-control rounded-pill pr-5">
            </div>
        </div>
    </form>
    </div>
@endsection