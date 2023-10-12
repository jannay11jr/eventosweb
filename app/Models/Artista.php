<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = 'canciones';
    use HasFactory;

    public function generos(){
        return $this->belongsTo(Genero::class);
    }
    public function canciones(){
        return $this->belongsTo(Cancion::class);
    }
}
