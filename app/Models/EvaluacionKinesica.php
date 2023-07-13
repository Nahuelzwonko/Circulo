<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluacionKinesica extends Model
{
    use HasFactory;

    protected $table = 'evaluacion_kinesica';

    protected $fillable = [
        'user_id',
        'nombre',
        'edad',
        'genero',
        'direccion',
        'telefono',
        'contacto',
        'motivo',
        'historia',
        'evaluacion',
        'examen',
        'diagnostico',
        'objetivos',
        'plan',
        'seguimiento',
        'conclusiones',
    ];

    // Relación con el usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}