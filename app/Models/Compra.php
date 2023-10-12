<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    protected $table = 'compras';

    use HasFactory;

    public function entradas(){
        return $this->hasMany(Entrada::class);
    }

    public function usuarios(){
        return $this->belongsTo(Usuario::class);
    }
}
