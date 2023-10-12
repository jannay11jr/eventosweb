<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $table = 'eventos';
    use HasFactory;

    public function artistas(){
        return $this->hasMany(Artista::class);
    }

    public function entradas(){
        return $this->belongsTo(Entrada::class);
    }
}
