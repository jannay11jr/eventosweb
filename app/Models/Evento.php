<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    use HasFactory;

    public function artistas(){
        return $this->belongsToMany(Artista::class, 'pivot_eventos_artistas', 'artista_id', 'evento_id');
    }

    public function entradas(){
        return $this->hasMany(Entrada::class);
    }
}
