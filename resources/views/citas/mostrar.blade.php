@extends('plantilla.cabecera')
@section('title')
	Vizualizar
@endsection

@section('content')
<title>Mostrar Cita</title>
    <div class="container">
        <div>
            <h1>Informacion Cita #{{$idUsu['id']}}</h1>
            <br>
        </div>
  
    <form action="" method=""  class="row justify-content-center">
        @csrf
            <div class="form-group col-md-2">
                <input type="time" name="hora" value="{{$idUsu['hora']}}" disabled id="" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2">
                <input type="date" value="{{$idUsu['fecha']}}" disabled min="2022-06-30" max="2022-11-30" name="fecha" id="" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="pago" value="{{$idUsu['pago']}}" disabled id="" class="form-control" style="border-radius:20px;">
            </div>
            <br><br>

        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <input name="sintomas" value="{{$idUsu['sintomas']}}" disabled id="" rows="5" class="form-control" style="border-radius:20px;">
                    </div>
            </div>
        </div>

        <div class="form-group col-md-12" >
            <div class="row justify-content-center">
               
                <div class="form-group col-md-3">
                    Paciente_id
                    <input type="text" name="paciente"  id="" class="form-control" style="border-radius:20px;" value="{{$idUsu['paciente_id']}}" disabled>
                    <a class="" href="/pacientes/mostrar/{{$idUsu['paciente_id']}}">
                        <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Black" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                    </a>
                </div>
                
                <div class="form-group col-md-3">
                    Doctor_id
                    <input type="text" value="{{$idUsu['usuarios_id']}}" disabled  id="" class="form-control" style="border-radius:20px;">
                    <a class="" href="/usuarios/mostrar/{{$idUsu['usuarios_id']}}">
                       
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="Black" class="bi bi-eye-fill" viewBox="0 0 16 16">
                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                        </svg>
                        
                    </a>   
                    
                </div>

            </div> 
        </div> 

        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <a id="boton" class="form-control rounded-pill pr-5" href="/citas">Regresar</a>
            </div>
        </div>
        
    </form>
    </div>
@endsection
