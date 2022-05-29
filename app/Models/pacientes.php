<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\recetas;
use App\Models\citas;
use App\Models\pagos;

class pacientes extends Model
{
    use HasFactory;

    protected $fillable=['nombres', 'apellidos', 'telefono', 'edad', 'peso', 'sangre', 'direccion', 'correo'];
    public $timestamps = true;

    public function recetas(){
        return $this->hasMany(recetas::class);
    }

    public function citas(){
        return $this->hasMany(citas::class);
    }

    public function pagos(){
        return $this->hasMany(pagos::class);
    }
    
}
