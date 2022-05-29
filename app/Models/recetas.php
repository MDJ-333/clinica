<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\pacientes;

class recetas extends Model
{
    use HasFactory;

    protected $fillable=['paciente_id', 'diagnostico', 'fecha', 'hora', 'tratamiento', 'usuarios_id'];
    public $timestamps = true;

    public function pacientes(){
        return $this->belongsTo(pacientes::class);
    }

    public function usuarios(){
        return $this->belongsTo(usuarios::class);
    }
    
}
