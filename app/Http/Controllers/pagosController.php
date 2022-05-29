<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\citas;
use App\Models\pagos;
use App\Models\pacientes;
use Illuminate\Support\Facades\Gate;

class pagosController extends Controller
{
    
    public function index()
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $datos['pago']=pagos::paginate(100);
       return view("pagos.index",$datos);
    }

    
    public function create()
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $datos2['paciente']=pacientes::paginate(100);
        return view("pagos.crear",$datos2);
    }

    
    public function guardar(Request $request)
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $datosUsuarios = $request->all();
        $registro = new pagos();
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect("/pagos")->with('mensaje', 'Usuario agregado correctamente');
    }

    
    public function show($id)
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $idUsu = pagos::find($id);
        return view("pagos.mostrar", compact('idUsu'));
    }

    
    public function edit($id)
    {
        
    }

    
    public function update(Request $request, $id)
    {
    
    }

    public function destroy($id)
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        pagos::destroy($id);
        return redirect('/pagos');
    }
}
