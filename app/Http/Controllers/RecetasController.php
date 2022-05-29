<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pacientes;
use App\Models\usuarios;
use App\Models\recetas;
use App\Models\doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class RecetasController extends Controller
{
    public function index()
    {
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $datos['receta']=recetas::paginate(100);
       return view("recetas.index",$datos);
    }

    public function create()
    {
        if(! Gate::allows('entrar-a-doctor'))
        {
            return redirect('/recetas')->with('error', 'Inicie sesion');
        }
        $datos['paciente']=pacientes::paginate(100);
        $datos2['usuario']=usuarios::paginate(100);
        return view("recetas.crear",$datos,$datos2);
    }

    

    public function guardar(Request $request)
    {
        if(! Gate::allows('entrar-a-doctor'))
        {
            return redirect('/recetas')->with('error', 'Inicie sesion');
        }
        $datosUsuarios = $request->all();
        $registro = new recetas();
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect("/recetas")->with('mensaje', 'Usuario agregado correctamente');
    }

    public function show($id)
    {
        
        if(! Gate::allows('general'))
        {
            return redirect('/')->with('error', 'Inicie sesion');
        }
        $idUsu = recetas::find($id);
        return view("recetas.mostrar", compact('idUsu'));
    }

}
