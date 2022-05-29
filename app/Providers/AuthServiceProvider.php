<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

use App\Models\usuarios;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        //permisos de acceso a dahsboardar de administrador
        $this->registerPolicies();
        Gate::define('entrar-a-dashboarh',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Administrador'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos de acceso a dahsboardar de doctor
        $this->registerPolicies();
        Gate::define('entrar-a-doctor',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Doctor'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos de acceso a dahsboardar de recepcion
        $this->registerPolicies();
        Gate::define('entrar-a-recepcion',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Recepcion'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos de usuarios
        $this->registerPolicies();
        Gate::define('entrar-a-crud-usuarios',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Administrador'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos de citas
        $this->registerPolicies();
        Gate::define('entrar-a-crud-citas',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Administrador' or $logeado->rol == 'Recepcion' or $logeado->rol == 'Doctor'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos de pacientes
        $this->registerPolicies();
        Gate::define('entrar-a-crud-pacientes',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Administrador' or $logeado->rol == 'Recepcion' or $logeado->rol == 'Doctor'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        //permisos para todos los usuarios reistrados
        $this->registerPolicies();
        Gate::define('general',function (usuarios $logeado)
        {
            $puede = null;

            if($logeado->rol == 'Administrador' or $logeado->rol == 'Recepcion' or $logeado->rol == 'Doctor'){
                $puede = true;
            }else{
                $puede = false;
            }
            return $puede;
        });
        
        
    }
}
