<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre_sorteo',
        'email',
        'nombre_apellido',
        'numero_matricula',
        'telefono',
        'dni',
    ];

    // Relación con el modelo Sorteo
    public function sorteo()
    {
        return $this->belongsTo(Sorteo::class);
    }

}
