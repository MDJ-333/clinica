@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')
<title>Nueva Cita</title>
    <div class="container">
        <div>
            <h1>Nueva cita</h1>
            <br>
        </div>
  
    <form action="/citas/guardar" method="post"  class="row justify-content-center">
        @csrf

            <div class="form-group col-md-2">
                <input type="time" name="hora" placeholder="Hora" id="" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2">
                <input type="date" value="2022-06-25" min="2022-06-30" max="2022-11-30" name="fecha" placeholder="Fecha"id="" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="pago" placeholder="Costo" id="" class="form-control" style="border-radius:20px;">
            </div>
            <br><br>
        <div class="form-group col-md-12" >
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    Paciente <select name="paciente_id" class="form-control" style="border-radius:50px;">
                    @foreach ($paciente as $pacientes)
                        <option value="{{$pacientes['id']}}">{{$pacientes['nombres']}}</option>
                    @endforeach	
                    </select>
                </div>
                <div class="form-group col-md-3">
                        Doctor <select name="usuarios_id"  class="form-control" style="border-radius:20px;">
                        @foreach ($usuario as $usuarios)
                        <option value="{{$usuarios['id']}}">{{$usuarios['nombres']}}</option>
                        @endforeach
                        </select>
                </div>
            </div> 
        </div> 


        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <textarea name="sintomas" placeholder="Describe los Sintomas" id="" rows="5" class="form-control" style="border-radius:20px;"></textarea>
                </div>
            </div>
        </div>

        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <input type="submit" value="Crear" id="boton" class="form-control rounded-pill pr-5">
            </div>
        </div>
        
    </form>
    </div>
@endsection