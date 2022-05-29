@extends('plantilla.cabecera')
@section('title')
	Nuevo
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Recetas</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.4/jspdf.min.js"></script>
</head>

<script>
    function pdfexport(){

        
        var ltitle = document.getElementById('tl').innerText,
            lname = document.getElementById('nompac').innerText,
            lhora = document.getElementById('hor').innerText,
            lfecha = document.getElementById('fec').innerText,
            ldiagno = document.getElementById('diag').innerText,
            ltratam = document.getElementById('tram').innerText,
            ldoctor = document.getElementById('doctl').innerText;

            var doc = new jsPDF();
            doc.setFontSize(22);
            doc.text(ltitle, 20, 10);
            doc.setFontSize(15);
            doc.text(lname, 20, 10);
            doc.text(lhora, 20, 10);
            doc.text(lfecha, 20, 10);   
            doc.text(ldiagno, 20, 10);
            doc.text(ltratam, 20, 10);
            doc.text(ldoctor, 20, 10);

    }
    
</script>

    <div class="container">
        <div>
            <h1 id="tl"> Receta Médica</h1>
            <br>
        </div>
    
    <form action="/recetas/guardar" method="post"  class="row justify-content-center">
        @csrf
            <div class="form-group col-md-12" >
                <div class="row justify-content-center">
                    <div class="form-group col-md-3">
                    Nombre del Paciente <select id="nompac" name="paciente_id" class="form-control" style="border-radius:50px;">
                    @foreach ($paciente as $pacientes)
                        <option value="{{$pacientes['id']}}">{{$pacientes['nombres']}}</option>
                    @endforeach	
                    </select>
                    </div>
                    <div class="form-group col-md-2">
                    </div>
                    <div class="form-group col-md-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="red" class="bi bi-heart-pulse-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.475 9C2.702 10.84 4.779 12.871 8 15c3.221-2.129 5.298-4.16 6.525-6H12a.5.5 0 0 1-.464-.314l-1.457-3.642-1.598 5.593a.5.5 0 0 1-.945.049L5.889 6.568l-1.473 2.21A.5.5 0 0 1 4 9H1.475ZM.879 8C-2.426 1.68 4.41-2 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C11.59-2 18.426 1.68 15.12 8h-2.783l-1.874-4.686a.5.5 0 0 0-.945.049L7.921 8.956 6.464 5.314a.5.5 0 0 0-.88-.091L3.732 8H.88Z"/>
                        </svg><br>
                        clinica
                    </div>
                </div>
            </div> 
            <div class="form-group col-md-2" >
                <input id="hor" type="time" name="hora" placeholder="Hora"  class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-2" >
                <input iid="fec"type="date" name="fecha" value="2022-06-25" min="2022-06-30" max="2022-11-30"  placeholder="Fecha" class="form-control" style="border-radius:20px;" >
            </div>
            <div class="form-group col-md-5" >

            </div>
            
        </div> 


        <div class="form-group col-md-12" style="padding-top:10px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <input id="diag" type="text" name="diagnostico"  class="form-control" style="border-radius:20px;" placeholder="Diagnostico">
                </div>
            </div>
        </div>
        <div class="form-group col-md-12" style="padding-top:5px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-6 " >
                    <textarea id="tram" name="tratamiento" placeholder="Recetar"  rows="5" class="form-control" style="border-radius:20px;"></textarea>
                </div>
            </div>
        </div>
        
        <input type="hidden" name="usuarios_id" id="doctl" value="{{Auth::user()->id}}">

        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3">

                </div>
                <div class="form-group col-md-2">
                    <input type="submit" value="Guardar" id="boton" class="form-control rounded-pill pr-5">
                </div>
                
            </div>
        </div>
        
        
    </form>
    </div>
    </html>
@endsection
<style type="text/css">	
    
    .contenido{
        border-radius:30px;
        margin:0px auto;
        float:center;
        width: 100%;
        max-width: 870px;
        height:200px;
        background: #ffffff;
        border: 3px solid #959292;
        padding: 10px;  
    }
    .contenido2{
        border-radius:30px;
        margin:0px auto;
        float:center;
        width: 100%;
        max-width: 870px;
        height:350px;
        background: #ffffff;
        border: 3px solid #959292;
        padding: 10px;  
    }
		</style>