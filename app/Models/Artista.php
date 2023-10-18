<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = 'artistas';
    use HasFactory;

    public function generos(){
        return $this->belongsTo(Genero::class);
    }
    public function canciones(){
        return $this->belongsTo(Cancion::class);
    }

    public function eventos(){
        return $this->belongsToMany(Evento::class, 'pivot_eventos_artistas', 'evento_id', 'artista_id');
    }

}
