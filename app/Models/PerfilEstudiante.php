<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerfilEstudiante extends Model
{
    use HasFactory;

    protected $table = 'perfil_estudiante';

    protected $fillable = [
        'usuario_id',
        'movil',
        'profesion',
        'institucion',
        'estudia_actualmente',
        'semestre',
        'carrera',
        'trabaja_actualmente',
        'nombre_empresa',
        'cargo',
        'busca_pasantia',
        'password_temp',
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }
}
