<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\citas;
use App\Models\pacientes;

class pagos extends Model
{
    use HasFactory;
    protected $fillable=['fecha', 'costo','paciente_id'];
    public $timestamps = true;

    public function citas(){
        return $this->belongsTo(citas::class);
    }

    public function pacientes(){
        return $this->belongsTo(pacientes::class);
    }
}
