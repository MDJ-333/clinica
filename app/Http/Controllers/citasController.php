<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\pacientes;
use App\Models\usuarios;
use App\Models\recetas;
use App\Models\doctor;
use App\Models\citas;


class citasController extends Controller
{
    
    public function index()
    {
        if(! Gate::allows('entrar-a-crud-citas'))
       {
           return redirect('/')->with('error', 'No cuentas con los permisos necesarios para acceder por favor inicia sesion');
       }
        $datos['cita']=citas::paginate(100);
       return view("citas.index",$datos);
    }

    
    public function create()
    {
        if(! Gate::allows('entrar-a-recepcion'))
       {
           return redirect('/citas')->with('error', 'No cuentas con los permisos necesarios para realizar la acción');
       }
        $datos['paciente']=pacientes::paginate(100);
        $datos2['usuario']=usuarios::paginate(100);
        return view("citas.crear",$datos,$datos2);
    }

    
    public function guardar(Request $request)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/citas')->with('error', 'No cuentas con los permisos necesarios para realizar la acción');
        }
        $datosUsuarios = $request->all();
        $registro = new citas();
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect("/citas")->with('mensaje', 'Usuario agregado correctamente');
    }

    public function show($id)
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $idUsu = citas::find($id);
        return view("citas.mostrar", compact('idUsu'));
    }

    public function edit($id)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/citas')->with('error', 'No cuentas con los permisos necesarios para realizar la acción');
        }
        $idUsu = citas::find($id);
        return view("citas.editar", compact('idUsu'));
    }

    
    public function update(Request $request, $id)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/citas')->with('error', 'No cuentas con los permisos necesarios para realizar la acción');
        }
        $datosUsuarios = citas::find($id);
        $datosUsuarios->hora = $request->input('hora');
        $datosUsuarios->fecha = $request->input('fecha');
        $datosUsuarios->save();
        return redirect('/citas');
    }

    public function destroy($id)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/citas')->with('error', 'No cuentas con los permisos necesarios para realizar la acción');
        }
        citas::destroy($id);
        return redirect('/citas');
    }

}
