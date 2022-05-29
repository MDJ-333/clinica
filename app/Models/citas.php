<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\usuarios;
use App\Models\pacientes;
use App\Models\pagos;

class citas extends Model
{
    use HasFactory;
    protected $fillable=['hora', 'fecha', 'sintomas' ,'pago','usuarios_id', 'paciente_id'];
    public $timestamps = true;

    public function usuarios(){
        return $this->belongsTo(usuarios::class);
    }

    public function pacientes(){
        return $this->belongsTo(pacientes::class);
    }
    public function pagos(){
        return $this->hasOne(pagos::class);
    }
    
}
