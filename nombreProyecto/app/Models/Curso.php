<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    //Relacion
    public function Seccion(){
        return $this->hasMany(Seccion::class);
    }


}