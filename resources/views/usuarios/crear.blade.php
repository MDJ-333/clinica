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
    <title>Nuevo Usuario</title>
    <div class="container">
        <div>
            <h1 class="py-4">Nuevo Usuario</h1>
        </div>
        <form action="/usuarios/guardar" method="post" enctype="multipart/form-data" class="row justify-content-center">
        @csrf
        <div class="form-group col-md-3">
            <input type="text" placeholder="Nombres" name="nombres" id="" class="form-control" style="border-radius:20px;">
        </div>
        <div class="form-group col-md-3">
            <input type="text" placeholder="Apellidos"name="apellidos" id="" class="form-control" style="border-radius:20px;">
        </div >
        
        <div class="form-group col-md-12" style="padding-top:20px;" >
            <div class="row justify-content-center">
                <div class="form-group col-md-3">
                    <input type="number" placeholder="Telefono" name="telefono" id="" class="form-control" maxlength="12" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-3">
                    <input type="email" placeholder="Correo"name="correo" id="" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        <div class="form-group col-md-12" style="padding-top:20px;">
            <div class="row justify-content-center">
                <div class="form-group col-md-3" >
                    <input type="password" placeholder="Contraseña" name="contraseña" id="" class="form-control" style="border-radius:20px;">
                </div>
                <div class="form-group col-md-3">
                    <input type="password" placeholder="Confirmar Contraseña" name="contraseña2" id="" class="form-control" style="border-radius:20px;">
                </div>
            </div>
        </div>
        
       <div class="form-group col-md-12" style="padding-top:5px;">
          <div class="row justify-content-center">
            <div class="form-group col-md-3" >
            Especialidad:
            <select name="especialidad" class="form-control " style="border-radius:20px;">
                <option value="Ninguna">Ninguna</option>
                <option value="Cardiologia">Cardiologia</option>
                <option value="Cirugía Pediátrica">Cirugía Pediátrica</option>
                <option value="Cirugía General">Cirugía General</option>
                <option value="Cirugía Plástica">Cardiologia</option>
                <option value="Dermatología">Dermatología</option>
                <option value="Endoscopia">Endoscopia</option>
                <option value="Gastroenterología">Gastroenterología</option>
                <option value="Ginegología">Ginegología</option>
                <option value="Hematología">Hematología</option>
                <option value="Infectología">Infectología</option>
                <option value="Medicina Interna">Medicina Interna</option>
                <option value="Nefrología">Nefrología</option>
                <option value="Neurología ">Neurología</option>
                <option value="Neumología">Neumología</option>
                <option value="Oftalmología">Oftalmología</option>
                <option value="Ortopedia">Ortopedia</option>
                <option value="Patología Clínica">Patología Clínica</option>
                <option value="Pediatría">Pediatría</option>
                <option value="Psiquiatría">Psiquiatría</option>
                <option value="Radiología">Radiología</option>
                <option value="Medicina Crítica">Medicina Crítica</option>
                <option value="Urología">Urología</option>
                <option value="Cardiología">Cardiología</option>
                <option value="Oncología Médica">Oncología Médica</option>
                <option value="Cirugía Neurológica">Cirugía Neurológica</option>
                <option value="otro">Otro</option>
                </select>
            </div>
            
            
            <div class="form-group col-md-3">
            Rol:
            <select name="rol" class="form-control" style="border-radius:20px;">
                <option value="Administrador">Administrador</option>
                <option value="Doctor">Doctor</option>
                <option value="Recepcion">Recepcion</option>
            </select>
            </div>
        </div>
        <div class="form-group col-md-12" style="padding-top:30px;">
            <div class="row justify-content-center">
            <input type="submit" id="boton" class="form-control rounded-pill pr-5" value="Guardar" class="form-group col-md-2">
            </div>
        </div>
        </div>
    </form>
    </div>
@endsection