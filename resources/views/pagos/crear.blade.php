@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')
<title>Nuevo Pago</title>
<div class="container" >
    <div>
        <h1 class="py-4">Nueva Recibo</h1>
        </div>
    <form action="/pagos/guardar" method="post" class="row justify-content-center">
        @csrf
        <div class="form-group col-md-3" >
            <br>
            <input type="date" value="2022-06-25" min="2022-06-30" max="2022-11-30" name="fecha" placeholder="Fecha"id="" class="form-control" style="border-radius:20px;" >
        </div>
        <div class="form-group col-md-3">
            <br>
            <input type="text" name="costo" placeholder="Costo" id="" class="form-control" style="border-radius:20px;">   
        </div>
        <div class="form-group col-md-3">
            Paciente
            <select name="paciente_id" class="form-control" style="border-radius:20px;">
            @foreach ($paciente as $pacientes)
                <option value="{{$pacientes['id']}}">{{$pacientes['nombres']}}</option>
            @endforeach
            </select>
        </div>
        
        <div class="form-group col-md-12" style="padding-top:20px;">
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                    <input type="submit" value="Guardar" id="boton" class="form-control rounded-pill pr-5">
                </div>
            </div>
        </div>
        
        
    </form>
</div>
@endsection