<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entrada extends Model
{
    protected $table = 'entradas';
    use HasFactory;

    public function eventos(){
        return $this->belongsTo(Evento::class);
    }

    public function compras(){
        return $this->belongsTo(Compra::class);
    }
}
