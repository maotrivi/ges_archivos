<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class secretaria extends Model
{
    use HasFactory;

    protected $table = 'secretaria'; // Nombre de la tabla en la base de datos
    protected $fillable = ['name', 'archive', 'description'];
}
