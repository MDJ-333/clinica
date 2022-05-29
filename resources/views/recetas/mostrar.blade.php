@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')
<title>Mostrar Receta</title>
    <div class="container">
        <div>
            <h1>Receta #{{$idUsu['id']}}</h1>
            <br>
        </div>
    
    <form action="/recetas/imprimir" method="post"  class="row justify-content-center">
        @csrf
            
            <div class="form-group col-md-2" >
                <input type="time" name="hora" value="{{$idUsu['hora']}}" id="" class="form-control" disabled style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2" >
                <input type="date" name="fecha" value="2022-06-25" min="2022-06-30" max="2022-11-30"  disabled value="{{$idUsu['fecha']}}" id="" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-3" >

            </div>
            
        </div> 


        <div class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <input type="text" name="diagnostico" id="" value="{{$idUsu['diagnostico']}}" disabled class="form-control" style="border-radius:20px;" >
                </div>
            </div>
        </div>
        <div class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <input type="text" name="tratamiento" id="" value="{{$idUsu['tratamiento']}}" disabled class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        

        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">

                </div>
                <div class="form-group col-md-2">
                    <input type="submit" value="Imprimir" id="boton" class="form-control rounded-pill pr-5" disabled>
                </div>
                
            </div>
        </div>
        
        
    </form>
    </div>
@endsection