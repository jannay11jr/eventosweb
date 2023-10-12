<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{

    protected $table = 'generos';
    use HasFactory;

    public function artistas(){
        return $this->hasOne(Rol::class);
    }
}
