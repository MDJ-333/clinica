@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')
<title>Mostrar Pago</title>
<div class="container" >
    <div>
        <h1 class="py-4">Pago #{{$idUsu['id']}}</h1>
        </div>
    <form action="/pagos/guardar" method="post" class="row justify-content-center">
        @csrf
        <div class="form-group col-md-3" >
            <input type="text" name="fecha" id="" value="{{$idUsu['estatus']}}" class="form-control" style="border-radius:20px;"disabled>
        </div>
        <div class="form-group col-md-3" >
            <input type="text" name="costo" id="" value="{{$idUsu['estatus']}}" class="form-control" style="border-radius:20px;"disabled>
        </div>
        <div class="form-group col-md-3">
            <input type="text" name="paciente_id" id="" value="{{$idUsu['cita_id']}}" class="form-control" style="border-radius:20px;"disabled>
        </div>
        
    </form>
</div>
@endsection