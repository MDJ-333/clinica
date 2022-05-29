<?php

namespace App\Http\Controllers;
use App\Models\pacientes;
use App\Models\recetas;
use App\Models\citas;
use App\Models\pagos;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
     
    public function index()
    {
        if(! Gate::allows('entrar-a-crud-pacientes'))
       {
           return redirect('/')->with('error', 'Inicie sesion');
       }
        $datos['paciente']=pacientes::paginate(100);
       return view("pacientes.index",$datos);
    }

    public function create()
    {
        if(! Gate::allows('entrar-a-recepcion'))
       {
           return redirect('/pacientes')->with('error', 'No cuenta con los permios necesarios para realizar la acción');
       }
        return view("pacientes.crear");
    }

    public function guardar(Request $request)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/pacientes')->with('error', 'No cuenta con los permios necesarios para realizar la acción');
        }
        $datosUsuarios = $request->all();
        $registro = new pacientes();
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect("/pacientes")->with('mensaje', 'Usuario agregado correctamente');
    }

    
    public function edit($id)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/pacientes')->with('error', 'No cuenta con los permios necesarios para realizar la acción');
        }
        $idUsu = pacientes::find($id);
        return view("pacientes.editar2", compact('idUsu'));
    }

    public function update(Request $request, $id)
    {
        if(! Gate::allows('entrar-a-recepcion'))
        {
            return redirect('/pacientes')->with('error', 'No cuenta con los permios necesarios para realizar la acción');
        }
        $datosUsuarios = pacientes::find($id);
        $datosUsuarios->nombres = $request->input('nombres');
        $datosUsuarios->apellidos = $request->input('apellidos');
        $datosUsuarios->telefono = $request->input('telefono');
        $datosUsuarios->edad = $request->input('edad');
        $datosUsuarios->peso = $request->input('peso');
        $datosUsuarios->sangre = $request->input('sangre');
        $datosUsuarios->direccion = $request->input('direccion');
        $datosUsuarios->correo = $request->input('correo');
        
        $datosUsuarios->save();
        return redirect('pacientes');
    }

    public function show($id)
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $idUsu = pacientes::find($id);
        return view("pacientes.mostrar", compact('idUsu'));
    }

    public function registros($id){

        $datos['registro']=recetas::where('paciente_id',$id)
                                    ->get();
        $datos2['cita']=citas::where('paciente_id',$id)
                                    ->get();
        $datos3['pago']=pagos::where('paciente_id',$id)
                                    ->get();
        return view('menus.registros',$datos,$datos2,$datos3);
        
    }
}
