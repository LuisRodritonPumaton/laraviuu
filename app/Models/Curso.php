<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function docente(){
        return $this->hasOne(Docente::class, 'id', 'id_docente');
    }
}
