<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Empresa extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
        'razon_social',
        'nombre_comercial',
        'ruc',
        'email',
        'telefono',
        'direccion',
        'activa',
    ];

    public function usuarios()
    {
        return $this->hasMany(User::class);
    }
}