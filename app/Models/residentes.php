<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class residentes extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'apellido', 'telefono', 'correo', 'edad', 'direccion', 'comida_entregada', 'observaciones'];
    
}
