<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFile extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'nombre_apellido',
        'cv_pdf',
        'dni_image',
        'titulo_universitario_pdf',
        'titulo_posgrado_pdf',
        'matricula_provincial_pdf',
        'constancia_ingresos_brutos_pdf',
        'constancia_cuit_pdf',
        'certificado_inscripcion_superintendencia_salud_pdf',
        'poliza_seguro_mala_praxis_pdf',
        'habilitacion_consultorio_pdf',
    ];

    // Relación con el modelo User (tabla de usuarios)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}