<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EjemplarUsuario extends Model
{
    use HasFactory;
    public function usuario (){
        return $this->belongsToMany('App\Models\Usuario');
    }
    public function ejemplar (){
        return $this->belongsToMany('App\Models\Ejemplar');
    }
}
