<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\recetas;
use App\Models\citas;


class usuarios extends Authenticatable
{
    use HasFactory;

    protected $fillable=['nombres', 'apellidos', 'telefono', 'correo', 'contraseña', 'especialidad','rol'];
    public $timestamps = true;

    public function recetas(){
        return $this->hasMany(recetas::class);
    }
    
    public function citas(){
        return $this->hasMany(citas::class);
    }
}
