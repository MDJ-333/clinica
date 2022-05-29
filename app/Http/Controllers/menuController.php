<?php

namespace App\Http\Controllers;
use App\Models\usuarios;
use App\Models\citas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class menuController extends Controller
{
    public function index(){
        return view("menus.index");
    }
    public function administrador(){
        if(! Gate::allows('entrar-a-dashboarh'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder');
       }
        return view("dashboard.administrador");
    }

    public function doctor(){
        if(! Gate::allows('entrar-a-doctor'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder');
       }
        return view("dashboard.doctor");
    }

    public function recepcion(){
        if(! Gate::allows('entrar-a-recepcion'))
       {
           return redirect('/inicio')->with('error', 'No cuentas con los permisos necesarios para acceder');
       }
        return view("dashboard.recepcion");
    }
    
    public function registrar(){
        //return view("menus.registrar");
    }
    public function pagar(){
        //return view("menus.pagar");
    }
    //autentificar al usuario
    public function validar(Request $request){

        $correo = $request->input('correo');
        $usuario = usuarios::where('correo',$correo)->first();
        if(is_null($usuario))
            return redirect('/')->with('error', 'Correo no identificado');

        else{
            $password = $request->input('contraseña');
            $password_bd = $usuario->contraseña;
            if (Hash::check($password, $password_bd)){
                Auth::login($usuario);
                /*if($usuario->rol == 'Administrador')
                    return redirect('/dashboard');
                else if($usuario->rol == 'Doctor')
                    return redirect('/doctor');
                else if($usuario->rol == 'Recepcion')
                    return redirect('/recepcion');*/
                    return redirect('inicio');
            }else
                return redirect('/')->with('error','Contraseña Incorrectar');
        }
    }
    //cerrar secion
    public function salir(){
        Auth::logout();
        return redirect('/');
    }

    public function inicio(){
        if(! Gate::allows('entrar-a-crud-citas'))
       {
           return redirect('/')->with('error', 'No cuentas con los permisos necesarios para acceder por favor inicia sesion');
       }
        return view('menus.inicio');
    }

    public function comprobar(){
       $rol = Auth::user()->rol;
        if($rol == 'Administrador')
            return redirect('/dashboard');
        else if($rol == 'Doctor')
            return redirect('/doctor');
        else if($rol == 'Recepcion')
            return redirect('/recepcion');
        else
        return redirect('/')->with('error','No se a establecido un rol para este perfil');
    }
    /*Pruebas generales de diseño*/
    public function pruebas()
    {
        $datos['cita']=citas::paginate(100);
       return view("menus.prueba",$datos);
    }
}
