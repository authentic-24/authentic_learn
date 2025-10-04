<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Foundation\Auth\User as Authenticatable;


class Usuario extends Authenticatable

{
    protected $table = 'usuarios';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;

    protected $casts = [
        'enabled' => 'bool',
        'id_empresa' => 'int'
    ];

    protected $hidden = [
        'confirmation_token',
        'password',
        'reset_token'
    ];

    protected $fillable = [
        'apellido',
        'confirmation_token',
        'email',
        'enabled',
        'nombre',
        'password',
        'reset_token',
        'username',
        'id_empresa',
        'google_id'
    ];

    public function perfilEstudiante()
    {
        return $this->hasOne(PerfilEstudiante::class, 'usuario_id');
    }
}
