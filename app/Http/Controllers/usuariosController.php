<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Gate;

class usuariosController extends Controller
{
    
    public function index()
    {
        /*if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }*/
        $datos['usuario']=usuarios::paginate(100);
       return view("usuarios.index",$datos);
    }

    public function create()
    {
        /*if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }*/
        return view("usuarios.crear");
    }

    public function guardar(Request $request)
    {
        /*if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }*/
        $datosUsuarios = $request->all();
        
        if ($datosUsuarios['contraseña'] != $datosUsuarios['contraseña2'])
            return redirect()->back()->with('mensaje','La contraseña no coincide');

        $datosUsuarios['contraseña']=Hash::make($datosUsuarios['contraseña']);
        $registro = new Usuarios();
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect("/usuarios")->with('mensaje', 'Usuario agregado correctamente');
    }

    public function show($id)
    {
        $idUsu = usuarios::find($id);
        return view("usuarios.mostrar", compact('idUsu'));
    }

    public function edit($id)
    {
        if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }
        $idUsu = usuarios::find($id);
        return view("usuarios.editar", compact('idUsu'));
    }

    public function update(Request $request, $id)
    {
        if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }
        $datosUsuarios = usuarios::find($id);
        $datosUsuarios->nombres = $request->input('nombres');
        $datosUsuarios->apellidos = $request->input('apellidos');
        $datosUsuarios->correo = $request->input('correo');
        $datosUsuarios->telefono = $request->input('telefono');
        $datosUsuarios->save();
        return redirect('usuarios');
    }

   
    public function destroy($id)
    {
        if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }
        usuarios::destroy($id);
        return redirect('/usuarios');
    }

    public function editContraseña(Request $request, $id)
    {
        if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }
        $idUsu = usuarios::find($id);
        return view("usuarios.restablecer", compact('idUsu')); 
    }

    public function restablecer(Request $request, $id)
    {
        if(! Gate::allows('entrar-a-crud-usuarios'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder a esta vista');
       }
        $datosUsuarios = $request->all();
        if ($datosUsuarios['contraseña'] != $datosUsuarios['contraseña2'])
            return redirect()->back()->with('mensaje','La contraseña no coincide');

        $datosUsuarios['contraseña']=Hash::make($datosUsuarios['contraseña']);
        $registro = usuarios::find($id);
        $registro->fill($datosUsuarios);
        $registro->save();
        return redirect('usuarios');
    }
}
